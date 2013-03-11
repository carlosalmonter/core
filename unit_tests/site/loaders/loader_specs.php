<?php
require_once dirname(__FILE__) . "/../../../site/loaders/loader.php";
class Site_Loaders_LoaderSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Loaders_Loader');
        $suite->addTestSuite('when_creating_a_loader');
        return $suite;
    }
}

abstract class observes_Loader_for_Loader_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut Loader
     */
    protected $_sut;
    protected $_moduleDataMock;
    public function setUp() {
        $this->_moduleDataMock = $this->getMockBuilder("ModuleData")->disableOriginalConstructor()->getMock();
        $this->_sut = new Loader();
    }
}

class when_creating_a_loader extends observes_Loader_for_Loader_concern {
    private $class;
    public function setUp() {
        parent::setUp();
        $this->class = $this->_sut->load("header", "module", "header/", $this->_moduleDataMock);
    }

    public function test_it_should_load_correct_class() {
        $this->assertInstanceOf("Header", $this->class);
    }
}