@extends('layouts.app')

@section('title', 'Channel & Distribution Management Software Development - Gnosysdigital')

@push('styles')
<style>
    .channel-page {
        background: #f5f8fc;
    }

    .channel-hero {
        position: relative;
        overflow: hidden;
        padding: 140px 0 90px;
        background:
            radial-gradient(circle at top right, rgba(105, 196, 226, 0.20), transparent 32%),
            linear-gradient(135deg, #06253f 0%, #0c3e63 48%, #1f6f95 100%);
        color: #fff;
    }

    .channel-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px),
            linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
        background-size: 28px 28px;
        opacity: 0.16;
        pointer-events: none;
    }

    .channel-hero .container,
    .channel-section .container {
        position: relative;
        z-index: 1;
    }

    .channel-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.12);
        color: #dff5ff;
        font-size: 0.84rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 22px;
    }

    .channel-title,
    .channel-section h2,
    .channel-section h3 {
        color: #083b63;
    }

    .channel-title {
        color: #fff;
        font-size: clamp(2.4rem, 4.8vw, 4.35rem);
        line-height: 1.06;
        margin-bottom: 1.4rem;
    }

    .channel-intro {
        color: rgba(255, 255, 255, 0.88);
        font-size: 1.08rem;
        max-width: 640px;
        margin-bottom: 2rem;
    }

    .channel-hero-panel {
        background: rgba(255, 255, 255, 0.10);
        border: 1px solid rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(10px);
        border-radius: 28px;
        padding: 28px;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.18);
    }

    .channel-stat {
        border-top: 1px solid rgba(255, 255, 255, 0.16);
        padding-top: 14px;
        margin-top: 14px;
        color: rgba(255, 255, 255, 0.84);
    }

    .channel-stat strong {
        display: block;
        color: #fff;
        font-size: 1.5rem;
        margin-bottom: 3px;
    }

    .channel-section {
        padding: 90px 0;
    }

    .channel-section.alt {
        background: #fff;
    }

    .channel-section.soft {
        background: linear-gradient(180deg, #edf6fb 0%, #f8fbfd 100%);
    }

    .channel-badge {
        display: inline-block;
        margin-bottom: 14px;
        padding: 7px 14px;
        border-radius: 999px;
        background: rgba(42, 123, 155, 0.10);
        color: #1a6688;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .channel-copy {
        font-size: 1.02rem;
        color: #516173;
    }

    .channel-grid-card,
    .channel-process-card,
    .channel-why-card,
    .channel-engagement-card,
    .channel-table-card {
        height: 100%;
        border: 1px solid #dbe8f0;
        border-radius: 24px;
        background: #fff;
        box-shadow: 0 16px 40px rgba(12, 62, 99, 0.06);
    }

    .channel-grid-card {
        padding: 28px;
    }

    .channel-grid-icon,
    .channel-process-icon {
        width: 58px;
        height: 58px;
        border-radius: 18px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #0d5b7c, #2a7b9b);
        color: #fff;
        margin-bottom: 18px;
        font-size: 1.25rem;
    }

    .channel-grid-card h3,
    .channel-process-card h3,
    .channel-why-card h3,
    .channel-engagement-card h3 {
        font-size: 1.24rem;
        margin-bottom: 12px;
    }

    .channel-highlight {
        padding: 34px;
        border-radius: 30px;
        background: linear-gradient(160deg, #0b3658 0%, #11577a 100%);
        color: #fff;
        box-shadow: 0 24px 54px rgba(11, 54, 88, 0.2);
    }

    .channel-highlight h3,
    .channel-highlight p,
    .channel-highlight li {
        color: #fff;
    }

    .channel-highlight ul,
    .channel-list {
        margin: 0;
        padding-left: 1.15rem;
    }

    .channel-highlight li,
    .channel-list li {
        margin-bottom: 0.8rem;
    }

    .channel-process-card,
    .channel-why-card,
    .channel-engagement-card {
        padding: 26px;
    }

    .channel-process-no {
        display: inline-flex;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        background: rgba(42, 123, 155, 0.12);
        color: #0d5b7c;
        margin-bottom: 16px;
    }

    .channel-table-card {
        overflow: hidden;
    }

    .channel-table {
        margin: 0;
    }

    .channel-table thead th {
        background: #0d5b7c;
        color: #fff;
        border: 0;
        padding: 18px 20px;
        font-size: 0.95rem;
    }

    .channel-table tbody td {
        padding: 18px 20px;
        border-color: #e3edf3;
        vertical-align: top;
    }

    .channel-table tbody tr:nth-child(even) td {
        background: #f7fbfd;
    }

    .channel-cta {
        padding: 90px 0;
        background: linear-gradient(135deg, #0b304f 0%, #134e70 55%, #2a7b9b 100%);
        color: #fff;
    }

    .channel-cta h2,
    .channel-cta p {
        color: #fff;
    }

    .channel-cta-box {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
        padding: 40px 26px;
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.16);
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
    }

    @media (max-width: 991.98px) {
        .channel-hero {
            padding: 125px 0 70px;
        }
    }
</style>
@endpush

@section('content')
@php
    $painPoints = [
        ['icon' => 'fa-sitemap', 'title' => 'Different Dealer Hierarchies', 'copy' => 'Distributors, super stockists, sub-dealers, retailers and field teams rarely follow one standard structure.'],
        ['icon' => 'fa-file-invoice', 'title' => 'Orders Scattered Everywhere', 'copy' => 'Phone calls, WhatsApp messages, spreadsheets and manual follow-ups slow down the full order cycle.'],
        ['icon' => 'fa-percent', 'title' => 'Incentive Complexity', 'copy' => 'Commissions, scheme payouts and dealer slabs become messy when the business grows across regions and products.'],
        ['icon' => 'fa-warehouse', 'title' => 'No Unified Stock View', 'copy' => 'It becomes hard to see warehouse, distributor and market stock in one consistent operational system.'],
        ['icon' => 'fa-map-location-dot', 'title' => 'Weak Territory Visibility', 'copy' => 'You need geography-wise and channel-wise performance data to control growth and identify gaps faster.'],
        ['icon' => 'fa-money-bill-wave', 'title' => 'Delayed Collections', 'copy' => 'Without real-time visibility on credit and outstanding balances, payment follow-ups stay reactive instead of planned.'],
    ];

    $solutions = [
        ['icon' => 'fa-users-gear', 'title' => 'Dealer and Distributor Management', 'copy' => 'Create your actual hierarchy, onboarding rules, access levels and approval flows.'],
        ['icon' => 'fa-cart-shopping', 'title' => 'Order Management', 'copy' => 'Capture orders, route approvals and track fulfillment from request to dispatch.'],
        ['icon' => 'fa-boxes-stacked', 'title' => 'Stock Visibility', 'copy' => 'Monitor channel inventory, stock movement and product availability across locations.'],
        ['icon' => 'fa-coins', 'title' => 'Commission and Scheme Logic', 'copy' => 'Automate incentive rules, target schemes, slab payouts and exception handling.'],
        ['icon' => 'fa-receipt', 'title' => 'Credit and Collection Control', 'copy' => 'Track receivables, due dates, hold rules and collection follow-ups in one flow.'],
        ['icon' => 'fa-chart-column', 'title' => 'Territory and Sales Insights', 'copy' => 'See market performance by dealer, region, sales person, product and account status.'],
    ];

    $process = [
        ['title' => 'Process Discovery and Mapping', 'copy' => 'We study your current distribution model, stakeholders, approval structure and reporting needs.'],
        ['title' => 'Blueprint and User Flow Design', 'copy' => 'The system is planned around your business logic, not forced into a generic CRM pattern.'],
        ['title' => 'Development and Integrations', 'copy' => 'We build the application and connect it with ERP, Tally, inventory, billing or communication tools where required.'],
        ['title' => 'Rollout, Training and Support', 'copy' => 'Your teams, dealers and managers get guided rollout support so adoption actually happens.'],
    ];

    $whyChoose = [
        'Every manufacturer has a different sales network. A generic tool usually creates workarounds, not control.',
        'A custom-built channel system mirrors your real structure and improves daily execution, visibility and accountability.',
        'Because your channel is not generic, your software should not be generic either.',
    ];

    $engagements = [
        ['title' => 'Fixed-Scope Delivery', 'copy' => 'Ideal when the required modules, workflows and outcomes are already well defined.'],
        ['title' => 'Dedicated Development Partner', 'copy' => 'Best when your channel operations will evolve and need continuous product improvements.'],
        ['title' => 'Process and Technology Consulting', 'copy' => 'Useful when you want to first structure the model, priorities and roadmap before full implementation.'],
    ];

    $techRows = [
        ['area' => 'ERP / Tally Integration', 'details' => 'Sync order data, invoices, payments and operational status between finance and channel workflows.'],
        ['area' => 'Alerts and Triggers', 'details' => 'Automate WhatsApp, SMS or email notifications for approvals, collections, stock and order milestones.'],
        ['area' => 'Mobile Access', 'details' => 'Enable sales teams, distributors or dealers to place orders and review updates on mobile devices.'],
        ['area' => 'Role-Based Dashboards', 'details' => 'Give leadership, managers and field users only the visibility and controls relevant to their role.'],
    ];
@endphp

<div class="channel-page">
    <section class="channel-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="channel-kicker" data-aos="fade-up">
                        <i class="fas fa-network-wired"></i>
                        Custom Business Software
                    </span>
                    <h1 class="channel-title" data-aos="fade-up" data-aos-delay="50">
                        Channel and Distribution Management Software Development
                    </h1>
                    <p class="channel-intro" data-aos="fade-up" data-aos-delay="100">
                        Every manufacturer has a different sales network. We build systems that fit yours - from order flow and dealer management to commission logic, stock visibility and payment follow-up.
                    </p>
                    <div class="d-flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="150">
                        <a href="{{ url('/free-digital-consultation') }}" class="btn btn-light btn-lg px-4">
                            <i class="fas fa-comments me-2"></i>Talk to a Solutions Expert
                        </a>
                        <a href="{{ url('/delivery-engagement-models') }}" class="btn btn-outline-light btn-lg px-4">
                            <i class="fas fa-cogs me-2"></i>See How We Work
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="channel-hero-panel" data-aos="fade-left">
                        <h3 class="text-white mb-3">What this system can control</h3>
                        <p class="mb-0 text-white-50">Dealer network management, order processing, stock mapping, credit control, incentive rules, territory analytics and channel reporting - all in one operational layer.</p>
                        <div class="row g-3 mt-3">
                            <div class="col-sm-6">
                                <div class="channel-stat">
                                    <strong>1 Flow</strong>
                                    Order to payment visibility
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="channel-stat">
                                    <strong>Multi-level</strong>
                                    Dealer and distributor structures
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="channel-stat">
                                    <strong>Custom</strong>
                                    Rules for your business model
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="channel-stat">
                                    <strong>Real-time</strong>
                                    Dashboards and exception tracking
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="channel-section soft">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-9">
                    <span class="channel-badge" data-aos="fade-up">The Problem</span>
                    <h2 class="display-6 mb-3" data-aos="fade-up" data-aos-delay="50">
                        Every manufacturer's distribution model is different. That is why standard CRMs fail.
                    </h2>
                    <p class="channel-copy mb-0" data-aos="fade-up" data-aos-delay="100">
                        When channel execution runs on WhatsApp, calls, spreadsheets and disconnected teams, growth becomes hard to control. You do not need another generic CRM. You need a custom-built channel control system that fits your network exactly.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($painPoints as $index => $point)
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ 80 + ($index * 40) }}">
                        <article class="channel-grid-card">
                            <div class="channel-grid-icon">
                                <i class="fas {{ $point['icon'] }}"></i>
                            </div>
                            <h3>{{ $point['title'] }}</h3>
                            <p class="channel-copy mb-0">{{ $point['copy'] }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="channel-section alt">
        <div class="container">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <span class="channel-badge" data-aos="fade-up">The Solution</span>
                    <h2 class="display-6 mb-3" data-aos="fade-up" data-aos-delay="50">
                        From order to payment, complete visibility built around your channel.
                    </h2>
                    <p class="channel-copy mb-0" data-aos="fade-up" data-aos-delay="100">
                        At Gnosys Digital, we develop custom-built Channel and Distribution Management Systems that reflect your actual sales structure and help you manage dealers, stock, incentives, territories and collections in one digital flow.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="channel-highlight" data-aos="fade-left">
                        <h3 class="mb-3">Built around your business, not around a template</h3>
                        <ul>
                            <li>Map your real hierarchy instead of forcing teams into generic roles.</li>
                            <li>Digitize approvals, ordering, follow-up and reporting in one connected experience.</li>
                            <li>Integrate with your existing finance and operational systems when needed.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($solutions as $index => $item)
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ 80 + ($index * 40) }}">
                        <article class="channel-grid-card">
                            <div class="channel-grid-icon">
                                <i class="fas {{ $item['icon'] }}"></i>
                            </div>
                            <h3>{{ $item['title'] }}</h3>
                            <p class="channel-copy mb-0">{{ $item['copy'] }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ url('/free-digital-consultation') }}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-comments me-2"></i>Discuss Your Requirements
                </a>
            </div>
        </div>
    </section>

    <section class="channel-section soft">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span class="channel-badge" data-aos="fade-up">Our Approach</span>
                    <h2 class="display-6 mb-3" data-aos="fade-up" data-aos-delay="50">
                        We design around your business, not around software.
                    </h2>
                    <p class="channel-copy" data-aos="fade-up" data-aos-delay="100">
                        A strong channel system starts with clarity. We first understand how your network actually runs, where the delays happen and what leaders need to see daily.
                    </p>
                    <ul class="channel-list channel-copy" data-aos="fade-up" data-aos-delay="150">
                        <li>Current process review across sales, operations and collections</li>
                        <li>Role-based workflow planning for internal and external users</li>
                        <li>Phased rollout plan to reduce friction during adoption</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        @foreach ($process as $index => $step)
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}">
                                <article class="channel-process-card">
                                    <span class="channel-process-no">{{ $index + 1 }}</span>
                                    <h3>{{ $step['title'] }}</h3>
                                    <p class="channel-copy mb-0">{{ $step['copy'] }}</p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="channel-section alt">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <span class="channel-badge" data-aos="fade-up">Why Custom</span>
                    <h2 class="display-6 mb-3" data-aos="fade-up" data-aos-delay="50">
                        Because your channel is not generic - it is your biggest competitive edge.
                    </h2>
                    <p class="channel-copy mb-0" data-aos="fade-up" data-aos-delay="100">
                        The more unique your network structure is, the more value a custom operational system creates. Instead of adapting your business to software limitations, the software should adapt to your channel strategy.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        @foreach ($whyChoose as $index => $reason)
                            <div class="col-12" data-aos="fade-up" data-aos-delay="{{ 80 + ($index * 50) }}">
                                <article class="channel-why-card">
                                    <h3>Why this matters {{ $index + 1 }}</h3>
                                    <p class="channel-copy mb-0">{{ $reason }}</p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="channel-section soft">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-8">
                    <span class="channel-badge" data-aos="fade-up">Technology Layer</span>
                    <h2 class="display-6 mb-3" data-aos="fade-up" data-aos-delay="50">
                        Operational features that support day-to-day channel execution.
                    </h2>
                    <p class="channel-copy mb-0" data-aos="fade-up" data-aos-delay="100">
                        Along with the core workflow, we can extend the system with integrations, notifications, dashboards and mobile experiences based on how your teams and partners operate.
                    </p>
                </div>
            </div>
            <div class="channel-table-card" data-aos="fade-up" data-aos-delay="120">
                <table class="table channel-table">
                    <thead>
                        <tr>
                            <th scope="col">Area</th>
                            <th scope="col">What it supports</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($techRows as $row)
                            <tr>
                                <td class="fw-semibold">{{ $row['area'] }}</td>
                                <td>{{ $row['details'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="channel-section alt">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-8">
                    <span class="channel-badge" data-aos="fade-up">Engagement Models</span>
                    <h2 class="display-6 mb-3" data-aos="fade-up" data-aos-delay="50">
                        Flexible engagement, transparent outcomes.
                    </h2>
                    <p class="channel-copy mb-0" data-aos="fade-up" data-aos-delay="100">
                        Depending on your readiness level, we can support you as a consulting partner, a defined delivery team or a long-term product development partner.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($engagements as $index => $item)
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ 90 + ($index * 50) }}">
                        <article class="channel-engagement-card">
                            <div class="channel-process-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>{{ $item['title'] }}</h3>
                            <p class="channel-copy mb-0">{{ $item['copy'] }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="channel-cta">
        <div class="container">
            <div class="channel-cta-box" data-aos="zoom-in">
                <h2 class="display-6 mb-3">Your business. Your channel. Your software - custom-built.</h2>
                <p class="lead mb-4">
                    Gnosys Digital builds custom Channel and Distribution Management Systems designed specifically for your distribution model, not a generic one.
                </p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <a href="{{ url('/free-digital-consultation') }}" class="btn btn-light btn-lg px-4">
                        <i class="fas fa-comments me-2"></i>Get Free Consultation
                    </a>
                    <a href="{{ url('/delivery-engagement-models') }}" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-circle-info me-2"></i>Learn About Our Process
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
