<?php
require_once dirname(__FILE__) . "/../page.php";
class TwoColumnsPage extends Page{
    public function __construct(PageData $pageData){
        parent::__construct($pageData, "generic");
    }
}