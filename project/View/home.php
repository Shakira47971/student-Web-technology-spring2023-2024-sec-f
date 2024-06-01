<?php
session_start(); 
require_once('../Model/guestdb.php');
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$user = $_SESSION['username'];

$name=name($user);
require_once('../Model/crudadmin.php');
$rooms = viewRoom();
require_once('../Model/packageadmin.php');
$packages=viewPackage();
require_once('../Model/facilityadmin.php');
$facility=viewFacility();
require_once('../Model/eventadmin.php');
$event=viewevent();
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="../Assets/customerStyle.css"/>
    </head>
<body class="b1">

<fieldset id="b9">
    <img src="../Assets/logo.png" id="logo-image">
        <h3 id="b1"><u>Click & Stay</u></h3>
        
        <h4 id="b10">Find your next stay</h4>
        <?php for($i=0; $i<count($name); $i++){?>

<a id="b4" href="<?php echo $name[$i]['name']; ?>"><?php echo $name[$i]['name']; ?></a>
<?php } ?>
        
    </fieldset>
    <div class="container">
    <div class="E1">
                        <ul>
                        <li><a  href="home.php">Home</a></li>
                            <li><a  href="Profile.php">Profile</a></li>
                            <li><a  href="BookingCustomer.php">Booking</a></li>
                            
                            <li> <a  href="FacilityCustomer.php">Facility</a></li>
                            <li> <a  href="FoodCustomer.php">Food</a></li>
                            <li> <a  href="TransportCustomer.php">Transport</a></li>
                            <li> <a  href="PackageViewCustomer.php">Package</a></li>
                            <li> <a  href="payment.php">Payment</a></li>
                            <li> <a  href="Rating.php">Review</a></li>
                            <li> <a  href="notification.php">Notification</a></li>
                            <li> <a  href="ReportCustomer.php">Report</a></li>
                            <li><a   href="../Controller/LogOut.php">Logout </a></li>
                        </ul>
                        </div>
                        <div class="content">
                        <h1>Room</h1>           
    <div class="room-con">
        
    <?php foreach ($rooms as $room) { ?>
        <div class="room-it" style="text-align: left;">
            <img src="<?php echo $room['proPic'] ?>"  id="room-picture">
            Room Type:<?php echo $room['roomType']; ?><br>
            Room Number:<?php echo $room['roomNumber']; ?><br>
            Capacity:<?php echo $room['capacity']; ?><br>
            Price:<?php echo $room['price']; ?> tk<br>
            </div>
    <?php } ?>
</div>
<h1>Packages</h1>  
<div class="room-con">
<?php foreach ($packages as $package) { ?>
        <div class="room-it" style="text-align: left;">
            <img src="<?php echo $package['proPic'] ?>" id="package-picture"><br>
            Name: <?php echo $package['packageName']; ?><br>
            Description: <?php echo $package['packageDescription']; ?><br>
            Category: <?php echo $package['packageCatagory']; ?><br>
            Price: <?php echo $package['packagePrice']; ?> tk<br>
            </div>
    <?php } ?>
</div>
<h1>Book for Events</h1>
<div class="room-con">
<?php for($i=0; $i<count($event); $i++){?>
<div class="room-it"style="text-align: left;">
<img src="<?php echo $event[$i]['eventPic'] ?>"  id="room-picture">
                Name:<?php echo $event[$i]['eventName']; ?><br>
                Capacity:<?php echo $event[$i]['eventCapacity']; ?><br>
                Food:<?php echo$event[$i]['eventFood'] ?><br>
               
                Price:<?php echo $event[$i]['eventPrice']; ?> tk<br>
                </div>
    <?php } ?>
</div>
<h1>Facilities</h1>  
<div class="room-con">
<?php for($i=0; $i<count($facility); $i++){?>
<div class="room-it"style="text-align: left;">
<img src="<?php echo $facility[$i]['proPic'] ?>"  id="facility-picture">
                Name:<?php echo $facility[$i]['facilityName']; ?><br>
                 <?php echo$facility[$i]['facilityDescription'] ?><br>
                Catagory:<?php echo $facility[$i]['facilityCatagory']; ?><br>
                Price:<?php echo $facility[$i]['Fprice']; ?> tk<br>
                </div>
    <?php } ?>
</div>
<div class="rating-container" align="center">
        <h2>Rate this Hotel</h2>
        <div class="stars">
            <span data-value="1">&#9733;</span>
            <span data-value="2">&#9733;</span>
            <span data-value="3">&#9733;</span>
            <span data-value="4">&#9733;</span>
            <span data-value="5">&#9733;</span>
        </div>
        <input type="hidden" id="rating-value" value="">
        <div align="center">
            <textarea id="review-text" placeholder="Write your review here..." rows="4" cols="50"></textarea>
        </div>
        <button id="submit-rating">Submit Rating</button>
        <div id="rating-response"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.stars span');
            const ratingValue = document.getElementById('rating-value');
            const reviewText = document.getElementById('review-text');
            const submitButton = document.getElementById('submit-rating');
            const ratingResponse = document.getElementById('rating-response');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    ratingValue.value = this.getAttribute('data-value');
                    stars.forEach(s => s.classList.remove('selected'));
                    this.classList.add('selected');
                    let prev = this.previousElementSibling;
                    while (prev) {
                        prev.classList.add('selected');
                        prev = prev.previousElementSibling;
                    }
                });
            });
        
            submitButton.addEventListener('click', function() {
                const rating = ratingValue.value;
                const review = reviewText.value.trim();
                if (!rating) {
                    ratingResponse.textContent = 'Please select a rating.';
                    return;
                }
                
                fetch('../Controller/RatingCheck.php', {  
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `rating=${rating}&review=${encodeURIComponent(review)}`
                })
                .then(response => response.text())
                .then(data => {
                    ratingResponse.textContent = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>
    
    </div>
    <div class="about-container">
    <h2>About Us</h2>
    <p>We are a company that provides hotel booking services. We have a wide range of rooms and facilities to choose from. Our mission is to provide the best hotel booking experience to our customers.</p>
    <h2>Contact Us</h2>
    <p>If you have any questions or concerns, feel free to contact us using the form below.</p>
    <form action="../Controller/contactCheck.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea>

        <input type="submit" id="b7" value="Submit">
    </form>
</div>
        </div>
        
                
          
               
</body>
</html>