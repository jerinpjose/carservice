<?php
session_start();
include 'connect.php';
$name = $_SESSION["uname"];

$query2 = "SELECT * FROM `register` WHERE uname= '".$name."'";
$result2 = mysqli_query($con, $query2);
$row2=mysqli_fetch_array($result2);
$fullname=$_SESSION['fname']=$row2['name'];

if (isset($_SESSION["id"])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">

        <title>CAR BUDDY- A Complete Solutions</title>
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
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="home.html">
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
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="about.php" class="nav-item nav-link ">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Save</a>
                                <div class="dropdown-menu">
                                    <a href="save.php" class="dropdown-item">Add Car</a>
                                    <a href="saveview.php" class="dropdown-item">View Car</a>


                                </div>
                            </div>
                            <a href="service.php" class="nav-item nav-link">Service Booking</a>
                            <a href="price.php" class="nav-item nav-link active">Price</a>
                            <a href="location.php" class="nav-item nav-link">Service Points</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Booking Status</a>
                                <div class="dropdown-menu">
                                    <a href="Bookingstatus.php" class="dropdown-item">Service Booking</a>
                                    <a href="bookingstatus2.php" class="dropdown-item">Offer Booking</a>


                                </div>
                            </div>

                            <!-- -->

                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="logout.php">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Offers for You!!!</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Price</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Periodic Service Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <?php
                    include 'connect.php';
                    $query = "SELECT * FROM serviceplans";
                    $result = mysqli_query($con, $query);
                    while ($row1 = mysqli_fetch_array($result)) {
                        echo ('
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>' . $row1['plantype'] . '</h3>
                                <h2><span>Rs</span><strong>' .
                            $row1['amount'] . '</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>' . $row1['oilfilter'] . '</li>
                                    <li><i class="far fa-check-circle"></i>' . $row1['coolant'] . '</li>
                                    <li><i class="far fa-check-circle"></i>' . $row1['brake'] . '</li>');
                        if ($row1['status'] == 1) {
                            echo ('<li><i class="far fa-times-circle"></i>' . $row1['fullcheck'] . '</li>
                                        <li><i class="far fa-times-circle"></i>' . $row1['washing'] . '</li>');
                        } else if ($row1['status'] == 2) {
                            echo ('
                                        <li><i class="far fa-check-circle"></i>' . $row1['fullcheck'] . '</li>
                                        <li><i class="far fa-times-circle"></i>' . $row1['washing'] . '</li>
                                        ');
                        } else {
                            echo ('
                                        <li><i class="far fa-check-circle"></i>' . $row1['fullcheck'] . '</li>
                                        <li><i class="far fa-check-circle"></i>' . $row1['washing'] . '</li>
                                        ');
                        }
                        echo ('</ul>
                            </div>
                            <div class="price-footer">
                            <a class="btn btn-custom" value="" href="offerbooking.php?id=' . $row1['id'] . '">Book Now</a>
                            </div>
                        </div>
                    </div>');
                    }
                    ?>
                </div>

            </div>
        </div>
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <?php
                    include 'connect.php';
                    $query = "SELECT * FROM washingplans";
                    $result = mysqli_query($con, $query);
                    while ($row1 = mysqli_fetch_array($result)) {
                        echo ('<div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>' . $row1['cleantype'] . '</h3>
                                <h2><span>Rs</span><strong>' . $row1['amount'] . '</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>' . $row1['wash1'] . '</li>
                                    <li><i class="far fa-check-circle"></i>' . $row1['wash2'] . '</li>
                                    <li><i class="far fa-check-circle"></i>' . $row1['wash3'] . '</li>');
                        if ($row1['status'] == 1) {
                            echo ('
                                        <li><i class="far fa-times-circle"></i>' . $row1['wash4'] . '</li>
                                    <li><i class="far fa-times-circle"></i>' . $row1['wash5'] . '</li>
                                        ');
                        } else if ($row1['status'] == 2) {
                            echo ('
                                        <li><i class="far fa-check-circle"></i>' . $row1['wash4'] . '</li>
                                        <li><i class="far fa-times-circle"></i>' . $row1['wash5'] . '</li>
                                        ');
                        } else {
                            echo ('  <li><i class="far fa-check-circle"></i>' . $row1['wash4'] . '</li>
                                        <li><i class="far fa-check-circle"></i>' . $row1['wash5'] . '</li>
                                        ');
                        }
                        echo ('
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="" href="offerbooking.php?id=' . $row1['id'] . '">Book Now</a>
                            </div>
                        </div>
                    </div>');
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Price End -->


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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

    </body>

    </html>

<?php
} else {
    header('location:Login.php');
}
?>