@extends('layouts.app')

@section('title', 'Supply Chain & Logistics Software Development for SMEs - Gnosysdigital')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="py-5 text-white position-relative overflow-hidden"
    style="
        background-image: url('https://gnosysdigital.com/wp-content/uploads/2025/11/close-up-server-room-employee-analyzing-equipment-metrics-device-screen-scaled.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        min-height: 520px;
    ">
    {{-- Dark overlay --}}
    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background: linear-gradient(135deg, rgba(10,37,64,0.92) 0%, rgba(14,52,96,0.88) 60%, rgba(22,61,110,0.84) 100%); z-index:1;"></div>

    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <p class="lead mb-3 mt-5 fw-semibold" style="color: rgba(255,255,255,.75); letter-spacing:.3px; font-size: 1.1rem;">
                    Your Supply Chain Is Unique. Your Software Should Be Too.
                </p>
                <h1 class="display-4 fw-bold mb-4 text-white" style="line-height:1.2; font-size: 2.5rem;">
                    You don't need another off-the-shelf ERP.<br>You need software that fits the way your business actually runs.
                </h1>
                <p class="lead mb-5" style="color: rgba(255,255,255,.72); max-width:680px; margin:0 auto 2rem; font-size: 1.1rem;">
                    Every manufacturer has its own processes, partners, and pain points.
                    At Gnosys Digital, we build custom Supply Chain &amp; Logistics software
                    designed exactly around your workflow — not someone else's.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap pb-5">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-light btn-lg fw-semibold px-4">
                        <i class="fas fa-comments me-2"></i>Talk to a Solutions Expert
                    </a>
                    <a href="{{ url('/category/case-study') }}" class="btn btn-outline-light btn-lg fw-semibold px-4">
                        <i class="fas fa-briefcase me-2"></i>Explore Past Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== REALITY OF SME SUPPLY CHAINS ===================== --}}
<section class="py-5 bg-light" data-aos="fade-up" data-aos-delay="500">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="600">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="font-size: 2rem;">The Reality of SME Supply Chains</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="700">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal" style="font-size: 1.2rem;">
                    No two manufacturers are the same — so why use the same software?
                </h5>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #0a2540;">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-truck fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-1" style="font-size: 1.1rem;">Different Dispatch Models</h5>
                            <p class="mb-0 text-muted" style="font-size: 0.95rem;">Some deliver via transporters, others via distributors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #28a745;">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-file-alt fa-2x text-success"></i>
                        </div>
                        <div>
                            <h5 class="mb-1" style="font-size: 1.1rem;">Manual LR &amp; Paper Processes</h5>
                            <p class="mb-0 text-muted" style="font-size: 0.95rem;">Nothing integrates across departments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #ffc107;">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-eye-slash fa-2x text-warning"></i>
                        </div>
                        <div>
                            <h5 class="mb-1" style="font-size: 1.1rem;">No Real-Time Tracking</h5>
                            <p class="mb-0 text-muted" style="font-size: 0.95rem;">Once it leaves the gate, visibility disappears.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #17a2b8;">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-unlink fa-2x text-info"></i>
                        </div>
                        <div>
                            <h5 class="mb-1" style="font-size: 1.1rem;">Disconnected Data</h5>
                            <p class="mb-0 text-muted" style="font-size: 0.95rem;">Tally, WhatsApp, and Excel — none talk to each other.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #dc3545;">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-hourglass-half fa-2x text-danger"></i>
                        </div>
                        <div>
                            <h5 class="mb-1" style="font-size: 1.1rem;">ERP Overkill</h5>
                            <p class="mb-0 text-muted" style="font-size: 0.95rem;">Big-brand systems cost too much and fit too little.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="600">
                <p class="lead fw-semibold" style="font-size: 1.2rem;">
                    You get a system that feels native to your business — because it's built from it.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHAT WE BUILD ===================== --}}
