<?php

class House{

    private $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function getHouse()
    {
        return "Your location: " . $this->location;
    }
}