<?php

session_start();
include_once 'dbh.php';
$sessionid = $_SESSION['id'];

$fileName = "uploads/profile" . $sessionid . "*";
$fileInfo = glob($fileName);
$fileExt = explode(".", $fileInfo[0]);
$fileActualExt = $fileExt[1];

$file = "uploads/profile" . $sessionid . "." . $fileActualExt;

if (!unlink($file)) {
    echo "File was not deleted!";
} else{
    echo "File was deleted!";
}

$sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
mysqli_query($conn, $sql);

header('Location: index.php?deletesuccess');
