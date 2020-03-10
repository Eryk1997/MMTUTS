<?php

include 'interface/usersinterface.interface.php';

class Users extends Dbh implements UsersInterface{

    public function getUser($name){
        $sql = "SELECT * FROM users WHERE user_firstname= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);

        return $stmt;
    }

    public function setUser($name, $lastName, $dateOfBirth){
        $sql = "INSERT INTO users(user_firstname, user_lastname,user_dateofbirth) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastName, $dateOfBirth]);
    }

}