@extends('layouts.app')

@section('title', 'ERPNext Implementation - Gnosysdigital')

@section('content')

    {{-- ===================== HERO SECTION ===================== --}}
    <section class="py-5 text-white position-relative overflow-hidden" style="
                                                                                        background-image: url('https://gnosysdigital.com/wp-content/uploads/2025/11/close-up-server-room-employee-analyzing-equipment-metrics-device-screen-scaled.jpg');
                                                                                        background-size: cover;
                                                                                        background-position: center center;
                                                                                        background-repeat: no-repeat;
                                                                                        min-height: 520px;
                                                                                    ">
        {{-- Dark overlay --}}
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(135deg, rgba(10,37,64,0.92) 0%, rgba(14,52,96,0.88) 60%, rgba(22,61,110,0.84) 100%); z-index:1;">
        </div>

        <div class="container position-relative" style="z-index:2;">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="lead mb-3 mt-5 fw-semibold"
                        style="color: rgba(255,255,255,.75); letter-spacing:.3px; font-size: 1.1rem;">
                        One Platform. Every Department. Zero Licensing Fees.
                    </p>
                    <h1 class="display-4 fw-bold mb-4 text-white" style="line-height:1.2; font-size: 2.5rem;">
                        Run Your Entire Business from One Place — Starting at ₹50,000.
                    </h1>
                    <p class="lead mb-5"
                        style="color: rgba(255,255,255,.72); max-width:680px; margin:0 auto 2rem; font-size: 1.1rem;">
                        ERPNext is open-source, modular, and designed for SMEs who want control, scalability, and savings.
                        We implement it in 4–6 weeks — configured around your workflows, not the other way around.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap pb-5">
                        <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-light btn-lg fw-semibold px-4">
                            <i class="fas fa-cogs me-2"></i>Get My ERP Implementation Plan
                        </a>
                        <a href="{{ url('/free-digital-consultation') }}"
                            class="btn btn-outline-light btn-lg fw-semibold px-4">
                            <i class="fas fa-comments me-2"></i>Talk to an Expert
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== OPEN SOURCE ADVANTAGE SECTION ===================== --}}
    <section class="py-5 bg-light" data-aos="fade-up" data-aos-delay="500">
        <div class="container">
            <div class="row mb-3" data-aos="fade-up" data-aos-delay="600">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2rem;">ERPNext eliminates recurring license costs — forever.</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="700">
                    <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-rocket me-2"></i>Get My Free ERP Assessment →
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== ERP MODULES SECTION ===================== --}}
    <section class="py-5">
        <div class="container">
            <div class="row mb-3" data-aos="fade-up">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2rem;">The Gnosys ERPNext Engine — Built for SME Growth</h2>
                </div>
            </div>
            <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 text-center">
                    <p class="text-muted" style="font-size: 1.1rem;">
                        We combine deep business understanding, technical precision, and industry-specific customization to
                        deliver an ERP that works the way your business does.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #0a2540;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #0a2540;">
                                <i class="fas fa-file-invoice-dollar me-2"></i>Accounting & Finance
                            </h4>
                            <p class="mb-2" style="font-size: 1rem;">
                                Manage invoices, ledgers, tax reports, and financial statements in real-time — with full
                                audit trails.
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>Result:</strong> Zero manual reconciliation, GST-ready reporting.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #28a745;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #28a745;">
                                <i class="fas fa-warehouse me-2"></i>Inventory & Stock
                            </h4>
                            <p class="mb-2" style="font-size: 1rem;">
                                Track stock levels, batches, serial numbers, and warehouse transfers effortlessly across
                                locations.
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>Result:</strong> 30–40% reduction in stockouts and overstock.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #ffc107;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #ffc107;">
                                <i class="fas fa-industry me-2"></i>Manufacturing & Production
                            </h4>
                            <p class="mb-2" style="font-size: 1rem;">
                                Manage production planning, BOMs, job cards, and material flow from a single dashboard.
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>Result:</strong> 50% faster production cycles, real-time cost visibility.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #17a2b8;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #17a2b8;">
                                <i class="fas fa-users me-2"></i>HR & Payroll
                            </h4>
                            <p class="mb-2" style="font-size: 1rem;">
                                Employee records, attendance, leave management, and automated salary slips — all in one
                                place.
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>Result:</strong> Payroll processed in minutes, not days.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #dc3545;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #dc3545;">
                                <i class="fas fa-handshake me-2"></i>CRM & Sales
                            </h4>
                            <p class="mb-2" style="font-size: 1rem;">
                                Automate leads, quotes, follow-ups, and order pipelines to close deals faster.
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>Result:</strong> 4× increase in demo bookings and pipeline visibility.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="700">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #6f42c1;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #6f42c1;">
                                <i class="fas fa-cloud me-2"></i>Cloud & Remote Access
                            </h4>
                            <p class="mb-2" style="font-size: 1rem;">
                                Work from anywhere with role-based permissions, cloud hosting, and mobile-ready interfaces.
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>Result:</strong> Full team access — anytime, anywhere, any device.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== IMPACT SECTION ===================== --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-3" data-aos="fade-up">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2rem;">Impact</h2>
                </div>
            </div>
            <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 text-center">
                    <h5 class="text-muted fw-normal" style="font-size: 1.2rem;">
                        Tailored ERPNext for Every Industry
                    </h5>
                </div>
            </div>
            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-12 text-center">
                    <p class="text-muted" style="font-size: 1rem;">
                        Every business is unique — so is your ERP setup. We craft industry-specific implementation
                        blueprints that align with your existing workflows, team structure, and compliance requirements.
                    </p>
                </div>
            </div>

            {{-- Impact Metrics --}}
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow" style="border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="row text-center">
                                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="impact-metric">
                                        <h3 class="fw-bold text-primary mb-2" style="font-size: 2.5rem;">4–6 Weeks</h3>
                                        <p class="text-muted mb-0">Go-Live Timeline</p>
                                        <small class="text-muted">From kickoff to full deployment</small>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="impact-metric">
                                        <h3 class="fw-bold text-success mb-2" style="font-size: 2.5rem;">₹0</h3>
                                        <p class="text-muted mb-0">Recurring License Cost</p>
                                        <small class="text-muted">ERPNext is 100% open-source (GPL)</small>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                                    <div class="impact-metric">
                                        <h3 class="fw-bold text-warning mb-2" style="font-size: 2.5rem;">↓ 30–40%</h3>
                                        <p class="text-muted mb-0">Operational Overhead</p>
                                        <small class="text-muted">Through automation and integration</small>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                                    <div class="impact-metric">
                                        <h3 class="fw-bold text-info mb-2" style="font-size: 2.5rem;">50% Faster</h3>
                                        <p class="text-muted mb-0">Procurement Cycles</p>
                                        <small class="text-muted">Real-time visibility across all sites</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="700">
                                    <div class="impact-metric">
                                        <h3 class="fw-bold text-danger mb-2" style="font-size: 2.5rem;">Starting ₹50,000
                                        </h3>
                                        <p class="text-muted mb-0">Fixed-Cost Implementation</p>
                                        <small class="text-muted">No enterprise pricing traps. Ever.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="800">
                                    <blockquote class="blockquote">
                                        <p class="mb-0 fst-italic" style="font-size: 1.1rem;">
                                            "If your ERP doesn't adapt to your business, it's not an ERP — it's a
                                            constraint."
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="900">
                    <a href="{{ url('/category/case-study') }}" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-search me-2"></i>Explore Industry Use Cases
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CLIENT RESULTS ===================== --}}
    <section class="py-5">
        <div class="container">
            <div class="row mb-3" data-aos="fade-up">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2rem;">Real Clients. Real Results.</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-top: 4px solid #0a2540;">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-hard-hat fa-3x text-primary"></i>
                            </div>
                            <h4 class="fw-bold mb-3">EPC / Construction Firm</h4>
                            <p class="text-muted mb-3">
                                Procurement cycle cut from 21 days to 10 days across 8 active project sites
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>→</strong> 12% cost savings identified in the first quarter itself
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-top: 4px solid #28a745;">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-industry fa-3x text-success"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Manufacturing SME</h4>
                            <p class="text-muted mb-3">
                                Production planning, BOMs, and material flow automated end-to-end
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>→</strong> 30% improvement in project margins through accurate costing
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-top: 4px solid #ffc107;">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-heartbeat fa-3x text-warning"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Healthcare Clinic</h4>
                            <p class="text-muted mb-3">
                                OPD, pharmacy, lab, billing, and payroll unified on a single platform
                            </p>
                            <div class="alert alert-success mb-0">
                                <strong>→</strong> 55% increase in appointment bookings via workflow automation
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== PROCESS SECTION ===================== --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-3" data-aos="fade-up">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2rem;">ERP That Starts with Your Workflows. Ends with Results.
                    </h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-search fa-3x text-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Discover</h5>
                            <p class="text-muted mb-0">
                                Deep requirement analysis & process mapping
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-tasks fa-3x text-success"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Design</h5>
                            <p class="text-muted mb-0">
                                Module selection, customization blueprint & KPI roadmap
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-rocket fa-3x text-warning"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Deploy</h5>
                            <p class="text-muted mb-0">
                                Installation, configuration, data migration & training
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-trophy fa-3x text-danger"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Deliver</h5>
                            <p class="text-muted mb-0">
                                Go-live support, bug fixes & post-launch handover
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow" style="border-radius: 12px; border-left: 4px solid #17a2b8;">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3" style="color: #17a2b8;">
                                <i class="fas fa-crown me-2"></i>Dominate
                            </h4>
                            <p class="text-muted mb-0">
                                Continuous optimization, module expansion & authority scaling
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CTA SECTION ===================== --}}
    <section class="py-5" style="background: linear-gradient(135deg, #0a2540 0%, #0e3460 60%, #163d6e 100%);">
        <div class="container">
            <div class="row mb-3" data-aos="fade-up">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-white" style="font-size: 2rem;">Let's Turn Your Operations into a Competitive
                        Advantage</h2>
                </div>
            </div>
            <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 text-center">
                    <p class="text-white" style="font-size: 1.2rem;">
                        Your business deserves an ERP that works for you — not against you. Let's build it together.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ url('/free-digital-consultation') }}" class="btn btn-light btn-lg fw-semibold px-4">
                            <i class="fas fa-cogs me-2"></i>Request a Free ERP Assessment
                        </a>
                        <a href="{{ url('/growth-systems-discovery-call') }}"
                            class="btn btn-outline-light btn-lg fw-semibold px-4">
                            <i class="fas fa-phone me-2"></i>Schedule a Discovery Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection