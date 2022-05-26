<?php
session_start();
include 'connect.php';
$offerprice = $_SESSION['amt'];
$name = $_SESSION["uname"];
$id = $_SESSION['id'];
$fullname = $_SESSION['fname'];
$plan=$_SESSION['plan'];

$vechiclecompany = $_SESSION['v1'];
$vechiclename = $_SESSION['v2'];

$email = $_SESSION['email'];
$payment_status = "Completed";

$added_on = date('Y-m-d h:i:s');
$query = "insert into tbl_payments(Full_name,name,amount,payment_status,added_on) values('$fullname','$name','$offerprice','$payment_status','$added_on')";
mysqli_query($con, $query);
