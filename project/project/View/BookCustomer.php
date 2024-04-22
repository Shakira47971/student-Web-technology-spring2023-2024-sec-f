
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
    <link rel="stylesheet" href="Customer.css"/>
</head>
<body id="b8">
    <form method="post" action="../Controller/BookingCustomerCheck.php" enctype="">
    <fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    <a id="b4" href="BookingCustomer.php">Back</a>
        
      
</fieldset>

      

<table border="1"  cellspacing="0" align="center" class="c5">
       

<?php for($i=0; $i<count($room); $i++){?>

            
            
            <tr class="c1">
            
                    <td>Guest Id:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="text"name="guestId">
                        </div>
                    </td>
                    
                </tr>
                <tr class="c1">
                    <td>Room Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="roomNumber" value="<?php echo $room[$i]['roomNumber']; ?>">
                        </div>
                    </td>
                   
                </tr>
                <tr class="c1">
                    <td>Guest Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="capacity" value="<?php echo $room[$i]['capacity']; ?>">
                        </div>
                    </td>
                   
                </tr>
                <tr class="c1">
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
                
                <tr class="c1">
                    <td>Check-in Date:</td>
                    <td>
                        <div style="padding: 3px;">
                            <input type="date" id="checkinDate" name="checkinDate" required>
                        </div>
                    </td>
                   
                </tr>
                <tr class="c1">
                    <td>Check-Out Date:</td>
                    <td>
                        <div style="padding: 3px;">
                            <input type="date" id="checkoutDate" name="checkoutDate" required>
                        </div>
                    </td>
                    
                </tr>
                <tr class="c1">
                    <td>Price Range:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price" value="<?php echo $room[$i]['price']; ?>">
                        </div>
                    </td>
                  
                </tr>
                <tr class="c1">
                    <td colspan="2" align="center">
                        <div style="padding: 7px;">
                            <button type="submit" id="b3">Book Rooms</button>
                        </div>
                    </td> </tr>
                    
                    <?php } ?>
                
            </table>
            
            
    </form>
</body>
</html>