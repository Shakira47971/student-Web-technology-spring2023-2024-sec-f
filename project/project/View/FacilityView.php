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
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    <h3 id="b1"><u>Click&Stay<u></h3>
    <h4 id="b10">Find your next stay</h4>
     <a id="b4" href="FacilityAdmin.php">Back</a>
         <a id="b11"href="PackageAdmin.php">Next</a>
</fieldset>
   


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
        
        </body>
        </html>
        