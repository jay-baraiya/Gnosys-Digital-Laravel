@extends('admin.layouts.app')

@section('title', 'Categories')
@section('page-title', 'Manage Categories')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-white">Categories List</h5>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-light btn-sm">
            <i class="fas fa-plus"></i> Add New Category
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Products/Services</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            <strong>{{ $category->name }}</strong><br>
                            <small class="text-muted">{{ $category->slug }}</small>
                        </td>
                        <td>
                            <span class="badge {{ $category->type == 'product' ? 'bg-info' : 'bg-success' }}">
                                {{ ucfirst($category->type) }}
                            </span>
                        </td>
                        <td>
                            @if($category->type == 'product')
                                {{ $category->products_count ?? $category->products()->count() }} Products
                            @else
                                {{ $category->services_count ?? $category->services()->count() }} Services
                            @endif
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                            <p class="text-muted">No categories found. Create your first category!</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
