@extends('admin.layouts.app')

@section('title', 'Testimonials')
@section('page-title', 'Client Testimonials')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manage Testimonials</h4>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add Testimonial
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Rating</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonials as $testimonial)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle p-2 me-2">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">{{ $testimonial->client_name }}</div>
                                    <small class="text-muted">{{ $testimonial->client_designation }}</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            @for($i=0; $i<$testimonial->rating; $i++)
                                <i class="fas fa-star text-warning small"></i>
                            @endfor
                        </td>
                        <td style="max-width: 300px;"><small>{{ Str::limit($testimonial->content, 100) }}</small></td>
                        <td>
                            @if($testimonial->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="table-actions">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline">
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
            {{ $testimonials->links() }}
        </div>
    </div>
</div>
@endsection
