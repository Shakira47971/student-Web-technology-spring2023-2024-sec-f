
<?php
require_once('../Model/facilityadmin.php');

$facilityId = $_REQUEST['facilityId'];
$facilityName = $_REQUEST['facilityName'];
$facilityDescription = $_REQUEST['facilityDescription'];
$Catagory = $_REQUEST['facilityCatagory'];
function CheckFacility($facilityName) {
    if (strlen($facilityName) < 2) {
        echo "facility Name must be at least 2 characters long";
        
    } 
        else {
            $verify = uniFacility($facilityName);
            if ($verify) {
                echo "This facility Name is already taken. Please choose a different facility Name";
            }
            else{
                return true;
            }
      
        
           
        }
    
}
function CheckId($facilityId) {
    if (strlen($facilityId) < 3) {
        echo "facility Id  must be at least 3 Number long";
        
    } 
        else {
            $verify = uniId($facilityId);
            if ($verify) {
                echo "This facility Id is already taken. Please choose a different Id";
            }
            else{
                return true;
            }
      
        
           
        }
    
}
function CheckDescription($facilityDescription) {
    if (strlen($facilityDescription) < 10) {
        echo "Facility Description must be at least 10 characters long";
        
    } 
        else {
            $verify = uniFacilityD($facilityDescription);
            if ($verify) {
                echo "This facility description is already written. Please choose a different facility description";
            }
            else{
                return true;
            }
      
        
           
        }
    
}






    if ($facilityId  == "" || $facilityName == "" ||$facilityDescription == "" || $Catagory == "" ){
       echo "Error: Some fields are empty. Please fill all fields.";
    } 
    else {
        
        if (CheckFacility($facilityName) &&  CheckId($facilityId) && CheckDescription($facilityDescription) ){


        $user=['facilityId'=>$facilityId,'facilityName'=>$facilityName,'facilityDescription'=>$facilityDescription,'facilityCatagory'=>$Catagory];
        $status=Add($user);
        if($status){
            
        header('location:../View/FacilityView.php');
        }else{
            echo"DB error!";
        }
    }
}




 ?>  



       
       

      
       
   


