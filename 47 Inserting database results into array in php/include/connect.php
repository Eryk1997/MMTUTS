<?php

$server = "localhost";
$username = "phpmyadmin";
$password = "Stuntbums97";
$database = "test";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection false: " . mysqli_connect_error());
}