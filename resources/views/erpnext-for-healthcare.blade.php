@extends('layouts.app')

@section('title', 'ERPNext for Healthcare - Gnosysdigital')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="text-white position-relative overflow-hidden d-flex align-items-center"
    style="min-height: 600px;">
    
    {{-- Healthcare Background Image --}}
    <img src="https://gnosysdigital.com/wp-content/uploads/2025/11/healthcare-erp-hero-scaled.jpg" 
         alt="Healthcare Background" 
         class="position-absolute top-0 start-0 w-100 h-100"
         style="object-fit: cover; z-index:1;">
    
    {{-- Dark overlay --}}
    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background: linear-gradient(135deg, rgba(10,37,64,0.93) 0%, rgba(14,52,96,0.90) 60%, rgba(22,61,110,0.87) 100%); z-index:2;"></div>

    <div class="container position-relative w-100" style="z-index:3; padding-top: 80px; padding-bottom: 80px;">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <p class="lead mb-3 fw-semibold" style="color: rgba(255,255,255,.75); letter-spacing:.3px; font-size: 1.1rem;">
                    ERPNext for Healthcare — Digital Systems for Clinics, Hospitals & Labs
                </p>
                <h1 class="display-4 fw-bold mb-4 text-white" style="line-height:1.2; font-size: 2.5rem;">
                    Transform your healthcare operations with one unified, open-source platform.
                </h1>
                <p class="lead mb-5" style="color: rgba(255,255,255,.72); max-width:680px; margin:0 auto 2rem; font-size: 1.1rem;">
                    From patient registration to pharmacy inventory, labs to billing — ERPNext turns your medical practice into a streamlined, compliant, and data-driven institution.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-light btn-lg fw-semibold px-4">
                        <i class="fas fa-phone me-2"></i>Book a Free Healthcare-ERP Discovery Call
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHY CHOOSE ERPNEXT ===================== --}}
<section class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">Why Healthcare Businesses Choose ERPNext</p>
                <h2 class="fw-bold" style="font-size: 2rem;">Complete Workflow Coverage with Zero Licensing Costs</h2>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8 mx-auto text-center">
                <p class="text-muted" style="font-size: 1.05rem;">
                    ERPNext helps you run your entire healthcare facility from one place — with zero recurring license costs. It's open-source, modular, and designed for healthcare businesses who want control, scalability, and savings.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #0a2540;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-hospital fa-3x text-primary"></i></div>
                        <h5 class="fw-bold mb-3">Complete Workflow Coverage</h5>
                        <p class="text-muted mb-0">OPD, IPD, lab, pharmacy, billing, HR, inventory & more — all modules integrated under one roof.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #28a745;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-dollar-sign fa-3x text-success"></i></div>
                        <h5 class="fw-bold mb-3">No Licensing Fee</h5>
                        <p class="text-muted mb-0">ERPNext is open-source (GPL-licensed), reducing upfront software costs and avoiding recurring license fees.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #ffc107;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-cogs fa-3x text-warning"></i></div>
                        <h5 class="fw-bold mb-3">Customizable & Scalable</h5>
                        <p class="text-muted mb-0">Adjust system to your clinic/hospital size: from small clinics to large multi-department hospitals; add or remove modules as needed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #17a2b8;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-shield-alt fa-3x text-info"></i></div>
                        <h5 class="fw-bold mb-3">Compliance & Data Safety</h5>
                        <p class="text-muted mb-0">Manage patient records, clinical data, billing, and employee data — with audit trails, role-based access, and compliance readiness for healthcare regulations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #6f42c1;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-cube fa-3x text-danger"></i></div>
                        <h5 class="fw-bold mb-3">All-in-One ERP + HMS</h5>
                        <p class="text-muted mb-0">Not just a Healthcare Management System; you get ERP features for accounting, payroll, inventory, asset management, purchasing — useful for hospitals/clinics running multiple functions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #e83e8c;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-globe fa-3x" style="color: #e83e8c;"></i></div>
                        <h5 class="fw-bold mb-3">Global & Local Affordable Implementation</h5>
                        <p class="text-muted mb-0">As a Gnosys Digital offering, you get expert implementation, customization & support — priced for small/mid-size to large healthcare businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== MODULE TABLE SECTION ===================== --}}
