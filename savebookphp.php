<?php
include 'connect.php';
session_start();
$name = $_SESSION["uname"];
if (isset($_POST["submit"])) {
    $vechiclecompany = $_POST['veccom'];
    $vechiclename = $_POST['vecname'];
    $km = $_POST['km'];
    $regnumber = $_POST['regnum'];
    $vccomplaint = $_POST['complaint'];
    $dates = $_POST['bdate'];
    if (!$con) {
        echo "error";
    } else {
        echo $add = "INSERT INTO `booking`(`uname`,`vechiclecompany`, `vechiclename`, `km`, `regnum`, `servicetype`, `bdate`, `status`) VALUES  ('$name','$company','$carname','$km','$regnum','$vccomplaint','$dates','notapprove')";
        if (mysqli_query($con, $add)) {
            echo "<script>alert('Registration Successfull');
		    	window.location.href='Bookingstatus.php';
			    </script>";
        } else {
            echo "<script>alert('Registration Failed');
			    </script>";
        }
    }
}
