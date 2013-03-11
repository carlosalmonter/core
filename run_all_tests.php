<?php
$coreSuitePath = dirname(__FILE__) . "/unit_tests/suite.php";
$coverage = "";
$phpUnitPath = dirname(__FILE__) . "/vendor/bin/phpunit ";
if(isset($argv[1]) && $argv[1] == "-c"){
    $coverage = "-c phpunit_config.xml --coverage-html ./unit_tests/coverage/ ";
}
$command = $phpUnitPath . $coverage . $coreSuitePath;
echo shell_exec($command);