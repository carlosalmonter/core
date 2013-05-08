<?php
require_once dirname(__FILE__) . "/../page_types/two_columns/two_columns_page.php";
Class AdminPage extends TwoColumnsPage{
    public function __construct(){
        parent::__construct(Sections::ADMIN);
    }

    protected function buildPage()
    {
        $this->addModuleToLeftColumn($this->moduleLoader->load(ModuleTypes::ADMINMENU));
    }

}