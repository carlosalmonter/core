<?php
require_once dirname(__FILE__) . "/../../content/pages/page_data.php";
require_once dirname(__FILE__) . "/../database/database.php";
class PageDataMapper{
    private $database;
    public function __construct(Database $database = null){
        $this->database = is_null($database)? new Database(): $database;
    }

    public function mapFor($section){
        $results = $this->getPageDataFromDBFor($section);
        return $this->map($results[0]);
    }

    private function getPageDataFromDBFor($section){
        $sql = "SELECT p.name, pt.type, st.type as section FROM core.pages_types pt
                JOIN core.pages p ON p.page_type_id = pt.id
                JOIN core.sections s ON s.id = p.section_id
                JOIN core.sections_types st ON st.id = s.section_type_id
                WHERE st.type = '{$section}'";
        return $this->database->execute($sql);
    }

    private function map($result){

        $pageData = new PageData();
        $pageData->setName($result->name);
        $pageData->setType($result->type);
        $pageData->setSection($result->section);
        return $pageData;
    }
}