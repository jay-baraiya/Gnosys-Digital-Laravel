@extends('admin.layouts.app')

@section('title', 'Impact Stats')
@section('page-title', 'Business Impact Stats')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manage Impact Stats</h4>
        <a href="{{ route('admin.impact-stats.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add Stat
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Value</th>
                        <th>Label</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stats as $stat)
                    <tr>
                        <td class="fw-bold text-primary display-6" style="font-size: 1.5rem;">{{ $stat->value }}</td>
                        <td class="fw-semibold">{{ $stat->label }}</td>
                        <td><small>{{ $stat->description }}</small></td>
                        <td>
                            @if($stat->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="table-actions">
                            <a href="{{ route('admin.impact-stats.edit', $stat) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.impact-stats.destroy', $stat) }}" method="POST" class="d-inline">
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
            {{ $stats->links() }}
        </div>
    </div>
</div>
@endsection
