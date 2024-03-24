<?php
require_once('../Model/packageadmin.php');

$packageId = $_REQUEST['packageId'];
$packageName = $_REQUEST['packageName'];
$packageDescription = $_REQUEST['packageDescription'];
$packageCatagory = $_REQUEST['packageCatagory'];
$Price = $_REQUEST['packagePrice'];




    if ($packageId  == "" || $packageName == "" ||$packageDescription == "" || $packageCatagory == ""|| $Price == ""  ){
       echo "Error: Some fields are empty. Please fill all fields.";
    } 
    else {
        
        $status=Edit($packageId,$packageName,$packageDescription,$packageCatagory,$Price);
        if($status){
           
        header('location:../View/PackageView.php');
        }else{
            echo"DB error!";
        }
   
       
       
    
   
}




 ?>  


