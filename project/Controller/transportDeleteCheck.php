<?php
require_once('../Model/transportadmin.php');
$transportId=$_REQUEST ['transportId'];
if (empty($transportId)) {
    echo "Error: transport id is empty.";
     

}
else{
    
$status=Delete($transportId);
        if($status){
            
        header('location:../View/TransportView.php');
        }else{
            echo"DB error!";
        }
    }

?>
