<?php
require_once(dirname(__FILE__) . "/../i_content.php");

abstract class Module implements IContent
{

    protected function __construct(){
    }

    public function getHtml()
    {
        $html = "wepa";
//        ob_start();
//        include(dirname(__FILE__). "/{$this->moduleType}/templates/{$this->templateName}.tpl.php");
//        $html = ob_get_contents();
//        ob_clean();
        return $html;
    }

//    public function getType(){
//        return $this->moduleType;
//    }
//
//    public function getModulePosition()
//    {
//        return $this->modulePosition;
//    }
//
//    public function getModuleData()
//    {
//        return $this->moduleData;
//    }
}


