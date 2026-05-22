@extends('admin.layouts.app')

@section('title', 'Manage Blogs')
@section('page-title', 'Manage Blog Posts')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-newspaper me-2"></i> Blog Posts</h5>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-light">
            <i class="fas fa-plus me-1"></i> New Post
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Post</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                @if($blog->cover_image)
                                <img src="{{ $blog->cover_image }}" alt="" class="rounded me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                @else
                                <div class="bg-light rounded me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-image text-muted"></i>
                                </div>
                                @endif
                                <div>
                                    <div class="fw-bold text-truncate" style="max-width: 250px;">{{ $blog->title }}</div>
                                    <small class="text-muted">{{ $blog->slug }}</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            @if($blog->category)
                            <span class="badge bg-primary">{{ $blog->category->name }}</span>
                            @else
                            <span class="text-muted small">Uncategorized</span>
                            @endif
                        </td>
                        <td>{{ $blog->author->name }}</td>
                        <td>
                            @if($blog->is_published)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning">Draft</span>
                            @endif
                        </td>
                        <td>{{ $blog->created_at->format('d-m-Y h:i A') }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-primary btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            <div class="text-muted">No blog posts found.</div>
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-link">Create your first post</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
