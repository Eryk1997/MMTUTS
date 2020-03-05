<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        /*$string = "My name is Daniel, Daniel is my name";

        if (preg_match_all("/Daniel/", $string, $array)) {
            print_r($array);
        }
        */

        $string = "My name is Daniel, Daniel is my name";

        echo preg_match("/Daniel/", $string);
        echo "</br>";
        echo preg_match("//", $string);



    ?>

</body>
</html>