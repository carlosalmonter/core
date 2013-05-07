<?php
require_once(dirname(__FILE__). "/page_types/page_types.php");
require_once(dirname(__FILE__). "/../i_content.php");
abstract class Page implements IContent{

    private $templateName;
    private $pageType;
    private $modules;
    protected $moduleLoader;

    protected  function __construct($pageType, $templateName, ModuleLoader $moduleLoader = null){
        $this->pageType = $pageType;
        $this->modules = array();
        $this->moduleLoader = is_null($moduleLoader)? new ModuleLoader() : $moduleLoader;
        $this->templateName = $templateName;
    }

    public function getHtml()
    {
        $html = "";
        ob_start();
        $modules = $this->modules;
        include(dirname(__FILE__) . "/page_types/{$this->pageType}/templates/{$this->templateName}.tpl.php");
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    protected function addModuleTo($position, Module $module){
        $this->modules[$position] []= $module;
    }
}