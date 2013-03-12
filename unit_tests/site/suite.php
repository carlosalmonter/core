<?php
require_once dirname(__FILE__) . "/content/suite.php";
require_once dirname(__FILE__) . "/loaders/suite.php";
require_once dirname(__FILE__) . "/libraries/suite.php";
class Site_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site');
        $suite->addTestSuite(Site_Content_Suite::suite());
        $suite->addTestSuite(Site_Loaders_Suite::suite());
        $suite->addTestSuite(Site_Libraries_Suite::suite());
        return $suite;
    }
}