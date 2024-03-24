<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html>

<head>
    <title>Room Management Form</title>
</head>
<body>
    <div style="text-align: center;">
    <h3><U>Room Details</U></h3>
        <form method="post" action="../Controller/RoomAddCheck.php" enctype="">
            
                <table align="center" cellspacing="0" >
                    <tr>
                        <td>Room ID:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomId">
                            </div>
                        </td>
                        <td>Enter at least 4 digit  unique  Id</td>
                    </tr> 
                   
                    
                    <tr>
    <td>Room Type:</td>
    <td>
        <div style="padding: 3px;">
            <select name="roomType" >
            <option value="" >select</option>
                <option value="single" >Single</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
            </select>
        </div>
    </td>
</tr>

                    <tr>
                        <td>Room Number:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomNumber">
                            </div>
                        </td>
                        <td>Enter at least 3  digit unique number</td>
                    </tr>
                    <tr>
                        <td>Capacity:</td>    
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="capacity">
                            </div>
                        </td>
                        <td>Enter  valid capacity</td>
                    </tr>
                    <tr>
                        <td>Price Per Night:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="price">
                            </div>
                        </td>
                        <td>Enter  valid price more than 2000</td>
                    </tr>
                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="roomView.php">View</a>
                       
                     
                               <button type="submit">Add</button>
                               <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="roomFile.php">Picture</a>
                              
                                <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="CustomerView.php">Back</a>
                            </div>
                        </td>
                    </tr>
                </table> 
            
        </form>
    </div>
</body>
</html>

                    