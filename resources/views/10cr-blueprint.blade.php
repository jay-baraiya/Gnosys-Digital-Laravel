@extends('layouts.app')

@section('title', 'The 10 CR Blueprint: Leadership & People')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    /* ===== DESIGN TOKENS ===== */
    :root {
        --navy:        #0d1b2a;
        --navy-mid:    #1a2d42;
        --navy-light:  #243b55;
        --accent:      #0ea5e9;
        --accent-2:    #38bdf8;
        --gold:        #f59e0b;
        --gold-light:  #fcd34d;
        --green:       #10b981;
        --red:         #ef4444;
        --text-main:   #e2e8f0;
        --text-muted:  #94a3b8;
        --card-bg:     rgba(255,255,255,0.04);
        --card-border: rgba(255,255,255,0.09);
        --radius:      14px;
    }

    body { background: var(--navy); color: var(--text-main); font-family: 'Inter', sans-serif; }
    main { background: transparent !important; }

    /* ===== GRADIENT TEXT ===== */
    .gradient-text {
        background: linear-gradient(135deg, var(--accent-2) 0%, var(--accent) 50%, #818cf8 100%);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .gold-text {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }

    /* ===== PILL BADGE ===== */
    .pill {
        display: inline-block;
        background: linear-gradient(135deg, rgba(14,165,233,0.14), rgba(129,140,248,0.14));
        border: 1px solid rgba(14,165,233,0.32);
        color: var(--accent-2); padding: 6px 18px; border-radius: 50px;
        font-size: 0.72rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;
    }

    /* ===== SECTION BG ===== */
    .bg-navy     { background: var(--navy); }
    .bg-navy-mid { background: var(--navy-mid); }

    /* ===== GRADIENT DIVIDER ===== */
    .gdivider { height:1px; border:none; background: linear-gradient(90deg,transparent,rgba(14,165,233,0.25),transparent); margin:0; }

    /* ===== CARDS ===== */
    .pro-card {
        background: var(--card-bg); border: 1px solid var(--card-border);
        border-radius: var(--radius); padding: 28px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s;
    }
    .pro-card:hover { transform: translateY(-4px); box-shadow: 0 16px 48px rgba(0,0,0,0.4); border-color: rgba(14,165,233,0.3); }

    /* ===== BUTTONS ===== */
    .btn-pro {
        display: inline-block;
        background: linear-gradient(135deg, #0ea5e9 0%, #818cf8 100%);
        color: #fff !important; font-weight: 700; font-size: 0.95rem;
        padding: 15px 40px; border-radius: 50px; text-decoration: none;
        letter-spacing: 0.4px; transition: all 0.3s;
        box-shadow: 0 6px 24px rgba(14,165,233,0.38); border: none; cursor: pointer;
    }
    .btn-pro:hover { transform: translateY(-3px); box-shadow: 0 12px 36px rgba(14,165,233,0.5); color:#fff !important; }

    .btn-outline-pro {
        display: inline-block; background: transparent;
        color: var(--accent-2) !important; font-weight: 600; font-size: 0.95rem;
        padding: 13px 36px; border-radius: 50px; text-decoration: none;
        border: 2px solid rgba(14,165,233,0.45); transition: all 0.3s;
    }
    .btn-outline-pro:hover { background: rgba(14,165,233,0.1); border-color: var(--accent); transform: translateY(-2px); }

    /* ===== HERO ===== */
    .hero-wrap {
        position: relative; min-height: 88vh; display: flex; align-items: center;
        padding: 100px 0 80px; overflow: hidden;
        background:
            radial-gradient(ellipse at 15% 50%, rgba(14,165,233,0.11) 0%, transparent 55%),
            radial-gradient(ellipse at 85% 20%, rgba(129,140,248,0.09) 0%, transparent 50%),
            linear-gradient(160deg, rgba(13,27,42,0.92) 0%, rgba(17,24,39,0.88) 55%, rgba(13,27,42,0.92) 100%),
            url('https://framerusercontent.com/images/pyBKhSeiynvOEumPaLkQwheGN1w.jpeg?width=5532&height=3140');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .hero-wrap::before {
        content:''; position:absolute; top:-120px; right:-120px;
        width:550px; height:550px; border-radius:50%;
        background: radial-gradient(circle, rgba(14,165,233,0.06) 0%, transparent 70%);
        pointer-events:none;
    }

    /* Event chips */
    .event-chip {
        display: flex; align-items: center; gap: 10px;
        background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10);
        border-radius: 50px; padding: 10px 20px;
        font-size: 0.88rem; color: var(--text-main); font-weight: 500;
    }
    .event-chip i { color: var(--accent-2); }

    /* ===== COUNTDOWN ===== */
    .cd-box {
        background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.11);
        border-radius: 12px; padding: 18px 22px; text-align: center; min-width: 86px;
    }
    .cd-num {
        font-size: 2.2rem; font-weight: 800; display: block; line-height: 1;
        background: linear-gradient(135deg, #fff 0%, var(--accent-2) 100%);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .cd-lbl { font-size: 0.63rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1.5px; margin-top: 5px; display: block; }

    /* ===== SECTION HEADING ===== */
    .section-head { margin-bottom: 48px; }
    .section-head h2 { font-size: clamp(1.6rem, 3vw, 2.1rem); font-weight: 800; color: #fff; margin-top: 14px; line-height: 1.2; }
    .glow-line { width: 56px; height: 3px; background: linear-gradient(90deg, var(--accent), #818cf8); border-radius: 2px; margin: 16px auto 0; }

    /* ===== SPEAKER CARDS ===== */
    .speaker-card {
        background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);
        border-radius: 18px; padding: 32px 22px; text-align: center;
        transition: all 0.3s; position: relative; overflow: hidden;
    }
    .speaker-card::after {
        content:''; position:absolute; top:0; left:0; right:0; height:3px;
        background: linear-gradient(90deg, var(--accent), #818cf8); opacity:0; transition:opacity 0.3s;
    }
    .speaker-card:hover { transform: translateY(-6px); box-shadow: 0 20px 50px rgba(0,0,0,0.45); border-color: rgba(14,165,233,0.28); }
    .speaker-card:hover::after { opacity:1; }

    .speaker-photo {
        display: block; margin: 0 auto 16px;
        width: 118px; height: 118px; border-radius: 50%; object-fit: cover;
        border: 3px solid rgba(14,165,233,0.45);
        box-shadow: 0 0 0 7px rgba(14,165,233,0.08);
        transition: box-shadow 0.3s;
    }
    .speaker-card:hover .speaker-photo { box-shadow: 0 0 0 7px rgba(14,165,233,0.18), 0 8px 28px rgba(14,165,233,0.22); }

    .speaker-topic {
        display: inline-block;
        background: linear-gradient(135deg, rgba(14,165,233,0.14), rgba(129,140,248,0.14));
        border: 1px solid rgba(14,165,233,0.24);
        color: var(--accent-2); padding: 3px 13px; border-radius: 50px;
        font-size: 0.68rem; font-weight: 700; letter-spacing: 0.8px;
        text-transform: uppercase; margin-bottom: 10px;
    }

    /* Moderator */
    .mod-card {
        background: linear-gradient(135deg, rgba(14,165,233,0.07) 0%, rgba(129,140,248,0.07) 100%);
        border: 1.5px solid rgba(14,165,233,0.28); border-radius: 20px;
        padding: 48px 36px; text-align: center;
    }
    .mod-photo {
        width: 148px; height: 148px; border-radius: 50%; object-fit: cover;
        border: 4px solid transparent;
        background: linear-gradient(var(--navy-mid), var(--navy-mid)) padding-box,
                    linear-gradient(135deg, var(--accent), #818cf8) border-box;
        box-shadow: 0 0 42px rgba(14,165,233,0.2); margin-bottom: 20px;
    }

    /* ===== TIMELINE ===== */
    .timeline-container {
        position: relative; padding: 20px 0;
    }
    .timeline-line {
        position: absolute; left: 30px; top: 0; bottom: 0;
        width: 3px; background: linear-gradient(180deg, var(--accent), #818cf8);
        border-radius: 2px;
    }
    .timeline-item {
        position: relative; padding-left: 70px; margin-bottom: 30px;
        display: flex; align-items: flex-start;
    }
    .timeline-dot {
        position: absolute; left: 18px; top: 8px;
        width: 28px; height: 28px; border-radius: 50%;
        border: 3px solid; z-index: 2;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }
    .timeline-content {
        flex: 1; background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 16px; padding: 24px;
        transition: all 0.3s ease;
    }
    .timeline-content:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.4);
        border-color: rgba(14,165,233,0.3);
    }
    .timeline-time {
        display: inline-block; padding: 6px 14px; border-radius: 20px;
        font-size: 0.75rem; font-weight: 700; margin-bottom: 12px;
        border: 1px solid currentColor; opacity: 0.8;
    }
    .timeline-title {
        color: #ffffff !important; font-size: 1.1rem; font-weight: 700;
        margin-bottom: 8px; line-height: 1.3;
    }
    .timeline-desc {
        color: var(--text-muted) !important; font-size: 0.88rem;
        line-height: 1.6; margin-bottom: 12px;
    }
    .timeline-lead {
        display: flex; align-items: center; gap: 8px;
        flex-wrap: wrap;
    }
    .timeline-lead strong {
        color: #e2e8f0 !important; font-size: 0.85rem;
        font-weight: 600;
    }
    .timeline-role {
        color: var(--text-muted) !important; font-size: 0.75rem;
        background: rgba(255,255,255,0.05); padding: 2px 8px;
        border-radius: 12px;
    }

    /* ===== FAQ ===== */
    .faq-item {
        background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);
        border-radius: 12px; overflow: hidden; margin-bottom: 10px; transition: border-color 0.2s;
    }
    .faq-item.open { border-color: rgba(14,165,233,0.3); }
    .faq-q {
        width: 100%; background: transparent; border: none; padding: 20px 24px;
        text-align: left; display: flex; justify-content: space-between; align-items: center;
        gap: 16px; cursor: pointer; color: var(--text-main) !important;
        font-size: 0.94rem; font-weight: 600; transition: color 0.2s;
    }
    .faq-item.open .faq-q { color: var(--accent-2) !important; }
    .faq-icon { color: var(--text-muted); transition: transform 0.3s; flex-shrink:0; font-size:.75rem; }
    .faq-item.open .faq-icon { transform: rotate(180deg); color: var(--accent); }
    .faq-a {
        max-height: 0; overflow: hidden;
        transition: max-height 0.35s ease, padding 0.3s;
        color: var(--text-muted) !important; font-size: 0.9rem; line-height: 1.75;
        padding: 0 24px;
    }
    .faq-item.open .faq-a { max-height: 220px; padding: 0 24px 20px; }

    /* ===== CTA ===== */
    .cta-wrap {
        background:
            radial-gradient(ellipse at 25% 50%, rgba(14,165,233,0.12) 0%, transparent 58%),
            radial-gradient(ellipse at 75% 50%, rgba(129,140,248,0.10) 0%, transparent 58%),
            var(--navy-mid);
        padding: 32px 0; position: relative; overflow: hidden;
    }
    .cta-wrap::before {
        content:''; position:absolute; inset:0; pointer-events:none;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%230ea5e9' fill-opacity='0.025'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");
    }

    @media (max-width:768px) {
        .hero-wrap { padding: 80px 0 60px; min-height: auto; }
        .flow-table thead { display: none; }
        .flow-table tbody tr { display: block; border-radius: 12px; overflow: hidden; margin-bottom: 10px; }
        .flow-table tbody td { display: block; border-bottom: 1px solid rgba(255,255,255,0.06); }
        .flow-table tbody td[data-label]::before { content: attr(data-label); display:block; color:var(--accent); font-size:.67rem; letter-spacing:1px; text-transform:uppercase; margin-bottom:4px; }
    }
</style>
@endpush

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="hero-wrap">
    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">

                <span class="pill mb-4">The 10 CR Blueprint · Online Roundtable</span>

                <h1 class="fw-bold text-white mb-3" style="font-size: clamp(2rem,5vw,3.2rem); line-height:1.1; margin-top:14px;">
                    The Leadership &<br><span class="gradient-text">People Blueprint</span>
                </h1>

                <p class="mb-2" style="color:var(--text-muted); font-size:1.1rem; font-weight:500;">
                    Build a Team That Scales Without You
                </p>
                <p class="mb-5" style="color:var(--text-muted); max-width:600px; margin:0 auto 2.5rem; font-size:.97rem; line-height:1.8;">
                    After 130+ founder interactions, the #1 bottleneck isn't finance or strategy — it's
                    <strong style="color:var(--text-main);">people & founder dependency.</strong>
                    This roundtable delivers a practical playbook to move from founder-led chaos to team-driven scale.
                </p>

                {{-- Event Info --}}
                <div class="d-flex justify-content-center gap-3 flex-wrap mb-5">
                    <div class="event-chip"><i class="far fa-calendar-alt"></i><span>27 April 2026</span></div>
                    <div class="event-chip"><i class="far fa-clock"></i><span>2:00 PM – 4:00 PM IST</span></div>
                    <div class="event-chip"><i class="fas fa-video"></i><span>Live on Google Meet</span></div>
                </div>

                {{-- Countdown --}}
                <div class="d-flex justify-content-center gap-3 flex-wrap mb-5" id="countdown-wrap">
                    <div class="cd-box"><span class="cd-num" id="cd-days">00</span><span class="cd-lbl">Days</span></div>
                    <div class="cd-box"><span class="cd-num" id="cd-hours">00</span><span class="cd-lbl">Hours</span></div>
                    <div class="cd-box"><span class="cd-num" id="cd-mins">00</span><span class="cd-lbl">Mins</span></div>
                    <div class="cd-box"><span class="cd-num" id="cd-secs">00</span><span class="cd-lbl">Secs</span></div>
                </div>

                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6Sd2goN-WIvGZwdLoAaDpjOSFMcrffFzTTZwv7mOCiMiA9w/viewform"
                       target="_blank" class="btn-pro">Register Now — Free Seat →</a>
                    @if(auth()->check() || auth('admin')->check())
                        <a href="{{ route('home') }}" class="btn-outline-pro">Dashboard</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="gdivider">

{{-- ==================== PEOPLE PROBLEM ==================== --}}
<section class="py-5 bg-navy-mid">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="pill mb-3">Why This Theme</span>
                <h2 class="fw-bold text-white mt-3 mb-4" style="font-size:1.6rem; line-height:1.2;">
                    Why Most Founders Stay <span class="gradient-text">Stuck at 3 CR</span>
                </h2>
                <p class="mb-4" style="color:var(--text-muted); line-height:1.8; font-size:.97rem;">
                    Across previous sessions with 130+ founders, two challenges came up again and again:
                </p>
                <div class="d-flex flex-column gap-3 mb-4">
                    @foreach([
                        ['fa-user-tie','Scaling team & people','Hiring, retaining, and building a leadership pipeline that holds up at scale.'],
                        ['fa-lock','Founder dependency','Every key decision stops at the founder\'s desk — making real scale impossible.'],
                    ] as $c)
                    <div class="pro-card d-flex gap-3 align-items-start" style="padding:18px 20px;">
                        <div style="width:38px;height:38px;border-radius:50%;background:rgba(239,68,68,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
                            <i class="fas {{ $c[0] }}" style="color:#f87171;font-size:.9rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-white mb-1" style="font-size:.94rem;">{{ $c[1] }}</div>
                            <div style="color:var(--text-muted);font-size:.87rem;line-height:1.6;">{{ $c[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p style="color:var(--accent-2);font-weight:600;font-size:.93rem;">
                    <i class="fas fa-arrow-right me-2"></i>Real, experience-driven answers. No theory. No fluff.
                </p>
            </div>

            <div class="col-lg-6">
                <div class="pro-card" style="border-radius:18px;padding:36px;background:linear-gradient(135deg,rgba(255,255,255,0.04),rgba(14,165,233,0.04));">
                    <h5 class="fw-bold text-white mb-4">Is This Session For You?</h5>

                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span style="width:8px;height:8px;border-radius:50%;background:var(--green);flex-shrink:0;"></span>
                                <span class="fw-bold" style="color:var(--green);font-size:.78rem;letter-spacing:.6px;text-transform:uppercase;">Who Should Attend</span>
                            </div>
                            @foreach(['Founders/CEOs in the ₹3–10 Cr revenue range','Every decision feels like it stops with you','Team is growing but performance isn\'t scaling','Want a practical leadership pipeline framework'] as $i)
                            <div class="d-flex align-items-start gap-2 mb-2">
                                <i class="fas fa-check-circle flex-shrink-0 mt-1" style="color:var(--green);font-size:.78rem;"></i>
                                <span style="color:var(--text-muted);font-size:.87rem;line-height:1.55;">{{ $i }}</span>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-6">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span style="width:8px;height:8px;border-radius:50%;background:var(--red);flex-shrink:0;"></span>
                                <span class="fw-bold" style="color:var(--red);font-size:.78rem;letter-spacing:.6px;text-transform:uppercase;">Who Should NOT Attend</span>
                            </div>
                            @foreach(['Pre-revenue startups or individual contributors','Looking for generic motivation or theoretical models'] as $i)
                            <div class="d-flex align-items-start gap-2 mb-2">
                                <i class="fas fa-times-circle flex-shrink-0 mt-1" style="color:var(--red);font-size:.78rem;"></i>
                                <span style="color:var(--text-muted);font-size:.87rem;line-height:1.55;">{{ $i }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="gdivider">

{{-- ==================== THE PANEL ==================== --}}
<section class="py-5 bg-navy">
    <div class="container">
        <div class="section-head text-center">
            <span class="pill">The Panel</span>
            <h2>4 Experts. <span class="gradient-text">4 Critical Topics.</span></h2>
            <p style="color:var(--text-muted);font-size:.97rem;">Real experience. Zero theory.</p>
            <div class="glow-line"></div>
        </div>

        <div class="row g-4 mb-5 justify-content-center">
            @php
            $speakers = [
                ['purva-mittal-e1776682275530.jpg',           'CA Purva Mittal',       'Hiring & Vetting',     'Hiring the First 10 Employees',   'Where to find them, how to vet them, and the one role you should never outsource.'],
                ['Dr.-Venkat-Kumaresan.png',                  'Dr. Venkat Kumaresan',  'Leadership Pipeline',  'Building a Leadership Pipeline',  'Spotting potential, giving stretch assignments, and creating internal mobility.'],
                ['c8b2ee69-d013-4909-bf11-0264ce5b5506.jpg',  'CA Sangeeta Gandhi',    'Delegation',           'Delegation & Decision Rights',    'The "decision matrix" that frees you from daily operations.'],
                ['74fd8f39-0257-4d19-8c84-8027e9b0c1cc-scaled.jpg', 'CA Mukesh Solanki', 'Culture & Scale',   'Culture That Enables Scale',      'Rituals, communication rhythms, and the non-negotiables that hold a scaling team together.'],
            ];
            @endphp
            @foreach($speakers as $idx => $s)
            <div class="col-6 col-lg-3">
                <div class="speaker-card h-100">
                    <img src="{{ asset('images/'.$s[0]) }}" alt="{{ $s[1] }}" class="speaker-photo">
                    <div class="speaker-topic">{{ $s[2] }}</div>
                    <h5 class="text-white fw-bold mb-0" style="font-size:.97rem;">{{ $s[1] }}</h5>
                    <p style="color:var(--text-muted);font-size:.82rem;line-height:1.65;margin-top:10px;">
                        <span style="color:var(--accent-2);font-weight:600;">{{ $s[3] }}</span> — {{ $s[4] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Moderator --}}
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="mod-card">
                    <div style="display:inline-block;background:linear-gradient(135deg,rgba(14,165,233,0.18),rgba(129,140,248,0.18));border:1px solid rgba(14,165,233,0.38);color:var(--accent-2);padding:5px 16px;border-radius:50px;font-size:.68rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:20px;">
                        Session Moderator
                    </div>
                    <div><img src="{{ asset('images/image-2.png') }}" alt="CA Chanakya Shah" class="mod-photo"></div>
                    <h4 class="text-white fw-bold mb-1" style="font-size:1.3rem;">CA Chanakya Shah</h4>
                    <p class="gradient-text mb-3" style="font-weight:700;font-size:.88rem;">FCA · Business Advisor · Scaling Expert</p>
                    <p style="color:var(--text-muted);font-size:.9rem;line-height:1.78;max-width:500px;margin:0 auto 12px;">
                        Chanakya will anchor the entire 2-hour roundtable — guiding the flow, managing panel discussions, facilitating the Q&A, and ensuring you walk away with actionable, ready-to-use insights.
                    </p>
                    <p style="color:rgba(148,163,184,0.65);font-size:.84rem;line-height:1.65;max-width:460px;margin:0 auto;">
                        With a sharp focus on practical execution, he brings structure and clarity to the conversation — making sure every speaker's experience translates into immediate takeaways.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="gdivider">

{{-- ==================== ROUNDTABLE FLOW ==================== --}}
<section class="py-4 bg-navy-mid">
    <div class="container">
        <div class="section-head text-center mb-4">
            <span class="pill">Session Agenda</span>
            <h2 class="mb-3">Roundtable Flow: <span class="gradient-text">2 Hours of Pure Execution</span></h2>
            <p style="color:var(--text-muted);font-size:.9rem;">Every minute is designed to give you something actionable.</p>
            <div class="glow-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="timeline-container">
                    <div class="timeline-line"></div>
                    @php
                    $agenda = [
                        ['5 mins',  '#38bdf8','rgba(56,189,248,0.14)',  'Welcome & The People Problem',    'Setting the context: founder-led vs team-driven scale.',                               'CA Chanakya Shah',    'Moderator'],
                        ['20 mins', '#10b981','rgba(16,185,129,0.14)',  'Hiring the First 10 Employees',   'Where to find them, how to vet them, and the one role you should never outsource.',    'CA Purva Mittal',     'Hiring Expert'],
                        ['20 mins', '#818cf8','rgba(129,140,248,0.14)', 'Building a Leadership Pipeline',  'Spotting potential, stretch assignments, and creating internal mobility.',               'Dr. Venkat Kumaresan','Leadership Expert'],
                        ['20 mins', '#f59e0b','rgba(245,158,11,0.14)',  'Delegation & Decision Rights',    'The "decision matrix" that frees you from daily operations.',                         'CA Sangeeta Gandhi',  'Delegation Expert'],
                        ['20 mins', '#ec4899','rgba(236,72,153,0.14)',  'Culture That Enables Scale',      'Rituals, communication rhythms, and non-negotiables.',                                'CA Mukesh Solanki',   'Culture Expert'],
                        ['30 mins', '#38bdf8','rgba(56,189,248,0.14)',  'Live Q&A — Open Floor',           'Ask the panel your specific people and leadership challenges.',                       'All Speakers',        'Moderated by CA Chanakya Shah'],
                        ['5 mins',  '#38bdf8','rgba(56,189,248,0.14)',  'Closing Remarks',                 'Key takeaways & your first action step.',                                             'CA Chanakya Shah',    'Moderator'],
                    ];
                    @endphp
                    @foreach($agenda as $index => $r)
                    <div class="timeline-item">
                        <div class="timeline-dot" style="background:{{ $r[1] }}; border-color:{{ $r[2] }};"></div>
                        <div class="timeline-content">
                            <div class="timeline-time" style="background:{{ $r[2] }}; color:{{ $r[1] }};">{{ $r[0] }}</div>
                            <div class="timeline-session">
                                <h6 class="timeline-title">{{ $r[3] }}</h6>
                                <p class="timeline-desc">{{ $r[4] }}</p>
                                <div class="timeline-lead">
                                    <strong>{{ $r[5] }}</strong>
                                    <span class="timeline-role">{{ $r[6] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="gdivider">

{{-- ==================== FAQ ==================== --}}
<section class="py-5 bg-navy">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-4">
                <span class="pill mb-3">FAQ</span>
                <h2 class="fw-bold text-white mt-3 mb-3" style="font-size:1.6rem;line-height:1.2;">
                    Questions? <span class="gradient-text">Answered.</span>
                </h2>
                <p style="color:var(--text-muted);font-size:.92rem;line-height:1.78;margin-bottom:28px;">
                    Everything you need to know before you register.
                </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6Sd2goN-WIvGZwdLoAaDpjOSFMcrffFzTTZwv7mOCiMiA9w/viewform"
                   target="_blank" class="btn-pro">Register Now →</a>
            </div>
            <div class="col-lg-8">
                @php
                $faqs = [
                    ['Is this different from previous 10 CR Blueprint workshops?',
                     'Yes. Previous editions focused on finance, systems, and funding. This edition is entirely dedicated to people, leadership, and delegation — the #1 challenge reported by past attendees.'],
                    ['Will I get a recording?',
                     'The session is live and interactive on Google Meet. A limited-time replay may be available for registered attendees.'],
                    ['Can I ask my own specific question?',
                     'Yes. The last 30 minutes are a dedicated live Q&A with all speakers and the moderator. Come prepared with your specific people or leadership challenge.'],
                    ['Is there a cost to attend?',
                     'Registration is required to confirm your spot. Details are provided after you submit the registration form.'],
                ];
                @endphp
                @foreach($faqs as $i => $faq)
                <div class="faq-item {{ $i === 0 ? 'open' : '' }}">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>{{ $faq[0] }}</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </button>
                    <div class="faq-a" @if($i===0) style="max-height:220px;padding:0 24px 20px;" @endif>
                        {{ $faq[1] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ==================== ABOUT ==================== --}}
<section class="py-2 bg-navy-mid">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <p style="color:var(--text-muted);font-size:.88rem;line-height:1.8;">
                    <span class="fw-bold" style="color:var(--text-main);">Gnosys Digital</span> helps growing businesses move from manual, disconnected operations to integrated, system-driven execution.
                    This roundtable is an extension of our on-ground work — bringing you the diverse expertise needed to navigate the 10 CR journey.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== FINAL CTA ==================== --}}
<section class="cta-wrap">
    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <span class="pill mb-2">Reserve Your Spot</span>
                <h2 class="fw-bold text-white mt-2 mb-2" style="font-size:2rem;line-height:1.2;">
                    Seats Are Strictly <span class="gold-text">Limited</span>
                </h2>
                <p style="color:var(--text-muted);font-size:.97rem;line-height:1.78;margin-bottom:0;">
                    Ensure an interactive, high-value conversation. This edition fills quickly based on demand from founders facing people-scale challenges.
                </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6Sd2goN-WIvGZwdLoAaDpjOSFMcrffFzTTZwv7mOCiMiA9w/viewform"
                   target="_blank" class="btn-pro" style="font-size:1rem;padding:16px 48px;">
                    Register Now — 27 April 2026 →
                </a>
                <p style="color:var(--text-muted);font-size:.8rem;">
                    <i class="fas fa-shield-alt me-1" style="color:var(--accent);"></i>
                    Free to attend &nbsp;·&nbsp; Live on Google Meet &nbsp;·&nbsp; Limited seats
                </p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
// Countdown
(function(){
    var t = new Date('2026-04-27T14:00:00+05:30').getTime();
    var p = function(n){ return String(n).padStart(2,'0'); };
    function tick(){
        var d = t - Date.now();
        if(d<=0){
            var w=document.getElementById('countdown-wrap');
            if(w) w.innerHTML='<p style="color:#38bdf8;font-weight:700;font-size:1.1rem;">🔴 The event is live now!</p>';
            return;
        }
        document.getElementById('cd-days').textContent  = p(Math.floor(d/86400000));
        document.getElementById('cd-hours').textContent = p(Math.floor((d%86400000)/3600000));
        document.getElementById('cd-mins').textContent  = p(Math.floor((d%3600000)/60000));
        document.getElementById('cd-secs').textContent  = p(Math.floor((d%60000)/1000));
    }
    tick(); setInterval(tick,1000);
})();

// FAQ
function toggleFaq(btn){
    var item = btn.closest('.faq-item');
    var open = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(function(i){ i.classList.remove('open'); });
    if(!open) item.classList.add('open');
}
</script>
@endpush

@endsection