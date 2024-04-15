<?php
require_once('../Model/packageadmin.php');

    $packageId = $_REQUEST['packageId'];
    $package = getPackage($packageId);
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

        <h3 id="b5"><u> Add Package </u></h3>
        <form method="post" action="logOut.php" enctype="">
        

        <table border="1"  cellspacing="0" align="center" class="c4">
            <tr class="c3">
            <td>Package Id</td>
                <td>Package Name</td>
                <td>Package Description</td>
                <td> Package Catagory</td>
                <td> Price</td>
                 
            </tr>
            <?php for($i=0; $i<count($package); $i++){?>
            <tr >
            <td><?php echo $package[$i]['packageId']; ?></td>
                <td><?php echo $package[$i]['packageName']; ?></td>
                <td><?=$package[$i]['packageDescription'] ?></td>
                <td><?php echo $package[$i]['packageCatagory']; ?></td>
                <td><?php echo $package[$i]['packagePrice']; ?></td>
               
                </tr>
              <div style="padding: 7px;">
<a  id="b4" href="PackageViewCustomer.php?packageId=<?=$package[$i]['packageId']?>"> Back </a>
  
<a id="b4" href="PackageDelete.php?packageId=<?=$package[$i]['packageId']?>"> Delete </a></div>
                <?php } ?>
</table>

                       <div style="padding: 7px;">
                       <button type="submit" id="b7">Log Out </button>
                        </div>
</form>
<body>
</html>