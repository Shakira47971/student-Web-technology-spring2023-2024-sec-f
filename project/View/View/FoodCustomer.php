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
<div class="facility-container">
<?php for($i=0; $i<count($food); $i++){?>
<div class="facility-item" style="text-align: left;">
<img src="<?php echo $food[$i]['proPic'] ?>"  id="facility-picture">
           food Id:<?php echo $food[$i]['foodId']; ?><br>
              
                <?=$food[$i]['foodDescription'] ?><br>
               
               Price:<?php echo $food[$i]['price']; ?> tk<br>
                
                
               <p> <a id="b12" onclick="validateEdit()" href="SelectedFood.php?foodId=<?=$food[$i]['foodId']?>"> Select </a></p>
               </div>
    <?php } ?>
</div>
       

        <script>

function validateEdit(){
    
    
       alert ( "are u sure u want to select this food?");
}

</script>


</body>
        </html>
   

