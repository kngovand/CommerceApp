<?php
# comments: using Bootstrap CDN to sanitize entries, although PHP logic included to sanitize without framework. 

# if signup form is submitted
if (isset($_POST['signup-submit'])) {

    require 'dbhandler.inc.php';

    $username = $_POST['user'];
    $email = $_POST['email'];
    $pwd = $_POST['password1'];
    $pwdrepeat = $_POST['password2'];

    # if any values are empty
    if(empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat) ) {
        header("Location: ../signup.php?error=emptyfields&user=".$username."&email=".$email);
        exit();
    }

    # legal email and username check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidemailuid");
        exit();
    }

    # only email check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&email=".$email);
        exit();
    }

    # only username check
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduser=".$username);
        exit();
    }

    # passwords match 
    else if($pwd !== $pwdrepeat) {
        header("Location: ../signup.php?error=checkpassword&user=".$username);
        exit();
    }

    else {
        # prepared statement to prevent injection
        $sql = "SELECT uidUsers from users where uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            # statement, placeholder, data
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);

            # fetch
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            # resultCheck returns 1 entry exists
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else {
                    # hashing password before insert statement executed
                    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
                    mysqli_stmt_execute($stmt);

                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    # redirect
    header("Location: ../signup.php");
    exit();
}
?>