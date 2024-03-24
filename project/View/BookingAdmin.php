<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/bookings.php');
$GuestId = isset($_REQUEST['guestId']) ? $_REQUEST['guestId'] : '';
$guest=SearchCustomer($GuestId);

?>
<html>
<head>
    
    <title>Booking Management</title>
</head>
<body style ="text-align: center;">
    <form >
   

         <h3><U>Customer Details</U></h3>
    
        
        <table align="center" cellspacing="0">
           
            <tr>
                <td>Guest Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text"name="guestId" >
                    </div>
                </td>
                <tr>
                <td colspan="2" align ="center"> 
           <div style="padding: 3px;"> 
                
                
           <button type="submit">Search </button>
           <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="CustomerView.php">View</a>
               
            </tr>
       
        </table>
                <table border=1  cellspacing=0 align="center">
            <tr>
                <td><b>Guest Id</b></td>
                <td><b>Guest Number</b></td>
                <td><b>room Type</b></td>
                <td><b>Check-in Date</b></td>
                <td><b> Check-Out Date</b></td>
                <td><b> Price Range</b></td>
               
            </tr>
            <?php for($i=0; $i<count($guest); $i++){?>
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
        <body>
</html>

