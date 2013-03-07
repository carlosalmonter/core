<?php
class Database{
    private $dbConfig = array();
    public function __construct(){
        $this->dbConfig['default'] = array(
            "username" => "root",
            "password" => "",
            "host" => "127.0.0.1"
        );
    }

    public function getDbConfigFor($type = 'default'){
        return $this->dbConfig[$type];
    }
}