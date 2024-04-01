

<?php
require_once('../Model/Empadmin.php');


$empName = $_REQUEST['empName'];
$empUser = $_REQUEST['empUser'];

$Contact = $_REQUEST['contact'];
$Passward = $_REQUEST['passward'];

function nameCheck($empName){
if ($empName == "") {
    echo "Name cannot be empty";
} else {
    $words = explode(" ", $empName);

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

function username($empUser) {
    if ($empUser== "") {
        echo "Username cannot be empty";
       
    } else {
        $verify = uniuser($empUser);
        if ($verify) {
            echo "This username is already taken. Please choose a different username";
           
        }
    }
    return true;
}

function CheckContact($Contact) {
   
    if (strlen($Contact) !== 14) {
        echo "Contact must be 14 digits long";
        return false;
    }
    
    
    if (!in_array(substr($Contact, 0, 6), array("+88017", "+88019", "+88018", "+88015", "+88016", "+88013"))) {
        echo "Contact must start with +88017, +88019, +88018, +88015, +88016, or +88013";
        return false;
    }

    
    
    
    return true;
}
function passcheck($Password) {
    if ($Password == "" ) {
        echo "Password field is empty";
       
    } else {
        
        if (strlen($Password) < 8) {
            echo "Password must be at least 8 characters long";
           
        }

        $validChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";
        for ($i = 0; $i < strlen($Password); $i++) {
            $char = $Password[$i];
            if (strpos($validChars, $char) === false) {
                echo "Password can only contain letters, numbers, and underscores";
               
            }
        }
    }
    return true;
}





if ($empName == "" || $empUser == "" || $Contact == "" || $Passward == "" ) {
    echo "Error: Some fields are empty. Please fill all fields.";
} else {
        
    if (nameCheck($empName) && username($empUser)&&  CheckContact($Contact) && passcheck($Password) ) {
        $user = [ 'empName'=>$empName, 'empUser' => $empUser,  'contact' => $Contact, 'password' => $Password];
        $status = Add($user);
        if ($status) {
           
            header('location:../View/StaffView.php');
        } else {
            echo "DB error!";
        }
    }
}







 ?>  



       
       

      
       
   


