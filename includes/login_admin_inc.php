<?php
if (isset($_POST['login_submit'])) {
    require 'dbh_inc.php';

    $username_email = $_POST['username_email'];
    $password = $_POST['password'];

    if (empty($username_email) || empty($password)) {
        header("Location: ../login_admin.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM admins WHERE admin_username=? OR admin_email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login_admin.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username_email, $username_email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $password_check = password_verify($password, $row['admin_password']);
                if ($password_check == false) {
                    header("Location: ../login_admin.php?error=wrongpassword");
                    exit();
                } elseif ($password_check == true) {
                    session_start();
                    $_SESSION['admin_id']= $row['admin_id'];
                    $_SESSION['admin_username']= $row['admin_username'];
                    header("Location: ../index_admin_logged.php?login=success");
                    exit();
                } else {
                    header("Location: ../login_admin.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../login_admin.php?error=noadmin");
                exit();
            }
        }
    }
} else {
    header("Location: ../login_admin.php");
    exit();
}
