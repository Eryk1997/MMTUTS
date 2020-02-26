<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        echo $_POST['name'];

    ?>


    <form method="POST">
        <input type="hidden" name="name" value="value">
        <button type="submit">PRESS ME!</button>
    </form>

</body>
</html>