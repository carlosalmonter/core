<?php
require_once dirname(__FILE__) . "/../../../site/loaders/module_loader.php";
require_once dirname(__FILE__) . "/../../../site/libraries/helpers/string_helper.php";
class Site_Loaders_ModuleLoaderSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Loaders_ModuleLoader');
        $suite->addTestSuite('when_creating_a_module_loader');
        return $suite;
    }
}

abstract class observes_Loader_for_ModuleLoader_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut ModuleLoader
     */
    protected $_sut;

    private $loaderMock;
    private $moduleMock;

    public function setUp() {
        $this->moduleMock = $this->getMockBuilder("Module")->disableOriginalConstructor()->getMockForAbstractClass();
        $this->loaderMock = $this->getMockBuilder("Loader")->disableOriginalConstructor()->setMethods(array("load"))->getMock();
        $this->loaderMock->expects($this->any())->method("load")->will($this->returnValue($this->moduleMock));
        $this->_sut = new ModuleLoader($this->loaderMock);
    }
}

class when_creating_a_module_loader extends observes_Loader_for_ModuleLoader_concern {
    private $modules;
    public function setUp() {
        parent::setUp();
        $this->modules = $this->_sut->loadModulesFor("test");
    }

    public function test_it_should_correctly_load_a_module() {
        foreach($this->modules as $module){
            $this->assertInstanceOf("Module", $module);
        }
    }
}