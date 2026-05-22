@extends('layouts.app')

@section('title', 'Custom Manufacturing & Operations Control Software Development - Gnosysdigital')

@section('content')
<!-- Hero Section -->
<section class="hero-section py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-4 fw-bold mb-4 text-center" data-aos="fade-up">
                    Your production runs daily. But your visibility stops at paperwork.
                </h1>
                <p class="lead mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    Whiteboards, Excel, and WhatsApp updates can't manage your operations anymore.
                </p>
                <p class="mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    Gnosys Digital builds custom Manufacturing & Operations Control Systems 
                    tailored around your factory's workflow - your machines, your people, your process.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-comments me-2"></i>Talk to a Manufacturing Solutions Expert
                    </a>
                    <a href="{{ url('/category/case-study') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-briefcase me-2"></i>Explore Past Implementations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5" data-aos="fade-up">
                    Your process isn't standard - so why use standard software?
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-cogs fa-3x text-primary"></i>
                        </div>
                        <h4 class="card-title">Rigid ERP Systems</h4>
                        <p class="card-text">
                            Too complex, too expensive, and full of unused features.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-clipboard-list fa-3x text-success"></i>
                        </div>
                        <h4 class="card-title">Manual Job Cards</h4>
                        <p class="card-text">
                            Operators track production on paper or WhatsApp.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-tools fa-3x text-warning"></i>
                        </div>
                        <h4 class="card-title">Unlogged Downtime</h4>
                        <p class="card-text">
                            Machines stop, no one records why.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-building fa-3x text-info"></i>
                        </div>
                        <h4 class="card-title">Disconnected Departments</h4>
                        <p class="card-text">
                            Production, store, and quality don't share live data.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-clock fa-3x text-danger"></i>
                        </div>
                        <h4 class="card-title">Delayed Reporting</h4>
                        <p class="card-text">
                            You only see yesterday's data - today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <p class="lead" data-aos="fade-up">
                    You don't need "ERP." You need your own control system - built for how you manufacture.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5" data-aos="fade-up">
                    We design your factory's digital nervous system.
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    Every manufacturing unit operates differently. We develop custom Manufacturing & Operations Control Systems 
                    that digitize your unique process - from raw material to dispatch - without disrupting how your team already works.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center mb-5" data-aos="fade-up" data-aos-delay="200">
                    Custom Solutions We Can Build
                </h3>
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-calendar-alt text-primary me-2"></i>
                            Production Planning
                        </h5>
                        <p class="card-text">
                            Job scheduling, load balancing, shift assignment
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-clipboard-check text-primary me-2"></i>
                            Job Card System
                        </h5>
                        <p class="card-text">
                            Operator-wise job creation, tracking & status updates
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-industry text-primary me-2"></i>
                            Machine Monitoring
                        </h5>
                        <p class="card-text">
                            Downtime logging, utilization reports, reason codes
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-search text-primary me-2"></i>
                            Quality & Inspection
                        </h5>
                        <p class="card-text">
                            Stage-wise QC forms, rejection tagging, NCR workflow
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-qrcode text-primary me-2"></i>
                            Material Traceability
                        </h5>
                        <p class="card-text">
                            Batch and part tracking through production stages
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-tasks text-primary me-2"></i>
                            WIP Tracking
                        </h5>
                        <p class="card-text">
                            Real-time visibility of what's in process and where
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-truck text-primary me-2"></i>
                            Dispatch Sync
                        </h5>
                        <p class="card-text">
                            Production-to-dispatch linkage, order fulfillment dashboard
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-chart-line text-primary me-2"></i>
                            Analytics & KPIs
                        </h5>
                        <p class="card-text">
                            OEE, productivity, output, and downtime analysis
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mt-4">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-comments me-2"></i>Discuss Your Requirements
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5" data-aos="fade-up">
                    We don't install systems. We design them with you.
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search-location fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Discovery & Process Mapping</h4>
                    <p>
                        We visit your factory (physically or virtually) to study how jobs, materials, and machines flow.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="fas fa-drafting-compass fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">System Blueprint & UI Design</h4>
                    <p>
                        You'll see screen mockups, process diagrams, and data flow before a single line of code is written.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Development & Integration</h4>
                    <p>
                        Built using Laravel full-stack architecture with modules for roles, reports, and automation.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Training, Deployment & Support</h4>
                    <p>
                        We train your staff, roll out the system in phases, and stay onboard for refinements.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <p class="lead" data-aos="fade-up">
                    Your process. Your terminology. Your control - now digital.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5" data-aos="fade-up">
                    Because efficiency comes from alignment, not adoption.
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="benefits-list" data-aos="fade-up" data-aos-delay="100">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Built around your machines, people, and workflows.</strong>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Lower investment than full-scale ERPs.</strong>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Works offline (PWA) - perfect for shop floors.</strong>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Integrates with Tally, Excel, or your existing systems.</strong>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Modular - add new functions anytime.</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <div class="mt-4">
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-clipboard-check me-2"></i>Book a Free Factory Process Audit
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5" data-aos="fade-up">
                    Tools & Tech
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-server text-primary me-2"></i>
                            Backend
                        </h5>
                        <p class="card-text">
                            Laravel (PHP 8+), MySQL, Redis
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-laptop-code text-primary me-2"></i>
                            Frontend
                        </h5>
                        <p class="card-text">
                            Vue / React + Tailwind CSS
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-mobile-alt text-primary me-2"></i>
                            Mobile Access
                        </h5>
                        <p class="card-text">
                            PWA (Offline-ready for shop floor)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-plug text-primary me-2"></i>
                            Integrations
                        </h5>
                        <p class="card-text">
                            Tally, Zoho, SAP B1, WhatsApp, Email Alerts
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-cloud text-primary me-2"></i>
                            Hosting
                        </h5>
                        <p class="card-text">
                            AWS / DigitalOcean / On-premise
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-shield-alt text-primary me-2"></i>
                            Security
                        </h5>
                        <p class="card-text">
                            JWT Auth, Role-based Access, Backups, Logs
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <p class="lead" data-aos="fade-up">
                    Secure, modular, and ready to grow with your factory.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Engagement Section -->
