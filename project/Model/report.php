<?php
require_once('db.php');

function Add($user){
    $conn = dbconnection();
    $sql = "INSERT INTO report VALUES ('{$user['username']}','{$user['report']}')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
function viewreport (){

    $con = dbConnection();
    $sql = "select * from report ";
    $result = mysqli_query($con, $sql);
    $report = [];
    
    while($row = mysqli_fetch_assoc($result)){
        array_push($report, $row);
    }
return $report;
}

?>