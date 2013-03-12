<?php
require_once dirname(__FILE__) . "/loader.php";
require_once dirname(__FILE__) . "/../libraries/mappers/page_data_mapper.php";
class PageLoader{
    private $loader;
    private $database;
    public function __construct(Loader $loader = null, Database $database = null){
        $this->loader = is_null($loader)? new Loader(): $loader;
        $this->database = is_null($database)? new Database(): $database;
    }
    private function loadPage(PageData $pageData){
        return $this->loader->load($pageData->getType()."_page", "page", $pageData->getType()."_page/", $pageData);
    }

    public function loadPageFor($section){
        $pageData = $this->getPageDataFor($section);
        return $this->loadPage($pageData);
    }

    private function getPageDataFor($section){
        $pageDataMapper = new PageDataMapper();
        $pageData = $pageDataMapper->mapFor($section);
        return $pageData;
    }
}

