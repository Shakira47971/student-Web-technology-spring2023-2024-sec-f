<?php
if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
}
require_once('../Model/bookings.php');
$GuestId = isset($_REQUEST['guestId']) ? $_REQUEST['guestId'] : '';
$guest = SearchCustomer($GuestId);
?>


<html >
<head>
  
   
    <title>Booking Management</title>
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
      
</fieldset>
    <form>
       
        <table align="center" class="c7">
            <tr class="c3">
                <td>Guest Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="guestId">
                    </div>
                </td>
            </tr>
            <tr class="c3">
                <td colspan="4" align="center">
                    <div style="padding: 3px;">
                        <button type="submit">Search</button>
                        <a id="b4" href="CustomerView.php">View</a>
                    </div>
                </td>
            </tr>
        </table>
        
        <table border="1"  align="center" class="c7">
            <tr class="c3">
                <td><b>Guest Id</b></td>
                <td><b>Guest Number</b></td>
                <td><b>Room Type</b></td>
                <td><b>Check-in Date</b></td>
                <td><b>Check-Out Date</b></td>
                <td><b>Price Range</b></td>
            </tr>
            <?php for ($i = 0; $i < count($guest); $i++) { ?>
            <tr>
                <td><?php echo $guest[$i]['guestId']; ?></td>
                <td><?php echo $guest[$i]['capacity']; ?></td>
                <td><?php echo $guest[$i]['roomType']; ?></td>
                <td><?php echo $guest[$i]['checkinDate']; ?></td>
                <td><?php echo $guest[$i]['checkoutDate']; ?></td>
                <td><?php echo $guest[$i]['price']; ?></td>
            </tr> 
            <?php } ?>
        </table>
        
    </form>
</body>
</html>
