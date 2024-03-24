<?php

require_once('../Model/bookings.php');

$GuestId=$_REQUEST['guestId'];
$GuestNumber=$_REQUEST['capacity'];
$RoomType=$_REQUEST['roomType'];
$CheckinDate=$_REQUEST['checkinDate'];
$CheckoutDate=$_REQUEST['checkoutDate'];
$PriceRange=$_REQUEST['price'];

if($GuestId==""||$GuestNumber==""||$RoomType==""||$CheckinDate==""||$CheckoutDate==""||$PriceRange==""){
     
    echo "Something is Null";
}
else{    
    
    $status=Edit($GuestId,$GuestNumber,$RoomType,$CheckinDate,$CheckoutDate,$PriceRange);
   
    if($status){
       
    header('location:../View/CustomerView.php');
    }else{
        echo"DB error!";
    }
}
 


     
    
    




 ?>  


