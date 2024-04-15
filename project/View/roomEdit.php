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
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

    <h3 id="b1"><U>Edit Room</U></h3>
    <br>
    <form method="post" action="../Controller/roomEditCheck.php">
        <table align="center"  class="c4">
        <?php for($i=0; $i<count($RoomEdit); $i++){?>
            <tr class="c3">
                <td>Room Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="roomId" value="<?php echo $RoomEdit[$i]['roomId']; ?>" /> 
                    </div>
                </td>
            </tr>
           
              <tr class="c3">
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
            <tr class="c3">
                <td>Room Number:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="roomNumber" value="<?php echo $RoomEdit[$i]['roomNumber']; ?>" /> 
                    </div>
                </td>
            </tr>
            <tr class="c3">
                <td>Capacity:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="capacity" value="<?php echo $RoomEdit[$i]['capacity']; ?>" /> <br>
                    </div>
                </td>
            </tr>
            <tr class="c3">
                <td>Price:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="price" value="<?php echo $RoomEdit[$i]['price']; ?>" /> <br>
                    </div>
                </td>
            </tr>
            <tr class="c3">
                <td colspan="2" style="text-align: center;">
                    <div style="padding: 15px;">
                        <b><button type="submit" name="update" value="update">Update</button><b>
                    </div>
                </td>
            </tr>
            
        </table>
      <b> <a id="b5" href="RoomView.php">Back</a></b>
      <?php } ?>
    </form>

</body>
</head>
</html>