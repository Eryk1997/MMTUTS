<?php

class Users extends Dbh{

    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE user_firstname= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($name, $lastName, $dateOfBirth){
        $sql = "INSERT INTO users(user_firstname, user_lastname,user_dateofbirth) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastName, $dateOfBirth]);
    }

}