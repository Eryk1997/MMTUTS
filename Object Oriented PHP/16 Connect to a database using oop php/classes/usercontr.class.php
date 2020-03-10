<?php

class UserContr extends Users{

    public function createUser($firstName, $lastName, $dateOfBirth){
        $this->setUser($firstName, $lastName, $dateOfBirth);
    }

}