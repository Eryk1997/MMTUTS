<?php

$path = "eryk.jpg";

if (!unlink($path)) {
    echo "You have an error!";
}else{
    echo "You have deleted your file!";
    header("Location: index.php?deletesuccess");
}