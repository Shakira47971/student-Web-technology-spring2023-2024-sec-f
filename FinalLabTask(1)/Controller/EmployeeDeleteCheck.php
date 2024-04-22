
<?php
require_once('../Model/Empadmin.php');
$empUser=$_REQUEST ['empUser'];
if (empty($empUser)) {
    echo "Error: User Name is empty.";
} else {
    $status=Delete($empUser);
    if($status){
       
    header('location:../View/EmployeeView.php');
    }else{
        echo"DB error!";
    }
}

?>
