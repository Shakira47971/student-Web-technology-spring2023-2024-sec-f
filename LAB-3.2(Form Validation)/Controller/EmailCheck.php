
<?php

$email = $_REQUEST['Email'];

if ($email == "") {
    echo "Email Address Cannot be Empty";
} else {
    $isValid = true;
    $atPos = strpos($email, "@");

    if ($atPos === false || $atPos === 0 || $atPos === strlen($email) - 1) {
        $isValid = false;
        echo "Email must contain '@' symbol not at the beginning or end.";
    } 

    if ($isValid) {
        echo "Valid Email Address";
    }
}
?>
