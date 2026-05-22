@extends('admin.layouts.app')

@section('title', 'Digital Products')
@section('page-title', 'Digital Products Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>Manage Digital Products</h4>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i> Add New Product
    </a>
</div>

<!-- Search and Filter -->
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.products.index') }}">
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <select name="category" class="form-select text-white" style="background-color: var(--sidebar-bg); border-color: rgba(255,255,255,0.1);">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-outline-primary w-100">
                        <i class="fas fa-search me-1"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Products Table -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-box me-2"></i> All Products ({{ $products->total() }})
        </h5>
    </div>
    <div class="card-body">
        @if($products->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $product->image_url }}" alt="{{ $product->title }}" 
                                         class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold">{{ \Illuminate\Support\Str::limit($product->title, 40) }}</div>
                                        <small class="text-muted">ID: {{ $product->product_id }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($product->categoryRelationship)
                                    <span class="badge bg-primary">{{ $product->categoryRelationship->name }}</span>
                                @else
                                    <span class="badge bg-secondary">{{ $product->category }}</span>
                                @endif
                            </td>
                            <td>
                                @if($product->is_sale)
                                    <div>
                                        <span class="text-danger fw-bold">{{ $product->formatted_price }}</span>
                                        <br>
                                        <small class="text-muted text-decoration-line-through">{{ $product->formatted_original_price }}</small>
                                    </div>
                                @else
                                    <span class="fw-bold">{{ $product->formatted_price }}</span>
                                @endif
                            </td>
                            <td>
                                @if($product->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.products.toggle-status', $product) }}" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-{{ $product->is_active ? 'warning' : 'success' }}">
                                            <i class="fas fa-{{ $product->is_active ? 'eye-slash' : 'eye' }}"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="d-inline" 
                                          onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-box fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No products found</h5>
                <p class="text-muted">Get started by adding your first digital product.</p>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i> Add First Product
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
