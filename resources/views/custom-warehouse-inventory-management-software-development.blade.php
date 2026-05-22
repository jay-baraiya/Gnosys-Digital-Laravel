@extends('layouts.app')

@section('title', 'Custom Warehouse & Inventory Management Software Development - Gnosysdigital')

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
                <p class="lead mb-3 mt-5 fw-semibold" style="color: rgba(255,255,255,.75); letter-spacing:.3px;">
                    Every Warehouse Is Different. Your Software Should Be Too.
                </p>
                <h1 class="display-5 fw-bold mb-4 text-white" style="line-height:1.2;">
                    Your stock process is unique.<br>Your system should match it — not fight it.
                </h1>
                <p class="lead mb-5" style="color: rgba(255,255,255,.72); max-width:680px; margin:0 auto 2rem;">
                    From inbound goods to final dispatch, no two warehouses operate the same way.
                    Gnosys Digital builds custom Warehouse &amp; Inventory Management Systems
                    that mirror your workflow — not a generic template.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap pb-5">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-light btn-lg fw-semibold px-4">
                        <i class="fas fa-comments me-2"></i>Talk to a Warehouse Solutions Expert
                    </a>
                    <a href="{{ url('/category/case-study') }}" class="btn btn-outline-light btn-lg fw-semibold px-4">
                        <i class="fas fa-briefcase me-2"></i>Explore Our Work
                    </a>
                </div>
            </div>
        </div>  
    </div>
</section>

{{-- ===================== WHY OFF-THE-SHELF FAILS ===================== --}}
<section class="py-5 bg-light" data-aos="fade-up" data-aos-delay="500">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="600">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Why Off-the-Shelf Software Doesn't Work</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="700">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">
                    You've tried Excel. You've seen ERPs. But neither fits how your warehouse actually runs.
                </h5>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-cubes fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Too Generic</h5>
                            <p class="mb-0 text-muted">Ready-made systems force you to follow their structure.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-file-excel fa-2x text-success"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Too Manual</h5>
                            <p class="mb-0 text-muted">Excel sheets break every time there's a new SKU or batch.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-unlink fa-2x text-warning"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Too Isolated</h5>
                            <p class="mb-0 text-muted">Tally, stores, and dispatch all speak different languages.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-chart-line fa-2x text-info"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">No Real Insights</h5>
                            <p class="mb-0 text-muted">You track stock, but not efficiency or movement trends.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex align-items-start gap-3 p-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-hourglass-half fa-2x text-danger"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Too Slow to Adapt</h5>
                            <p class="mb-0 text-muted">One change in process = chaos in data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="600">
                <p class="lead fw-semibold">
                    You don't need more software — you need software that understands your warehouse.
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
                <h2 class="fw-bold">What We Build for You</h2>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">
                    From racks to reconciliation — we design your digital warehouse, your way.
                </h5>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
                <p class="text-muted">
                    At Gnosys Digital, we custom-build Warehouse &amp; Inventory Management Systems for SME manufacturers.
                    Every module, workflow, and report is designed around your physical space, your stock types, and your process logic.
                </p>
            </div>
        </div>

        {{-- Modules Table --}}
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12">
                <h5 class="fw-bold mb-3">Typical Modules We Develop:</h5>
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
                                <td class="fw-semibold">Inbound &amp; GRN</td>
                                <td class="text-muted">Receive material, verify quantities, auto-update stock.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Bin &amp; Location Management</td>
                                <td class="text-muted">Assign unique bin IDs, map real warehouse layout.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Stock Movement Tracking</td>
                                <td class="text-muted">Record internal transfers, returns, and consumption.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Barcode / QR Integration</td>
                                <td class="text-muted">Label and scan items for instant traceability.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Multi-Warehouse Control</td>
                                <td class="text-muted">Manage central + branch warehouses in one system.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Dispatch Sync</td>
                                <td class="text-muted">Link finished goods with orders for dispatch planning.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Inventory Audits</td>
                                <td class="text-muted">Cycle counting, reconciliation, and variance reporting.</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Tally / ERP Integration</td>
                                <td class="text-muted">Auto-sync purchase, sale, and stock ledgers.</td>
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

        {{-- Flowchart Image — "Logistics & Inventory Flow" --}}
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <img
                    src="{{ asset('images/vaibhav_flowchart2-e1763625153230.png') }}"
                    alt="Logistics & Inventory Flow"
                    class="img-fluid"
                    style="max-width:100%; height:auto; border-radius:12px;"
                >
            </div>
        </div>
    </div>
</section>

