<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$facilityId=$_REQUEST ['facilityId'];
?>


<html>
<head>
    <title>Room Management Form</title>
</head>
<body style="text-align: center;">
     
    <h3><U>Delete Facility</U></h3>
        <form method="post" action="../Controller/FacilityDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" >

                <tr><td>Are you sure want to delete this ID?</td></tr>

                    <tr>
                        <td>Facility Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="facilityId"value="<?= $facilityId ?>"/>
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
           
        </form>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="FacilityView.php">Back</a></div>
</body>
</html>
