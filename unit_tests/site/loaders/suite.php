<?php
require_once dirname(__FILE__) . "/" ;
require_once 'PHPUnit/Framework.php';

require_once 'ArrayTest.php';
require_once 'SimpleTestListener.php';
 
// Create a test suite that contains the tests
// from the ArrayTest class.
$suite = new PHPUnit_Framework_TestSuite('ArrayTest');
 
// Create a test result and attach a SimpleTestListener
// object as an observer to it.
$result = new PHPUnit_Framework_TestResult;
$result->addListener(new SimpleTestListener);
 
// Run the tests.
$suite->run($result);
?>