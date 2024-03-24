<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

require_once('../Model/bookings.php');
$GuestId = isset($_REQUEST['guestd']) ? $_REQUEST['guestId'] : '';
    


$guest=viewCustomer();
$_SESSION['guest'] = $guest;

    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View Customer Details</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
                <td><b>Guest Id</b></td>
                <td><b>Guest Number</b></td>
                <td><b>room Type</b></td>
                <td><b>Check-in Date</b></td>
                <td><b> Check-Out Date</b></td>
                <td><b> Price Range</b></td>
                <td>Action</td>
                <td>Action</td>
            </tr>
            <?php for($i=0; $i<count($guest); $i++){?>
            <tr>
                <td><?php echo $guest[$i]['guestId']; ?></td>
                <td><?php echo $guest[$i]['capacity']; ?></td>
                <td><?php echo $guest[$i]['roomType']; ?></td>
                <td><?php echo $guest[$i]['checkinDate']; ?></td>
                <td><?php echo $guest[$i]['checkoutDate']; ?></td>
                <td><?php echo $guest[$i]['price']; ?></td>
                
               <td> <a href="CustomerEdit.php?guestId=<?=$guest[$i]['guestId']?>"> Edit </a></td> 
               <td> <a href="CustomerDelete.php?guestId=<?=$guest[$i]['guestId']?>">Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 3px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomAdmin.php">Next</a>
         <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="BookingAdmin.php">Back</a></div>
           
        </body>
        </html>
        