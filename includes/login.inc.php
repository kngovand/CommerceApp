<?php

# if login form is submitted
if (isset($_POST['login-submit'])) {

    require 'dbhandler.inc.php';

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    # if email or password is empty
    if(empty($email) || empty($pwd)) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }

    else {
        # prepared statement to prevent injection
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }

        else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pwd, $row['pwdUsers']);

                if($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }

                # if password matches database
                else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['id'] = $row['idUsers'];
                    $_SESSION['userID'] = $row['uidUsers'];
                    $_SESSION['emailID'] = $row['emailUsers'];

                    header("Location: ../login.php=success");
                    exit();
                }
            }
            else {
                header("Location: ../signup.php?error=nouser");
                exit();
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else {
    # redirect
    header("Location: ../index.php");
    exit();
}
?>