<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        /*$data = array(
            "first" => "Daniel",
            'last' => "Nielsen",
            'age' => 25);
        echo $data['first'];
*/
        $data = array(
            array(1,2 ,3),
            "Daniel",
            "John",
            "Jane"
        );
        print_r($data);
        echo "<br>" . $data[1];
        echo "<br>" . $data[0][0];

    ?>

</body>
</html>