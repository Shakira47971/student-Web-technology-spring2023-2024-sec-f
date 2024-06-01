<?php
require_once('db.php');
function eAdd($user){
    $conn=dbconnection();
    $sql="INSERT INTO eventadmin VALUES  ('{$user['eventId']}','{$user['eventName']}','{$user['eventCapacity']}','{$user['eventFood']}','{$user['eventPrice']}','{$user['eventPic']}')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    }else{
        return false;
    }
   
}
function getevent($eventId){ 

  $con = dbConnection();
  $sql = "SELECT * FROM eventadmin WHERE eventId='$eventId' ";
  $result = mysqli_query($con, $sql);
$event = [];

while($row = mysqli_fetch_assoc($result)){
  array_push($event, $row);
}
return $event;

}

function euniId($eventId) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM eventadmin WHERE eventId = '$eventId'";
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
  function unievent($eventName) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM eventadmin WHERE eventName = '$eventName'";
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
  
  


function viewevent(){

    $con = dbConnection();
    $sql = "select * from eventadmin";
    $result = mysqli_query($con, $sql);
    $event = [];
    
    while($row = mysqli_fetch_assoc($result)){
        array_push($event, $row);
    }
return $event;
}
function eDelete($eventId){
    
    $conn = dbconnection();

    $sql = "DELETE FROM eventadmin WHERE eventId='$eventId'";

    
        if (mysqli_query($conn, $sql)) {
    
            return true;
    }else{
        return false;
    }
}
function eEdit($eventId,$eventName,$eventCapacity,$eventFood,$eventPrice,$target_file){
    
    $conn = dbconnection();

        
    $sql = "UPDATE eventadmin SET eventName='$eventName',eventCapacity='$eventCapacity', eventFood='$eventFood',eventPrice='$eventPrice', eventPic='$target_file' WHERE eventId='$eventId' ";
       
    if (mysqli_query($conn, $sql)) {
      
        return true;
    }else{
        return false;
    }
}
function eventEdit($eventId){
  $con = dbConnection();
  $sql = "SELECT * FROM eventadmin WHERE eventId='$eventId' ";
  $result = mysqli_query($con, $sql);
  $event= [];

  while($row = mysqli_fetch_assoc($result)){
      array_push($event, $row);
  }

  return $event;
}
?>