<section class="py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5" data-aos="fade-up">
                    Transparent engagement, flexible scope.
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 bg-white text-dark">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-project-diagram text-primary me-2"></i>
                            Fixed-Scope Project
                        </h4>
                        <p class="card-text">
                            You know what you need. We build it with defined modules, timelines, and costs.
                        </p>
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-envelope me-2"></i>Request a Proposal
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 bg-white text-dark">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-handshake text-primary me-2"></i>
                            Long-Term Technology Partner
                        </h4>
                        <p class="card-text">
                            You want a digital growth partner. We act as your in-house tech team, continuously evolving your system.
                        </p>
                        <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-comments me-2"></i>Discuss Partnership
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 bg-white text-dark">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-cogs text-primary me-2"></i>
                            Process & Tech Consulting
                        </h4>
                        <p class="card-text">
                            Unsure where to start? We map your manufacturing process and prepare a digital blueprint first.
                        </p>
                        <a href="{{ url('/free-digital-consultation') }}" class="btn btn-primary btn-sm mt-3">
                            <i class="fas fa-phone me-2"></i>Book a Discovery Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-4" data-aos="fade-up">
                    Your factory, digitized by engineers who understand manufacturing.
                </h2>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">
                    Gnosys Digital builds custom Manufacturing & Operations Control Systems 
                    tailored around your factory's workflow - your machines, your people, your process.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-comments me-2"></i>Get Free Consultation
                    </a>
                    <a href="{{ url('/contact') }}" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-info-circle me-2"></i>Request a Proposal
                    </a>
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
                <h3 class="text-center mb-4">Quick Links</h3>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Digital Services</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/channel-distribution-management-software-development') }}" class="text-decoration-none">Channel & Distribution</a></li>
                            <li><a href="#" class="text-decoration-none">Custom Warehouse & Inventory</a></li>
                            <li><a href="#" class="text-decoration-none">Supply Chain & Logistics</a></li>
                            <li><a href="#" class="text-decoration-none">SEO Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">ERPNext Solutions</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/erpnext-implementation/erpnext-for-healthcare') }}" class="text-decoration-none">ERPNext For Healthcare</a></li>
                            <li><a href="{{ url('/erpnext-implementation/epc-project-control-with-erpnext') }}" class="text-decoration-none">EPC Project Control with ERPNext</a></li>
                            <li><a href="{{ url('/erpnext-implementation/erpnext-for-e-commerce') }}" class="text-decoration-none">ERPNext for E-commerce</a></li>
                            <li><a href="{{ url('/erpnext-implementation/erpnext-for-education-institutions') }}" class="text-decoration-none">ERPNext for Education Institutions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Resources</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/blog') }}" class="text-decoration-none">Blog</a></li>
                            <li><a href="{{ url('/free-digital-consultation') }}" class="text-decoration-none">Free Consultation</a></li>
                            <li><a href="{{ url('/delivery-engagement-models') }}" class="text-decoration-none">Engagement Models</a></li>
                            <li><a href="{{ url('/category/case-study') }}" class="text-decoration-none">Case Study</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-primary"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-linkedin fa-2x"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
