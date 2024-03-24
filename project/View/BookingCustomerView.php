<?php


if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


require_once('../Model/bookings.php');
$roomType = isset($_REQUEST['roomType']) ? $_REQUEST['roomType'] : '';
$price = isset($_REQUEST['price']) ? $_REQUEST['price'] : '';
$GuestNumber = isset($_REQUEST['capacity']) ? $_REQUEST['capacity'] : '';

$room=search($roomType, $price, $GuestNumber);


   ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View Room</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
               
                
                <td>room Number</td>
                <td>room Type</td>
                <td>capacity</td>
                <td>price</td>
                <td>Action</td>
                
            </tr>
            <?php for($i=0; $i<count($room); $i++){?>
            <tr>
                
                
                <td><?php echo $room[$i]['roomNumber']; ?></td>
                <td><?=$room[$i]['roomType'] ?></td>
                <td><?php echo $room[$i]['capacity']; ?></td>
                <td><?php echo $room[$i]['price']; ?></td>
                <td> <a href="BookCustomer.php?roomNumber=<?=$room[$i]['roomNumber']?>"> Book </a></td> 
               
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="BookingCustomer.php">Back</a>
        <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityCustomer.php">Next</a></div> 
        </body>
        </html>
        