<?php
 session_start();
 $Emp = $_SESSION['emp'];
 
require_once('../Model/Empadmin.php');
$empUser = isset($_GET['empUser']) ? $_GET['empUser'] : '';
   
    
  $empEdit=empEdit($empUser);
   
   
    
    
 
?>
 

<html>
<head>
    <title>Edit Room</title>
</head>
<body style="text-align: center;">

    <h3><u>Employeee Update Details</u></h3>
    <br>
    <form method="post" action="../Controller/EmployeeUpdateCheck.php">
        <table align="center" cellspacing="0">
        <?php for($i=0; $i<count($empEdit); $i++){?>
           
            <tr>
                <td> Employee Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="empName" value="<?php echo $empEdit[$i]['empName']; ?>"/>
                        
                    </div>
                </td>
            </tr> 
            <tr>
                <td>User Name:</td>
                <td>
                    <div style="padding: 3px;"><input type="text" name="empUser"value="<?php echo $empEdit[$i]['empUser']; ?>"/>
                        
                    </div>
                </td>
            </tr> 
           
            <tr>
                <td>Contact:</td>    
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="contact" value="<?php echo $empEdit[$i]['contact']; ?>"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <div style="padding: 3px;">
                        <input type="text" name="password"value="<?php echo $empEdit[$i]['password']; ?>"/>
                    </div>
                </td>
            </tr>
           
    <tr>
        <td colspan="2" style="text-align: center;">
            <div style="padding: 5px;">
                <button>Update</button>
                 <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="EmployeeView.php">Back</a>  
            </div>
        </td>
    </tr>
    <?php } ?>
</table> 

    
</form>

</body>
</html>