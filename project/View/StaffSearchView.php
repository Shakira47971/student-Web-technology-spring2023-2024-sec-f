<?php

if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

require_once('../Model/staffadmin.php');

$staffId = isset($_REQUEST['staffId']) ? $_REQUEST['staffId'] : '';
$staff=SearchStaff($staffId);
    



    ?>

<html>
<head>
    <title> View Room</title>
    <link rel="stylesheet" href="adminStyle.css"/>
</head>
<body id="b8">

    <h3 id="b1"><U>View Search Staff Details</U></h3>
            
                
                <table border=1  cellspacing=0 align="center" class="c4">
            <tr class="c3">
                <td>Staff Id</td>
                <td>Staff Name</td>
                <td>Email</td>
                <td>Department</td>
                <td>Contact</td>
                <td> Salary</td>
                <td> Account Status</td>
                
            </tr>
            <?php for($i=0; $i<count($staff); $i++){?>
            <tr>
                <td><?php echo $staff[$i]['staffId']; ?></td>
                <td><?=$staff[$i]['staffName'] ?></td>
                <td><?php echo $staff[$i]['email']; ?></td>
                <td><?php echo $staff[$i]['department']; ?></td>
                <td><?php echo $staff[$i]['contact']; ?></td>
                <td><?php echo $staff[$i]['salary']; ?></td>
                <td><?php echo $staff[$i]['accountStatus']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a id="b5" href="StaffAdmin.php">Back</a></div>
        <div style="padding: 7px;"> <a id="b5" href="StaffView.php">Next</a></div>
        
        </body>
        </html>