<?php
require_once(dirname(__FILE__). "/../i_content.php");
abstract class Page implements IContent{

    private $templateName;
    private $pageType;
    private $modules;
    private $section;
    protected $moduleLoader;

    protected  function __construct($section, $pageType, $templateName, ModuleLoader $moduleLoader = null){
        $this->section = $section;
        $this->pageType = $pageType;
        $this->modules = array();
        $this->moduleLoader = is_null($moduleLoader)? new ModuleLoader() : $moduleLoader;
        $this->templateName = $templateName;
    }

    public function getHtml()
    {
        $html = "";
        ob_start();
        $section = $this->section;
        $modulesHtml = $this->getModulesHtml();
        include(dirname(__FILE__) . "/page_types/{$this->pageType}/templates/{$this->templateName}.tpl.php");
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    private function getModulesHtml(){
        $modulesHtml = array();
        foreach($this->modules as $key=>$modules){
            $modulesHtml[$key] = "";
            foreach($modules as $module){
                $modulesHtml[$key] .= $module->getHtml();
            }
        }
        return $modulesHtml;
    }

    protected function addModuleTo($position, Module $module){
        $this->modules[$position] []= $module;
    }
}