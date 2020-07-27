<?php

if (isset($_POST['signup-submit'])) {

    require 'dbhandler.inc.php';

    $username = $_POST['user'];
    $email = $_POST['email'];
    $pwd = $_POST['password1'];
    $pwdrepeat = $_POST['password2'];

    // if any values are empty
    if(empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat) ) {
        header("Location: ../signup.php?error=emptyfields&user=".$username."&email=".$email);
        exit();
    }

    // legal email and username check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidemailuid");
        exit();
    }

    // only email check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&email=".$email);
        exit();
    }

    // only username check
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduser=".$username);
        exit();
    }

    // passwords match 
    else if($pwd !== $pwdrepeat) {
        header("Location: ../signup.php?error=checkpassword&user=".$username);
        exit();
    }

    else {
        // prepared statement to prevent injection
        $sql = "SELECT uidUsers from users where uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=dberror");
            exit();
        }

        
    }
}

?>