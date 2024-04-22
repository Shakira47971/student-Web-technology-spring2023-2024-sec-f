
<?php

    

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    


?>


<html>
<head>
    

    <title>Online Booking Form</title>
    <link rel="stylesheet" href="Customer.css"/>
</head>
<body  id="b8" >
    <form method="post" action="BookingCustomerView.php" enctype="">
    
    <fieldset id="b9">
    
        <h3 id="b1"><u>Click&Stay<u></h3>
        
        <h4 id="b10">Find your next stay</h4>
          <a id="b4" href="login.php">Back</a>
    </fieldset>
        

         <table   cellspacing="0" align="center" class="c7">
                   <tr class="c2">
                    <td>Guest Number:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="capacity">
                        </div>
                    </td>
                   
               
               
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
             
                    <td>Price Range:</td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price">
                        </div>
                    </td>
                   
                    </table>
                
                    
                    <td  align="center">
                        <div style="padding: 15px;">
                            <button type="submit" id="b3">Search Rooms</button>
                        </div>
                    </td> 
                    

                
           
            

    </form>
</body>
</html>
   