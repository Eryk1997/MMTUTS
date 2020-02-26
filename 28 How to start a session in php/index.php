<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
    $_SESSION['username'] = "dani948a";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        echo "You are not logged in!";
    }
    else{
        echo 'You are logged in!';
    }
?>

</body>
</html>