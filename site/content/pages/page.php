<?php
require_once(dirname(__FILE__). "/../i_content.php");
abstract class Page implements IContent{

    private $templateName;
    private $content = array();
    private $pageData;

    protected  function __construct(PageData $pageData, $templateName){
        $this->templateName = $templateName;
        $this->buildPage($pageData);
        $this->pageData = $pageData;
    }

    public function getHtml()
    {
        $html = "";
        $content = $this->content;
        ob_start();
        include(dirname(__FILE__) . "/{$this->pageData->getType()}_page/templates/{$this->templateName}.tpl.php");
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    protected function setContent($content){
        $this->content = $content;
    }

    protected  abstract function buildPage(PageData $pageData);
}