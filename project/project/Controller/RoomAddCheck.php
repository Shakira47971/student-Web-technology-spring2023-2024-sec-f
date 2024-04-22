<?php
 
require_once('../Model/crudadmin.php');


function CheckId($roomId) {
    if (strlen($roomId) < 4) {
        echo "Room ID must be at least 4 digits long";
        return false;
    } else {
        if (uniId($roomId)) {
            echo "This room ID is already taken. Please choose a different ID";
            return false;
        } else {
            return true;
        }
    }
}


function CheckNumber($roomNumber) {
    if (strlen($roomNumber) < 3) {
        echo "Room number must be at least 3 digits long";
        return false;
    } else {
        if (uniNumber($roomNumber)) {
            echo "This room number is already taken. Please choose a different number";
            return false;
        } else {
            return true;
        }
    }
}


function CheckCapacity($capacity) {
    if ($capacity > 0) {
        return true;
    } else {
        echo "Capacity must be greater than 0";
        return false;
    }
}


function CheckPrice($price) {
    if ($price > 0 && $price > 2000) {
        return true;
    } else {
        echo "Price must be greater than 0 and more than 2000";
        return false;
    }
}


function RoomTypeCheck($roomType) {
    if ($roomType == "single" || $roomType == "double" || $roomType == "suite") {
        return true;
    } else {
        echo "Please select a valid room type.";
        return false;
    }
}


if (isset($_REQUEST['roomId']) && isset($_REQUEST['roomType']) && isset($_REQUEST['roomNumber']) && isset($_REQUEST['capacity']) && isset($_REQUEST['price'])) {
    $roomId = $_REQUEST['roomId'];
    $roomType = $_REQUEST['roomType'];
    $roomNumber = $_REQUEST['roomNumber'];
    $capacity = $_REQUEST['capacity'];
    $price = $_REQUEST['price'];

   
    if (CheckId($roomId) && RoomTypeCheck($roomType) && CheckNumber($roomNumber) && CheckCapacity($capacity) && CheckPrice($price)) {

       
        $user = ['roomId' => $roomId, 'roomType' => $roomType, 'roomNumber' => $roomNumber, 'capacity' => $capacity, 'price' => $price];
        $status = Add($user);

        if ($status) {
            
             
            
            header('location:../View/roomView.php');
            exit(); 
        } else {
            echo "Database error! Unable to add room.";
        }
    }
} else {
    echo "Error: Some fields are empty. Please fill all fields.";
}
?>
