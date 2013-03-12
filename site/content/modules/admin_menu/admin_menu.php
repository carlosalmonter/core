<?php
require_once dirname(__FILE__) . "/../module.php";
class AdminMenu extends Module{
    public function __construct(ModuleData $moduleData){
        parent::__construct($moduleData);
    }
}