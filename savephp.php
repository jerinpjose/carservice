<?php
include 'connect.php';

$name = $_SESSION["uname"];
if (isset($_POST["submit"])) {
    $company = $_POST['veccom'];
    $carname = $_POST['vecname'];
    $model = $_POST['km'];
    $regnumber = $_POST['regnum'];

    if (!$con) {
        echo "error";
    } else {
        echo $add = "INSERT INTO `save`( `uname`,`company`, `carname`, `model`, `regnum`) VALUES ('$name','$company','$carname','$model','$regnumber')";
        if (mysqli_query($con, $add)) {
            echo "<script>
		    	window.location.href='saveview.php';
			    </script>";
        } else {
            echo "<script>alert('Save Failed');
			    </script>";
        }
    }
}
