@extends('admin.layouts.app')

@section('title', 'Locations')
@section('page-title', 'Global Presence Locations')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manage Locations</h4>
        <a href="{{ route('admin.locations.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add Location
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations as $location)
                    <tr>
                        <td class="fw-bold">{{ $location->country }}</td>
                        <td>{{ $location->city }}</td>
                        <td>
                            @if($location->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="table-actions">
                            <a href="{{ route('admin.locations.edit', $location) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.locations.destroy', $location) }}" method="POST" class="d-inline">
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
            {{ $locations->links() }}
        </div>
    </div>
</div>
@endsection
