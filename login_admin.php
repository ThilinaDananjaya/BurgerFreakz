<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN AS ADMIN</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="shortcut icon" href="img/logoIcon.png" type="image/x-icon">

</head>

<body>
    <section class="login">
        <div id="frm" class="container">
            <form action="includes/login_admin_inc.php" method="POST" id="signup-form" class="signup-form">
                <h2>LOGIN AS ADMIN!</h2>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "noadmin") {
                        echo '<p class="loginerror">Wrong Username or Email!</p>';
                    } elseif ($_GET['error'] == "wrongpassword") {
                        echo '<p class="loginerror">Wrong Password!</p>';
                    } elseif ($_GET['error'] == "sqlerror") {
                        echo '<p class="loginerror">Please Try Again Later!</p>';
                    }
                }
                ?>
                <div>
                    <input class="form-input" type="text" name="username_email" id="username_email" placeholder="Enter Username or Email" required><br><br>
                </div>
                <div>
                    <input class="form-input" type="password" name="password" id="password" placeholder="Enter Password" required><br><br>
                </div>
                <div>
                    <button class="form-submit" type="submit" name="login_submit" id="login_submit" class="form-submit" value="Login">Login</button>
                </div>
            </form>
            <p class="loginhere" style="text-align:center">
                <a href="login.php">LogIn As User</a>
            </p>
        </div>
    </section>
</body>

</html>