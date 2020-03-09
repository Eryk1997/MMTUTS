<?php
    include 'includes/autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    $a = FirstClass::EXAMPLE;
    echo $a;

    echo "<br>";

    $b = SecondClass::anotherTest();
    echo $b;

    echo "<br>";

    $c = SecondClass::test();
    echo $c;

?>

</body>
</html>