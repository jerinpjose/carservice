<?php
include 'connect.php';

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
        echo $add = "INSERT INTO `booking`(`uname`,`vechiclecompany`, `vechiclename`, `km`, `regnum`, `servicetype`, `bdate`, `status`) VALUES  ('$name','$vechiclecompany','$vechiclename','$km','$regnumber','$vccomplaint','$dates','notapprove')";
        if (mysqli_query($con, $add)) {
            echo "<script>
		    	window.location.href='Bookingstatus.php';
			    </script>";
        } else {
            echo "<script>alert('Booking Failed');
			    </script>";
        }
    }
}
