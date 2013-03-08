<?php
require_once dirname(__FILE__) . "/../../../../site/content/modules/module_data.php";
class Site_Content_Modules_ModuleDataSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules_ModuleData');
        $suite->addTestSuite('when_creating_a_module_data_object');
        return $suite;
    }
}

abstract class observes_ModuleData_for_ModuleData_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut ModuleData
     */
    protected $_sut;

    public function setUp() {
        $this->_sut = new ModuleData();
        $this->_sut->setType("TYPE");
        $this->_sut->setPosition("POSITION");
        $this->_sut->setData("DATA");
    }
}

class when_creating_a_module_data_object extends observes_ModuleData_for_ModuleData_concern {
    private $type;
    private $position;
    private $data;
    public function setUp() {
        parent::setUp();
        $this->type = $this->_sut->getType();
        $this->position = $this->_sut->getPosition();
        $this->data = $this->_sut->getData();
    }

    public function test_it_should_return_correct_attributes_data() {
        $this->assertEquals("TYPE", $this->type);
        $this->assertEquals("POSITION", $this->position);
        $this->assertEquals("DATA", $this->data);
    }
}