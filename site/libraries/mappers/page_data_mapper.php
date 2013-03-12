<?php
require_once dirname(__FILE__) . "/../../content/pages/page_data.php";
require_once dirname(__FILE__) . "/../database/database.php";
class PageDataMapper{
    private $database;
    public function __construct(Database $database = null){
        $this->database = is_null($database)? new Database(): $database;
    }

    public function mapFor($section){
        $pageDataArray = array();
        $where = "section_id = 1";
        $results = $this->database->selectAllFrom("pages", $where);
        $this->map()
        return null;

    }

    private function map(){

    }
}