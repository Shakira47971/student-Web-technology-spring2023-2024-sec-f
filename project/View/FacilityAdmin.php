<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html >
<head>
    
    <title>Facility Management</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

<h3 id="b1"><u>Facility Details</u></h3>
<h3></h3>
<form method="get" action="../Controller/FacilityAddCheck.php">
    <table align="center" class="c1">
        <tr class="c2">
            <td>Facility Id:</td>
            <td><input type="number" name="facilityId" id="facilityId" onkeyup="validateFacilityId()"></td>
            <td>Enter at least 3 digit unique Id</td>
        </tr>
        <tr class="c2">
            <td>Facility Name:</td>
            <td>
                <div style="padding: 3px;">
                    <input type="text" name="facilityName" id="facilityName" onkeyup="validateFacilityName()">
                </div>
            </td>
            <td>Enter unique name containing at least 2 characters</td>
        </tr>
        <tr class="c2">
            <td>Facility Description:</td>
            <td>
                <div style="padding: 3px;">
                    <textarea name="facilityDescription" rows="4" cols="50" id="facilityDescription" onkeyup="validateFacilityDescription()"></textarea>
                </div>
            </td>
            <td>Enter unique description containing more than 10 characters</td>
        </tr>
        <tr class="c2">
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
    </table>

    <tr class="c2">
        <td colspan="2" style="text-align: center;">
            <div style="padding: 3px;">
                <b><a id="b5" href="FacilityView.php">View</a>
                <button type="submit" id="b7">Add</button>
                <a id="b5" href="FacilityFile.php">Picture</a>
                <a id="b5" href="StaffView.php">Back</a></div></b>
            </td>
        </tr>
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
