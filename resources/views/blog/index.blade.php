@extends('layouts.app')

@section('content')
<section class="page-header" style="padding: 120px 0 60px; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #fff;">
    <div class="container text-center" data-aos="fade-up">
        <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 3rem; margin-bottom: 15px;">Our Blog</h1>
        <p style="color: #94a3b8; font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Expert insights, latest trends, and comprehensive guides on digital transformation.</p>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <!-- Category Filter -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="category-filter">
                    <h4 class="filter-title">Filter by Category</h4>
                    <div class="category-buttons">
                        <a href="{{ route('blog.index') }}" class="category-btn {{ !request('category') ? 'active' : '' }}">
                            All Posts
                        </a>
                        @foreach($categories as $category)
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="category-btn {{ request('category') == $category->slug ? 'active' : '' }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            @forelse($blogs as $blog)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="blog-card">
                    <div class="blog-card-img-wrapper">
                        @if($blog->category)
                        <div class="blog-category-badge">{{ $blog->category->name }}</div>
                        @endif
                        <img src="{{ $blog->cover_image ?? asset('images/blog-placeholder.jpg') }}" alt="{{ $blog->title }}" class="blog-card-img">
                    </div>
                    <div class="blog-card-body">
                        <h2 class="blog-card-title">{{ $blog->title }}</h2>
                        @if($blog->subtitle)
                        <div class="blog-card-subtitle">{{ $blog->subtitle }}</div>
                        @else
                        <div class="blog-card-subtitle">Expert Insights</div>
                        @endif
                        <p class="blog-card-excerpt">
                            {{ Str::limit(strip_tags($blog->content), 120) }}
                        </p>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog-read-more">
                            READ MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="blog-card-footer">
                        <span><i class="fas fa-user-circle"></i> {{ $blog->author->name }}</span>
                        <span class="ms-auto"><i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="display-1 text-muted mb-4"><i class="fas fa-newspaper"></i></div>
                <h3>No blog posts yet</h3>
                <p class="text-muted">We're currently writing some amazing content for you. Check back soon!</p>
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Back to Home</a>
            </div>
            @endforelse
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection

<style>
.category-filter {
    background: var(--g-bg-light);
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    margin-bottom: 30px;
}

.filter-title {
    color: var(--g-accent);
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.category-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.category-btn {
    background: var(--g-bg-white);
    color: var(--g-text);
    padding: 8px 16px;
    border-radius: 25px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    border: 2px solid var(--g-border);
    transition: all 0.3s ease;
}

.category-btn:hover {
    background: var(--g-primary);
    color: white;
    border-color: var(--g-primary);
    transform: translateY(-2px);
}

.category-btn.active {
    background: var(--g-accent);
    color: white;
    border-color: var(--g-accent);
}

.blog-category-badge {
    background: var(--g-accent);
    color: white;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 2;
}
</style>
