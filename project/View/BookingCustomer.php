
<?php

    

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    


?>

<html>
<head>
    <title>Online Booking Form</title>
    <link rel="stylesheet" href="bookingStyle.css"/>
</head>
<body  id="b8" >
    <form method="post" action="BookingCustomerView.php" enctype="">
   

         <h3 id="b1"><U>Search Room For Booking</U></h3>


         <table  border="1" cellspacing="0" align="center" class="c1">
                   <tr class="c2">
                    <td>Guest Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="capacity">
                        </div>
                    </td>
                   
                </tr>
                <tr class="c2">
                    <td>Room Type:</td>
                    <td>
                        <div style="padding: 3px;">
                            <select name="roomType">
                            <option value="">Select</option>
                                <option value="single">Single</option>
                                <option value="double">Double</option>
                                <option value="suite">Suite</option>
                            </select>
                        </div>
                    </td> 
                </tr>
                <tr class="c2">
                    <td>Price Range:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price">
                        </div>
                    </td>
                   
                </tr>
                <tr class="c2">
                    <td colspan="2" align="center">
                        <div style="padding: 7px;">
                            <button type="submit" id="b3">Search Rooms</button>
                        </div>
                    </td> </tr>
                    
              
                
            </table>
            <div style="padding: 7px;"> 
          
            <a id="b4" href="login.php">Back</a></div>
    </form>
</body>
</html>