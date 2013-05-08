<?php
class Sections{
    const ADMIN = "admin";
    public function __construct(){}
    public static function getSections(){
        return ClassHelper::getClassConstantsList(__CLASS__);
    }
}