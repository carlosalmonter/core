<?php
require_once(dirname(__FILE__) . "/loader.php");
class ModuleLoader extends Loader
{
    private function __construct(){}

    private function loadModule($type, $moduleData){
        return parent::load($type , "module", $type."/",$moduleData);
    }

    public static function loadModulesFor($page){
        $modules = array();
        $modulesData = self::getModulesDataFor($page);
        foreach($modulesData as $moduleData){
            $modules []= self::loadModule($moduleData->type, $moduleData);
        }
        return $modules;
    }

    private function getModulesDataFor($page){
        $header = new stdClass();
        $header->type = ModuleTypes::HEADER;
        $header->position = "header";
        $header->data = "header";
        $footer = new stdClass();
        $footer->type = ModuleTypes::FOOTER;
        $footer->position = "footer";
        $footer->data = "footer";
        return array($header, $footer);
    }
}

class ModuleTypes{
    const HEADER = "header";
    const FOOTER = "footer";
    private function __construct(){}
}

