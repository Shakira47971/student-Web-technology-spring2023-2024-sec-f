<?php


if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>

<html>
<head>
    <title>Room Management Form</title>
</head>
<body  style ="text-align: center;"> 
<form method="post" action="PackageViewCustomer.php" enctype="">         
  <table align="center"  cellspacing="0" >
    <tr>
        <td>
       
<?php

if (isset($_POST['facilities']) && count($_POST['facilities']) >= 2) {
    $check = $_POST['facilities'];
    echo "Selected Facilities: " . implode(", ", $check);
} else {
    echo "Please Select at least one Facilities.";
}
?>
 
</td>
</tr>
</table>
    
<div style="padding: 7px;">
                            <button type="submit">Next</button>
                        </div>
</body>
</html>