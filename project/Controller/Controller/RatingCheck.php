<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['rating'])) {
        $rating = intval($_POST['rating']);
        if ($rating < 1 || $rating > 5) {
            echo 'Invalid rating value.';
            exit;
        }

       

        echo 'Thank you for your rating of ' . $rating . ' stars!';
    } else {
        echo 'Rating value is missing.';
    }
} else {
    echo 'Invalid request method.';
}
?>
