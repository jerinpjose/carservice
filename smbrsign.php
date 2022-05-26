<?php
if (isset($_POST["submit"])) {
	session_start();
	$mname = $_POST['name'];
	$ph = $_POST['phone'];
	$email = $_POST['mail'];
	$name = $_POST['uname'];
	$pass = $_POST['psw'];
	include 'connect.php';

	$query = "SELECT 'uname', `email` FROM  register WHERE uname = '$name' OR email = '$email' ";		/*extra*/
	$result = mysqli_query($con, $query);										/*extra*/
	if (mysqli_num_rows($result)) {
		echo "Error..";
		//header('location:smbrsign.php');
		//echo "<font color=red><center>Registration failed!!!. Username or email exists<center></font>";
		echo "<script>alert('Registration failed!!    Username exists');
				window.location.href='register.php';
				</script>";
	} else {



		echo $add = "INSERT INTO `register`(`name`, `mobile`, `email`, `uname`, `password`) VALUES ('$mname','$ph','$email','$name','$pass') ";

		if (mysqli_query($con, $add)) {
			echo "<script>alert('Registration Successfull');
					window.location.href='Login.php';
					</script>";
		} else {
			echo "<script>alert('Registration Failed');
					window.location.href='register.php';
					</script>";
		}
	}
}
