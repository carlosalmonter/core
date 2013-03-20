<?php
require_once dirname(__FILE__) . "/../../libraries/helpers/string_helper.php";
require_once dirname(__FILE__) . "/../../loaders/module_loader.php";

$moduleId = $_POST["moduleId"];
$moduleLoader = new ModuleLoader();
/**
 * @var $module Module
 */
$module = $moduleLoader->loadModuleForId($moduleId);

echo json_encode(
    array(
        "success" => true,
        "moduleHtml" => $module->getHtml()
    )
);