{{-- ===================== DEVELOPMENT PROCESS ===================== --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Our Development Process</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">We don't sell software. We engineer it around you.</h5>
            </div>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-search-location fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Process Mapping &amp; Discovery</h5>
                    <p class="text-muted mb-0">We study how your warehouse operates — racks, bins, item types, approval steps.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-drafting-compass fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Blueprint &amp; Design</h5>
                    <p class="text-muted mb-0">We visualize your process digitally: screens, data flow, and reports before development begins.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Development &amp; Integration</h5>
                    <p class="text-muted mb-0">Built on Laravel full stack, with APIs, role management, and modular structure.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="p-3">
                    <div class="mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Training &amp; Deployment</h5>
                    <p class="text-muted mb-0">We onboard your staff, integrate with Tally or ERP, and provide long-term support.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="500">
                <p class="lead fw-semibold fst-italic">It's not "plug &amp; play" — it's "plan &amp; perfect."</p>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHY CUSTOM WAREHOUSE SOFTWARE ===================== --}}
<section class="py-5">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Why Custom Warehouse Software Wins</h2>
            </div>
        </div>
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center">
                <h5 class="text-muted fw-normal">Because no ready-made tool can match your real-world operations.</h5>
            </div>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <ul class="list-unstyled mb-4">
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Custom workflows built around your team, not generic templates.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Scalable architecture — start small, expand later.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Easy integration with existing accounting tools (Tally, Excel, Zoho, SAP B1).</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Role-based access and audit trails for complete accountability.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 flex-shrink-0"></i>
                        <span>Localized support — Indian developers, Indian warehouse realities.</span>
                    </li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-clipboard-check me-2"></i>Book a Free Process Audit
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <img
                    src="https://gnosysdigital.com/wp-content/uploads/2025/11/close-up-server-room-employee-analyzing-equipment-metrics-device-screen-scaled.jpg"
                    alt="Warehouse Software"
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
                    We use enterprise technology — sized for SME scale.
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
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Backend</td>
                                <td class="px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Laravel (PHP 8+), MySQL, Redis</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Frontend</td>
                                <td class="px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Vue / React + Tailwind CSS</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Mobile Access</td>
                                <td class="px-4 py-3" style="color:color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">PWA for dealers + optional Android/iOS apps</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Integrations</td>
                                <td class="px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Tally, Zoho, SAP B1, WhatsApp API, Email/SMS</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Hosting</td>
                                <td class="px-4 py-3" style="color:color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">AWS / DigitalOcean / On-premise</td>
                            </tr>
                            <tr style="background: rgba(255,255,255,0.03);">
                                <td class="fw-semibold px-4 py-3" style="color:rgba(0, 0, 0, 0.85) !important; border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Security</td>
                                <td class="px-4 py-3" style="color:color:rgba(0, 0, 0, 0.85) !important;border-color:rgba(255,255,255,0.08) !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">JWT Auth, RBAC, Encryption, Audit Logs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-center mt-4" style="color:rgba(255,255,255,0.5); font-size:0.9rem;">
                    Built like enterprise software — <strong style="color:rgba(255,255,255,0.8);">implemented like a partner.</strong>
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
                <h5 class="fw-normal" style="color:rgba(255,255,255,.65);">We fit into your process — and your budget.</h5>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow bg-white" style="border-top:4px solid #e8532a !important; border-radius:14px;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="fas fa-project-diagram text-primary me-2"></i>Fixed-Scope Project
                        </h4>
                        <p class="text-muted mb-4">
                            Have a clear idea? We'll build exactly what you define — with timeline, milestones, and cost clarity.
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
                            <i class="fas fa-handshake text-primary me-2"></i>Long-Term Development Partner
                        </h4>
                        <p class="text-muted mb-4">
                            Need an ongoing partner? Hire our dedicated Laravel team to evolve your system continuously.
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
                            Unsure where to start? We'll map your warehouse flow and design a system blueprint before you invest.
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
                <h5 class="text-muted fw-normal">We bring enterprise thinking to SME warehouses.</h5>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <ul class="list-unstyled mb-5">
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="300">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">1</span>
                        <span>10+ years in building systems for manufacturing &amp; logistics.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="400">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">2</span>
                        <span>Deep domain understanding of SME-scale warehouse ops.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="500">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">3</span>
                        <span>Strong Laravel expertise for scalable, maintainable systems.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3 border-bottom" data-aos="fade-right" data-aos-delay="600">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">4</span>
                        <span>Transparent pricing and agile delivery.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 py-3" data-aos="fade-right" data-aos-delay="700">
                        <span class="d-flex align-items-center justify-content-center rounded-2 fw-bold text-white flex-shrink-0"
                              style="background:#0a2540; width:30px; height:30px; font-size:0.85rem;">5</span>
                        <span>Full training, support, and future enhancements built-in.</span>
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
