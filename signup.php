<?php
    include 'dbh.php';

    $first = $_POST['user_first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['user_pwd'];

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$first', '$last', '$email', '$password');";

    mysqli_query($conn , $sql);

    header("Location: index.php?signup=success");