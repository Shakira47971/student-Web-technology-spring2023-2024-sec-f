<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html>
<head>
    <title>Facilities Form</title>
    <link rel="stylesheet" href="Customer.css"/>
</head>
<body id="b8">
<fieldset id="b9">
    <h3 id="b1"><u>Click&Stay<u></h3>
    <h4 id="b10">Find your next stay</h4>
    <a id="b4" href="login.php">Back</a>
    <a id="b11" href="SelectedFacilities.php">Next</a>
</fieldset>
<table   cellspacing="0">
    <tr>
    <td>
            <form method="post" action="../View/SelectedFacilities.php">
                <section id="facilities">
                <ul class="c5">
                   
                        <fieldset id="b13"></fieldset>
                       <input type="checkbox"  name="facilities[]" value="Swimming Pool">
                            <label for="swimming_pool">Swimming Pool</label>
                            

                        <fieldset id="b13"></fieldset>
                       <input type="checkbox"  name="facilities[]" value="Gym">
                            <label for="gym">Gym</label>
                            
                       
                        
                        <fieldset id="b13"></fieldset>
                            <input type="checkbox" name="facilities[]" value="Spa">
                            <label for="spa">Spa</label>
                       
                        <fieldset id="b13"></fieldset>
                            <input type="checkbox" name="facilities[]" value="Extra beds">
                            <label for="extra_beds">Extra beds</label>
                        
                        <fieldset id="b13"></fieldset>
                            <input type="checkbox" name="facilities[]" value="Tv">
                            <label for="Tv">Tv</label>
                       
                        <fieldset id="b13"></fieldset>
                            <input type="checkbox" name="facilities[]" value="Resturant">
                            <label for="Resturant">Resturant</label>
                        
                        <fieldset id="b13"></fieldset>
                            <input type="checkbox" name="facilities[]" value="conferenceRoom">
                            <label for="conferenceRoom">Conference Room</label>
                        
                        <fieldset id="b13"></fieldset>
                         <input type="checkbox" name="facilities[]" value="parkingArea">
                            <label for="parkingArea">Parking Area</label>
                            
                       
                    </ul>
                    <button type="submit" id="b3">Submit</button>
                </section>
               
            </form>
           
        </td>
    </tr>
   
</table>
</body>
</html>
