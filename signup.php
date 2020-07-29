<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>

    <link rel="shortcut icon" href="img/logoIcon.png" type="image/x-icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="signupstyle.css">
    <link rel="stylesheet" href="style.css">
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
    </ul><br><br><br>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="includes/signup_inc.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">SIGNUP HERE</h2>
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
                            <input type="checkbox" class="agree-term" name="agree-term" id="agree-term" required />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to all the statements in <a href="terms_of_service.php" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup_submit" id="signup_submit" class="form-submit" value="Sign up">Sign Up</button>
                        </div>
                    </form>
                    <p class="loginhere">
                        Aleady have an account? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>


</body>

</html>