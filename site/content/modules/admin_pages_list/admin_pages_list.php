<?php
require_once dirname(__FILE__) . "/../module.php";
class AdminPagesList extends Module{
    public function __construct(ModuleData $moduleData){
        $moduleData->setData($this->getPageListData());
        parent::__construct($moduleData);
    }

    private function getPageListData()
    {
        $data = new stdClass();
        $data->id = "1";
        $data->name = "Admin Page";
        $data->author = "Admin";
        $data->section = "admin";
        $data->pageType = "two_columns_page";
        return json_encode(array($data));
    }
}