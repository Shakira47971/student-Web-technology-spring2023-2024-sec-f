<?php
require_once('BookingCustomerDb.php');
function booking($user){
    $conn=dbconnection();
    $sql="insert into bookings values('{$user['guestId']}','{$user['capacity']}','{$user['roomNumber']}','{$user['roomType']}','{$user['checkinDate']}','{$user['checkoutDate']}','{$user['priceRange']}')";
    if(mysqli_query($conn,$sql)){
       return true;
    }else{
        return false;
    }

}
function uniId($GuestId) {
    $conn = dbConnection();
    $sql = "SELECT COUNT(*) FROM bookings WHERE guestId = '$GuestId'";
    $result = mysqli_query($conn, $sql);
  
    if (!$result) {
      return false;
    } else {
      $row = mysqli_fetch_assoc($result);
      if ($row['COUNT(*)'] > 0) {
        return true; 
      } else {
        return false; 
      }
    }
  }
  
function search($roomType, $price, $GuestNumber) {
    $conn = dbconnection();
    $sql = "SELECT * FROM crudadmin WHERE roomType ='$roomType' AND price='$price' AND capacity='$GuestNumber'";
    $result = mysqli_query($conn, $sql);
    $room = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($room, $row);
    }

    return $room; 
}
function getRoom($roomNumber){ 

  $con = dbConnection();
  $sql = "SELECT * FROM crudadmin WHERE roomNumber='$roomNumber' ";
  $result = mysqli_query($con, $sql);
$room = [];

while($row = mysqli_fetch_assoc($result)){
  array_push($room, $row);
}
return $room;

}



function viewCustomer(){

  $con = dbConnection();
  $sql = "select * from bookings";
  $result = mysqli_query($con, $sql);
  $guest = [];
  
  while($row = mysqli_fetch_assoc($result)){
      array_push($guest, $row);
  }
return $guest;
}
function Delete($GuestId){
  
      $conn = dbconnection();
  
      $sql = "DELETE FROM bookings WHERE guestId='$GuestId'";
  
      if (mysqli_query($conn, $sql)) {
  
          return true;
  }else{
      return false;
  }
}
function Edit($GuestId,$GuestNumber,$RoomType,$CheckinDate,$CheckoutDate,$PriceRange) {
  
  $conn = dbconnection();

      
  $sql = "UPDATE bookings SET capacity='$GuestNumber',roomType='$RoomType',checkinDate ='$CheckinDate', checkoutDate='$CheckoutDate',price='$PriceRange' WHERE guestId='$GuestId'";
     
  if (mysqli_query($conn, $sql)) {
    
      return true;
  }else{
      return false;
  }
}
function SearchCustomer($GuestId){
  
  $con = dbConnection();
  $sql = "SELECT * From bookings  WHERE guestId='$GuestId' ";
  $result = mysqli_query($con, $sql);
 
    
    $guest = [];
  
    while($row = mysqli_fetch_assoc($result)){
        array_push($guest, $row);
    }
  return $guest;
  
  }
  function guestEdit($GuestId){
    $con = dbConnection();
    $sql = "SELECT * From bookings  WHERE guestId='$GuestId' ";
    $result = mysqli_query($con, $sql);
    $guest = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($guest, $row);
    }

    return $guest;
}

  
  




?>