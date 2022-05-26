<?php
session_start();
$name = $_SESSION["uname"];
if (isset($_SESSION["id"])) {
    include 'connect.php'

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CAR BUDDY- A Complete Solutions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

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
                            <a href="about.php" class="nav-item nav-link ">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Save</a>
                                <div class="dropdown-menu">
                                    <a href="save.php" class="dropdown-item">Add Car</a>
                                    <a href="saveview.php" class="dropdown-item">View Car</a>


                                </div>
                            </div>
                            <a href="service.php" class="nav-item nav-link">Service Booking</a>
                            <a href="price.php" class="nav-item nav-link">Price</a>
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
        <?php
        include 'connect.php';
        $query = "SELECT * FROM `booking` WHERE `uname`='$name' AND status!='Delete'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run)) {
            echo ('<table class="table table-hover table-secondary mt-5 ">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Brand</th>
                            <th scope="col">Vechicle Name</th>
                            <th scope="col">Running_Km</th>
                            <th scope="col">Register_number</th>
                            <th scope="col">Service Type</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Current time</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Status</th>
                           
                          </tr>
                        </thead>
                        <tbody>');
            while ($row = mysqli_fetch_array($query_run)) {
        ?>
                <tr>
                    <td><?php echo $row['vechiclecompany'] ?></td>
                    <td><?php echo $row['vechiclename'] ?></td>
                    <td><?php echo $row['km'] ?></td>
                    <td><?php echo $row['regnum'] ?></td>
                    <td><?php echo $row['servicetype'] ?></td>
                    <td><?php echo $row['bdate'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td>
                        <?php
                        if ($row['status'] == "Approve") {
                            echo "<form action='#' method=post><button value='" . $row['id'] . "' class='btn btn-danger' name=delete disabled>DELETE</button></form></td>";
                        } else {
                            echo "<form action='#' method=post><button value='" . $row['id'] . "' class='btn btn-danger' name=delete>DELETE</button></form></td>";
                        }
                        ?>
                    <td><?php
                        if ($row['status'] == 'notapprove') {
                            echo "Not Approved";
                        } else {
                            echo "Approved";
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>

        <?php
            if (isset($_POST["delete"])) {
                $del = $_POST["delete"];
                $dele = "UPDATE `booking` SET `status`= 'Delete' WHERE `id`='$del'";
                mysqli_query($con, $dele);
                echo "<script>alert('Service delete Successfully');
		window.location.href='service.php';
		</script>";
            }
            echo ('</tbody>
                </table>');
        } else {
            echo "<h1><br><br><br><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                Please book any Services!!!  <br><br><br><br><br></h1>";
        }

        ?>



        <br><br><br><br><br><br><br><br>

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
    header('location:Login.php');
}
?>