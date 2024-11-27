<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serendipity</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <style> 
        .custom-button {
            background-color: pink !important;
            color: black !important;
            border: 1px solid white !important;
            transition: all 0.3s ease-in-out !important;
        }
        
        .custom-button:hover {
            background-color: #FFB6C1 !important;
            border-color: #FFC0CB !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .btn-sm.custom-button {
            position: relative;
            overflow: hidden;
            padding-right: 35px !important;
            transition: all 0.3s ease !important;
        }

        .btn-sm.custom-button:hover {
            background-color: #FFF0F5 !important;
            box-shadow: 0 0 15px rgba(255, 182, 193, 0.7) !important;
            transform: translateY(-2px);
        }

        .btn-sm.custom-button::after {
            content: '🛍️';
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9rem;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .btn-sm.custom-button:hover::after {
            right: 10px;
            opacity: 1;
        }

    </style>
</head>
<body style="background-color:pink;">
    @include('atoms.Navigation')
    @yield('Navigation')
    <div class="container-fluid py-5" style="background-color: pink; margin-bottom: 10px; border-bottom: 2px solid white; border-top: 2px solid white;" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Discover Serendipity</h1>
                    <p class="lead">Finding wonderful things by chance in the most unexpected places.</p>
                    <a href="#" class="btn btn-primary btn-lg custom-button" id="learnMoreBtn">Learn More</a>
                    <div id="ingredientsSection" style="display: none;">
                        <h3 class="mt-4">Our Ingredients</h3>
                        <ul class="list-group">
                            <li class="list-group-item">Fresh Milk</li>
                            <li class="list-group-item">Dark Chocolate</li>
                            <li class="list-group-item">Vanilla Extract</li>
                            <li class="list-group-item">Premium Flour</li>
                            <li class="list-group-item">Farm Fresh Eggs</li>
                            <li class="list-group-item">Pure Vanilla Extract</li>
                            <li class="list-group-item">Belgian Chocolate</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded-circle" src="{{asset('images/mainpic.jpg')}}" width="400" height="400"
                    style="border: 2px solid white; border-radius: 80%; margin-left: 100px;">
                </div>
            </div>
        </div>
    </div>
    
    <h1 class="text-center" style="margin-top: 40px; font-family: 'Dancing Script', cursive; font-weight: 400; color: white; letter-spacing: 1px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Serendipity's Sweet Recommendation</h1>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center" style="gap: 4rem; margin-left: 50px;">
            <div class="col-md-3">
                <div class="card h-100" style="width: 250px;">
                    <img src="{{asset('images/sambo.jpg')}}" class="card-img-top" alt="Handmade Jewelry" 
                        style="height: 180px; object-fit: cover; border-bottom: 1px solid #dee2e6;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.1rem;">Black Sambo</h5>
                        <p class="card-text" style="font-size: 0.9rem;">basta</p>
                        <p class="card-text"><strong>₱29.99</strong></p>
                        <button class="btn btn-primary btn-sm w-100 custom-button">
                            View more
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100" style="width: 250px;">
                    <img src="{{asset('images/cakeballs.jpg')}}" class="card-img-top" alt="Vintage Accessories" 
                        style="height: 180px; object-fit: cover; border-bottom: 1px solid #dee2e6;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.1rem;">Cake Balls</h5>
                        <p class="card-text" style="font-size: 0.9rem;">bastas</p>
                        <p class="card-text"><strong>₱39.99</strong></p>
                        <button class="btn btn-primary btn-sm w-100 custom-button">
                            View more
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100" style="width: 250px;">
                    <img src="{{asset('images/puto.jpg')}}" class="card-img-top" alt="Artisan Crafts" 
                        style="height: 180px; object-fit: cover; border-bottom: 1px solid #dee2e6;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.1rem;">Puto Cheese</h5>
                        <p class="card-text" style="font-size: 0.9rem;">basta</p>
                        <p class="card-text"><strong>₱49.99</strong></p>
                        <button class="btn btn-primary btn-sm w-100 custom-button">
                           View more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
        document.getElementById('learnMoreBtn').addEventListener('click', function(e) {
            e.preventDefault();
            const ingredientsSection = document.getElementById('ingredientsSection');
            if (ingredientsSection.style.display === 'none') {
                ingredientsSection.style.display = 'block';
                this.textContent = 'Show Less';
            } else {
                ingredientsSection.style.display = 'none';
                this.textContent = 'Learn More';
            }
        });
        </script>
</body>
</html>

