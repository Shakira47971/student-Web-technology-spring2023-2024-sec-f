<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['rating']) && isset($_POST['review'])) {
        $rating = intval($_POST['rating']);
        $review = trim($_POST['review']);
        if ($rating < 1 || $rating > 5) {
            echo 'Invalid rating value.';
            exit;
        }

        if (empty($review)) {
            echo 'Review cannot be empty.';
            exit;
        }

       

        echo 'Thank you for your rating of ' . $rating . ' stars and your review: ' . htmlspecialchars($review);
    } else {
        echo 'Rating value or review is missing.';
    }
} else {
    echo 'Invalid request method.';
}
?>
