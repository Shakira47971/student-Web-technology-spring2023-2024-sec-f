<?php


 if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/transportadmin.php');
$transportId = isset($_GET['transportId']) ? $_GET['transportId'] : '';
   
    
  $transportEdit=transportEdit($transportId);
    
    
    
 
?>
 
<html>
<head>
    <title>Edit transport</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>

<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    
    <h3 id="b1"><u>Click & Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
    <b> <a id="b4" href="TransportView.php">Back</a></b>
</fieldset>
<h3 id="validationMessage"></h3> 
    <form method="post" action="../Controller/transportEditCheck.php" enctype="multipart/form-data">
        <table align="center"  class="c1">
        <?php for($i=0; $i<count($transportEdit); $i++){?>
            <tr class="c1">
                <td>transport Id:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="transportId" value="<?php echo $transportEdit[$i]['transportId']; ?>" id="transportId"  readonly /> 
                    </div>
                </td>
            </tr>
            <tr class="c1">
                    <td>Location:</td>
                    <td>
                        <div style="padding: 3px;">
                            <select name="location" id="location" onchange="validateCategory()">
                                <option value="Coxs Bazar" <?php if ($transportEdit[$i]['location'] == "Coxs Bazar") echo 'selected="selected"'; ?>>Coxs Bazar</option>
                                <option value="Inani Beach" <?php if ($transportEdit[$i]['location'] == "Inani Beach") echo 'selected="selected"'; ?>>Inani Beach</option>
                                
                                <option value="Himchori Mountain" <?php if ($transportEdit[$i]['location'] == "Himchori Mountain") echo 'selected="selected"'; ?>>Himchori Mountain</option>
                                <option value="100 Feet Buddha Statue" <?php if ($transportEdit[$i]['location'] == "100 Feet Buddha Statue") echo 'selected="selected"'; ?>>100 Feet Buddha Statue</option>
                                <option value="Sonadia Island" <?php if ($transportEdit[$i]['location'] == "Sonadia Island") echo 'selected="selected"'; ?>>Sonadia Island</option>
                                <option value="Marine Drive" <?php if ($transportEdit[$i]['location'] == "Marine Drive") echo 'selected="selected"'; ?>>Marine Drive</option>
                                <option value="Saint Martins Island" <?php if ($transportEdit[$i]['location'] == "Saint Martins Island") echo 'selected="selected"'; ?>>Saint Martins Island</option>
                                <option value="Bangabandhu Safari Park" <?php if ($transportEdit[$i]['location'] == "Bangabandhu Safari Park") echo 'selected="selected"'; ?>>Bangabandhu Safari Park</option>
                                <option value="Bodor Mokam Mosque" <?php if ($transportEdit[$i]['location'] == "Bodor Mokam Mosque") echo 'selected="selected"'; ?>>Bodor Mokam Mosque</option>
                                <option value="Burmese Market" <?php if ($transportEdit[$i]['location'] == "Burmese Market") echo 'selected="selected"'; ?>>Burmese Market</option>
                                <option value="Laboni Beach" <?php if ($transportEdit[$i]['location'] == "Laboni Beache") echo 'selected="selected"'; ?>>Laboni Beach</option>
                                <option value="Shugonda Beach" <?php if ($transportEdit[$i]['location'] == "Shugonda Beache") echo 'selected="selected"'; ?>>Shugonda Beach</option>
                              
                            </select>
                        </div>
                    </td>
                </tr>
              <tr class="c1">
                <td>transport Type:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="transportType" id="transportType" onchange="validatetransportType()" >
                            <option value="private"<?php if ($transportEdit[$i]['transportType'] == 'private') echo 'selected="selected"'; ?>>Private</option>
                            <option value="micro"<?php if ($transportEdit[$i]['transportType'] == 'micro') echo 'selected="selected"'; ?>>Micro</option>
                            <option value="bus"<?php if ($transportEdit[$i]['transportType'] == 'bus') echo 'selected="selected"'; ?>>Bus</option>
                        </select>
                    </div>
                </td>
            </tr>
           
            <tr class="c1">
                <td>Capacity:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="capacity" value="<?php echo $transportEdit[$i]['capacity']; ?>"id="capacity" onkeyup="validateCapacity()" /> <br>
                    </div>
                </td>
            </tr>
            <tr class="c1">
                <td>Price:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="price" value="<?php echo $transportEdit[$i]['price']; ?>"id="price" onkeyup="validatePrice()" /> <br>
                    </div>
                </td>
            </tr>
           

            <tr class="c1">
    <td>transport Pic:</td><td>
    <input type="file" name="proPic" accept="image/*" id="proPic"value="<?php echo $transportEdit[$i]['proPic']; ?>" onchange="validateFilename()"  /></td>

             
           
                <img src="<?php echo $transportEdit[$i]['proPic']; ?>" alt="transport Picture" class="transport-pic-img">
           
       
    
</tr>
             
            <tr class="c1">
                <td colspan="2" style="text-align: center;">
                    <div style="padding: 15px;">
                        <b><button type="submit" name="update" id="b7"value="update" onclick="validateEdit()">Update</button><b>
                    </div>
                </td>
            </tr>
            
        </table>
     
      <?php } ?>
    </form>
    <script>
        
        function validateCategory() {
            let location = document.getElementsByName('location')[0].value;
            let obj = document.getElementsByTagName('h3')[1];

            if (location === "") {
                obj.innerHTML = "Please select a location.";
                obj.style.color = 'red';
            } else {
                obj.innerHTML = "Selected location: " + location;
                obj.style.color = 'black';
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
        obj.innerHTML = " valid picture"; 
    }
}

    
    function validateCapacity() {
    let capacity = document.getElementById('capacity').value;
    let obj = document.getElementById('validationMessage'); 

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

        if (transportType === "private" || transportType === "micro" || transportType === "bus") {
            obj.innerHTML = " transport type: " + transportType;
            obj.style.color = 'black';
        } else {
            obj.innerHTML = "Please select a valid transport type.";
            obj.style.color = 'red';
        }
    }
   

function validateEdit(){
    
    
       alert ( "are u sure u want to update it?");
}

</script>
</body>

</html> 