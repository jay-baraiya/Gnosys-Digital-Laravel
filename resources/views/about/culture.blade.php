@extends('layouts.app')

@push('styles')
<link href="{{ asset('css/culture.css') }}?v={{ time() }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endpush

@section('content')

{{-- ============================================================
     SECTION 1: HERO — Dark overlay background with centered text
     ============================================================ --}}
<section class="coc-hero">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="coc-hero-subtitle">About Gnosys Digital</h1>
        <h2 class="coc-hero-title">The Studio Behind the Change</h2>
        <p class="coc-hero-description">At <strong>Gnosys Digital</strong>, we don't just follow digital trends — we build what's next. We are a global digital studio that creates <strong>high-impact services and ready-to-use digital products</strong>, all developed <strong>100% in-house</strong> by our expert team.</p>
        <p class="coc-hero-description mt-3">No freelancers. No outsourcing. Just a focused team obsessed with helping brands <strong>launch faster, scale smarter, and grow stronger.</strong></p>
    </div>
</section>

{{-- ============================================================
     SECTION 2: MISSION — Two columns (text left, image right)
     ============================================================ --}}
<section class="coc-mission-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="coc-mission-badge">Our Mission</div>
                <h2 class="coc-section-title">Our Mission — Simplifying Digital Growth</h2>
                <p class="coc-text-muted">We believe every business deserves enterprise-level digital capabilities — without the complexity, delays, or inflated agency costs.</p>
                <div class="coc-divider"></div>
                <h3 class="coc-mission-subheading">Our Mission Is Simple</h3>
                <p class="coc-mission-quote">To deliver world-class digital solutions that empower businesses to grow — built with speed, precision, and purpose.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Digital Mission" class="coc-mission-img">
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 3: WHAT WE DO — Intro text + Two icon cards
     ============================================================ --}}
<section class="coc-whatwedo-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="coc-section-title">What We Do</h2>
            <p class="coc-lead-text mx-auto">We operate at the intersection of <strong>execution and innovation</strong> — combining a full-service digital studio with a powerful product ecosystem.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up">
                <div class="coc-service-card">
                    <div class="coc-service-icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3 class="coc-service-title">Ready-to-Use Digital Products</h3>
                    <p class="coc-service-desc">We also build templates, frameworks, themes, and AI tools designed to accelerate your business workflows.</p>
                    <a href="{{ route('digital-products') }}" class="coc-btn coc-btn-primary">View All Products</a>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="coc-service-card">
                    <div class="coc-service-icon">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3 class="coc-service-title">Done-for-You Services</h3>
                    <p class="coc-service-desc">From website design and SEO to eCommerce development, marketing automation, and server management — every service is crafted and delivered in-house by certified experts.</p>
                    <a href="{{ route('digital-services') }}" class="coc-btn coc-btn-primary">View All Gigs</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 4: CULTURE OF CHANGE — Identity list
     ============================================================ --}}
<section class="coc-identity-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="coc-section-title">Our Culture of Change</h2>
        </div>
        <div class="row align-items-start g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <p class="coc-culture-intro">Change isn't a buzzword for us — it's the heartbeat of Gnosys Digital. In a world that evolves every day, we've built a culture that embraces agility, innovation, and learning. We call it the "Culture of Change."</p>
                <p class="coc-text-muted mt-4">Our culture empowers everyone at Gnosys to think bigger, act faster, and stay human — no matter how digital the world becomes. Because transformation doesn't happen once — it happens every day, through people who choose to evolve.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <ul class="coc-identity-list">
                    <li>
                        <div class="coc-check-icon"><i class="fas fa-check"></i></div>
                        <div class="coc-identity-text">
                            <strong>We stay curious.</strong> Every challenge is a chance to learn, rethink, and improve.
                        </div>
                    </li>
                    <li>
                        <div class="coc-check-icon"><i class="fas fa-check"></i></div>
                        <div class="coc-identity-text">
                            <strong>We evolve with purpose.</strong> We experiment boldly, but always with clarity and intent.
                        </div>
                    </li>
                    <li>
                        <div class="coc-check-icon"><i class="fas fa-check"></i></div>
                        <div class="coc-identity-text">
                            <strong>We own what we deliver.</strong> Every line of code, every design, every campaign reflects our commitment to excellence.
                        </div>
                    </li>
                    <li>
                        <div class="coc-check-icon"><i class="fas fa-check"></i></div>
                        <div class="coc-identity-text">
                            <strong>We grow together.</strong> Collaboration is our default setting — across teams, geographies, and disciplines.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 5: THE GNOSYS WAY — Process steps on grey background
     ============================================================ --}}
