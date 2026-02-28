@extends('layouts.portofolio')

@section('title', 'Proyek - Muhammad Danish Hidayat')

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
    
    .projects-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        margin-bottom: 100px;
    }
    
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
    }
    
    .project-info {
        padding: 40px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    
    .project-category {
        color: var(--primary);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .project-title {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--dark);
        margin-bottom: 12px;
        transition: color 0.3s;
    }
    
    .project-card:hover .project-title {
        color: var(--primary);
    }
    
    .project-description {
        color: var(--gray);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: auto;
        margin-bottom: 20px;
    }
    
    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }
    
    .tech-tag {
        background-color: #f0f4f8;
        color: var(--primary);
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .project-footer {
        display: flex;
        gap: 12px;
    }
    
    .project-btn {
        flex: 1;
        padding: 12px 20px;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    
    .project-btn-primary {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: white;
    }
    
    .project-btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.2);
    }
    
    .project-btn-secondary {
        background-color: #f0f4f8;
        color: var(--primary);
        border: 1px solid #e2e8f0;
    }
    
    .project-btn-secondary:hover {
        background-color: var(--primary);
        color: white;
    }
    
    @media (max-width: 1024px) {
        .projects-grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
    }
    
    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }
        
        .filter-buttons {
            gap: 10px;
        }
        
        .filter-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        
        .projects-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<div class="page-hero">
    <div class="container">
        <h1>Proyek Saya</h1>
        <p>Koleksi proyek web yang telah saya kembangkan dengan teknologi terkini dan best practices</p>
    </div>
</div>

<div class="projects-container">
    <!-- Filter Section -->
    <div class="filter-section">
        <h3 class="filter-title">Filter Proyek</h3>
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-th"></i> Semua
            </button>
            <button class="filter-btn" data-filter="laravel">
                <i class="fab fa-laravel"></i> Laravel
            </button>
            <button class="filter-btn" data-filter="javascript">
                <i class="fab fa-js"></i> JavaScript
            </button>
            <button class="filter-btn" data-filter="ecommerce">
                <i class="fas fa-shopping-cart"></i> E-Commerce
            </button>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="projects-grid">
        <!-- Project 1 -->
        <div class="project-card" data-category="laravel">
            <div class="project-img">
                <i class="fas fa-shopping-cart"></i>
                <span class="project-tag">Featured</span>
            </div>
            <div class="project-info">
                <div class="project-category">
                    <i class="fas fa-shopping-cart"></i> E-Commerce
                </div>
                <h3 class="project-title">Platform E-Commerce</h3>
                <p class="project-description">Platform e-commerce lengkap dengan fitur shopping cart, payment gateway, dan inventory management yang terintegrasi sempurna.</p>
                <div class="project-tech">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Bootstrap</span>
                </div>
                <div class="project-footer">
                    <a href="#" class="project-btn project-btn-primary">
                        <i class="fas fa-external-link-alt"></i> Demo
                    </a>
                    <a href="#" class="project-btn project-btn-secondary">
                        <i class="fab fa-github"></i> Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card" data-category="laravel">
            <div class="project-img">
                <i class="fas fa-pen-nib"></i>
                <span class="project-tag">New</span>
            </div>
            <div class="project-info">
                <div class="project-category">
                    <i class="fas fa-pen-nib"></i> CMS
                </div>
                <h3 class="project-title">Blog Management System</h3>
                <p class="project-description">Sistem manajemen blog dengan CRUD lengkap, kategori, tag, komentar, dan dashboard admin yang user-friendly.</p>
                <div class="project-tech">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Blade</span>
                    <span class="tech-tag">PostgreSQL</span>
                </div>
                <div class="project-footer">
                    <a href="#" class="project-btn project-btn-primary">
                        <i class="fas fa-external-link-alt"></i> Demo
                    </a>
                    <a href="#" class="project-btn project-btn-secondary">
                        <i class="fab fa-github"></i> Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card" data-category="javascript">
            <div class="project-img">
                <i class="fas fa-tasks"></i>
            </div>
            <div class="project-info">
                <div class="project-category">
                    <i class="fas fa-tasks"></i> Productivity
                </div>
                <h3 class="project-title">Task Management App</h3>
                <p class="project-description">Aplikasi manajemen tugas dengan fitur real-time update, kolaborasi tim, dan tracking progress menggunakan teknologi terkini.</p>
                <div class="project-tech">
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">React</span>
                    <span class="tech-tag">Firebase</span>
                </div>
                <div class="project-footer">
                    <a href="#" class="project-btn project-btn-primary">
                        <i class="fas fa-external-link-alt"></i> Demo
                    </a>
                    <a href="#" class="project-btn project-btn-secondary">
                        <i class="fab fa-github"></i> Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 4 -->
        <div class="project-card" data-category="laravel ecommerce">
            <div class="project-img">
                <i class="fas fa-store"></i>
            </div>
            <div class="project-info">
                <div class="project-category">
                    <i class="fas fa-store"></i> Store
                </div>
                <h3 class="project-title">Multi-Vendor Marketplace</h3>
                <p class="project-description">Marketplace dengan support multiple vendor, system payment yang aman, dan dashboard penjual yang lengkap.</p>
                <div class="project-tech">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">Stripe</span>
                </div>
                <div class="project-footer">
                    <a href="#" class="project-btn project-btn-primary">
                        <i class="fas fa-external-link-alt"></i> Demo
                    </a>
                    <a href="#" class="project-btn project-btn-secondary">
                        <i class="fab fa-github"></i> Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 5 -->
        <div class="project-card" data-category="javascript">
            <div class="project-img">
                <i class="fas fa-chart-bar"></i>
            </div>
            <div class="project-info">
                <div class="project-category">
                    <i class="fas fa-chart-bar"></i> Analytics
                </div>
                <h3 class="project-title">Analytics Dashboard</h3>
                <p class="project-description">Dashboard analytics dengan real-time data visualization, custom report generation, dan export ke berbagai format.</p>
                <div class="project-tech">
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">Chart.js</span>
                    <span class="tech-tag">Node.js</span>
                </div>
                <div class="project-footer">
                    <a href="#" class="project-btn project-btn-primary">
                        <i class="fas fa-external-link-alt"></i> Demo
                    </a>
                    <a href="#" class="project-btn project-btn-secondary">
                        <i class="fab fa-github"></i> Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 6 -->
        <div class="project-card" data-category="laravel">
            <div class="project-img">
                <i class="fas fa-lock"></i>
            </div>
            <div class="project-info">
                <div class="project-category">
                    <i class="fas fa-lock"></i> Security
                </div>
                <h3 class="project-title">User Management System</h3>
                <p class="project-description">Sistem manajemen user lengkap dengan authentication, authorization, role management, dan audit logging.</p>
                <div class="project-tech">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">JWT</span>
                    <span class="tech-tag">MySQL</span>
                </div>
                <div class="project-footer">
                    <a href="#" class="project-btn project-btn-primary">
                        <i class="fas fa-external-link-alt"></i> Demo
                    </a>
                    <a href="#" class="project-btn project-btn-secondary">
                        <i class="fab fa-github"></i> Code
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active button
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter projects
            const filter = this.getAttribute('data-filter');
            const projects = document.querySelectorAll('.project-card');
            
            projects.forEach(project => {
                if (filter === 'all' || project.getAttribute('data-category').includes(filter)) {
                    project.style.display = '';
                } else {
                    project.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
