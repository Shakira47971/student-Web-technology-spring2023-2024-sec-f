<?php

 if(!isset($_COOKIE['flag'])){
     header('location: login.php');
 }
 require_once('../Model/eventadmin.php');
 
 $eventId = isset($_REQUEST['eventId']) ? $_REQUEST['eventId'] : ''; 
     
   $EventEdit=eventEdit($eventId);
   


   

    
    
 
?>
 
<html>
<head>
    <title>Edit Room</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>
<body id="b8">

<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click & Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
    <a id="b4" href="eventView.php">Back</a>
</fieldset>
<h3></h3>
    <form method="post" action="../Controller/eventEditCheck.php" enctype="multipart/form-data">
        
           
            <table align ="center" class="c1">

            <?php for($i=0; $i<count($EventEdit); $i++){?>  
 <tr class="c1" >
  <td colspan="2"><img src="<?php echo $EventEdit[$i]['eventPic']; ?>" alt="Room Picture" align="center" class="room-pic-img">
           </td>  </tr>    
<tr class="c1">
  <td>event Id:</td>
  <td><input type="number"  name="eventId" value="<?php echo $EventEdit[$i]['eventId']; ?>"id="eventId" readonly /></td>
</tr>
<tr class="c1">
  <td>event Name:</td>
  
  <td>
  <div style="padding: 3px;">
      <input type="text"  name="eventName" value="<?php echo $EventEdit[$i]['eventName']; ?>"id="eventName" onkeyup="validateeventName()"/>
        </div>
  </td>
</tr>
<tr class="c1">
            <td>Capacity:</td>
            <td>
            <div style="padding: 3px;">
                                <input type="number" name="eventCapacity" value="<?php echo $EventEdit[$i]['eventCapacity']; ?>"id="eventCapacity" onkeyup="validateCapacity()"/>
                            </div>
            </td>
           
        </tr>
        <tr class="c1">
            <td>Food:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="eventFood" rows="4" cols="50" id="eventFood" onkeyup="validateFood()"> <?php echo $EventEdit[$i]['eventFood']; ?></textarea>
                </div>
            </td>
        </tr>
        <tr class="c1">
                        <td>Price :</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="eventPrice" value="<?php echo $EventEdit[$i]['eventPrice']; ?>" id="eventPrice" onkeyup="validatePrice()"/>
                            </div>
                        </td>
                     
                    </tr>
<tr class="c1">
            <td>event pic:</td><td>
    <input type="file" name="eventPic" accept="image/*" id="eventPic" value="<?php echo $EventEdit[$i]['eventPic']; ?>" onchange=" validateFilename()"  /></td>

             
           
                
       
    
</tr>
            
                       
<tr class="c1">
<td colspan="2" style="text-align: center;">
                
                    <div style="padding: 15px;" >
                        <button type="submit" id="b7" name="update" value="update"onclick="validateEdit()">Update</button>
                        </div>
</td>
</tr>
</table>
                       
                    
<?php } ?>

                

    </form>
    <script>
 function validateeventName() {
    let eventName = document.getElementById('eventName').value;
    let obj = document.getElementsByTagName('h3')[1];

    if (eventName.length < 2 || eventName.length > 20) {
        obj.innerHTML = "event Name must be 2 to 20 characters long";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid event Name";
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
    }
}

    
function validateCapacity() {
    let capacity = document.getElementById('eventCapacity').value;
    let obj = document.getElementById('validationMessage'); 
    if (capacity === "") {
        obj.innerHTML = "Capacity cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (!Number.isInteger(Number(capacity)) || capacity <= 0 || capacity >= 250) {
        obj.innerHTML = "Capacity must be a positive integer between 1 and 249";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid capacity";
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
function validateEdit(){
    
    
       alert ( "are u sure u want to update it?");
}
</script>
</body>

</html>