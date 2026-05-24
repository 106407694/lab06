<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $correctUsername = "Nahian";
    $correctPassword = "106407694";

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['user'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
