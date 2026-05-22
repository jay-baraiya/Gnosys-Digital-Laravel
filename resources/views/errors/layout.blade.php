<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Gnosys Digital</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --dark-bg: #0f172a;
        }

        body {
            background-color: var(--dark-bg);
            color: #f8fafc;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin: 0;
        }

        .error-container {
            text-align: center;
            max-width: 600px;
            padding: 40px;
            z-index: 10;
        }

        .error-code {
            font-size: 10rem;
            font-weight: 800;
            font-family: 'Montserrat', sans-serif;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
            margin-bottom: 20px;
            letter-spacing: -5px;
            animation: pulse 2s infinite;
        }

        .error-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }

        .error-msg {
            font-size: 1.1rem;
            color: #94a3b8;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .btn-premium {
            background: var(--primary-gradient);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
            border: none;
        }

        .btn-premium:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.4);
            color: white;
        }

        /* Abstract Background Elements */
        .bg-blob {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, rgba(15, 23, 42, 0) 70%);
            border-radius: 50%;
            z-index: 1;
        }

        .blob-1 {
            top: -10%;
            right: -10%;
        }

        .blob-2 {
            bottom: -10%;
            left: -10%;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            .error-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="bg-blob blob-1"></div>
    <div class="bg-blob blob-2"></div>

    <div class="error-container">
        <div class="error-code">@yield('code')</div>
        <h1 class="error-title">@yield('title')</h1>
        <p class="error-msg">@yield('message')</p>

        <a href="{{ url('/admin/dashboard') }}" class="btn-premium">
            <i class="fas fa-arrow-left"></i> Return to Dashboard
        </a>
    </div>
</body>

</html>