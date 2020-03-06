<?php

class Person{
    /*protected $first = "Daniel";
    protected $last = "Nielsen";
    protected $age = "28";
    */
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 18;

    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Methods
    public function setName($name){
        $this->name = $name;
    }

    public function setEyeColor($color)
    {
        $this->eyeColor = $color;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getDA()
    {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }

    public function __destruct()
    {

    }
}

