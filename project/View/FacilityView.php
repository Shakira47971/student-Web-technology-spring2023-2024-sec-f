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
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

    <h3 id="b1"><U>View  Facility Details</U></h3>


<table border=1  cellspacing=0 align="center" class="c4">
            <tr class="c3">
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
                
                
               <td> <a id="b5" href="facilityEdit.php?facilityId=<?=$facility[$i]['facilityId']?>"> Edit </a></td> 
               <td> <a  id="b5"href="facilityDelete.php?facilityId=<?=$facility[$i]['facilityId']?>"> Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a id="b5" href="FacilityAdmin.php">Back</a>
         <a id="b5"href="PackageAdmin.php">Next</a></div>
        </body>
        </html>
        