
<?php

    

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    require_once('../Model/bookings.php');
$roomNumber= isset($_REQUEST['roomNumber']) ? $_REQUEST['roomNumber'] : '';


$room = getRoom($roomNumber);



?>

<html>
<head>
    <title>Online Booking Form</title>
</head>
<body style ="text-align: center;">
    <form method="post" action="../Controller/BookingCustomerCheck.php" enctype="">
   

         <h3><U>Online Booking</U></h3>


<table border=1  cellspacing=0 align="center">
       

<?php for($i=0; $i<count($room); $i++){?>

            
            
            <tr>
            
                    <td>Guest Id:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="text"name="guestId">
                        </div>
                    </td>
                    <td>Enter at least 5 digit Id</td>
                </tr>
                <tr>
                    <td>Room Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="roomNumber" value="<?php echo $room[$i]['roomNumber']; ?>">
                        </div>
                    </td>
                   
                </tr>
                <tr>
                    <td>Guest Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="capacity" value="<?php echo $room[$i]['capacity']; ?>">
                        </div>
                    </td>
                   
                </tr>
                <tr>
                <td>Room Type:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="roomType" >
                            <option value="single"<?php if ($room[$i]['roomType'] == 'single') echo 'selected="selected"'; ?>>Single</option>
                            <option value="double"<?php if ($room[$i]['roomType'] == 'double') echo 'selected="selected"'; ?>>Double</option>
                            <option value="suite"<?php if ($room[$i]['roomType'] == 'suite') echo 'selected="selected"'; ?>>Suite</option>
                        </select>
                    </div>
                </td>
            </tr>
                
                <tr>
                    <td>Check-in Date:</td>
                    <td>
                        <div style="padding: 3px;">
                            <input type="date" id="checkinDate" name="checkinDate" required>
                        </div>
                    </td>
                    <td>Enter at valid date for check in</td>
                </tr>
                <tr>
                    <td>Check-Out Date:</td>
                    <td>
                        <div style="padding: 3px;">
                            <input type="date" id="checkoutDate" name="checkoutDate" required>
                        </div>
                    </td>
                    <td>Enter at valid date for check out</td>
                </tr>
                <tr>
                    <td>Price Range:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price" value="<?php echo $room[$i]['price']; ?>">
                        </div>
                    </td>
                  
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <div style="padding: 7px;">
                            <button type="submit">Book Rooms</button>
                        </div>
                    </td> </tr>
                    
                    <?php } ?>
                
            </table>
            <div style="padding: 7px;"> 
            <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="BookingCustomer.php">Back</a></div>
    </form>
</body>
</html>