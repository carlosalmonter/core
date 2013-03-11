<?php
require_once(dirname(__FILE__) . "/page.php");
class GenericPage extends Page
{
    private $moduleLoader;
    public function __construct(PageData $pageData, ModuleLoader $moduleLoader = null){
        $this->moduleLoader = is_null($moduleLoader)? new ModuleLoader() : $moduleLoader;
        parent::__construct($pageData, "generic");
    }

    protected function buildPage(PageData $pageData)
    {
        $pageContent = array();
        $modules = $this->moduleLoader->loadModulesFor($pageData->getName());
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

    public static function getPageModuleContainersPositions()
    {
        return array(
            "header",
            "content",
            "footer"
        );
    }
}
