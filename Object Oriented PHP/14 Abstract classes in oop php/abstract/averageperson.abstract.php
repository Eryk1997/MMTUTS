<?php

abstract class AveragePerson{
    private $age = 0;
    public function doAge(){
        $this->age = $this->age + 1;
    }

    public function doWalk($place){
        echo "I am going to walk to $place" . PHP_EOL . "<br>";
    }

    abstract function talk($say);
}

