<?php

require_once('../Model/crudadmin.php');

$roomId = $_REQUEST['roomId'];
$roomNumber = $_REQUEST['roomNumber'];
$roomType = $_REQUEST['roomType'];
$capacity = $_REQUEST['capacity'];
$price = $_REQUEST['price'];




    if ($roomId == "" || $roomType == "" ||$roomNumber == "" || $capacity == "" || $price == "") {
       echo "Error: Some fields are empty. Please fill all fields.";
    } 
    else {
        

        
        $status=Edit($roomId,$roomType,$roomNumber,$capacity,$price);
        if($status){
           
        header('location:../View/roomView.php');
        }else{
            echo"DB error!";
        }
    }
   




 ?>  


