<?php

include 'interface/dbh.interface.php';


class Dbh implements DbhInterface{
    private $host = 'localhost';
    private $user = 'phpmyadmin';
    private $pwd = 'Stuntbums97';
    private $dbName = 'oopphp16';

    public function connect(){
        $dbn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dbn,$this->user,$this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
}