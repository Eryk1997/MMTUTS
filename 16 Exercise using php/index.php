<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
        echo "<p>";
        $dayOfWeek = date("w");
        switch ($dayOfWeek) {
            case 1:
                echo "It is Monday!";
                break;
            case 2:
                echo "It is Tuesday!";
                break;
            case 3:
                echo "It is Wednesday!";
                break;
            case 4:
                echo "It is Thursday!";
                break;
            case 5:
                echo "It is Friday!";
                break;
            case 6:
                echo "It is Saturday!";
                break;
            case 0:
                echo "It is Sunday!";
                break;
        }
        echo "</p>";
    ?>


</body>
</html>