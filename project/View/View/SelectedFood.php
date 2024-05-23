<?php
require_once('../Model/foodadmin.php');

$foodId = isset($_REQUEST['foodId']) ? $_REQUEST['foodId'] : '';
    $food = getfood($foodId);
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
  
 
    
    <div class="facility-container">
<?php for($i=0; $i<count($food); $i++){?>
<div class="facility-item"style="text-align: left;">
<img src="<?php echo $food[$i]['proPic'] ?>"  id="facility-picture"><br>
            food Id:<?php echo $food[$i]['foodId']; ?><br>
               
                 <?=$food[$i]['foodDescription'] ?><br>
              
                Price:<?php echo $food[$i]['price']; ?> tk<br>
               
               
            
            <?php } ?>
            </div>
</form>

        </body>
        </html>
        