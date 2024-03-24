<?php
Session_start();

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


require_once('../Model/bookings.php');
$roomNumber= $_SESSION['roomNumber'];


$room = getRoom($roomNumber);

   ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>Booking room Details</U></h3>
    <form method="post" action="FacilityCustomer.php" enctype="">

<table border=1  cellspacing=0 align="center">
            <tr>
               
                
                <td>room Number</td>
                <td>room Type</td>
                <td>capacity</td>
                <td>price</td>
                
                
            </tr>
            <?php for($i=0; $i<count($room); $i++){?>
            <tr>
                
                
                <td><?php echo $room[$i]['roomNumber']; ?></td>
                <td><?=$room[$i]['roomType'] ?></td>
                <td><?php echo $room[$i]['capacity']; ?></td>
                <td><?php echo $room[$i]['price']; ?></td>
              
               
            </tr>
           
             
              
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityCustomer.php">Next</a>
         <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="BookingCustomer.php">Back</a></div>
        </body>
        </html>
        