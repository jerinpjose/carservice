<?php
$name = $_POST['uname'];
$mobile = $_POST['phone'];
$pass = $_POST['psw'];
include 'connect.php';
if (!$con) {
	echo ("Error in Connection");
}

$upd = "UPDATE `register` SET `password`='" . $pass . "' WHERE `uname`='" . $name . "' AND `mobile`='" . $mobile . "' ";
$result = mysqli_query($con, $upd);

if ($result) {
	if (mysqli_num_rows($result) == 0) {
		echo "<script>alert('Password Updated');
		window.location.href='Login.php';
		</script>";
	} else {
		echo "<script>alert('Invalid Credentials..!!');
		window.location.href='updateuser.php';
		</script>";
	}
}
