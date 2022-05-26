<?php
session_start();
include'connect.php';
$offerprice =$_SESSION['amt'];
$name = $_SESSION["uname"];
$id = $_SESSION['id'];
$fullname=$_SESSION['fname'];

$vechiclecompany = $_SESSION['v1'];
$vechiclename = $_SESSION['v2'];

$query = "SELECT * FROM serviceplans where amount= '".$offerprice."' ";
$result = mysqli_query($con, $query);
$row1 = mysqli_fetch_array($result);
$plan=$_SESSION['plan']=$row1['plantype'];


?>

<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function pay_now() {
            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + 600,
                success: function(result) {
                    var options = {
                        "key": "rzp_test_nCNI4SjWoKJi55",
                        "amount": <?php echo $offerprice; ?>00,
                        "currency": "INR",
                        "name": "CarBuddy",
                        "description": "Car Buddy Gateway",
                        "image": "img/CARBUDDY.png",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function(result) {
                                    window.location.href = "thank_you.php";
                                }
                            });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });


        }
    </script>
</head>

<body onload="pay_now()">
</body>