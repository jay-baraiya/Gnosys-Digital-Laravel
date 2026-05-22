@extends('admin.layouts.app')

@section('title', 'Manage Admins')
@section('page-title', 'Manage Admins')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-users-cog me-2"></i> Administrators</h5>
        <a href="{{ route('admin.admins.create') }}" class="btn btn-sm btn-light">
            <i class="fas fa-plus me-1"></i> Add Admin
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Access Level</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>
                            <div class="fw-bold">{{ $admin->name }}</div>
                            @if($admin->id === 1)
                                <span class="badge bg-danger">Super Admin</span>
                            @endif
                        </td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <span class="badge bg-{{ $admin->access_level === 'full' ? 'success' : ($admin->access_level === 'limited' ? 'warning' : 'secondary') }}">
                                {{ ucfirst($admin->access_level) }}
                            </span>
                        </td>
                        <td>
                            @if($admin->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ route('admin.admins.edit', $admin) }}" class="btn btn-primary btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @if($admin->id !== 1 && $admin->id !== auth('admin')->id())
                                <form action="{{ route('admin.admins.destroy', $admin) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this admin?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
