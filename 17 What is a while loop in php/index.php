<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 1;
        while ($x < 5) {
            echo "Hi there (while)</br>";
            $x++;
        }

        do {
            echo "Hi there (do while)</br>";
            $x++;
        } while ($x <= 10);

        for ($i=0; $i < $x; $i++) {
            echo "Hi there (for)</br>";
        }

    ?>

</body>
</html>