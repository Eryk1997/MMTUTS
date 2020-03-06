<?php
    include_once 'includes/person.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //$pet01 = new Pet();

    //echo $pet01->owner();

    /*$person = new Person();
    $person->setName("Eryk");
    echo $person->name;

    $newPerson = new Person();
    $newPerson->setName("Wojtek");
    echo $newPerson->name;

    echo "<br>";
    $newPerson->setAge(4);
    echo $newPerson->age;
*/
    $eryk = new Person("Eryk2","blue",23);
    echo "<br>";
    echo $eryk->getName();

    //destroy object
    unset($eryk);
     ?>
</body>
</html>