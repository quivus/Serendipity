<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Add some basic styling -->
    <style>
        .product-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    @if(isset($products) && count($products) > 0)
    @foreach($products as $product)
    <div class="product-card">
        // ... existing product card content ...
    </div>
    @endforeach
    @else
    <div class="empty-state">
        <p>No products available.</p>
    </div>
    @endif
</body>

</html>