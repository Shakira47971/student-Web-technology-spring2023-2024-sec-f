<?php
require_once('../Model/login.php');
 
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
 
if ($username == "" || $password == "") {
    echo "null usernamepassword";
} else {
    $status = Login($username, $password);
    if ($username === $password) {
        setcookie('flag', 'true', time() + 3000, '/');
        header('location: ../View/BookingAdmin.php');
    } else if ($status) {
        setcookie('flag', 'true', time() + 3000, '/');
        header('location: ../View/BookingCustomer.php');
    } else {
        echo "Invalid User!";
    }
}
?>