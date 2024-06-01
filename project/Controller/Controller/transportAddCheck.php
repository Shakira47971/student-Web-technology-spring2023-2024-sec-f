<?php

require_once('../Model/transportadmin.php');

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    if (isset($_POST['transportId'])) {
        $transportId = $_POST['transportId'];
        $response = [];
        $taken = uniId($transportId);
        if ($taken) {
            $response['transportId'] = "This Id is already taken";
        } else {
            $response['transportId'] = "valid";
        }
        echo json_encode($response);
        exit();
    } else {
        echo json_encode(["message" => "Invalid request"]);
        exit();
    }
} else {
    function CheckId($transportId) {
        if ($transportId == "") {
            echo "Transport Id cannot be empty.";
            return false;
        }
        $taken = uniId($transportId);
        if ($taken) {
            echo "This Id is already taken.";
            return false;
        } elseif (strlen($transportId) != 2 || !is_numeric($transportId) || intval($transportId) <= 0) {
            echo "Transport ID must be a 2-digit positive number.";
            return false;
        } else {
            return true;
        }
    }

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

        if (CheckId($transportId) && transportTypeCheck($transportType) && CheckCapacity($capacity) && CheckPrice($price) && StatusCheck($status) && validateFilename()) {
            if (move_uploaded_file($target_file, $des)) {
                $user = [
                    'transportId' => $transportId,
                    
                    'location' => $location,
                    'transportType' => $transportType,
                    'capacity' => $capacity,
                    'price' => $price,
                    'transportStatus' => $status,
                    'proPic' => $des
                ];
                $status = Add($user);

                if ($status) {
                    header('Location: ../View/transportView.php');
                    exit();
                } else {
                    echo "Database error! Unable to add transport.";
                }
            } else {
                echo "Error uploading file.";
            }
        }
    }
}
?>
