<?php

class FirstClass {
    //Properties
    const EXAMPLE = 'You cant change this';

    //Methods
    public static function test() {
        return "This is test";
    }
}

$prop = FirstClass::EXAMPLE;
$meth = FirstClass::test();
echo $prop . ' ' . $meth;


class SecondClass extends FirstClass {
    //properties
    public static $staticProperty = 'Second static prop';

    //Methods
    public static function secondTest() {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$second = SecondClass::secondTest();
echo $second;