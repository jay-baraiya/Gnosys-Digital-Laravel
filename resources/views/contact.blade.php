@extends('layouts.app')

@section('content')
<!-- Contact Header with Map -->
<section class="contact-header">
    <div class="map-container" data-aos="fade-in">
        <iframe 
            src="https://maps.google.com/maps?cid=1576132545522384619&output=embed" 
            width="100%"    
            height="450" 
            style="border:0;"   
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-section">
    <div class="container">
        <div class="row align-items-start g-5">
            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-up">
                <div class="contact-form-wrapper">
                    <div class="section-title text-start mb-4">
                        <span class="sub-heading">Get in Touch</span>
                        <h3>Send us a message</h3>
                        <p class="text-muted">Fill out the form below and our team will get back to you within 24 hours.</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
                            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss-auto="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label fw-bold small text-uppercase">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Your first name" required>
                                @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label fw-bold small text-uppercase">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Your last name" required>
                                @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-bold small text-uppercase">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com" required>
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="website" class="form-label fw-bold small text-uppercase">Website (Optional)</label>
                                <input type="url" class="form-control" name="website" id="website" placeholder="https://example.com">
                                @error('website') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label fw-bold small text-uppercase">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="What can we help you with?" required>
                            @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fw-bold small text-uppercase">Your Message</label>
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Tell us more about your project or inquiry..." required></textarea>
                            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button type="submit" class="btn btn-gnosys w-100 py-3">
                            <i class="fas fa-paper-plane me-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="contact-info-wrapper">
                    <div class="section-title text-start mb-5">
                        <span class="sub-heading">Contact Details</span>
                        <h3>Let's Talk</h3>
                        <p class="text-muted">We're here to answer any questions and help you find the best solutions for your digital growth.</p>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="details">
                            <h6>Our Headquarters</h6>
                            <p>1664, 225 The East Mall, Toronto, ON, Canada</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="details">
                            <h6>Email Address</h6>
                            <p><a href="mailto:connect@gnosysdigital.com">connect@gnosysdigital.com</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="details">
                            <h6>Phone Number</h6>
                            <p><a href="tel:+16479479546">+1 647 947 9546</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="details">
                            <h6>Visit Website</h6>
                            <p><a href="https://gnosysdigital.com" target="_blank">www.gnosysdigital.com</a></p>
                        </div>
                    </div>

                    <!-- Additional Help -->
                    <div class="mt-5 pt-4 border-top">
                        <h5>Looking for support?</h5>
                        <p class="text-muted">Check out our <a href="{{ route('blog.index') }}" class="text-primary fw-medium">Blog</a> for guides and automation tips, or explore our <a href="{{ route('digital-products') }}" class="text-primary fw-medium">Digital Products</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
