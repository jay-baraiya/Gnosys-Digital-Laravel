@extends('layouts.app')

@section('title', 'Culture of Change - Gnosys Digital')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 120px 0 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-3 fw-bold mb-4">Culture of Change</h1>
                <p class="lead mb-4">The Studio Behind the Change - Our approach to innovation, growth, and transformation</p>
                <div class="d-flex gap-3">
                    <a href="/digital-services" class="btn btn-light btn-lg">
                        <i class="fas fa-cogs me-2"></i> Our Services
                    </a>
                    <a href="/digital-products" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-box me-2"></i> Our Products
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <i class="fas fa-lightbulb fa-5x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">About Gnosys Digital - The Studio Behind the Change</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead text-center mb-4">
                            At Gnosys Digital, we don't just follow digital trends - we build what's next. We are a global digital studio that creates high-impact services and ready-to-use digital products, all developed 100% in-house by our expert team.
                        </p>
                        <p class="lead text-center mb-4">
                            No freelancers. No outsourcing. Just a focused team obsessed with helping brands launch faster, scale smarter, and grow stronger.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-4">Our Mission - Simplifying Digital Growth</h2>
                <p class="lead text-center mb-5">
                    We believe every business deserves enterprise-level digital capabilities - without the complexity, delays, or inflated agency costs.
                </p>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                                <h3 class="fw-bold mb-3">Our Mission Is Simple</h3>
                                <p class="lead">
                                    To deliver world-class digital solutions that empower businesses to grow - built with speed, precision, and purpose.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">What We Do</h2>
                <p class="lead text-center mb-5">
                    We operate at the intersection of execution and innovation - combining a full-service digital studio with a powerful product ecosystem.
                </p>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="text-center mb-3">
                                    <i class="fas fa-box fa-3x text-primary"></i>
                                </div>
                                <h3 class="fw-bold text-center mb-3">Ready-to-Use Digital Products</h3>
                                <p class="text-center mb-4">
                                    We also build templates, frameworks, themes, and AI tools designed to accelerate your business workflows.
                                </p>
                                <div class="text-center">
                                    <a href="/digital-products" class="btn btn-primary">
                                        <i class="fas fa-eye me-2"></i> View All Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="text-center mb-3">
                                    <i class="fas fa-cogs fa-3x text-success"></i>
                                </div>
                                <h3 class="fw-bold text-center mb-3">Done-for-You Services</h3>
                                <p class="text-center mb-4">
                                    From website design and SEO to eCommerce development, marketing automation, and server management - every service is crafted and delivered in-house by certified experts.
                                </p>
                                <div class="text-center">
                                    <a href="/digital-services" class="btn btn-success">
                                        <i class="fas fa-eye me-2"></i> View All Services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Culture of Change Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">Our Culture of Change</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead text-center mb-4">
                            Change isn't a buzzword for us - it's the heartbeat of Gnosys Digital. In a world that evolves every day, we've built a culture that embraces agility, innovation, and learning. We call it the "Culture of Change."
                        </p>
                    </div>
                </div>
                
                <h4 class="fw-bold text-center mb-4">What It Means:</h4>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-3">
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                <strong>We stay curious.</strong> Every challenge is a chance to learn, rethink, and improve.
                                            </li>
                                            <li class="mb-3">
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                <strong>We evolve with purpose.</strong> We experiment boldly, but always with clarity and intent.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-3">
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                <strong>We own what we deliver.</strong> Every line of code, every design, every campaign reflects our commitment to excellence.
                                            </li>
                                            <li class="mb-3">
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                <strong>We grow together.</strong> Collaboration is our default setting - across teams, geographies, and disciplines.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mt-4 text-center">
                                    Our culture empowers everyone at Gnosys to think bigger, act faster, and stay human - no matter how digital the world becomes. Because transformation doesn't happen once - it happens every day, through people who choose to evolve.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">Our Approach - The Gnosys Way</h2>
                <p class="lead text-center mb-5">
                    We call it the "Culture of Change" - a mindset that drives everything we do. Change isn't a buzzword for us; it's the foundation of how we help our clients grow.
                </p>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-search fa-3x text-primary"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Discover</h4>
                                <p>
                                    We dive deep into your goals, challenges, and customer behavior. No assumptions. Just clarity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-palette fa-3x text-info"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Design</h4>
                                <p>
                                    We map digital journeys that convert - blending creativity, data, and usability.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-code fa-3x text-success"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Build</h4>
                                <p>
                                    Our in-house team executes with precision using cutting-edge technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-rocket fa-3x text-warning"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Deliver</h4>
                                <p>
                                    Every deliverable goes through multi-level testing before it reaches you. We don't stop until it performs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">Why Choose Gnosys Digital</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-award fa-3x text-primary"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Expert-Built, Not Outsourced</h4>
                                <p>
                                    Every gig and product is made by our core team, ensuring quality, speed, and accountability.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-sync fa-3x text-info"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Seamless Experience</h4>
                                <p>
                                    Buy, deploy, and grow - all from one trusted platform.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-globe fa-3x text-success"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Global Presence</h4>
                                <p>
                                    Serving clients across Canada, Switzerland, and India.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-chart-line fa-3x text-warning"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Real Results</h4>
                                <p>
                                    We measure success by the outcomes we create, not just deliverables.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">Our Story</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead text-center mb-5">
                            Gnosys Digital was founded on a belief that digital transformation should be practical, affordable, and built for impact. What began as a marketing agency has evolved into a multi-disciplinary digital powerhouse - blending strategy, creativity, and technology under one roof.
                        </p>
                        <p class="lead text-center mb-5">
                            We've partnered with businesses of every size - from startups to global enterprises - to simplify their digital journey and unlock growth potential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet the Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">Meet the People Behind the Work</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead text-center mb-5">
                            Our strength lies in our people - strategists, designers, developers, marketers, and data specialists - all working in harmony to turn complex challenges into beautiful, functional solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Presence Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-5 fw-bold text-center mb-5">Our Global Presence</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-flag fa-3x text-danger"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Canada</h4>
                                <p class="lead">Toronto</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-flag fa-3x text-danger"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Switzerland</h4>
                                <p class="lead">Zurich</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-flag fa-3x text-danger"></i>
                                </div>
                                <h4 class="fw-bold mb-3">India</h4>
                                <p class="lead">Rajkot, Gujarat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ready to Work With Us Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="display-5 fw-bold mb-4">Ready to Work With Us?</h2>
                <div class="d-flex gap-3 justify-content-center mb-4">
                    <a href="/digital-services" class="btn btn-light btn-lg">
                        <i class="fas fa-cogs me-2"></i> Explore Our Gigs
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-envelope me-2"></i> Get in Touch
                    </a>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4">
                        <h5 class="fw-bold mb-3">Address-CA</h5>
                        <p>1664, 225 The East Mall, Toronto, ON, M9B 0A9</p>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="fw-bold mb-3">Address-UK</h5>
                        <p>20-22 Wenlock Road, London N1 7GU, United Kingdom.</p>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="fw-bold mb-3">Contact</h5>
                        <p><strong>Phone:</strong> +1 647 947 9546<br>
                        <strong>E-Mail:</strong> connect@gnosysdigital.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Services Footer Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="fw-bold text-center mb-4">Digital Services</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="#" class="text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i> ERPNext Implementation
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="#" class="text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i> Ai Automation Data Services
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="#" class="text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i> SEO & Growth Services
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="#" class="text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i> Managed WordPress Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="fw-bold text-center mb-4">Quick Links</h3>
                <div class="row">
                    <div class="col-lg-4 mb-3 text-center">
                        <a href="/digital-services/custom-development" class="btn btn-outline-primary">
                            <i class="fas fa-code me-2"></i> Explore Custom Development
                        </a>
                    </div>
                    <div class="col-lg-4 mb-3 text-center">
                        <a href="/digital-services/ecommerce-development" class="btn btn-outline-primary">
                            <i class="fas fa-shopping-cart me-2"></i> Explore eCommerce Solutions
                        </a>
                    </div>
                    <div class="col-lg-4 mb-3 text-center">
                        <a href="/contact" class="btn btn-outline-primary">
                            <i class="fas fa-envelope me-2"></i> Contact Us Today
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Follow Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="fw-bold mb-4">Follow Us</h3>
                <div class="d-flex gap-3 justify-content-center mb-4">
                    <a href="https://facebook.com/gnosys.digital/" class="btn btn-primary" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/GnosysDigital" class="btn btn-info" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/gnosysdigital/" class="btn btn-danger" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://pinterest.com/GnosysDigital/" class="btn btn-danger" target="_blank">
                        <i class="fab fa-pinterest"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/gnosys-digital/" class="btn btn-primary" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="text-muted mb-0">
                    Copyright © 2018 - 2026 by Dwarkadhish E-Commerce Private Limited
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