<section class="py-5">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">What ERPNext Healthcare Can Manage</p>
                <h2 class="fw-bold" style="font-size: 2rem;">Modules Built for Every Healthcare Workflow</h2>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12">
                <div class="card border-0 shadow" style="border-radius: 12px; overflow: hidden;">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" style="font-size: 1rem;">
                            <thead style="background: #0a2540; color: #fff;">
                                <tr>
                                    <th class="py-3 px-4">Module / Functionality</th>
                                    <th class="py-3 px-4">Ideal For</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3 px-4">
                                        <strong>Patient Management</strong> — registration, patient master data, patient history & medical records, encounter management
                                    </td>
                                    <td class="py-3 px-4 text-muted">Clinics, hospitals, multi-doctor practices</td>
                                </tr>
                                <tr class="table-light">
                                    <td class="py-3 px-4">
                                        <strong>Appointment Scheduling & Practitioner Calendars</strong>
                                    </td>
                                    <td class="py-3 px-4 text-muted">OPD clinics, multi-doctor hospitals, diagnostic centers</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">
                                        <strong>OPD / IPD Workflow</strong> — admissions, bed management, discharge processes, inpatient tracking
                                    </td>
                                    <td class="py-3 px-4 text-muted">Hospitals, multi-specialty centers</td>
                                </tr>
                                <tr class="table-light">
                                    <td class="py-3 px-4">
                                        <strong>Laboratory & Radiology Module</strong> — sample tracking, test requests, report generation, lab order management
                                    </td>
                                    <td class="py-3 px-4 text-muted">Labs, diagnostic centers, hospitals with in-house labs</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">
                                        <strong>Pharmacy & Inventory Management</strong> — drug stock, expiry tracking, reorder alerts, billing, integration with pharmacy & store
                                    </td>
                                    <td class="py-3 px-4 text-muted">Hospitals, clinics with pharmacy, drug store, dispensary</td>
                                </tr>
                                <tr class="table-light">
                                    <td class="py-3 px-4">
                                        <strong>Billing & Financials</strong> — patient billing, insurance/insurance claims (if needed), expense tracking, accounting integration
                                    </td>
                                    <td class="py-3 px-4 text-muted">Clinics, hospitals, diagnostic centers, multi-branch facilities</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">
                                        <strong>HR & Staff Management</strong> — doctor/nurse scheduling, payroll, leave/attendance, staff records, compliance & certification tracking
                                    </td>
                                    <td class="py-3 px-4 text-muted">Hospitals, clinics, labs, healthcare centers</td>
                                </tr>
                                <tr class="table-light">
                                    <td class="py-3 px-4">
                                        <strong>Asset & Equipment Management</strong> — manage medical equipment, maintenance schedules, asset tracking, depreciation / maintenance history
                                    </td>
                                    <td class="py-3 px-4 text-muted">Hospitals, labs, diagnostic centers, clinics with equipment</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">
                                        <strong>Reporting & Analytics</strong> — dashboards, appointment analytics, financial reports, lab test stats, occupancy, and resource utilization reports
                                    </td>
                                    <td class="py-3 px-4 text-muted">Hospital management, admin staff, decision makers</td>
                                </tr>
                                <tr class="table-light">
                                    <td class="py-3 px-4">
                                        <strong>Compliance & Audit Trail Support</strong> — Medical coding support (ICD-10, etc.), record of encounters, medication history, documentation for audits/standards
                                    </td>
                                    <td class="py-3 px-4 text-muted">Hospitals, clinics needing regulatory compliance & structured records</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== PAYROLL FEATURES ===================== --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">Automated Calculations</p>
                <h2 class="fw-bold" style="font-size: 2rem;">Payroll Management Hassle-Free & Accurate</h2>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8 mx-auto text-center">
                <p class="text-muted" style="font-size: 1.05rem;">
                    ERPNext Payroll simplifies salary management for hospitals, clinics, and labs:
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #0a2540;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-calculator fa-3x text-primary"></i></div>
                        <h5 class="fw-bold mb-2">Automated Calculations</h5>
                        <p class="text-muted mb-0">Wages, overtime, deductions, bonuses — all calculated accurately.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #28a745;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-clock fa-3x text-success"></i></div>
                        <h5 class="fw-bold mb-2">Integrate Attendance & Leave</h5>
                        <p class="text-muted mb-0">Payroll reflects real-time shifts and leave balances.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #ffc107;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-file-contract fa-3x text-warning"></i></div>
                        <h5 class="fw-bold mb-2">Compliance & Reporting</h5>
                        <p class="text-muted mb-0">Maintain audit-ready records and comply with local labor laws.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #17a2b8;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-user-check fa-3x text-info"></i></div>
                        <h5 class="fw-bold mb-2">Employee Self-Service</h5>
                        <p class="text-muted mb-0">Staff can view payslips, leave, and salary history online.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #6f42c1;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-expand-arrows-alt fa-3x text-danger"></i></div>
                        <h5 class="fw-bold mb-2">Scalable for Any Facility</h5>
                        <p class="text-muted mb-0">Works for small clinics to multi-department hospitals.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4" data-aos="fade-up" data-aos-delay="700">
            <div class="col-lg-8 mx-auto text-center">
                <div class="alert alert-success mb-0">
                    <strong>Outcome:</strong> Reduce errors, save HR time, and ensure staff are paid correctly and on time.
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHAT YOU GET — IMAGE + LIST ===================== --}}
<section class="py-5">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">What You Get with Gnosys Digital</p>
                <h2 class="fw-bold" style="font-size: 2rem;">Expert ERPNext Implementation for Healthcare</h2>
            </div>
        </div>

        <div class="row align-items-center g-5 mt-1">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                <img src="https://gnosysdigital.com/wp-content/uploads/2025/12/9551.jpg"
                     alt="ERPNext Healthcare Implementation"
                     class="img-fluid shadow"
                     style="border-radius: 12px; width: 100%;">
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                <ul class="list-unstyled mb-0" style="font-size: 1.05rem;">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>Requirement analysis & process mapping — we study your existing workflows, pain points, and compliance needs</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>ERPNext installation & configuration (cloud or self-hosted)</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>Module customization — doctor schedules, lab templates, pharmacy workflows, reporting layout, etc.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>Data migration/legacy data import (if migrating from Excel/Tally/other systems)</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>Training for staff — doctors, lab techs, admin, billing staff</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>Post-launch support — bug fixes, module tweaks, updates</span>
                    </li>
                    <li class="mb-0 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success me-3 mt-1" style="font-size: 1.2rem; flex-shrink:0;"></i>
                        <span>Integration with other systems (if required) — e.g., third-party lab, telemedicine, POS, etc.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ===================== KEY BENEFITS ===================== --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">Key Benefits</p>
                <h2 class="fw-bold" style="font-size: 2rem;">Key Benefits of ERPNext for Healthcare</h2>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #0a2540;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-chart-line fa-3x text-primary"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Unified financial & accounting + hospital operations — better insights, less manual reconciliation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #28a745;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-procedures fa-3x text-success"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Streamlined inpatient/outpatient workflows — from registration to discharge</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #ffc107;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-bolt fa-3x text-warning"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Faster patient registration and billing, less paperwork</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #17a2b8;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-user-md fa-3x text-info"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Better staff management — shifts, payroll, leaves, compliance tracking</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #6f42c1;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-notes-medical fa-3x" style="color:#6f42c1;"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Accurate, centralized patient records (medical history, diagnostics, prescriptions)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #e83e8c;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-shield-alt fa-3x" style="color:#e83e8c;"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Regulatory compliance readiness, audit trails, secure data management</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #fd7e14;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-pills fa-3x" style="color:#fd7e14;"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Efficient lab & pharmacy operations — no stockouts, expiry alerts, timely order processing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                <div class="card h-100 border-0 shadow text-center" style="border-radius: 12px; border-top: 4px solid #20c997;">
                    <div class="card-body p-4">
                        <div class="mb-3"><i class="fas fa-tachometer-alt fa-3x" style="color:#20c997;"></i></div>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">Reduced errors, improved resource utilization, and higher operational efficiency</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== WHO THIS IS FOR ===================== --}}
