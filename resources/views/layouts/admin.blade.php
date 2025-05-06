<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Horseplay Hotel')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-sidebar">
        <div class="logo">
            <h2>Horseplay Hotel</h2>
            <p>Admin Panel</p>
        </div>
        <nav>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="{{ route('admin.logout') }}">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </nav>
    </div>

    <div class="admin-content">
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script>
        // Close alert messages after 3 seconds
        setTimeout(function() {
            var messages = document.querySelectorAll('.success-message, .error-message');
            messages.forEach(function(message) {
                message.style.display = 'none';
            });
        }, 3000);
    </script>
</body>
</html>