<?php

require_once('../Model/foodadmin.php');

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // AJAX request handler
    if (isset($_POST['foodId'])) {
        $foodId = $_POST['foodId'];
        $response = [];

        // Check if foodId is unique
        $taken = uniId($foodId);
        if ($taken) {
            $response['foodId'] = "This Id is already taken";
        } else {
            $response['foodId'] = "valid";
        }
        echo json_encode($response);
    } else {
        echo json_encode(["message" => "Invalid request"]);
        exit;
    }
} else {
   
    function CheckPrice($price)
    {
        if ($price == "") {
            echo "Price cannot be empty.";
            return false;
        }
        if ($price > 0 && $price >100) {
            return true;
        } else {
            echo "Price must be greater than 0 and less than or equal to 100.";
            return false;
        }
    }

    // Function to check food Id
    function CheckId($foodId)
    {
        if ($foodId == "") {
            echo " Food Id cannot be empty ";
            return false;
        } else {
            $taken = uniId($foodId);
            if ($taken) {
                echo "This Id is already taken";
                return false;
            } elseif (strlen($foodId) !== 2 || !is_numeric($foodId) || intval($foodId) <= 0) {
                echo "food Id must be 2 characters long and greater than 0";
                return false;
            } else {
                return true;
            }
        }
    }

    // Function to check food description
    function CheckDescription($foodDescription)
    {
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

    // Function to validate file name
    function validateFilename()
    {
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

  
    if (isset($_POST['foodId'], $_POST['foodDescription'], $_POST['price'], $_FILES['proPic']['name'])) {
        $foodId = $_POST['foodId'];
        $foodDescription = $_POST['foodDescription'];
        $price = $_POST['price'];
        $target_file = $_FILES['proPic']['tmp_name'];
        $des = "../Assets/" . $_FILES['proPic']['name'];
        if (CheckId($foodId) && CheckDescription($foodDescription) && CheckPrice($price) && validateFilename()) {
            if (move_uploaded_file($target_file, $des)) {
                $user = [
                    'foodId' => $foodId,
                    'foodDescription' => $foodDescription,
                    'price' => $price,
                    'proPic' => $des
                ];
                $status = fAdd($user);
                if ($status) {
                    header('location: ../View/FoodView.php');
                    exit();
                } else {
                    echo "Database error! Unable to add food item.";
                }
            } else {
                echo "Error uploading file.";
            }
        }
    }
}
?>
