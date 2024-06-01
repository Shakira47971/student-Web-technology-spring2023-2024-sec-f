<?php
session_start(); 
require_once('../Model/guestdb.php');
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

if(!isset($_COOKIE['flag'])){
    header('location: Login.php');
}
$user = $_SESSION['username'];

?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="../Assets/Admin.css"/>
    </head>
<body id="b8">
        <fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
<div id="b11" align=right><b>Welcome <?php echo $user; ?></div>
    <h3 id="b1"><u>Click & Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
      
</fieldset>
<div class="container">
<div class="E1">
        <ul>
            <li><a href="AdminHome.php">Dashboard</a></li>
            <li><a href="RoomAdmin.php">Room</a></li>
            <li><a href="BookingAdmin.php">Booking</a></li>
            <li><a href="GuestAdmin.php">Guest</a></li>
            <li><a href="StaffAdmin.php">Staff</a></li>
            <li><a href="FacilityAdmin.php">Facility</a></li>
            <li><a href="FoodAdmin.php">Food</a></li>
            <li><a href="TransportAdmin.php">Transport</a></li>
            <li><a href="PackageAdmin.php">Package</a></li>
            <li><a href="eventAdmin.php">Event</a></li>
            <li><a href="AdminNotification.php">Notification</a></li>
            <li><a href="CalenderAdmin.php">Calender</a></li>
            <li><a href="reportAdmin.php">Report</a></li>
            <li><a href="../Controller/LogOut.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
            <div class="dashboard-cards">
                <div class="card">
                    <h2>Total Rooms</h2>
                    <p>120</p>
                </div>
                <div class="card">
                    <h2>Total Bookings</h2>
                    <p>85</p>
                </div>
                <div class="card">
                    <h2>Total Guests</h2>
                    <p>45</p>
                </div>
                <div class="card">
                    <h2>Total Staff</h2>
                    <p>20</p>
                </div>
                <div class="card">
                    <h2>Facilities</h2>
                    <p>10</p>
                </div>
                <div class="card">
                    <h2>Reviews</h2>
                    <p>75</p>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>Bookings Over Time</h2>
                    <div class="pie-chart bookings-chart">
                        <div class="slice slice-1"></div>
                        <div class="slice slice-2"></div>
                        <div class="slice slice-3"></div>
                        <div class="slice slice-4"></div>
                        <div class="slice slice-5"></div>
                    </div>
                <div class="chart">
                    <h2>Guest Demographics</h2>
                    <div class="pie-chart guests-chart">
                        <div class="slice slice-1"></div>
                        <div class="slice slice-2"></div>
                        <div class="slice slice-3"></div>
                        <div class="slice slice-4"></div>
                        <div class="slice slice-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>