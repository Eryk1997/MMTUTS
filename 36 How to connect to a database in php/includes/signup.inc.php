<?php
    /*include_once 'connect.php';

    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    //$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
    //    VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    //mysqli_query($conn, $sql);

    $sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
        VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL error";
    } else{
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        mysqli_stmt_execute($stmt);
    }

    header("Location: ../index.php?signup=succes");
    */
    if (isset($_POST['submit'])) {
        include_once 'connect.php';
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header('Location: ../index.php?signup=empty');
        }else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('Location: ../index.php?signup=invalidemail');
            } else{
                echo "Sign up the user";
            }
        }
    } else{
        header('Location: ../index.php?signup=error');
    }