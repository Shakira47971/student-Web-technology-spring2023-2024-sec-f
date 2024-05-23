<?php
session_start();
require_once('../Model/payment.php');

// Check if the form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['phone'], $_POST['amount'], $_POST['pin'], $_POST['payment_option'])) {
        $Contact = $_POST['phone'];
        $Amount = $_POST['amount'];
        $Pin = $_POST['pin'];
        $PaymentOption = $_POST['payment_option'];
        
        // Function to check if the phone number is in a valid format
        function validateContact($Contact) {
            if (strlen($Contact) !== 14) {
                echo "Contact must be 14 digits long";
                return false;
            }
            if (!in_array(substr($Contact, 0, 6), array("+88017", "+88019", "+88018", "+88015", "+88016", "+88013"))) {
                echo "Contact must start with +88017, +88019, +88018, +88015, +88016, or +88013";
                return false;
            }
            return true;
        }
        
        // Function to check if the amount is valid
        function validateAmount($Amount) {
            if ($Amount <= 0 || $Amount > 50000) {
                echo "Amount must be a positive value greater than 0 and less than or equal to 50,000";
                return false;
            }
            return true;
        }

        // Function to check if the PIN is valid
        function validatePin($Pin) {
            if (strlen($Pin) !== 8 || !is_numeric($Pin)) {
                echo "PIN must be an 8-digit number";
                return false;
            }
            return true;
        }

        // Function to check if the payment option is selected
        function validatePaymentOption($PaymentOption) {
            if (!in_array($PaymentOption, array("Bikash", "Nogod"))) {
                echo "Please select a valid payment option";
                return false;
            }
            return true;
        }
        
        if (!validateContact($Contact) || !validateAmount($Amount) || !validatePin($Pin) || !validatePaymentOption($PaymentOption)) {
            
            exit;
        }
        
        // If all fields are valid, proceed with adding the payment
        $user = ['amount' => $Amount, 'phone' => $Contact, 'pin' => $Pin, 'payment_option' => $PaymentOption];
        $status = Add($user); // Assuming you have Add function in your payment.php
        
        if ($status) {
            $_SESSION['phone'] = $Contact; 
            $_SESSION['amount'] = $Amount; 
            $_SESSION['payment_option'] = $PaymentOption; // Store payment option in session
            header('location: ../View/paymentView.php');
            exit; // Stop further execution
        } else {
            echo "DB error!";
        }
    } else {
        echo "Error: Some fields are missing.";
    }
} else {
    echo "Error: Invalid request method.";
}
?>
