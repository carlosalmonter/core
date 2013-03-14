<?php
require_once dirname(__FILE__) . "/../../content/modules/module_data.php";
require_once dirname(__FILE__) . "/../database/database.php";
class ModuleDataMapper{
    private $database;
    public function __construct(Database $database = null){
        $this->database = is_null($database)? new Database(): $database;
    }

    public function mapFor($section){
        $modulesData = array();
        $results = $this->getModuleDataFromDBFor($section);
        foreach($results as $result){
            $modulesData []= $this->map($result);
        }
        return $modulesData;
    }

    private function getModuleDataFromDBFor($section){
        $sql = "SELECT mt.type, m.data, m.position FROM core.modules_types mt
                JOIN core.modules m ON m.module_type_id = mt.id
                JOIN core.sections s ON s.id = m.section_id
                JOIN core.sections_types st ON st.id = s.section_type_id
                WHERE st.type = '{$section}'";
        return $this->database->execute($sql);
    }

    private function map($result){
//        var_dump($result);
        $moduleData = new ModuleData();
        $moduleData->setType($result->type);
        $moduleData->setPosition($result->position);
        $moduleData->setData($result->data);
        return $moduleData;
    }
}