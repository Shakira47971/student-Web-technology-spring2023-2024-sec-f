<?php
require_once('../Model/eventadmin.php');

$eventId = isset($_REQUEST['eventId']) ? $_REQUEST['eventId'] : '';
    $event = getevent($eventId);
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }


?>

<html>
<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body  id="b8"> 
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
   
    <a id="b11" href="PackageViewCustomer.php">Next</a>
</fieldset>

<form method="post" action="PackageViewCustomer.php" enctype="">         
  
 
    
    <div class="room-container">
<?php for($i=0; $i<count($event); $i++){?>
<div class="room-item"style="text-align: left;">
<img src="<?php echo $event[$i]['eventPic'] ?>"  id="room-picture">
           event Id:<?php echo $event[$i]['eventId']; ?><br>
               Name:<?php echo $event[$i]['eventName']; ?><br>
                
              Capacity:<?php echo $event[$i]['eventCapacity']; ?><br>
              Food:<?=$event[$i]['eventFood'] ?><br>
               Price:<?php echo $event[$i]['eventPrice']; ?> tk<br>
               
            
            <?php } ?>
            </div>
</form>

        </body>
        </html>
        