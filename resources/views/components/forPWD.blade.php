<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
    <!-- Add Bootstrap JavaScript and its dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PWD Discount Registration</title>
</head>

<style>
    /* Accessibility Styles */
    .high-contrast {
        background-color: black !important;
        color: yellow !important;
    }
    
    .high-contrast .card {
        background-color: #333 !important;
        border: 2px solid yellow !important;
    }

    /* Make form elements larger for better accessibility */
    .form-control-lg, .form-select-lg {
        font-size: 1.1rem;
        padding: 0.75rem 1rem;
    }

    /* Focus indicators for better visibility */
    .form-control:focus, .form-select:focus, .btn:focus {
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.5);
        border-color: #0d6efd;
    }

    /* Updated pastel color scheme and formatting */
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .card {
        border: none;
        border-radius: 20px;
        margin-bottom: 2rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .card-header {
        border-radius: 20px 20px 0 0 !important;
    }

    /* Pastel color scheme */
    .card-header.bg-primary {
        background-color: #b5d8f7 !important;
        color: #2c5282 !important; /*
    }

    .card-header.bg-success {
        background-color: #c6f6d5 !important; /* Soft green */
        color: #276749 !important; /* Darker green for text */
    }

    .btn-primary {
        background-color: #b5d8f7;
        border-color: #b5d8f7;
        color: #2c5282;
    }

    .btn-primary:hover {
        background-color: #90cdf4;
        border-color: #90cdf4;
        color: #2c5282;
    }

    .btn-secondary {
        background-color: #e2e8f0;
        border-color: #e2e8f0;
        color: #4a5568;
    }

    .btn-secondary:hover {
        background-color: #cbd5e0;
        border-color: #cbd5e0;
        color: #2d3748;
    }

    /* Form controls */
    .form-control, .form-select {
        border-color: #e2e8f0;
        background-color: #f8fafc;
    }

    .form-control:focus, .form-select:focus {
        border-color: #b5d8f7;
        box-shadow: 0 0 0 0.25rem rgba(181, 216, 247, 0.25);
    }

    /* Table styling */
    .table {
        background-color: white;
        border-radius: 15px;
    }

    .table thead th {
        background-color: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
        color: #4a5568;
    }

    /* Alert styling */
    .alert-info {
        background-color: #ebf8ff;
        border-color: #bee3f8;
        color: #2c5282;
    }

    .alert-success {
        background-color: #c6f6d5;
        border-color: #9ae6b4;
        color: #276749;
    }

    .alert-danger {
        background-color: #fed7d7;
        border-color: #feb2b2;
        color: #9b2c2c;
    }

    /* Responsive adjustments */
    @media (max-width: 1100px) {
        .card {
            width: 100% !important;
            margin-bottom: 1rem;
        }
    }

</style>
<body>
@include('atoms.Navigation')
@yield('Navigation')
<div class="container py-5" style="background-color: white;">
    <div class="d-flex justify-content-center gap-4">
        <div class="card shadow" style="width: 450px;">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Your PWD Benefits</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Original Price</th>
                                <th>PWD Discount</th>
                                <th>Final Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Basic Service</td>
                                <td>₱1,000.00</td>
                                <td>-₱200.00</td>
                                <td>₱800.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow" style="width: 650px;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">PWD Discount Registration</h3>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('pwd.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="pwd_id" class="form-label">PWD ID Number</label>
                        <input type="text" class="form-control form-control-lg" id="pwd_id" name="pwd_id" required>
                    </div>

                    <div class="mb-3">
                        <label for="disability_type" class="form-label">Type of Disability</label>
                        <select class="form-select form-select-lg" id="disability_type" name="disability_type" required>
                            <option value="">Select Disability Type</option>
                            <option value="physical">Physical Disability</option>
                            <option value="visual">Visual Disability</option>
                            <option value="hearing">Hearing Disability</option>
                            <option value="mental">Mental Disability</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pwd_id_photo" class="form-label">Upload PWD ID (Photo)</label>
                        <input type="file" class="form-control" id="pwd_id_photo" name="pwd_id_photo" accept="image/*" required>
                    </div>

                    <div class="alert alert-info">
                        <h5 class="alert-heading">Discount Information</h5>
                        <p class="mb-0">As per Republic Act No. 10754, qualified PWDs are entitled to:</p>
                        <ul>
                            <li>20% discount on applicable services</li>
                            <li>12% VAT exemption on applicable services</li>
                        </ul>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" id="submit">
                            Submit PWD Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="position-fixed bottom-0 end-0 p-3">
    <div class="btn-group">
        <button class="btn btn-secondary" onclick="increaseFontSize()">
            <i class="fas fa-text-height"></i> Increase Text
        </button>
        <button class="btn btn-secondary" onclick="decreaseFontSize()">
            <i class="fas fa-text-height fa-flip-vertical"></i> Decrease Text
        </button>
        <button class="btn btn-secondary" onclick="toggleHighContrast()">
            <i class="fas fa-adjust"></i> High Contrast
        </button>
    </div>
</div>
    
<script>
    function increaseFontSize() {
        document.body.style.fontSize = parseInt(getComputedStyle(document.body).fontSize) + 2 + 'px';
    }

    function decreaseFontSize() {
        document.body.style.fontSize = parseInt(getComputedStyle(document.body).fontSize) - 2 + 'px';
    }

    function toggleHighContrast() {
        document.body.classList.toggle('high-contrast');
    }

    // Calculate PWD Discount
    function calculatePWDDiscount(originalPrice) {
        const discountRate = 0.20; 
        const discount = originalPrice * discountRate;
        return originalPrice - discount;
    }

   
    document.getElementById('submit').addEventListener('click', function() {
        alert('Form submitted successfully!');
        setTimeout(function() {
            window.location.href = '{{ route("forPWD") }}'; 
        }, 1000);
    });
</script>
</body>
</html>