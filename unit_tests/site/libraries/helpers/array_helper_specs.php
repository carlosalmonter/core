<?php
class Site_Libraries_Helpers_ArrayHelperSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Libraries_Helpers_ArrayHelper');
        $suite->addTestSuite('when_creating_an_array_helper');
        return $suite;
    }
}

abstract class observes_ArrayHelper_for_ArrayHelper_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut ArrayHelper
     */
    protected $_sut;
    protected $arrayMock;
    public function setUp() {
        $this->arrayMock = array("index" => "value");
        $this->_sut = new ArrayHelper();
    }
}

class when_creating_an_array_helper extends observes_ArrayHelper_for_ArrayHelper_concern {
    private $result;
    public function setUp() {
        parent::setUp();
        $this->result = $this->_sut->getValueForIndexIfExists($this->arrayMock, "index");
    }

    public function test_it_should_return_a_value_for_an_existent_index() {
        $this->assertEquals("value", $this->result);
    }
}