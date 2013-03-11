<?php
require_once dirname(__FILE__) . "/module_loader_specs.php";
require_once dirname(__FILE__) . "/page_loader_specs.php";
require_once dirname(__FILE__) . "/loader_specs.php";
class Site_Loaders_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Loaders');
        $suite->addTestSuite(Site_Loaders_ModuleLoaderSpecs::suite());
        $suite->addTestSuite(Site_Loaders_PageLoaderSpecs::suite());
        $suite->addTestSuite(Site_Loaders_LoaderSpecs::suite());
        return $suite;
    }
}