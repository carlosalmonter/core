<?php
require_once dirname(__FILE__) . "/../page_types/two_columns/two_columns_page.php";
Class AdminPage extends TwoColumnsPage{
    public function __construct(){
        parent::__construct();
    }

    protected function buildPage()
    {
        $this->addModuleToLeftColumn($this->moduleLoader->loadModulesFor(ModuleTypes::ADMINMENU));
    }

}