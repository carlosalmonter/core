<?php
require_once dirname(__FILE__) . "/../../../../site/libraries/helpers/class_helper.php";
require_once dirname(__FILE__) . "/../../../../site/content/modules/module_types.php";
class Site_Content_Modules_ModuleTypesSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules_ModuleTypes');
        $suite->addTestSuite('when_getting_module_types');
        return $suite;
    }
}

abstract class observes_ModuleTypes_for_ModuleTypes_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut ModuleTypes
     */
    protected $_sut;

    public function setUp() {
        $this->_sut = new ModuleTypes();
    }
}

class when_getting_module_types extends observes_ModuleTypes_for_ModuleTypes_concern {
    private $types;
    public function setUp() {
        parent::setUp();
        $this->types = $this->_sut->getTypes();
    }

    public function test_it_should_return_correct_values() {
        $this->assertEquals("header", $this->types["HEADER"]);
        $this->assertEquals("footer", $this->types["FOOTER"]);
    }
}