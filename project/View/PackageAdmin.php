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

        <h3 id="b1"><u>Package Details</u></h3>
        <form method="get" action="../Controller/PackageAddCheck.php">
        <table align ="center" class="c1">

                                  <tr class="c2">
                                    <td>Package Id:</td>
                                    <td><input type="Name" id="packageId" name="packageId"></td>
                                    <td>Enter at least 3 digit unique Id</td>
                                </tr>
                                <tr class="c2">
                                    <td>Package Name:</td>
                                    
                                    <td>
                                    <div style="padding: 3px;">
                                        <input type="text" id="packageName" name="packageName">
                                        <td>Enter  digit unique name contains atleast 5 character</td>
                                          </div>
                                    </td>
                                </tr>
                                <tr class="c2">
                                    <td>Package Description:</td>
                                    <td>
                                    <div style="padding: 3px;">
                                        <textarea id="packageDescription" name="packageDescription" rows="4" cols="50"></textarea>
                                        <td>Describe  uniquely more than 20 characters</td>
                                    </div>
                                    </td>
                                </tr>
                                <tr class="c2">
                                    <td>Package Catagory:</td>
                                    <td>
                                    <div style="padding: 3px;">
                                        <select id="packageCatagory" name="packageCatagory">
                                        <option value="">Select</option>
                                            <option value="Single package">Single package</option>
                                            <option value="Couple package">Couple package</option>
                                            <option value="Family package">Family package</option>
                                            <option value="Accommodation Packages">Accommodation Packages</option>
                                            <option value="Activity Packages">Activity Packages</option>
                                            <option value="Special Occasion Packages">Special Occasion Packages</option>
                                            <option value="Seasonal Packages">Seasonal Packages</option>
                                            <option value="Business Packages">Business Packages</option>
                                            <option value="Exclusive Packages">Exclusive Packages</option>
                                            <option value="Customizable Packages">Customizable Packages</option>
                                        </select>
                                      </div>
                                    </td>
                                </tr>
                                <tr class="c2">
                                    <td>Price:</td>
                                    <td>
                                    <div style="padding: 3px;">
                                        <input type="number" id="packagePrice" name="packagePrice" >
                                        <td>Enter  valid price more than 1000 Tk</td>
                                       </div>
                                     
                                    </td>
                                </tr>
                                </table>
                                
                                
                              
                           
                            <div style="padding: 5px;">
                           <b> <a id="b5" href="PackageView.php">View</a></b>
                           <tr >
                                    <td colspan="2"style="text-align: center;" >
                                    <b> <button type="submit" id="b7">Add</button></b>     
                               
                           <b> <a id="b5" href="FacilityView.php">Back</a></div></b>
                       
                           </td></tr> 

        </form>


   
</body>
</html>
