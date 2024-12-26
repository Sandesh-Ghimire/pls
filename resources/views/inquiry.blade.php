@extends('layouts.app')

@section('title', 'Inquiry Form')

@section('content')
<div class="container d-flex flex-column min-vh-100">
    <div class="card mb-auto">
        <div class="card-body">
            <h2>Inquiry Form</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Your Inquiry"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer Section -->
   
</div>
@endsection
