<?php
class CSSLoader{
    private $cssFiles;
    public function __construct(){
        $this->cssFiles = array(
            "admin_page"
        );
    }

    public function loadCSSFiles(){
        foreach($this->cssFiles as $file){
            echo "<link rel='stylesheet' type='text/css' href='site/css/{$file}.css'>";
        }
    }
}
