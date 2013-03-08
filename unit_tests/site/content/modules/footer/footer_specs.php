<?php
require_once dirname(__FILE__) . "/../../../../../site/content/modules/footer/footer.php";
class Site_Content_Modules_Footer_FooterSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Modules_Footer_Footer');
        $suite->addTestSuite('when_creating_a_footer_module');
        return $suite;
    }
}

abstract class observes_Module_for_Footer_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut Module
     */
    protected $_sut;
    private $moduleDataMock;
    public function setUp() {
        $moduleDataMock = $this->getMockBuilder("ModuleData")->disableOriginalConstructor()->setMethods(array(
            "getType",
            "getPosition",
            "getData"
        ))->getMock();
        $moduleDataMock->expects($this->any())->method("getType")->will($this->returnValue("footer"));
        $moduleDataMock->expects($this->any())->method("getPosition")->will($this->returnValue("footer"));
        $moduleDataMock->expects($this->any())->method("getData")->will($this->returnValue("footer"));
        $this->_sut = new Footer($moduleDataMock);
    }
}

class when_creating_a_footer_module extends observes_Module_for_Footer_concern {
    private $content;
    public function setUp() {
        parent::setUp();
        $this->content = $this->_sut->getHtml();
    }

    public function test_it_should_return_correct_content() {
        $this->assertContains("this is the footer", $this->content);
    }
}