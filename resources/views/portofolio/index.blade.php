@extends('layouts.portofolio')

@section('title', 'Home - Portofolio Muhammad Danish Hidayat')

@push('css')
<style>
    /* Hero Section dengan Foto Profil */
    .hero {
        padding: 180px 0 120px;
        display: flex;
        align-items: center;
        gap: 80px;
        position: relative;
        overflow: hidden;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 500px;
        height: 500px;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(139, 92, 246, 0.1) 100%);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        z-index: -1;
        animation: morph 8s ease-in-out infinite;
    }
    
    .hero::after {
        content: '';
        position: absolute;
        bottom: -100px;
        left: -100px;
        width: 400px;
        height: 400px;
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.1) 0%, rgba(37, 99, 235, 0.1) 100%);
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        z-index: -1;
        animation: morph 10s ease-in-out infinite;
    }
    
    /* Area Foto Profil */
    .profile-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    
    .profile-frame {
        width: 380px;
        height: 380px;
        position: relative;
        border-radius: 30px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        padding: 12px;
        box-shadow: 
            0 20px 40px rgba(37, 99, 235, 0.2),
            0 0 0 1px rgba(255, 255, 255, 0.1) inset,
            0 0 50px rgba(139, 92, 246, 0.1) inset;
        animation: float 6s ease-in-out infinite;
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    
    .profile-img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border: 5px solid white;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        color: white;
    }
    
    .profile-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }
    
    .profile-img:hover img {
        transform: scale(1.05);
    }
    
    .profile-badge {
        position: absolute;
        top: -15px;
        right: -15px;
        background: linear-gradient(135deg, #f59e0b, #f97316);
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 10px 20px rgba(245, 158, 11, 0.3);
        z-index: 10;
        animation: pulse 2s infinite;
    }
    
    /* Konten Hero */
    .hero-content {
        flex: 1;
        z-index: 2;
    }
    
    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1.2;
    }
    
    .hero-content p {
        font-size: 1.1rem;
        color: var(--gray);
        margin-bottom: 30px;
        line-height: 1.8;
    }
    
    .hero-buttons {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    
    .btn {
        padding: 15px 40px;
        border-radius: 50px;
        border: none;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 1rem;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: white;
        box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(37, 99, 235, 0.4);
    }
    
    .btn-secondary {
        background-color: white;
        color: var(--primary);
        border: 2px solid var(--primary);
    }
    
    .btn-secondary:hover {
        background-color: var(--primary);
        color: white;
        transform: translateY(-3px);
    }
    
    /* Skills Section */
    .skills-section {
        max-width: 1200px;
        margin: 100px auto 0;
        padding: 0 20px;
        text-align: center;
        margin-bottom: 100px;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 60px;
        color: var(--dark);
    }
    
    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        margin-bottom: 60px;
    }
    
    .skill-card {
        background-color: white;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s;
        text-align: center;
    }
    
    .skill-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    }
    
    .skill-icon {
        font-size: 3rem;
        color: var(--primary);
        margin-bottom: 15px;
    }
    
    .skill-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--dark);
    }
    
    .skill-card p {
        color: var(--gray);
        font-size: 0.95rem;
    }
    
    @media (max-width: 1024px) {
        .hero {
            flex-direction: column;
            padding: 120px 0 80px;
            gap: 40px;
        }
        
        .hero-content h1 {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .profile-frame {
            width: 250px;
            height: 250px;
        }
        
        .hero-content h1 {
            font-size: 2rem;
        }
        
        .hero-buttons {
            flex-direction: column;
        }
        
        .btn {
            justify-content: center;
        }
    }
</style>
@endpush

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>Muhammad Danish Hidayat</h1>
        <p>Full Stack Web Developer dengan pengalaman mengembangkan aplikasi web yang modern, scalable, dan user-friendly. Saya passionate tentang menciptakan solusi digital yang inovatif.</p>
        <div class="hero-buttons">
            <a href="{{ url('/projects') }}" class="btn btn-primary">
                <i class="fas fa-briefcase"></i> Lihat Proyek
            </a>
            <a href="{{ url('/about') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-right"></i> Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
    <div class="profile-container">
        <div class="profile-frame">
            <div class="profile-img">
                <i class="fas fa-user"></i>
            </div>
            <div class="profile-badge">
                <i class="fas fa-check"></i>
            </div>
        </div>
    </div>
</div>

<section class="skills-section">
    <h2 class="section-title">Keahlian Saya</h2>
    <div class="skills-grid">
        <div class="skill-card">
            <div class="skill-icon">
                <i class="fab fa-php"></i>
            </div>
            <h3>Backend Development</h3>
            <p>PHP, Laravel, MySQL, RESTful APIs</p>
        </div>
        <div class="skill-card">
            <div class="skill-icon">
                <i class="fab fa-js"></i>
            </div>
            <h3>Frontend Development</h3>
            <p>HTML, CSS, JavaScript, Bootstrap</p>
        </div>
        <div class="skill-card">
            <div class="skill-icon">
                <i class="fas fa-database"></i>
            </div>
            <h3>Database</h3>
            <p>MySQL, PostgreSQL, Redis</p>
        </div>
        <div class="skill-card">
            <div class="skill-icon">
                <i class="fab fa-git"></i>
            </div>
            <h3>Version Control</h3>
            <p>Git, GitHub, GitLab</p>
        </div>
    </div>
</section>
@endsection
