<?php


if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html>
<head>
    <title>Facilities Form</title>
    <link rel="stylesheet" href="bookingStyle.css"/>
</head>
<body id="b8">
<table align="center"  cellspacing="0" >
    <tr>
        <td>
    <h2 id="b5">Select Facilities</h2>
    <form method="post" action="../View/SelectedFacilities.php">
             
 
        <section id="facilities">
            <ul class="c4">
                <li><input type="checkbox"  name="facilities[]" value="Swimming Pool">
                <label for="swimming_pool">Swimming Pool</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Gym">
                <label for="gym">Gym</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Spa">
                <label for="spa">Spa</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Extra beds">
                <label for="extra_beds">Extra beds</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Wi-Fi">
                <label for="wifi">Wi-Fi</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Tv">
                <label for="tv">Tv</label></li>
                <li><input type="checkbox" name="facilities[]" value="Restaurant">
                <label for="restaurant">Restaurant</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Conference Rooms">
                <label for="conference_rooms">Conference Rooms</label></li>
                <li><input type="checkbox"  name="facilities[]" value="Parking Area">
                <label for="parking_area">Parking Area</label></li>
            </ul>
        </section>
        <button type="submit" id="b3">Submit</button>
        <div style="padding: 7px;"> <a id="b4" href="BookingCustomer.php">Back</a></div>
        <div style="padding: 7px;"> <a id="b4" href="SelectedFacilities.php">Next</a></div> 
    </form>
</td>
</tr>
</table>

</body>
</html>
