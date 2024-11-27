<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .navbar {
            height: 70px;
            padding: 0 1rem;
        }

        .navbar-brand {
            font-family: 'Dancing Script', cursive;
            font-size: 2.2rem !important;
            display: flex;  
            align-items: center;
            gap: 10px;
            margin-right: 2rem;
        }

        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            padding: 0.5rem 1rem !important;
            color: white;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::before {
            content: '♡';
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%) translateY(-20px);
            font-size: 1.2rem;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            transform: translateY(3px);
            color: #FFE4E1 !important;
        }

        .nav-link:hover::before {
            opacity: 1;
            transform: translateX(-50%) translateY(-15px);
        }

        .brand-logo {
            width: 50px;
            height: 50px;
            object-fit: cover;
            /* border-radius: 50%; */
            border: none;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .nav-right {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .nav-item {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container {
            background-color: pink;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background-color: pink;
                padding: 1rem;
            }
        }

        .user-icon {
            font-size: 1.5rem;
            color: white;
            padding: 0.5rem;
            cursor: pointer;
            transition: transform 0.3s ease, color 0.3s ease;
            margin-left: 50px;
        }

        .user-icon i {
            transition: transform 0.3s ease;
        }

        .user-icon:hover {
            color: #FFE4E1;
        }

        .user-icon:hover i {
            transform: scale(1.1);
        }

        .user-dropdown {
            display: none;
            position: absolute;
            top: 85%;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
            min-width: 150px;
            min-height: 50px;
            z-index: 1000;
            animation: dropdownBounce 0.8s ease;
            margin-right: 200px;
        }

        .user-icon:hover .user-dropdown {
            display: block;
        }

        .dropdown-item {
            display: block;
            padding: 0.5rem 1rem;
            color: #333;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: #fff0f3;
            color: #ff69b4;
        }

        @keyframes dropdownBounce {
            0% {
                transform: translateY(-1px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    @section('Navigation')
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style= "margin-top: 20px;">
            <div class="container">
                <a class="navbar-brand" href="{{'/'}}">
                    <img src="{{ asset('images/logo.jpg') }}" class="brand-logo" alt="Serendipity Logo">
                    <span>Serendipity</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{'/'}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/menu'}}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/about'}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/forPWD'}}">For PWD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/reviews'}}">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/contact'}}">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                                <div class="user-icon">
                                    <i class="fas fa-user-circle"></i>
                                    <div class="user-dropdown">

                                    @isset(Auth::user()->name)  
                                    <form action="{{'/logout'}}" method="POST">
                                            @csrf
                                            <p class="dropdown-item">Hello, {{Auth::user()->name}}</p>
                                            <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                    @endisset
                                    </div>
                                </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    @endsection
</body>
</html>