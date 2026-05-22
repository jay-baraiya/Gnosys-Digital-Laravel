@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="services-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <nav aria-label="breadcrumb" class="mb-4" data-aos="fade-up">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Digital Services</li>
                    </ol>
                </nav>
                <h1 class="services-hero-title" data-aos="fade-up">Digital Services</h1>
                <p class="services-hero-subtitle" data-aos="fade-up" data-aos-delay="100">Professional digital services tailored to scale your business and automate your workflows</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid Section -->
<section class="services-grid-section section-padding section-bg-light">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="category-sidebar mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-dark text-white p-4">
                            <h5 class="mb-0"><i class="fas fa-filter me-2"></i> Categories</h5>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush category-sidebar-list">
                                <a href="{{ route('digital-services') }}" class="list-group-item list-group-item-action p-3 {{ !request('category') && empty($category) ? 'active' : '' }}">
                                    <i class="fas fa-th-large me-2"></i> All Digital Services
                                </a>
                                @foreach($categories as $cat)
                                <a href="{{ route('digital-services', ['category' => $cat->slug]) }}" class="list-group-item list-group-item-action p-3 {{ (request('category') == $cat->slug || (isset($category) && $category->id == $cat->id)) ? 'active' : '' }}">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="fas fa-chevron-right me-2 small"></i> {{ $cat->name }}</span>
                                        <span class="badge rounded-pill bg-light text-dark">{{ $cat->services()->active()->count() }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="help-box p-4 text-center bg-dark text-white rounded-3 shadow-sm">
                        <i class="fas fa-headset fa-2x mb-3 text-primary"></i>
                        <h5>Need Help?</h5>
                        <p class="small opacity-75">Not sure which service is right for you? Our experts are here to help.</p>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm w-100 mt-2">Get Free Consultation</a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Service Sections -->
                
                <!-- All Services Header -->
                <div id="service-section-header" class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="section-title">
                            @if(isset($category))
                                {{ $category->name }}
                            @elseif(request('category'))
                                <?php $reqCat = \App\Models\Category::where('slug', request('category'))->first(); ?>
                                {{ $reqCat ? $reqCat->name : 'All Digital Services' }}
                            @else
                                All Digital Services
                            @endif
                        </h2>
                        <p class="lead text-muted">
                            @if(isset($category))
                                {{ $category->description ?? 'Explore our collection of ' . $category->name . ' services' }}
                            @elseif(request('category'))
                                <?php $reqCat = \App\Models\Category::where('slug', request('category'))->first(); ?>
                                {{ $reqCat ? ($reqCat->description ?? 'Explore our collection of ' . $reqCat->name . ' services') : 'Explore our complete collection of digital services and solutions' }}
                            @else
                                Explore our complete collection of digital services and solutions
                            @endif
                        </p>
                    </div>
                </div>

                <div class="row g-4" id="servicesGrid">
                    @forelse($services as $service)
                    <div class="col-md-6 col-lg-4 service-item text-center mb-4" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3 + 1) * 100 }}">
                        <div class="service-card-wrapper border rounded-3 p-3 h-100 shadow-sm bg-white d-flex flex-column" style="transition: all 0.3s ease;">
                            <a href="{{ route('digital-services.show', $service->slug) }}" class="text-decoration-none d-block mb-3 flex-grow-1">
                                <div class="position-relative mb-3 overflow-hidden rounded-2">
                                    <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="img-fluid service-thumb" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'" style="aspect-ratio: 1/1; object-fit: cover; width: 100%; transition: transform 0.5s ease;">
                                    @if($service->badge)
                                        <span class="position-absolute rounded-circle text-white d-flex align-items-center justify-content-center shadow-sm" style="top: 10px; right: 10px; width: 45px; height: 45px; font-size: 0.8rem; background-color: #77a464; z-index: 2;">{{ $service->badge }}</span>
                                    @endif
                                </div>
                                <h2 class="text-dark mb-2" style="font-size: 1.1rem; font-weight: 600;">{{ $service->title }}</h2>
                                <p class="text-muted small mb-2 text-start">{{ Str::limit($service->short_description ?? $service->description, 60) }}</p>
                                <div class="text-primary fw-bold text-start" style="font-size: 1.1rem;">
                                    @if($service->price)
                                        ${{ is_numeric($service->price) ? number_format((float)$service->price, 2) : $service->price }}
                                    @else
                                        Contact for Price
                                    @endif
                                </div>
                            </a>
                            <div class="mt-auto">
                                <a href="{{ route('digital-services.show', $service->slug) }}" class="btn text-white rounded-1 px-4 py-2 w-100" style="background-color: #004a80; font-size: 0.9rem; font-weight: 500;">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <div class="mb-4">
                            <i class="fas fa-search fa-4x text-muted opacity-25"></i>
                        </div>
                        <h4>No services found</h4>
                        <p class="text-muted">We couldn't find any services matching your selection.</p>
                        <a href="{{ route('digital-services') }}" class="btn btn-primary px-4 mt-2">View All Digital Services</a>
                    </div>
                    @endforelse
                </div>

                <style>
                .service-card-wrapper:hover {
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
                    transform: translateY(-5px);
                    border-color: #004a80 !important;
                }
                .service-card-wrapper:hover .service-thumb {
                    transform: scale(1.08);
                }
                </style>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero Section */
.services-hero-section {
    background: linear-gradient(to right, #0f172a, #1e293b);
    padding: 80px 0;
    color: white;
}
.services-hero-title {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1rem;
}
.breadcrumb-item a {
    color: rgba(255,255,255,0.7);
    text-decoration: none;
}
.breadcrumb-item.active {
    color: #fff;
}
.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255,255,255,0.4);
}

/* Sidebar Styling */
.category-sidebar-list .list-group-item {
    border-left: 3px solid transparent;
    transition: all 0.3s ease;
}
.category-sidebar-list .list-group-item:hover {
    background-color: #f8f9fa;
    border-left-color: var(--gnosys-blue, #004a99);
    padding-left: 2rem !important;
}
.category-sidebar-list .list-group-item.active {
    background-color: var(--gnosys-blue, #004a99) !important;
    border-color: var(--gnosys-blue, #004a99) !important;
    border-left-color: #333 !important;
    color: white;
}

/* Service Card Styling */
.service-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #f1f5f9;
}
.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
}
.service-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}
.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}
.service-card:hover .service-image img {
    transform: scale(1.1);
}
.service-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #ef4444;
    color: #fff;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    z-index: 2;
}
.service-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 74, 153, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}
.service-card:hover .service-overlay {
    opacity: 1;
}

.service-content {
    padding: 25px;
    text-align: center;
    background: white;
}
.service-category {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #64748b;
    margin-bottom: 10px;
    font-weight: 600;
}
.service-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin-bottom: 15px;
}
.service-title a {
    color: #0f172a;
    text-decoration: none;
}
.service-title a:hover {
    color: #004a99;
}
.service-price {
    font-size: 1.1rem;
    font-weight: 800;
    color: #004a99;
}

.section-padding {
    padding: 80px 0;
}
</style>

<script>
// Filter scripts removed to use server-side.
</script>

@endsection
