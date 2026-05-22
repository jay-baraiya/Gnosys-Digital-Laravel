@extends('admin.layouts.app')

@section('title', 'Process Steps')
@section('page-title', 'Delivery Process Steps')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manage Process Steps</h4>
        <a href="{{ route('admin.process-steps.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add Step
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($steps as $step)
                    <tr>
                        <td><span class="badge bg-primary rounded-circle p-2">{{ sprintf('%02d', $step->order) }}</span></td>
                        <td class="fw-bold">{{ $step->title }}</td>
                        <td style="max-width: 400px;"><small>{{ $step->description }}</small></td>
                        <td>
                            @if($step->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="table-actions">
                            <a href="{{ route('admin.process-steps.edit', $step) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.process-steps.destroy', $step) }}" method="POST" class="d-inline">
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
            {{ $steps->links() }}
        </div>
    </div>
</div>
@endsection
