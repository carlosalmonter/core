<?php
require_once(dirname(__FILE__) . "/loader.php");
class JsLoader extends Loader
{
    private $jsFiles;
    public function __construct(){
        $this->jsFiles = array(
            "admin_page",
            "page"
        );
    }

    public function loadJSFiles(){
        foreach($this->jsFiles as $file){
            echo "<script type='text/JavaScript' src='site/js/{$file}.js'></script>";
        }
    }
}
