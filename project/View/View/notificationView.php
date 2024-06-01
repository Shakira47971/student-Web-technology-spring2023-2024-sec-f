<?php
session_start();



if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/notifications.php');

$notification=viewnotification();


$_SESSION['notification'] = $notification;

    ?>

<html>
<head>
    <title> View Room</title>
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
    
         <a id="b11"href="AdminHome.php">Home</a>
</fieldset>
   


<div align="center">

<?php foreach ($notification as $notificationItem) { ?>
                
               
               
   User name: <?php echo $notificationItem['username']; ?> <br>
                Message: <?php echo $notificationItem['message']; ?> <br>
                  
              <?php } ?>
                  </div>          
             
                
                
             
   

        </body>
        </html>
        