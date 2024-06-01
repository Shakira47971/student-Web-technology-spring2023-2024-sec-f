<?php
require_once('../Model/eventadmin.php');
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    if (isset($_POST['eventId'])) {
        $eventId = $_POST['eventId'];
     $response=[];
        $taken = euniId($eventId);
        if ($taken) {
           $response['eventId']="This Id is already taken";
        }else{
            $response['eventId']="valid";
        }
        echo json_encode($response);
    } 
    else if (isset($_POST['eventName'])) {
        $eventName = $_POST['eventName'];
        $response=[];
        $taken = unievent($eventName);
        if ($taken) {
            $response['eventName']="This event Name is already taken";
           
    }else{
        $response['eventName']="valid";
    }
    echo json_encode($response);
    }else {
        echo json_encode(["message" => "Invalid request"]);
        exit;
      }  }else{
   
function Checkevent($eventName) {
    if ($eventName == "") {
        echo " event Name cannot be empty ";
        return false;
        exit;
    }
    else{
        $taken =unievent($eventName);
    if ($taken) {
      echo "This Name is already taken";
      return false;
    }
    elseif (strlen($eventName) < 5 || strlen($eventName) > 20) {
        echo "event Name must be 5 to 20 characters long";
        return false;
    } else {
        
            return true;
        }
    }
}

function CheckId($eventId) {
    if ($eventId== "") {
        echo " event Id cannot be empty ";
        return false;
        exit;
    }
    else{
        $taken =euniId($eventId);
    if ($taken) {
      echo "This Id is already taken";
      return false;
    }
    elseif (strlen($eventId) !== 2 || !is_numeric($eventId) || intval($eventId) <= 0) {
        echo "event Id must be 2 digits long and greater than 0";
        return false;
    } else {
       
            return true;
        }
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
        echo " Food Description cannot be empty ";
        return false;
    }
    elseif (strlen($eventFood) < 5 || strlen($eventFood) > 200) {
        echo " Food Description must be 5 to 199 characters long";
        return false;
    } else {
        
            return true;
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

function CheckCapacity($eventCapacity) {
    if ($eventCapacity == "") {
        echo "Capacity Cannot be Empty ";
        return false;
    }
    elseif (is_numeric($eventCapacity) && intval($eventCapacity) == $eventCapacity && $eventCapacity > 0 && $eventCapacity < 250) {
        return true;
    } else {
        echo "Capacity must be a positive integer between 1 and 249";
        return false;
    }
}


if (
    isset($_REQUEST['eventId'], $_REQUEST['eventName'],$_REQUEST['eventCapacity'], $_REQUEST['eventFood'], $_REQUEST['eventPrice'], $_FILES['eventPic']['name'])
    
     ) {
    $eventId = $_POST['eventId'];
    $eventName =  $_POST['eventName'];
    $eventCapacity =  $_POST['eventCapacity'];
    $eventFood =  $_POST['eventFood'];
   
    $eventPrice =  $_POST['eventPrice']; 
    $target_file = $_FILES['eventPic']['tmp_name'];
    $des = "../Assets/" . $_FILES['eventPic']['name'];
    if (Checkevent($eventName) && CheckId($eventId) &&  CheckCapacity($eventCapacity) && CheckFood($eventFood) && CheckPrice($eventPrice) && validateFilename()) { 
        if (move_uploaded_file($target_file, $des)) {
            $user = [
                'eventId' => $eventId,
                'eventName' => $eventName,
                'eventCapacity' => $eventCapacity,
                'eventFood' => $eventFood,
                
                'eventPrice'=>$eventPrice, 
                'eventPic' => $des
            ];
            $status = eAdd($user);
            if ($status) {
                header('location:../View/eventView.php');
                exit();
            } else {
                echo "Database error! Unable to add event.";
            }
        } else {
            echo "Error uploading file.";
        }
    }
} }
?>
