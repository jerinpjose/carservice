<?php
include 'connect.php';
if (isset($_POST['approvee'])) {
    $id = $_POST['approvee'];
    $query = "UPDATE offerbook SET status='Payment Confirmed' where id='$id'";
    $data = mysqli_query($con, $query);
    if ($data) {
        header('location:adminofferview.php');
    }
}
