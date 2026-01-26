<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portofolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2563eb;
            --secondary: #3b82f6;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --accent: #8b5cf6;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: float 20s ease-in-out infinite;
        }

        body::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: float 25s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(20px); }
        }

        .login-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 420px;
            padding: 15px;
            max-height: 95vh;
            overflow-y: auto;
        }

        .back-button {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 20px;
            transition: all 0.3s;
            font-weight: 600;
        }

        .back-button:hover {
            transform: translateX(-5px);
        }

        .back-button i {
            font-size: 1rem;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .login-header i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 10px;
            display: block;
        }

        .login-container h2 {
            color: var(--dark);
            font-size: 1.6rem;
            margin-bottom: 5px;
        }

        .login-container p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: var(--dark);
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 0.85rem;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s;
            background: #f8fafc;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-group input::placeholder {
            color: #cbd5e1;
        }

        .error-message {
            color: #e74c3c;
            text-align: center;
            background: #fadbd8;
            padding: 10px 12px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-weight: 600;
            font-size: 0.85rem;
            border-left: 4px solid #e74c3c;
        }

        .login-btn {
            width: 100%;
            padding: 11px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
            margin-top: 8px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(37, 99, 235, 0.3);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-footer {
            text-align: center;
            margin-top: 18px;
            color: var(--gray);
            font-size: 0.8rem;
        }

        .demo-info {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(139, 92, 246, 0.1) 100%);
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 18px;
            border-left: 4px solid var(--primary);
        }

        .demo-info h4 {
            color: var(--primary);
            font-size: 0.8rem;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .demo-info p {
            color: var(--gray);
            font-size: 0.75rem;
            margin: 2px 0;
        }

        .demo-info code {
            background: white;
            padding: 2px 5px;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            color: var(--primary);
            font-weight: 600;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }

            .login-container h2 {
                font-size: 1.4rem;
            }

            .login-header i {
                font-size: 2rem;
            }

            .login-wrapper {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <a href="/about" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Kembali ke About
        </a>

        <div class="login-container">
            <div class="login-header">
                <i class="fas fa-lock"></i>
                <h2>Login</h2>
                <p>Akses area admin portofolio</p>
            </div>

            @if($errors->any())
                <div class="error-message">
                    <i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="demo-info">
                <h4><i class="fas fa-info-circle"></i> Demo Login</h4>
                <p>Email: <code>admin@portfolio.dev</code></p>
                <p>Password: <code>password123</code></p>
            </div>

            <form method="POST" action="/login">
                @csrf
                <div class="form-group">
                    <label for="email">
                        <i class="fas fa-envelope" style="margin-right: 8px; color: var(--primary);"></i>
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="admin@portfolio.dev" required>
                </div>

                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-key" style="margin-right: 8px; color: var(--primary);"></i>
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i>
                    Login Sekarang
                </button>
            </form>

            <div class="login-footer">
                <p>Halaman ini hanya untuk akses admin. Kembali ke <a href="/about" style="color: var(--primary); text-decoration: none; font-weight: 600;">halaman utama</a>.</p>
            </div>
        </div>
    </div>

</body>
</html>
