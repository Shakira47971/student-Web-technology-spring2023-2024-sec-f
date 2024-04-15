<?php
$roomId = isset($_GET['roomId']) ? $_GET['roomId'] : '';
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>

<html>
<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">
    <div style="text-align: center;">
    <h3 id="b1"><U>Delete Room</U></h3>
        <form method="post" action="../Controller/RoomDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" class="c4" >
                  <tr>  <td>Are u sure u want to delete it?</td></tr>
                    <tr class="c3">
                        <td>Room Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomId" value="<?= $roomId ?>"/>
                            </div>
                        </td>
                        
                      </tr>
                        <tr class="c3">
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;">
                            <button type="submit" name="delete" value="delete">Delete</button>
                             </div>
                        </td>
                    </tr> 
                </table> 
                <div style="padding: 7px;"> <a id="b5" href="RoomView.php">Back</a></div>
        </form>
    </div>
</body>
</html>
