<?php
require_once('db.php');

function Add($user) {
    $conn = dbconnection();
   
    $sql = "INSERT INTO notifications (username, message) VALUES ('{$user['username']}', '{$user['message']}')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
function getNotifications($username) {
    $conn = dbConnection();
    $sql = "SELECT * FROM notifications WHERE  username = '$username' ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    $notifications = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $notifications[] = $row;
    }
    return $notifications;
}

function markNotificationAsRead($notificationId) {
    $conn = dbConnection();
    $sql = "UPDATE notifications SET is_read = 1 WHERE id = '$notificationId'";
    return mysqli_query($conn, $sql);
}
function viewnotification(){

    $con = dbConnection();
    $sql = "select * from notifications";
    $result = mysqli_query($con, $sql);
    $notification = [];
    
    while($row = mysqli_fetch_assoc($result)){
        array_push($notification, $row);
    }
return $notification;
}

?>
