
<?php

    

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    


?>

<html>
<head>
    <title>Online Booking Form</title>
</head>
<body style ="text-align: center;">
    <form method="post" action="BookingCustomerView.php" enctype="">
   

         <h3><U>Search Room For Booking</U></h3>


<table border=1  cellspacing=0 align="center">
                <tr>
                    <td>Guest Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="capacity">
                        </div>
                    </td>
                   
                </tr>
                <tr>
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
                <tr>
                    <td>Price Range:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price">
                        </div>
                    </td>
                   
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <div style="padding: 7px;">
                            <button type="submit">Search Rooms</button>
                        </div>
                    </td> </tr>
                    
              
                
            </table>
            <div style="padding: 7px;"> 
          
            <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="login.php">Back</a></div>
    </form>
</body>
</html>