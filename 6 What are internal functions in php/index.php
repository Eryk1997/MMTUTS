<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo str_word_count("Hi Daniel");
        echo " str_word_count";
        echo "</br>";
        echo strlen("Hi Daniel");
        echo " strlen";
        echo "</br>";
        echo strrev("Hi Daniel");
        echo " strrev";
        echo "</br>";
        echo strpos("Hi Daniel","Daniel");
        echo " strpos";
        echo "</br>";
        echo str_replace("Daniel","Jason","Hi Daniel (str_replace)");

    ?>

</body>
</html>