<?php
require_once dirname(__FILE__) . "/../../../../site/content/pages/page_data.php";
class Site_Content_Pages_PageDataSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Pages_PageData');
        $suite->addTestSuite('when_creating_a_page_data_object');
        return $suite;
    }
}

abstract class observes_PageData_for_PageData_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut PageData
     */
    protected $_sut;

    public function setUp() {
        $this->_sut = new PageData();
        $this->_sut->setName("admin");
        $this->_sut->setType("generic");
    }
}

class when_creating_a_page_data_object extends observes_PageData_for_PageData_concern {
    private $name;
    private $type;
    public function setUp() {
        parent::setUp();
        $this->name = $this->_sut->getName();
        $this->type = $this->_sut->getType();
    }

    public function test_it_should_return_correct_attributes_values() {
        $this->assertEquals("admin", $this->name);
        $this->assertEquals("generic", $this->type);
    }
}