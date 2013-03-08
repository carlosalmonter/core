<?php
require_once dirname(__FILE__) . "/../../../site/loaders/test.php";
class TestSpecs extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Test');
        $suite->addTestSuite('when_creating_test');
        return $suite;
    }
}

abstract class observes_test_for_test_concern extends PHPUnit_Framework_TestCase {

    /**
     * @var $_sut test
     */
    protected $_sut;

    public function setUp() {
        $this->_sut = new test();
    }
}

class when_creating_test extends observes_test_for_test_concern {

    public function setUp() {
        parent::setUp();
    }

    public function test_it_return_true() {

    }
}