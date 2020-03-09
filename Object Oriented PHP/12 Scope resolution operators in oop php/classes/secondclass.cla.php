<?php


class SecondClass extends FirstClass{

    public static $staticProperty = "A static property";

    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }

    public static function test(){
        $testing = "This is a test2";
        return $testing;
    }

}