<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DigitalService;
use App\Models\Category;
use Illuminate\Support\Str;

class DigitalServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define Categories
        $categories = [
            'Website Development', 
            'Mobile Application', 
            'UI/UX Design', 
            'Digital Marketing', 
            'ERPNext Implementation',
            'AI Automation',
            'Data Services',
            'SEO Services',
            'Web Development',
            'eCommerce Development',
            'Web & App Development'
        ];
        $categoryMap = [];

        foreach ($categories as $catName) {
            $cat = Category::firstOrCreate(
                ['slug' => Str::slug($catName), 'type' => 'service'],
                ['name' => $catName]
            );
            $categoryMap[$catName] = $cat->id;
        }

        $services = [
            // ERPNext
            [
                'title' => 'ERPNext Implementation',
                'service_id' => 'ERP-001',
                'category' => 'ERPNext Implementation',
                'subcategory' => 'ERP',
                'price' => '1500.00',
                'sort_order' => 1,
                'short_description' => 'Comprehensive ERPNext setup and configuration for your business.',
                'description' => 'We provide end-to-end ERPNext implementation services, including module configuration, user training, and data migration.',
                'detailed_description' => '<h3>Streamline Your Business with ERPNext</h3><p>Enterprise Resource Planning (ERP) is the backbone of any modern business. We specialize in ERPNext, the world\'s best open-source ERP system.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-cogs', 'title' => 'Custom Modules', 'text' => 'Tailored configurations for your specific workflows.'],
                    ['icon' => 'fas fa-database', 'title' => 'Data Migration', 'text' => 'Safe and secure transfer of your existing business data.'],
                    ['icon' => 'fas fa-users', 'title' => 'Staff Training', 'text' => 'Onboarding your team to ensure maximum productivity.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Financial Accounting', 'icon' => 'fas fa-calculator', 'text' => 'Manage accounts, tax, and payroll with ease.'],
                    ['title' => 'Inventory & Stock', 'icon' => 'fas fa-warehouse', 'text' => 'Real-time tracking of stock levels.'],
                ],
                'process_steps' => [
                    ['title' => 'Requirement Analysis', 'text' => 'We study your current business processes.'],
                    ['title' => 'Go-Live', 'text' => 'Launching the system with support.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Module Configuration', 'Data Migration'],
            ],
            // AI Automation
            [
                'title' => 'AI Chatbot Development',
                'service_id' => 'AI-001',
                'category' => 'AI Automation',
                'subcategory' => 'AI',
                'price' => '850.00',
                'sort_order' => 2,
                'short_description' => 'Custom AI chatbots to automate customer support and engagement.',
                'description' => 'Leverage the power of AI to provide 24/7 support to your customers.',
                'detailed_description' => '<h3>Next-Gen AI Support for Your Brand</h3><p>Automate up to 80% of your customer queries with our advanced AI chatbot solutions.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-brain', 'title' => 'NLP Engine', 'text' => 'Natural Language Processing for human-like conversations.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Lead Qualification', 'icon' => 'fas fa-filter', 'text' => 'Automatically qualify leads into your CRM.'],
                ],
                'process_steps' => [
                    ['title' => 'Training', 'text' => 'Feeding the bot with your data.'],
                    ['title' => 'Launch', 'text' => 'Deploying across platforms.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1531746790731-6c087fecd05a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['NLP Integration', 'Custom Training'],
            ],
            // Social Media Management
            [
                'title' => 'All-in-One Social Media Management',
                'service_id' => 'DM-005',
                'category' => 'Digital Marketing',
                'subcategory' => 'Marketing',
                'price' => '500.00',
                'sort_order' => 3,
                'short_description' => 'Complete management of your social media presence across all platforms.',
                'description' => 'Grow your brand online with our comprehensive social media management service.',
                'detailed_description' => '<h3>Master Your Social Media Presence</h3><p>We help you cut through the noise with data-driven content strategies.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-bullhorn', 'title' => 'Brand Growth', 'text' => 'Increase reach and engagement organically.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Community Management', 'icon' => 'fas fa-comments', 'text' => 'Responding to messages to build trust.'],
                ],
                'process_steps' => [
                    ['title' => 'Strategy', 'text' => 'Setting goals and planning content.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Platform Management', 'Content Strategy'],
            ],
            // WooCommerce
            [
                'title' => 'A Top Notch WooCommerce Online Store',
                'service_id' => 'WD-005',
                'category' => 'Website Development',
                'subcategory' => 'Web',
                'price' => '1200.00',
                'sort_order' => 4,
                'short_description' => 'Scalable online stores with seamless checkout experiences.',
                'description' => 'Build a powerful online presence with our professional WooCommerce development services.',
                'detailed_description' => '<h3>Your Professional Online Store</h3><p>We specialized in creating high-converting, beautiful WooCommerce stores.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-rocket', 'title' => 'High Speed', 'text' => 'Optimized for core web vitals.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Custom UI/UX', 'icon' => 'fas fa-paint-brush', 'text' => 'Tailored designs for your brand.'],
                ],
                'process_steps' => [
                    ['title' => 'Launch', 'text' => 'Going live with full support.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Payment Integration', 'Inventory Management'],
            ],
            // UI/UX Complete Prototype
            [
                'title' => 'Complete Prototype',
                'service_id' => 'UX-002',
                'category' => 'UI/UX Design',
                'subcategory' => 'Design',
                'price' => '350.00',
                'sort_order' => 5,
                'short_description' => 'Comprehensive, fully navigable prototypes for your next big idea.',
                'description' => 'We create high-fidelity prototypes that look and feel like the real product.',
                'detailed_description' => '<h3>Validate Your Idea Faster</h3><p>Create a stunning prototype to test your MVP before coding.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-mouse-pointer', 'title' => 'Interactive', 'text' => 'Fully clickable Figma prototypes.'],
                ],
                'service_features_grid' => [
                    ['title' => 'User Journey', 'icon' => 'fas fa-map-signs', 'text' => 'Mapping every interaction.'],
                ],
                'process_steps' => [
                    ['title' => 'Prototyping', 'text' => 'Connecting screens into a flow.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1586717791821-3f44a563eb4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Figma Prototype', 'Dev Handoff'],
            ],
            // Business Website
            [
                'title' => 'Business Website',
                'service_id' => 'WD-001',
                'category' => 'Website Development',
                'subcategory' => 'Corporate',
                'price' => '500.00',
                'sort_order' => 6,
                'short_description' => 'Professional corporate websites to build trust and authority.',
                'description' => 'Showcase your brand with a stunning business website.',
                'detailed_description' => '<h3>Establish Your Digital Headquarters</h3><p>Your business website is your 24/7 salesperson.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-briefcase', 'title' => 'Professional', 'text' => 'Modern designs for modern brands.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Contact Forms', 'icon' => 'fas fa-envelope', 'text' => 'Easy lead capture.'],
                ],
                'process_steps' => [
                    ['title' => 'Deploy', 'text' => 'Launch on high-performance hosting.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Responsive Design', 'CTA Optimization'],
            ],
            // Blog & News
            [
                'title' => 'Blog & News Website',
                'service_id' => 'WD-002',
                'category' => 'Website Development',
                'subcategory' => 'Media',
                'price' => '400.00',
                'sort_order' => 7,
                'short_description' => 'Content-heavy platforms for bloggers, publishers, and news agencies.',
                'description' => 'Optimized for readability and high content volume.',
                'detailed_description' => '<h3>Become a Digital Authority</h3><p>Manage thousands of articles with ease.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-newspaper', 'title' => 'Fast Reading', 'text' => 'Optimized typography for better readability.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Ads Integration', 'icon' => 'fas fa-money-bill', 'text' => 'Google AdSense and Ad Manager ready.'],
                ],
                'process_steps' => [
                    ['title' => 'CMS Setup', 'text' => 'Easy content management for editors.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['WordPress / Ghost', 'SEO Optimized'],
            ],
            // Educational Website
            [
                'title' => 'Educational Website',
                'service_id' => 'WD-003',
                'category' => 'Website Development',
                'subcategory' => 'EdTech',
                'price' => '800.00',
                'sort_order' => 8,
                'short_description' => 'LMS platforms for schools, universities, and online courses.',
                'description' => 'Integrated course management and student portals.',
                'detailed_description' => '<h3>Bring Learning Online</h3><p>Manage students, quizzes, and videos in one place.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-graduation-cap', 'title' => 'LMS Ready', 'text' => 'Complete Learning Management System.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Quiz Module', 'icon' => 'fas fa-tasks', 'text' => 'Interactive testing for students.'],
                ],
                'process_steps' => [
                    ['title' => 'LMS Setup', 'text' => 'Configuring course pathways.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Course Builder', 'Student Dashboard'],
            ],
            // Directory & Listing
            [
                'title' => 'Directory & Listing Website',
                'service_id' => 'WD-004',
                'category' => 'Website Development',
                'subcategory' => 'Ads',
                'price' => '950.00',
                'sort_order' => 9,
                'short_description' => 'Powerful directory platforms for niche markets and marketplaces.',
                'description' => 'Advanced search and geo-location features.',
                'detailed_description' => '<h3>The Ultimate Marketplace Builder</h3><p>Create your own Yelp, Zillow, or Justdial.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-th-list', 'title' => 'Geo-Location', 'text' => 'Radius-based search for users.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Subscription Plans', 'icon' => 'fas fa-tags', 'text' => 'Monetize listing submissions.'],
                ],
                'process_steps' => [
                    ['title' => 'Maps Integration', 'text' => 'Google Maps setup for listings.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Advanced Filter', 'Paid Listings'],
            ],
            // Job Board
            [
                'title' => 'Job Board Website',
                'service_id' => 'WD-006',
                'category' => 'Website Development',
                'subcategory' => 'HR',
                'price' => '700.00',
                'sort_order' => 10,
                'short_description' => 'Connect employers with top talent through a specialized job portal.',
                'description' => 'Resume managers and employer dashboards.',
                'detailed_description' => '<h3>Future of Hiring</h3><p>A bridge between talent and opportunity.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-user-tie', 'title' => 'Role Management', 'text' => 'Employer and Candidate portals.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Resume Builder', 'icon' => 'fas fa-file-pdf', 'text' => 'Auto-generate CVs from profile.'],
                ],
                'process_steps' => [
                    ['title' => 'Final Launch', 'text' => 'Live deployment and testing.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Advanced Search', 'Company Profiles'],
            ],
            // eCommerce Mobile App
            [
                'title' => 'E-commerce Mobile Application',
                'service_id' => 'MA-001',
                'category' => 'Mobile Application',
                'subcategory' => 'Commerce',
                'price' => '1800.00',
                'sort_order' => 11,
                'short_description' => 'Native shopping experience for your retail business.',
                'description' => 'Fast, fluid checkout and push notification engagement.',
                'detailed_description' => '<h3>Sell on the Go</h3><p>Maximize mobile sales with a high-performance app.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-shopping-cart', 'title' => 'Fast Checkout', 'text' => '1-click checkout for registered users.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Push Engagement', 'icon' => 'fas fa-bell', 'text' => 'Alert users about sales and discounts.'],
                ],
                'process_steps' => [
                    ['title' => 'Design', 'text' => 'UX design for mobile screens.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1512428559087-560fa5ceab42?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Cart Sync', 'Hybrid / Native'],
            ],
            // CRM Mobile App
            [
                'title' => 'CRM Mobile Application',
                'service_id' => 'MA-002',
                'category' => 'Mobile Application',
                'subcategory' => 'Enterprise',
                'price' => '1300.00',
                'sort_order' => 12,
                'short_description' => 'Stay connected with your customers from anywhere.',
                'description' => 'Real-time sales alerts and lead managers.',
                'detailed_description' => '<h3>Modernize Your Sales Force</h3><p>Manage your pipeline on the move.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-handshake', 'title' => 'Lead Sync', 'text' => 'Real-time updates to your main CRM.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Offline Access', 'icon' => 'fas fa-wifi-slash', 'text' => 'Work without internet, sync later.'],
                ],
                'process_steps' => [
                    ['title' => 'Security', 'text' => 'Implementing biometric auth.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Contact Mgmt', 'Pipeline View'],
            ],
            // Directory Mobile App
            [
                'title' => 'Directory & Listing Mobile Application',
                'service_id' => 'MA-003',
                'category' => 'Mobile Application',
                'subcategory' => 'Local',
                'price' => '1400.00',
                'sort_order' => 13,
                'short_description' => 'The complete directory experience in the palm of your hand.',
                'description' => 'Map-based search and direct calling.',
                'detailed_description' => '<h3>Discover the Neighborhood</h3><p>Location-aware searching at its best.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-map-marker-alt', 'title' => 'Geo-Locator', 'text' => 'Find places near you instantly.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Reviews', 'icon' => 'fas fa-star', 'text' => 'Integrated user rating system.'],
                ],
                'process_steps' => [
                    ['title' => 'Maps', 'text' => 'Native map integration.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Advanced Search', 'Favorites'],
            ],
            // Booking Mobile App
            [
                'title' => 'Booking & Appointment Mobile App',
                'service_id' => 'MA-004',
                'category' => 'Mobile Application',
                'subcategory' => 'Services',
                'price' => '1600.00',
                'sort_order' => 14,
                'short_description' => 'Integrated calendars for seamless service scheduling.',
                'description' => 'For salons, doctors, consultants, and gyms.',
                'detailed_description' => '<h3>Skip the Waiting Room</h3><p>Automate your scheduling process effortlessly.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-calendar-alt', 'title' => 'Real-time Slots', 'text' => 'Manage bookings with instant sync.'],
                ],
                'service_features_grid' => [
                    ['title' => 'SMS Alerts', 'icon' => 'fas fa-sms', 'text' => 'Auto-reminders for appointments.'],
                ],
                'process_steps' => [
                    ['title' => 'Sync', 'text' => 'Calendar and timezone sync.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Online Payment', 'Reminders'],
            ],
            // Restaurant App
            [
                'title' => 'Restaurant/Food Mobile Application',
                'service_id' => 'MA-005',
                'category' => 'Mobile Application',
                'subcategory' => 'Food',
                'price' => '1500.00',
                'sort_order' => 15,
                'short_description' => 'Order food and manage deliveries with precision.',
                'description' => 'Live tracking and digital menu management.',
                'detailed_description' => '<h3>Your Restaurant, Reimagined</h3><p>From table booking to home delivery.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-utensils', 'title' => 'Visual Menu', 'text' => 'High-res photos to drive hunger.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Live Tracking', 'icon' => 'fas fa-route', 'text' => 'Track your driver in real-time.'],
                ],
                'process_steps' => [
                    ['title' => 'Menu', 'text' => 'Dynamic cloud menu setup.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Payment Gateway', 'Reward Points'],
            ],
            // Subscription App
            [
                'title' => 'Subscription & Membership Mobile App',
                'service_id' => 'MA-006',
                'category' => 'Mobile Application',
                'subcategory' => 'Content',
                'price' => '1700.00',
                'sort_order' => 16,
                'short_description' => 'Content lockers and recurring payment platforms.',
                'description' => 'For fitness, media houses, and premium communities.',
                'detailed_description' => '<h3>The Economy of Access</h3><p>Build your recurring revenue platform.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-lock', 'title' => 'Access Control', 'text' => 'Tiered membership restrictions.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Stripe Billing', 'icon' => 'fas fa-credit-card', 'text' => 'Seamless recurring payments.'],
                ],
                'process_steps' => [
                    ['title' => 'Security', 'text' => 'Encrypted content streaming.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1555421689-491a97ff2040?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Auto-Renew', 'Offline Mode'],
            ],
            // SEO Services
            [
                'title' => 'SEO Services',
                'service_id' => 'DM-001',
                'category' => 'Digital Marketing',
                'subcategory' => 'SEO',
                'price' => '450.00',
                'sort_order' => 17,
                'short_description' => 'Rank higher on search engines and drive organic traffic.',
                'description' => 'We help you dominate the search results.',
                'detailed_description' => '<h3>The Power of Search</h3><p>Rank #1 for your top keywords.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-search', 'title' => 'Audit', 'text' => 'Full technical and content SEO audit.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Backlinking', 'icon' => 'fas fa-link', 'text' => 'High-quality organic link building.'],
                ],
                'process_steps' => [
                    ['title' => 'Analysis', 'text' => 'Keyword research and gap analysis.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1432888622747-4eb9a8f2c1d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['On-Page SEO', 'Technical SEO'],
            ],
            // Content Marketing
            [
                'title' => 'Content Writing & Marketing',
                'service_id' => 'DM-004',
                'category' => 'Digital Marketing',
                'subcategory' => 'Copy',
                'price' => '300.00',
                'sort_order' => 18,
                'short_description' => 'Compelling copy that converts visitors into customers.',
                'description' => 'Storytelling that drives business growth.',
                'detailed_description' => '<h3>Words that Sell</h3><p>Engage your audience with professional copy.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-pen-nib', 'title' => 'Creative', 'text' => 'Blog posts, whitepapers, and sales copy.'],
                ],
                'service_features_grid' => [
                    ['title' => 'SEO Optimized', 'icon' => 'fas fa-keyboard', 'text' => 'Copy that ranks while it sells.'],
                ],
                'process_steps' => [
                    ['title' => 'Voice', 'text' => 'Developing your brand voice.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Blog Management', 'Sales Copy'],
            ],
            // Custom Development
            [
                'title' => 'Custom Development Services',
                'service_id' => 'cd001',
                'category' => 'Web Development',
                'subcategory' => 'General',
                'price' => '2000.00',
                'sort_order' => 19,
                'short_description' => 'Tailor-made software solutions for complex business challenges.',
                'description' => 'When off-the-shelf software doesn\'t fit.',
                'detailed_description' => '<h3>Future-Proof Custom Software</h3><p>Scalable, secure, and built specifically for you.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-code', 'title' => 'Clean Code', 'text' => 'Maintainable and high-performance codebases.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Cloud Ready', 'icon' => 'fas fa-cloud', 'text' => 'AWS, Azure, or Google Cloud deployment.'],
                ],
                'process_steps' => [
                    ['title' => 'Plan', 'text' => 'Logic and architecture mapping.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Enterprise Scale', 'Full Support'],
            ],
             // Social Media Marketing
             [
                'title' => 'Social Media Marketing',
                'service_id' => 'DM-002',
                'category' => 'Digital Marketing',
                'subcategory' => 'SMM',
                'price' => '400.00',
                'sort_order' => 20,
                'short_description' => 'Strategic marketing campaigns across all social platforms.',
                'description' => 'Build presence and awareness on social channels.',
                'detailed_description' => '<h3>Ignite Your Social Presence</h3><p>Engage your audience where they are.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fab fa-instagram', 'title' => 'Omni-Channel', 'text' => 'FB, Instagram, LinkedIn, and more.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Paid Ads', 'icon' => 'fas fa-ad', 'text' => 'Optimizing your social ad spend.'],
                ],
                'process_steps' => [
                    ['title' => 'Strategy', 'text' => 'Monthly social blueprints.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Follower Growth', 'Engagement'],
            ],
            // Performance Marketing
            [
                'title' => 'Performance Marketing',
                'service_id' => 'DM-003',
                'category' => 'Digital Marketing',
                'subcategory' => 'Ads',
                'price' => '600.00',
                'sort_order' => 21,
                'short_description' => 'Data-driven campaigns focused on ROI and conversions.',
                'description' => 'Stop spending, start investing in growth.',
                'detailed_description' => '<h3>Maximize Every Dollar</h3><p>Results you can see and measure.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-chart-line', 'title' => 'ROI Focused', 'text' => 'Measurable growth for your business.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Split Testing', 'icon' => 'fas fa-flask', 'text' => 'A/B testing for landing pages and ads.'],
                ],
                'process_steps' => [
                    ['title' => 'Optimize', 'text' => 'Constant refinement of ad metrics.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['PPC Management', 'Conversion Tracking'],
            ],
            // eCommerce Development
            [
                'title' => 'eCommerce Development',
                'service_id' => 'ec001',
                'category' => 'eCommerce Development',
                'subcategory' => 'Commerce',
                'price' => '1500.00',
                'sort_order' => 22,
                'short_description' => 'Direct-to-consumer online stores optimized for conversions.',
                'description' => 'Custom e-commerce platforms for unique retail needs.',
                'detailed_description' => '<h3>Global Shopping Experiences</h3><p>Scale your brand with a robust store.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-store', 'title' => 'DTC Ready', 'text' => 'Optimized for direct sales to customers.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Auto Taxes', 'icon' => 'fas fa-file-invoice-dollar', 'text' => 'Integrated global tax calculations.'],
                ],
                'process_steps' => [
                    ['title' => 'Architecture', 'text' => 'High-load database design.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Scale Ready', 'Secure Payments'],
            ],
            // Web & App Dev
            [
                'title' => 'Web & App Development',
                'service_id' => 'wa001',
                'category' => 'Web & App Development',
                'subcategory' => 'Full-stack',
                'price' => '3000.00',
                'sort_order' => 23,
                'short_description' => 'Combined web and mobile solutions to dominate the digital landscape.',
                'description' => 'End-to-end fullstack engineering for startups.',
                'detailed_description' => '<h3>The Full Digital Ecosystem</h3><p>Build your entire platform with one team.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-cubes', 'title' => 'Multi-Platform', 'text' => 'Shared logic across Web and Mobile.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Real-time Sync', 'icon' => 'fas fa-sync', 'text' => 'Seamless updates across all user touchpoints.'],
                ],
                'process_steps' => [
                    ['title' => 'Design', 'text' => 'Unified design language.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Laravel + Flutter', 'High Performance'],
            ],
            // Starter Prototype
            [
                'title' => 'Starter Prototype',
                'service_id' => 'UX-001',
                'category' => 'UI/UX Design',
                'subcategory' => 'MVP',
                'price' => '150.00',
                'sort_order' => 24,
                'short_description' => 'Quick low-fidelity prototypes to visualize your core idea.',
                'description' => 'The fastest way to see your idea on a screen.',
                'detailed_description' => '<h3>From Idea to Visual in 48 Hours</h3><p>Kickstart your project with a basic prototype.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-bolt', 'title' => 'Fast Turnaround', 'text' => 'See your idea come to life in days.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Wireframes', 'text' => 'Core layout and structure defined.'],
                ],
                'process_steps' => [
                    ['title' => 'Sketch', 'text' => 'Rapid digital wireframing.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1614850523459-c2f4c699c52e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'features' => ['Fast Feedback', 'Concept Validation'],
            ],
            // Digital Marketing General
             [
                'title' => 'Digital Marketing Solutions',
                'service_id' => 'dm001',
                'category' => 'Digital Marketing',
                'subcategory' => 'General',
                'price' => '1000.00',
                'sort_order' => 25,
                'short_description' => 'Comprehensive marketing strategies tailored to your business goals.',
                'description' => 'Unified marketing across all digital channels.',
                'detailed_description' => '<h3>Engage, Convert, Retain</h3><p>Scale your brand with expert marketing.</p>',
                'description_top_blocks' => [
                    ['icon' => 'fas fa-rocket', 'title' => 'Growth', 'text' => 'Focusing on top-line revenue.'],
                ],
                'service_features_grid' => [
                    ['title' => 'Omni-channel', 'text' => 'Being where your customers are.'],
                ],
                'process_steps' => [
                    ['title' => 'Plan', 'text' => '360 degree marketing roadmap.'],
                ],
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['360 Strategy', 'Full Automation'],
            ],
        ];

        foreach ($services as $serviceData) {
            $catName = $serviceData['category'];
            
            DigitalService::updateOrCreate(
                ['service_id' => $serviceData['service_id']],
                [
                    'title' => $serviceData['title'],
                    'short_description' => $serviceData['short_description'],
                    'description' => $serviceData['description'],
                    'description_top_blocks' => $serviceData['description_top_blocks'] ?? null,
                    'service_features_grid' => $serviceData['service_features_grid'] ?? null,
                    'process_steps' => $serviceData['process_steps'] ?? null,
                    'detailed_description' => $serviceData['detailed_description'] ?? null,
                    'slug' => Str::slug($serviceData['title']),
                    'category' => $catName,
                    'category_id' => $categoryMap[$catName] ?? null,
                    'subcategory' => $serviceData['subcategory'],
                    'image_url' => $serviceData['image_url'],
                    'features' => $serviceData['features'] ?? [],
                    'price' => $serviceData['price'],
                    'is_active' => true,
                    'sort_order' => $serviceData['sort_order'],
                ]
            );
        }
    }
}
