<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}


?>
<html >
<head>
    
    <title>Staff Management</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

<h3 id="b1"><U>Staff Details</U></h3>
<form method="post" action="../Controller/staffAddCheck.php" enctype="">
        <table align="center" class="c1">
        <tr class="c2">
                <td> Staff Id:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="staffId">
                        
                    </div>
                    <td> Enter 2 digit unique id</td>
                </td>
            </tr> 
            <tr class="c2">
                <td> Staff Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="staffName">
                        
                    </div>
                    <td> Enter your full name</td>
                </td>
            </tr> 
            <tr class="c2">
                <td>Email:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="email">
                        
                    </div>
                    <td>Enter valid email</td>
                </td>
            </tr> 
            <tr class="c2">
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
            <tr class="c2">
                <td>Contact:</td>    
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="contact">
                    </div>
                </td>
                <td>Enter valid contact</td>
            </tr>
            <tr class="c2">
                <td>Salary:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="Number" name="salary">
                        <td>Enter Salary more than 3000</td>
                    </div>
                </td>
            </tr>
            <tr class="c2">
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

            
            </table>
       
   
    <tr >
        <td colspan="2" style="text-align: center;"><div style="padding: 3px;">    
       <b> <a id="b5" href="StaffView.php">View</a>
               
            <button type="submit" id="b7">Add</button>
           
           
            <a id="b5"href="staffUploadFile.php">Picture</a>
              
            
                <a id="b5" href="FacilityAdmin.php">Next</a>
        <a id="b5" href="RoomAdmin.php">Back</a></b>
                
</div>  </td>
    </tr>



</body>
</html>