<section class="py-5">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="font-size: 2rem;">What We Build for You</h2>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal" style="font-size: 1.2rem;">
                    From warehouse to dealer — we design your digital backbone.
                </h5>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
                <p class="text-muted" style="font-size: 1rem;">
                    We design and develop custom supply chain platforms that give you total visibility and control —
                    built around your business logic, your partners, and your workflows.
                </p>
            </div>
        </div>

        {{-- Modules Table --}}
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12">
                <h5 class="fw-bold mb-3" style="font-size: 1.3rem;">Custom Solutions We Can Build:</h5>
                <div class="table-responsive rounded-3 shadow-sm border">
                    <table class="table table-bordered table-hover mb-0 align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th style="width:220px;">Function</th>
                                <th>Custom Solution Examples</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">Dispatch Management</td>
                                <td class="text-muted">Digital gate pass, dispatch slips, vehicle tracking</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Transporter Integration</td>
                                <td class="text-muted">Assign, track, and reconcile shipments</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Warehouse Sync</td>
                                <td class="text-muted">Real-time stock across multiple locations</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Dealer / Distributor Portal</td>
                                <td class="text-muted">Place orders, track deliveries, manage returns</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Delivery Proof</td>
                                <td class="text-muted">Photo, signature, or QR confirmation</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">KPI Dashboards</td>
                                <td class="text-muted">Delivery performance, order turnaround, cost metrics</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">ERP / Tally Integration</td>
                                <td class="text-muted">Live sync for accounts and invoices</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Automation</td>
                                <td class="text-muted">Alerts, escalations, and reporting rules</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- CTA Button --}}
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ url('/free-digital-consultation') }}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-comments me-2"></i>Discuss Your Requirements
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===================== DEVELOPMENT PROCESS ===================== --}}
<section class="py-5 bg-light" data-aos="fade-up">
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold">How We Work</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">From process mapping to deployment — end-to-end custom development.</h5>
            </div>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-search-location fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Discovery &amp; Process Mapping</h5>
                    <p class="text-muted mb-0">We study your current supply chain and identify digital touchpoints.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-drafting-compass fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Blueprint &amp; UX Design</h5>
                    <p class="text-muted mb-0">You see screen flows, approval logic, and dashboard samples — before we code.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Development &amp; Integration</h5>
                    <p class="text-muted mb-0">Built on Laravel full stack, API-ready, scalable, and secure.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Training &amp; Go-Live</h5>
                    <p class="text-muted mb-0">We deploy, train your staff, and fine-tune post-launch.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="500">
                <p class="lead fw-semibold fst-italic">Our approach feels like an IT partner — not a software vendor.</p>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHY CUSTOM SOFTWARE ===================== --}}
<section class="py-5">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Why Custom Development Wins for SMEs</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">Because one-size software never fits Indian manufacturing.</h5>
            </div>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <ul class="list-unstyled mb-4">
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Tailored to your existing process, not the other way around.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Lower cost and faster implementation than ERP platforms.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Integrates seamlessly with your current tools — Tally, Excel, WhatsApp.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Future-ready — we build it modularly so you can add features later.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Local development, support, and training.</span>
                    </li>
                </ul>
                <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-clipboard-check me-2"></i>Schedule a Consultation
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <img
                    src="https://gnosysdigital.com/wp-content/uploads/2025/11/22112361_6534495.jpg"
                    alt="Supply Chain Software"
                    class="img-fluid rounded-3 shadow"
                    style="max-height:380px; width:100%; object-fit:cover;"
                >
            </div>
        </div>
    </div>
</section>

