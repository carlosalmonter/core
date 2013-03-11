<?php
require_once(dirname(__FILE__) . "/site/libraries/helpers/string_helper.php");
require_once(dirname(__FILE__) . "/site/libraries/helpers/array_helper.php");
require_once(dirname(__FILE__) . "/site/libraries/helpers/class_helper.php");
require_once(dirname(__FILE__) . "/site/loaders/js_loader.php");
require_once(dirname(__FILE__) . "/site/loaders/page_loader.php");
require_once(dirname(__FILE__) . "/site/loaders/module_loader.php");
require_once(dirname(__FILE__) . "/site/content/pages/page_data.php");

$pageUrlParams = explode( "/", $_SERVER["REQUEST_URI"]);
$requestPage = strtolower($pageUrlParams[2]);
if($requestPage == "admin"){
    $pageData = new PageData();
    $pageData->setName("admin");
    $pageData->setType(PageTypes::GENERIC);
    $pageLoader = new PageLoader();
    /**
     * @var $page Page
     */
    $page = $pageLoader->loadPage($pageData);
    echo $page->getHtml();
}else{
    echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
}

