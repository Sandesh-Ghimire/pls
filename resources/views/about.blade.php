@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid px-0 ">
    <!-- Hero Section with Full-Width Image -->
    <div class="jumbotron jumbotron-fluid text-center text-white bg-success" >
        <div class="container py-5">
            <h1 class="display-4">About Us</h1>
            <p class="lead">Our mission is to provide sustainable, plant-based products for a greener future.</p>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="mb-4">Our Story</h2>
                <p>Founded with the vision of a more sustainable future, we aim to create plant-based products that reduce environmental impact. Every product we offer helps preserve the planet for future generations. We’re driven by innovation, responsibility, and a commitment to a greener world.</p>
            </div>
            <!-- <div class="col-md-6">
                <img src="https://www.pexels.com/photo/green-leaf-plant-on-white-ceramic-plate-6740101/" alt="Our Story" class="img-fluid rounded shadow-sm">
            </div> -->
        </div>
    </div>

    <!-- Mission and Values Section -->
    <div class="container bg-light py-5">
        <h3 class="text-center mb-5">Our Mission & Values</h3>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <!-- <i class="fas fa-leaf fa-3x text-success"></i> -->
                    <!-- <i class="fas fa-band-aid"></i> -->
                    <i class="fa fa-cloud" style="font-size:36px;"></i>
                </div>
                <h5>Sustainability</h5>
                <p>We prioritize eco-friendly materials and practices to reduce our carbon footprint.</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <!-- <i class="fas fa-lightbulb fa-3x text-primary"></i> -->
                    <i class="fa fa-cloud" style="font-size:36px;"></i>
                </div>
                <h5>Innovation</h5>
                <p>We continually explore new ways to improve our products and reduce environmental impact.</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <!-- <i class="fas fa-handshake fa-3x text-info"></i> -->
                    <i class="fa fa-cloud" style="font-size:36px;"></i>
                </div>
                <h5>Integrity</h5>
                <p>We operate transparently, with a commitment to ethical business practices.</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <!-- <i class="fas fa-users fa-3x text-warning"></i> -->
                    <i class="fa fa-cloud" style="font-size:36px;"></i>
                </div>
                <h5>Community</h5>
                <p>We support and engage with communities working towards sustainability.</p>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://purepng.com/public/uploads/thumbnail/purepng.com-thinking-manthinking-manpersongentle-men-thinkingthinking-brain-1421526976458yw5zo.png" class="card-img-top" alt="Team Member 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder & CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://purepng.com/public/uploads/thumbnail/purepng.com-thinking-manthinking-manpersongentle-men-thinkingthinking-brain-1421526976458yw5zo.png" class="card-img-top" alt="Team Member 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">Chief Sustainability Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://purepng.com/public/uploads/thumbnail/purepng.com-thinking-manthinking-manpersongentle-men-thinkingthinking-brain-1421526976458yw5zo.png" class="card-img-top" alt="Team Member 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Emily Johnson</h5>
                        <p class="card-text">Product Development Lead</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="text-center mt-5 py-4 bg-light rounded">
        <h3 class="mb-3">Join Us in Creating a Greener Future</h3>
        <p class="mb-4">Be a part of the sustainable movement by choosing eco-friendly, plant-based products. Together, we can make a difference.</p>
        <a class="btn btn-success btn-lg" href="{{ route('contact') }}" role="button">Contact Us</a>
    </div>
</div>
@endsection
