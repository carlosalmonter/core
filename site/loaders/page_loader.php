<?php
require_once(dirname(__FILE__) . "/loader.php");
require_once(dirname(__FILE__) . "/../content/pages/page_types.php");
class PageLoader{
    private $loader;
    public function __construct(Loader $loader = null){
        $this->loader = is_null($loader)? new Loader(): $loader;
    }
    public function loadPage(PageData $pageData){
        return $this->loader->load($pageData->getType()."_page", "page", "", $pageData);
    }
}

