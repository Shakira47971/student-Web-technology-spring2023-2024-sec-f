<?php
session_start();

if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
    exit();
}

require_once('../Model/foodadmin.php');

function CheckPrice($price) { 
    if ($price == "") {
        echo "Price cannot be empty.";
        return false;
    }
    if ($price > 0 && $price > 100) { 
        return true;
    } else {
        echo "Price must be greater than 0 and less than  100.";
        return false;
    }
}

function CheckDescription($foodDescription) {
    if ($foodDescription == "") {
        echo "Food Description cannot be empty.";
        return false;
    }
    if (strlen($foodDescription) < 5 || strlen($foodDescription) > 1000) {
        echo "Food Description must be 5 to 1000 characters long.";
        return false;
    }
    return true;
}

function validateFilename() {
    if (!isset($_FILES['proPic']) || $_FILES['proPic']['error'] == UPLOAD_ERR_NO_FILE) {
        echo "Please select a picture.";
        return false;
    }
    $fileName = $_FILES['proPic']['name'];
    if (empty($fileName)) {
        echo "Please select a picture.";
        return false;
    }
    return true;
}

if (isset($_POST['foodId'],$_POST['foodDescription'], $_POST['price'], $_FILES['proPic']['name'])) {
    $foodId = $_POST['foodId'];
    $foodDescription = $_POST['foodDescription'];
    $price = $_POST['price'];
    $target_file = $_FILES['proPic']['tmp_name'];
    $des = "../Assets/" . $_FILES['proPic']['name'];

    if (CheckDescription($foodDescription) && CheckPrice($price) && validateFilename()) {
        if (move_uploaded_file($target_file, $des)) {
            $status=editFood($foodId,$foodDescription, $price, $des);
            if($status){
               
            header('location:../View/FoodView.php');
            exit();
        } else {
            echo "Database error! Unable to add facility.";
        }
    } else {
        echo "Error uploading file.";
    }
    }
    } else {
    echo "Some fields are empty. Please fill all fields.";
    }
    
?>
