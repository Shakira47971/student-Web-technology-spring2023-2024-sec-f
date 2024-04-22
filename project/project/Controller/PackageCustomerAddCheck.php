
<?php
require_once('../Model/packageadmin.php');

$packageId = $_REQUEST['packageId'];
$packageName = $_REQUEST['packageName'];
$packageDescription = $_REQUEST['packageDescription'];
$packageCatagory = $_REQUEST['packageCatagory'];
$Price = $_REQUEST['packagePrice'];

function CheckPackage($packageName) {
    if (strlen($packageName) < 5) {
        echo "Package Name must be at least 5 characters long";
        
    } 
        else {
            $verify = uniPackage($packageName);
            if ($verify) {
                echo "This package Name is already taken. Please choose a different package Name";
            }
            else{
                return true;
            }
      
        
           
        }
    
}
function CheckId($packageId) {
    if (strlen($packageId) < 3) {
        echo "Package Id  must be at least 3 Number long";
        
    } 
        else {
            $verify = uniId($packageId);
            if ($verify) {
                echo "This package Id is already taken. Please choose a different Id";
            }
            else{
                return true;
            }
      
        
           
        }
    
}


       



    if ($packageId  == "" || $packageName == "" ||$packageDescription == "" || $packageCatagory == ""|| $Price == "" ){
       echo "Error: Some fields are empty. Please fill all fields.";
    } 
    else {
        
        
        if (CheckPackage($packageName) &&  CheckId($packageId)){
        $user=['packageId'=>$packageId,'packageName'=>$packageName,'packageDescription'=>$packageDescription,'packageCatagory'=>$packageCatagory,'packagePrice'=>$Price];
    
        $status=Add($user);
        if($status){
           
        header('location:../View/PackageViewCustomer.php');
        }else{
            echo"DB error!";
        }
   
}
    }



 ?>  



       
       

      
       
   


