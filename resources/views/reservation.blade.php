@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-content">
        <h1>Book Your Stay</h1>
        <p>Experience Luxury & Comfort</p>
    </div>
</section>

<main class="main-content">
    <section class="section">
        <h2 class="section-title">Make a Reservation</h2>
        <div class="form-container" id="reservationForm">
            <form action="{{ route('reservation.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" name="contact_number" id="contact_number" required>
                </div>
                <div class="form-group">
                    <label>Reservation Date:</label>
                    <div class="date-inputs">
                        <div>
                            <label for="from">From:</label>
                            <input type="date" name="from" id="from" required>
                        </div>
                        <div>
                            <label for="to">To:</label>
                            <input type="date" name="to" id="to" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Room Type:</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="room_type" value="Regular" required>
                            Regular
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="room_type" value="Deluxe">
                            De Luxe
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="room_type" value="Suite">
                            Suite
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Room Capacity:</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="room_capacity" value="Family" required>
                            Family
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="room_capacity" value="Double">
                            Double
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="room_capacity" value="Single">
                            Single
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Payment Type:</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="payment_type" value="Cash" required>
                            Cash
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="payment_type" value="Cheque">
                            Cheque
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="payment_type" value="Credit">
                            Credit Card
                        </label>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="submit" class="btn btn-primary">Submit Reservation</button>
                    <button type="reset" class="btn btn-secondary">Clear Entry</button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection