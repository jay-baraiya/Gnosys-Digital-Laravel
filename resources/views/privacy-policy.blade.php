@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="page-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="page-hero-title">Privacy Policy</h1>
                <p class="page-hero-subtitle">Effective Date: 31st December 2025</p>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="policy-content-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="policy-content">
                    <div class="policy-section">
                        <h2>1. Introduction</h2>
                        <p>Welcome to Gnosys Digital ("we", "our", "us"), operated by Dwarkadhish E-Commerce Private Limited (DEPL).</p>
                        <p>We respect your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website: <a href="https://gnosysdigital.com/" target="_blank">https://gnosysdigital.com/</a></p>
                        <p>By using our website, you agree to the terms of this Privacy Policy.</p>
                    </div>

                    <div class="policy-section">
                        <h2>2. Information We Collect</h2>
                        
                        <h3>a. Personal Information</h3>
                        <p>We may collect personal information that you voluntarily provide, including:</p>
                        <ul>
                            <li>Name</li>
                            <li>Email address</li>
                            <li>Phone number</li>
                            <li>Business details</li>
                            <li>Any information submitted via forms, contact pages, or inquiries</li>
                        </ul>

                        <h3>b. Non-Personal Information</h3>
                        <p>We may automatically collect:</p>
                        <ul>
                            <li>IP address</li>
                            <li>Browser type</li>
                            <li>Device information</li>
                            <li>Pages visited</li>
                            <li>Time spent on the website</li>
                        </ul>

                        <h3>c. Cookies & Tracking Technologies</h3>
                        <p>We use cookies and similar technologies to enhance your browsing experience, analyze traffic, and improve our services.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>3. How We Use Your Information</h2>
                        <p>We use the collected information to:</p>
                        <ul>
                            <li>Provide and manage our services</li>
                            <li>Respond to inquiries and customer support requests</li>
                            <li>Improve website performance and user experience</li>
                            <li>Send updates, marketing communications, or service-related information</li>
                            <li>Analyze trends and usage patterns</li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>4. Sharing of Information</h2>
                        <p>We do not sell your personal data. However, we may share your information with:</p>
                        <ul>
                            <li>Service providers and partners assisting in business operations</li>
                            <li>Legal authorities if required by law</li>
                            <li>Third-party tools (e.g., analytics, CRM systems) used to improve our services</li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>5. Data Security</h2>
                        <p>We implement reasonable security measures to protect your data. However, no method of transmission over the Internet is completely secure, and we cannot guarantee absolute security.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>6. Your Rights</h2>
                        <p>Depending on your location, you may have the right to:</p>
                        <ul>
                            <li>Access your personal data</li>
                            <li>Request correction or deletion</li>
                            <li>Withdraw consent for data processing</li>
                            <li>Opt out of marketing communications</li>
                        </ul>
                        <p>To exercise your rights, please contact us using the details below.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>7. Third-Party Links</h2>
                        <p>Our website may contain links to external websites. We are not responsible for the privacy practices or content of those third-party sites.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>8. Retention of Data</h2>
                        <p>We retain your personal information only as long as necessary for the purposes outlined in this policy or as required by law.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>9. Children's Privacy</h2>
                        <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect data from children.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>10. Updates to This Policy</h2>
                        <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with the updated effective date.</p>
                    </div>

                    <div class="policy-section" >
                        <h2>11. Contact Us</h2>
                        <p>If you have any questions or concerns about this Privacy Policy, you can contact us at:</p>
                        <ul>
                            <li><strong>Company Name:</strong> Dwarkadhish E-Commerce Private Limited (DEPL)</li>
                            <li><strong>Brand Name:</strong> Gnosys Digital</li>
                            <li><strong>Website:</strong> <a href="https://gnosysdigital.com/" target="_blank">https://gnosysdigital.com/</a></li>
                            <li><strong>Email:</strong> <a href="mailto:connect@gnosysdigital.com">connect@gnosysdigital.com</a></li>
                        </ul>
                    </div>

                    <div class="policy-section" >
                        <h2>12. Consent</h2>
                        <p>By using our website, you consent to our Privacy Policy and agree to its terms.</p>
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

.policy-section ul {
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
