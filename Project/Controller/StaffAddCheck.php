
<?php
require_once('../Model/staffadmin.php');

$staffId = $_REQUEST['staffId'];
$staffName = $_REQUEST['staffName'];
$Email = $_REQUEST['email'];
$Department = $_REQUEST['department'];
$Contact = $_REQUEST['contact'];
$Salary = $_REQUEST['salary'];
$accountStatus = $_REQUEST['accountStatus'];
function nameCheck($staffName){
if ($staffName == "") {
    echo "Name cannot be empty";
} else {
    $words = explode(" ", $staffName);

    function hasAtLeastTwoWords($words) {
        return (count($words) >= 2);
    }

if (!hasAtLeastTwoWords($words)) {
    echo "Name  must contains more than Two Words";
}
else {
    return true;
}
}
}
function emailCheck($Email){
if ($Email == "") {
    echo "Email Address Cannot be Empty";
} else {
    $isValid = true;
    $atPos = strpos($Email, "@");

    if ($atPos === false || $atPos === 0 || $atPos === strlen($Email) - 1) {
        $isValid = false;
        echo "Email must contain '@' symbol .";
    }
    else {
        $verify = uniEmail($Email);
        if ($verify) {
            echo "This email is already taken. Please choose a different email";
        }
        else{
            return true;
        }
  
    
       
    }
    
    

    if ($isValid) {
       
            return true;
    }
}
}
function CheckId($staffId) {
    if (strlen($staffId) < 2) {
        echo "Staff Id  must be at least 2 Number long";
        
    } 
        else {
            $verify = uniId($staffId);
            if ($verify) {
                echo "This staff Id is already taken. Please choose a different Id";
            }
            else{
                return true;
            }
      
        
           
        }
    
}
function CheckContact($Contact) {
    // Check if contact number is 13 digits long (including the '+')
    if (strlen($Contact) !== 14) {
        echo "Contact must be 14 digits long";
        return false;
    }
    
    // Check if contact number starts with one of the specified prefixes
    if (!in_array(substr($Contact, 0, 6), array("+88017", "+88019", "+88018", "+88015", "+88016", "+88013"))) {
        echo "Contact must start with +88017, +88019, +88018, +88015, +88016, or +88013";
        return false;
    }

    // Check if the 7th digit is one of 7, 9, 8, 6, 5, or 3
    
    // If all conditions are satisfied, return true
    return true;
}



function  CheckSalary($Salary)  {
    if ($Salary< 3000) {
        echo "Salary must be greater than  3000 ";
        return false;
    } else {
        return true;
    }
}


if ($staffId == "" || $staffName == "" || $Email == "" || $Department == "" || $Contact == "" || $Salary == "" || $accountStatus == "") {
    echo "Error: Some fields are empty. Please fill all fields.";
} else {
        
    if (nameCheck($staffName) && emailCheck($Email)&& CheckId($staffId)&& CheckSalary($Salary) && CheckContact($Contact) ) {
        $user = ['staffId' => $staffId, 'staffName' => $staffName, 'email' => $Email, 'department' => $Department, 'contact' => $Contact, 'salary' => $Salary, 'accountStatus' => $accountStatus];
        $status = Add($user);
        if ($status) {
           
            header('location:../View/StaffView.php');
        } else {
            echo "DB error!";
        }
    }
}







 ?>  



       
       

      
       
   


