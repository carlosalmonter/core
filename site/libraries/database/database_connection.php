<?php
require_once dirname(__FILE__) . "/../config/database_config.php";
class DatabaseConnection{
    private $config;
    public function __construct(DatabaseConfig $databaseConfig = null){
        $databaseConfig = is_null($databaseConfig)? new DatabaseConfig(): $databaseConfig;
        $this->config = $databaseConfig->getDbConfigFor();
    }

    public function getDbConnection(){
        $connection = new mysqli($this->config["host"], $this->config["username"], $this->config["password"]);
        if (mysqli_connect_error())
        {
            echo "Failed to connect to MySQL: ";
            return null;
        }
        return $connection;
    }
}