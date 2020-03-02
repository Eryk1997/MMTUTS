<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //Indexed arrays
        $data = array("Daniel", "John", "Jane");
        echo $data[0] . "<br>";

        //Associative arrays
        $data1 = array("first" => "Daniel", "last" => "Niesen", "age" => 25);
        echo $data1['age'];

        //Multidimensional arrays
        $data2 = array(array("Daniel", "Nielsen"), "John", "Jane");
        print_r($data2);
    ?>

</body>
</html>