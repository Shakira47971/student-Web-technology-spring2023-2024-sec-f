<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

?>
<html>
<head>
    <title>Staff Management - Search</title>
</head>
<body>
<form method="post" action="StaffSearchView.php">
    <div style="text-align: center;">
        <h3><u>Search Staff</u></h3>
        <form method="get" action="../Controller/StaffsearchCheck.php">
        <table border=1  cellspacing=0 align="center">


            <label for="staffId">Staff ID:</label>
            <input type="text" id="staffId" name="staffId">
            <button type="submit">Search</button> </div>
</table>
            <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="StaffView.php">Back</a></div>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityAdmin.php">Next</a></div>
   
        </form>
   
</body>
</html>
