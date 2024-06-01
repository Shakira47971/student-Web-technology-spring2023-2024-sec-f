<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>food Management</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
    
</head>
<body id="b8">

<fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image" alt="Logo">
    <h3 id="b1"><u>Click&Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
    <a id="b11" href="FoodView.php">See All Food Items</a>
    <a id="b4" href="AdminHome.php">Home</a>
</fieldset>

<h3></h3>
<form method="post" action="../Controller/foodAddCheck.php" enctype="multipart/form-data">
    <table align="center" class="c1">
    <tr class="c1">
            <td>Food Id:</td>
            <td><input type="number" name="foodId" id="foodId" onkeyup="validatefoodId()"></td>
           
        </tr>
        <tr class="c1">
            <td>Food Description:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="foodDescription" rows="4" cols="50" id="foodDescription" onkeyup="validatefoodDescription()"></textarea>
                </div>
            </td>
        </tr>
        <tr class="c1">
            <td>Price (per person):</td>
            <td>
                <div style="padding: 3px;">
                    <input type="number" name="price" id="price" onkeyup="validatePrice()"/>
                </div>
            </td>
        </tr>
        <tr class="c1">
            <td>Picture:</td>
            <td>
                <div style="padding: 3px;">
                    <input type="file" id="proPic" name="proPic" accept="image/*" onchange="validateFilename()"/>
                </div>
            </td>
        </tr>
        <tr class="c1">
            <td colspan="2" style="text-align: center;">
                <div style="padding: 3px;">
                    <button type="submit" id="b7">Add</button>
                </div>
            </td>
        </tr>
    </table>
</form>

<script>
    function validatefoodId() {
    let foodId = document.getElementById('foodId').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (foodId === "") {
        obj.innerHTML = "Id cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (foodId.length !== 2 || parseInt(foodId) <= 0) {
        obj.innerHTML = "food Id must be 2 digits long and greater than 0";
        obj.style.color = 'red';
        return false;
    }
    else{
    let xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../Controller/foodAddCheck.php', true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState === 4 && xhttp.status === 200) {
            const response = JSON.parse(xhttp.responseText);   
            if (response.foodId === "valid") {
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
     
        xhttp.send('foodId='+foodId);
      }

  }
  

function validatefoodDescription() {
    let foodDescription = document.getElementById('foodDescription').value;
    let obj = document.getElementsByTagName('h3')[1];
    if (foodDescription === "") {
        obj.innerHTML = "Description cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (foodDescription.length < 5 || foodDescription.length > 1000) {
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
</script>

</body>
</html>
