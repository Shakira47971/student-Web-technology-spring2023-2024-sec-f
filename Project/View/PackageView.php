<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


require_once('../Model/packageadmin.php');
$packageId = isset($_REQUEST['packageId']) ? $_REQUEST['packageId'] : '';
$package=viewPackage();

$_SESSION['package'] = $package;

    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View  Package Details</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
            <td>Package Id</td>
                <td>Package Name</td>
                <td>Package Description</td>
                <td> Package Catagory</td>
                <td> Price</td>
                 <td>Action</td>
                <td>Action</td>
            </tr>
            <?php for($i=0; $i<count($package); $i++){?>
            <tr>
            <td><?php echo $package[$i]['packageId']; ?></td>
                <td><?php echo $package[$i]['packageName']; ?></td>
                <td><?=$package[$i]['packageDescription'] ?></td>
                <td><?php echo $package[$i]['packageCatagory']; ?></td>
                <td><?php echo $package[$i]['packagePrice']; ?></td>
                
                
               <td> <a href="packageEdit.php?packageId=<?=$package[$i]['packageId']?>"> Edit </a></td> 
               <td> <a href="packageDelete.php?packageId=<?=$package[$i]['packageId']?>"> Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="PackageAdmin.php">Back</a>
       <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="logOut.php">log Out</a></div>
        </body>
        </html>
        