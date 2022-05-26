<h1></h1>
<h1></h1>
<h1></h1>
<a href="Home.php" class="btn btn-primary" id="print-btn">Back to Home</a>


<?php
session_start();
include "connect.php";

$offerprice = $_SESSION['amt'];
$name = $_SESSION["uname"];
$id = $_SESSION['id'];
$fullname = $_SESSION['fname'];
$plan = $_SESSION['plan'];

$vechiclecompany = $_SESSION['v1'];
$vechiclename = $_SESSION['v2'];


$payment_status = "Completed";

$added_on = date('Y-m-d h:i:s');
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Print</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <style>
                    table,
                    td {
                        border: solid 2px black;
                        text-align: center;
                        border-collapse: collapse;
                    }



                    td {
                        padding: 0.5em;
                    }

                    [colspan="4"][rowspan="2"] {
                        height: 4em;
                    }
                </style>


                <table class="table table-bordered print">

                    <tr>
                        <td colspan="4" width="25%" rowspan="2">
                            <h1>Bill</h1>
                        </td>
                    </tr>
                    <tr>
                    </tr>

                    <tr>
                        <td colspan="4" width="25%" rowspan="2">
                            <h2>CarBuddy Car Service Centre</h2>
                        </td>
                    </tr>
                    <tr>
                    </tr>

                    <tr>
                        <td>Name: </td>
                        <td><?php echo $fullname; ?></td>
                    </tr>

                    <tr>
                        <td>Plan Type:</td>
                        <td><?php echo $plan; ?></td>
                    </tr>

                    <tr>
                        <td>Vehicle Brand:</td>
                        <td><?php echo $vechiclecompany; ?></td>
                    </tr>

                    <tr>
                        <td>Model:</td>
                        <td><?php echo $vechiclename; ?></td>
                    </tr>

                    <tr>
                        <td>Date:</td>
                        <td><?php echo $added_on; ?> </td>
                    </tr>



                    <tr>
                        <td>Payable:</td>
                        <td><?php echo $offerprice; ?> ₹</td>
                    </tr>

                </table>

                <div class="text-center">
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>