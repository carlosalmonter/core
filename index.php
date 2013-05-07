<?php
require_once dirname(__FILE__) . "/site/libraries/helpers/string_helper.php";
require_once dirname(__FILE__) . "/site/libraries/helpers/array_helper.php";
require_once dirname(__FILE__) . "/site/libraries/helpers/class_helper.php";
require_once dirname(__FILE__) . "/site/loaders/css_loader.php";
require_once dirname(__FILE__) . "/site/loaders/js_loader.php";
require_once dirname(__FILE__) . "/site/loaders/section_loader.php";
require_once dirname(__FILE__) . "/site/loaders/page_loader.php";
require_once dirname(__FILE__) . "/site/loaders/module_loader.php";
require_once dirname(__FILE__) . "/site/content/pages/page_data.php";
?>
<head>
    <?php
    $cssLoader = new CSSLoader();
    $cssLoader->loadCSSFiles();
    ?>
</head>
<?php
$pageUrlParams = explode( "/", $_SERVER["REQUEST_URI"]);
$requestPage = strtolower($pageUrlParams[2]);
$sectionLoader = new SectionLoader();
if(in_array($requestPage, $sectionLoader->getSectionsTypes())){
    $pageLoader = new PageLoader();
    /**
     * @var $page Page
     */
    $page = $pageLoader->load($requestPage);
    echo $page->getHtml();
}else{
    echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
    header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found', true, 404);
    exit;
}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php
$jsLoader = new JsLoader();
$jsLoader->loadJSFiles();
?>


