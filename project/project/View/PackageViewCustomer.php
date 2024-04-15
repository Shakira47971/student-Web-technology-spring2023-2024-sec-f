<?php

require_once('../Model/packageadmin.php');
$package=viewPackage();



if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
    

   

    ?>

<html>
<head>
    <title> View Room</title>
    <link rel="stylesheet" href="bookingStyle.css"/>
</head>
<body id="b8">

    <h3 id="b5"><U>View  Package Details</U></h3>

    <form method="post" action="SelectedFacilities.php" enctype="">
        
<table border="1"  cellspacing="0" align="center" class="c4">

            <tr class="c3">
            <td><b>Package Id</b></td>
                <td><b>Package Name</b></td>
                <td><b>Package Description</b></td>
                <td><b> Package Catagory</b></td>
                <td><b> Price</b></td>
                 <td><b>Action</b></td>
                
            </tr>
            <?php for($i=0; $i<count($package); $i++){?>
                
            <tr>
            <td><?php echo $package[$i]['packageId']; ?></td>
                <td><?php echo $package[$i]['packageName']; ?></td>
                <td><?=$package[$i]['packageDescription'] ?></td>
                <td><?php echo $package[$i]['packageCatagory']; ?></td>
                <td><?php echo $package[$i]['packagePrice']; ?></td>
                
                
               <td> <a href="packageAdd.php?packageId=<?=$package[$i]['packageId']?>"> Add </a></td> </tr>
         
            <?php } ?>
            
        </table>
        <div style="padding: 7px;">  <button type="submit" id="b7">Back </button> </div>
            </form>
        </body>
        </html>
       
   

