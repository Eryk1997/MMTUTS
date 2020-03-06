<?php

class Person{
    /*protected $first = "Daniel";
    protected $last = "Nielsen";
    protected $age = "28";
    */
    public $name;
    public $eyeColor;
    public $age;

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
}

class Pet extends Person{
    public function owner(){
        $a = $this -> first;
        return $a;
    }
}