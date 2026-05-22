@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="page-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="page-hero-title">Refund & Returns Policy</h1>
                <p class="page-hero-subtitle">Effective Date: 31st December 2025</p>
            </div>
        </div>
    </div>
</section>

<!-- Refund & Returns Policy Content -->
<section class="policy-content-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="policy-content">
                    <div class="policy-section">
                        <h2>1. Overview</h2>
                        <p>This Refund & Returns Policy applies to Gnosys Digital, a brand operated by Dwarkadhish E-Commerce Private Limited (DEPL).</p>
                        <p>As we provide services and digital products, this policy outlines the conditions under which refunds may be granted.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>2. Nature of Offerings</h2>
                        <p>Gnosys Digital provides:</p>
                        <ul>
                            <li>Digital products (downloads, templates, resources, etc.)</li>
                            <li>Service-based offerings (consulting, development, support, etc.)</li>
                        </ul>
                        <p>We do not sell any physical goods, and therefore, traditional returns are not applicable.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>3. Refund Eligibility for Services</h2>
                        <p>Refunds for services are only applicable in case of failure of service, defined as:</p>
                        <ul>
                            <li>Non-delivery of agreed service</li>
                            <li>Inability to complete service due to our limitations</li>
                            <li>Significant deviation from agreed scope without resolution</li>
                        </ul>
                        
                        <h3>Important Conditions:</h3>
                        <ul>
                            <li>Refund requests must be raised within 7 days of issue</li>
                            <li>The issue must be clearly documented and communicated</li>
                            <li>Gnosys Digital must be given a reasonable opportunity to resolve issue before refund consideration</li>
                            <li>If service has been partially delivered, a partial refund may be issued at our discretion</li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>4. No Refund Policy for Digital Products</h2>
                        <p>All digital product purchases are final and non-refundable.</p>
                        <p>Once a product is:</p>
                        <ul>
                            <li>Downloaded</li>
                            <li>Accessed</li>
                            <li>Delivered electronically</li>
                        </ul>
                        <p>No refunds will be issued under any circumstances, including:</p>
                        <ul>
                            <li>Change of mind</li>
                            <li>Incorrect purchase</li>
                            <li>Lack of usage</li>
                            <li>Compatibility issues</li>
                        </ul>
                        <p>We strongly recommend reviewing product details carefully before making a purchase.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>5. Non-Refundable Situations</h2>
                        <p>Refunds will not be provided in the following cases:</p>
                        <ul>
                            <li>Delays caused by a lack of client response or input</li>
                            <li>Change in project scope after work has started</li>
                            <li>Client-side technical issues</li>
                            <li>Third-party tool limitations or failures beyond our control</li>
                            <li>Completed and delivered services</li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>6. Refund Process</h2>
                        <p>To request a refund, please contact us with:</p>
                        <ul>
                            <li>Order details</li>
                            <li>Description of issue</li>
                            <li>Supporting evidence (if applicable)</li>
                        </ul>
                        <p><strong>Contact Email:</strong> <a href="mailto:connect@gnosysdigital.com">connect@gnosysdigital.com</a></p>
                        <p>Once reviewed:</p>
                        <ul>
                            <li>Approved refunds will be processed within 7–10 business days</li>
                            <li>Refunds will be issued via original payment method</li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>7. Policy Updates</h2>
                        <p>We reserve the right to modify this policy at any time. Updates will be posted on this page with the revised effective date.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>8. Contact Information</h2>
                        <ul>
                            <li><strong>Company Name:</strong> Dwarkadhish E-Commerce Private Limited (DEPL)</li>
                            <li><strong>Brand Name:</strong> Gnosys Digital</li>
                            <li><strong>Website:</strong> <a href="https://gnosysdigital.com/" target="_blank">https://gnosysdigital.com/</a></li>
                            <li><strong>Email:</strong> <a href="mailto:connect@gnosysdigital.com">connect@gnosysdigital.com</a></li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>9. Consent</h2>
                        <p>By purchasing our services or digital products, you acknowledge that you have read, understood, and agreed to this Refund & Returns Policy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.policy-content-section {
    background: var(--g-bg-light);
}

.policy-content {
    background: var(--g-bg-white);
    padding: 50px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.policy-section {
    margin-bottom: 40px;
}

.policy-section:last-child {
    margin-bottom: 0;
}

.policy-section h2 {
    color: var(--g-accent);
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    border-bottom: 3px solid var(--g-accent);
    padding-bottom: 10px;
}

.policy-section h3 {
    color: var(--g-text);
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 25px;
    margin-bottom: 15px;
}

.policy-section p {
    color: var(--g-text);
    line-height: 1.8;
    margin-bottom: 15px;
    opacity: 0.8;
}

.policy-section ul, .policy-section ol {
    margin: 20px 0;
    padding-left: 25px;
}

.policy-section li {
    color: var(--g-text);
    line-height: 1.8;
    margin-bottom: 8px;
    opacity: 0.8;
}

.policy-section a {
    color: var(--g-accent);
    text-decoration: none;
    font-weight: 500;
}

.policy-section a:hover {
    text-decoration: underline;
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
    .policy-content {
        padding: 30px 20px;
    }
    
    .page-hero-title {
        font-size: 2rem;
    }
    
    .page-hero-subtitle {
        font-size: 1rem;
    }
    
    .policy-section h2 {
        font-size: 1.3rem;
    }
    
    .policy-section h3 {
        font-size: 1.1rem;
    }
}
</style>
@endsection
