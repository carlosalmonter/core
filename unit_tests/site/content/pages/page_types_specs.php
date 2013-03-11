<?php
require_once dirname(__FILE__) . "/../../../../site/content/pages/page_types.php";
require_once dirname(__FILE__) . "/../../../../site/libraries/helpers/class_helper.php";
class Site_Content_Pages_PageTypesSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Pages_PageTypes');
        $suite->addTestSuite('when_getting_page_types');
        return $suite;
    }
}

abstract class observes_PageTypes_for_PageTypes_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut PageTypes
     */
    protected $_sut;

    public function setUp() {
        $this->_sut = new PageTypes();
    }
}

class when_getting_page_types extends observes_PageTypes_for_PageTypes_concern {
    private $types;
    public function setUp() {
        parent::setUp();
        $this->types = $this->_sut->getTypes();
    }

    public function test_it_should_return_correct_types() {
        $this->assertEquals("generic", $this->types["GENERIC"]);
    }
}