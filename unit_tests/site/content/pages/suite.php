<?php
require_once dirname(__FILE__) . "/page_data_specs.php";
require_once dirname(__FILE__) . "/generic_page/suite.php";
require_once dirname(__FILE__) . "/page_types_specs.php";
class Site_Content_Pages_Suite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Pages');
        $suite->addTestSuite(Site_Content_Pages_PageDataSpecs::suite());
        $suite->addTestSuite(Site_Content_Pages_GenericPage_Suite::suite());
        $suite->addTestSuite(Site_Content_Pages_PageTypesSpecs::suite());
        return $suite;
    }
}