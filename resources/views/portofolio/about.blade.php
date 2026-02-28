@extends('layouts.portofolio')

@section('title', 'Tentang - Muhammad Danish Hidayat')

@push('css')
<style>
    .page-hero {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        color: white;
        padding: 180px 0 100px;
        text-align: center;
        margin-bottom: 80px;
        position: relative;
        overflow: hidden;
    }
    
    .page-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .page-hero p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto;
        opacity: 0.9;
        line-height: 1.8;
    }
    
    .about-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .about-section {
        margin-bottom: 80px;
    }
    
    .section-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 40px;
    }
    
    .section-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
    }
    
    .section-header h2 {
        font-size: 2rem;
        color: var(--dark);
        margin: 0;
    }
    
    .about-text {
        font-size: 1.1rem;
        color: var(--gray);
        line-height: 1.9;
        margin-bottom: 40px;
    }
    
    .education-timeline {
        position: relative;
        padding-left: 40px;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -40px;
        top: 40px;
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 0 0 3px var(--primary);
    }
    
    .timeline-item::after {
        content: '';
        position: absolute;
        left: -31px;
        top: 60px;
        width: 2px;
        height: 100px;
        background: linear-gradient(180deg, var(--primary), transparent);
    }
    
    .timeline-item:last-child::after {
        display: none;
    }
    
    .timeline-year {
        color: var(--primary);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 5px;
    }
    
    .timeline-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 8px;
    }
    
    .timeline-description {
        color: var(--gray);
    }
    
    .experience-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }
    
    .experience-card {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-left: 4px solid var(--primary);
        transition: all 0.3s;
    }
    
    .experience-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    }
    
    .experience-card h3 {
        font-size: 1.3rem;
        color: var(--dark);
        margin-bottom: 10px;
    }
    
    .experience-period {
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .experience-card p {
        color: var(--gray);
        line-height: 1.8;
    }
    
    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }
        
        .section-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
@endpush

@section('content')
<div class="page-hero">
    <div class="container">
        <h1>Tentang Saya</h1>
        <p>Seorang developer yang passionate dan berdedikasi untuk menciptakan solusi digital yang berkualitas tinggi</p>
    </div>
</div>

<div class="about-content">
    <!-- Tentang Singkat -->
    <section class="about-section">
        <div class="section-header">
            <div class="section-icon">
                <i class="fas fa-user"></i>
            </div>
            <h2>Profil Saya</h2>
        </div>
        <p class="about-text">
            Saya adalah Full Stack Web Developer dengan pengalaman lebih dari 3 tahun dalam mengembangkan aplikasi web yang modern dan responsive. Saya memiliki passion yang kuat dalam belajar teknologi baru dan selalu berusaha untuk mengikuti tren terbaru dalam dunia web development.
        </p>
        <p class="about-text">
            Dengan keahlian di berbagai bidang seperti Backend Development (PHP, Laravel), Frontend Development (HTML, CSS, JavaScript), dan Database Management, saya mampu menangani proyek-proyek dari konsep hingga production dengan hasil yang memuaskan.
        </p>
    </section>

    <!-- Pendidikan -->
    <section class="about-section">
        <div class="section-header">
            <div class="section-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h2>Pendidikan</h2>
        </div>
        <div class="education-timeline">
            <div class="timeline-item">
                <div class="timeline-year">2020 - 2024</div>
                <div class="timeline-title">Sarjana Teknik Informatika</div>
                <div class="timeline-description">Universitas Teknologi Indonesia | GPA: 3.8/4.0</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">2019</div>
                <div class="timeline-title">Full Stack Web Development Bootcamp</div>
                <div class="timeline-description">Coding Indonesia | Lulus dengan Sertifikat</div>
            </div>
        </div>
    </section>

    <!-- Pengalaman -->
    <section class="about-section">
        <div class="section-header">
            <div class="section-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <h2>Pengalaman Kerja</h2>
        </div>
        <div class="experience-grid">
            <div class="experience-card">
                <h3>Senior Web Developer</h3>
                <div class="experience-period">2023 - Sekarang</div>
                <p>PT Teknologi Indonesia | Mengembangkan dan maintenance aplikasi web enterprise untuk klien korporat dengan teknologi Laravel dan React.</p>
            </div>
            <div class="experience-card">
                <h3>Web Developer</h3>
                <div class="experience-period">2022 - 2023</div>
                <p>CV Kreasi Digital | Membangun website responsif dan aplikasi web untuk berbagai klien dari startup hingga perusahaan besar.</p>
            </div>
            <div class="experience-card">
                <h3>Junior Web Developer</h3>
                <div class="experience-period">2021 - 2022</div>
                <p>Studio Desain Web | Mengembangkan frontend website dan membantu dalam database design untuk berbagai proyek.</p>
            </div>
        </div>
    </section>
</div>
@endsection
