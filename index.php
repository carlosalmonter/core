<?php
require_once(dirname(__FILE__) . "/site/helpers/string_helper.php");
require_once(dirname(__FILE__) . "/site/loaders/js_loader.php");
require_once(dirname(__FILE__) . "/site/loaders/page_loader.php");
require_once(dirname(__FILE__) . "/site/loaders/module_loader.php");


$pageUrlParams = explode( "/", $_SERVER["REQUEST_URI"]);
$requestPage = strtolower($pageUrlParams[2]);
if($requestPage == "admin"){
    $pageData = new stdClass();
    $pageData->name = "admin";
    $pageData->type = PageTypes::GENERIC;
    /**
     * @var $page Page
     */
    $page = PageLoader::loadPage($pageData);
    echo $page->getHtml();
}else{
    echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
}

