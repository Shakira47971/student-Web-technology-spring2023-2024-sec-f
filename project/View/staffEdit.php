<?php
 session_start();
 $staff = $_SESSION['staff'];
 
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
require_once('../Model/staffadmin.php');
$staffId = isset($_GET['staffId']) ? $_GET['staffId'] : '';
   
    
  $StaffEdit=staffEdit($staffId);
   
   
    
    
 
?>
 

<html>
<head>
    <title>Edit Room</title>
    <link rel="stylesheet" href="adminStyle.css"/>

</head>
<body id="b8">

    <h3 id="b1"><u>Edit Staff Details</u></h3>
    <br>
    <form method="post" action="../Controller/staffEditCheck.php">
        <table align="center" class="c4">
        <?php for($i=0; $i<count($StaffEdit); $i++){?>
            <tr class="c3">
            <td> Staff Id:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="staffId" value="<?php echo $StaffEdit[$i]['staffId']; ?>"/>
                        
                    </div>
                </td>
            </tr> 
            <tr class="c3">
                <td> Staff Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="staffName" value="<?php echo $StaffEdit[$i]['staffName']; ?>"/>
                        
                    </div>
                </td>
            </tr> 
            <tr class="c3">
                <td>Email:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="email"value="<?php echo $StaffEdit[$i]['email']; ?>"/>
                        
                    </div>
                </td>
            </tr> 
            <tr class="c3">
                <td>Department:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="department">
                            <option value="Housekeeping"<?php if ($StaffEdit[$i]['department'] == 'Housekeeping') echo 'selected="selected"'; ?>>Housekeeping</option>
                            <option value="Food"<?php if ($StaffEdit[$i]['department'] == 'Food') echo 'selected="selected"'; ?>>Food</option>
                            <option value="Accounting"<?php if ($StaffEdit[$i]['department'] == 'Accounting') echo 'selected="selected"'; ?>>Accounting</option>
                            <option value="Security"<?php if ($StaffEdit[$i]['department'] == 'Security') echo 'selected="selected"'; ?>>Security</option>
                            <option value="Human Resource"<?php if ($StaffEdit[$i]['department'] == 'Human Resource') echo 'selected="selected"'; ?>>Human Resource</option>
                        </select>
                    </div>
                </td> 
            </tr>
            <tr class="c3">
                <td>Contact:</td>    
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="contact" value="<?php echo $StaffEdit[$i]['contact']; ?>"/>
                    </div>
                </td>
            </tr>
            <tr class="c3">
                <td>Salary:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="number" name="salary"value="<?php echo $StaffEdit[$i]['salary']; ?>"/>
                    </div>
                </td>
            </tr>
            <tr class="c3">
                <td>Account Status:</td>
                <td>
                    <div style="padding: 3px;">
                        <select name="accountStatus">
                            <option value="active"<?php if ($StaffEdit[$i]['accountStatus'] == 'active') echo 'selected="selected"'; ?>>Active</option>
                            <option value="busy"<?php if ($StaffEdit[$i]['accountStatus'] == 'busy') echo 'selected="selected"'; ?>>Busy</option>
                            <option value="inactive"<?php if ($StaffEdit[$i]['accountStatus'] == 'inactive') echo 'selected="selected"'; ?>>In Active</option>
                        </select>
                    </div>
                </td>
            </tr>
    <tr class="c3">
        <td colspan="2" style="text-align: center;">
            <div style="padding: 5px;">
                <button id="b7">Update</button>
                </div>
        </td>
    </tr>
                </table> 

                 <a id="b5" href="StaffView.php">Back</a>  
            
    <?php } ?>


    
</form>

</body>
</html>