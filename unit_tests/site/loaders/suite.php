<?php
//require_once 'PHPUnit/Framework.php';
 
require_once 'Framework/AssertTest.php';
// ...
 
class Framework_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHPUnit Framework');
 
        $suite->addTestSuite('Framework_AssertTest');
        // ...
 
        return $suite;
    }
}
?>