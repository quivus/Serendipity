<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
    <!-- Add Bootstrap JavaScript and its dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <!-- Add custom styles -->
    <style>
        :root {
            --bs-primary: #FFB6C1; /* Light pink */
        }
        
        .text-primary {
            color: #FFB6C1 !important;
        }
        
        .border-primary {
            border-color: #FFB6C1 !important;
        }
        
        .btn-primary {
            background-color: #FFB6C1 !important;
            border-color: #FFB6C1 !important;
        }
        
        .btn-primary:hover {
            background-color: #FFA0B0 !important;
            border-color: #FFA0B0 !important;
        }
    </style>
    <title>About</title>
</head>
<body>  
    @include('atoms.Navigation')
    @yield('Navigation')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm mb-5">
                <div class="card-body p-5">
                    <h2 class="h3 mb-4">Our Story</h2>
                    <p class="lead">
                        Welcome to Serendipity, where unexpected discoveries lead to delightful experiences. 
                        Founded in [year], we've been dedicated to creating meaningful connections and 
                        memorable moments for our community.
                    </p>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-heart-fill text-primary me-3 fs-4"></i>
                                <h3 class="h5 mb-0">Our Mission</h3>
                            </div>
                            <p>To inspire and facilitate meaningful connections through serendipitous discoveries.</p>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-eye-fill text-primary me-3 fs-4"></i>
                                <h3 class="h5 mb-0">Our Vision</h3>
                            </div>
                            <p>Creating a world where beautiful coincidences lead to lasting relationships.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
                            <h3 class="h5">Community First</h3>
                            <p class="mb-0">Building strong relationships within our community.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                            <h3 class="h5">Trust & Safety</h3>
                            <p class="mb-0">Your security and privacy are our top priorities.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-arrow-through-heart text-primary fs-1 mb-3"></i>
                            <h3 class="h5">Innovation</h3>
                            <p class="mb-0">Constantly evolving to serve you better.</p>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>