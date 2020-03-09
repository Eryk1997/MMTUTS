<?php
    declare(strict_types = 1);
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
    $per2 = new Person();

    echo '<br>';

    $house = new House("Krosno");
    echo $house->getHouse();

    echo '<br>';

    try {
        $per->setName(2);
        echo $per->getPerson();
    } catch (TypeError $e) {
        echo "Type of error: " . $e->getMessage();
    }

?>
</body>
</html>