<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Gnosys Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-wrapper {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            display: flex;
            min-height: 600px;
        }
        
        .login-left {
            flex: 1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-left::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 20s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(-30px, -30px) rotate(180deg); }
        }
        
        .login-right {
            flex: 1.2;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .brand {
            margin-bottom: 30px;
        }
        
        .brand h1 {
            font-size: 2.8rem;
            font-weight: 800;
            background: linear-gradient(to right, #ffffff, #e0e0e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            letter-spacing: -1px;
            gap: 15px;
        }
        
        .brand p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .login-right .brand h1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-right .brand p {
            color: #6c757d;
        }
        
        .login-title {
            margin-bottom: 10px;
        }
        
        .login-title h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .login-subtitle {
            color: #6c757d;
            margin-bottom: 40px;
        }
        
        .form-floating {
            margin-bottom: 20px;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 16px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            height: auto;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }
        
        .form-floating label {
            color: #6c757d;
            padding: 16px 20px;
        }
        
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            color: #667eea;
        }
        
        .input-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 10;
        }
        
        .form-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 16px;
            font-weight: 600;
            font-size: 16px;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }
        
        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-login:hover::before {
            left: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }
        
        .alert {
            border-radius: 12px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 25px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .form-check-input {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 4px;
        }
        
        .form-check-label {
            color: #6c757d;
            font-size: 14px;
        }
        
        .credentials-info {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            margin-top: 30px;
            border-left: 4px solid #667eea;
        }
        
        .credentials-info h6 {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .credentials-info p {
            color: #6c757d;
            font-size: 14px;
            margin: 0;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }
        
        .feature-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 16px;
        }
        
        .feature-list i {
            margin-right: 15px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
                max-width: 400px;
            }
            
            .login-left {
                padding: 40px 30px;
                min-height: auto;
            }
            
            .login-right {
                padding: 40px 30px;
            }
            
            .brand h1 {
                font-size: 2rem;
            }
            
            .login-title h2 {
                font-size: 1.5rem;
            }
        }
        
        .shields {
            margin-top: auto;
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        
        .shield {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-left">
            <div class="brand">
                <h1>
                    <i class="fas fa-cubes"></i>
                    Gnosys Digital
                </h1>
                <p>Premium Digital Solutions</p>
            </div>
            
            <h3 class="mb-4">Welcome to Admin</h3>
            <p class="mb-4">Manage your digital products and services with powerful tools</p>
            
            <ul class="feature-list">
                <li><i class="fas fa-check-circle"></i> Product Management</li>
                <li><i class="fas fa-check-circle"></i> Service Control</li>
                <li><i class="fas fa-check-circle"></i> Analytics Dashboard</li>
                <li><i class="fas fa-check-circle"></i> Secure Access</li>
            </ul>
            
            <div class="shields">
                <div class="shield">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="shield">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
        </div>
        
        <div class="login-right">
            <div class="brand d-md-none">
                <h1>Gnosys Digital</h1>
                <p>Admin Dashboard</p>
            </div>
            <div class="login-title">
                <h2>Welcome Back!</h2>
                <p class="login-subtitle">Please login to access your admin dashboard</p>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <strong>Login Failed!</strong> Please check your credentials and try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                
                <div class="form-group">
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           placeholder="Email Address" 
                           required>
                    <i class="fas fa-envelope input-icon"></i>
                    @error('email')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           placeholder="Password" 
                           required>
                    <i class="fas fa-lock input-icon"></i>
                    @error('password')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="remember-me">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Remember me for 30 days
                    </label>
                </div>

                <button type="submit" class="btn btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i> Login to Admin Panel
                </button>
            </form>

            <div class="credentials-info">
                <h6><i class="fas fa-info-circle me-2"></i>Default Login Credentials</h6>
                <p><strong>Email:</strong> admin@example.com</p>
                <p><strong>Password:</strong> password</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
        
        // Add animation to form inputs
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>
