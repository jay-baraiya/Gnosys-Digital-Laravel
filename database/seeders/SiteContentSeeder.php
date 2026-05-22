<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Feature;
use App\Models\ImpactStat;
use App\Models\PageContent;
use App\Models\ProcessStep;
use App\Models\Location;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'Gnosys Digital', 'group' => 'general'],
            ['key' => 'contact_email', 'value' => 'hello@gnosys.digital', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '+1 234 567 890', 'group' => 'contact'],
            ['key' => 'facebook_url', 'value' => '#', 'group' => 'social'],
            ['key' => 'twitter_url', 'value' => '#', 'group' => 'social'],
            ['key' => 'linkedin_url', 'value' => '#', 'group' => 'social'],
            ['key' => 'instagram_url', 'value' => '#', 'group' => 'social'],
            ['key' => 'footer_about_text', 'value' => 'Gnosys Digital is a full-service digital studio specializing in in-house gigs and ready-to-use digital products.', 'group' => 'footer'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // 2. Testimonials
        $testimonials = [
            [
                'client_name' => 'Sarah Johnson',
                'client_designation' => 'CEO, TechStart',
                'content' => 'Gnosys Digital transformed our online presence. Their in-house team delivered exceptional results within 48 hours. Highly recommended!',
                'rating' => 5,
                'sort_order' => 1
            ],
            [
                'client_name' => 'Michael Chen',
                'client_designation' => 'Founder, GrowthHub',
                'content' => 'The quality of work and attention to detail is unmatched. They truly understand digital transformation and deliver measurable results.',
                'rating' => 5,
                'sort_order' => 2
            ],
            [
                'client_name' => 'Emma Williams',
                'client_designation' => 'Director, RetailPro',
                'content' => 'Working with Gnosys Digital was a game-changer for our eCommerce business. Their expertise and speed exceeded all expectations.',
                'rating' => 5,
                'sort_order' => 3
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // 3. Impact Stats
        $stats = [
            ['label' => 'Projects Delivered', 'value' => '500+', 'description' => 'Across 3 continents with 98% client satisfaction', 'sort_order' => 1],
            ['label' => 'Average Turnaround', 'value' => '24-72h', 'description' => 'Agile delivery without compromising quality', 'sort_order' => 2],
            ['label' => 'In-House Team', 'value' => '100%', 'description' => 'No outsourcing, no freelancers, full control', 'sort_order' => 3],
            ['label' => 'Average ROI', 'value' => '3x', 'description' => 'Measurable business impact and growth', 'sort_order' => 4],
        ];

        foreach ($stats as $stat) {
            ImpactStat::create($stat);
        }

        // 4. Page Contents
        $contents = [
            // Home Hero
            [
                'page_slug' => 'home',
                'section_slug' => 'hero',
                'title' => 'Expert-Built Digital Solutions',
                'subtitle' => 'From high-performing websites and automation setups to ready-to-use digital products — we build everything in-house so you can grow with confidence.',
                'button_text' => 'Explore Our Gigs',
                'button_link' => '#',
            ],
            // Home Culture CTA
            [
                'page_slug' => 'home',
                'section_slug' => 'culture_cta',
                'title' => 'Our Culture of Change',
                'content' => 'Change isn’t a campaign for us — it’s our culture. We constantly evolve our tools, design, and strategies to help our clients grow faster in a world that changes every day. At Gnosys Digital, we experiment boldly, execute precisely, and learn endlessly — because progress never stands still.',
                'button_text' => 'Read Our Story',
                'button_link' => '/culture-of-change',
            ],
            // About Hero
            [
                'page_slug' => 'about',
                'section_slug' => 'hero',
                'title' => 'Our Culture of Change',
                'subtitle' => 'Change isn’t a buzzword for us — it’s the heartbeat of Gnosys Digital. In a world that evolves every day, we’ve built a culture that embrace agility, innovation, and learning. We call it the "Culture of Change."',
            ],
            // About Mission
            [
                'page_slug' => 'about',
                'section_slug' => 'mission',
                'title' => 'Our Mission Is Simple',
                'subtitle' => 'To deliver world-class digital solutions that empower businesses to grow — built with speed, precision, and purpose.',
                'content' => 'We believe every business deserves enterprise-level digital capabilities — without the complexity, delays, or inflated agency costs.',
            ],
            // About Story
            [
                'page_slug' => 'about',
                'section_slug' => 'story',
                'title' => 'Our Story',
                'content' => 'Gnosys Digital started with a simple observation: the digital agency model was broken. High costs and low accountability were the norms. We decided to change that by building a hybrid digital studio that doesn\'t just provide services, but builds products that make those services better.',
            ],
        ];

        foreach ($contents as $content) {
            PageContent::create($content);
        }

        // 5. Process Steps
        $steps = [
            ['order' => 1, 'title' => 'Discover', 'description' => 'We dive deep into your goals, challenges, and customer behavior. No assumptions. Just clarity.'],
            ['order' => 2, 'title' => 'Design', 'description' => 'We map digital journeys that convert — blending creativity, data, and usability.'],
            ['order' => 3, 'title' => 'Build', 'description' => 'Our in-house team executes with precision using cutting-edge technologies.'],
            ['order' => 4, 'title' => 'Deliver', 'description' => 'Every deliverable goes through multi-level testing before it reaches you. We don’t stop until it performs.'],
        ];

        foreach ($steps as $step) {
            ProcessStep::create($step);
        }

        // 6. Locations
        $locations = [
            ['country' => 'Canada', 'city' => 'Toronto', 'sort_order' => 1],
            ['country' => 'Switzerland', 'city' => 'Zurich', 'sort_order' => 2],
            ['country' => 'India', 'city' => 'Rajkot, Gujarat', 'sort_order' => 3],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
        
        // 7. Features
        $features = [
            ['title' => '100% In-House Team', 'description' => 'Designers, developers, and marketers under one roof.', 'icon' => 'fas fa-users', 'page' => 'home'],
            ['title' => 'Quality Over Volume', 'description' => 'We never outsource. Every detail matters.', 'icon' => 'fas fa-chart-bar', 'page' => 'home'],
            ['title' => 'Speed & Precision', 'description' => 'Our agile process ensures 24–72h turnarounds.', 'icon' => 'fas fa-stopwatch', 'page' => 'home'],
            ['title' => 'Performance First', 'description' => 'Each gig and product is tested for measurable impact.', 'icon' => 'fas fa-chart-line', 'page' => 'home'],
            ['title' => 'Global Expertise', 'description' => 'Delivering projects across 3 continents.', 'icon' => 'fas fa-globe-africa', 'page' => 'home'],
            ['title' => 'Full Ownership', 'description' => 'You get complete control — no hidden fees, no cuts.', 'icon' => 'far fa-handshake', 'page' => 'home'],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
