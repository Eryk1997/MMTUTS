<?php

class Bob extends AveragePerson{
    public function talk($say){
        echo "In an Canadian accent, Bob says: " . $say . PHP_EOL . "<br>";
    }

    public function doWalk($place){
        echo "Bob only has one leg and has to hop to $place" . PHP_EOL . "<br>";
    }

}