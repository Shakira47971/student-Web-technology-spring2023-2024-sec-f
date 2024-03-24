<?php
session_start();
$guest = $_SESSION['guest'];

 
 
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/bookings.php');
$GuestId = isset($_GET['guestId']) ? $_GET['guestId'] : '';
   
    
  $GuestEdit=guestEdit($GuestId);
   
   
   
    
 
?>
 
<html>
<head>
    <title>Edit Customer Details</title>
</head>
<body style="text-align: center;">

    <h3><U>Edit Customer Details</U></h3>
    <br>
    <form method="post" action="../Controller/CustomerEditCheck.php">

        <table align="center" cellspacing="0">
        <?php for($i=0; $i<count($GuestEdit); $i++){?>
        <tr>
                <td>Guest Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text"name="guestId" value="<?php echo $GuestEdit[$i]['guestId']; ?>"/>
                    </div>
                </td>
            </tr> 
            
            <tr>
    <td>Guest Number</td>    
    <td>
        <div style="padding: 3px;">
            <input type="number" name="capacity" value="<?php echo $GuestEdit[$i]['capacity']; ?>"/>
        </div>
    </td>
</tr>

            <tr>
                <td>Room Type:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="roomType">
                            <option value="single" <?php if ($GuestEdit[$i]['roomType'] == 'single') echo 'selected="selected"'; ?>>Single</option>
                            <option value="double"<?php if ($GuestEdit[$i]['roomType'] == 'double') echo 'selected="selected"'; ?>>Double</option>
                            <option value="suite"<?php if ($GuestEdit[$i]['roomType'] == 'suite') echo 'selected="selected"'; ?>>Suite</option>
                        </select>
                    </div>
                </td> 
            </tr>
           
            <tr>
                <td>Check-in Date:</td>
                <td>
                    <div style="padding: 3px;">
                      
                        <input type="date" id="checkinDate" name="checkinDate" value="<?php echo $GuestEdit[$i]['checkinDate']; ?>" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Check-Out Date:</td>
                <td>
                    <div style="padding: 3px;">
                      
                        <input type="date" id="checkoutDate" name="checkoutDate" value="<?php echo $GuestEdit[$i]['checkoutDate']; ?>"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Price Range:</td>
                <td>
                    <div style="padding: 3px;">
                      
                        <input type="number" name="price" value="<?php echo $GuestEdit[$i]['price']; ?>"/>
                    </div>
                </td>
            </tr>
             

       
   
    <tr>
        <td colspan="2" style="text-align: center;">
        
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="CustomerView.php">Back</a>
          
                
                <button>Update</button>
              <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomAdmin.php">Next</a>
              </div>    
        </td>
    </tr>
    <?php } ?>
</table> 

    
    
</form>

</body>
</html>

        