<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 5;

    function something(){
        $y = 10;
        echo $GLOBALS['x'];
    }

    something();

    ?>

</body>
</html>