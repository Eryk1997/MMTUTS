<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<form method='post'>
    <input type="text" name="value" placeholder="Add text to list">
    <button type="submit" name="submit" value="submit">OK</button>

</form>

<body>

    <?php
    session_start();

        if(isset($_GET["submit"])){
            $text = $_POST["value"];
            $_SESSION['user_playlists'][] = $text;

            $array = array();

            for ($i = 0; $i < count($_SESSION['user_playlists']); $i++) {
                array_push($array, $_SESSION['user_playlists'][$i]);
            }

            foreach($array as $list){
                echo $list . "<br>";
            }
        }

    ?>

</body>
</html>