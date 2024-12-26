@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container py-5">
    <!-- Page Title -->
    <div class="text-center mb-5">
        <h1 class="display-4">Our Product Gallery</h1>
        <p class="lead">Explore our range of sustainable, plant-based products designed for a greener world.</p>
    </div>

    <!-- Filter Buttons -->
    <div class="text-center mb-5">
        <button class="btn btn-outline-success filter-button" data-filter="all">All</button>
        <button class="btn btn-outline-success filter-button" data-filter="eco-friendly">Eco-friendly</button>
        <button class="btn btn-outline-success filter-button" data-filter="sustainable">Sustainable</button>
        <button class="btn btn-outline-success filter-button" data-filter="bulk">Bulk</button>
    </div>

    <!-- Gallery Grid -->
    <div class="row gallery">
        <div class="col-md-4 col-sm-6 mb-4 eco-friendly">
            <div class="card">
                <img src="https://superdesk-pro-c.s3.amazonaws.com/sd-nepalitimes/2022110813118/636a46f79c7e80680e04d407jpeg.jpg" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Eco-friendly Packaging</h5>
                    <p class="card-text">Our eco-friendly packaging is made from 100% recyclable materials, perfect for reducing waste.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 sustainable">
            <div class="card">
                <img src="https://superdesk-pro-c.s3.amazonaws.com/sd-nepalitimes/2022110813118/636a46f79c7e80680e04d407jpeg.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Sustainable Water Bottle</h5>
                    <p class="card-text">Made from recycled materials, this bottle keeps your beverages fresh while reducing plastic waste.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 bulk">
            <div class="card">
                <img src="https://superdesk-pro-c.s3.amazonaws.com/sd-nepalitimes/2022110813118/636a46f79c7e80680e04d407jpeg.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Bulk Organic Herbs</h5>
                    <p class="card-text">We offer organic herbs in bulk, reducing packaging and supporting sustainable agriculture.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 eco-friendly">
            <div class="card">
                <img src="https://superdesk-pro-c.s3.amazonaws.com/sd-nepalitimes/2022110813118/636a46f79c7e80680e04d407jpeg.jpg" class="card-img-top" alt="Product 4">
                <div class="card-body">
                    <h5 class="card-title">Reusable Shopping Bag</h5>
                    <p class="card-text">This durable bag is perfect for everyday use and reduces the need for plastic bags.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 sustainable">
            <div class="card">
                <img src="https://superdesk-pro-c.s3.amazonaws.com/sd-nepalitimes/2022110813118/636a46f79c7e80680e04d407jpeg.jpg" class="card-img-top" alt="Product 5">
                <div class="card-body">
                    <h5 class="card-title">Sustainable Clothing</h5>
                    <p class="card-text">Made from organic cotton and recycled fabrics, our clothing line supports eco-conscious fashion.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 bulk">
            <div class="card">
                <img src="https://superdesk-pro-c.s3.amazonaws.com/sd-nepalitimes/2022110813118/636a46f79c7e80680e04d407jpeg.jpg" class="card-img-top" alt="Product 6">
                <div class="card-body">
                    <h5 class="card-title">Bulk Dried Fruits</h5>
                    <p class="card-text">Our bulk dried fruits are a healthy and sustainable snack option with minimal environmental impact.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .gallery .card {
        border: none;
        transition: transform 0.3s ease-in-out;
    }

    .gallery .card:hover {
        transform: translateY(-10px);
    }

    .filter-button {
        margin: 0 5px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .filter-button:hover {
        background-color: #28a745;
        color: white;
    }

    .eco-friendly .card {
        background-color: #e9f7e9;
    }

    .sustainable .card {
        background-color: #e1f0f1;
    }

    .bulk .card {
        background-color: #f0f1e1;
    }
</style>
@endsection

@section('scripts')
<script>
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-button');
    const galleryItems = document.querySelectorAll('.gallery .col-md-4');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            galleryItems.forEach(item => {
                if (filter === 'all') {
                    item.style.display = 'block';
                } else if (!item.classList.contains(filter)) {
                    item.style.display = 'none';
                } else {
                    item.style.display = 'block';
                }
            });
        });
    });
</script>
@endsection
