<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$GuestId=$_REQUEST ['guestId'];
?>

<html>
<head>
    <title>Room Management Form</title>
</head>
<body>
    <div style="text-align: center;">
    <h3><U>Delete Customer Details</U></h3>
        <form method="post" action="../Controller/CustomerDeleteCheck.php" enctype="">
            
                
                <table align="center"  cellspacing="0" >
                <tr><td>Are you sure want to delete this ID?</td></tr>
                    <tr>
                        <td>Guest Id:</td>
                        <td>
                            <div style="padding: 3px;">
                                <input type="text" name="guestId" value="<?= $GuestId ?>"/>
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
                <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="CustomerView.php">Back</a></div>
        </form>
    </div>
</body>
</html>
