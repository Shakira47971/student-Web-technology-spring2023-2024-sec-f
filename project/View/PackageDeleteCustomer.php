<?php
require_once('BookingCustomerDb.php');
$packageId=$_REQUEST ['packageId'];
if (empty($packageId)) {
    echo "Error: Package id is empty.";
} else {
    $conn = dbconnection();

    $sql = "DELETE FROM packageadmin WHERE packageId='$packageId'";

    if (mysqli_query($conn, $sql)) {

        header('location:PackageViewCustomer.php');

    }
    
    else {
        echo "Error: " ;
    }
}

?>
