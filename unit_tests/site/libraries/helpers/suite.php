<?php
require_once dirname(__FILE__) . "/array_helper_specs.php";
class Site_Libraries_Helpers_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Libraries_Helpers');
        $suite->addTestSuite(Site_Libraries_Helpers_ArrayHelperSpecs::suite());
        return $suite;
    }
}