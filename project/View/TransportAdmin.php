<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html>

<head>
    <title>transport Management Form</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>
<body id="b8">

  
    <fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image">
    
    <h3 id="b1"><u>Click & Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    <a id="b11" href="TransportView.php">See All transports</a>
    <a id="b4" href="AdminHome.php">home</a>
    
      
</fieldset>

   
    <h3 id="validationMessage"></h3> 
        <form method="post" action="../Controller/transportAddCheck.php" enctype="multipart/form-data">
          
                <table align="center"class="c1" >
                    <tr class="c1">
                        <td>Transport ID:</td>
                        <td>
                            <div style="padding: 3px;">
                            <input type="text" name="transportId" id="transportId" onkeyup="validateId()" />

                            </div>
                        </td>
                        
                    </tr> 
                   
</tr>
<tr class="c1">
            <td>Location:</td>
            <td>
                <select name="location" id="location" onchange="validateCategory()">
                    <option value="">Select</option>
                    <option value="Coxs Bazar">Coxs Bazar</option>
                    <option value="Inani Beach">Inani Beach</option>
                    <option value="Himchori Mountain">Himchori Mountain</option>
                    <option value="100 Feet Buddha Statue">100 Feet Buddha Statue</option>
                    <option value="Sonadia Island">Sonadia Island</option>
                        <option value="Marine Drive">Marine Drive</option>
                        <option value="Saint Martins Island">Saint Martins Island</option>
                        <option value="Bangabandhu Safari Park">Bangabandhu Safari Park</option>
                        <option value="Bodor Mokam Mosque">Bodor Mokam Mosque</option>
                        <option value="Burmese Market">Burmese Market</option>
                        <option value="Laboni Beach">Laboni Beach</option>
                        <option value="Shugonda Beach">Shugonda Beach</option>

                </select>
            </td>
        </tr>
                    
                    <tr class="c1">
                        <td>Transport Type:</td>
                        <td>
                            <div style="padding: 3px;">
                                <select name="transportType" id="transportType" onchange="validatetransportType()">
                                    <option value="">select</option>
                                    <option value="private">Private</option>
                                    <option value="micro">Micro</option>
                                    <option value="bus">Bus</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    
                    <tr class="c1">
                        <td>Capacity:</td>    
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="capacity" id="capacity" onkeyup="validateCapacity()"/>
                            </div>
                        </td>
                      
                    </tr>
                    <tr class="c1">
                        <td>Price Per Day:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="number" name="price" id="price" onkeyup="validatePrice()"/>
                            </div>
                           
                        </td>
                     
                    </tr>
                    
                <tr class="c1">
          
            <td> Status:</td>
            <td>
                <div style="padding: 3px;">
                    <select name="transportStatus" id="transportStatus" onchange="validateStatus()"  >
                        <option value="">Select</option>
                        <option value="available">Available</option>
                     
                    </select>
                </div>
                </td>
        </tr>
                   
                    <tr class="c1">
    <td>Transport Pic:</td>    
    <td>
        <div style="padding: 3px;">
            <input type="file" id="proPic" name="proPic" accept="image/*" onchange="validateFilename()" />
        </div>
        <div id="picValidationMessage"></div>
    </td>
</tr>

                    <tr>
                        <td colspan="2" style="text-align: center;">
                        <b><button type="submit" id="b7" >Add</button></b>
                           
                        </td>
                    </tr>
                
             </table>   
        </form>
        <script>
  


  function validateId() {
    let transportId = document.getElementById('transportId').value;
    let obj = document.getElementById('validationMessage');
    
    if (transportId === "") {
        obj.innerHTML = "Id cannot be empty";
        obj.style.color = 'red';
        return false;
    }
    if (transportId.length !== 2|| parseInt(transportId) <= 0 || isNaN(parseInt(transportId))) {
        obj.innerHTML = "transport ID must be a 2-digit positive number";
        obj.style.color = 'red';
        return false;
    }
    
   else{
    let xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../Controller/transportAddCheck.php', true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState === 4 && xhttp.status === 200) {
            const response = JSON.parse(xhttp.responseText);   
            if (response.transportId === "valid") {
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
     
        xhttp.send('transportId='+transportId);
      }

  }
  


function validateStatus() {
     
        let selectedAc = document.getElementById('transportStatus').value;
        let obj = document.getElementById('validationMessage');

        if (selectedAc === "") {
            obj.innerHTML = "Please select a status.";
            obj.style.color = 'red';
            return false;
        } else {
            obj.innerHTML = "Selected status: " + selectedAc;
            obj.style.color = 'black';
            return true;
        }
    }
    
function validateFilename() {
    let fileInput = document.getElementById('proPic');
    let obj = document.getElementById('validationMessage');

    if (!fileInput.files || !fileInput.files.length) {
        obj.innerHTML = "Please select a picture";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = " valid pic";
        obj.style.color = 'black'; 
        return true;
    }
}



function validateCategory() {
        let location = document.getElementById('location').value;
        let obj = document.getElementById('error-message');

        if (location === "") {
            obj.innerHTML = "Please select a location.";
            obj.style.color = 'red';
            return false;
        } else {
            obj.innerHTML = "Valid location";
            obj.style.color = 'black';
            return true;
        }
    }

    function validateCapacity() {
    let capacity = document.getElementById('capacity').value;
    let obj = document.getElementById('validationMessage'); 
    if (capacity === "") {
        obj.innerHTML = "Capacity cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (!Number.isInteger(Number(capacity)) || capacity <= 0 || capacity >= 51) {
        obj.innerHTML = "Capacity must be a positive integer between 1 and 50";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid capacity";
        obj.style.color = 'black';
        return true;
    }
}

function validatePrice() {
    let price = parseFloat(document.getElementById('price').value);
    let obj = document.getElementById('validationMessage'); 

    if (price=== "") {
        obj.innerHTML = "Price cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (isNaN(price) || price <= 2000 || price >= 50000) {
        obj.innerHTML = "Price must be a number greater than 2000 and less than 50,000.";
        obj.style.color = 'red';
        return false; 
    } 

   
    if (price <= 0) {
        obj.innerHTML = "Price must be a positive number.";
        obj.style.color = 'red';
        return false; 
    }

   
    obj.innerHTML = "Valid price";
    obj.style.color = 'black';
    return true; 
}


    function validatetransportType() {
        let transportType = document.getElementById('transportType').value;
        let obj = document.getElementById('validationMessage'); 
        if (transportType === "") {
        obj.innerHTML = "transport Type cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
        if (transportType === "private" || transportType === "micro" || transportType === "bus") {
            obj.innerHTML = " transport type: " + transportType;
            obj.style.color = 'black';
        } else {
            obj.innerHTML = "Please select a valid transport type.";
            obj.style.color = 'red';
        }
    }
   </script>
</body>
</html>
