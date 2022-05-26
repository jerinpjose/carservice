<!DOCTYPE html>
<html>
<body>
<h1>Welcome


<?php
include 'connect.php';
session_start();
	$username = $_SESSION["n"];
	echo $username;
?>
</h1>
</body>
</html>
