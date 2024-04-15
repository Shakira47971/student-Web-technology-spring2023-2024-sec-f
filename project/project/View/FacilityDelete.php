<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$facilityId=$_REQUEST ['facilityId'];
?>


<html>
<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">
     
    <h3 id="b1"><U>Delete Facility</U></h3>
        <form method="post" action="../Controller/FacilityDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" class="c4" >

                <tr><td>Are you sure want to delete this ID?</td></tr>

                    <tr class="c3">
                        <td>Facility Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="facilityId"value="<?= $facilityId ?>"/>
                            </div>
                        </td>
                      </tr>
                        <tr class="c3">
                        <td colspan="2" style="text-align: center;">
                        <div style="padding: 3px;">
                            <button type="submit" name="delete" value="delete">Delete</button>
                             </div>
                        </td>
                    </tr> 
                </table> 
           
        </form>
        <div style="padding: 7px;"> <a id="b5" href="FacilityView.php">Back</a></div>
</body>
</html>
