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

    public function loadModuleForId($id){
        /**
         * @var $moduleData ModuleData
         */
        $moduleData = $this->getModuleDataForId($id);
        return $this->loadModule($moduleData->getType(), $moduleData);
    }

    private function getModulesDataFor($section){
        $moduleDataMapper = new ModuleDataMapper();
        $moduleData = $moduleDataMapper->mapFor($section);
        return $moduleData;
    }

    private function getModuleDataForId($id)
    {
        $moduleDataMapper = new ModuleDataMapper();
        $moduleData = $moduleDataMapper->mapForId($id);
        return $moduleData[0];
    }
}



