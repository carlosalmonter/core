<?php
require_once dirname(__FILE__) . "/database_connection.php";
class Database{
    private $databaseConnection;
    public function __construct(DatabaseConnection $databaseConnection = null){
        $this->databaseConnection = is_null($databaseConnection)? new DatabaseConnection(): $databaseConnection;
    }

    private function query($sql){
        $connection = $this->databaseConnection->getDbConnection();
        $results = $connection->query($sql);
        $connection->close();
        $rows = array();
        while($row = $results->fetch_assoc()){
            $rows []= $this->mapToStdClass($row);
        }
        return $rows;
    }

    private function mapToStdClass($rows){
        $object = new stdClass();
        foreach($rows as $key => $value){
            $object->$key = $value;
        }
        return $object;
    }

    public function select($columns = array(), $table, $where = null){
        $columns = implode(", ", $columns);
        $where = is_null($where)? "": " WHERE {$where}";
        $results = $this->query("SELECT {$columns} FROM core.{$table}{$where};");
        return $results;
    }

    public function selectAllFrom($table, $where = null){
        $where = is_null($where)? "": " WHERE {$where}";
        $results = $this->query("SELECT * FROM core.{$table}{$where};");
        return $results;
    }

    public function execute($sql){
        return $this->query($sql);
    }
}