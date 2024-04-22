<?php
Session_start();

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


require_once('../Model/bookings.php');
$roomNumber= $_SESSION['roomNumber'];


$room = getRoom($roomNumber);

   ?>

<html>
<head>
    <title> View Room</title>
    <link rel="stylesheet" href="Customer.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    <a id="b4" href="BookingCustomer.php">Back</a>
    <a id="b11" href="FacilityCustomer.php">Next</a>
</fieldset>

   
    <form method="post" action="FacilityCustomer.php" enctype="">

<table border="1"  cellspacing="0" align="center"  class="c4">
            <tr  class="c3">
               
                
                <td>room Number</td>
                <td>room Type</td>
                <td>capacity</td>
                <td>price</td>
                
                
            </tr>
            <?php for($i=0; $i<count($room); $i++){?>
            <tr>
                
                
                <td><?php echo $room[$i]['roomNumber']; ?></td>
                <td><?=$room[$i]['roomType'] ?></td>
                <td><?php echo $room[$i]['capacity']; ?></td>
                <td><?php echo $room[$i]['price']; ?></td>
              
               
            </tr>
           
            
              
            <?php } ?>
        </table>
      
        </body>
        </html>
        