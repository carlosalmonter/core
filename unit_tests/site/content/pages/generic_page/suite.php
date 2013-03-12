<?php
require_once dirname(__FILE__) . "/generic_page_specs.php";
class Site_Content_Pages_GenericPage_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Pages_GenericPage');
        $suite->addTestSuite(Site_Content_Pages_GenericPageSpecs::suite());
        return $suite;
    }
}