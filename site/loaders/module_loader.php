<?php
require_once dirname(__FILE__) . "/loader.php";
require_once dirname(__FILE__) . "/../content/modules/module_data.php";
require_once dirname(__FILE__) . "/../content/modules/module_types.php";
require_once  dirname(__FILE__) . "/../libraries/mappers/module_data_mapper.php";
class ModuleLoader
{
    private $loader;
    public function __construct(Loader $loader = null){
        $this->loader = is_null($loader)? new Loader(): $loader;
    }

    private function loadModule($type, ModuleData $moduleData){
        return $this->loader->load($type , "module", $type."/",$moduleData);
    }

    public function loadModulesFor($section){
        $modules = array();
        $modulesData = $this->getModulesDataFor($section);
        /**
         * @var $moduleData ModuleData
         */
        foreach($modulesData as $moduleData){
            $modules []= $this->loadModule($moduleData->getType(), $moduleData);
        }
        return $modules;
    }

    private function getModulesDataFor($section){
        $moduleDataMapper = new ModuleDataMapper();
        $moduleData = $moduleDataMapper->mapFor($section);
        $header = new ModuleData();
        $header->setType(ModuleTypes::HEADER);
        $header->setPosition("header");
        $header->setData("header");
        $footer = new ModuleData();
        $footer->setType(ModuleTypes::FOOTER);
        $footer->setPosition("footer");
        $footer->setData("footer");
        return $moduleData;
    }
}



