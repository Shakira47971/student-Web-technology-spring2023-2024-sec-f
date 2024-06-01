<?php
require_once('../Model/eventadmin.php');
function Checkevent($eventName) {
    if (strlen($eventName) < 2 || strlen($eventName) > 20) {
        echo "event Name must be 2 to 20 characters long";
        return false;
    } else {
       
       
            return true;
        }
}



function CheckPrice($eventPrice) { 
    if ($eventPrice == "") {
        echo " Price cannot be empty ";
        return false;
    }
    elseif ($eventPrice > 0 && $eventPrice <= 500000) { 
        return true;
    } else {
        echo "Price must be greater than 0 and less than or equal to 5 lac";
        return false;
    }
}

function CheckFood($eventFood) {
    if ($eventFood == "") {
        echo " Food Food cannot be empty ";
        return false;
    }
    elseif (strlen($eventFood) < 5 || strlen($eventFood) > 200) {
        echo " Food Food must be 5 to 199 characters long";
        return false;
    } else {
        
            return true;
        }
    }
    function CheckCapacity($eventCapacity) {
        if ($eventCapacity == "") {
            echo "Capacity Cannot be Empty ";
            return false;
        }
        elseif (is_numeric($eventCapacity) && intval($eventCapacity) == $eventCapacity && $eventCapacity > 0 && $eventCapacity < 11000) {
            return true;
        } else {
            echo "Capacity must be a positive integer between 1 and 10,000";
            return false;
        }
    }
    

function validateFilename() {
    if (!isset($_FILES['eventPic']) || $_FILES['eventPic']['error'] == UPLOAD_ERR_NO_FILE) {
        echo "Please select a picture";
        return false;
    }

    
    $fileName = $_FILES['eventPic']['name'];

  
    if (empty($fileName)) {
        echo "Please select a picture";
        return false;
    }


    return true;
}



if (
    isset($_REQUEST['eventId'], $_REQUEST['eventName'], $_REQUEST['eventFood'], $_REQUEST['eventCapacity'], $_REQUEST['eventPrice'], $_FILES['eventPic']['name'])
    && !empty($_REQUEST['eventId']) && !empty($_REQUEST['eventName']) &&  !empty($_REQUEST['eventCapacity']) &&!empty($_REQUEST['eventFood']) && !empty($_REQUEST['eventPrice']) && !empty($_FILES['eventPic']['name'])
     ) {
    $eventId = $_REQUEST['eventId'];
    $eventName = $_REQUEST['eventName'];
    $eventCapacity = $_REQUEST['eventCapacity'];
    $eventFood = $_REQUEST['eventFood'];
   
    $eventPrice = $_REQUEST['eventPrice']; 
    $target_file = $_FILES['eventPic']['tmp_name'];
    $des = "../Assets/" . $_FILES['eventPic']['name'];
    if (Checkevent($eventName)  && CheckFood($eventFood) && CheckPrice($eventPrice)&& CheckCapacity($eventCapacity) && validateFilename()) { 
        if (move_uploaded_file($target_file, $des)) {
       
        $status=eEdit($eventId,$eventName,$eventCapacity,$eventFood,$eventPrice,$target_file);
        if($status){
           
        header('location:../View/eventView.php');
        exit();
    } else {
        echo "Database error! Unable to add event.";
    }
} else {
    echo "Error uploading file.";
}
}
} else {
echo "Some fields are empty. Please fill all fields.";
}

    


 ?>  


