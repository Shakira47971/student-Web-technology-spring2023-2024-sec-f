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
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">

<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
    <a id="b4"  href="CustomerView.php">Back</a>
               
              <a id="b11" href="RoomAdmin.php">Next</a>
</fieldset>
    
    <form method="post" action="../Controller/CustomerEditCheck.php">

        <table align="center"  class="c1">
        <?php for($i=0; $i<count($GuestEdit); $i++){?>
        <tr class="c1">
                <td>Guest Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text"name="guestId" value="<?php echo $GuestEdit[$i]['guestId']; ?>"/>
                    </div>
                </td>
            </tr> 
            
            <tr class="c1">
    <td>Guest Number</td>    
    <td>
        <div style="padding: 3px;">
            <input type="number" name="capacity" value="<?php echo $GuestEdit[$i]['capacity']; ?>"/>
        </div>
    </td>
</tr>

            <tr class="c1">
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
           
            <tr class="c1">
                <td>Check-in Date:</td>
                <td>
                    <div style="padding: 3px;">
                      
                        <input type="date" id="checkinDate" name="checkinDate" value="<?php echo $GuestEdit[$i]['checkinDate']; ?>" />
                    </div>
                </td>
            </tr>
            <tr class="c1">
                <td>Check-Out Date:</td>
                <td>
                    <div style="padding: 3px;">
                      
                        <input type="date" id="checkoutDate" name="checkoutDate" value="<?php echo $GuestEdit[$i]['checkoutDate']; ?>"/>
                    </div>
                </td>
            </tr>
            <tr class="c1">
                <td>Price Range:</td>
                <td>
                    <div style="padding: 3px;">
                      
                        <input type="number" name="price" value="<?php echo $GuestEdit[$i]['price']; ?>"/>
                    </div>
                </td>
            </tr>
             
            <tr class="c1">
        <td colspan="2" style="text-align: center;">
        <div style="padding: 7px;">
        <button  >Update</button></div>
    </td></tr>
            </table>
   
   
        
         
              
        
    <?php } ?>
 

    
    
</form>

</body>
</html>

        