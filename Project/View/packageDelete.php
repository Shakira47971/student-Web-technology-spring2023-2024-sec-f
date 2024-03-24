<?php
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$packageId=$_REQUEST ['packageId'];

?>
<html>
<head>
    <title>Room Management Form</title>
</head>
<body>
    <div style="text-align: center;">
    <h3><U>Delete Package</U></h3>
        <form method="post" action="PackageViewCustomer.php" enctype="">
            
                
                <table align="center"  cellspacing="0" >
               <tr> <td>Are you sure want to delete this ID?</td></tr>
                    <tr>
                        <td>Package Id:</td>
                        <td>
                            
                                <input type="text" name="packageId"value="<?= $packageId ?>"/>
                           
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
                <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="PackageView.php">Back</a></div>
        </form>
    </div>
</body>
</html>
