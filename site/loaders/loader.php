<?php
abstract class Loader{
    protected function load($item, $type, $innerPath = "", $param = null){
        require_once(dirname(__FILE__)."/../content/{$type}s/{$innerPath}{$item}.php");
        $class = StringHelper::fileToClassName($item);
        return new $class($param);
    }
}