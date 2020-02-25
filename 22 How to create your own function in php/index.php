<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        function newCalc($x){
            $newnr = $x * 0.75;
            echo "Here is 75% of what you wrote: " . $newnr;
        }

        $x = 100;

        newCalc($x);

    ?>


</body>
</html>