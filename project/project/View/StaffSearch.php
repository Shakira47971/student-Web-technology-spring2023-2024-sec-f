<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

?>
<html>
<head>
    <title>Staff Management - Search</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">
<form method="post" action="StaffSearchView.php">
    
        <h3 id="b1"><u>Search Staff</u></h3>
        <form method="get" action="../Controller/StaffsearchCheck.php">
        <table border=1  cellspacing=0 align="center" class="c4">


            <label class="c3" for="staffId">Staff ID:</label>
            <input type="text" id="staffId" name="staffId">
            <button type="submit">Search</button> </div>
</table>
            <div style="padding: 7px;"> <a id="b5"href="StaffView.php">Back</a></div>
        <div style="padding: 7px;"> <a id="b5" href="FacilityAdmin.php">Next</a></div>
   
        </form>
   
</body>
</html>
