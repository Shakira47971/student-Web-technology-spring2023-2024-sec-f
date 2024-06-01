<?php

 if(!isset($_COOKIE['flag'])){
     header('location: login.php');
 }
 require_once('../Model/foodadmin.php');
 
 $foodId = isset($_REQUEST['foodId']) ? $_REQUEST['foodId'] : ''; 
     
 $FoodEdit=foodEdit($foodId);
   


   

    
    
 
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
    <a id="b4" href="FoodView.php">Back</a>
</fieldset>
<h3></h3>
    <form method="post" action="../Controller/FoodEditCheck.php" enctype="multipart/form-data">
        
           
            <table align ="center" class="c1">

            <?php for($i=0; $i<count($FoodEdit); $i++){?>  
       
                <table align="center" class="c1">
                <tr class="c1">
  <td>Food Id:</td>
  <td><input type="number"  name="foodId" value="<?php echo $FoodEdit[$i]['foodId']; ?>"id="foodId" readonly /></td>
</tr>
        <tr class="c1">
            <td>Food Description:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="foodDescription" rows="4" cols="50" id="foodDescription" onkeyup="validateFacilityDescription()"><?php echo $FoodEdit[$i]['foodDescription']; ?></textarea>
                </div>
            </td>
        </tr>
        <tr class="c1">
            <td>Price (per person):</td>
            <td>
                <div style="padding: 3px;">
                    <input type="number" name="price" id="price"value="<?php echo$FoodEdit[$i]['price']; ?>" onkeyup="validatePrice()"/>
                </div>
            </td>
        </tr>
        <tr class="c1">
            <td>Food pic:</td><td>
    <input type="file" name="proPic" accept="image/*" id="proPic" onchange=" validateFilename()"  /></td>

             
           
                <img src="<?php echo $FoodEdit[$i]['proPic']; ?>" alt="Room Picture" class="room-pic-img">
           
       
    
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
    
function validateFacilityDescription() {
    let facilityDescription = document.getElementById('foodDescription').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (facilityDescription === "") {
        obj.innerHTML = "Description cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (facilityDescription.length < 5 || facilityDescription.length > 1000) {
        obj.innerHTML = "Food Description must be 5 to 1000 characters long";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid Description";
        obj.style.color = 'black';
        return true;
    }
}

function validatePrice() {
    let price = document.getElementById('price').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (price === "") {
        obj.innerHTML = "Price cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (price <= 0 || price < 100) {
        obj.innerHTML = "Price must be greater than 0 and less than  100";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid Price";
        obj.style.color = 'black';
        return true;
    }
}

function validateFilename() {
    let fileInput = document.getElementById('proPic');
    let obj = document.getElementsByTagName('h3')[1];

    if (!fileInput.files || !fileInput.files.length) {
        obj.innerHTML = "Please select a picture";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid picture";
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