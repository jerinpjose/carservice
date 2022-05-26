<?php
session_start();
$name = $_POST['uname'];
$pass = $_POST['psw'];
$_SESSION['uname'] = $name;

include 'connect.php';


if (!$con) {
	echo ("Error in Connection");
}

$sql = "SELECT * FROM register where uname='" . $name . "'";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$st = $row['status'];
		if ($st == '0') {
			echo "<script>alert('Restricted User!!');
							  window.location.href='Login.php';
							 </script>";
		}
		$st = $row['status'];
		$password = $row['password'];
		$_SESSION['phone'] = $row['mobile'];
		$_SESSION['name'] = $row['name'];
		/*from db to a variable in php file*/
	}
} else {

	echo "<script>alert('Incorrect Username or Password');
		window.location.href='Login.php';
		</script>";
}
if ($password == $pass) {
	if ($st == '2') {
		$_SESSION["id"] = session_id();
		echo "<script>('Admin Logged In Successfully');
			      window.location.href='adminindex.php';
			     </script>";
	} else {
		$_SESSION["id"] = session_id();
		echo "<script>('Logged In Successfully');
			      window.location.href='home.php';
			     </script>";
	}
} else {

	echo "<script>alert('Incorrect Username or Password');
			window.location.href='Login.php';
			</script>";
}
