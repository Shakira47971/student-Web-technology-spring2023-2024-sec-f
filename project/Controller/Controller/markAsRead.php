<?php
require_once('../Model/notifications.php');

if (isset($_POST['id'])) {
    $notificationId = $_POST['id'];
    if (markNotificationAsRead($notificationId)) {
        echo "success";
    } else {
        echo "fail";
    }
} else {
    echo "Invalid input.";
}
?>
