@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Stats Cards -->
    <div class="col-md-3">
        <div class="stats-card">
            <div class="stats-number">{{ $stats['total_products'] }}</div>
            <div class="text-muted">Total Products</div>
            <i class="fas fa-box fa-2x text-primary mt-3 opacity-50"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card">
            <div class="stats-number">{{ $stats['active_products'] }}</div>
            <div class="text-muted">Active Products</div>
            <i class="fas fa-check-circle fa-2x text-success mt-3 opacity-50"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card">
            <div class="stats-number">{{ $stats['total_services'] }}</div>
            <div class="text-muted">Total Services</div>
            <i class="fas fa-cogs fa-2x text-info mt-3 opacity-50"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card">
            <div class="stats-number">{{ $stats['active_services'] }}</div>
            <div class="text-muted">Active Services</div>
            <i class="fas fa-check-circle fa-2x text-success mt-3 opacity-50"></i>
        </div>
    </div>
</div>

<div class="row mt-4">
    <!-- Recent Products -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-box me-2"></i> Recent Products
                </h5>
            </div>
            <div class="card-body">
                @if($recent_products->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent_products as $product)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $product->image_url }}" alt="{{ $product->title }}" 
                                                 class="rounded me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                            <div>
                                                <div class="fw-bold">{{ \Illuminate\Support\Str::limit($product->title, 30) }}</div>
                                                <small class="text-muted">{{ $product->product_id }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">{{ $product->category }}</span>
                                    </td>
                                    <td>{{ $product->formatted_price }}</td>
                                    <td>
                                        @if($product->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye me-1"></i> View All Products
                        </a>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-box fa-3x text-muted mb-3"></i>
                        <p class="text-muted">No products found</p>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-1"></i> Add First Product
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Services -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-cogs me-2"></i> Recent Services
                </h5>
            </div>
            <div class="card-body">
                @if($recent_services && $recent_services->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent_services as $service)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $service->image_url }}" alt="{{ $service->title }}" 
                                                 class="rounded me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                            <div>
                                                <div class="fw-bold">{{ \Illuminate\Support\Str::limit($service->title, 30) }}</div>
                                                <small class="text-muted">{{ $service->service_id }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $service->category }}</span>
                                    </td>
                                    <td>
                                        @if($service->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.services.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye me-1"></i> View All Services
                        </a>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                        <p class="text-muted">No services found</p>
                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-1"></i> Add First Service
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-bolt me-2"></i> Quick Actions
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary w-100">
                            <i class="fas fa-plus me-2"></i> Add New Product
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-info w-100">
                            <i class="fas fa-plus me-2"></i> Add New Service
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-primary w-100">
                            <i class="fas fa-box me-2"></i> Manage Products
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-info w-100">
                            <i class="fas fa-cogs me-2"></i> Manage Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
