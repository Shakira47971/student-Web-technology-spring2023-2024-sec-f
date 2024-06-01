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
    <link rel="stylesheet" href="../Assets/customerStyle.css"/>
</head>
<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    <h3 id="b1"><u>Click&Stay</u></h3>
    <h4 id="b10">Find your next stay</h4>
     <a id="b4" href="ReportCustomer.php">Back</a>
         <a id="b11"href="Home.php">Home</a>
</fieldset>
   






           Report  has been Submitted Successfully<br>
                
                
                
               
             
   

        </body>
        </html>
        