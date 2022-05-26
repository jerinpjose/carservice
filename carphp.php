<?php
include 'connect.php';
if (isset($_POST["submit"])) {
    $carcompany = $_POST['carcom'];
    $carname = $_POST['carnam'];

    $query = "SELECT 'carname' FROM  car WHERE carname = '$carname'  ";        /*extra*/
    $result = mysqli_query($con, $query);                                        /*extra*/
    if (mysqli_num_rows($result)) {
        echo "Error..";
        //header('location:smbrsign.php');
        //echo "<font color=red><center>Registration failed!!!. Username or email exists<center></font>";
        echo "<script>alert('    Carname exists!!!!');
				window.location.href='insertcar.php';
				</script>";
    } else {
        echo $add = "INSERT INTO `car`(`carcompany`,`carname`) VALUES  ('$carcompany','$carname')";
        if (mysqli_query($con, $add)) {
            echo "<script>alert('Added');
		    	window.location.href='insertcar.php';
			    </script>";
        } else {
            echo "<script>alert('Registration Failed');
			    </script>";
        }
    }
}
