<?php
$roomId=$_REQUEST ['roomId'];
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>

<html>
<head>
    <title>Room Management Form</title>
</head>
<body>
    <div style="text-align: center;">
    <h3><U>Delete Room</U></h3>
        <form method="post" action="../Controller/RoomDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" >
                    <tr>
                        <td>Room Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomId" value="<?= $roomId ?>"/>
                            </div>
                        </td>
                        <td>Are u sure u want to delete it?</td>
                      </tr>
                        <tr>
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;">
                            <button type="submit" name="delete" value="delete">Delete</button>
                             </div>
                        </td>
                    </tr> 
                </table> 
                <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomView.php">Back</a></div>
        </form>
    </div>
</body>
</html>
