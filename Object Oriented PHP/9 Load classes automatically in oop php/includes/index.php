<?php
    include_once 'autoLoader.inc.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    $per = new Person("eryk", 22);
    echo $per->getPerson();

    echo '<br>';

    $house = new House("Krosno");
    echo $house->getHouse();
?>
</body>
</html>