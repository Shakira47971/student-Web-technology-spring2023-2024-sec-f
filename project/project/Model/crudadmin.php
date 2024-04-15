<?php
require_once('BookingCustomerDb.php');

function Add($user){
    $conn = dbconnection();
    $sql = "INSERT INTO crudAdmin VALUES ('{$user['roomId']}', '{$user['roomType']}', '{$user['roomNumber']}', '{$user['capacity']}', '{$user['price']}')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function uniId($roomId) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM crudadmin WHERE roomId = '$roomId'";
    $result = mysqli_query($conn, $sql);
  
    if (!$result) {
        return false;
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($row['COUNT(*)'] > 0) {
            return true; 
        } else {
            return false; 
        }
    }
}

function uniNumber($roomNumber) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM crudadmin WHERE roomNumber = '$roomNumber'";
    $result = mysqli_query($conn, $sql);
  
    if (!$result) {
        return false;
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($row['COUNT(*)'] > 0) {
            return true; 
        } else {
            return false; 
        }
    }
}

function viewRoom(){
    $con = dbConnection();
    $sql = "SELECT * FROM crudadmin";
    $result = mysqli_query($con, $sql);
    $room= [];
    
    while($row = mysqli_fetch_assoc($result)){
        array_push($room, $row);
    }
    
    return $room;
}

function Delete($roomId){
    $conn = dbconnection();
    $sql = "DELETE FROM crudadmin WHERE roomId='$roomId'";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function Edit($roomId, $roomType, $roomNumber, $capacity, $price){
    $conn = dbconnection();
    $sql = "UPDATE crudadmin SET roomType='$roomType', roomNumber='$roomNumber', capacity='$capacity', price='$price' WHERE roomId='$roomId'";
       
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
function roomEdit($roomId){
    $con = dbConnection();
    $sql = "select * from crudadmin where roomId='{$roomId}'";
    $result = mysqli_query($con, $sql);
    $room = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($room, $row);
    }

    return $room;
}
?>
