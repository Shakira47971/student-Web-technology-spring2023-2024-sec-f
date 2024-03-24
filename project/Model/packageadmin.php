<?php
require_once('BookingCustomerDb.php');
function Add($user){
    $conn=dbconnection();
    $sql="insert into packageadmin values ('{$user['packageId']}','{$user['packageName']}','{$user['packageDescription']}','{$user['packageCatagory']}','{$user['packagePrice']}')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    }else{
        return false;
    }

   
}
function uniPackage($packageName) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM packageadmin WHERE packageName = '$packageName'";
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
  
    
  function uniId($packageId) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM packageadmin WHERE packageId = '$packageId'";
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
  function uniPackageD($packageDescription) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM packageadmin WHERE packageDescription = '$packageDescription'";
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
  

function viewPackage(){

    $con = dbConnection();
    $sql = "SELECT * FROM packageadmin ";
    $result = mysqli_query($con, $sql);
$package = [];

while($row = mysqli_fetch_assoc($result)){
    array_push($package, $row);
}
return $package;
}
function Delete($packageId){
    
    $conn = dbconnection();

    $sql = "DELETE FROM packageadmin WHERE packageId='$packageId'";
    
        if (mysqli_query($conn, $sql)) {
    
            return true;
    }else{
        return false;
    }
}
function Edit($packageId,$packageName,$packageDescription,$packageCatagory,$Price){
    
    $conn = dbconnection();

        
     $sql = "UPDATE packageadmin SET packageName='$packageName',packageDescription='$packageDescription',packageCatagory='$packageCatagory', packagePrice='$Price' WHERE packageId='$packageId' ";
       
    if (mysqli_query($conn, $sql)) {
      
        return true;
    }else{
        return false;
    }
}
     
    function getPackage($packageId){ 

    $con = dbConnection();
    $sql = "SELECT * FROM packageadmin WHERE packageId='$packageId' ";
    $result = mysqli_query($con, $sql);
$package = [];

while($row = mysqli_fetch_assoc($result)){
    array_push($package, $row);
}
return $package;

  }
  function packageEdit($packageId){
    $con = dbConnection();
    $sql = "SELECT * FROM packageadmin WHERE packageId='$packageId' ";
    $result = mysqli_query($con, $sql);
    $package= [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($package, $row);
    }

    return $package;
}

?>