<?php
require_once('../Model/staffadmin.php');
$staffId = $_REQUEST['staffId'];
$staffName = $_REQUEST['staffName'];
$Email = $_REQUEST['email'];
$Department = $_REQUEST['department'];
$Contact = $_REQUEST['contact'];
$Salary = $_REQUEST['salary'];
$accountStatus = $_REQUEST['accountStatus'];


if ($staffId  == "" || $staffName == "" ||$Email == "" || $Department == "" || $Contact== ""|| $Salary== ""|| $accountStatus == ""){
    echo "Error: Some fields are empty. Please fill all fields.";
 } 
 else {
     
    
    $status=Edit($staffId,$staffName,$Email,$Department,$Contact,$Salary,$accountStatus);
    if($status){
      
    header('location:../View/StaffView.php');
    }else{
        echo"DB error!";
    }
   
}




 ?>  


