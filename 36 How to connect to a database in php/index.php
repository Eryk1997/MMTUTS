<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
    <?php
        if (isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="Firsrt Name" value="'.$first.'"> <br>';
        }
        else{
            echo '<input type="text" name="first" placeholder="Firsrt Name"> <br>';
        }

        if (isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'"> <br>';
        }
        else{
            echo '<input type="text" name="last" placeholder="Last Name"> <br>';
        }
    ?>
    <input type="text" name="email" placeholder="E-mail"> <br>
    <?php
        if (isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo '<input type="text" name="uid" placeholder="User Name" value="'.$uid.'"> <br>';
        }
        else{
            echo '<input type="text" name="uid" placeholder="User Name"> <br>';
        }
    ?>

    <input type="password" name="pwd" placeholder="Password"> <br>
    <button type="submit" name="submit">Sign up</button><br>
</form>

<?php

    /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "signup=empty") == true) {
        echo "<p class='error'>You did not fill in all fields</p>";
        exit();
    }
    elseif (strpos($fullUrl, "signup=char") == true) {
        echo "<p class='error'>You used invalid characters!</p>";
        exit();
    }
    elseif (strpos($fullUrl, "signup=email") == true) {
        echo "<p class='error'>You used invalid characters email</p>";
        exit();
    }
    elseif (strpos($fullUrl, "signup=success") == true) {
        echo "<p class='success'>You have been sigend up</p>";
        exit();
    }*/

    if (!isset($_GET['signup'])) {
        exit();
    }
    else{
        $signupCheck = $_GET['signup'];

        if ($signupCheck == "empty") {
            echo "<p class='error'>You did not fill in all fields</p>";
            exit();
        }
        elseif ($signupCheck == "char") {
            echo "<p class='error'>You used invalid characters!</p>";
            exit();
        }
        elseif ($signupCheck == "email") {
            echo "<p class='error'>You used invalid characters email</p>";
            exit();
        }
        elseif ($signupCheck == "success") {
            echo "<p class='success'>You have been sigend up</p>";
            exit();
        }
    }
?>

</body>
</html>