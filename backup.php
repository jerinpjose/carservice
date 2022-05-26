<?php
include 'connect.php';
$query = "SELECT * FROM `offerbook` WHERE `uname`='$name' ";
$query_run = mysqli_query($con, $query);
if (mysqli_num_rows($query_run)) {
    echo ('<table class="table table-hover table-secondary mt-5 ">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Offer Name</th>
                            <th scope="col">Offer Price</th>
                            <th scope="col">Car Company</th>
                            <th scope="col">Car Name</th>
                            <th scope="col">Kilometer</th>
                            <th scope="col">Registration No:</th>
                            <th scope="col">Date</th>
                           
                           
                          </tr>
                        </thead>
                        <tbody>');
    while ($row = mysqli_fetch_array($query_run)) {
?>
        <tr>
            <td><?php echo $row['offname'] ?></td>
            <td><?php echo $row['offprice'] ?></td>
            <td><?php echo $row['carcompany'] ?></td>
            <td><?php echo $row['carname'] ?></td>
            <td><?php echo $row['km'] ?></td>
            <td><?php echo $row['regnum'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td>
                <?php
                if ($row['status'] == "Approve") {
                    echo "<form action='#' method=post><button value='" . $row['uname'] . "' class='btn btn-danger' name=delete disabled>DELETE</button></form></td>";
                } else {
                    echo "<form action='#' method=post><button value='" . $row['uname'] . "' class='btn btn-danger' name=delete>DELETE</button></form></td>";
                }
                ?>
            <td><?php
                if ($row['status'] == 'notapprove') {
                    echo "Not Approved";
                } else {
                    echo "Approved";
                }
                ?>
            </td>
        </tr>
    <?php
    }
    ?>

<?php
    if (isset($_POST["delete"])) {
        $del = $_POST["delete"];
        $dele = "UPDATE `booking` SET `status`= 'Delete' WHERE `uname`='$del'";
        mysqli_query($con, $dele);
        echo "<script>alert('Service delete Successfully');
		window.location.href='service.php';
		</script>";
    }
    echo ('</tbody>
                </table>');
} else {
    echo "<h1><br><br><br><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                Please book any Services!!!  <br><br><br><br><br></h1>";
}

?>