<?php
session_start();
include "./connect.php";
if (isset($_SESSION["id"])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `save` WHERE id='$id'";
    $queryRes = mysqli_query($con, $query);
    $fetchRow = mysqli_fetch_array($queryRes);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CAR BUDDY- A Complete Solutions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script language='javascript'>
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;

                return true;
            }

            function isalphabetKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                return false;
            }
        </script>


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
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="#" class="nav-item nav-link">Service Booking</a>
                            <a href="price.php" class="nav-item nav-link">Price</a>
                            <a href="location.php" class="nav-item nav-link">Service Points</a>
                            <a href="Bookingstatus.php" class="nav-item nav-link">Booking Status</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="single.html" class="dropdown-item">Detail Page</a>
                                    <a href="team.html" class="dropdown-item">Team Member</a>
                                    <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                                </div>
                            </div> -->
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="contact.php">Get Appointment</a>
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
                        <h2>Service</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Service</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Header End -->
        <div style="display: flex; justify-content: center">
            <div class="location" style="flex: 1;">
                <!-- <div class="container">
                <div class="row"> -->
                <div class="col-lg-8 ml-5">
                    <div class="location-form">
                        <h3> Booking for a car Service</h3>

                        <form action="#" method="post">
                            <?php
                            $company = $fetchRow['company'];
                            $carname = $fetchRow['carname'];
                            $regnum = $fetchRow['regnum'];
                            ?>

                            <div class="control-group">
                                <input type="text" name="veccom" value="<?php echo $fetchRow['company']; ?>" disabled class="form-control" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" name="vecname" class="form-control" disabled value="<?php echo $fetchRow['carname']; ?>" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" name="regnum" class="form-control" disabled value="<?php echo $fetchRow['regnum']; ?>" required="required" />
                            </div>

                            <div class="control-group">
                                <input type="text" name="km" maxlength="6" onkeypress="return isNumberKey(event)" class="form-control" placeholder="KM" required="required" />
                            </div>

                            <div class="control-group">
                                <select name="complaint" class="form-control" required="required">
                                    <option value="0" class="vechicle">--- Service Type ---</option>
                                    <option value="Periodic Service" class="vechicle">Periodic Service</option>
                                    <option value="Maintance" class="vechicle">Maintance</option>
                                    <option value="Body Work" class="vechicle">Body Work</option>
                                    <option value="Washing" class="vechicle">Washing</option>
                                    <option value="Painting" class="vechicle">Painting</option>
                                </select>
                            </div>
                            <div class="control-group">
                                <input type="text" id="date_picker" autocomplete="off" name="bdate" class="form-control" placeholder="Select date" required="required" />
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
        <script language="javascript">
            $(document).ready(function() {
                $("#date_picker").datepicker({
                    minDate: 0
                });
            });

            function fetchCar(CarBrand) {
                var value = $('#veccom :selected').val();

                //ajax using
                $.ajax({
                    url: "./server.php",
                    type: "POST",
                    data: {
                        Url: value
                    },
                    success: function(data, status) {
                        $('#vecname').html(data);
                        $('#websiteLoading').css('display', 'none');
                        if (data == 404) {
                            websiteStatus = false;
                            $('#websiteError').css('display', 'inline-block');

                        } else if (data == 200) {
                            websiteStatus = true;
                            $('#websiteSuccess').css('display', 'inline-block');
                        }
                    }
                });
            }
        </script>
    </body>

    </html>
<?php
}
include '#+';
?>

<?php
include 'connect.php';
session_start();
$name = $_SESSION["uname"];
if (isset($_POST["submit"])) {
    $company = $fetchRow['company'];
    $carname = $fetchRow['carname'];
    $km = $_POST['km'];
    $regnum = $fetchRow['regnum'];
    $vccomplaint = $_POST['complaint'];
    $dates = $_POST['bdate'];
    if (!$con) {
        echo "error";
    } else {
        echo $add = "INSERT INTO `booking`(`uname`,`vechiclecompany`, `vechiclename`, `km`, `regnum`, `servicetype`, `bdate`, `status`) VALUES  ('$name','$company','$carname','$km','$regnum','$vccomplaint','$dates','notapprove')";
        if (mysqli_query($con, $add)) {
            echo "<script>
            window.location.href='Bookingstatus.php';
			    </script>";
        } else {
            echo "<script>alert(' Failed');
			    </script>";
        }
    }
}
