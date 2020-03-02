<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $data = array();
    $data[] = "Daniel";
    $data[] = 15;
    array_push($data,"John", 9, 32);
    array_push($data,23);
    //echo $data[0];
    print_r($data);
?>

</body>
</html>