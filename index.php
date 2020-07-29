<?php
session_start();
?>
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

</head>

<body>

    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Our Menu</a></li>
        <li><a href="login.php">Order Now</a></li>
        <li><a href="#team">Our Team</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="signup.php">Signup</a></li>
    </ul>

    <section id="home">
        <div class="slider">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="1">

                    </div>
                    <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="2">

                    </div>
                    <div class="carousel-item">
                        <img src="img/3.jpg" class="d-block w-100" alt="3">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="menu">
        <h2>Our Menu</h2>

        <!--1-->
        <div class="card" style="width: 16.6%;">
            <img src="img/menu/veggie.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Veggie Burger</h5>
                <p class="card-text">Pure vegitable burger with onion and leaves. <br> <span class="price">Only RS 150</span></p>
                <a href="login.php" class="btn btn-primary">Order Now!</a>
            </div>
        </div>
        <!--2-->
        <div class="card" style="width: 16.6%;">
            <img src="img/menu/crispy.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Crispy Burger</h5>
                <p class="card-text">With crispy chicken and tasty cheese. <br> <span class="price">Only RS 280</span></p>
                <a href="login.php" class="btn btn-primary">Order Now!</a>
            </div>
        </div>
        <!--3-->
        <div class="card" style="width: 16.6%;">
            <img src="img/menu/egg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Egg Burger</h5>
                <p class="card-text">With fried egg and tasty cheese. <br> <span class="price">Only RS 200</span></p>
                <a href="login.php" class="btn btn-primary">Order Now!</a>
            </div>
        </div>
        <!--4-->
        <div class="card" style="width: 16.6%;">
            <img src="img/menu/beef.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Beef Burger</h5>
                <p class="card-text">With beef slices and tasty cheese. <br> <span class="price">Only RS 280</span></p>
                <a href="login.php" class="btn btn-primary">Order Now!</a>
            </div>
        </div>
        <!--5-->
        <div class="card" style="width: 16.6%;">
            <img src="img/menu/large.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Large Burger</h5>
                <p class="card-text">With crispy chicken and tasty cheese. <br> <span class="price">Only RS 700</span></p>
                <a href="login.php" class="btn btn-primary">Order Now!</a>
            </div>
        </div>
        <!--6-->
        <div class="card" style="width: 16.6%;">
            <img src="img/menu/submarine.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chicken Submarine</h5>
                <p class="card-text">Submarine with crispy chicken and tasty cheese. <br> <span class="price">Only RS 150</span></p>
                <a href="login.php" class="btn btn-primary">Order Now!</a>
            </div>
        </div>

    </section>

    <section id="team">
        <h2>Our team</h2>

        <div class="teamCard" style="width: 30%;">
            <img src="img/yukthika.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"> <span class="nameTitle">Yukthika</span> <br> Director of the company</p>
            </div>
        </div>
        <div class="teamCard" style="width: 30%;">
            <img src="img/yasara.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><span class="nameTitle">Yasara</span> <br> Director of the company</p>
            </div>
        </div>
        <div class="teamCard" style="width: 30%;">
            <img src="img/sashika.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><span class="nameTitle">Sashika</span> <br> Director of the company</p>
            </div>
        </div>

    </section>

    <section id="teamB">
        <div class="teamCard" style="width: 30%;">
            <img src="img/rameshika.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><span class="nameTitle">Rameshika</span> <br> Director of the company</p>
            </div>
        </div>
        <div class="teamCard" style="width: 30%;">
            <img src="img/supun.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><span class="nameTitle">Supun</span> <br> Main chef of the company</p>
            </div>
        </div>
        <div class="teamCard" style="width: 30%;">
            <img src="img/rider.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><span class="nameTitle">Piumal</span> <br> Delivery rider of the company</p>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>

        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="img/logo.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Who We Are ?</h3>
                        <p class="card-text" id="whoWe">
                            We are Burger Freakz... <br>
                            We are dedicated to offer our customers an extraordinary service... <br>
                            We deliver quality and tasty burgers for an affordable price <br>
                            that any company can't provide in the market... <br>
                            So, For what are you waiting for... <br>
                            Order now and feel the magic... <br>
                            <br>
                            Happiness In Every Bite!</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>

        <div class="lblContact">

            <a href="https://api.whatsapp.com/send?phone=94765271714&text=Hey%20I%20would%20like%20to%20know%20about&source=&data=&app_absent=" target="_blank"><button type="button" class="btn-whatsapp" id="whatsapp">WhatsApp</button></a>

            <a href="https://www.facebook.com/Burger-Freakz-108681087536234/" target="_blank"><button type="button" class="btn-facebook" id="facebook">Facebook</button></a>

            <a href="https://www.instagram.com/burger_freakz/" target="_blank"><button type="button" class="btn-ig" id="instagram">Instagram</button></a>
        </div>

        <div id="footer">
            <p>All right reserved <br> WAD Group Project (Team 15) <br> Our Team members : <br> Kasintha <br> Uvindu <br> Thilina <br> Amila <br> Chamith <br>

            </p>

        </div>

    </section>
</body>

</html>