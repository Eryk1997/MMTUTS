<?php

interface Animal{
    public function say();
}

class Dog implements Animal{
    private $race;

    public function __construct($race){
        $this->race = $race;
    }

    public function say(){
        echo "It is a race: " . $this->race . " of dog";
    }
}

class Cat implements Animal{
    private $race;

    public function __construct($race){
        $this->race = $race;
    }

    public function say(){
        echo "It is a race: " . $this->race . " of cat";
    }
}

function test($animal){
    if ($animal instanceof Cat || $animal instanceof Dog) {
        $animal->say();
    }
}

test(new Dog("eryk"));
echo "<br>";
test(new Cat("xxx"));

