<?php
require_once dirname(__FILE__) . "/footer/suite.php";
require_once dirname(__FILE__) . "/header/suite.php";
require_once dirname(__FILE__) . "/module_data_specs.php";
class Site_Content_Modules_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules');
        $suite->addTestSuite(Site_Content_Modules_Footer_Suite::suite());
        $suite->addTestSuite(Site_Content_Modules_Header_Suite::suite());
        $suite->addTestSuite(Site_Content_Modules_ModuleDataSpecs::suite());
        return $suite;
    }
}