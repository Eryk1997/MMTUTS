<?php
    include_once 'include/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM data";
        $result = mysqli_query($conn, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }

        //print_r($datas);

        foreach ($datas[0] as $data) {
            echo $data . " " . $data . "<br>";
        }

        foreach ($datas as $data) {
            echo $data['id'] . " " . $data['text'] . "<br>";
        }

    ?>
</body>
</html>