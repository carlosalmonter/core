<?php
require_once(dirname(__FILE__). "/../i_content.php");
abstract class Page implements IContent{

    private $templateName;
    private $content = array();

    protected  function __construct($pageData, $templateName){
        $this->templateName = $templateName;
        $this->buildPage($pageData);
    }

    public function getHtml()
    {
        $html = "";
        $content = $this->content;
        ob_start();
        include(dirname(__FILE__) . "/templates/{$this->templateName}.tpl.php");
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    protected function setContent($content){
        $this->content = $content;
    }

    protected  abstract function buildPage(PageData $pageData);
}