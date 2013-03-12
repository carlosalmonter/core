<?php
class ModuleTypes{
    const HEADER = "header";
    const FOOTER = "footer";
    const ADMINMENU = "admin_menu";
    public function __construct(){}
    public static function getTypes(){
        return ClassHelper::getClassConstantsList(__CLASS__);
    }
}