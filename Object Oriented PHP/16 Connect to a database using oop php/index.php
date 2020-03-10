<?php
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $testObj = new Test();
        $testObj->getUsersStmt("Daniel","Nielsen");
        $testObj->setUsersStmt("Eryk","Janocha","1997-02-16");

    ?>

</body>
</html>