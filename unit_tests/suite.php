<?php
require_once "site/suite.php";
class Core_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Core');
        $suite->addTestSuite(Site_Suite::suite());
        return $suite;
    }
}