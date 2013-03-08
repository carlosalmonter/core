<?php
class Site_Loaders_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Loaders');
        return $suite;
    }
}