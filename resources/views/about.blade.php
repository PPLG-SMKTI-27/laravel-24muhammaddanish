<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Profesional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #ff5e00;
            --secondary: #ff9100;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #ff9900;
            --accent: #f6bb5c;
        }
        
        body {
            background: linear-gradient(135deg, #000000 0%, #000000 100%);
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
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }
        
        /* Hero Section dengan Foto Profil */
        .hero {
            padding: 180px 0 120px;
            display: flex;
            align-items: center;
            gap: 80px;
            position: relative;
            overflow: hidden;
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
        
        @keyframes morph {
            0%, 100% {
                border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            }
            50% {
                border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
            }
        }
        
        /* Area Foto Profil Keren */
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
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(1deg);
            }
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 5px solid white;
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
        
        .profile-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            color: white;
            padding: 30px 20px 20px;
            border-radius: 0 0 20px 20px;
            text-align: center;
        }
        
        .profile-overlay h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        .profile-overlay p {
            font-size: 0.9rem;
            opacity: 0.9;
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
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
        
        .profile-social {
            position: absolute;
            bottom: 20px;
            left: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 10;
        }
        
        .profile-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: white;
            border-radius: 50%;
            color: var(--primary);
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        
        .profile-social a:hover {
            transform: translateY(-5px);
            background-color: var(--primary);
            color: white;
        }
        
        /* Konten Hero */
        .hero-content {
            flex: 1;
            position: relative;
            z-index: 2;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            color: var(--dark);
            line-height: 1.2;
        }
        
        .hero-content h1 span {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: block;
        }
        
        .hero-content h2 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 25px;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }
        
        .hero-content h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 2px;
        }
        
        .hero-content p {
            font-size: 1.15rem;
            color: var(--gray);
            margin-bottom: 35px;
            max-width: 600px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 35px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }
        
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px #e98706;
            background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
            box-shadow: none;
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-group {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        
        /* Sections */
        section {
            padding: 100px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            color: var(--dark);
            margin-bottom: 20px;
            font-weight: 800;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 5px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 3px;
        }
        
        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        /* Experience Section */
        .experience {
            background-color: white;
            border-radius: 30px;
            margin: 0 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }
        
        .experience::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
        }
        
        .experience-timeline {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }
        
        .experience-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, var(--primary), var(--accent));
        }
        
        .timeline-item {
            display: flex;
            margin-bottom: 60px;
            position: relative;
            width: 100%;
        }
        
        .timeline-item:nth-child(odd) {
            justify-content: flex-start;
            padding-right: calc(50% + 30px);
        }
        
        .timeline-item:nth-child(even) {
            justify-content: flex-end;
            padding-left: calc(50% + 30px);
        }
        
        .timeline-content {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
            width: 100%;
            max-width: 450px;
            border-left: 5px solid var(--primary);
            transition: transform 0.3s;
        }
        
        .timeline-content:hover {
            transform: translateY(-10px);
        }
        
        .timeline-year {
            position: absolute;
            top: -25px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgb(255, 111, 0);
        }
        
        .timeline-item:nth-child(odd) .timeline-year {
            right: -15px;
        }
        
        .timeline-item:nth-child(even) .timeline-year {
            left: -15px;
        }
        
        .timeline-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .timeline-content .company {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 15px;
            display: block;
        }
        
        .timeline-content p {
            color: var(--gray);
            line-height: 1.7;
        }
        
        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 40px;
        }
        
        .skill-card {
            background-color: white;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            text-align: center;
            border-top: 5px solid var(--primary);
            position: relative;
            overflow: hidden;
        }
        
        .skill-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s;
        }
        
        .skill-card:hover::before {
            transform: scaleX(1);
        }
        
        .skill-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .skill-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(139, 92, 246, 0.1));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.5rem;
            color: var(--primary);
        }
        
        .skill-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .skill-card p {
            color: var(--gray);
            margin-bottom: 25px;
        }
        
        .skill-level {
            height: 10px;
            background-color: #e2e8f0;
            border-radius: 5px;
            margin-top: 20px;
            overflow: hidden;
            position: relative;
        }
        
        .skill-progress {
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 5px;
            position: relative;
            transition: width 1.5s ease-in-out;
        }
        
        .skill-progress::after {
            content: attr(data-percent);
            position: absolute;
            top: -30px;
            right: 0;
            background-color: var(--primary);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        /* Projects Section */
        .projects {
            background-color: var(--light);
            border-radius: 30px;
            margin: 0 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        
        .project-card {
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            position: relative;
        }
        
        .project-card:hover {
            transform: translateY(-20px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .project-img {
            height: 220px;
            width: 100%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
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
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
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
            background-color: white;
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .project-content {
            padding: 30px;
        }
        
        .project-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .project-content p {
            color: var(--gray);
            margin-bottom: 25px;
            line-height: 1.7;
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
        }
        
        .cta-btn {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border: none;
            position: relative;
            z-index: 2;
            padding: 18px 45px;
            font-size: 1.1rem;
        }
        
        .cta-btn:hover {
            background: linear-gradient(135deg, var(--accent), var(--primary));
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
            .hero {
                flex-direction: column;
                text-align: center;
                gap: 60px;
            }
            
            .profile-social {
                flex-direction: row;
                bottom: -60px;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .hero-content h1 {
                font-size: 3rem;
            }
            
            .experience-timeline::before {
                left: 30px;
            }
            
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                padding-left: 70px;
                padding-right: 0;
                justify-content: flex-start;
            }
            
            .timeline-item:nth-child(odd) .timeline-year,
            .timeline-item:nth-child(even) .timeline-year {
                left: -15px;
                right: auto;
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
            
            .profile-frame {
                width: 300px;
                height: 300px;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content h2 {
                font-size: 1.5rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
            
            .projects-grid,
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .btn-group {
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                padding: 150px 0 100px;
            }
            
            .profile-frame {
                width: 250px;
                height: 250px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
            
            .experience, .projects, .cta-section {
                margin: 0;
                border-radius: 0;
            }
        }

        #loginPopup {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%) translateY(-30px);
            background: #27ae60;
            color: white;
            padding: 15px 25px;
            border-radius: 6px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0,0,0,.3);
            opacity: 0;
            transition: all 0.4s ease-out;
            z-index: 9999;
            pointer-events: none;
            white-space: nowrap;
        }

        #loginPopup.show {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
            pointer-events: auto;
        }

    </style>
</head>
<body>
    <div id="loginPopup" style="display: none;">
        Anda berhasil login!
    </div>

    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-code"></i>
                    <span></span>
                </div>
                <div class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="nav-links" id="navLinks">
                    <a href="#home">Home</a>
                    <a href="#experience">Pengalaman</a>
                    <a href="#skills">Skill</a>
                    <a href="projects">Proyek</a>
                    @if(session('is_logged_in'))
                        <a href="/logout" style="color: #e74c3c;">Logout <i class="fas fa-sign-out-alt" style="font-size: 0.8rem;"></i></a>
                    @else
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                    @endif

                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section dengan Foto Profil -->
    <section id="home" class="hero">
        <div class="container">
            <div class="profile-container">
                <div class="profile-frame">
                    <div class="profile-img">
                        <!-- Ganti URL dengan foto Anda -->
                        <img src="yutub.jpg" alt="Foto Profil">
                        <div class="profile-overlay">
                            <h3>Muhammad Danish Hidayat</h3>
                            <p>Web Developer & UI/UX Designer</p>
                        </div>
                    </div>
                    <div class="profile-badge">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="profile-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/danishyiaso/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="hero-content">
                <h1>Halo, Saya <span>Muhammad Danish Hidayat</span></h1>
                <h2>Web Developer & UI/UX Designer</h2>
                <p>Saya adalah seorang pengembang web dengan pengalaman lebih dari 5 tahun dalam membangun aplikasi web modern. Saya memiliki passion dalam menciptakan solusi digital yang fungsional, menarik, dan memberikan pengalaman pengguna yang luar biasa.</p>
                
                <div class="btn-group">
                    <a href="projects" class="btn">
                        <i class="fas fa-eye"></i> Lihat Proyek Saya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience">
        <div class="container">
            <div class="section-title">
                <h2>Pengalaman Kerja</h2>
                <p>Perjalanan karir dan pengalaman profesional saya selama beberapa tahun terakhir</p>
            </div>
            <div class="experience-timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2022 - Sekarang</div>
                    <div class="timeline-content">
                        <h3>Senior Web Developer</h3>
                        <span class="company">Tech Solutions Inc.</span>
                        <p>Memimpin pengembangan aplikasi web untuk klien korporat, mengoptimalkan performa, dan menerapkan best practices dalam pengembangan. Bertanggung jawab atas arsitektur sistem dan mentoring junior developers.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2020 - 2022</div>
                    <div class="timeline-content">
                        <h3>Frontend Developer</h3>
                        <span class="company">Creative Digital Agency</span>
                        <p>Mengembangkan antarmuka pengguna yang responsif dan interaktif untuk berbagai proyek klien menggunakan React.js dan Vue.js. Berkolaborasi dengan tim desain untuk menerapkan UI/UX yang optimal.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2018 - 2020</div>
                    <div class="timeline-content">
                        <h3>Web Developer</h3>
                        <span class="company">Startup XYZ</span>
                        <p>Membangun aplikasi web dari nol, berkolaborasi dengan tim desain untuk mengimplementasikan UI/UX, dan mengintegrasikan API. Berkontribusi dalam pengembangan fitur-fitur utama produk.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="section-title">
                <h2>Kemampuan & Keahlian</h2>
                <p>Berbagai kemampuan teknis dan profesional yang saya kuasai</p>
            </div>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h3>Frontend Development</h3>
                    <p>HTML5, CSS3, JavaScript, React, Vue.js, TypeScript</p>
                    <div class="skill-level">
                        <div class="skill-progress" data-percent="95%" style="width: 95%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Backend Development</h3>
                    <p>Node.js, Express, MongoDB, Firebase, REST API</p>
                    <div class="skill-level">
                        <div class="skill-progress" data-percent="85%" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Figma, Adobe XD, Sketch, Prototyping</p>
                    <div class="skill-level">
                        <div class="skill-progress" data-percent="75%" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Kontak</h2>
                <p>Hubungi saya untuk proyek atau kolaborasi</p>
            </div>
            <div class="contact-info">
                <p><i class="fas fa-envelope"></i> email@example.com</p>
                <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                <p><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <p>&copy; 2024 Nama Anda. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        // Check if there's a success session
        @if(session()->has('login_success'))
            window.addEventListener('DOMContentLoaded', function() {
                const popup = document.getElementById('loginPopup');
                if (popup) {
                    popup.style.display = 'block';
                    popup.classList.add('show');
                    
                    setTimeout(() => {
                        popup.classList.remove('show');
                        setTimeout(() => {
                            popup.style.display = 'none';
                        }, 300);
                    }, 3000);
                }
            });
        @endif
    </script>

</body>