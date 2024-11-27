<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .card {
        transition: transform 0.2s;
        border: none;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card1 {
        background-color: white;
        border: 1px solid #ffccd5;
        aspect-ratio: 1/1;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
        padding: 0.5rem;
        overflow: hidden;
        position: relative;
        max-width: 200px;
        margin: 0 auto;
        transition: all 0.3s ease;
        height: 100%;
    }

    .card1:hover {
        box-sizing: 0 2px 4px rgba(0, 0, 0, 0.05);
        box-shadow: 0 0 15px rgba(255, 182, 193, 0.7) !important;
        transform: translateY(-3px);
    }

    .card-img-top {
        width: 100%;
        aspect-ratio: 1/1;
        height: auto;
        object-fit: cover;
        transition: all 0.5s ease;
        border-radius: 8px;
        margin-bottom: 0.5rem;
    }

    .card1:hover .card-img-top {
        transform: scale(1.05);
    }

    .card-title {
        font-size: 0.8rem;
        margin-top: 0.5rem;
        padding: 0 0.5rem;
    }

    .card-text {
        font-size: 0.75rem;
        padding: 0 0.5rem;
        color: #666;
        margin-bottom: 0.4rem;
    }

    .price {
        font-weight: 600;
        color: #ff4d6d;
        margin-top: auto;
        padding: 0 0.5rem 0.5rem 0.5rem;
    }

    h1 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 500;
        color: #2c2c2c;
        text-align: left;
        margin: 0 0 1.5rem 0.5rem;
        font-size: 1.5rem;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    h1::after {
        display: none;
    }

    .container {
        padding: 1.5rem;
        max-width: 1400px;
        background-color: white;
    }

    .add-to-cart-btn {
        background-color: white;
        border: none;
        color: #ff4d6d;
        padding: 0.4rem 0.8rem;
        font-size: 0.75rem;
        transition: all 0.3s ease;
        cursor: pointer;
        opacity: 0;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        transform: translateY(100%);
        background-color: rgba(255, 255, 255, 0.95);
    }

    .card1:hover .add-to-cart-btn {
        opacity: 1;
        transform: translateY(0);
    }

    .add-to-cart-btn:hover {
        color: white;
        background-color: #ff4d6d;
    }

    .row {
        margin: 0 -0.5rem;
        row-gap: 1rem !important;
        column-gap: 0.5rem !important;
    }

    .col {
        padding: 0.5rem;
    }

    .category-buttons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .category-btn {
        background-color: transparent;
        border: none;
        color: #666;
        padding: 0.4rem 1.2rem;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
    }

    .category-btn::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 50%;
        background-color: #ff4d6d;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .category-btn:hover::after,
    .category-btn.active::after {
        width: 80%;
    }

    .category-btn:hover,
    .category-btn.active {
        color: #ff4d6d;
    }

    .menu-header {
        text-align: center;
        padding: 3rem 1rem;
        margin-bottom: 2rem;
    }

    h1 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 600;
        color: #2c2c2c;
        text-align: center;
        margin-top: 1.5rem;
        font-size: 2.5rem;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    .category-buttons {
        display: flex;
        justify-content: center;
        gap: 0.75rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }

    .category-btn {
        background-color: white;
        border: 1px solid #ffccd5;
        color: #ff4d6d;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .category-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background-color: #ffccd5;
        transition: width 0.3s ease;
        z-index: -1;
    }

    .category-btn:hover::before,
    .category-btn.active::before {
        width: 100%;
    }

    .category-btn:hover,
    .category-btn.active {
        color: #ff4d6d;
    }


    .row {
        margin: 0 -0.75rem;
        row-gap: 1.5rem !important;
    }

    .category-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
        margin-bottom: 2rem;
    }

    .category-btn {
        background-color: transparent;
        border: 1px solid #ffccd5;
        color: #ff4d6d;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .category-btn:hover,
    .category-btn.active {
        background-color: #ffccd5;
        color: #ff4d6d;
    }

    .menu-header,
    .category-btn::before {
        display: none;
    }
</style>

<body>
    @include('atoms.Navigation')
    @yield('Navigation')

    <div class="container" style="background-color: white;">
        <div class="category-buttons">
            <h1>Our Menu</h1>
            <div class="category-wrapper">
                <button class="category-btn active">All</button>
                <button class="category-btn">Bento Cake</button>
                <button class="category-btn">Frosting Cake</button>
                <button class="category-btn">Fondant Cake</button>
                <button class="category-btn">Picture Designed Cake</button>
                <button class="category-btn">Mini Delights</button>
            </div>
            <div class="row row-cols-3 row-cols-md-4 row-cols-lg-6 g-10 justify-content-center">
                @foreach ($products as $product)
                <div class="col h-50">
                    <div class="card1">
                        <img class="rounded-top" src="{{ asset('images/puto.jpg') }}" width="100%" height="65" alt="Product Image">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->category }}</p>
                        <p class="card-text price">₱{{ $product->price }}</p>
                        <a class="add-to-cart-btn text-center" href="/ProductPage/{{$product->id}}">View more</a>
                    </div>
                </div>

                @endforeach
            </div>

           

        </div>
    </div>




    <script>
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
            });
        });

       
    </script>
</body>

</html>