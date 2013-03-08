<?php
require_once dirname(__FILE__) . "/header_specs.php";
class Site_Content_Modules_Header_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules_Header');
        $suite->addTestSuite(Site_Content_Modules_Header_HeaderSpecs::suite());
        return $suite;
    }
}