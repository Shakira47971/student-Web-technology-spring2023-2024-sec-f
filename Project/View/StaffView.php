<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

require_once('../Model/staffadmin.php');

$staffId = isset($_REQUEST['staffId']) ? $_REQUEST['staffId'] : '';
$staff=SearchStaff($staffId);
    
$staff=viewStaff();
$_SESSION['staff'] = $staff;

    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View  Staff Details</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
                <td>Staff Id</td>
                <td>Staff Name</td>
                <td>Email</td>
                <td>Department</td>
                <td>Contact</td>
                <td> Salary</td>
                <td> Account Status</td>
                <td>Action</td>
                <td>Action</td>
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
                
               <td> <a href="staffEdit.php?staffId=<?=$staff[$i]['staffId']?>"> Edit </a></td> 
               <td> <a href="staffDelete.php?staffId=<?=$staff[$i]['staffId']?>"> Delete </a></td> 
               
            </tr>
            <?php } ?>
        </table>
        <div style="padding: 7px;"> <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="StaffAdmin.php">Back</a>
        <a style="color:rgb(0, 102, 255);margin-top: 10px; padding:10px;" href="StaffSearch.php">Next</a></div>
        </body>
        </html>
        