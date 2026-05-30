@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="service-detail-hero py-5 bg-light">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('digital-services') }}">Digital Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
            </ol>
        </nav>

        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="service-image-container h-100 shadow-sm rounded-3 overflow-hidden bg-white">
                    <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="img-fluid w-100 h-100" style="object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div class="service-info-content">
                    @if($service->categoryRelationship)
                    <div class="text-primary fw-bold mb-2 text-uppercase small">{{ $service->categoryRelationship->name }}</div>
                    @endif
                    <h1 class="display-5 fw-bold mb-3">{{ $service->title }}</h1>

                    <div class="price-box mb-4">
                        <span class="fs-1 fw-bold text-dark">{{ $service->price_display }}</span>
                    </div>

                    @if($service->packages && $service->packages->count() > 0)
                    <div class="packages-tabs-wrapper border rounded-3 bg-white shadow-sm mb-4 overflow-hidden">
                        <ul class="nav nav-tabs package-pricing-tabs border-0 bg-light d-flex" id="packagePricingTabs" role="tablist">
                            @foreach($service->packages as $index => $package)
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 rounded-0 border-0 fw-bold py-3 {{ $index == 0 ? 'active' : '' }}"
                                    id="package-tab-{{ $package->id }}"
                                    data-bs-toggle="tab"
                                    data-bs-target="#package-content-{{ $package->id }}"
                                    type="button" role="tab">
                                    {{ $package->package_name }}
                                </button>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content p-4" id="packagePricingTabsContent">
                            @foreach($service->packages as $index => $package)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="package-content-{{ $package->id }}" role="tabpanel">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="mb-0 fw-bold text-dark">{{ $package->package_name }}</h4>
                                    <span class="fs-3 fw-bold" style="color: #004a80;">${{ is_numeric($package->price) ? number_format((float)$package->price, 2) : $package->price }}</span>
                                </div>
                                <div class="text-muted mb-4 text-start" style="min-height: 80px;">
                                    {!! nl2br(e($package->description)) !!}
                                </div>

                                <div class="d-flex align-items-center gap-3 mb-4">
                                    <div class="quantity-input" style="width: 80px;">
                                        <input type="number" class="form-control form-control-lg text-center" value="1" min="1">
                                    </div>
                                    <button class="btn btn-dark btn-lg flex-grow-1 py-3 fw-bold">Select {{ $package->package_name }}</button>
                                </div>

                                <div class="payment-buttons d-grid gap-2">

                                    <button class="btn border-0 py-3 fw-bold text-dark d-flex align-items-center justify-content-center" style="background-color: #ffc439;">
                                        Pay with <span class="ms-1 fw-bolder text-primary">Pay</span><span class="fw-bolder text-info">Pal</span>
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="booking-section border p-4 rounded-3 bg-white shadow-sm mb-4">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="quantity-input" style="width: 80px;">
                                <input type="number" class="form-control form-control-lg text-center" value="1" min="1">
                            </div>
                            <button class="btn btn-dark btn-lg flex-grow-1 py-3 fw-bold">Add to cart</button>
                        </div>

                        <div class="payment-buttons d-grid gap-2">
                            <button class="btn border-0 py-3 fw-bold text-dark d-flex align-items-center justify-content-center" style="background-color: #ffc439;">
                                Pay with <span class="ms-1 fw-bolder text-primary">Pay</span><span class="fw-bolder text-info">Pal</span>
                            </button>
                        </div>
                    </div>
                    @endif

                    <div class="product-meta mt-4 py-3 border-top small">
                        <div class="mb-1"><span class="text-muted text-uppercase fw-bold">SKU:</span> <span class="ms-1">{{ $service->service_id }}</span></div>
                        <div class="mb-1">
                            <span class="text-muted text-uppercase fw-bold">Category:</span>
                            <span class="ms-1">
                                @if($service->categoryRelationship)
                                <a href="{{ route('digital-services.category', $service->categoryRelationship->slug) }}" class="text-decoration-none text-dark">{{ $service->categoryRelationship->name }}</a>
                                @endif
                            </span>
                        </div>
                        <div class="mb-3"><span class="text-muted text-uppercase fw-bold">Tag:</span> <span class="ms-1">{{ $service->subcategory ?? 'Service' }}</span></div>

                        <div class="share-links d-flex align-items-center gap-3 mt-3">
                            <span class="text-muted text-uppercase fw-bold">Share:</span>
                            <a href="#" class="text-dark"><i class="fab fa-x-twitter"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-vk"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="text-dark"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="service-tabs-section py-5">
    <div class="container">
        <ul class="nav nav-tabs border-bottom-0 mb-4 justify-content-center" id="serviceTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active fw-bold px-4 py-3 border-0 rounded-0 border-bottom border-3" id="description-tab" data-bs-toggle="tab" data-bs-target="#description-content" type="button" role="tab">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-bold px-4 py-3 border-0 rounded-0 border-bottom border-3" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional-content" type="button" role="tab">Additional Information</button>
            </li>
        </ul>
        <div class="tab-content p-4 bg-white border rounded shadow-sm" id="serviceTabsContent">
            <div class="tab-pane fade show active" id="description-content" role="tabpanel">
                <!-- Icon Highlights -->
                @if($service->description_top_blocks && count($service->description_top_blocks) > 0)
                <div class="row g-4 mb-5 pb-4 border-bottom">
                    @foreach($service->description_top_blocks as $block)
                    <div class="col-md-4 text-center">
                        <div class="mb-3">
                            <i class="{{ $block['icon'] ?? 'fas fa-star' }} fa-2x text-primary p-3 bg-light rounded-circle shadow-sm"></i>
                        </div>
                        <h5 class="fw-bold mb-2">{{ $block['title'] ?? '' }}</h5>
                        <p class="text-muted small mb-0">{{ $block['text'] ?? '' }}</p>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Main Detailed Description (HTML) -->
                @if($service->detailed_description)
                <div class="detailed-html-content mb-5" style="line-height: 1.8;">
                    {!! $service->detailed_description !!}
                </div>
                @else
                <div class="description-text lead text-muted mb-5" style="line-height: 1.8;">
                    {!! nl2br(e($service->description)) !!}
                </div>
                @endif

                <!-- Features Grid -->
                @if($service->service_features_grid && count($service->service_features_grid) > 0)
                <div class="features-grid-section mt-5 pt-4">
                    <h3 class="fw-bold mb-4 text-center">Core Features & Benefits</h3>
                    <div class="row g-4">
                        @foreach($service->service_features_grid as $item)
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="feature-card p-4 border rounded-3 h-100 bg-light transition-hover" style="transition: all 0.3s ease;">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="feature-icon text-primary mt-1">
                                        <i class="{{ $item['icon'] ?? 'fas fa-check-circle' }} fa-xl text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-2">{{ $item['title'] ?? '' }}</h5>
                                        <p class="text-muted small mb-0" style="line-height: 1.6;">{{ $item['text'] ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <div class="tab-pane fade" id="additional-content" role="tabpanel">
                <!-- Process Steps -->
                @if($service->process_steps && count($service->process_steps) > 0)
                <div class="process-steps-section mb-5">
                    <h3 class="fw-bold mb-5 text-center">Our Delivery Process</h3>
                    <div class="row g-4">
                        @foreach($service->process_steps as $step)
                        <div class="col-md-6 col-lg-3">
                            <div class="step-card text-center position-relative">
                                <div class="step-number display-4 fw-bold mb-n4" style="z-index: 1;">0{{ $loop->iteration }}</div>
                                <div class="step-content position-relative" style="z-index: 2;">
                                    <h5 class="fw-bold mb-2 pt-4">{{ $step['title'] ?? '' }}</h5>
                                    <p class="text-muted small mb-0">{{ $step['text'] ?? '' }}</p>
                                </div>
                                @if(!$loop->last)
                                <div class="step-divider d-none d-lg-block position-absolute top-50 start-100 translate-middle" style="width: 50px; border-top: 2px dashed #dee2e6;"></div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr class="my-5">
                @endif

                <h3 class="fw-bold mb-4">Support & Terms</h3>
                <p>All our digital services include dedicated support and professional delivery. Once you place an inquiry, our team will get in touch to discuss your specific requirements and create a tailored action plan.</p>
                <table class="table table-bordered mt-4">
                    <tbody>
                        <tr>
                            <th class="bg-light" style="width: 25%;">Service ID</th>
                            <td>{{ $service->service_id }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Initial Turnaround</th>
                            <td>24 - 48 Hours</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Support Included</th>
                            <td>Yes (Post-Delivery Support)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <style>
            .transition-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                border-color: #004a80 !important;
            }

            .step-number {
                font-size: 5rem;
                line-height: 1;
                color: #004a80;
                /* Solid primary color */
                opacity: 0.15;
                /* Subtle but visible */
                font-weight: 900;
            }
        </style>
    </div>
</section>

<!-- Related Services -->
@if($relatedServices->count() > 0)
<section class="related-services py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center">Related Services</h2>
        <div class="row g-4">
            @foreach($relatedServices as $related)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden service-card-mini">
                    <img src="{{ $related->image_url }}" class="card-img-top" alt="{{ $related->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="card-title fw-bold mb-2">{{ $related->title }}</h5>
                        <p class="text-muted small mb-3">{{ $related->price_display }}</p>
                        <a href="{{ route('digital-services.show', $related->slug) }}" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<style>
    .service-tabs-section .nav-tabs .nav-link {
        color: #64748b;
        background: none;
        border-bottom: 3px solid transparent;
    }

    .service-tabs-section .nav-tabs .nav-link.active {
        color: var(--gnosys-blue, #004a99);
        border-bottom-color: var(--gnosys-blue, #004a99);
    }

    .service-card-mini {
        transition: transform 0.3s ease;
    }

    .service-card-mini:hover {
        transform: translateY(-5px);
    }

    .package-pricing-tabs .nav-link {
        background-color: #e2e8f0;
        color: #1e293b;
        border-bottom: 3px solid transparent !important;
        transition: all 0.2s ease-in-out;
    }

    .package-pricing-tabs .nav-link:hover {
        background-color: #cbd5e1;
    }

    .package-pricing-tabs .nav-link.active {
        background-color: #ffffff;
        color: #0d9488;
        border-bottom-color: #0d9488 !important;
    }
</style>
@endsection