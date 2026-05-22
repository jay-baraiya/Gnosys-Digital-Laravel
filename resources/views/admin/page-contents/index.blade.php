@extends('admin.layouts.app')

@section('title', 'Page Sections')
@section('page-title', 'Page Sections')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manage Page Content</h4>
        <a href="{{ route('admin.page-contents.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add New Section
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>Section</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contents as $content)
                    <tr>
                        <td><span class="badge bg-secondary">{{ ucfirst($content->page_slug) }}</span></td>
                        <td><code>{{ $content->section_slug }}</code></td>
                        <td>{{ $content->title }}</td>
                        <td>
                            @if($content->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="table-actions">
                            <a href="{{ route('admin.page-contents.edit', $content) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.page-contents.destroy', $content) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this section?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
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
            {{ $contents->links() }}
        </div>
    </div>
</div>
@endsection
