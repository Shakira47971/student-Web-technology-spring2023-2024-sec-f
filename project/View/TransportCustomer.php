<?php
session_start();
if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
    exit;
}
require_once('../Model/transportadmin.php');
$transports = viewAvailableTransport();
$_SESSION['transport'] = $transports;
?>

<!DOCTYPE html>
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
    <a id="b4" href="home.php">Back</a>
</fieldset>

<div class="room-container">
    <?php foreach ($transports as $transport) { ?>
        <div class="room-item" style="text-align: left;">
            <img src="../Assets/<?php echo $transport['proPic'] ?>" id="room-picture">
            <br>Transport ID: <?php echo $transport['transportId']; ?><br>
            Transport Type: <?php echo $transport['transportType']; ?><br>
            Location: <?php echo $transport['location']; ?><br>
            Capacity: <?php echo $transport['capacity']; ?><br>
            Price: <?php echo $transport['price']; ?> tk<br>
            Status: <?php echo ($transport['transportStatus'] == 'booked') ? 'Booked' : 'Available'; ?><br>
            <?php if ($transport['transportStatus'] != 'booked') { ?>
                <p><a id="b12" href="SelectedTransport.php?transportId=<?php echo $transport['transportId']; ?>" onclick="return validateEdit();">Book</a></p>
            <?php } ?>
        </div>
    <?php } ?>
</div>

<script>
function validateEdit(){
    return confirm("Are you sure you want to book this transport?");
}
</script>

</body>
</html>
