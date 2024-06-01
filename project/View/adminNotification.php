<?php
session_start();
if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
    exit;
}
?>


<html>
<head>
    <title>Send Notification</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>
<body>
    <h3 id="validationMessage"></h3>
    <h2>Send Notification</h2>
    <form method="post" action="../Controller/NotificationCheck.php">
        <label for="username">User ID:</label>
        <input type="text" id="username" name="username" onkeyup="validateUser()">
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" onkeyup="validateMessage()"></textarea>
        <br>
        <button type="submit">Send Notification</button>
    </form>
    <script>
       function validateUser() {
    let user = document.getElementById('username').value;
    let obj = document.getElementById('validationMessage');
    if (user=== "") {
        obj.innerHTML = "user cannot be empty";
        obj.style.color = 'red';
        return false;
    } 
    if (user.length < 5 || report.length > 20) {
        obj.innerHTML = "user Name must be 5 to 19 characters long";
        obj.style.color = 'red';
        return false;
    }
    else {
        obj.innerHTML = "Valid User Name";
        obj.style.color = 'black';
        return true;
    }

}
        function validateMessage() {
            let message = document.getElementById('message').value;
            let obj = document.getElementById('validationMessage');
            if (message === "") {
                obj.innerHTML = "Message cannot be empty";
                obj.style.color = 'red';
                return false;
            } else if (message.length < 5 || message.length > 20) {
                obj.innerHTML = "Message must be 5 to 20 characters long";
                obj.style.color = 'red';
                return false;
            } else {
                obj.innerHTML = "Valid message";
                obj.style.color = 'black';
                return true;
            }
        }
    </script>
</body>
</html>
