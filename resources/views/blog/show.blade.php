@extends('layouts.app')

@section('content')
    <article class="article-page">
        <header class="article-header text-center">
            <div class="container" data-aos="fade-up">
                @if($blog->category)
                    <span class="badge rounded-pill mb-3"
                        style="background: rgba(99, 102, 241, 0.2); color: #818cf8; padding: 10px 20px; font-weight: 700; border: 1px solid rgba(99, 102, 241, 0.3);">
                        {{ $blog->category->name }}
                    </span>
                @endif
                <h1
                    style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 3.5rem; line-height: 1.2; margin-bottom: 25px;">
                    {{ $blog->title }}
                </h1>
                @if($blog->subtitle)
                    <p style="font-size: 1.4rem; color: #94a3b8; max-width: 800px; margin: 0 auto 30px;">
                        {{ $blog->subtitle }}
                    </p>
                @endif

                <div class="article-meta justify-content-center">
                    <span><i class="fas fa-user-circle"></i> BY {{ strtoupper($blog->author->name) }}</span>
                    <span><i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('F d, Y') }}</span>
                    <span><i class="fas fa-comment"></i> NO COMMENTS</span>
                </div>
            </div>
        </header>

        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ $blog->cover_image ?? asset('images/blog-placeholder.jpg') }}" alt="{{ $blog->title }}"
                        class="article-hero-img">

                    <div class="article-content">
                        {!! $blog->content !!}
                    </div>

                    <hr class="my-5" style="border-color: #e2e8f0;">

                    <div class="article-footer d-flex justify-content-between align-items-center">
                        <div class="share-links">
                            <span class="fw-bold me-3 text-dark">SHARE:</span>
                            <a href="#" class="text-muted me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-muted me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-muted me-3"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="tags">
                            @if($blog->tags)
                                @foreach(explode(',', $blog->tags) as $tag)
                                    <span class="badge bg-light text-dark border p-2 px-3">#{{ trim($tag) }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    @if($recentPosts->count() > 0)
        <section class="bg-light py-5">
            <div class="container">
                <h3 class="mb-4 text-center font-montserrat fw-bold">Recent Stories</h3>
                <div class="row g-4">
                    @foreach($recentPosts as $post)
                        <div class="col-md-4">
                            <div class="blog-card" style="box-shadow: none; border: 1px solid #e2e8f0;">
                                <div class="blog-card-img-wrapper">
                                    <img src="{{ $post->cover_image ?? asset('images/blog-placeholder.jpg') }}"
                                        alt="{{ $post->title }}" class="blog-card-img">
                                </div>
                                <div class="blog-card-body p-3">
                                    <h4 class="h6 fw-bold mb-2">{{ $post->title }}</h4>
                                    <a href="{{ route('blog.show', $post->slug) }}"
                                        class="small text-primary fw-bold text-decoration-none">READ MORE »</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection