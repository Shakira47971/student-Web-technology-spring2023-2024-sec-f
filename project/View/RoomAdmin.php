<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html>

<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">
    
    <h3 id="b1"><U>Room Details</U></h3>
        <form method="post" action="../Controller/RoomAddCheck.php" enctype="">
            
                <table align="center"class="c1" >
                    <tr class="c2">
                        <td>Room ID:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomId">
                            </div>
                        </td>
                        <td>Enter at least 4 digit  unique  Id</td>
                    </tr> 
                   
                    
                    <tr class="c2">
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

                    <tr class="c2">
                        <td>Room Number:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomNumber">
                            </div>
                        </td>
                        <td>Enter at least 3  digit unique number</td>
                    </tr>
                    <tr class="c2">
                        <td>Capacity:</td>    
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="capacity">
                            </div>
                        </td>
                        <td>Enter  valid capacity</td>
                    </tr>
                    <tr class="c2">
                        <td>Price Per Night:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="price">
                            </div>
                        </td>
                        <td>Enter  valid price more than 2000</td>
                    </tr>
                    </table>    
                    <tr >
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;"><b> <a id="b5" href="roomView.php">View</a></b>
                       
                     
                              <b> <button type="submit"id="b7">Add</button></b>
                              <b> <a id="b5" href="roomFile.php">Picture</a></b>
                              
                               <b> <a id="b5"href="CustomerView.php">Back</a></b>
                            </div>
                        </td>
                    </tr>
                
            
        </form>
    </div>
</body>
</html>

                    