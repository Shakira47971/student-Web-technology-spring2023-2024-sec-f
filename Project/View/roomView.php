<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/crudadmin.php');
$room=viewRoom();
$_SESSION['room'] = $room;


    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View Room</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
                <td>room Id</td>
                <td>room Type</td>
                <td>room Number</td>
                <td>capacity</td>
                <td>price</td>
                <td>Action</td>
                <td>Action</td>
            </tr>
            <?php for($i=0; $i<count($room); $i++){?>
            <tr>
                <td><?php echo $room[$i]['roomId']; ?></td>
                <td><?=$room[$i]['roomType'] ?></td>
                <td><?php echo $room[$i]['roomNumber']; ?></td>
                <td><?php echo $room[$i]['capacity']; ?></td>
                <td><?php echo $room[$i]['price']; ?></td>
                
               <td> <a href="roomEdit.php?roomId=<?=$room[$i]['roomId']?>"> Edit </a></td> 
               <td> <a href="roomDelete.php?roomId=<?=$room[$i]['roomId']?>"> Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 3px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="StaffAdmin.php">Next</a>
        <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomAdmin.php">Back</a></div>
        </body>
        </html>
        