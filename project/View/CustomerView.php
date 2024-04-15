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
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

    <h3 id="b1"><U>View Customer Details</U></h3>


<table border=1  cellspacing=0 align="center"  class="c4">
            <tr  class="c3">
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
                
               <td> <a  id="b5" href="CustomerEdit.php?guestId=<?=$guest[$i]['guestId']?>"> Edit </a></td> 
               <td> <a  id="b5" href="CustomerDelete.php?guestId=<?=$guest[$i]['guestId']?>">Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 3px;"> <a  id="b5"  href="RoomAdmin.php">Next</a>
         <a  id="b5" href="BookingAdmin.php">Back</a></div>
           
        </body>
        </html>
        