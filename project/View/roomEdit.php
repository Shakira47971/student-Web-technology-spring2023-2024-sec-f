<?php

session_start();
$room = $_SESSION['room'];
    
 if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/crudadmin.php');
$roomId = isset($_GET['roomId']) ? $_GET['roomId'] : '';
   
    
  $RoomEdit=roomEdit($roomId);
    
    
    
 
?>
 
<html>
<head>
    <title>Edit Room</title>
</head>
<body style="text-align: center;">

    <h3><U>Edit Room</U></h3>
    <br>
    <form method="post" action="../Controller/roomEditCheck.php">
        <table align="center" cellspacing="0">
        <?php for($i=0; $i<count($RoomEdit); $i++){?>
            <tr>
                <td>Room Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="roomId" value="<?php echo $RoomEdit[$i]['roomId']; ?>" /> 
                    </div>
                </td>
            </tr>
           
              <tr>
                <td>Room Type:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="roomType" >
                            <option value="single"<?php if ($RoomEdit[$i]['roomType'] == 'single') echo 'selected="selected"'; ?>>Single</option>
                            <option value="double"<?php if ($RoomEdit[$i]['roomType'] == 'double') echo 'selected="selected"'; ?>>Double</option>
                            <option value="suite"<?php if ($RoomEdit[$i]['roomType'] == 'suite') echo 'selected="selected"'; ?>>Suite</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Room Number:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="roomNumber" value="<?php echo $RoomEdit[$i]['roomNumber']; ?>" /> 
                    </div>
                </td>
            </tr>
            <tr>
                <td>Capacity:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="capacity" value="<?php echo $RoomEdit[$i]['capacity']; ?>" /> <br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="price" value="<?php echo $RoomEdit[$i]['price']; ?>" /> <br>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <div style="padding: 15px;">
                        <button type="submit" name="update" value="update">Update</button>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomView.php">Back</a></div>
       
    </form>

</body>
</head>
</html>