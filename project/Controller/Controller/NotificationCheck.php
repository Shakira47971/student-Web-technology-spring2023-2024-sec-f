<?php
require_once('../Model/notifications.php');

if (isset($_POST['username']) && isset($_POST['message'])) {
    $username = $_POST['username'];
    $message = $_POST['message'];

   
    if ($message == "") {
        echo "Message cannot be empty";
        return;
    } elseif (strlen($message) < 5 || strlen($message) > 20) {
        echo "Message must be 5 to 20 characters long";
        return;
    }
}

$user = ['username' => $username, 'message' => $message];
$status = Add($user); 

if ($status) {
    $_SESSION['username'] = $username; 
    
    header('location: ../View/notificationView.php');
    exit; 
} else {
    echo "DB error!";
}
 
?>
