<?php
require_once dirname(__FILE__) . "/helpers/suite.php";
class Site_Libraries_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Libraries');
        $suite->addTestSuite(Site_Libraries_Helpers_Suite::suite());
        return $suite;
    }
}