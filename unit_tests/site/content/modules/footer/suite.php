<?php
require_once dirname(__FILE__) . "/footer_specs.php";
class Site_Content_Modules_Footer_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules_Footer');
        $suite->addTestSuite(Site_Content_Modules_Footer_FooterSpecs::suite());
        return $suite;
    }
}