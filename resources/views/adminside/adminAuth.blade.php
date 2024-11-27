<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serendipity - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pink-primary: #FF69B4;
            --pink-secondary: #FFB6C1;
            --background-color: rgba(255, 255, 255, 0.7);
            --heading-font: 'Outfit', sans-serif;
            --body-font: 'Nunito', sans-serif;
        }

        .btn-pink {
            background-color: var(--pink-primary);
            color: white;
        }

        .btn-pink:hover {
            background-color: var(--pink-secondary);
            color: white;
        }

        .btn-link {
            color: black;
        }

        .btn-link:hover {
            color: blue;
        }

        .auth-container {
            min-height: 100vh;
            background-image: url('images/logobaby.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .auth-card {
            border-radius: 15px;
            border: 1px solid var(--pink-primary);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: var(--background-color);
            font-family: var(--body-font);
        }

        .hidden {
            display: none;
        }

        .toggle-register {
            margin-top: 1rem;
            text-align: center;
        }

        h2 {
            font-family: var(--heading-font);
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            text-shadow: 2px 1px 2px white;
        }

        body {
            font-family: var(--body-font);
        }

        .img-fluid {
            max-width: 20%;
            margin-bottom: 10px;
            opacity: 0.9;
        }
    </style>
</head>
<body>

@auth
    @include('adminside.AdminMainPage')
    @yield('main')
@else
    @if(session('success'))
        <script>
            alert('{{ session("success") }}')
        </script>
    @endif
    <div class="auth-container d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Login Card -->

                    <div class="auth-card p-4 mb-4" id="loginCard">
                        <h5 class="text-center">Admin</h5>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="img-fluid mb-4 w-25 h-25 mx-auto rounded-circle">
                        </div>
                        <h2 class="text-center mb-4" style="color: var(--pink-primary)">login</h2>
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                        <form action="{{route('admin.login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="text" class="form-label">Name</label>
                                <input type="text" class="form-control" id="text" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-pink w-100">Login</button>
                            <div class="toggle-register">
                                <button class="btn btn-link" onclick="toggleForms()" id="toggleRegisterBtn">
                                    Don't have an account? Register here
                                </button><br>

                            </div>

                        </form>
                    </div>

                    <!-- Toggle Register Button -->


                    <!-- Register Card -->
                    <div class="auth-card p-4 hidden" id="registerCard">
                        <h5 class="text-center">Admin</h5>

                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="img-fluid mb-4 w-25 h-20 mx-auto rounded-circle">
                        </div>
                        <h2 class="text-center mb-4" style="color: var(--pink-primary)">REGISTER</h2>
                        <form action="{{ route('admin.register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="register_password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="register_password" name="password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="register_password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="register_password_confirmation" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-pink w-100">Register</button>
                            <div class="toggle-register">
                                <button class="btn btn-link" onclick="toggleForms()" id="toggleRegisterBtn">
                                    Already have an account? Login here
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endauth


    <script>
        function toggleForms() {
            const registerCard = document.getElementById('registerCard');
            const loginCard = document.getElementById('loginCard');
            const toggleBtn = document.getElementById('toggleRegisterBtn');

            if (registerCard.classList.contains('hidden')) {
                registerCard.classList.remove('hidden');
                loginCard.classList.add('hidden');
                toggleBtn.textContent = 'Already have an account? Login here';
            } else {
                registerCard.classList.add('hidden');
                loginCard.classList.remove('hidden');
                toggleBtn.textContent = "Don't have an account? Register here";
            }
        }
    </script>
</body>

</html>