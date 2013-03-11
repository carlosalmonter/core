<?php
require_once  dirname(__FILE__) . "/../../../site/loaders/page_loader.php";
class Site_Loaders_PageLoaderSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Site_Loaders_PageLoader');
        $suite->addTestSuite('when_creating_a_page_loader');
        return $suite;
    }
}

abstract class observes_PageLoader_for_PageLoader_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut PageLoader
     */
    protected $_sut;
    protected $_pageDataMock;
    private $loaderMock;
    private $pageMock;
    public function setUp() {
        $this->pageMock = $this->getMockBuilder("Page")->disableOriginalConstructor()->getMockForAbstractClass();
        $this->loaderMock = $this->getMockBuilder("Loader")->disableOriginalConstructor()->setMethods(array("load"))->getMock();
        $this->loaderMock->expects($this->any())->method("load")->will($this->returnValue($this->pageMock));
        $this->_pageDataMock = $this->getMockBuilder("PageData")->disableOriginalConstructor()->setMethods(array("getType"))->getMock();
        $this->_pageDataMock->expects($this->any())->method("getType")->will($this->returnValue("test"));
        $this->_sut = new PageLoader($this->loaderMock);
    }
}

class when_creating_a_page_loader extends observes_PageLoader_for_PageLoader_concern {
    private $page;
    public function setUp() {
        parent::setUp();
        $this->page = $this->_sut->loadPage($this->_pageDataMock);
    }

    public function test_it_should_correctly_load_a_page() {
        $this->assertInstanceOf("Page", $this->page);
    }
}