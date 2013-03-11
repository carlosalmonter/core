<?php
class ClassHelper{
    public static function getClassConstantsList($className){
        $class = new ReflectionClass($className);
        return $class->getConstants();
    }
}