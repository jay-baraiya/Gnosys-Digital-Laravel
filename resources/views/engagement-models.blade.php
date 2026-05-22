@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="page-hero-section">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <div class="badge bg-white text-primary mb-3 mt-3 px-3 py-2 rounded-pill shadow-sm" data-aos="fade-up" style="font-size: 0.9rem;">
                    <i class="fas fa-layer-group me-1"></i> Delivery & Engagement
                </div>
                <h1 class="page-hero-title fw-bold" data-aos="fade-up" data-aos-delay="100" style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.2; text-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    Delivery & <span style="color: #fcd34d;">Engagement Models</span>
                </h1>
                <p class="page-hero-subtitle mt-3 mb-4 mx-auto" data-aos="fade-up" data-aos-delay="200" style="font-size: 1.2rem; opacity: 0.9; max-width: 600px;">
                    Smart, Scalable Delivery Models for Every Business. <br>
                    Transparent pricing. Clear deliverables. Real accountability.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap mt-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white bg-opacity-10 rounded-pill px-4 py-2 border border-white border-opacity-25 text-white fw-medium">
                        <i class="fas fa-bullseye me-2" style="color: #fcd34d;"></i> Fixed Scope
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-pill px-4 py-2 border border-white border-opacity-25 text-white fw-medium">
                        <i class="fas fa-sync-alt me-2" style="color: #6ee7b7;"></i> Retainer
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-pill px-4 py-2 border border-white border-opacity-25 text-white fw-medium">
                        <i class="fas fa-layer-group me-2" style="color: #93c5fd;"></i> Hybrid
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-pill px-4 py-2 border border-white border-opacity-25 text-white fw-medium">
                        <i class="fas fa-bolt me-2" style="color: #fcd34d;"></i> Task-Based
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="engagement-content-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Introduction Section -->
                <div class="intro-section text-center mb-5">
                    <p class="lead">Whether you're launching your first website or optimizing an existing digital ecosystem - our flexible engagement models fit your goals, timeline, and budget.</p>
                    <p class="text-muted">Transparent pricing. Clear deliverables. Real accountability.</p>
                    <div class="mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3">Talk to a Project Consultant</a>
                        <a href="#" class="btn btn-outline-primary btn-lg">See Example Projects</a>
                    </div>
                </div>

                <!-- Built for Clarity Section -->
                <div class="clarity-section mb-5">
                    <h2 class="section-title text-center mb-4">Built for Clarity, Speed, and Control</h2>
                    <p class="text-center text-muted mb-5">Small businesses and startups need digital partners who move fast - but with discipline. Gnosys Digital bridges agency-grade processes with startup-level agility. Every engagement comes with fixed scope, transparent milestones, and structured reporting through the TDWS Project Platform.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h4>Fixed Scope, No Surprises</h4>
                                <p>Clear deliverables and timeline before kickoff</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <h4>Agile Delivery</h4>
                                <p>Short sprints, milestone reviews, and real-time updates</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h4>Transparent Reporting</h4>
                                <p>Daily progress tracking via TDWS Platform</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h4>Direct Communication</h4>
                                <p>Work directly with project leads, not layers of managers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery Models Section -->
                <div class="delivery-models-section mb-5">
                    <h2 class="section-title text-center mb-5">Our Delivery Models</h2>
                    
                    <div class="row g-4">
                        <!-- Fixed Scope Projects -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="model-card">
                                <div class="model-header">
                                    <h3>1. Fixed Scope Projects</h3>
                                    <div class="model-badge">Most Popular</div>
                                </div>
                                <div class="model-content">
                                    <p><strong>Best For:</strong> Clients who need clearly defined deliverables (e.g., websites, automation setups, integrations).</p>
                                    
                                    <h5>How It Works:</h5>
                                    <ul>
                                        <li>Fixed deliverables and cost agreed before start</li>
                                        <li>Detailed project plan with weekly checkpoints</li>
                                        <li>Payment milestones tied to delivery stage</li>
                                    </ul>
                                    
                                    <div class="model-range">
                                        <span class="range-label">Range:</span>
                                        <span class="range-value">Rs. 50,000 - Rs. 3,00,000</span>
                                    </div>
                                    
                                    <p><strong>Ideal For:</strong> Website design, SEO packages, digital product builds</p>
                                    
                                    <a href="{{ route('contact') }}" class="btn btn-primary w-100">Start a Fixed Scope Project</a>
                                </div>
                            </div>
                        </div>

                        <!-- Retainer-Based Engagements -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="model-card">
                                <div class="model-header">
                                    <h3>2. Retainer-Based Engagements</h3>
                                    <div class="model-badge">Ongoing Support</div>
                                </div>
                                <div class="model-content">
                                    <p><strong>Best For:</strong> Ongoing work that requires regular attention - marketing, maintenance, updates, or multi-phase development.</p>
                                    
                                    <h5>How It Works:</h5>
                                    <ul>
                                        <li>Monthly retainer with fixed number of hours or deliverables</li>
                                        <li>Priority support & reduced hourly rate</li>
                                        <li>Monthly reporting + planning call</li>
                                    </ul>
                                    
                                    <div class="model-range">
                                        <span class="range-label">Range:</span>
                                        <span class="range-value">Rs. 60,000 - Rs. 1,50,000 per month</span>
                                    </div>
                                    
                                    <p><strong>Ideal For:</strong> Marketing retainers, SEO, content, server management</p>
                                    
                                    <a href="{{ route('contact') }}" class="btn btn-primary w-100">Book a Retainer</a>
                                </div>
                            </div>
                        </div>

                        <!-- Hybrid Model -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="model-card">
                                <div class="model-header">
                                    <h3>3. Hybrid Model</h3>
                                    <div class="model-badge">Best Value</div>
                                </div>
                                <div class="model-content">
                                    <p><strong>Best For:</strong> Clients who want a fixed deliverable (like a website or automation) followed by monthly support or growth management.</p>
                                    
                                    <h5>How It Works:</h5>
                                    <ul>
                                        <li>Phase 1: Fixed-scope build (design/development)</li>
                                        <li>Phase 2: Post-launch retainer (marketing/maintenance)</li>
                                        <li>Seamless handover to same internal team for continuity</li>
                                    </ul>
                                    
                                    <div class="model-range">
                                        <span class="range-label">Range:</span>
                                        <span class="range-value">Rs. 1,00,000 - Rs. 3,00,000 initial + retainer</span>
                                    </div>
                                    
                                    <p><strong>Ideal For:</strong> eCommerce builds, SaaS, content platforms</p>
                                    
                                    <a href="{{ route('contact') }}" class="btn btn-primary w-100">Explore Hybrid Model</a>
                                </div>
                            </div>
                        </div>

                        <!-- Task-Based Mini Engagements -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="800">
                            <div class="model-card">
                                <div class="model-header">
                                    <h3>4. Task-Based Mini Engagements</h3>
                                    <div class="model-badge">Quick Start</div>
                                </div>
                                <div class="model-content">
                                    <p><strong>Best For:</strong> Businesses that want to test working with you on a smaller task.</p>
                                    
                                    <h5>How It Works:</h5>
                                    <ul>
                                        <li>Small, standalone deliverables (< Rs. 50,000)</li>
                                        <li>Quick turnarounds - 2-5 days</li>
                                        <li>Prepaid via Gnosys Gigs</li>
                                    </ul>
                                    
                                    <div class="model-range">
                                        <span class="range-label">Example:</span>
                                        <span class="range-value">Speed optimization, landing page setup, SEO audit</span>
                                    </div>
                                    
                                    <a href="{{ route('digital-services') }}" class="btn btn-primary w-100">View Gigs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery Process Section -->
                <div class="delivery-process-section mb-5">
                    <h2 class="section-title text-center mb-5">Our Delivery Process</h2>
                    
                    <div class="process-timeline">
                        <div class="process-step" data-aos="fade-up" data-aos-delay="900">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Discovery & Scoping</h4>
                                <p>We define requirements, scope, and timelines.</p>
                            </div>
                        </div>
                        
                        <div class="process-step" data-aos="fade-up" data-aos-delay="1000">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Proposal & Agreement</h4>
                                <p>Transparent quote with milestones & deliverables.</p>
                            </div>
                        </div>
                        
                        <div class="process-step" data-aos="fade-up" data-aos-delay="1100">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Kickoff & Execution</h4>
                                <p>Dedicated team starts work with real-time progress tracking.</p>
                            </div>
                        </div>
                        
                        <div class="process-step" data-aos="fade-up" data-aos-delay="1200">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Review & Feedback</h4>
                                <p>Weekly checkpoints ensure continuous alignment.</p>
                            </div>
                        </div>
                        
                        <div class="process-step" data-aos="fade-up" data-aos-delay="1300">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Delivery & Handover</h4>
                                <p>Final delivery, documentation, and ownership transfer.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-5">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Start Your Implementation</a>
                    </div>
                </div>

                <!-- Transparency Promise Section -->
                <div class="transparency-section mb-5">
                    <h2 class="section-title text-center mb-5">Our Transparency Promise</h2>
                    <p class="text-center text-muted mb-4">We believe clarity builds confidence. Every engagement at Gnosys Digital includes:</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="1400">
                            <div class="transparency-item">
                                <i class="fas fa-file-contract"></i>
                                <h5>Detailed proposals & documented deliverables</h5>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="1500">
                            <div class="transparency-item">
                                <i class="fas fa-tag"></i>
                                <h5>Fixed-cost estimates before we start</h5>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="1600">
                            <div class="transparency-item">
                                <i class="fas fa-flag-checkered"></i>
                                <h5>Milestone-based billing - no hidden charges</h5>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="1700">
                            <div class="transparency-item">
                                <i class="fas fa-chart-bar"></i>
                                <h5>Weekly progress reports</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-6 mx-auto" data-aos="fade-up" data-aos-delay="1800">
                            <div class="transparency-item">
                                <i class="fas fa-comments"></i>
                                <h5>Centralized communication via TDWS Platform</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study Section -->
                <div class="case-study-section mb-5">
                    <h2 class="section-title text-center mb-5">How Our Delivery Model Scales Growth</h2>
                    
                    <div class="case-study-card">
                        <div class="case-study-header">
                            <h4>Success Story: Shopify + Automation Setup (Canada)</h4>
                            <div class="case-study-meta">
                                <span class="badge bg-primary">Hybrid Engagement</span>
                                <span class="duration">4 weeks</span>
                            </div>
                        </div>
                        <div class="case-study-content">
                            <div class="results">
                                <div class="result-item">
                                    <span class="result-number">40%</span>
                                    <span class="result-label">faster launch</span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number">2x</span>
                                    <span class="result-label">improvement in order accuracy</span>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-footer">
                            <a href="#" class="btn btn-outline-primary">View More Case Studies</a>
                        </div>
                    </div>
                </div>

                <!-- CTA Section with Form -->
                <div class="cta-section">
                    <div class="container">
                        <div class="row">
                            <!-- Left Side - Content -->
                            <div class="col-lg-6">
                                <h2 class="section-title mb-4">Let's Discuss the Right Model for Your Project</h2>
                                <p class="text-muted mb-5">Whether you have a small website, a multi-phase digital plan, or a monthly growth requirement - we'll suggest the engagement model that fits best.</p>
                                
                                <div class="contact-info">
                                    <div class="contact-item mb-4">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p><strong>Address-CA:</strong><br>1664, 225 The East Mall, Toronto, ON, M9B 0A9</p>
                                    </div>
                                    <div class="contact-item mb-4">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p><strong>Address-UK:</strong><br>20-22 Wenlock Road, London N1 7GU, United Kingdom</p>
                                    </div>
                                    <div class="contact-item mb-4">
                                        <i class="fas fa-phone"></i>
                                        <p><strong>Phone:</strong><br>+1 647 947 9546</p>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <p><strong>E-Mail:</strong><br>connect@gnosysdigital.com</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Right Side - Form -->
                            <div class="col-lg-6">
                                <div class="cta-form-wrapper">
                                    <h3 class="form-title mb-4">Get Your Free Estimate</h3>
                                    
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <form action="{{ route('contact.store') }}" method="POST" class="cta-form">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name*</label>
                                            <input type="text" class="form-control" name="first_name" id="name" placeholder="Your full name" required>
                                            @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="your@email.com" required>
                                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="budget" class="form-label">Budget</label>
                                            <select class="form-select" name="budget" id="budget">
                                                <option value="">Choose Budget</option>
                                                <option value="50k-100k">Rs. 50,000 - Rs. 100,000</option>
                                                <option value="100k-200k">Rs. 100,000 - Rs. 200,000</option>
                                                <option value="200k-300k">Rs. 200,000 - Rs. 300,000</option>
                                                <option value="300k+">Rs. 300,000+</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <label for="project_type" class="form-label">Project Type</label>
                                            <select class="form-select" name="project_type" id="project_type">
                                                <option value="">Select Project Type</option>
                                                <option value="fixed-scope">Fixed Scope Project</option>
                                                <option value="retainer">Retainer-Based Engagement</option>
                                                <option value="hybrid">Hybrid Model</option>
                                                <option value="task-based">Task-Based Mini Engagement</option>
                                                <option value="consultation">Consultation</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <label for="message" class="form-label">Project Details</label>
                                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Tell us about your project requirements..."></textarea>
                                            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary w-100 py-3">
                                            <i class="fas fa-paper-plane me-2"></i> Get My Estimate
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.engagement-content-section {
    background: var(--g-bg-light);
}

