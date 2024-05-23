<?php
session_start();
if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
    exit;
}
require_once('../Model/transportadmin.php');
$transports = viewTransport();
?>

<html>
<head>
    <title>View trasport</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click & Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
    <a id="b11" href="StaffAdmin.php">Next</a>
    <a id="b4" href="TransportAdmin.php">Back</a>
</fieldset>

<div class="room-container">
    <?php foreach ($transports as $transport) { ?>
        <div class="room-item" style="text-align: left;">
            <img src="<?php echo $transport['proPic'] ?>"  id="room-picture">
            Trasport ID:<?php echo $transport['transportId']; ?><br>
            Location: <?php echo $transport['location']; ?><br>
            Trasport Type:<?php echo $transport['transportType']; ?><br>
            
            Capacity:<?php echo $transport['capacity']; ?><br>
            Price:<?php echo $transport['price']; ?> tk<br>
            
            Status:<?php echo $transport['trasportStatus']; ?><br> 
            <p>
                <b><a href="transportEdit.php?transportId=<?php echo $transport['transportId'] ?>">Edit</a>
                <span style="padding:7px">
                <a href="transportDelete.php?transportId=<?php echo $transport['transportId'] ?>">Delete</a>
                </span></b>
            </p>
        </div>
    <?php } ?>
</div>

</body>
</html>
