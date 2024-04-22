
<?php


$empUser=$_REQUEST ['empUser'];
?>

<html>
<head>
    <title>Room Management Form</title>
</head>
<body>
    <div style="text-align: center;">
    <h3><U>Delete Employee</U></h3>
        <form method="post" action="../Controller/EmployeeDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" >
                <tr><td>Are you sure want to delete this User?</td></tr>
                    <tr>
                        <td>User Name:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="empUser" value="<?= $empUser ?>"/>
                            </div>
                        </td>
                      </tr>
                        <tr>
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;">
                            <button type="submit" name="delete" value="delete">Delete</button>
                             </div>
                        </td>
                    </tr> 
                </table> 
                <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="EmployeeView.php">Back</a></div>
        </form>
    </div>
</body>
</html>
