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
    <link rel="stylesheet" href="bookingStyle.css"/>
</head>
<body id="b8">

    <h3 id="b5"><U>View Room</U></h3>


<table border="1" cellspacing="0" align="center" class="c4">
            <tr class="c3" >
               
                
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
                <td> <a id="b4" href="BookCustomer.php?roomNumber=<?=$room[$i]['roomNumber']?>"> Book </a></td> 
               
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a id="b4" href="BookingCustomer.php">Back</a>
        <a id="b4" href="FacilityCustomer.php">Next</a></div> 
        </body>
        </html>
        