<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>

<body>
    <section class="signup">
        <div id="frm" class="container">
            <form action="includes/login_inc.php" method="POST" id="signup-form" class="signup-form">
                <h2>LOGIN TO ORDER</h2>
                <div>
                    <input class="form-input" type="text" name="username_email" id="username_email" placeholder="Enter Username or Email" required><br>
                </div>
                <div>
                    <input class="form-input" type="password" name="password" id="password" placeholder="Enter Password" required>
                </div>
                <div>
                    <button class="form-submit" type="submit" name="login_submit" id="login_submit" class="form-submit" value="Login">Login</button>
                </div>
            </form>
            <p class="loginhere" style="text-align:center">
                Don't have an account? <a href="signup.php" class="loginhere-link">SignUp here</a>
            </p>
        </div>
    </section>
</body>

</html>