
<?php

session_start(); 

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$dd = $_REQUEST['dd'];
$mm = $_REQUEST['mm'];
$yyyy = $_REQUEST['yyyy'];


$name = htmlspecialchars(strip_tags($name));
$username = htmlspecialchars(strip_tags($username));
$email = filter_var($email, FILTER_SANITIZE_EMAIL);  


if (isset($_SESSION['users']) && in_array($username, array_column($_SESSION['users'], 'username'))) {
  echo "Username already exists. Please choose a different one.";
  exit; 
}


$password_hash = password_hash($password, PASSWORD_DEFAULT);


$user_data = array(
    "name" => $name,
    "username" => $username,
    "email" => $email,
    "password" => $password_hash,
    "gender" => $gender,
    "dob" => $yyyy . '-' . $mm . '-' . $dd,
);


if (!isset($_SESSION['users'])) {
  $_SESSION['users'] = array();
}
array_push($_SESSION['users'], $user_data);


echo "User created successfully! Please login.";



?>
