<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo_kominforb.png') }}">
</head>

<body>
    <!-- Login Card -->
    <div class="login-card">
        <div class="text-center mb-3">
            <img src="{{ asset('assets/img/logo_kominforb.png') }}" alt="Logo" class="mb-2" style="width: 100px; height: auto;">  
            
            <p class="mb-0">Login</p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkkan Password" required>
            </div>
            <div class="text-end mb-3">
                <a href="#" class="text-light small text-decoration-none">Forgot Password?</a>
            </div>
            <button class="btn btn-primary w-100">Sign in</button>
        </form>

        <!-- Divider -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>