<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Contact Us</title>

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
        
        .rating-title {
            font-size: 1.2rem;
            color: #2c2c2c;
            margin-bottom: 0.5rem;
            font-weight: 500;
            text-align: center;
        }
        
        .rating-description {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .icon-display {
            color: #ff4d6d;
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        h1 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            color: #2c2c2c;
            margin-left: 8rem;
            margin-bottom: 2rem;
            font-size: 2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
        }
        
        .container {
            padding: 1.5rem;
            margin-top: 2rem;
        }

        a {
            text-decoration: none;
            color: #666;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ff4d6d;
        }
    </style>
</head>
<body>
    @include('atoms.Navigation')
    @yield('Navigation')

    <div class="container" style="background-color: white; margin-top: 5rem;">
        <h1>Contact Us</h1>
        
        <div class="review-cards">
            <div class="review-option">
                <div class="rating-title">Email</div>
                <div class="icon-display">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="rating-description">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=v.rajime.v@gmail.com" 
                       target="_blank">
                        v.rajime.v@gmail.com
                    </a>
                </div>
            </div>

            <div class="review-option">
                <div class="rating-title">Call/Message</div>
                <div class="icon-display">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="rating-description">
                    <a href="tel:+639778279200">
                        +63 (977) 827-9200
                    </a>
                </div>
            </div>

            <div class="review-option">
                <div class="rating-title">Follow Us</div>
                <div class="icon-display">
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="rating-description">
                    <a href="https://facebook.com/yourpage" 
                       target="_blank">
                        Visit our Facebook Page
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>