<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
?>
<html >
<head>
    
    <title>Facility Management</title>
</head>
<body style="text-align: center;">

        <h3><u>Facility Details</u></h3>
        <form method="get" action=" ../Controller/FacilityAddCheck.php">
        <table align ="center">

<tr>
  <td>Facility Id:</td>
  <td><input type="number"  name="facilityId"></td>
  <td>Enter at least 3 digit unique Id</td>
</tr>
<tr>
  <td>Facility Name:</td>
  
  <td>
  <div style="padding: 3px;">
      <input type="text"  name="facilityName">
        </div>
        </td>
  <td>Enter unique name contains at least 2 characters</td> 
</tr>
<tr>
  <td>Facility Description:</td>
  <td>
  <div style="padding: 3px;">
      <textarea  name="facilityDescription" rows="4" cols="50"></textarea>
  </div>
  <td>Enter unique   description in more than 10 characters</td> 
  </td>
</tr>
<tr>
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

  
            <tr>
            <td colspan="2"  style="text-align: center;">
            
                            <div style="padding: 3px;">
                            <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityView.php">View</a>
                               <button type="submit">Add</button>
                               <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityFile.php">Picture</a>
                            <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="StaffView.php">Back</a></div>
                        </td>
</tr>
</table>

        </form>

       
   
</body>
</html>

