<?php

if (isset($_POST['signup-submit'])) {

    require 'dbhandler.inc.php';

    $username = $_POST['user'];
    $email = $_POST['email'];
    $pwd = $_POST['password1'];
    $pwdrepeat = $_POST['password2'];

    if(empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)) {
        header("Location: ..\signup.php?error=emptyfields&user=".$username."&mail=".$email);
        exit();
    }

}