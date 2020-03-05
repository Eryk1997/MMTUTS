<?php

class Person{
    protected $first = "Daniel";
    protected $last = "Nielsen";
    protected $age = "28";

}

class Pet extends Person{
    public function owner(){
        $a = $this -> first;
        return $a;
    }
}