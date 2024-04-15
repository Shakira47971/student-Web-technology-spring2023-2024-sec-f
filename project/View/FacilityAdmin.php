<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html >
<head>
    
    <title>Facility Management</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

        <h3 id="b1"><u>Facility Details</u></h3>
        <form method="get" action=" ../Controller/FacilityAddCheck.php">
        <table align ="center" class="c1">

<tr class="c2">
  <td>Facility Id:</td>
  <td><input type="number"  name="facilityId"></td>
  <td>Enter at least 3 digit unique Id</td>
</tr>
<tr class="c2">
  <td>Facility Name:</td>
  
  <td>
  <div style="padding: 3px;">
      <input type="text"  name="facilityName">
        </div>
        </td>
  <td>Enter unique name contains at least 2 characters</td> 
</tr>
<tr class="c2">
  <td>Facility Description:</td>
  <td>
  <div style="padding: 3px;">
      <textarea  name="facilityDescription" rows="4" cols="50"></textarea>
  </div>
  <td>Enter unique   description in more than 10 characters</td> 
  </td>
</tr>
<tr class="c2">
  <td>Facility Catagory:</td>
  <td>
  <div style="padding: 3px;">
      <select  name="facilityCatagory">
      <option value="">Select</option>
      <option value="Accommodation">Accommodation</option>
                <option value="Recreation">Recreation</option>
                <option value="Dining">Dining</option>
                <option value="Business">Business</option>
                <option value="Others">Others</option>
          
      </select>
    </div>
  </td>
</tr>
</table>
  
            <tr class="c2">
            <td colspan="2"  style="text-align: center;">
            
                            <div style="padding: 3px;">
                           <b> <a id="b5" href="FacilityView.php">View</a>
                               <button type="submit"id="b7">Add</button>
                               <a id="b5"href="FacilityFile.php">Picture</a>
                            <a id="b5" href="StaffView.php">Back</a></div></b>
                        </td>
</tr>


        </form>

       
   
</body>
</html>

