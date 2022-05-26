<?php
session_start();
include 'connect.php';
$name = $_SESSION["uname"];
if (isset($_SESSION["id"])) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CAR BUDDY-Admin Page</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style>
            .vechicle {
                background: black;
            }
        </style>

    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="home.php">
                                <h1>Car<span>Buddy</span></h1>

                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Sat, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+91 904 804 3444</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>admin@carbuddy.in</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="adminindex.php" class="nav-item nav-link ">Admin Home</a>
                            <a href="registerfetch.php" class="nav-item nav-link ">Register Details</a>
                            <a href="adminbookingwatch.php" class="nav-item nav-link">Booking Details</a>
                            <a href="adminofferview.php" class="nav-item nav-link ">Offer Booking</a>
                            <a href="message.php" class="nav-item nav-link">Messages</a>
                            <a href="adminpayment.php" class="nav-item nav-link">Payment Details</a>
                            <a href="#" class="nav-item nav-link active">Add Cars</a>

                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="single.html" class="dropdown-item">Detail Page</a>
                                    <a href="team.html" class="dropdown-item">Team Member</a>
                                    <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                                </div>
                            </div> -->

                        </div>

                        <div class="ml-auto">
                            <a class="btn btn-custom" href="logout.php">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->



        <div style="display: flex; justify-content: center">
            <div class="location" style="flex: 1;">
                <!-- <div class="container">
                <div class="row"> -->
                <div class="col-lg-8 ml-5">
                    <div class="location-form">
                        <h3> Booking for a car Service</h3>
                        <form action="#" method="post">
                            <div class="control-group">
                                <select name="carcom" class="form-control" required="required">
                                    <option value="0" class="vechicle">--- Choose a Vechicle Company ---</option>
                                    <option value="Audi" class="vechicle">Audi</option>
                                    <option value="BMW" class="vechicle">BMW</option>
                                    <option value="Mercedes benz" class="vechicle">Mercedes benz</option>
                                    <option value="Maruthi" class="vechicle Suzki">Maruthi</option>
                                    <option value="Mahindra" class="vechicle">Mahindra</option>
                                    <option value="Honda" class="vechicle">Honda</option>
                                    <option value="Jeep" class="vechicle">Jeep</option>
                                    <option value="Fiat" class="vechicle">fiat</option>
                                    <option value="MG" class="vechicle">MG</option>
                                    <option value="Kia" class="vechicle">Kia</option>
                                    <option value="TATA" class="vechicle">TATA</option>
                                    <option value="Toyota" class="vechicle">Toyota</option>
                                    <option value="Volkswagon" class="vechicle">Volkswagon</option>
                                </select>
                            </div>

                            <div class="control-group">
                                <input type="text" name="carnam" class="form-control" placeholder="Vechicle Name" required="required" />
                            </div>


                            <div>
                                <button class="btn btn-custom" type="submit" name="submit">Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--</div>
            </div> -->
            </div>
            <div id="anim" class="image-one ml-15" style="flex: 1; ">
            </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Location End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Car Buddy, With you always</p>
                            <p><i class="fa fa-phone-alt"></i>+91 904 804 3444</p>
                            <p><i class="fa fa-envelope"></i>info@carbuddy.com</p>
                            <div class="footer-social">
                                <a class="btn"><i class="fab fa-twitter"></i></a>
                                <a class="btn"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn"><i class="fab fa-youtube"></i></a>
                                <a class="btn"><i class="fab fa-instagram"></i></a>
                                <a class="btn"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="#">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>

                            <h5>Thank you for joining with Us..</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">CAR BUDDY</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">JERIN</a></p>
            </div>

        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="./js/lottie.js"></script>
        <script>
            //lotie animation
            var animation = bodymovin.loadAnimation({
                container: document.getElementById('anim'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: './img/brumbrum.json'
            })
        </script>

    </body>

    </html>

<?php
} else {
    echo ("
 <script>
 window.location.href='Login.php';
 </script>");
}
include 'carphp.php';
?>