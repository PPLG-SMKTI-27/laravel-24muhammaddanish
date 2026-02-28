<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek - Portofolio Profesional</title>
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
            max-width: 1400px;
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
        }
        
        header.scrolled nav {
            padding: 10px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
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
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
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
        
        /* Hero Section Halaman Proyek */
        .page-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 180px 0 100px;
            text-align: center;
            margin-bottom: 80px;
            position: relative;
            overflow: hidden;
        }
        
        .page-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"><path fill="%23ffffff10" d="M0,0 Q250,50 500,0 T1000,0 V100 H0 Z"/></svg>');
            background-size: 100% 100px;
            background-repeat: repeat-x;
            background-position: top;
        }
        
        .page-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(255,255,255,0.05) 0%, transparent 50%);
        }
        
        .page-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .page-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
            line-height: 1.8;
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
            z-index: 2;
        }
        
        /* Filter Section */
        .filter-section {
            margin-bottom: 60px;
            text-align: center;
        }
        
        .filter-title {
            font-size: 1.3rem;
            margin-bottom: 25px;
            color: var(--dark);
            font-weight: 600;
        }
        
        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .filter-btn {
            padding: 12px 28px;
            background-color: white;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            color: var(--dark);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .filter-btn:hover {
            background-color: var(--light);
            border-color: var(--primary);
            color: var(--primary);
        }
        
        .filter-btn.active {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-color: transparent;
            color: white;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }
        
        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 50px;
            margin-bottom: 100px;
        }
        
        .project-card {
            background-color: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .project-card:hover {
            transform: translateY(-25px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }
        
        .project-img {
            height: 240px;
            width: 100%;
            background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 4.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .project-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }
        
        .project-card:hover .project-img::before {
            transform: translateX(100%);
        }
        
        .project-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
            z-index: 10;
        }
        
        .project-content {
            padding: 35px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .project-content h3 {
            font-size: 1.6rem;
            margin-bottom: 15px;
            color: var(--dark);
            line-height: 1.3;
        }
        
        .project-content p {
            color: var(--gray);
            margin-bottom: 25px;
            line-height: 1.7;
            flex-grow: 1;
        }
        
        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }
        
        .tech-tag {
            background-color: rgba(37, 99, 235, 0.1);
            color: var(--primary);
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .tech-tag:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }
        
        .project-links {
            display: flex;
            gap: 15px;
            margin-top: auto;
        }
        
        .project-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 28px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s;
            flex: 1;
            text-align: center;
        }
        
        .project-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(37, 99, 235, 0.3);
            background: linear-gradient(135deg, var(--secondary), var(--primary));
        }
        
        .project-link.outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .project-link.outline:hover {
            background: var(--primary);
            color: white;
        }
        
        /* Project Detail Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s, visibility 0.4s;
            padding: 20px;
            backdrop-filter: blur(10px);
        }
        
        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .modal {
            background-color: white;
            border-radius: 25px;
            max-width: 1000px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            animation: modalAppear 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        @keyframes modalAppear {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(50px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        .modal-close {
            position: absolute;
            top: 25px;
            right: 25px;
            background-color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            z-index: 10;
            transition: all 0.3s;
            color: var(--dark);
        }
        
        .modal-close:hover {
            background-color: var(--primary);
            color: white;
            transform: rotate(90deg);
        }
        
        .modal-img {
            height: 350px;
            width: 100%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 5rem;
            position: relative;
            overflow: hidden;
        }
        
        .modal-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        }
        
        .modal-content {
            padding: 50px;
        }
        
        .modal-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark);
            line-height: 1.2;
        }
        
        .modal-content h3 {
            font-size: 1.4rem;
            margin: 35px 0 20px;
            color: var(--dark);
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(37, 99, 235, 0.1);
        }
        
        .modal-content p {
            color: var(--gray);
            margin-bottom: 25px;
            line-height: 1.8;
        }
        
        .modal-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }
        
        .modal-features {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .modal-features li {
            padding: 12px 0;
            color: var(--gray);
            position: relative;
            padding-left: 30px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .modal-features li:last-child {
            border-bottom: none;
        }
        
        .modal-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }
        
        .modal-links {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, var(--dark) 0%, #0f172a 100%);
            color: white;
            border-radius: 30px;
            margin: 0 20px 100px;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"><path fill="%23ffffff10" d="M0,50 Q250,0 500,50 T1000,50 V100 H0 Z"/></svg>');
            background-size: 100% 100px;
            background-repeat: repeat-x;
            background-position: bottom;
        }
        
        .cta-section h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        
        .cta-section p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
            line-height: 1.8;
        }
        
        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
            z-index: 2;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 38px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-decoration: none;
            border-radius: 15px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.2);
        }
        
        .btn:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.3);
            background: linear-gradient(135deg, var(--secondary), var(--primary));
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
            box-shadow: none;
        }
        
        .btn-outline:hover {
            background: white;
            color: var(--dark);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
            position: relative;
            margin-top: 100px;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, var(--dark), transparent);
            transform: translateY(-100%);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }
        
        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: white;
            position: relative;
            padding-bottom: 15px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 2px;
        }
        
        .footer-column p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }
        
        .footer-links i {
            color: var(--primary);
            font-size: 0.8rem;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 1100px) {
            .projects-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                gap: 40px;
            }
            
            .modal {
                max-width: 90%;
            }
        }
        
        @media (max-width: 900px) {
            .projects-grid {
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            }
            
            .page-hero h1 {
                font-size: 2.8rem;
            }
            
            .modal-content {
                padding: 35px;
            }
            
            .modal-img {
                height: 280px;
            }
        }
        
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                align-items: center;
                padding: 30px 0;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                transition: all 0.3s;
                z-index: 999;
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            .page-hero h1 {
                font-size: 2.4rem;
            }
            
            .page-hero p {
                font-size: 1.1rem;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }
            
            .project-links {
                flex-direction: column;
            }
            
            .modal-links {
                flex-direction: column;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-buttons {
                gap: 10px;
            }
            
            .filter-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .page-hero {
                padding: 150px 0 80px;
            }
            
            .page-hero h1 {
                font-size: 2rem;
            }
            
            .project-card:hover {
                transform: translateY(-15px);
            }
            
            .project-content {
                padding: 25px;
            }
            
            .modal-content {
                padding: 25px;
            }
            
            .modal-img {
                height: 220px;
            }
            
            .modal-content h2 {
                font-size: 1.8rem;
            }
            
            .cta-section {
                margin: 0 0 80px;
                border-radius: 0;
                padding: 80px 20px;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">
                    <i class="fas fa-code"></i>
                    <span>Portofolio</span>
                </a>
                <div class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="nav-links" id="navLinks">
                    <a href="about">Home</a>
                    <a href="index.html#about">Tentang</a>
                    <a href="index.html#experience">Pengalaman</a>
                    <a href="index.html#skills">Skill</a>
                    <a href="projects.html" class="active">Proyek</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Portofolio Proyek</h1>
            <p>Jelajahi koleksi lengkap proyek yang telah saya kerjakan, mulai dari aplikasi web, mobile, hingga desain UI/UX. Setiap proyek mencerminkan kemampuan teknis, kreativitas, dan dedikasi saya dalam menciptakan solusi digital yang luar biasa.</p>
            
            <div class="hero-buttons">
                <a href="about" class="btn">
                    <i class="fas fa-user"></i> Tentang Saya
                </a>
                <a href="index.html#skills" class="btn btn-outline">
                    <i class="fas fa-code"></i> Lihat Skill Saya
                </a>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <div class="container">
        <div class="filter-section">
            <h3 class="filter-title">Filter berdasarkan kategori:</h3>
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large"></i> Semua
                </button>
                <button class="filter-btn" data-filter="web">
                    <i class="fas fa-globe"></i> Web Development
                </button>
                <button class="filter-btn" data-filter="mobile">
                    <i class="fas fa-mobile-alt"></i> Mobile App
                </button>
                <button class="filter-btn" data-filter="design">
                    <i class="fas fa-palette"></i> UI/UX Design
                </button>
                <button class="filter-btn" data-filter="fullstack">
                    <i class="fas fa-layer-group"></i> Full Stack
                </button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid" id="projectsContainer">
            <!-- Project 1 -->
            <div class="project-card" data-category="web fullstack">
                <div class="project-img">
                    <div class="project-tag">Web App</div>
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="project-content">
                    <h3>E-commerce Platform Premium</h3>
                    <p>Platform e-commerce lengkap dengan sistem pembayaran terintegrasi, manajemen inventaris canggih, dan dashboard admin yang powerful. Dibangun dengan teknologi modern untuk performa optimal.</p>
                    <div class="project-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>
                        <span class="tech-tag">Stripe API</span>
                        <span class="tech-tag">Redux</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link" data-project="1">
                            <i class="fas fa-external-link-alt"></i> Lihat Detail
                        </a>
                        <a href="https://github.com" target="_blank" class="project-link outline">
                            <i class="fab fa-github"></i> Kode Sumber
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card" data-category="mobile">
                <div class="project-img">
                    <div class="project-tag">Mobile App</div>
                    <i class="fas fa-music"></i>
                </div>
                <div class="project-content">
                    <h3>Music Streaming App</h3>
                    <p>Aplikasi streaming musik dengan rekomendasi personalisasi AI, playlist dinamis berdasarkan mood, dan kemampuan streaming offline. Pengalaman musik yang immersive dan personal.</p>
                    <div class="project-tech">
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">Firebase</span>
                        <span class="tech-tag">Redux</span>
                        <span class="tech-tag">Spotify API</span>
                        <span class="tech-tag">Expo</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link" data-project="2">
                            <i class="fas fa-external-link-alt"></i> Lihat Detail
                        </a>
                        <a href="https://github.com" target="_blank" class="project-link outline">
                            <i class="fab fa-github"></i> Kode Sumber
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="project-card" data-category="web design">
                <div class="project-img">
                    <div class="project-tag">UI/UX Design</div>
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="project-content">
                    <h3>Analytics Dashboard</h3>
                    <p>Dashboard analitik dengan visualisasi data real-time untuk bisnis. Desain fokus pada usability dan aksesibilitas dengan berbagai chart interaktif yang membantu pengambilan keputusan.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">D3.js</span>
                        <span class="tech-tag">Tailwind CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link" data-project="3">
                            <i class="fas fa-external-link-alt"></i> Lihat Detail
                        </a>
                        <a href="https://github.com" target="_blank" class="project-link outline">
                            <i class="fab fa-github"></i> Kode Sumber
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="project-card" data-category="fullstack">
                <div class="project-img">
                    <div class="project-tag">Full Stack</div>
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="project-content">
                    <h3>Project Management Tool</h3>
                    <p>Aplikasi manajemen proyek kolaboratif dengan fitur task assignment, timeline visual, dan real-time updates. Dibangun dengan MERN stack dan WebSocket untuk komunikasi real-time.</p>
                    <div class="project-tech">
                        <span class="tech-tag">MongoDB</span>
                        <span class="tech-tag">Express</span>
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">Socket.io</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link" data-project="4">
                            <i class="fas fa-external-link-alt"></i> Lihat Detail
                        </a>
                        <a href="https://github.com" target="_blank" class="project-link outline">
                            <i class="fab fa-github"></i> Kode Sumber
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="project-card" data-category="design">
                <div class="project-img">
                    <div class="project-tag">UI/UX Design</div>
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="project-content">
                    <h3>Health & Fitness App</h3>
                    <p>Desain UI/UX untuk aplikasi kesehatan dan kebugaran dengan tracking aktivitas, monitoring nutrisi, dan progress tracking. Fokus pada user experience yang intuitif dan motivasi pengguna.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Adobe XD</span>
                        <span class="tech-tag">Prototyping</span>
                        <span class="tech-tag">User Research</span>
                        <span class="tech-tag">Wireframing</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link" data-project="5">
                            <i class="fas fa-external-link-alt"></i> Lihat Detail
                        </a>
                        <a href="https://github.com" target="_blank" class="project-link outline">
                            <i class="fab fa-github"></i> Kode Sumber
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="project-card" data-category="web">
                <div class="project-img">
                    <div class="project-tag">Web Development</div>
                    <i class="fas fa-blog"></i>
                </div>
                <div class="project-content">
                    <h3>CMS Blog Platform</h3>
                    <p>Platform blog dengan sistem manajemen konten yang mudah digunakan. Mendukung multi-user, rich text editor, dan optimasi SEO untuk meningkatkan visibilitas konten di mesin pencari.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Tailwind CSS</span>
                        <span class="tech-tag">SEO</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link" data-project