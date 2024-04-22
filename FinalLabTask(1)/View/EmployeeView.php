<?php
session_start();


require_once('../Model/Empadmin.php');

$empUser = isset($_REQUEST['empUser']) ? $_REQUEST['empUser'] : '';
$emp=Searchemp($empUser);
    
$emp=viewEmployee();
$_SESSION['emp'] = $emp;

    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View  Employee Details</U></h3>


<table border=1  cellspacing=0 align="center">
            <tr>
                
                <td>Staff Name</td>
                <td>User Name</td>
               
                <td>Contact</td>
                <td> Password</td>
               
                <td>Action</td>
                <td>Action</td>
            </tr>
            <?php for($i=0; $i<count($emp); $i++){?>
            <tr>
               
                <td><?=$emp[$i]['empName'] ?></td>
                <td><?php echo $emp[$i]['empUser']; ?></td>
               
                <td><?php echo $emp[$i]['contact']; ?></td>
                <td><?php echo $emp[$i]['password']; ?></td>
                
               <td> <a href="EmployeeUpdate.php?empUser=<?=$emp[$i]['empUser']?>"> Update</a></td> 
               <td> <a href="EmployeeDelete.php?empUser=<?=$emp[$i]['empUser']?>"> Delete </a></td> 
               
            </tr>
            <?php } ?>
        </table>
        
        </body>
        </html>
        