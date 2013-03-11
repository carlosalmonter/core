<?php
class ArrayHelper{
    public static function getValueForIndexIfExists($array, $index){
        return isset($array[$index])? $array[$index]: null;
    }
}