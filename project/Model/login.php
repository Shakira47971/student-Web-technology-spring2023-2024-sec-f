<?php 
    require_once('BookingCustomerDb.php');

    function Login($username, $password) {
      $con = dbConnection();
      $username = mysqli_real_escape_string($con, $username);
      $password = mysqli_real_escape_string($con, $password);
  
      $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
      $result = mysqli_query($con, $sql);
  
      if ($result && mysqli_num_rows($result) == 1) {
          return true; 
      } else {
          return false; 
      }
  }

    function getAllGuest(){
        $con = dbConnection();
        $sql = "select * from login";
        $result = mysqli_query($con, $sql);
        $guest = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($guest, $row);
        }

        return $guest;
    }
    function uniuser($username) {
        $conn = dbConnection();
        $sql = "SELECT COUNT(*) FROM login WHERE username = '$username'";
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
    function uniemail($email){
        $conn=dbconnection();
        $sql = "SELECT COUNT(*) FROM login WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        
        if (!$result) {
          return false;
        } else {
          $row = mysqli_fetch_assoc($result);
          if ($row['COUNT(*)'] > 0) {
            return true;
          }else{
            return false;
          }
        }

    }
    function createGuest($guest){
      $con = dbConnection();
      $name = mysqli_real_escape_string($con, $guest['name']);
      $email = mysqli_real_escape_string($con, $guest['email']);
      
      $username = mysqli_real_escape_string($con, $guest['username']);
      $password = mysqli_real_escape_string($con, $guest['password']);
      $gender = mysqli_real_escape_string($con, $guest['gender']);
      $dd = mysqli_real_escape_string($con, $guest['dd']);
      $mm = mysqli_real_escape_string($con, $guest['mm']);
      $yyyy = mysqli_real_escape_string($con, $guest['yyyy']);
      $sql = "INSERT INTO login  (name, email, username, password, gender, dd, mm, yyyy) 
              VALUES ('$name', '$email',  '$username', '$password', '$gender','$dd', '$mm', '$yyyy')";       
  
      if(mysqli_query($con, $sql)){
          return true;
      }else{
          return false;
      }
  }
  
    

?>