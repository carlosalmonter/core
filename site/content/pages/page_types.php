<?php
class PageTypes{
    const GENERIC = "generic";
    public function __construct(){}
    public static function getTypes(){
        return ClassHelper::getClassConstantsList(__CLASS__);
    }
}