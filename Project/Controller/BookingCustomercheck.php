
<?php
require_once('../Model/bookings.php');
Session_start();
$GuestId = $_REQUEST['guestId'];
$GuestNumber = $_REQUEST['capacity'];
$RoomNumber = $_REQUEST['roomNumber'];
$RoomType = $_REQUEST['roomType'];
$CheckinDate = $_REQUEST['checkinDate'];
$CheckoutDate = $_REQUEST['checkoutDate'];
$PriceRange = $_REQUEST['price'];

function dateCheck($CheckinDate, $CheckoutDate) {
    $currentDate = date('Y-m-d');
    $checkin = date('Y-m-d', strtotime($CheckinDate));
    $checkout = date('Y-m-d', strtotime($CheckoutDate));

    if ($checkin < $currentDate) {
        echo "Check-in date must be a future date.";
        return false;
    }  elseif ($checkout<= $checkin) {
        echo"Check-out date must be after the check-in date.";
        return false;
    } elseif ($checkout<= $currentDate) {
        echo"Check-out date must be in the future.";
        return false;
    } else {
        return true;
    }
}




function CheckId($GuestId) {
    if (strlen($GuestId) < 5) {
        echo "Guest Id  must be at least 5 digit long";
        return false;
        
    } 
        else {
            $verify = uniId($GuestId);
            if ($verify) {
                echo "This  Id is already taken. Please choose a different Id";
            }
            else{
                return true;
            }
      
        
           
        }
    
}
        



function CheckCapacity($GuestNumber) {
    if ($GuestNumber <= 0) {
        echo "Guest Number must be greater than 0";
        return false;
    } else {
        return true;
    }
}


function RoomTypecheck($RoomType) {
    if ($RoomType) {
        return true;
    } else {
        echo "Please select a Room Type.";
        return false;
    }
}

function CheckPrice($PriceRange) {
    if ($PriceRange < 1500) {
        echo "Price must be greater than  1500 ";
        return false;
    } else {
        return true;
    }
}
 

if($GuestId==""||$GuestNumber==""||$RoomType==""||$CheckinDate==""||$CheckoutDate==""||$PriceRange==""){
     
    echo "Something is Null";
}
else{
    
    if(CheckId($GuestId) && CheckCapacity($GuestNumber) && RoomTypeCheck($RoomType) &&  CheckPrice($PriceRange)&& dateCheck($CheckinDate ,$CheckoutDate)){
    
    $user=['guestId'=>$GuestId,'capacity'=>$GuestNumber,'roomNumber'=>$RoomNumber,'roomType'=>$RoomType,'checkinDate'=>$CheckinDate,'checkoutDate'=>$CheckoutDate,'price'=>$PriceRange];
   $status=booking($user);
    if($status){
        $_SESSION['roomNumber']=$RoomNumber;
    header('location:../View/RoomBook.php');
    }else{
        echo"DB error!";
    }
}
} 

?> 