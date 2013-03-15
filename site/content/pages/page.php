<?php
require_once(dirname(__FILE__). "/../i_content.php");
abstract class Page implements IContent{

    private $templateName;
    private $content = array();
    private $pageData;
    private $moduleLoader;

    protected  function __construct(PageData $pageData, $templateName, ModuleLoader $moduleLoader = null){
        $this->moduleLoader = is_null($moduleLoader)? new ModuleLoader() : $moduleLoader;
        $this->templateName = $templateName;
        $this->buildPage($pageData);
        $this->pageData = $pageData;
    }

    public function getHtml()
    {
        $html = "";
        $content = $this->content;
        $section = $this->pageData->getSection();
        ob_start();
        include(dirname(__FILE__) . "/{$this->pageData->getType()}_page/templates/{$this->templateName}.tpl.php");
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    protected function setContent($content){
        $this->content = $content;
    }

    protected function buildPage(PageData $pageData){
        $pageContent = array();
        $modules = $this->moduleLoader->loadModulesFor($pageData->getSection());
        /**
         * @var $module Module
         */
        foreach($modules as $module){
            $container = $module->getModulePosition();
            $pageContent[$container] = $module->getHtml();
        }
        $this->setContent($pageContent);
        return $this;
    }
}