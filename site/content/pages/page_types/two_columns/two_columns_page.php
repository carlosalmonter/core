<?php
require_once dirname(__FILE__) . "/../../page.php";

abstract class TwoColumnsPage extends Page{
    public function __construct(){
        parent::__construct(PageTypes::TWOCOLUMNS, "generic");
        $this->buildPage();
    }

    protected function addModuleToHeader(Module $module){
        $this->addModuleTo("header", $module);
    }

    protected function addModuleToFooter(Module $module){
        $this->addModuleTo("footer", $module);
    }

    protected function addModuleToRightColumn(Module $module){
        $this->addModuleTo("right_column", $module);
    }

    protected function addModuleToLeftColumn(Module $module){
        $this->addModuleTo("left_column", $module);
    }

    protected abstract function buildPage();
}