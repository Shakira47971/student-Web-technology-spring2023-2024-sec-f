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
</head>

    <body style="text-align: center;">

        <h3><u> Add Package </u></h3>
        <form method="post" action="logOut.php" enctype="">
        

        <table border=1  cellspacing=0 align="center">
            <tr>
            <td>Package Id</td>
                <td>Package Name</td>
                <td>Package Description</td>
                <td> Package Catagory</td>
                <td> Price</td>
                 
            </tr>
            <?php for($i=0; $i<count($package); $i++){?>
            <tr>
            <td><?php echo $package[$i]['packageId']; ?></td>
                <td><?php echo $package[$i]['packageName']; ?></td>
                <td><?=$package[$i]['packageDescription'] ?></td>
                <td><?php echo $package[$i]['packageCatagory']; ?></td>
                <td><?php echo $package[$i]['packagePrice']; ?></td>
               
                </tr>
              <div style="padding: 7px;">
<a href="PackageViewCustomer.php?packageId=<?=$package[$i]['packageId']?>"> Back </a></div>
  <div style="padding: 7px;">
<a href="PackageDelete.php?packageId=<?=$package[$i]['packageId']?>"> Delete </a></div>
                <?php } ?>
</table>

                       <div style="padding: 7px;">
                       <button type="submit">Log Out </button>
                        </div>
</form>
<body>
</html>