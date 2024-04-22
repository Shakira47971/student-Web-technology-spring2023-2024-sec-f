
<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


?>


<html>
<head>
    <title>Staff Management</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

<h3 id="b1"><U>Staff Details</U></h3>
<h3></h3>
<form method="post" action="../Controller/staffAddCheck.php" enctype="">
    <table align="center" class="c1">
        <tr class="c2">
            <td> Staff Id:</td>
            <td>
                <div style="padding: 3px;"><input type="text" name="staffId" id="staffId" onkeyup="validateId()" />
                </div>
                <td> Enter 2 digit unique id</td>
            </td>
        </tr> 
        <tr class="c2">
            <td> Staff Name:</td>
            <td>
                <div style="padding: 3px;"><input type="text" name="staffName" id="staffName" onkeyup="validateName()" />
                </div>
                <td> Enter your full name</td>
            </td>
        </tr> 
        <tr class="c2">
            <td>Email:</td>
            <td>
                <div style="padding: 3px;"><input type="text" id="email" name="email" onkeyup="validateEmail()" />
                </div>
                <td>Enter valid email</td>
            </td>
        </tr> 
        <tr class="c2">
            <td>Department:</td>
            <td>
                <div style="padding: 3px;">
                    <select name="department" id="department" onchange="validateDepartment()" >
                        <option value="">Select</option>
                        <option value="Housekeeping">Housekeeping</option>
                        <option value="Food">Food</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Security">Security</option>
                        <option value="Human Resource">Human Resource</option>
                    </select>
                </div>
            </td> 
        </tr>
        <tr class="c2">
            <td>Contact:</td>    
            <td>
                <div style="padding: 3px;"><input type="text" name="contact" id="contact" onkeyup="validateContact()">
                </div>
            </td>
            <td>Enter valid contact</td>
        </tr>
        <tr class="c2">
            <td>Salary:</td>
            <td>
                <div style="padding: 3px;"><input type="Number" name="salary" id="salary" onkeyup="validateSalary()"/>
                    <td>Enter Salary more than 3000</td>
                </div>
            </td>
        </tr>
        <tr class="c2">
            <td>Account Status:</td>
            <td>
                <div style="padding: 3px;">
                    <select name="accountStatus" id="accountStatus" onchange="validateStatus()"  >
                        <option value="">Select</option>
                        <option value="active">Active</option>
                        <option value="busy">Busy</option>
                        <option value="inactive">In Active</option>
                    </select>
                </div>
            </td>
        </tr>
    </table>
   
    <tr>
        <td colspan="2" style="text-align: center;">
            <div style="padding: 3px;">
                <b><a id="b5" href="StaffView.php">View</a>
                <button type="submit" id="b7">Add</button>
                <a id="b5" href="staffUploadFile.php">Picture</a>
                <a id="b5" href="FacilityAdmin.php">Next</a>
                <a id="b5" href="RoomAdmin.php">Back</a></b>
            </div>
        </td>
    </tr>
</form>

<script>
    function validateId() {
        let staffId = document.getElementById('staffId').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (staffId.length < 2) {
            obj.innerHTML = "Staff Id must be at least 2 numbers long";
            obj.style.color = 'red';
        } else {
            obj.innerHTML = "Valid id";
            obj.style.color = 'black';
        }
    }

    function validateName() {
        let name = document.getElementById('staffName').value;
        let obj = document.getElementsByTagName('h3')[1]; 

        if (name === "") {
            obj.innerHTML = "Name cannot be empty";
            obj.style.color = 'red';
            return false;
        } 

        let words = name.split(/\s+/);
        if (words.length < 2) {
            obj.innerHTML = "Name must contain at least two words";
            obj.style.color = 'red';
            return false;
        }

        for (let word of words) {
            let charCode = word.charCodeAt(0);
            if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
                obj.innerHTML = "All words must start with a letter.";
                obj.style.color = 'red';
                return false;
            }
        }

        for (let word of words) {
            for (let i = 0; i < word.length; i++) {
                let char = word[i];
                if (!checkChar(word[i])) {
                    obj.innerHTML = "Input can only contain letters (a-z, A-Z), periods (.), and dashes (-).";
                    obj.style.color = 'red';
                    return false;
                }
            }
        }
        function checkChar(ch){
            if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z' || ch == '.' || ch == '_' || ch == ' ') 
            return true;
            }
            
        
        
        
        obj.style.color = 'black';
        obj.innerHTML = "Valid name";
        return true;
    }
    
    function validateEmail() {
        let email = document.getElementById('email').value;
        let obj = document.getElementsByTagName('h3')[1]; 

        if (email === "") {
            obj.innerHTML = "Email Address Cannot be Empty";
            obj.style.color = 'red';
            return false;
        } 

        let isValid = true;
        let atPos = email.indexOf("@");

        if (atPos === -1 || atPos !== email.length - 10 || email.substr(atPos) !== "@gmail.com") {
            isValid = false;
            obj.innerHTML = "Email must be a Gmail address ending with '@gmail.com'";
            obj.style.color = 'red';
        }

        if (isValid) {
            obj.style.color = 'black';
            obj.innerHTML = "Valid Email Address";
        }

        return isValid;
    }
    
    function validateDepartment() {
        let selectedDp = document.getElementById('department').value;
        let obj = document.getElementsByTagName('h3')[1];

        if (selectedDp === "") {
            obj.innerHTML = "Please select a department.";
            obj.style.color = 'red';
            return false;
        } else {
            obj.innerHTML = "Selected department: " + selectedDp;
            obj.style.color = 'black';
            return true;
        }
    }
    function validateStatus() {
        let selectedAc = document.getElementById('accountStatus').value;
        let obj = document.getElementsByTagName('h3')[1];

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
    function validateSalary() {
    let salary = document.getElementById('salary').value;
    let obj = document.getElementsByTagName('h3')[1];

    if (salary < 3000) {
        obj.innerHTML = "Salary must be greater than 3000";
        obj.style.color = 'red';
        return false;
    } else {
        obj.innerHTML = "Valid salary";
        obj.style.color = 'black';
        return true;
    }
}

function validateContact() {
    let contact = document.getElementById('contact').value;
    let obj = document.getElementsByTagName('h3')[1];

    if (contact.length !== 14) {
        obj.innerHTML = "Contact must be 14 digits long";
        obj.style.color = 'red';
        return false;
    }
    
   let num = ["+88017", "+88019", "+88018", "+88015", "+88016", "+88013"];
    if (!num.includes(contact.substring(0, 6))) {
        obj.innerHTML = "Contact must start with +88017, +88019, +88018, +88015, +88016, or +88013";
        obj.style.color = 'red';
        return false;
    }
    
    obj.innerHTML = "Valid contact";
    obj.style.color = 'black';
    return true;
}

</script>

</body>
</html>
