<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Write a Review</title>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    
    .review-cards {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-bottom: 2rem;
    }
    
    .review-option {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        flex: 1;
        max-width: 350px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    
    .review-option:hover {
        transform: translateY(-5px);
    }
    
    .review-option.selected {
        border: 2px solid #ff4d6d;
    }
    
    .rating-title {
        font-size: 1.2rem;
        color: #2c2c2c;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    .rating-description {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 1rem;
    }
    
    .star-display {
        color: #ff4d6d;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    
    h1 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 500;
        color: #2c2c2c;
        text-align: center;
        margin-bottom: 2rem;
        font-size: 1.5rem;
        letter-spacing: 3px;
        text-transform: uppercase;
    }
    
    .container {
        padding: 1.5rem;
        margin-top: 2rem;
    }
</style>
<body>
    @include('atoms.Navigation')
    @yield('Navigation')

    <div class="container" style="background-color: white; margin-top: 5rem;">
        <h1>How was your experience?</h1>
        
        <div class="review-cards">
            <!-- Negative Review Option -->
            <div class="review-option" onclick="selectRating(1)">
                <div class="rating-title">Not Satisfied</div>
                <div class="star-display">★☆☆</div>
                <div class="rating-description">Did not meet expectations. Share what went wrong.</div>
            </div>

            <!-- Average Review Option -->
            <div class="review-option" onclick="selectRating(3)">
                <div class="rating-title">It was Okay</div>
                <div class="star-display">★★★</div>
                <div class="rating-description">Met basic expectations. Tell us what could be better.</div>
            </div>

            <!-- Positive Review Option -->
            <div class="review-option" onclick="selectRating(5)">
                <div class="rating-title">Very Satisfied</div>
                <div class="star-display">★★★★★</div>
                <div class="rating-description">Exceeded expectations. Share your great experience!</div>
            </div>
        </div>

</body>
</html>