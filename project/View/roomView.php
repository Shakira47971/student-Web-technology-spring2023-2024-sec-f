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
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

    <h3 id="b1"><U>View Room</U></h3>


<table border=1  cellspacing=0 align="center" class="c4">
            <tr class="c3">
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
                
               <td> <a  id="b5"href="roomEdit.php?roomId=<?=$room[$i]['roomId']?>"> Edit </a></td> 
               <td> <a id="b5" href="roomDelete.php?roomId=<?=$room[$i]['roomId']?>"> Delete </a></td> 
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 3px;"> <a id="b5" href="StaffAdmin.php">Next</a>
        <a id="b5" href="RoomAdmin.php">Back</a></div>
        </body>
        </html>
        