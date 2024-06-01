<?php
session_start();
require_once('../Model/notifications.php');


if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
    exit; 
}
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
$message = isset($_REQUEST['message']) ? $_REQUEST['message'] : '';


$notification=getNotifications($username);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body>
    <div id="notification-container">
        <h2>Notifications</h2>
        <button id="refresh-btn"></button>
        <ul id="notification-list"></ul>
    </div>
    <form method="post" action="adminNotification.php" enctype="">         
    
            <?php foreach ($notification as $notificationItem) { ?>
                
               
               
              
              Message: <?php echo $notificationItem['message']; ?> <br>
                
            <?php } ?>
                </div>
                </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const notificationList = document.getElementById('notification-list');
            const refreshBtn = document.getElementById('refresh-btn');

            function fetchNotifications() {
                fetch('../Controller/getNotifications.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                })
                .then(response => response.json())
                .then(notifications => {
                    notificationList.innerHTML = '';
                    if (notifications.error) {
                        const li = document.createElement('li');
                        li.textContent = notifications.error;
                        notificationList.appendChild(li);
                    } else {
                        notifications.forEach(notification => {
                            const li = document.createElement('li');
                            li.classList.add('notification-item');
                            li.innerHTML = `
                                <p>${notification.message}</p>
                                <small>${new Date(notification.created_at).toLocaleString()}</small>
                            `;
                            if (notification.is_read) {
                                li.classList.add('read');
                            }
                            li.addEventListener('click', () => markAsRead(notification.id, li));
                            notificationList.appendChild(li);
                        });
                    }
                });
            }

            function markAsRead(notificationId, notificationElement) {
                fetch('../Controller/markAsRead.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `id=${notificationId}`,
                })
                .then(response => response.text())
                .then(result => {
                    if (result === 'success') {
                        notificationElement.classList.add('read');
                    } else {
                        console.error('Failed to mark notification as read');
                    }
                });
            }

            refreshBtn.addEventListener('click', fetchNotifications);
            fetchNotifications();
        });
    </script>
</body>
</html>
