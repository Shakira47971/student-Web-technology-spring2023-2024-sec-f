
<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html >
<head>
    
    <title>Facility Management</title>
    <link rel="stylesheet" href="Admin.css"/>
</head>
<body id="b8">

<fieldset id="b9">
    
    <h3 id="b1"><u>Click&Stay<u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
  
                <a id="b11" href="FacilityView.php">View</a>
                
                <a id="b14" href="FacilityFile.php">Picture</a>
                <a id="b4" href="StaffView.php">Back</a></div></b>
</fieldset>

<h3></h3>
<form method="get" action="../Controller/FacilityAddCheck.php">
    <table align="center" class="c1">
        <tr class="c1">
            <td>Facility Id:</td>
            <td><input type="number" name="facilityId" id="facilityId" onkeyup="validateFacilityId()"></td>
           
        </tr>
        <tr class="c1">
            <td>Facility Name:</td>
            <td>
                <div style="padding: 3px;">
                    <input type="text" name="facilityName" id="facilityName" onkeyup="validateFacilityName()">
                </div>
            </td>
            
        </tr>
        <tr class="c1">
            <td>Facility Description:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="facilityDescription" rows="4" cols="50" id="facilityDescription" onkeyup="validateFacilityDescription()"></textarea>
                </div>
            </td>
           
        </tr>
        <tr class="c1">
            <td>Facility Category:</td>
            <td>
                <div style="padding: 3px;">
                    <select name="facilityCatagory" id="facilityCatagory" onchange="validateFacilityCategory()">
                        <option value="">Select</option>
                        <option value="Accommodation">Accommodation</option>
                        <option value="Recreation">Recreation</option>
                        <option value="Dining">Dining</option>
                        <option value="Business">Business</option>
                        <option value="Others">Others</option>
                    </select>
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
    function validateFacilityName() {
        let facilityName = document.getElementById('facilityName').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (facilityName.length < 2) {
            obj.innerHTML = "Facility Name must be at least 2 characters long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid facility Name";
            obj.style.color = 'black';
            return true;
        }
    }

    function validateFacilityId() {
        let facilityId = document.getElementById('facilityId').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (facilityId.length < 3) {
            obj.innerHTML = "Facility Id must be at least 3 numbers long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid facility Id";
            obj.style.color = 'black';
            return true;
        }
    }

    function validateFacilityDescription() {
        let facilityDescription = document.getElementById('facilityDescription').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (facilityDescription.length < 10) {
            obj.innerHTML = "Facility Description must be at least 10 characters long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid facility Description";
            obj.style.color = 'black';
            return true;
        }
    }

    function validateFacilityCategory() {
        let facilityCategory = document.getElementById('facilityCatagory').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (facilityCategory === "") {
            obj.innerHTML = "Please select a facility category.";
            obj.style.color = 'red';
            return false;
        } else {
            obj.innerHTML = "Selected facility category: " + facilityCategory;
            obj.style.color = 'black';
            return true;
        }
    }
</script>

</body>
</html>
