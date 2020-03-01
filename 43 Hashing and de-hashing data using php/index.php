<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        echo 'test123';
        echo "<br>";
        echo password_hash("test123", PASSWORD_DEFAULT);
    ?>


</body>
</html>