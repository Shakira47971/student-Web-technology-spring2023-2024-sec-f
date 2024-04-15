
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
    <link rel="stylesheet" href="bookingStyle.css"/>
</head>
<body id="b8">
    <form method="post" action="../Controller/BookingCustomerCheck.php" enctype="">
   

         <h3 id="b2"><U>Online Booking</U></h3>


<table border="1"  cellspacing="0" align="center" class="c1">
       

<?php for($i=0; $i<count($room); $i++){?>

            
            
            <tr class="c2">
            
                    <td>Guest Id:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="text"name="guestId">
                        </div>
                    </td>
                    <td>Enter at least 5 digit Id</td>
                </tr>
                <tr class="c2">
                    <td>Room Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="roomNumber" value="<?php echo $room[$i]['roomNumber']; ?>">
                        </div>
                    </td>
                   
                </tr>
                <tr class="c2">
                    <td>Guest Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="capacity" value="<?php echo $room[$i]['capacity']; ?>">
                        </div>
                    </td>
                   
                </tr>
                <tr class="c2">
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
                
                <tr class="c2">
                    <td>Check-in Date:</td>
                    <td>
                        <div style="padding: 3px;">
                            <input type="date" id="checkinDate" name="checkinDate" required>
                        </div>
                    </td>
                    <td>Enter at valid date for check in</td>
                </tr>
                <tr class="c2">
                    <td>Check-Out Date:</td>
                    <td>
                        <div style="padding: 3px;">
                            <input type="date" id="checkoutDate" name="checkoutDate" required>
                        </div>
                    </td>
                    <td>Enter at valid date for check out</td>
                </tr>
                <tr class="c2">
                    <td>Price Range:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price" value="<?php echo $room[$i]['price']; ?>">
                        </div>
                    </td>
                  
                </tr>
                <tr class="c2">
                    <td colspan="2" align="center">
                        <div style="padding: 7px;">
                            <button type="submit" id="b3">Book Rooms</button>
                        </div>
                    </td> </tr>
                    
                    <?php } ?>
                
            </table>
            <div style="padding: 7px;"> 
            <a id="b4" href="BookingCustomer.php">Back</a></div>
    </form>
</body>
</html>