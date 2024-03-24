<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


?>
<html >
<head>
    
    <title>Staff Management</title>
</head>
<body>
<div style="text-align: center;">
<h3><U>Staff Details</U></h3>
<form method="post" action="../Controller/staffAddCheck.php" enctype="">
        <table align="center" cellspacing="0">
        <tr>
                <td> Staff Id:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="staffId">
                        
                    </div>
                    <td> Enter 2 digit unique id</td>
                </td>
            </tr> 
            <tr>
                <td> Staff Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="staffName">
                        
                    </div>
                    <td> Enter your full name</td>
                </td>
            </tr> 
            <tr>
                <td>Email:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="email">
                        
                    </div>
                    <td>Enter valid email</td>
                </td>
            </tr> 
            <tr>
                <td>Department:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="department">
                        <option value="">Select</option>
                            <option value="Housekeeping">Housekeeping</option>
                            <option value="Food">Food</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Security">Security</option>
                            <option value="Human Resource">Human Resource</option>
                        </select>
                    </div>
                </td> 
            </tr>
            <tr>
                <td>Contact:</td>    
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="contact">
                    </div>
                </td>
                <td>Enter valid contact</td>
            </tr>
            <tr>
                <td>Salary:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="Number" name="salary">
                        <td>Enter Salary more than 3000</td>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Account Status:</td>
                <td>
                    <div style="padding: 3px;">
                    <select name="accountStatus">
                    <option value="">Select</option>
                            <option value="active">Active</option>
                            <option value="busy">Busy</option>
                            <option value="inactive">In Active</option>
                    </div>
                </td>
            </tr>

            

       
   
    <tr>
        <td colspan="2" style="text-align: center;"><div style="padding: 3px;">    
        <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="StaffView.php">View</a>
               
            <button type="submit">Add</button>
           
           
            <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="staffUploadFile.php">Picture</a>
              
            
                <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityAdmin.php">Next</a>
        <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="RoomAdmin.php">Back</a>
                
</div>  </td>
    </tr>

</table>

</body>
</html>
