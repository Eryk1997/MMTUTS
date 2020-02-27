<?php
    include_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    $sql = "select * from users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0 ) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'];
        }
    }
?>

</body>
</html>