<?php
require_once('../Model/foodadmin.php');
$foodId=$_REQUEST ['foodId'];
if (empty($foodId)) {
    echo "Error: food id is empty.";
} else {
    $status=Delete($foodId);
    if($status){
        
    header('location:../View/FoodView.php');
    }else{
        echo"DB error!";
    }
}


?>
