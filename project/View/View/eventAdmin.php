
<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html >
<head>
    
    <title>event Management</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>
<body id="b8">

<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
  
                <a id="b11" href="eventView.php">See All Event</a>
                
                
                <a id="b4" href="AdminHome.php">Home</a></div></b>
                
</fieldset>

<h3></h3>
<form method="post" action="../Controller/eventAddCheck.php"enctype="multipart/form-data" >
    <table align="center" class="c1">
        <tr class="c1">
            <td>event Id:</td>
            <td><input type="number" name="eventId" id="eventId" onkeyup="validateeventId()"></td>
           
        </tr>
        <tr class="c1">
            <td>event Name:</td>
            <td>
                <div style="padding: 3px;">
                    <input type="text" name="eventName" id="eventName" onkeyup="validateeventName()">
                </div>
            </td>
            
        </tr>
        <tr class="c1">
            <td>Capacity:</td>
            <td>
            <div style="padding: 3px;">
                                <input type="number" name="eventCapacity" id="eventCapacity" onkeyup="validateCapacity()"/>
                            </div>
            </td>
           
        </tr>
        <tr class="c1">
            <td>Food:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="eventFood" rows="4" cols="50" id="eventFood" onkeyup="validateFood()"></textarea>
                </div>
            </td>
        </tr>
        <tr class="c1">
                        <td>Price :</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="eventPrice" id="eventPrice" onkeyup="validatePrice()"/>
                            </div>
                        </td>
                     
                    </tr>
                    <tr class="c1">
    <td>Picture:</td>    
    <td>
        <div style="padding: 3px;">
            <input type="file" id="eventPic" name="eventPic" accept="image/*" onchange="validateFilename()" />
        </div>
        
    </td>
</tr>

                    
        <tr class="c1" >
        <td colspan="2" style="text-align: center;">
            <div style="padding: 3px;">
            <button type="submit" id="b7">Add</button></div>
            </td>
        </tr>
    </table>

   
    </form>

<script>
    function validateeventName() {
    let eventName = document.getElementById('eventName').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (eventName === "") {
        obj.innerHTML = "Name cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (eventName.length < 5 || eventName.length > 20) {
        obj.innerHTML = "event Name must be 5 to 20 characters long";
        obj.style.color = 'red';
        return false;
    } else{
    let xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../Controller/eventAddCheck.php', true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState === 4 && xhttp.status === 200) {
            const response = JSON.parse(xhttp.responseText);   
            if (response.eventName === "valid") {
              obj.innerHTML = "Name Valid";
              obj.style.color = 'black';
              return true;
            } else {
              obj.innerHTML = "This Name is already taken. Please choose a different Name";
              obj.style.color = 'red';
              return false;
            }
          }
        };
     
        xhttp.send('eventName='+eventName);
      }

  }
  

    function validateeventId() {
    let eventId = document.getElementById('eventId').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (eventId === "") {
        obj.innerHTML = "Id cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (eventId.length !== 2 || parseInt(eventId) <= 0) {
        obj.innerHTML = "event Id must be 2 digits long and greater than 0";
        obj.style.color = 'red';
        return false;
    }
    else{
    let xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../Controller/eventAddCheck.php', true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState === 4 && xhttp.status === 200) {
            const response = JSON.parse(xhttp.responseText);   
            if (response.eventId === "valid") {
              obj.innerHTML = "Id Valid";
              obj.style.color = 'black';
              return true;
            } else {
              obj.innerHTML = "This Id is already taken. Please choose a different Id";
              obj.style.color = 'red';
              return false;
            }
          }
        };
     
        xhttp.send('eventId='+eventId);
      }

  }
  


  function validateCapacity() {
    let eventCapacity = document.getElementById('eventCapacity').value;
    let obj = document.getElementById('validationMessage'); 
    if (eventCapacity === "") {
        obj.innerHTML = "Capacity cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (!Number.isInteger(Number(eventCapacity)) || eventCapacity <= 0 || eventCapacity >= 250) {
        obj.innerHTML = "Capacity must be a positive integer between 1 and 249";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid eventCapacity";
        obj.style.color = 'black';
        return true;
    }
}
    function validateFood() {
        let eventFood = document.getElementById('eventFood').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (eventFood === "") {
        obj.innerHTML = " Food Description cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (eventFood.length < 5 || eventFood.length > 200) {
        obj.innerHTML = "Food Description must be 5 to 199 characters long";
        obj.style.color = 'red';
        return false;
    }
    else {
        obj.innerHTML = "Valid Food Description";
        obj.style.color = 'black';
        return true;
    }

}

    function validatePrice() {
    let price = document.getElementById('eventPrice').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (price === "") {
        obj.innerHTML = "price cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (price <= 0 || price >= 500000) {
        obj.innerHTML = "Price must be greater than 0 and at least 5 lac";
        obj.style.color = 'red';
    } else {
        obj.innerHTML = "Valid Price";
        obj.style.color = 'black';
        return true;
    }
}
function validateFilename() {
    let fileInput = document.getElementById('eventPic');
    let obj = document.getElementsByTagName('h3')[1];


    if (!fileInput.files || !fileInput.files.length) {
        obj.innerHTML = "Please select a picture";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = " valid picture";
        obj.style.color = 'black';
        return true; 
    }
}

</script>

</body>
</html>
