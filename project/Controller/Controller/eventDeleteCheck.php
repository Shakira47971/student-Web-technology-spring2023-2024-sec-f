<?php
require_once('../Model/eventadmin.php');
$eventId=$_REQUEST ['eventId'];
if (empty($eventId)) {
    echo "Error: event id is empty.";
} else {
    $status=eDelete($eventId);
    if($status){
        
    header('location:../View/eventView.php');
    }else{
        echo"DB error!";
    }
}


?>
