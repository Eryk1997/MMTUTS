<?php

class Person{
    /*protected $first = "Daniel";
    protected $last = "Nielsen";
    protected $age = "28";
    */
    private $name;
    private $eyeColor;
    private $age;

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

    public function __destruct()
    {

    }
}

class Pet extends Person{
    public function owner(){
        $a = $this -> first;
        return $a;
    }
}