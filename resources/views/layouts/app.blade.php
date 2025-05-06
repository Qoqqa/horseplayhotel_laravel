<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Horseplay Hotel')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <a href="{{ route('home') }}" class="brand">
                    <h1>Horseplay</h1>
                    <span>Luxury Hotel</span>
                </a>
                <div class="nav-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('profile') }}">Company Profile</a>
                    <a href="{{ route('reservation') }}">Reservations</a>
                    <a href="{{ route('contacts') }}">Contact Us</a>
                    <a href="{{ route('admin.login') }}" class="btn btn-primary admin-link">Admin Portal</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="main-content">
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 Horseplay Hotel. All rights reserved.</p>
    </footer>
</body>
</html>