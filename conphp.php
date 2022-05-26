<?php
include 'connect.php';
session_start();
$name = $_SESSION["uname"];
$fname = $_SESSION['name'];
$mob = $_SESSION['phone'];
if (isset($_POST["submit"])) {
    $sub = $_POST["sub"];
    $com = $_POST["msg"];

    if (!$con) {
        echo "error";
    } else {
        $add = "INSERT INTO `message`(`username`, `name`, `mobile`, `subject`, `comment`) VALUES ('$name','$fname','$mob','$sub','$com')";
        if (mysqli_query($con, $add)) {
            echo "<script>alert('Message sended Successfull');
                window.location.href='home.php';
			    </script>";
        } else {
            echo "<script>alert(' Failed');
			    </script>";
        }
    }
}
