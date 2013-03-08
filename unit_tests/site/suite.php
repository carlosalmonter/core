<?php
require_once "content/suite.php";
require_once "loaders/suite.php";
class Site_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site');
        $suite->addTestSuite(Site_Content_Suite::suite());
        $suite->addTestSuite(Site_Loaders_Suite::suite());
        return $suite;
    }
}