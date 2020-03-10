<?php
//include 'includes/class-autoload.inc.php';
include 'includes/useradd.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <input type="date" name="dateOfBirth" placeholder="Date of Birth">
        <button type="submit" name="submit">ADD USER</button>
    </form>

    <?php
        $testObj->getUsers();
    ?>

</body>
</html>