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
            echo "Here is 75% of what you wrote: " . $newnr . "<br>";
        }

        function strong($value){
            $result = 1;
            if($value == 1 || $value == 0){
                $result = 1;
            }
            elseif ($value == 2) {
                $result = 2;
            }
            else{
                for ($i=2; $i <= $value; $i++) {
                    $result *= $i;
                }
            }
            echo $result . "<br>";
        }

        $x = 100;

        newCalc($x);
        strong(2);
        strong(3);
        strong(4);
        strong(5);
        strong(6);
        strong(7);
    ?>


</body>
</html>