.section-title {
    color: var(--g-accent);
    font-weight: 700;
    margin-bottom: 40px;
    position: relative;
    padding-bottom: 15px;
}
.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, var(--g-primary), var(--g-accent));
    border-radius: 4px;
}
.text-center.section-title::after {
    left: 50%;
    transform: translateX(-50%);
}

.feature-card {
    background: var(--g-bg-white);
    padding: 40px 20px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.feature-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, var(--g-primary) 0%, var(--g-accent) 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
}

.feature-card h4 {
    color: var(--g-text);
    font-weight: 600;
    margin-bottom: 15px;
}

.feature-card p {
    color: var(--g-text);
    margin-bottom: 0;
    opacity: 0.8;
}

.model-card {
    background: var(--g-bg-white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.model-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.model-header {
    background: linear-gradient(135deg, var(--g-light-blue) 0%, var(--g-primary) 100%);
    color: white;
    padding: 20px;
    position: relative;
}

.model-header h3 {
    margin: 0;
    font-weight: 600;
}

.model-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(255,255,255,0.2);
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.model-content {
    padding: 30px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.model-content .btn {
    margin-top: auto;
}

.model-content h5 {
    color: var(--g-accent);
    font-weight: 600;
    margin-top: 20px;
    margin-bottom: 15px;
}

.model-content ul {
    margin-bottom: 20px;
}

.model-content li {
    color: var(--g-text);
    margin-bottom: 8px;
    opacity: 0.8;
}

.model-range {
    background: var(--g-bg-light);
    padding: 15px;
    border-radius: 8px;
    margin: 20px 0;
    border-left: 4px solid var(--g-accent);
}

.range-label {
    font-weight: 600;
    color: var(--g-text);
}

.range-value {
    color: var(--g-accent);
    font-weight: 600;
}

.process-timeline {
    position: relative;
    margin: 50px 0;
}

.process-step {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    position: relative;
    z-index: 1;
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--g-primary) 0%, var(--g-accent) 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    font-weight: 700;
    margin-right: 30px;
    flex-shrink: 0;
}

.step-content h4 {
    color: var(--g-accent);
    font-weight: 600;
    margin-bottom: 10px;
}

.step-content p {
    color: var(--g-text);
    margin-bottom: 0;
    opacity: 0.8;
}

.transparency-item {
    display: flex;
    align-items: center;
    padding: 20px;
    background: var(--g-bg-white);
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.transparency-item:hover {
    transform: translateY(-3px);
}

.transparency-item i {
    font-size: 2rem;
    color: var(--g-accent);
    margin-right: 20px;
    width: 50px;
    text-align: center;
}

.transparency-item h5 {
    margin: 0;
    color: var(--g-text);
    font-weight: 600;
}

.case-study-card {
    background: var(--g-bg-white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.case-study-header {
    padding: 30px;
    background: linear-gradient(135deg, var(--g-bg-light) 0%, #e9ecef 100%);
    border-bottom: 1px solid var(--g-border);
}

.case-study-header h4 {
    color: var(--g-text);
    font-weight: 600;
    margin-bottom: 15px;
}

.case-study-meta {
    display: flex;
    align-items: center;
    gap: 15px;
}

.duration {
    color: var(--g-text);
    font-size: 0.9rem;
    opacity: 0.7;
}

.case-study-content {
    padding: 30px;
}

.results {
    display: flex;
    justify-content: space-around;
    gap: 30px;
}

.result-item {
    text-align: center;
}

.result-number {
    display: block;
    font-size: 3rem;
    font-weight: 700;
    color: var(--g-accent);
    line-height: 1;
}

.result-label {
    color: var(--g-text);
    font-size: 0.9rem;
    margin-top: 10px;
    display: block;
    opacity: 0.8;
}

.case-study-footer {
    padding: 20px 30px;
    background: var(--g-bg-light);
    text-align: center;
}

.cta-section {
    background: var(--g-bg-white);
    padding: 80px 0;
    margin-top: 50px;
}

.cta-form-wrapper {
    background: var(--g-bg-light);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.form-title {
    color: var(--g-accent);
    font-weight: 700;
    font-size: 1.5rem;
    margin-bottom: 30px;
}

.cta-form .form-label {
    color: var(--g-text);
    font-weight: 600;
    margin-bottom: 8px;
}

.cta-form .form-control,
.cta-form .form-select {
    background: var(--g-bg-white);
    border: 1px solid var(--g-border);
    border-radius: 8px;
    padding: 12px 15px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.cta-form .form-control:focus,
.cta-form .form-select:focus {
    border-color: var(--g-primary);
    box-shadow: 0 0 0 3px rgba(42, 123, 155, 0.1);
    outline: none;
}

.cta-form .form-control::placeholder {
    color: #94a3b8;
    opacity: 0.7;
}

.cta-form .btn-primary {
    background: var(--g-accent);
    border: none;
    padding: 15px 30px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.cta-form .btn-primary:hover {
    background: var(--g-text);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 15px;
    background: var(--g-bg-white);
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.contact-item i {
    color: var(--g-accent);
    margin-right: 15px;
    font-size: 1.2rem;
    margin-top: 3px;
    width: 20px;
    text-align: center;
}

.contact-item p {
    margin: 0;
    color: var(--g-text);
    font-size: 0.9rem;
    line-height: 1.5;
}

.contact-item strong {
    color: var(--g-text);
    font-weight: 600;
}

.page-hero-title {
    color: white;
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.page-hero-subtitle {
    color: rgba(255,255,255,0.9);
    font-size: 1.2rem;
    margin-bottom: 0;
}

.page-hero-section {
    background: linear-gradient(135deg, var(--g-primary) 0%, var(--g-accent) 100%);
    padding: 100px 0 80px;
    position: relative;
    overflow: hidden;
}

.page-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="10" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="90" cy="30" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

@media (max-width: 768px) {
    .page-hero-title {
        font-size: 2rem;
    }
    
    .page-hero-subtitle {
        font-size: 1rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .feature-card {
        padding: 30px 15px;
    }
    
    .model-content {
        padding: 20px;
    }
    
    .process-step {
        flex-direction: column;
        text-align: center;
    }
    
    .step-number {
        margin-right: 0;
        margin-bottom: 20px;
    }
    
    .results {
        flex-direction: column;
        gap: 20px;
    }
    
    .cta-section {
        padding: 40px 20px;
    }
    
    .contact-info .row {
        flex-direction: column;
    }
}
</style>
@endsection