<section class="coc-gnosys-way-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="coc-section-title">Our Approach — The Gnosys Way</h2>
            <p class="coc-lead-text mx-auto">We call it the "Culture of Change" — a mindset that drives everything we do. Change isn't a buzzword for us; it's the foundation of how we help our clients grow.</p>
        </div>
        <div class="row g-4">
            @foreach($steps as $step)
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="coc-way-card">
                    <div class="coc-way-number">{{ sprintf('%02d', $step->order) }}</div>
                    <h4 class="coc-way-title">{{ $step->title }}</h4>
                    <p class="coc-way-desc">{{ $step->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 6: WHY CHOOSE GNOSYS — 4 icon cards
     ============================================================ --}}
<section class="coc-why-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="coc-section-title">Why Choose Gnosys Digital</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6" data-aos="zoom-in">
                <div class="coc-why-card">
                    <div class="coc-why-icon"><i class="fas fa-brain"></i></div>
                    <h5 class="coc-why-title">Expert-Built, Not Outsourced</h5>
                    <p class="coc-why-desc">Every gig and product is made by our core team, ensuring quality, speed, and accountability.</p>
                    <div class="coc-why-underline"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="coc-why-card">
                    <div class="coc-why-icon"><i class="fas fa-star"></i></div>
                    <h5 class="coc-why-title">Seamless Experience</h5>
                    <p class="coc-why-desc">Buy, deploy, and grow — all from one trusted platform.</p>
                    <div class="coc-why-underline"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="coc-why-card">
                    <div class="coc-why-icon"><i class="fas fa-globe"></i></div>
                    <h5 class="coc-why-title">Global Presence</h5>
                    <p class="coc-why-desc">Serving clients across Canada, Switzerland, and India.</p>
                    <div class="coc-why-underline"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="coc-why-card">
                    <div class="coc-why-icon"><i class="fas fa-chart-line"></i></div>
                    <h5 class="coc-why-title">Real Results</h5>
                    <p class="coc-why-desc">We measure success by the outcomes we create, not just deliverables.</p>
                    <div class="coc-why-underline"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 7: OUR STORY — Dark blue banner
     ============================================================ --}}
<section class="coc-story-section">
    <div class="container" data-aos="fade-up">
        <div class="text-center">
            <h2 class="coc-story-title">Our Story</h2>
            <p class="coc-story-text mx-auto">Gnosys Digital was founded on a belief that digital transformation should be practical, affordable, and built for impact. What began as a marketing agency has evolved into a multi-disciplinary digital powerhouse — blending strategy, creativity, and technology under one roof.</p>
            <p class="coc-story-text mx-auto mt-4">We've partnered with businesses of every size — from startups to global enterprises — to simplify their digital journey and unlock growth potential.</p>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 8: MEET THE PEOPLE — Team carousel (testimonials)
     ============================================================ --}}
