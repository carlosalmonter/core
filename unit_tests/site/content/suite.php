<?php
require_once dirname(__FILE__) . "/modules/suite.php";
require_once dirname(__FILE__) . "/pages/suite.php";
class Site_Content_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content');
        $suite->addTestSuite(Site_Content_Modules_Suite::suite());
        $suite->addTestSuite(Site_Content_Pages_Suite::suite());
        return $suite;
    }
}