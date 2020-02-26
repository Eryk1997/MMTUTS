<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php

        setcookie("name", "Daniel", time() - 86400);

        $_SESSION['name'] = "Daniel";

        // Print an individual cookie
        echo $_COOKIE["name"];
    ?>



</body>
</html>