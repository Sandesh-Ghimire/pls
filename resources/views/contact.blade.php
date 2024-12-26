@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <!-- Page Title -->
    <div class="text-center mb-5">
        <h1 class="display-4">Contact Us</h1>
        <p class="lead">We’d love to hear from you! Get in touch with us for any inquiries or questions.</p>
    </div>

    <!-- Contact Information Section -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <h3 class="mb-4">Our Location</h3>
            <div class="embed-responsive embed-responsive-16by9 mb-4">
                <!-- Google Map Embed -->
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.561265560324!2d-122.44730348468135!3d37.75320648022247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7f29c0b828e9%3A0x5ed52226fbd34047!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1622519786399!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <h3 class="mb-4">Contact Information</h3>
            <ul class="list-unstyled">
                <li><strong>Address:</strong> Sangurigadhi-05, Dandabazar, Nepal</li>
                <li><strong>Email:</strong> <a href="mailto:sandeshgmr@gmail.com">sandeshgmr@gmail.com</a></li>
                <li><strong>Phone:</strong> <a href="tel:+9779801697079">+9779801697079</a></li>
            </ul>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-4 text-center">Get In Touch</h3>
            <form action="#" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="font-weight-bold">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" class="font-weight-bold">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="font-weight-bold">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block py-2">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Styling the Google Map container */
    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .embed-responsive-16by9::before {
        content: "";
        display: block;
        padding-top: 56.25%; /* Aspect ratio for 16:9 */
    }

    /* Contact Information Styling */
    .list-unstyled li {
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    /* Form Styling */
    .form-row .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group textarea {
        resize: vertical;
    }

    /* Label Styling */
    label {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 0.5rem;
        display: block;
    }

    /* Button Styling */
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        font-size: 1.1rem;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .embed-responsive-16by9 {
            height: 250px;
        }

        .form-row .form-group {
            margin-bottom: 1.2rem;
        }
    }

    /* Spacing and Padding Adjustments */
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .form-control {
        padding: 1.2rem;
        font-size: 1rem;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    }

    .btn-block {
        padding: 1rem;
        font-size: 1.1rem;
    }
</style>
@endsection

@section('scripts')
<script>
    // Add custom JS here if needed (e.g., for form validation, etc.)
</script>
@endsection
