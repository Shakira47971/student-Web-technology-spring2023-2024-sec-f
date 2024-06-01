<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/eventadmin.php');
$event=viewevent();
$_SESSION['event'] = $event;



?>
<html>
<head>
    <title>Facilities Form</title>
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
    <a id="b4" href="roomCustomerView.php">Back</a>
    <a id="b11" href="PackageViewCustomer.php">Next</a>
</fieldset>
<div class="room-container">
<?php for($i=0; $i<count($event); $i++){?>
<div class="room-item" style="text-align: left;">
<img src="<?php echo $event[$i]['eventPic'] ?>"  id="room-picture">
            event Id:<?php echo $event[$i]['eventId'];?><br>
                Name:<?php echo $event[$i]['eventName'];?><br>
                Capacity:<?php echo $event[$i]['eventCapacity'];?><br>
                Food:<?php echo$event[$i]['eventFood']?><br>
               
                Price:<?php echo $event[$i]['eventPrice']; ?> tk<br>
                
                
               <p> <a id="b12" onclick="validateEdit()" href="SelectedEvent.php?eventId=<?=$event[$i]['eventId']?>"> Select </a></p>
               </div>
    <?php } ?>
</div>
       

        <script>

function validateEdit(){
    
    
       alert ( "are u sure u want to select this event?");
}

</script>


</body>
        </html>
   

