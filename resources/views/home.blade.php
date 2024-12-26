@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container" >
    <!-- Hero Section -->
    <div class="jumbotron text-center text-white bg-success py-5 bg-green rounded">
        <h1 class="display-4 mb-4">Welcome to Plant Products</h1>
        <p class="lead mb-4">Explore our range of sustainable, plant-based products for a greener future.</p>
        <hr class="my-4 mx-auto" style="width: 60%; border-color: white;">
        <p class="mb-4">Our mission is to provide eco-friendly, plant-based solutions that help preserve the environment while offering quality products.</p>
        <a class="btn btn-light btn-lg" href="{{ route('gallery') }}" role="button">Browse Products</a>
    </div>

    <!-- About Us Section -->
    <div class="row align-items-center mt-5">
        <div class="col-md-6 mb-4">
            <h2>Why Choose Us?</h2>
            <p>We are passionate about sustainability and strive to offer products that are both environmentally friendly and functional. Our plant-based items are made with care, using eco-conscious materials that reduce the carbon footprint.</p>
        </div>
        <div class="col-md-6">
            <img src="https://i.ebayimg.com/images/g/k3cAAOSwmxNkhOTB/s-l1200.jpg" alt="Plant-Based Products" class="img-fluid rounded shadow-sm">
        </div>
    </div>

    <!-- Featured Products Section -->
    <div class="mt-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row">
            @for ($i = 1; $i <= 3; $i++)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtwnTC2yDxGXQZ_Km4QI18j4Ii6UCoB_Rl0w&s" class="card-img-top" alt="Product {{ $i }}">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Product {{ $i }}</h5> -->
                            <p class="card-text">Sustainable, eco-friendly, and plant-based. Perfect for your green lifestyle.</p>
                            <a href="{{ route('inquiry') }}" class="btn btn-success">Inquire About Bulk Purchase</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="text-center mt-5 py-4 bg-light rounded">
        <h3 class="mb-3">Join the Movement Towards a Greener Future</h3>
        <p class="mb-4">Switch to sustainable, plant-based products today. Together, we can make a positive impact on the planet.</p>
        <a class="btn btn-success btn-lg" href="{{ route('inquiry') }}" role="button">Contact Us for Bulk Orders</a>
    </div>
</div>
@endsection
