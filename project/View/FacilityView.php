<?php
session_start();



if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/facilityadmin.php');
$facilityId = isset($_REQUEST['facilityId']) ? $_REQUEST['facilityId'] : '';

$facility=viewFacility();
$_SESSION['facility'] = $facility;

    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View  Facility Details</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
            <td>Facility Id</td>
                <td>Facility Name</td>
                <td>Facility Description</td>
                <td>Catagory</td>
                
                <td>Action</td>
                <td>Action</td>
            </tr>
            <?php for($i=0; $i<count($facility); $i++){?>
            <tr>
            <td><?php echo $facility[$i]['facilityId']; ?></td>
                <td><?php echo $facility[$i]['facilityName']; ?></td>
                <td><?=$facility[$i]['facilityDescription'] ?></td>
                <td><?php echo $facility[$i]['facilityCatagory']; ?></td>
                
                
               <td> <a href="facilityEdit.php?facilityId=<?=$facility[$i]['facilityId']?>"> Edit </a></td> 
               <td> <a href="facilityDelete.php?facilityId=<?=$facility[$i]['facilityId']?>"> Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityAdmin.php">Back</a>
         <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="PackageAdmin.php">Next</a></div>
        </body>
        </html>
        