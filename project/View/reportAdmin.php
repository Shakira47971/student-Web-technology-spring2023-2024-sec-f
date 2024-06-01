<?php
session_start();



if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/report.php');


$report=viewreport();

$_SESSION['report'] = $report;

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
    
         <a id="b11"href="AdminHome.php">Home</a>
</fieldset>
   


<div align="center">
<?php for($i=0; $i<count($report); $i++){?>

   User Name:<?php echo $report[$i]['username']; ?><br>
           Report:<?php echo $report[$i]['report']; ?><br>
                
             
                
                
             
    <?php } ?>
</div>

        </body>
        </html>
        