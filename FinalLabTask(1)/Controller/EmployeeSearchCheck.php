<?php
require_once('../Model/Empadmin.php');
$empUser=$_REQUEST ['empUser'];
if (empty($empUser)) {
    echo "Error: Staff id is empty.";
} else {
    $status=Searchemp($empUser);
    if($status){
       
    header('location:../View/EmployeeView.php');
    }else{
        echo"DB error!";
    }
}

?>