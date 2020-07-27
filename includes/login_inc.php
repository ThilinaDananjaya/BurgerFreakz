<?php
if (isset($_POST['login_submit'])) {
    require 'dbh_inc.php';

    $username_email = $_POST['username_email'];
    $password = $_POST['password'];

    if (empty($username_email) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_username=? OR user_email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username_email, $username_email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $password_check = password_verify($password, $row['user_password']);
                if ($password_check == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                } elseif ($password_check == true) {
                    session_start();
                    $_SESSION['user_id']= $row['user_id'];
                    $_SESSION['user_username']= $row['user_username'];
                    header("Location: ../index_logged.php?login=success");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
