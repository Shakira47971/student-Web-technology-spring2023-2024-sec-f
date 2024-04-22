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
    <link rel="stylesheet" href="Customer.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
    <a id="b4" href="SelectedFacilities.php">Back<a>
</fieldset>

   

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
        
            </form>
        </body>
        </html>
       
   