<section class="coc-team-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="coc-section-title">Meet the People Behind the Work</h2>
            <p class="coc-lead-text mx-auto">Our strength lies in our people — strategists, designers, developers, marketers, and data specialists — all working in harmony to turn complex challenges into beautiful, functional solutions.</p>
        </div>
        <div class="swiper coc-team-swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="coc-team-card">
                        <div class="coc-team-avatar">
                            <img src="https://ui-avatars.com/api/?name=Arpit+Patel&background=004a80&color=fff&size=100" alt="Arpit Patel">
                        </div>
                        <h5 class="coc-team-name">Arpit Patel</h5>
                        <p class="coc-team-role">Chief Executive Officer</p>
                        <p class="coc-team-quote">"Building Gnosys has been about turning our obsession with digital innovation into real impact for our clients worldwide."</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="coc-team-card">
                        <div class="coc-team-avatar">
                            <img src="https://ui-avatars.com/api/?name=Priya+Menon&background=0066cc&color=fff&size=100" alt="Priya Menon">
                        </div>
                        <h5 class="coc-team-name">Priya Menon</h5>
                        <p class="coc-team-role">Product Manager</p>
                        <p class="coc-team-quote">"Every product we ship goes through rigorous quality checks. We don't release work we wouldn't be proud to show our clients."</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="coc-team-card">
                        <div class="coc-team-avatar">
                            <img src="https://ui-avatars.com/api/?name=Daniel+Kim&background=003366&color=fff&size=100" alt="Daniel Kim">
                        </div>
                        <h5 class="coc-team-name">Daniel Kim</h5>
                        <p class="coc-team-role">Lead UX Designer</p>
                        <p class="coc-team-quote">"Good design is invisible — it just works for the user. That's what we strive for in every interface we create."</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="coc-team-card">
                        <div class="coc-team-avatar">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Chen&background=005599&color=fff&size=100" alt="Sarah Chen">
                        </div>
                        <h5 class="coc-team-name">Sarah Chen</h5>
                        <p class="coc-team-role">Head of Digital Marketing</p>
                        <p class="coc-team-quote">"Data-driven decisions and creative thinking — that combination is what separates campaigns that convert from campaigns that just exist."</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="coc-team-card">
                        <div class="coc-team-avatar">
                            <img src="https://ui-avatars.com/api/?name=Raj+Sharma&background=002244&color=fff&size=100" alt="Raj Sharma">
                        </div>
                        <h5 class="coc-team-name">Raj Sharma</h5>
                        <p class="coc-team-role">Senior Full-Stack Developer</p>
                        <p class="coc-team-quote">"We build with precision. Every system we deliver is architected to scale with the client's growth."</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination coc-swiper-pagination"></div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 9: GLOBAL PRESENCE — Dark world map background
     ============================================================ --}}
<section class="coc-global-section">
    <div class="container text-center" data-aos="fade-up">
        <div class="coc-global-badge">Our Global Presence</div>
        <div class="row g-4 mt-3 justify-content-center">
            @forelse($locations as $location)
            <div class="col-md-4 col-sm-6">
                <div class="coc-location-card">
                    <i class="{{ $location->icon ?? 'fas fa-map-marker-alt' }} coc-location-icon"></i>
                    <h4 class="coc-location-country">{{ $location->country }}</h4>
                    <p class="coc-location-city">{{ $location->city }}</p>
                </div>
            </div>
            @empty
            <div class="col-md-4">
                <div class="coc-location-card">
                    <i class="fas fa-map-marker-alt coc-location-icon"></i>
                    <h4 class="coc-location-country">Canada</h4>
                    <p class="coc-location-city">Toronto</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coc-location-card">
                    <i class="fas fa-map-marker-alt coc-location-icon"></i>
                    <h4 class="coc-location-country">Switzerland</h4>
                    <p class="coc-location-city">Zurich</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coc-location-card">
                    <i class="fas fa-map-marker-alt coc-location-icon"></i>
                    <h4 class="coc-location-country">India</h4>
                    <p class="coc-location-city">Rajkot, Gujarat</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 10: CTA — Ready to Work With Us?
     ============================================================ --}}
<section class="coc-cta-section">
    <div class="container text-center" data-aos="zoom-in">
        <h2 class="coc-cta-title">Ready to Work With Us?</h2>
        <p class="coc-cta-desc mx-auto">Whether you're looking to launch your online presence, scale your eCommerce, or automate your marketing. Gnosys Digital is your in-house digital team on demand.</p>
        <div class="coc-cta-buttons">
            <a href="{{ route('digital-services') }}" class="coc-btn coc-btn-primary">Explore Our Gigs</a>
            <a href="{{ route('contact') }}" class="coc-btn coc-btn-outline">Get in Touch</a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper('.coc-team-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.coc-swiper-pagination', clickable: true },
        breakpoints: {
            576: { slidesPerView: 2 },
            992: { slidesPerView: 3 },
        }
    });
</script>
@endpush