<section class="py-5">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">Who This Is For</p>
                <h2 class="fw-bold" style="font-size: 2rem;">This solution fits a wide range of healthcare organizations</h2>
            </div>
        </div>

        <div class="row g-3 justify-content-center mt-2" data-aos="fade-up" data-aos-delay="100">
            @foreach([
                ['icon' => 'fas fa-clinic-medical', 'color' => '#0a2540', 'label' => 'Small clinics & polyclinics'],
                ['icon' => 'fas fa-capsules', 'color' => '#28a745', 'label' => 'Pharmacies + supply chains'],
                ['icon' => 'fas fa-prescription-bottle-alt', 'color' => '#ffc107', 'label' => 'Pharmacies & dispensaries'],
                ['icon' => 'fas fa-hospital-alt', 'color' => '#17a2b8', 'label' => 'Multi-specialty hospitals'],
                ['icon' => 'fas fa-heartbeat', 'color' => '#6f42c1', 'label' => 'Nursing homes & rehabilitation centers'],
                ['icon' => 'fas fa-flask', 'color' => '#e83e8c', 'label' => 'Diagnostic labs & pathology centers'],
                ['icon' => 'fas fa-boxes', 'color' => '#fd7e14', 'label' => 'Medical device stores + inventory-heavy dispensaries'],
            ] as $item)
            <div class="col-md-4 col-lg-3">
                <div class="card border-0 shadow text-center h-100" style="border-radius: 12px; border-top: 4px solid {{ $item['color'] }};">
                    <div class="card-body p-3">
                        <i class="{{ $item['icon'] }} fa-2x mb-2" style="color: {{ $item['color'] }};"></i>
                        <p class="mb-0 fw-semibold" style="font-size: .95rem;">{{ $item['label'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== FAQ SECTION ===================== --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold text-primary mb-1" style="letter-spacing: 1px; font-size: .9rem;">FAQ</p>
                <h2 class="fw-bold" style="font-size: 2rem;">FAQ (Healthcare ERP Edition)</h2>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">

                    <div class="accordion-item border-0 shadow mb-3" style="border-radius: 12px; overflow: hidden;">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Does ERPNext require license fees?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                No — ERPNext is open-source (GPL). You pay only implementation and hosting costs.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow mb-3" style="border-radius: 12px; overflow: hidden;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can we start small and scale later (add more modules)?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Absolutely. ERPNext is modular. You can start with core modules (OPD, Pharmacy, Accounting) and expand as needed.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow mb-3" style="border-radius: 12px; overflow: hidden;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Is patient data secure?  
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes — ERPNext supports role-based access, audit trails, and secure storage. We can also help with additional hosting/security setup.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow mb-3" style="border-radius: 12px; overflow: hidden;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can we integrate with third-party labs/pharmacy systems/insurance software?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes. Because ERPNext is open-source and flexible, integrations are possible. We'll assess during the consultation.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow mb-3" style="border-radius: 12px; overflow: hidden;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What about training and support?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Gnosys Digital handles training of doctors, staff, admin, lab technicians — plus post-launch support, updates, and customizations.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== CTA SECTION ===================== --}}
<section class="py-5" style="background: linear-gradient(135deg, #0a2540 0%, #0e3460 60%, #163d6e 100%);">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up">
            <div class="col-12 text-center">
                <p class="text-uppercase fw-semibold mb-1" style="letter-spacing: 1px; font-size: .9rem; color: rgba(255,255,255,.6);">Next Step: Book Your Healthcare ERP Consultation</p>
                <h2 class="fw-bold text-white" style="font-size: 2rem;">Let's understand your facility and build the right system for you.</h2>
            </div>
        </div>
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8 mx-auto text-center">
                <p class="text-white" style="font-size: 1.1rem; opacity: .85;">
                    Let's understand your facility — its size, workflows, and goals — and propose a tailored implementation plan.
                    No obligation. Just clarity, practicality, and the right system.
                </p>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12 text-center">
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ url('/growth-systems-discovery-call') }}" class="btn btn-light btn-lg fw-semibold px-4">
                        <i class="fas fa-calendar-check me-2"></i>Schedule My Healthcare ERP Discovery Call
                    </a>
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-outline-light btn-lg fw-semibold px-4">
                        <i class="fas fa-comments me-2"></i>Book a Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }
    });
</script>
@endpush