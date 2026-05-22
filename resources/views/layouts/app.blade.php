<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gnosys Digital — Expert-Built Digital Services & Products</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('styles')

    <style>
        header.navbar-glass {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 6px 20px rgba(15,23,42,0.06);
            border-bottom: 1px solid rgba(15,23,42,0.04);
        }
        .navbar-nav .nav-link { color: #283046; font-weight:600; }
        .navbar-nav .nav-link:hover { color: #0d6efd; background: rgba(13,110,253,0.06); border-radius:8px; }
        .search-input-wrapper { background: #f7fbff; border-radius: 999px; padding: 4px 8px; border:1px solid rgba(15,23,42,0.06); }
        .search-input { border: none; background: transparent; height:40px; }
        .avatar { width:34px; height:34px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; background:#eef2ff; color:#0d6efd; font-weight:700; }
        .avatar-lg { width:64px; height:64px; border-radius:50%; background:linear-gradient(135deg,#3a7bd5,#00d2ff); color:#fff; display:inline-flex; align-items:center; justify-content:center; font-weight:700; }
        main { padding-top:120px; }
    </style>
</head>

<body>

    <header class="fixed-top navbar-glass top-header">
        <div class="container d-flex align-items-center justify-content-between">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.webp') }}" alt="Gnosys Digital Logo" style="max-height:52px;">
            </a>

            <div class="d-flex align-items-center gap-2">
                <div class="search-wrapper">
                    <form action="{{ url('/') }}" method="GET" class="d-flex align-items-center">
                        <div class="search-input-wrapper d-flex align-items-center">
                            <input type="search" name="s" class="search-input" placeholder="Search...">
                            <button class="btn btn-link p-0 ms-2" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

                @guest
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-dark">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Register</a>
                @endguest

                @auth
                    <div class="dropdown user-dropdown">
                        <button class="btn btn-sm btn-outline-dark user-trigger dropdown-toggle d-flex align-items-center" id="userMenuBtnTop" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="avatar me-2">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</span>
                            <span class="user-name">{{ auth()->user()->name }}</span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end p-3 profile-card" aria-labelledby="userMenuBtnTop">

                            <!-- User Info -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-lg me-3">
                                    {{ strtoupper(substr(auth()->user()->name,0,1)) }}
                                </div>
                                <div>
                                    <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                                    <div class="text-muted small">{{ auth()->user()->email }}</div>
                                </div>
                            </div>

                            <!-- Wallet Card -->
                            <div class="wallet-card mb-3">
                                <div class="d-flex justify-content-between align-items-center">

                                    <!-- Left -->
                                    <div>
                                        <div class="wallet-title">
                                            <i class="bi bi-wallet2 me-1"></i> Wallet Balance
                                        </div>

                                        <h5 class="mb-2 fw-bold text-success WalletAmountCount">
                                            $ {{ number_format(auth()->user()->wallet?->balance ?? 0, 2) }}
                                        </h5>

                                        <!-- Add Balance Button -->
                                        <a href="#" class="btn btn-success btn-sm add-balance-btn" data-bs-toggle="modal" data-bs-target="#WalletCardModal">
                                            <i class="bi bi-plus-circle me-1"></i>
                                            Add Balance
                                        </a>
                                    </div>

                                    <!-- Right -->
                                    <div class="wallet-icon">
                                        <i class="bi bi-credit-card-2-front"></i>
                                    </div>

                                </div>
                            </div>

                            <!-- Registered Date -->
                            <div class="mb-2 small text-muted">
                                Registered:
                                <strong class="text-dark">
                                    {{ auth()->user()->created_at->format('F d, Y') }}
                                </strong>
                            </div>

                            <!-- Buttons -->
                            <div class="d-grid gap-2">
                                <a href="{{ route('profile') }}" class="btn btn-primary btn-sm">
                                    View Profile
                                </a>

                                <form action="{{ route('logout') }}" method="POST" class="m-0">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Secondary navigation: main menu below the top bar -->
        <nav class="secondary-nav" aria-label="Main navigation">
            <div class="container">
                <div class="collapse navbar-collapse" id="secondaryNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/digital-products') }}">Digital Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/digital-services') }}">Digital Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/learn') }}">Learn</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/video') }}">Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about.culture') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('engagement-models') }}">Engagement Models</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('seo-services') }}">SEO Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('erpnext-implementation') }}">ERPNext</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('channel-distribution-management-software-development') }}">Channel Software</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('custom-manufacturing-operations-control-software-development') }}">Manufacturing Software</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('supplychain-logistic') }}">Supplychain</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('privacy-policy') }}">Privacy</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('refund-return-policy') }}">Refund Policy</a></li>
                        <li class="nav-item ms-lg-2"><a class="nav-link btn-blueprint-nav" href="{{ route('10cr.blueprint.session3') }}"><i class="fas fa-rocket me-1"></i> 10 CR Blueprint</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Wallet Card Modal -->
        <div class="modal fade" id="WalletCardModal" tabindex="-1" aria-labelledby="WalletCardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg rounded-4">

                    <!-- Header -->
                    <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title fw-bold" id="WalletCardModalLabel">
                            <i class="bi bi-wallet2 me-2 text-success"></i>
                            Add Wallet Balance
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Body -->
                    <div class="modal-body pt-2">

                        <form method="POST" id="WalletBalanceForm">

                            @csrf

                            <!-- Current Balance -->
                            <div class="wallet-balance-box mb-4">
                                <small class="text-muted d-block">Current Balance</small>

                                <h3 class="fw-bold text-success mb-0 WalletAmountCount">
                                    $ {{ number_format(auth()->user()->wallet?->balance ?? 0, 2) }}
                                </h3>
                            </div>

                            <!-- Amount -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Enter Amount
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text bg-light">$</span>

                                    <input type="number"
                                        class="form-control"
                                        placeholder="Enter amount"
                                        min="1"
                                        name="amount"
                                        id="amount">
                                </div>

                                <small class="text-danger amount-error"></small>
                            </div>

                            <!-- Footer -->
                            <div class="modal-footer border-0 pt-0">
                                <button type="button"
                                        class="btn btn-light"
                                        data-bs-dismiss="modal">
                                    Cancel
                                </button>

                                <button type="submit"
                                        class="btn btn-success px-4"
                                        id="WalletSubmitBtn">
                                    Continue with PayPal
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Wallet Card Modal End -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-area">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="{{ asset('images/logo.webp') }}" alt="Gnosys Digital" class="mb-4" style="height: 40px;">
                    <p class="mb-4">{{ $settings['footer_about_text'] ?? 'From high-performing websites and automation setups to ready-to-use digital products — we build everything in-house so you can grow with confidence.' }}</p>
                    <div class="social-links">
                        <a href="{{ $settings['facebook_url'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $settings['twitter_url'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $settings['instagram_url'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $settings['linkedin_url'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Explore Custom Development</a></li>
                        <li><a href="#">Explore eCommerce Solutions</a></li>
                        <li><a href="{{ route('about.culture') }}">Culture Of Change</a></li>
                        <li><a href="{{ route('digital-products') }}">Digital Products</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us Today</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Digital Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">ERPNext Implementation</a></li>
                        <li><a href="#">Ai Automation Data Services</a></li>
                        <li><a href="#">SEO & Growth Services</a></li>
                        <li><a href="#">Managed WordPress Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact</h5>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> {{ $settings['contact_address'] ?? '1664, 225 The East Mall, Toronto, ON' }}</li>
                        <li><i class="fas fa-phone-alt me-2"></i> {{ $settings['contact_phone'] ?? '+1 647 947 9546' }}</li>
                        <li><i class="fas fa-envelope me-2"></i> {{ $settings['contact_email'] ?? 'connect@gnosysdigital.com' }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5 pt-4 border-top border-secondary">
                <div class="col-12 text-center text-md-start d-md-flex justify-content-between align-items-center">
                    <p class="mb-0">&copy; 2018 - 2026 by Dwarkadhish E-Commerce Private Limited. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- jQuery Validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    <!-- Bootstrap & Plugins JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Video Player JS -->
    <script src="{{ asset('js/video.js') }}"></script>
    <!-- Learning JS -->
    <script src="{{ asset('js/learn.js') }}"></script>
    @stack('scripts')

    <script>
        $(document).ready(function () {

            var modal = $('#WalletCardModal');

            modal.on('show.bs.modal', function () {
                console.log('Wallet modal is opening');
            });

            modal.on('hidden.bs.modal', function () {
                $(this).find('input').val('');
            });

            $('#WalletBalanceForm').validate({
                rules: {
                    amount: {
                        required: true,
                        number: true,
                        min: 1,
                        max: 50000
                    }
                },
                messages: {
                    amount: {
                        required: "Please enter wallet amount.",
                        number: "Amount must be a valid number.",
                        min: "Minimum add balance amount is $1.",
                        max: "Maximum add balance amount is $50,000."
                    }
                },
                errorElement: 'small',
                errorPlacement: function(error, element) {
                    error.addClass('text-danger');
                    error.insertAfter(element.closest('.input-group'));
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {

                    let btn = $('#WalletSubmitBtn');

                    btn.prop('disabled', true);
                    btn.html('Processing...');

                    $.ajax({
                        url: "{{ route('wallet.store') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            amount: $('#amount').val()
                        },
                        success: function(response) {
                            btn.prop('disabled', false);
                            btn.html('Continue with PayPal');
                            if (response.status) {
                                $('#WalletBalanceForm')[0].reset();
                                $('#amount').removeClass('is-invalid');
                                $('.amount-error').remove();

                                $('.modal-body').prepend(`
                                    <div class="alert alert-success wallet-success-alert">
                                        ${response.message}
                                    </div>
                                `);

                                if (response.data.amount != 0) {
                                    $('.WalletAmountCount').text(`$ ${response.data.amount}`);
                                }

                                setTimeout(() => {
                                    $('.wallet-success-alert').fadeOut();
                                }, 3000);

                                console.log(response);
                            }
                        },
                        error: function(xhr) {
                            btn.prop('disabled', false);
                            btn.html('Continue with PayPal');
                            if (xhr.status === 422) {

                                let errors = xhr.responseJSON.errors;

                                if (errors.amount) {

                                    $('#amount').addClass('is-invalid');

                                    $('.amount-error').remove();

                                    $('#amount').closest('.input-group').after(`
                                        <small class="text-danger amount-error">
                                            ${errors.amount[0]}
                                        </small>
                                    `);
                                }

                            } else {

                                $('.modal-body').prepend(`
                                    <div class="alert alert-danger wallet-error-alert">
                                        Something went wrong.
                                    </div>
                                `);

                                setTimeout(() => {
                                    $('.wallet-error-alert').fadeOut();
                                }, 3000);
                            }
                        }
                    });

                    return false;
                }
            });

        });
    </script>

</body>

</html>
