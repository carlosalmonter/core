<?php
require_once(dirname(__FILE__) . "/loader.php");
require_once(dirname(__FILE__) . "/../content/modules/module_data.php");
require_once(dirname(__FILE__) . "/../content/modules/module_types.php");
class ModuleLoader
{
    private $loader;
    public function __construct(Loader $loader = null){
        $this->loader = is_null($loader)? new Loader(): $loader;
    }

    private function loadModule($type, ModuleData $moduleData){
        return $this->loader->load($type , "module", $type."/",$moduleData);
    }

    public function loadModulesFor($page){
        $modules = array();
        $modulesData = $this->getModulesDataFor($page);
        /**
         * @var $moduleData ModuleData
         */
        foreach($modulesData as $moduleData){
            $modules []= $this->loadModule($moduleData->getType(), $moduleData);
        }
        return $modules;
    }

    private function getModulesDataFor($page){
        $header = new ModuleData();
        $header->setType(ModuleTypes::HEADER);
        $header->setPosition("header");
        $header->setData("header");
        $footer = new ModuleData();
        $footer->setType(ModuleTypes::FOOTER);
        $footer->setPosition("footer");
        $footer->setData("footer");
        return array($header, $footer);
    }
}



