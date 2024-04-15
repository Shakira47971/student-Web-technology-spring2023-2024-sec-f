<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$GuestId = isset($_REQUEST['guestd']) ? $_REQUEST['guestId'] : '';
?>

<html>
<head>
    <title>Room Management Form</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">
    <div style="text-align: center;">
    <h3 id="b1"><U>Delete Customer Details</U></h3>
        <form method="post" action="../Controller/CustomerDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" class="c4">
                <tr ><td>Are you sure want to delete this ID?</td></tr>
                    <tr class="c3">
                        <td>Guest Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="guestId" value="<?= $GuestId ?>"/>
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
                <div style="padding: 7px;"><b> <a id="b5"  href="CustomerView.php">Back</a></b></div>
        </form>
    </div>
</body>
</html>
