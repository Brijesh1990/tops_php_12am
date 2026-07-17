@extends('layout')
@section('title-here')
Contact Us
@endsection

@section('content')
<div class="container p-5 mt-5">
    <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-md-5 mb-4">
            <img src="https://i.pinimg.com/736x/12/29/78/1229780cc8351200e767346c1869fd22.jpg"
                class="img-fluid rounded shadow" alt="Contact Us">
        </div>

        <!-- Contact Form -->
        <div class="col-md-7">
            <h2 class="fw-bold">Contact Us</h2>
            <p class="text-muted">
                We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.
            </p>

            <hr>

            <form method="POST" action="">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control"
                        placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control"
                        placeholder="Enter your phone number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control"
                        placeholder="Enter subject" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" rows="5" class="form-control"
                        placeholder="Write your message here..." required></textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Send Message
                    </button>

                    <button type="reset" class="btn btn-secondary">
                        Reset
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection