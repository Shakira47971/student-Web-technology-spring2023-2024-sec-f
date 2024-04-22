<?php
require_once('../Model/Empadmin.php');

$empName = $_REQUEST['empName'];
$empUser = $_REQUEST['empUser'];

$Contact = $_REQUEST['contact'];
$Password = $_REQUEST['password'];



if ($empName == "" ||$empUser == ""  || $Contact== ""|| $Password== ""){
    echo "Error: Some fields are empty. Please fill all fields.";
 } 
 else {
     
    
    $status=Edit($empName,$empUser,$Contact,$Password);
    if($status){
      
    header('location:../View/EmployeeView.php');
    }else{
        echo"DB error!";
    }
   
}




 ?>  

