<?php
session_start();



if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/foodadmin.php');


$food=viewfood();
$_SESSION['food'] = $food;

    ?>

<html>
<head>
    <title> View Room</title>
    <link rel="stylesheet" href="../Assets/Admin.css"/>
</head>
<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
     <a id="b4" href="FoodAdmin.php">Back</a>
</fieldset>
   


<div class="facility-container">
<?php for($i=0; $i<count($food); $i++){?>
<div class="facility-item"style="text-align: left;">
<img src="<?php echo $food[$i]['proPic'] ?>"  id="facility-picture">
Food Id:<?php echo $food[$i]['foodId']; ?><br>
           
                 <?php echo$food[$i]['foodDescription'] ?><br>
              
                Price:<?php echo $food[$i]['price']; ?> tk<br>
                
                
                <p><b><a  href="foodEdit.php?foodId=<?=$food[$i]['foodId']?>">Edit</a><span style="padding:7px">
                <a href="foodDelete.php?foodId=<?=$food[$i]['foodId']?>"> Delete </a></span ></b></p>
               </div>
    <?php } ?>
</div>
        </body>
        </html>
        