<?php

require_once('../Model/transportadmin.php');

function CheckCapacity($capacity) {
    if ($capacity == "") {
        echo "Capacity cannot be empty.";
        return false;
    } elseif (is_numeric($capacity) && intval($capacity) == $capacity && $capacity > 0 && $capacity < 51) {
        return true;
    } else {
        echo "Capacity must be a positive integer between 1 and 50.";
        return false;
    }
}

function CheckPrice($price) {
    if ($price == "") {
        echo "Price cannot be empty.";
        return false;
    } elseif ($price > 0 && $price > 2000 && $price < 50000) {
        return true;
    } else {
        echo "Price must be greater than 0, greater than 2000, and less than 50,000.";
        return false;
    }
}

function transportTypeCheck($transportType) {
    if ($transportType == "") {
        echo "Transport type cannot be empty.";
        return false;
    } elseif ($transportType == "private" || $transportType == "micro" || $transportType == "bus") {
        return true;
    } else {
        echo "Please select a valid transport type.";
        return false;
    }
}

function StatusCheck($status) {
    if ($status == "") {
        echo "Status cannot be empty.";
        return false;
    } elseif ($status == "available" || $status == "booked") {
        return true;
    } else {
        echo "Please select a valid status.";
        return false;
    }
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

if (isset($_POST['transportId'], $_POST['transportType'], $_POST['location'], $_POST['capacity'], $_POST['price'], $_POST['transportStatus'], $_FILES['proPic']['name'])) {
    $transportId = $_POST['transportId'];
    $transportType = $_POST['transportType'];
    $location = $_POST['location'];
    $capacity = $_POST['capacity'];
    $price = $_POST['price'];
    $status = $_POST['transportStatus'];
    $target_file = $_FILES['proPic']['tmp_name'];
    $des = "../Assets/" . $_FILES['proPic']['name'];

    if (transportTypeCheck($transportType) && CheckCapacity($capacity) && CheckPrice($price) && StatusCheck($status) && validateFilename()) {
        if (move_uploaded_file($target_file, $des)) {
            $status = Edit($transportId,  $location,$transportType, $capacity, $price, $des);
            if ($status) {
                header('location:../View/TransportView.php');
                exit();
            } else {
                echo "Database error! Unable to edit transport.";
            }
        } else {
            echo "Error uploading file.";
        }
    }
} else {
    echo "Error: Some fields are empty. Please fill all fields.";
}




?>
