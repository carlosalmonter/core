<?php
require_once "test_specs.php";
class Site_Loaders_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Loaders');
        $suite->addTestSuite(Site_Loaders_TestSpecs::suite());
        return $suite;
    }
}