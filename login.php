<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logoIcon.png" type="image/x-icon">

</head>

<body>

    <ul>
        <li><a href="index.php#home">Home</a></li>
        <li><a href="index.php#menu">Our Menu</a></li>
        <li><a href="order.php">Order Now</a></li>
        <li><a href="index.php#team">Our Team</a></li>
        <li><a href="index.php#about">About Us</a></li>
        <li><a href="index.php#contact">Contact Us</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="signup.php">Signup</a></li>
    </ul><br><br>

    <section class="login">
        <div id="frm" class="container">
            <form action="includes/login_inc.php" method="POST" id="signup-form" class="signup-form">
                <h2>LOGIN TO ORDER!</h2>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "nouser") {
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
                Don't have an account? <a href="signup.php" class="loginhere-link">SignUp Here</a><br><br>
                <a href="login_admin.php">LogIn As Admin</a>
            </p>
        </div>
    </section>
</body>

</html>