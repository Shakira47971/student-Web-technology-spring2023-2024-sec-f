<?php
$servername = "localhost"; 
$Username = "root"; 
$Password = ""; 
$database = "guest"; 
function dbconnection(){
    global $servername;
    global $Username;
    global $Password;
    global $database;
    $conn = new mysqli($servername, $Username, $Password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}


?>
