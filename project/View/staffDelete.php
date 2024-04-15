<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$staffId = isset($_GET['staffId']) ? $_GET['staffId'] : '';
?>

<html>
<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">
    
    <h3 id="b1"><U>Delete Staff</U></h3>
        <form method="post" action="../Controller/staffDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" class="c4">
                <tr><td>Are you sure want to delete this ID?</td></tr>
                    <tr class="c3">
                        <td>Staff Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="staffId" value="<?= $staffId ?>"/>
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
                <div style="padding: 7px;"><b> <a id="b5" href="StaffView.php">Back</a></b></div>
        </form>
    </div>
</body>
</html>
