<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
        $y = 7;

        if ($x < $y) {
            echo $x. "<" . $y;
        }
        elseif ($x > $y) {
            echo $x . ">" . $y;
        }
        else {
            echo $x . "=" . $y;
        }

    ?>

</body>
</html>