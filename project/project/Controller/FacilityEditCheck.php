<?php
require_once('../Model/facilityadmin.php');


$facilityId = $_REQUEST['facilityId'];
$facilityName = $_REQUEST['facilityName'];
$facilityDescription = $_REQUEST['facilityDescription'];
$Catagory = $_REQUEST['facilityCatagory'];




    if ($facilityId  == "" || $facilityName == "" ||$facilityDescription == "" || $Catagory == "" ){
       echo "Error: Some fields are empty. Please fill all fields.";
    } 
    else {
        
        
       
       
        $status=Edit($facilityId,$facilityName,$facilityDescription,$Catagory);
        if($status){
           
        header('location:../View/FacilityView.php');
        }else{
            echo"DB error!";
        }
   
}




 ?>  


