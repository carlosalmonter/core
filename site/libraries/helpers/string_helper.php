<?php
class StringHelper
{
    public static function fileToClassName($fileName){
        $words = explode("_",strtolower($fileName));
        $className = array();
        foreach($words as $word){
            $className []= ucfirst($word);
        }
        return implode("",$className);
    }
}
