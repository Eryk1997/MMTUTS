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
    $pet01 = new Pet();

    echo $pet01->owner();
    ?>
</body>
</html>