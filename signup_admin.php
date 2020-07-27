<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Burger Freakz</title>
    <link rel="shortcut icon" href="img/logoIcon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signupstyle.css">
</head>

<body>

    <ul>
        <li><a href="index_admin_logged.php">Home</a></li>
        <li><a href="order_view.php">Orders</a></li>
        <li><a href="signup_admin.php" id="signup_admin">Register New Admin</a></li>
        <li><a href="includes/logout_inc.php">Log Out</a></li>
    </ul>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="includes/signup_admin_inc.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">REGISTER NEW ADMIN</h2>
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidusernameemail") {
                                echo '<p class="signuperror">Invalid Username and Email!</p>';
                            } elseif ($_GET['error'] == "invalidusername") {
                                echo '<p class="signuperror">Invalid Username!</p>';
                            } elseif ($_GET['error'] == "invalidemail") {
                                echo '<p class="signuperror">Invalid Email!</p>';
                            } elseif ($_GET['error'] == "passwordcheck") {
                                echo '<p class="signuperror">Your passwords do not match!</p>';
                            } elseif ($_GET['error'] == "usertaken") {
                                echo '<p class="signuperror">Username is already taken!</p>';
                            } elseif ($_GET['error'] == "sqlerror") {
                                echo '<p class="signuperror">Please Try Again Later!</p>';
                            }
                        }
                        ?>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_repeat" id="password_repeat" placeholder="Confirm Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="register_submit" id="register_submit" class="form-submit" value="Register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

</body>

</html>