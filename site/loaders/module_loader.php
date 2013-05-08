<?php
require_once dirname(__FILE__) . "/loader.php";
class ModuleLoader
{
    private $loader;
    public function __construct(Loader $loader = null){
        $this->loader = is_null($loader)? new Loader(): $loader;
    }


    public function load($module){
        return $this->loader->load($module, "module" , $module."/");
    }

}



