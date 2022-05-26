<?php
include 'connect.php';
if (isset($_POST['approvee'])) {
	$id = $_POST['approvee'];
	$query = "UPDATE booking SET status='Approve' where id='$id'";
	$data = mysqli_query($con, $query);
	if ($data) {
		header('location:adminbookingwatch.php');
	}
}
