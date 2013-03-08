<?php
require_once dirname(__FILE__) . "/../../../../site/content/pages/generic_page.php";
class Site_Content_Pages_GenericPageSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Content_Pages_GenericPage');
        $suite->addTestSuite('when_creating_a_generic_page');
        return $suite;
    }
}

abstract class observes_Page_for_GenericPage_concern extends PHPUnit_Framework_TestCase {
    /**
     * @var $_sut Page
     */
    protected $_sut;
    private $pageDataMock;
    private $moduleLoaderMock;
    private $moduleMock;
    public function setUp() {
        $this->setPageDataMock();
        $this->setModuleMock();
        $this->setModuleLoaderMock();
        $this->_sut = new GenericPage($this->pageDataMock, $this->moduleLoaderMock);
    }

    private function setPageDataMock(){
        $this->pageDataMock = $this->getMockBuilder("PageData")->disableOriginalConstructor()->setMethods(array(
            "getName",
            "getType"
        ))->getMock();
        $this->pageDataMock->expects($this->any())->method("getName")->will($this->returnValue("admin"));
        $this->pageDataMock->expects($this->any())->method("getType")->will($this->returnValue("generic"));
    }

    private function setModuleMock(){
        $this->moduleMock = $this->getMockBuilder("Header")->disableOriginalConstructor()->setMethods(array("getHtml"))->getMock();
        $this->moduleMock->expects($this->any())->method("getHtml")->will($this->returnValue("test content"));
    }

    private function setModuleLoaderMock()
    {
        $this->moduleLoaderMock = $this->getMockBuilder("ModuleLoader")->enableOriginalConstructor()->setMethods(array("loadModulesFor"))->getMock();
        $this->moduleLoaderMock->expects($this->any())->method("loadModulesFor")->will($this->returnValue(array($this->moduleMock)));
    }
}

class when_creating_a_generic_page extends observes_Page_for_GenericPage_concern {
    private $content;
    public function setUp() {
        parent::setUp();
        $this->content = $this->_sut->getHtml();
    }

    public function test_it_should_return_correct_content() {
        $this->assertContains(" ", $this->content);
    }
}