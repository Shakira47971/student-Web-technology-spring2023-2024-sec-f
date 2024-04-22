
<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html>
<head>
    <title>Facility Management</title>
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
    <a id="b11" href="PackageView.php">View</a>
    <a id="b4" href="FacilityView.php">Back</a>
</fieldset>

<h3></h3>
<form method="get" action="../Controller/PackageAddCheck.php">
    <table align="center" class="c1">
        <tr class="c1">
            <td>Package Id:</td>
            <td><input type="number" name="packageId" id="packageId" onkeyup="validateId()"></td>
           
        </tr>
        <tr class="c1">
            <td>Package Name:</td>
            <td>
                <div style="padding: 3px;">
                    <input type="text" name="packageName" id="packageName" onkeyup="validateName()">
                </div>
            </td>
           
        </tr>
        <tr class="c1">
            <td>Package Description:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="packageDescription" rows="4" cols="50" id="packageDescription" onkeyup="validateDescription()"></textarea>
                </div>
            </td>
            
        </tr>
        <tr class="c1">
            <td>Package Category:</td>
            <td>
                <div style="padding: 3px;">
                    <select name="packageCatagory" id="packageCatagory" onchange="validateCategory()">
                        <option value="">Select</option>
                        <option value="Single package">Single package</option>
                        <option value="Couple package">Couple package</option>
                        <option value="Family package">Family package</option>
                        <option value="Accommodation Packages">Accommodation Packages</option>
                        <option value="Activity Packages">Activity Packages</option>
                        <option value="Special Occasion Packages">Special Occasion Packages</option>
                        <option value="Seasonal Packages">Seasonal Packages</option>
                        <option value="Business Packages">Business Packages</option>
                        <option value="Exclusive Packages">Exclusive Packages</option>
                        <option value="Customizable Packages">Customizable Packages</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr class="c1">
            <td>Price:</td>
            <td>
                <div style="padding: 3px;">
                    <input type="number" id="packagePrice" name="packagePrice" onkeyup="validatePrice()">
                </div>
               
            </td>
        </tr>
    </table>

    <div style="padding: 5px;">
        
       
            <tr>
                <td colspan="2" style="text-align: center;">
                    <b><button type="submit" id="b7">Add</button></b>
                   
                </td>
            </tr>
        
    </div>
</form>

<script>
    function validateId() {
        let packageId = document.getElementById('packageId').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (packageId.length < 3) {
            obj.innerHTML = "Package Id must be at least 3 digits long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid id";
            obj.style.color = 'black';
        }
    }

    function validateName() {
        let packageName = document.getElementById('packageName').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (packageName.length < 5) {
            obj.innerHTML = "Package Name must be at least 5 characters long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid package Name";
            obj.style.color = 'black';
            return true;
        }
    }

    function validateDescription() {
        let packageDescription = document.getElementById('packageDescription').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (packageDescription.length < 20) {
            obj.innerHTML = "Package Description must be at least 20 characters long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid package Description";
            obj.style.color = 'black';
            return true;
        }
    }

    function validateCategory() {
        let packageCategory = document.getElementById('packageCatagory').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (packageCategory === "") {
            obj.innerHTML = "Please select a package category.";
            obj.style.color = 'red';
            return false;
        } else {
            obj.innerHTML = "Selected package category: " + packageCategory;
            obj.style.color = 'black';
            return true;
        }
    }

    function validatePrice() {
        let packagePrice = document.getElementById('packagePrice').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (packagePrice <= 0 || packagePrice < 1000) {
            obj.innerHTML = "Price must be greater than 0 and at least 1000 or more";
            obj.style.color = 'red';
            return false;
        } else {
            obj.innerHTML = "Valid price";
            obj.style.color = 'black';
            return true;
        }
    }
</script>
</body>
</html>
