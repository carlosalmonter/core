<?php
require_once(dirname(__FILE__) . "/page.php");
class GenericPage extends Page
{
    public function __construct($pageData){
        parent::__construct($pageData);
    }

    protected function buildPage($pageData)
    {
        $pageContent = array();
        $modules = ModuleLoader::loadModulesFor($pageData->name);
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
