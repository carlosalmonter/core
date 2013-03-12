<?php
require_once dirname(__FILE__) . "/../libraries/database/database.php";
class SectionLoader{
    private $database;
    public function __construct(Database $database = null){
        $this->database = is_null($database)? new Database(): $database;
    }

    public function getSectionsTypes(){
        $results = $this->database->select(array("type"), "sections_types");
        $types = array();
        foreach($results as $result){
            $types []= $result->type;
        }
        return $types;
    }
}