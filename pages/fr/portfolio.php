<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - TunaFFaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary: #09aa39ff;
            --primary-light: #000000ff;
            --secondary: #e9b949;
            --secondary-light: #f5d37c;
            --accent: #2a7f62;
            --dark: #0f1f2f;
            --light: #f8f9fa;
            --gray: #6c757d;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #fff;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        h1, h2, h3, h4, h5 {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 3.5rem;
        }

        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        p {
            margin-bottom: 1.5rem;
            color: var(--gray);
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(26, 58, 95, 0.2);
        }

        .btn-secondary {
            background: var(--secondary);
            color: var(--dark);
        }

        .btn-secondary:hover {
            background: var(--secondary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(233, 185, 73, 0.3);
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        header.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .nav-menu a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: var(--transition);
        }

        .nav-menu a:hover:after {
            width: 100%;
        }

        .nav-cta {
            display: flex;
            align-items: center;
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
        }

        /* Video Hero Section */
        .video-hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(1, 156, 60, 0.7);
            z-index: -1;
        }

        .video-hero-content {
            max-width: 800px;
            padding: 0 20px;
        }

        .video-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .video-hero p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 80px 0;
            background: white;
        }

        .portfolio-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }

        .filter-btn {
            padding: 10px 25px;
            background: white;
            border: 2px solid var(--primary);
            border-radius: 50px;
            color: var(--primary);
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary);
            color: white;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .portfolio-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            position: relative;
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .portfolio-image {
            position: relative;
            overflow: hidden;
            height: 220px;
        }

        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-card:hover .portfolio-image img {
            transform: scale(1.05);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(9, 170, 57, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }

        .portfolio-card:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-links {
            display: flex;
            gap: 15px;
        }

        .portfolio-link {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            transition: var(--transition);
        }

        .portfolio-link:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-5px);
        }

        .portfolio-content {
            padding: 25px;
        }

        .portfolio-category {
            display: inline-block;
            background: var(--secondary);
            color: var(--dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .portfolio-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .portfolio-description {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .portfolio-client {
            display: flex;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(0,0,0,0.05);
        }

        .client-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: 700;
            color: var(--primary);
            font-size: 0.9rem;
        }

        .client-info h5 {
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .client-info p {
            margin-bottom: 0;
            font-size: 0.85rem;
            color: var(--gray);
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .stats-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            opacity: 0.1;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary);
            display: block;
        }

        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            background: var(--light);
            padding: 80px 0;
            text-align: center;
            color: var(--dark);
            position: relative;
            overflow: hidden;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta-section h2 {
            color: var(--dark);
            margin-bottom: 1.5rem;
        }

        .cta-section p {
            color: var(--gray);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .cta-btn {
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .cta-btn-primary {
            background: var(--primary);
            color: white;
        }

        .cta-btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(26, 58, 95, 0.2);
        }

        .cta-btn-secondary {
            background: var(--secondary);
            color: var(--dark);
        }

        .cta-btn-secondary:hover {
            background: var(--secondary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(233, 185, 73, 0.3);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-logo span {
            color: var(--secondary);
        }

        .footer-about p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-3px);
        }

        .footer-heading {
            font-size: 1.2rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-heading:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-contact i {
            margin-right: 10px;
            color: var(--secondary);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 5s ease-in-out infinite;
        }

        /* Pulse Animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .pulse {
            animation: pulse 3s ease-in-out infinite;
        }

        /* Bounce Animation */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .bounce {
            animation: bounce 2s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .portfolio-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 992px) {
            h1 {
                font-size: 2.8rem;
            }
            
            h2 {
                font-size: 2.2rem;
            }
            
            .video-hero h1 {
                font-size: 3rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                align-items: center;
                padding: 30px 0;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                transition: var(--transition);
            }
            
            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            .nav-menu li {
                margin: 15px 0;
            }
            
            .video-hero h1 {
                font-size: 2.5rem;
            }
            
            .video-hero p {
                font-size: 1.1rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-btn {
                width: 100%;
                max-width: 250px;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 2.2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            section {
                padding: 60px 0;
            }
            
            .video-hero {
                height: 60vh;
                min-height: 400px;
            }
            
            .video-hero h1 {
                font-size: 2.2rem;
            }
            
            .portfolio-filters {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 100%;
                max-width: 250px;
                text-align: center;
            }

            .stat-number {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
 <?php include 'includes/header.php'; ?>
    </header>

    <!-- Video Hero Section -->
    <section class="video-hero">
        <video class="video-background" autoplay muted loop>
            <source src="https://videos.pexels.com/video-files/2314024/2314024-uhd_2560_1440_24fps.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
        <div class="container">
            <div class="video-hero-content" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-4">Notre Portfolio</h1>
                <p class="lead mb-4">Découvrez nos réalisations et les entreprises qui nous font confiance</p>
                <a href="#portfolio" class="btn btn-primary btn-lg pulse">
                    Voir Nos Réalisations <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos Réalisations</h2>
                    <p class="section-subtitle">Découvrez une sélection de nos projets et partenaires</p>
                </div>
            </div>
            
            <div class="portfolio-filters" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="web">Sites Web</button>
                <button class="filter-btn" data-filter="consulting">Consulting</button>
                <button class="filter-btn" data-filter="accompagnement">Accompagnement</button>
                <button class="filter-btn" data-filter="lancement">Lancement Startups</button>
            </div>
            
            <div class="portfolio-grid">
                <!-- Sites Web -->
                <div class="portfolio-card" data-category="web" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Eterpe">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="https://eterpe.com" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Site Web</span>
                        <h3 class="portfolio-title">Eterpe</h3>
                        <p class="portfolio-description">
                            Plateforme musicale innovante permettant aux artistes de partager leurs créations et aux fans de découvrir de nouveaux talents. Design moderne et interface utilisateur intuitive.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">E</div>
                            <div class="client-info">
                                <h5>Eterpe</h5>
                                <p>Plateforme musicale</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="web" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Lang Bridge">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="https://lang-bridge.com" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Site Web</span>
                        <h3 class="portfolio-title">Lang Bridge</h3>
                        <p class="portfolio-description">
                            Plateforme d'apprentissage des langues connectant étudiants et tuteurs natifs. Fonctionnalités avancées de chat vidéo, suivi de progression et ressources pédagogiques.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">LB</div>
                            <div class="client-info">
                                <h5>Lang Bridge</h5>
                                <p>Plateforme linguistique</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="web" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Univers FC">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="https://univers-fc.com" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Site Web</span>
                        <h3 class="portfolio-title">Univers FC</h3>
                        <p class="portfolio-description">
                            Site officiel du club de football Univers FC avec actualités en temps réel, billetterie en ligne, boutique officielle et statistiques détaillées des joueurs.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">UFC</div>
                            <div class="client-info">
                                <h5>Univers FC</h5>
                                <p>Club de football</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="web" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Inproov Consulting">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="https://inproovconsulting.com" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Site Web</span>
                        <h3 class="portfolio-title">Inproov Consulting</h3>
                        <p class="portfolio-description">
                            Site corporate élégant pour un cabinet de conseil en management et transformation digitale. Présentation des services, équipe et études de cas.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">IC</div>
                            <div class="client-info">
                                <h5>Inproov Consulting</h5>
                                <p>Cabinet de conseil</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="web" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="HLNP Training">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="https://hlnptraining.com" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Site Web</span>
                        <h3 class="portfolio-title">HLNP Training</h3>
                        <p class="portfolio-description">
                            Plateforme de formation professionnelle avec catalogue de cours, inscriptions en ligne, suivi pédagogique et certification digitale.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">HLNP</div>
                            <div class="client-info">
                                <h5>HLNP Training</h5>
                                <p>Centre de formation</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="web" data-aos="fade-up" data-aos-delay="600">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tunannu">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="https://tunannu.com" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Site Web</span>
                        <h3 class="portfolio-title">Tunannu</h3>
                        <p class="portfolio-description">
                            Annuaire professionnel des entreprises tunisiennes avec moteur de recherche avancé, fiches détaillées et système de notation et d'avis.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">TA</div>
                            <div class="client-info">
                                <h5>Tunannu</h5>
                                <p>Annuaire d'entreprises</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Consulting -->
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pierre et Fils Construction">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Pierre et Fils Construction</h3>
                        <p class="portfolio-description">
                            Accompagnement stratégique pour le développement commercial et la digitalisation des processus dans le secteur de la construction au Cameroun.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">P&F</div>
                            <div class="client-info">
                                <h5>Pierre et Fils Construction</h5>
                                <p>BTP - Cameroun</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dalia Elec">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Dalia Elec</h3>
                        <p class="portfolio-description">
                            Conseil en stratégie digitale et transformation des processus pour un distributeur d'équipements électriques en Côte d'Ivoire.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">DE</div>
                            <div class="client-info">
                                <h5>Dalia Elec</h5>
                                <p>Équipements électriques - Côte d'Ivoire</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Loisir et Amitié Hotel">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Loisir et Amitié Hotel</h3>
                        <p class="portfolio-description">
                            Stratégie de marketing digital et optimisation de l'expérience client pour un établissement hôtelier de renom au Mali.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">L&A</div>
                            <div class="client-info">
                                <h5>Loisir et Amitié Hotel</h5>
                                <p>Hôtellerie - Mali</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Wejden Deco">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Wejden Deco</h3>
                        <p class="portfolio-description">
                            Accompagnement à la digitalisation et stratégie e-commerce pour une entreprise spécialisée dans la décoration d'intérieur à Tunis.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">WD</div>
                            <div class="client-info">
                                <h5>Wejden Deco</h5>
                                <p>Décoration - Tunis</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Centre de Formation L'Avenir">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Centre de Formation L'Avenir</h3>
                        <p class="portfolio-description">
                            Conseil en développement stratégique et digitalisation des programmes de formation pour un centre éducatif à Manouba.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">CFA</div>
                            <div class="client-info">
                                <h5>Centre de Formation L'Avenir</h5>
                                <p>Éducation - Manouba</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="600">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Crèche Les Élites">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Crèche Les Élites</h3>
                        <p class="portfolio-description">
                            Stratégie de communication et développement de la notoriété pour une crèche d'excellence située au Bardo.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">CLE</div>
                            <div class="client-info">
                                <h5>Crèche Les Élites</h5>
                                <p>Petite enfance - Bardo</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-card" data-category="consulting" data-aos="fade-up" data-aos-delay="700">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Quincaillerie Ben Ameur">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Consulting</span>
                        <h3 class="portfolio-title">Quincaillerie Ben Ameur</h3>
                        <p class="portfolio-description">
                            Transformation digitale et optimisation des processus pour une quincaillerie établie de longue date à La Marsa.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">QBA</div>
                            <div class="client-info">
                                <h5>Quincaillerie Ben Ameur</h5>
                                <p>Quincaillerie - La Marsa</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Accompagnement -->
                <div class="portfolio-card" data-category="accompagnement" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Accompagnement Stratégique">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Accompagnement</span>
                        <h3 class="portfolio-title">Programme d'Accompagnement PME</h3>
                        <p class="portfolio-description">
                            Accompagnement complet de PME tunisiennes dans leur transformation digitale, incluant stratégie, formation et mise en œuvre.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">PME</div>
                            <div class="client-info">
                                <h5>Diverses PME Tunisiennes</h5>
                                <p>Multiples secteurs</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Lancement Startups -->
                <div class="portfolio-card" data-category="lancement" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Lancement Startups">
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="#" class="portfolio-link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Lancement Startups</span>
                        <h3 class="portfolio-title">Incubation Startups Innovantes</h3>
                        <p class="portfolio-description">
                            Programme d'incubation et d'accélération pour startups tunisiennes, du concept au lancement sur le marché.
                        </p>
                        <div class="portfolio-client">
                            <div class="client-logo">SI</div>
                            <div class="client-info">
                                <h5>Startups Innovantes</h5>
                                <p>Technologie & Innovation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="45">0</span>
                        <div class="stat-text">Projets Réalisés</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="32">0</span>
                        <div class="stat-text">Clients Satisfaits</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="12">0</span>
                        <div class="stat-text">Pays Desservis</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="98">0</span>
                        <div class="stat-text">Taux de Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Prêt à rejoindre notre portfolio de succès ?</h2>
                <p>Rejoignez les entreprises qui nous font confiance pour leur transformation digitale et leur croissance. Discutons de votre projet et créons ensemble une stratégie sur mesure.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="cta-btn cta-btn-primary">Démarrer un projet</a>
                    <a href="rdv.php" class="cta-btn cta-btn-secondary">Réserver une consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <a href="index.php" class="footer-logo">Tuna<span>FF</span>aires</a>
                    <p>TunaFFaires est un écosystème dynamique où innovation, accompagnement et digitalisation se rencontrent pour créer des opportunités réelles pour les entreprises tunisiennes.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4 class="footer-heading">Liens Rapides</h4>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">À Propos</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4 class="footer-heading">Nos Services</h4>
                    <ul>
                        <li><a href="services.php#web">Sites Web</a></li>
                        <li><a href="services.php#communication">Communication Digitale</a></li>
                        <li><a href="services.php#consulting">Consulting</a></li>
                        <li><a href="services.php#formation">Formation</a></li>
                        <li><a href="services.php#accompagnement">Accompagnement</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h4 class="footer-heading">Contact</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Tunis, Tunisia</p>
                    <p><i class="fas fa-phone"></i> +216 12 345 678</p>
                    <p><i class="fas fa-envelope"></i> contact@tunaffaires.tn</p>
                    <p><i class="fas fa-clock"></i> Lun - Ven: 9:00 - 18:00</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 TunaFFaires. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobileToggle');
            const navMenu = document.getElementById('navMenu');
            
            if (mobileToggle) {
                mobileToggle.addEventListener('click', () => {
                    navMenu.classList.toggle('active');
                    mobileToggle.innerHTML = navMenu.classList.contains('active') 
                        ? '<i class="fas fa-times"></i>' 
                        : '<i class="fas fa-bars"></i>';
                });
            }

            // Header scroll effect
            window.addEventListener('scroll', () => {
                const header = document.getElementById('header');
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Portfolio Filtering - CODE CORRIGÉ ET FONCTIONNEL
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioCards = document.querySelectorAll('.portfolio-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    portfolioCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');
                        
                        if (filterValue === 'all' || cardCategory === filterValue) {
                            card.style.display = 'block';
                            // Add a small delay for animation
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Animated counter for stats
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;

            const animateCounter = () => {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(animateCounter, 1);
                    } else {
                        counter.innerText = target;
                    }
                });
            };

            // Start counter when stats section is in view
            const statsSection = document.querySelector('.stats-section');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            if (statsSection) {
                observer.observe(statsSection);
            }

            // Add floating animation to random elements
            document.querySelectorAll('.portfolio-card').forEach((card, index) => {
                if (index % 3 === 0) {
                    card.classList.add('floating');
                } else if (index % 4 === 0) {
                    card.classList.add('pulse');
                }
            });
        });
    </script>
</body>
</html>