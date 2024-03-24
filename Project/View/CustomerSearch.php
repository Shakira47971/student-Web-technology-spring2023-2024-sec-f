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
    <div style="text-align: center;">
        <h3><u>Search Customer</u></h3>
        <form method="get" action="../Controller/CustomerSearchCheck.php">
            <label for="guestId">Guest ID:</label>
            <input type="text" id="guestId" name="guestId">
            <button type="submit">Search</button>
        </form>
    </div>
</body>
</html>
