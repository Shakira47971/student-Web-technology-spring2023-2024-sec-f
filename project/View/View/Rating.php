<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Rating</title>
    <link rel="stylesheet" href="Assets/customerStyle.css"/>
    <style>
        .rating-container {
            text-align: center;
            margin: 20px;
        }
        .stars span {
            font-size: 2em;
            cursor: pointer;
        }
        .stars .selected {
            color: gold;
        }
        #rating-response {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>

<body id="b8">
<fieldset id="b9">
<img src="../Assets/logo.png" id="logo-image">
    
    <h3 id="b1"><u>Click&Stay</u></h3>
    
    <h4 id="b10">Find your next stay</h4>
  
</fieldset>

   
    <div class="rating-container">
        <h2>Rate this Hotel</h2>
        <div class="stars">
            <span data-value="1">&#9733;</span>
            <span data-value="2">&#9733;</span>
            <span data-value="3">&#9733;</span>
            <span data-value="4">&#9733;</span>
            <span data-value="5">&#9733;</span>
        </div>
        <input type="hidden" id="rating-value" value="">
        <div>
            <textarea id="review-text" placeholder="Write your review here..." rows="4" cols="50"></textarea>
        </div>
        <button id="submit-rating">Submit Rating</button>
        <div id="rating-response"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.stars span');
            const ratingValue = document.getElementById('rating-value');
            const reviewText = document.getElementById('review-text');
            const submitButton = document.getElementById('submit-rating');
            const ratingResponse = document.getElementById('rating-response');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    ratingValue.value = this.getAttribute('data-value');
                    stars.forEach(s => s.classList.remove('selected'));
                    this.classList.add('selected');
                    let prev = this.previousElementSibling;
                    while (prev) {
                        prev.classList.add('selected');
                        prev = prev.previousElementSibling;
                    }
                });
            });
        
            submitButton.addEventListener('click', function() {
                const rating = ratingValue.value;
                const review = reviewText.value.trim();
                if (!rating) {
                    ratingResponse.textContent = 'Please select a rating.';
                    return;
                }
                if (!review) {
                    ratingResponse.textContent = 'Please write a review.';
                    return;
                }
                
                fetch('../Controller/submit_rating.php', {  
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `rating=${rating}&review=${encodeURIComponent(review)}`
                })
                .then(response => response.text())
                .then(data => {
                    ratingResponse.textContent = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>
</body>
</html>
