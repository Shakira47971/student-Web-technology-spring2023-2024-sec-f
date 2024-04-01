
<?php



require_once('../Model/Empadmin.php');

$empUser = isset($_REQUEST['empUser']) ? $_REQUEST['empUser'] : '';
$emp=Searchemp($empUser);
    



    ?>

<html>
<head>
    <title> View Room</title>
</head>
<body style="text-align: center;">

    <h3><U>View Search Employee Details</U></h3>
            
                
                <table border=1  cellspacing=0 align="center">
            <tr>
               
                <td>Employee Name</td>
                <td>User Name</td>
                 <td>Contact</td>
                <td> Password</td>
                
                
            </tr>
            <?php for($i=0; $i<count($emp); $i++){?>
            <tr>
                
                <td><?=$emp[$i]['empName'] ?></td>
                <td><?php echo $emp[$i]['empUser']; ?></td>
                <td><?php echo $emp[$i]['contact']; ?></td>
                <td><?php echo $emp[$i]['password']; ?></td>
                
                </tr>
            <?php } ?>
        </table>
        
        </body>
        </html>
