<?php
if (isset($_POST['register_submit'])) {
    require 'dbh_inc.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
        header("Location: ../signup_admin.php?error=emptyfields&username=" . $username . "&email=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup_admin.php?error=invalidusernameemail");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup_admin.php?error=invalidemail&username=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup_admin.php?error=invalidusername&email=" . $email);
        exit();
    } elseif ($password !== $password_repeat) {
        header("Location: ../signup_admin.php?error=passwordcheck&username=" . $username . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT admin_username FROM admins WHERE admin_username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup_admin.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup_admin.php?error=usertaken&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO admins (admin_username, admin_email, admin_password) VALUES (?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup_admin.php?error=sqlerror");
                    exit();
                } else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index_admin_logged.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
    exit();
}
