<?php
Session_start();

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


require_once('../Model/transportadmin.php');
$transportId = isset($_REQUEST['transportId']) ? $_REQUEST['transportId'] : '';


$transport = getTransport($transportId);

   ?>

<html>
<head>
    <title> View transport</title>
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    
    <h3 id="b1"><u>Click&Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
   
    <a id="b11" href="TransportCustomer.php">Back</a>
</fieldset>

   
    <form method="post" action="History.php" enctype="">
    <div class="room-container">
<?php for($i=0; $i<count($transport); $i++){?>
        <div class="room-item"style="text-align: left;">
            <img src="<?php echo $transport[$i]['proPic'] ?>"  id="room-picture">
             Transport Id: <?php echo $transport[$i]['transportId']; ?><br>
             Location <?php echo $transport[$i]['location']; ?><br>
            Transport Type: <?php echo $transport[$i]['transportType']; ?><br>
            Capacity: <?php echo $transport[$i]['capacity']; ?><br>
            Price: <?php echo $transport[$i]['price']; ?> tk<br>
            
              
              
               
               
            
            <?php } ?>
            </div>
        

        </body>
        </html>
        