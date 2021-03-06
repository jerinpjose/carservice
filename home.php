<?php
session_start();
$name = $_SESSION["uname"];
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
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Save</a>
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

                        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="userupdates.php" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img-xs rounded-circle" src="img/face.jpg" alt="Profile image"> </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle" src="img/face.jpg" alt="Profile image">
                                    <p class="mb-1 mt-3 font-weight-semibold"></p>
                                </div>

                                <a class="dropdown-item" href="#"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                            </div>
                        </li>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->

        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carser2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Periodic service</h3>
                            <h1>Being with us is Like being with your Family</h1>
                            <p>
                                To keep your car fine and running, we provide a regular check-up which will avoid your car from facing bigger problems. Also, cheering up your car with routine services will lead to better performance in return.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carser1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Preventive Maintenance Service </h3>
                            <h1>Keep your Car With More Power</h1>
                            <p>
                                It matters to us that your car takes you to your destinations safely as well as smoothly and we are here to take care of it for you.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carser3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Body Maintance And Painting </h3>
                            <h1>Keep your Car With more Stylish</h1>
                            <p>
                                Car painters need to demonstrate great skills in matching paints with the original colour,
                                or on occasion repainting the vehicle in a completely new colour.They must also apply these
                                paints, undercoats and sealants in an environmentally safe and healthy work environment.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                                If put simply, car detailing refers to cleaning and protecting your car from top to bottom using various tools
                                and different techniques which are usually not used in the traditional car cleaning or car washing methods.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Modern Alloys & Tyres</h3>
                            <h1>Quality service and Unlimted Warranty for you</h1>
                            <p>
                                In the automotive industry, alloy wheels are wheels that are made from an alloy
                                of aluminium or magnesium. Alloys are mixtures of a metal and other elements.
                                They generally provide greater strength over pure metals, which are usually
                                much softer and more ductile
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                                If put simply, car detailing refers to cleaning and protecting your car from top to bottom using various tools
                                and different techniques which are usually not used in the traditional car cleaning or car washing methods.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/carser4.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car Maintance and Periodic service</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Periodic Maintenance Service is a schedule of planned maintenance activities aimed to prevent any breakdowns and failures of your car. It saves money on repairs in the future too. PMS has proved that it costs less to maintain the car than to repair it.
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Oil and filter change</li>
                                <li><i class="far fa-check-circle"></i>Brake Shoe and Pad</li>
                                <li><i class="far fa-check-circle"></i>Engine Mechanism's</li>
                                <li><i class="far fa-check-circle"></i>Body Maintance</li>
                                <li><i class="far fa-check-circle"></i>Wheel Balancing and Alignment</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-header text-left">

                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Car detailing is a more thorough, in-depth, version of a regular car wash.
                                A car detail is not only focused on cleaning the car but also reconditioning
                                and occasionally restoration, such as light cosmetic work. The difference between
                                a car wash and a car detail is unrecognizable
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window wiping</li>
                                <li><i class="far fa-check-circle"></i>car polishing</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/carser6.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">

                            <h2>car quality painting</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Automotive paint is paint used on automobiles for both protection and decoration purposes. A basecoat is applied after the primer paint is applied. Following this, a clearcoat of paint may be applied that forms a glossy and transparent coating. The clearcoat layer must be able to withstand UV light.
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Full painting</li>
                                <li><i class="far fa-check-circle"></i>Bamber painting</li>
                                <li><i class="far fa-check-circle"></i>Scratch removal</li>
                                <li><i class="far fa-check-circle"></i>Under coating</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Serviceing, Washing and painting</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                            <p>Exterior car detailing pays attention to every inch of your car. It gives specialized treatment to each part, depending on its material e.g., metal, plastic. etc </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <p>An interior cleaner is a foaming automotive internal purifier, that will help you
                                clean the interior of your car</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>Vacuum Cleaners are apparatus that remove and clean many kinds of
                                surfaces by means of sucking and removing dust and small particles,
                                and it is powered by electricity.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <p>Cleaning your car seats is like cleaning your sofa. You cannot soak the fabric
                                for too long, as drying it will be challenging. The way you clean your car
                                seat will depend on the type of material it is made </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <p>Dirty windows aren???t just gross to look at, they can be dangerous. Seeing the road ahead, to the side, and behind you is
                                somewhat important to your continued health and safety,</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                            <p>This cleaning method recently became increasingly popular thanks to the creation
                                of specific products precisely called ???savewater??? products which are rinse-free.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Body Work</h3>
                            <p>body work includes both maintenance and repair. Not limited to post-accident
                                repairs only, auto body includes both mechanical and structural assessments
                                and repairs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Engine works</h3>
                            <p>Specifically, an internal-combustion engine is a heat engine in
                                that it converts energy from the heat of burning gasoline into mechanical work,
                                or torque</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">25</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">350</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Price Start -->

        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Periodic Service Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Serviceing</h3>
                                <h2><span>Rs</span><strong>1850</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Oil and filter change</li>
                                    <li><i class="far fa-check-circle"></i>Coolant Oil refill</li>
                                    <li><i class="far fa-check-circle"></i>Brake Pad Change</li>
                                    <li><i class="far fa-times-circle"></i>Full Check up</li>
                                    <li><i class="far fa-times-circle"></i>Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="Basic_Service_1850" href="price.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Serviceing</h3>
                                <h2><span>Rs</span><strong>2500</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Oil and filter change</li>
                                    <li><i class="far fa-check-circle"></i>Coolant Oil refill</li>
                                    <li><i class="far fa-check-circle"></i>Brake Pad Change</li>
                                    <li><i class="far fa-check-circle"></i>Full Check Up</li>
                                    <li><i class="far fa-times-circle"></i>Washing and poolishing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="Premium_Service_2500" href="price.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Super Serviceing</h3>
                                <h2><span>Rs</span><strong>3500</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Oil and filter change</li>
                                    <li><i class="far fa-check-circle"></i>Coolant Oil refill</li>
                                    <li><i class="far fa-check-circle"></i>Brake Pad Change</li>
                                    <li><i class="far fa-check-circle"></i>Full Check Up</li>
                                    <li><i class="far fa-check-circle"></i>Washing and poolishing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="Super_service_3500" href="price.php">Book Now</a>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span>Rs</span><strong>600</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="Basic_Cleaning_600" href="price.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span>Rs</span><strong>1499</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="Premium_cleaning_1499" href="price.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span>Rs</span><strong>2500</strong><span></span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" value="Complex_Cleaning_2500" href="price.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->


        <!-- Location Start -->
        <center>
            <div class="location">
                <div class="container">


                    <div class="section-header text-center">
                        <p>Serviceing Points</p>
                        <h2>Car Buddy serviceing Points</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Car Buddy Point</h3>
                                    <p>kottayam</p>
                                    <p><strong>Call:</strong>+91 904 804 3444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Car Buddy Point</h3>
                                    <p>Eranakulam</p>
                                    <p><strong>Call:</strong>+012 345 6789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Car Buddy Point</h3>
                                    <p>Thrissur</p>
                                    <p><strong>Call:</strong>+91 856 963 7411 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Car Buddy Point</h3>
                                    <p>Thiruvananthapuram</p>
                                    <p><strong>Call: </strong> +91 904 804 3444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Car Buddy Point</h3>
                                    <p>Palai</p>
                                    <p><strong>Call:</strong>+91 904 804 3444 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Car Buddy Point</h3>
                                    <p>Cochin</p>
                                    <p><strong>Call:</strong>+91 904 804 3444 </p>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </center>
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