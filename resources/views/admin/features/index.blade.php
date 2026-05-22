@extends('admin.layouts.app')

@section('title', 'Features')
@section('page-title', 'Site Features')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manage Features</h4>
        <a href="{{ route('admin.features.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add Feature
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($features as $feature)
                    <tr>
                        <td class="fw-bold">{{ $feature->title }}</td>
                        <td><i class="{{ $feature->icon }} fa-lg"></i></td>
                        <td><span class="badge bg-secondary">{{ ucfirst($feature->page) }}</span></td>
                        <td>
                            @if($feature->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="table-actions">
                            <a href="{{ route('admin.features.edit', $feature) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $features->links() }}
        </div>
    </div>
</div>
@endsection
