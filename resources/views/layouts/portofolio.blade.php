<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Profesional')</title>
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
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header & Navigation */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s;
        }
        
        header.scrolled {
            padding: 5px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            transition: padding 0.3s;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        header.scrolled nav {
            padding: 10px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .logo i {
            color: var(--accent);
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
            padding: 5px 0;
        }
        
        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: width 0.3s;
        }
        
        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }
        
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }
        
        main {
            margin-top: 80px;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 20px;
            text-align: center;
        }
        
        footer .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
            text-align: left;
        }
        
        footer .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        footer .footer-section p,
        footer .footer-section a {
            color: #cbd5e1;
            text-decoration: none;
            margin-bottom: 8px;
            display: block;
            transition: color 0.3s;
        }
        
        footer .footer-section a:hover {
            color: var(--primary);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            text-align: center;
            color: #cbd5e1;
        }
        
        @keyframes morph {
            0%, 100% {
                border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            }
            50% {
                border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(1deg);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .menu-toggle {
                display: block;
            }
        }
        
        @stack('css')
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header id="header">
        <nav>
            <a href="{{ url('/') }}" class="logo">
                <i class="fas fa-code"></i>
                <span>DANISH</span>
            </a>
            <div class="nav-links">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{ url('/projects') }}" class="{{ request()->is('projects') ? 'active' : '' }}">Proyek</a>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang Saya</h3>
                <p>Seorang developer passionate yang tertarik dengan teknologi web modern dan pengembangan full-stack applications.</p>
            </div>
            <div class="footer-section">
                <h3>Link Cepat</h3>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">Tentang</a>
                <a href="{{ url('/projects') }}">Proyek</a>
            </div>
            <div class="footer-section">
                <h3>Hubungi Saya</h3>
                <a href="mailto:email@example.com"><i class="fas fa-envelope"></i> Email</a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a href="https://github.com" target="_blank"><i class="fab fa-github"></i> GitHub</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Muhammad Danish Hidayat. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
    
    @stack('js')
</body>
</html>
