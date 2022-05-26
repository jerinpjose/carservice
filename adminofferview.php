<?php
session_start();
$name = $_SESSION["uname"];
if (isset($_SESSION["id"])) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title> Car Budddy- Offer Booking details</title>


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                            <a href="#">
                                <h1>Admin<span>Page</span> </h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
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
                            <a href="registerfetch.php" class="nav-item nav-link  ">Register Details</a>
                            <a href="adminbookingwatch.php" class="nav-item nav-link">Booking Details</a>
                            <a href="message.php" class="nav-item nav-link ">Messages</a>
                            <a href="#" class="nav-item nav-link active">Offer Booking</a>
                            <a href="adminpayment.php" class="nav-item nav-link">Payment Details</a>
                            <a href="insertcar.php" class="nav-item nav-link ">Add Cars</a>

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

        <!-- Carousel Start -->
        <br>

        <?php
        include 'connect.php';
        $query = "SELECT * FROM offerbook where status!='Delete'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run)) {
            echo '<table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                                    <th>Username</th>
                                    <th>Offer Name</th>
                                    <th>Offer Price</th>
                                    <th>Brand Name</th>
                                    <th>Car Name</th>
                                    <th>KM</th>
                                    <th>Register Number</th>
                                    <th>Booked Date</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                    
                                
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
            while ($row = mysqli_fetch_array($query_run)) {
        ?>

                <tr>
                    <td><?php echo $row['uname'] ?></td>
                    <td><?php echo $row['offname'] ?></td>
                    <td><?php echo $row['offprice'] ?></td>
                    <td><?php echo $row['carcompany'] ?></td>
                    <td><?php echo $row['carname'] ?></td>
                    <td><?php echo $row['km'] ?></td>
                    <td><?php echo $row['regnum'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo "<form action='#' method=post><button  value='" . $row['id'] . "' class='btn btn-danger' name=delete>DELETE</button></form>" ?></td>
                    <td><?php echo "<form action='approve1.php' method=post><button type='submit' value='" . $row['id'] . "' class='btn btn-danger' name=approvee>Approve</button></form>" ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
            </table>


        <?php
            if (isset($_POST["delete"])) {
                $del = $_POST["delete"];
                echo  $dele = "UPDATE `offerbook` SET `status`= 'Delete' WHERE `id`='$del'";
                mysqli_query($con, $dele);
                echo "<script>alert('Service delete Successfully');
                            window.location.href='adminofferview.php';
                            </script>";
            }
            echo ('</tbody>
                        </table>');
        } else {
            echo "<h1><br><br><br><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                        Not One book your service!!!  <br><br><br><br><br></h1>";
        }

        ?>




        <br><br><br><br><br><br><br><br>











        <!-- Carousel End -->




        <!-- Footer Start -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <div class="footer-contact">
                            <center>
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
                            </center>
                        </div>
                        </center>
                    </div>

                    <div class="container copyright">
                        <p>&copy; <a href="#">CAR BUDDY</a>, All Right Reserved. Designed By <a href="#">JERIN</a></p>
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

                <!-- Search -->
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>

                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>



    </body>

    </html>
<?php
} else {
    header('location:Login.php');
}
?>