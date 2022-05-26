<?php
session_start();
include 'forgetpassphp.php';
?>
<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <title>CAR BUDDY- Update Your Password</title>
                

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
                            
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav mr-auto">
                                </div>
                                <div class="ml-auto">
                                    <a class="btn btn-custom" href="Login.php">Login</a>
                                </div>
                                <div class="ml-auto">
                                    <a class="btn btn-custom" href="register.php">Register</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Nav Bar End -->


 <div class="location">
    <div class="container">
     <div class="row">
        <div class="col-lg-5">
            <div class="location-form">
                <h3>Password Update</h3>
                <form action="#" method="POST">
                    <div class="control-group">
                        <input type="text" class="form-control" placeholder="Password" name="password" required="required" />
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" placeholder="Confirm Password" name="cpassword" required="required" />
                    </div>
                   
                    <div>
                        <button class="btn btn-custom" name="submit" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>
</div>

</body>
    </html>

