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
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">

<fieldset id="b9">
    <h3 id="b1"><u>Click&Stay<u></h3>
    <h4 id="b10">Find your next stay</h4>
     <a id="b4" href="PackageAdmin.php">Back</a>
       <a id="b11"href="logOut.php">log Out</a></div>
</fieldset>


<table border=1  cellspacing=0 align="center" class="c4">
            <tr class="c3">
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
                
                
               <td> <a id="b5"href="packageEdit.php?packageId=<?=$package[$i]['packageId']?>"> Edit </a></td> 
               <td> <a  id="b5"href="packageDelete.php?packageId=<?=$package[$i]['packageId']?>"> Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        
        </body>
        </html>
        