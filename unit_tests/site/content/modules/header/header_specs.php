<?php
require_once dirname(__FILE__) . "/../../../../../site/content/modules/header/header.php";
class Site_Content_Modules_Header_HeaderSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules_Header_Header');
        $suite->addTestSuite('when_creating_a_header_object');
        return $suite;
    }
}

abstract class observes_Module_for_Header_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut Module
     */
    protected $_sut;
    private $moduleDataMock;
    public function setUp() {
        $this->moduleDataMock = $this->getMockBuilder("ModuleData")->disableOriginalConstructor()->setMethods(array(
            "getType",
            "getPosition",
            "getData",
        ))->getMock();
        $this->moduleDataMock->expects($this->any())->method("getType")->will($this->returnValue("header"));
        $this->moduleDataMock->expects($this->any())->method("getPosition")->will($this->returnValue("header"));
        $this->moduleDataMock->expects($this->any())->method("getData")->will($this->returnValue("header"));
        $this->_sut = new Header($this->moduleDataMock);
    }
}

class when_creating_a_header_object extends observes_Module_for_Header_concern {
    private $content;
    public function setUp() {
        parent::setUp();
        $this->content = $this->_sut->getHtml();
    }

    public function test_it_should_contain_contain_correct_data() {
        $this->assertContains("This is the header", $this->content);
    }
}
