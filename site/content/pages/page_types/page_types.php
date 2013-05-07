<?php
class PageTypes{
    const GENERIC = "generic";
    const TWOCOLUMNS = "two_columns";
    public function __construct(){}
    public static function getTypes(){
        return ClassHelper::getClassConstantsList(__CLASS__);
    }
}