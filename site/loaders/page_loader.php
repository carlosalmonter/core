<?php
require_once(dirname(__FILE__) . "/loader.php");
class PageLoader extends Loader {
    private function __construct(){}
    public static function loadPage(PageData $pageData){
        return parent::load($pageData->getType()."_page", "page", "", $pageData);
    }
}

class PageTypes{
    const GENERIC = "generic";
    private function __construct(){}
    public static function getTypes(){
        return ClassHelper::getClassConstantsList(__CLASS__);
    }
}