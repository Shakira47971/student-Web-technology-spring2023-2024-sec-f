<?php
require_once('db.php');

function Add($user) {
    $conn = dbConnection();
    $sql = "INSERT INTO foodadmin  VALUES ('{$user['foodId']}','{$user['foodDescription']}', '{$user['price']}', '{$user['proPic']}')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
function uniId($foodId) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM foodadmin WHERE foodId = '$foodId'";
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
function viewFood() {
    $con = dbConnection();
    $sql = "SELECT * FROM foodadmin";
    $result = mysqli_query($con, $sql);
    $food = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($food, $row);
    }
    return $food;
}


function getfood($foodId){ 

    $con = dbConnection();
    $sql = "SELECT * FROM foodadmin WHERE foodId='$foodId' ";
    $result = mysqli_query($con, $sql);
  $food = [];
  
  while($row = mysqli_fetch_assoc($result)){
    array_push($food, $row);
  }
  return $food;
  
  }
function deleteFood($foodId) {
    $conn = dbConnection();
    $sql = "DELETE FROM foodadmin WHERE foodId='$foodId'";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function editFood($foodId,$foodDescription, $price, $target_fil) {
    $conn = dbConnection();
    $sql = "UPDATE foodadmin SET foodDescription='$foodDescription', price='$price', proPic='$target_fil' WHERE foodId='$foodId'";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
function foodEdit($foodId){
    $con = dbConnection();
    $sql = "SELECT * FROM foodadmin WHERE foodId='$foodId' ";
    $result = mysqli_query($con, $sql);
    $food= [];
  
    while($row = mysqli_fetch_assoc($result)){
        array_push($food, $row);
    }
  
    return $food;
  }
?>
