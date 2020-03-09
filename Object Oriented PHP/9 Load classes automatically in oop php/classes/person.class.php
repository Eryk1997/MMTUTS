<?php

class Person{

    private $name;
    private $age;

    public function __construct(){}

    public function __construct1($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getPerson()
    {
        return $this->name . " is " . $this->age . " years old!";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $newName){
        $this->name = $newName;
    }
}