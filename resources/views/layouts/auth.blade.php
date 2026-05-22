<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Gnosys Digital') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(180deg, #eef4fb 0%, #f7fbff 45%, #ffffff 100%);
            min-height: 100vh;
        }

        .auth-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-card {
            max-width: 960px;
            width: 100%;
            border: none;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 24px 70px rgba(33, 82, 177, 0.14);
        }

        .auth-side {
            background: linear-gradient(180deg, #082e6e 0%, #174ca0 100%);
            color: #fff;
        }

        .auth-side h1,
        .auth-side p {
            color: #f7fbff;
        }

        .auth-side .feature-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0 0;
        }

        .auth-side .feature-list li {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            font-weight: 500;
        }

        .auth-side .feature-list li i {
            min-width: 28px;
            font-size: 1rem;
            color: #54baff;
        }

        .auth-card .form-control {
            border-radius: 16px;
            padding: 1rem 1rem;
            box-shadow: none;
        }

        .auth-card .btn-primary {
            border-radius: 16px;
            padding: 0.95rem 1.2rem;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .auth-footer {
            font-size: 0.95rem;
            color: #6b7280;
        }

        .brand-logo {
            height: 52px;
        }
    </style>
</head>

<body>
    <section class="auth-page">
        <div class="container">
            <div class="card auth-card">
                <div class="row g-0">
                    <div class="col-lg-5 auth-side p-5 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <img src="{{ asset('images/logo.webp') }}" alt="Gnosys Digital" class="brand-logo">
                            </div>
                            <h1 class="fw-bold">Gnosys Digital</h1>
                            <p class="mb-4">Secure portal access for registered users only. Login or register to enter the dashboard and services pages.</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-lock"></i> Secure user access</li>
                                <li><i class="fas fa-chart-line"></i> Dashboard only after login</li>
                                <li><i class="fas fa-mobile-alt"></i> Responsive design</li>
                            </ul>
                        </div>
                        <div class="mt-4 auth-footer">
                            <p class="mb-1">Powered by Gnosys Digital</p>
                            <p class="mb-0">Your site access is protected with authentication.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 p-5 bg-white">
                        <div class="mb-4 text-center">
                            <h2 class="fw-bold mb-2">@yield('auth-title')</h2>
                            <p class="text-muted mb-0">@yield('auth-subtitle')</p>
                        </div>
                        <div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
