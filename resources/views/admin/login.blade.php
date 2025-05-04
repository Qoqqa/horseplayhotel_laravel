@extends('layouts.admin')

@section('content')
<div class="login-container">
    <div class="logo">
        <h1>Horseplay Hotel</h1>
    </div>
    @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
    </form>
    <div class="back-link">
        <a href="{{ route('home') }}">← Back to Website</a>
    </div>
</div>
@endsection