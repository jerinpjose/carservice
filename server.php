<?php
include 'connect.php';
if (isset($_POST['Url'])) {
    $carbrand = $_POST['Url'];
    $query = "SELECT * FROM car where carcompany = '$carbrand' ";
    $result = mysqli_query($con, $query);
    echo "<option value='' class='vechicle'>--- Choose a Car ---</option>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value=" . $row['carname'] . " class='vechicle'>" . $row['carname'] . "</option>";
    }
}
