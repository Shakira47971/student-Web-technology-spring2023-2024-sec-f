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
    <link rel="stylesheet" href="bookingStyle.css"/>
</head>
<body id="b8">

    <h3 id="b5"><U>Booking room Details</U></h3>
    <form method="post" action="FacilityCustomer.php" enctype="">

<table border="1"  cellspacing="0" align="center"  class="c4">
            <tr  class="c3">
               
                
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
        <div style="padding: 7px;"> <a id="b4" href="FacilityCustomer.php">Next</a>
         <a id="b4" href="BookingCustomer.php">Back</a></div>
        </body>
        </html>
        