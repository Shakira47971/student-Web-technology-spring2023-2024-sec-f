
<?php

    

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    


?>


<html>
<head>
    

    <title>Online Booking Form</title>
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body  id="b8" >
    <form method="post" action="TransportCustomerView.php" enctype="">
    
    <fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image">
        <h3 id="b1"><u>Click & Stay</u></h3>
        
        <h4 id="b10">Find your next stay</h4>
        <a id="b11" href="TransportCustomer.php">See All Transport</a>
          
    </fieldset>
    <h3 id="validationMessage"></h3> 
    <fieldset id="b14" >
   

         <table   align="center" class="c1">
         <tr class="c1">
            <td>Location:</td>
            <td>
                <select name="location" id="location" onchange="validateCategory()">
                    <option value="">Select</option>
                    <option value="Cox's Bazar">Cox's Bazar</option>
                    <option value="Inani Beach">Inani Beach</option>
                    <option value="Himchori Mountain">Himchori Mountain</option>
                    <option value="100 Feet Buddha Statue">100 Feet Buddha Statue</option>
                    <option value="Sonadia Island">Sonadia Island</option>
                        <option value="Marine Drive">Marine Drive</option>
                        <option value="Saint Martin's Island">Saint Martin's Island</option>
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
                            <input type="number"name="capacity" id="capacity" onkeyup="validateCapacity()">
                        </div>
                    </td>
                   
</tr>

               

                <tr class="c1" align ="center">
                    <td>  Price Range:     </td>    
                    <td>
                        <div style="padding: 3px;">
                            <input type="number"name="price"id="price" onkeyup="validatePrice()">
                        </div>
                    </td>
</tr>

                    </table>
                
                    
                    <td  align="center">
                        <div style="padding: 15px;">
                            <button type="submit" id="b3">Search </button>
                        </div>
                    </td> 
                    

                    </fieldset>   
           
            

    </form>
    <script>
       function validateCapacity() {
    let capacity = document.getElementById('capacity').value;
    let obj = document.getElementById('validationMessage'); 

    if (!Number.isInteger(Number(capacity)) || capacity <= 0 || capacity >= 11) {
        obj.innerHTML = "Capacity must be a positive integer between 1 and 10";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid capacity";
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
    if (!Number.isInteger(Number(capacity)) || capacity <= 0 || capacity >= 6) {
        obj.innerHTML = "Capacity must be a positive integer between 1 and 5";
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
    if (isNaN(price) || price <= 2000 || price >= 10000) {
        obj.innerHTML = "Price must be a number greater than 2000 and less than 10000.";
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
   