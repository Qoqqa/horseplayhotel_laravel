@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Horseplay Hotel</h1>
        <p>Experience Luxury & Comfort</p>
    </div>
</section>

<main class="main-content">
    <section class="section">
        <h2 class="section-title">Experience Unparalleled Luxury</h2>
        <p class="section-description">
            Discover the perfect blend of comfort, elegance, and exceptional service at Horseplay Hotel. 
            Our commitment to excellence ensures that every stay is memorable and every guest feels special.
        </p>
    </section>

    <section class="section">
        <h2 class="section-title">Our Amenities</h2>
        <div class="amenities-grid">
            <div class="amenity-card">
                <div class="icon-title">
                    <i class="fas fa-swimming-pool"></i>
                    <h3>Infinity Pool</h3>
                </div>
                <p>Enjoy our stunning rooftop pool with panoramic views</p>
            </div>
            <div class="amenity-card">
                <div class="icon-title">
                    <i class="fas fa-spa"></i>
                    <h3>Luxury Spa</h3>
                </div>
                <p>Rejuvenate with our world-class spa treatments</p>
            </div>
            <div class="amenity-card">
                <div class="icon-title">
                    <i class="fas fa-utensils"></i>
                    <h3>Fine Dining</h3>
                </div>
                <p>Experience culinary excellence at our restaurants</p>
            </div>
            <div class="amenity-card">
                <div class="icon-title">
                    <i class="fas fa-dumbbell"></i>
                    <h3>Fitness Center</h3>
                </div>
                <p>Stay active with our state-of-the-art gym</p>
            </div>
            <div class="amenity-card">
                <div class="icon-title">
                    <i class="fas fa-wifi"></i>
                    <h3>High-Speed WiFi</h3>
                </div>
                <p>Stay connected throughout your stay</p>
            </div>
            <div class="amenity-card">
                <div class="icon-title">
                    <i class="fas fa-concierge-bell"></i>
                    <h3>24/7 Concierge</h3>
                </div>
                <p>Round-the-clock service for your needs</p>
            </div>
        </div>
    </section>
</main>
@endsection