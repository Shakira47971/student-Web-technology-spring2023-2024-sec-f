<?php
session_start();
require_once('../Model/notifications.php');

if (!isset($_SESSION['username'])) {
    echo json_encode(['error' => 'User not authenticated']);
    exit;
}

$username= $_SESSION['username'];
$notifications = getNotifications($username);

header('Content-Type: application/json');
echo json_encode($notifications);
?>