{{-- ===================== TECHNOLOGY & CAPABILITIES ===================== --}}
<section class="py-5" style="background-color: #0a2540;">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="color: #ffffff !important;">Technology &amp; Capabilities</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="fw-normal" style="color: rgba(255,255,255,0.65) !important;">
                    Modern tech, tailored to your business.
                </h5>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9" data-aos="fade-up" data-aos-delay="200">
                <div class="rounded-3 overflow-hidden" style="border: 1px solid rgba(255,255,255,0.15);">
                    <table class="table mb-0 align-middle" style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr style="background: rgba(255,255,255,0.1);">
                                <th class="py-3 px-4 fw-bold"
                                    style="width:180px; color:#f5a623 !important; border-color:rgba(255,255,255,0.12) !important; font-size:0.9rem; letter-spacing:0.5px;">
                                    Area
                                </th>
                                <th class="py-3 px-4 fw-bold"
                                    style="color:#f5a623 !important; border-color:rgba(255,255,255,0.12) !important; font-size:0.9rem; letter-spacing:0.5px;">
                                    Tools &amp; Tech
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Backend</td>
                                <td class="px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Laravel (PHP 8+), MySQL, Redis, REST APIs</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Frontend</td>
                                <td class="px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">React / Vue + Tailwind CSS</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Mobile Access</td>
                                <td class="px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Progressive Web App (offline-ready)</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Integration</td>
                                <td class="px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Tally, SAP B1, Zoho, WhatsApp, SMS Gateways</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Hosting</td>
                                <td class="px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">AWS / DigitalOcean / On-premise</td>
                            </tr>
                            <tr style="background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">Security</td>
                                <td class="px-4 py-3" style="color:rgba(0,0,0,0.85) !important; border-color:rgba(255,255,255,0.08) !important;">JWT Auth, Role-based Access, Data Encryption</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-center mt-4" style="color:rgba(255,255,255,0.5); font-size:0.9rem;">
                    Built like enterprise software — <strong style="color:rgba(255,255,255,0.8);">customized for SME realities.</strong>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ===================== ENGAGEMENT MODELS ===================== --}}
<section class="py-5" style="background: linear-gradient(135deg, #0a2540 0%, #0e3460 60%, #163d6e 100%);">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-white">Engagement Models</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="fw-normal" style="color:rgba(255,255,255,.65);">Flexible engagement. Real partnership.</h5>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow bg-white" style="border-top:4px solid #e8532a !important; border-radius:14px;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="fas fa-project-diagram text-primary me-2"></i>Fixed Scope Project
                        </h4>
                        <p class="text-muted mb-4">
                            You have a clear requirement. We build it end-to-end with milestones, pricing, and delivery timelines.
                        </p>
                        <a href="{{ url('/contact') }}" class="btn btn-primary">
                            <i class="fas fa-envelope me-2"></i>Get Proposal
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow bg-white" style="border-top:4px solid #e8532a !important; border-radius:14px;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="fas fa-handshake text-primary me-2"></i>Dedicated Development Partner
                        </h4>
                        <p class="text-muted mb-4">
                            You want a long-term tech partner. Hire a Gnosys team to continuously develop, maintain, and evolve your system.
                        </p>
                        <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-primary">
                            <i class="fas fa-comments me-2"></i>Discuss Partnership
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow bg-white" style="border-top:4px solid #e8532a !important; border-radius:14px;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="fas fa-cogs text-primary me-2"></i>Process + Tech Consulting
                        </h4>
                        <p class="text-muted mb-4">
                            Unsure where to start? We'll map your workflows, define requirements, and recommend the right tech path.
                        </p>
                        <a href="{{ url('/free-digital-consultation') }}" class="btn btn-outline-primary">
                            <i class="fas fa-phone me-2"></i>Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHY GNOSYS DIGITAL ===================== --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Why Gnosys Digital</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">We bring enterprise thinking to SME manufacturing.</h5>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <ul class="list-unstyled mb-5">
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="300">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">1</span>
                        <span>10+ years of experience building systems for manufacturing, logistics, and service operations.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="400">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">2</span>
                        <span>Proven expertise in Laravel full-stack architecture.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="500">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">3</span>
                        <span>Deep understanding of Indian supply chain workflows.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="600">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">4</span>
                        <span>Strong focus on ROI, usability, and adoption — not just code.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3" data-aos="fade-right" data-aos-delay="700">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">5</span>
                        <span>Transparent delivery models and post-launch support.</span>
                    </li>
                </ul>
                <div class="text-center" data-aos="fade-up" data-aos-delay="800">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-primary btn-lg px-5">
                        <i class="fas fa-comments me-2"></i>Talk to Gnosys Solutions Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection