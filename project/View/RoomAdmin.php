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
    <h3></h3>
        <form method="post" action="../Controller/RoomAddCheck.php" enctype="">
            
                <table align="center"class="c1" >
                    <tr class="c2">
                        <td>Room ID:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="roomId" id="roomId" onkeyup= "validateId()"/>
                            </div>
                        </td>
                        <td>Enter at least 4 digit  unique  Id</td>
                    </tr> 
                   
                    
                    <tr class="c2">
    <td>Room Type:</td>
    <td>
        <div style="padding: 3px;">
            <select name="roomType" id="roomType" onchange="validateRoomType()">
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
                                <input type="text" name="roomNumber" id="roomNumber"onkeyup= "validateNumber()"/>
                            </div>
                        </td>
                        <td>Enter at least 3  digit unique number</td>
                    </tr>
                    <tr class="c2">
                        <td>Capacity:</td>    
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="capacity" id="capacity" onkeyup= "validateCapacity()"/>
                            </div>
                        </td>
                        <td>Enter  valid capacity</td>
                    </tr>
                    <tr class="c2">
                        <td>Price Per Night:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="price" id="price" onkeyup="validatePrice()"/>
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
        <script>
    function validateId() {
        let roomId = document.getElementById('roomId').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (roomId.length < 4) {
            obj.innerHTML = "Room Id must be at least 4 digits  long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid id";
            obj.style.color = 'black';
        }
    }
    function validateNumber() {
        let roomNumber = document.getElementById('roomNumber').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (roomNumber.length < 3) {
            obj.innerHTML = "Room number must be at least 3 digits  long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid room number";
            obj.style.color = 'black';
        }
    }
    function validateCapacity() {
    let capacity = document.getElementById('capacity').value;
    let obj = document.getElementsByTagName('h3')[1];

    if (capacity <= 0) {
        obj.innerHTML = "Capacity must be greater than 0";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid capacity";
        obj.style.color = 'black';
        return true;
    }
}

function validatePrice() {
    let price = document.getElementById('price').value;
    let obj = document.getElementsByTagName('h3')[1];

    if (price <= 0 || price <= 2000) {
        obj.innerHTML = "Price must be greater than 0 and more than 2000";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid price";
        obj.style.color = 'black';
        return true;
    }
}

function validateRoomType() {
    let roomType = document.getElementById('roomType').value;
    let obj = document.getElementsByTagName('h3')[1];

    if (roomType === "single" || roomType === "double" || roomType === "suite") {
        obj.innerHTML = "Valid room type: " + roomType;
        obj.style.color = 'black';
        return true;
    } else {
        obj.innerHTML = "Please select a valid room type.";
        obj.style.color = 'red';
        return false;
    }
}

    
    
    
   </script>
</body>
</html>

                    