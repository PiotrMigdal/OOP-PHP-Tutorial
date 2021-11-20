<?php

namespace Person;

class Person {
    private $name;
    private $eyeColor;
    public $age;

    public static $drinkingAge = 21;

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Methods
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getDA(): int
    {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }
}