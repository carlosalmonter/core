<?php
require_once(dirname(__FILE__) . "/../i_content.php");
abstract class Module implements IContent
{
    private $templateName;
    private $moduleType;
    private $modulePosition;
    private $moduleData;

    protected function __construct($moduleData){
        $this->templateName = "generic";
        $this->moduleType = $moduleData->type;
        $this->modulePosition = $moduleData->position;
        $this->moduleData = $moduleData->data;
    }
    public function getHtml()
    {
        $html = "";
        ob_start();
        include(dirname(__FILE__). "/{$this->moduleType}/templates/{$this->templateName}.tpl.php");
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    public function getType(){
        return $this->moduleType;
    }

    public function getModulePosition()
    {
        return $this->modulePosition;
    }

    public function getModuleData()
    {
        return $this->moduleData;
    }

    public function setTemplateName($templateName){

    }
}


