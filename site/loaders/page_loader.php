<?php
require_once dirname(__FILE__) . "/loader.php";

class PageLoader{
    private $loader;
    public function __construct(Loader $loader = null){
        $this->loader = is_null($loader)? new Loader(): $loader;
    }

    public function load($page){
        return $this->loader->load($page."_page", "page", $page."_page/");
    }
}

