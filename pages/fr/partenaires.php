<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Partenaires - TunaFFaires</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS CSS -->
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        /* Video Hero Section */
        .video-hero {
            position: relative;
            height: 60vh;
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

        /* Partners Intro */
        .partners-intro {
            padding: 80px 0;
            background: var(--light);
        }

        .intro-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        /* Partners Categories */
        .partners-categories {
            padding: 60px 0;
            background: white;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 3rem;
        }

        .category-card {
            background: white;
            padding: 2.5rem 1.5rem;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            color: white;
            z-index: 1;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .category-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(9, 170, 57, 0.85);
            z-index: -1;
            transition: var(--transition);
        }

        .category-card:hover:before {
            background: rgba(233, 185, 73, 0.9);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: white;
            transition: var(--transition);
        }

        .category-card:hover .category-icon {
            transform: scale(1.1);
            background: var(--primary);
        }

        .category-count {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            display: block;
            margin-top: 0.5rem;
        }

        /* Country Sections */
        .country-section {
            padding: 60px 0;
        }

        .country-section:nth-child(even) {
            background: var(--light);
        }

        .country-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .country-flag {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Partners Grid - 4 par ligne pour la Tunisie */
        .partners-grid-tunisia {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 2rem;
        }

        /* Partners Grid - 3 par ligne pour l'international */
        .partners-grid-international {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 2rem;
        }

        .partner-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .partner-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .partner-logo-container {
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: var(--light);
            position: relative;
            overflow: hidden;
        }

        .partner-logo {
            max-width: 100%;
            max-height: 80px;
            object-fit: contain;
            transition: var(--transition);
        }

        .partner-card:hover .partner-logo {
            transform: scale(1.05);
        }

        .partner-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .partner-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .partner-country {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 0.8rem;
            display: inline-block;
            background: rgba(9, 170, 57, 0.1);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
        }

        .partner-short-description {
            color: var(--gray);
            margin-bottom: 1rem;
            flex-grow: 1;
            font-size: 0.9rem;
        }

        .partner-more {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            margin-top: auto;
            font-size: 0.9rem;
        }

        .partner-more:hover {
            color: var(--primary-light);
            transform: translateX(5px);
        }

        /* Modal Styles */
        .modal-partner .modal-content {
            border-radius: 15px;
            border: none;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .modal-partner .modal-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border-bottom: none;
            padding: 1.5rem 2rem;
            position: relative;
        }

        .modal-partner .modal-body {
            padding: 2rem;
        }

        .partner-modal-logo {
            max-width: 200px;
            max-height: 100px;
            object-fit: contain;
            margin: 0 auto 1.5rem;
            display: block;
        }

        .modal-contact-buttons {
            display: flex;
            gap: 1rem;
            margin: 1.5rem 0;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-visit-site {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .btn-visit-site:hover {
            background: var(--primary-light);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(9, 170, 57, 0.3);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            padding: 80px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            opacity: 0.1;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta-section h2 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .cta-section p {
            color: rgba(255, 255, 255, 0.9);
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
            background: var(--secondary);
            color: var(--dark);
        }

        .cta-btn-primary:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
        }

        .cta-btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .cta-btn-secondary:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px);
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

        /* International Partners Section */
        .international-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
        }

        /* Featured Partners */
        .featured-partner {
            border: 2px solid var(--secondary);
            position: relative;
        }

        .featured-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--secondary);
            color: var(--dark);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 700;
            z-index: 10;
        }

        /* New Animations */
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(9, 170, 57, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(9, 170, 57, 0); }
            100% { box-shadow: 0 0 0 0 rgba(9, 170, 57, 0); }
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .partners-grid-tunisia {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .partners-grid-international {
                grid-template-columns: repeat(2, 1fr);
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

            .partners-grid-tunisia {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .partners-grid-international {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .video-hero h1 {
                font-size: 2.5rem;
            }
            
            .video-hero p {
                font-size: 1.1rem;
            }
            
            .partners-grid-tunisia,
            .partners-grid-international {
                grid-template-columns: 1fr;
            }
            
            .categories-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-btn {
                width: 100%;
                max-width: 250px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
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
                height: 50vh;
                min-height: 400px;
            }
            
            .video-hero h1 {
                font-size: 2.2rem;
            }
            
            .categories-grid {
                grid-template-columns: 1fr;
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
                <h1 class="display-4 fw-bold mb-4">Réseau International de Partenaires</h1>
                <p class="lead mb-4">Internationalisation, mondialisation et digitalisation au service de votre croissance</p>
                <a href="#partners" class="btn btn-primary btn-lg pulse-animation">
                    Découvrir nos Partenaires <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Partners Intro -->
    <section class="partners-intro">
        <div class="container">
            <div class="intro-content" data-aos="fade-up">
                <h2>Stratégie de Partenariats Internationaux</h2>
                <p>Dans un contexte de <strong>mondialisation</strong> et de <strong>transformation digitale</strong>, TunaFFaires a développé un réseau stratégique de partenaires internationaux pour accompagner l'<strong>internationalisation</strong> des entreprises. Notre approche repose sur la création de synergies entre l'écosystème tunisien et les marchés africains et européens.</p>
                <p>Grâce à notre expertise en <strong>digitalisation</strong> et notre connaissance des marchés émergents, nous facilitons l'expansion internationale, l'optimisation des chaînes de valeur et l'adoption des technologies innovantes. Nos partenariats couvrent divers secteurs clés pour le développement économique et l'innovation.</p>
            </div>
        </div>
    </section>

    <!-- Partners Categories -->
    <section class="partners-categories">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Domaines de Collaboration</h2>
                <p class="section-subtitle">Notre réseau couvre tous les secteurs stratégiques pour le développement international</p>
            </div>

            <div class="categories-grid">
                <div class="category-card" data-aos="fade-up" data-aos-delay="100" style="background-image: url('https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="category-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h4>Export & International</h4>
                    <p>Partenaires pour l'expansion internationale</p>
                    <span class="category-count">18</span>
                </div>

                <div class="category-card" data-aos="fade-up" data-aos-delay="200" style="background-image: url('https://images.pexels.com/photos/3861972/pexels-photo-3861972.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="category-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4>Digital & Innovation</h4>
                    <p>Experts en transformation digitale</p>
                    <span class="category-count">15</span>
                </div>

                <div class="category-card" data-aos="fade-up" data-aos-delay="300" style="background-image: url('https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="category-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Institutions & ONG</h4>
                    <p>Organisations publiques et associatives</p>
                    <span class="category-count">12</span>
                </div>

                <div class="category-card" data-aos="fade-up" data-aos-delay="400" style="background-image: url('https://images.pexels.com/photos/256219/pexels-photo-256219.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="category-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h4>Industrie & Production</h4>
                    <p>Partenaires industriels et manufacturiers</p>
                    <span class="category-count">10</span>
                </div>

                <!-- Nouveaux domaines de collaboration -->
                <div class="category-card" data-aos="fade-up" data-aos-delay="500" style="background-image: url('https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Formation & Éducation</h4>
                    <p>Institutions académiques et centres de formation</p>
                    <span class="category-count">8</span>
                </div>

                <div class="category-card" data-aos="fade-up" data-aos-delay="600" style="background-image: url('https://images.pexels.com/photos/3845810/pexels-photo-3845810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h4>Santé & Bien-être</h4>
                    <p>Partenaires dans le secteur médical et wellness</p>
                    <span class="category-count">6</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners by Country -->
    <section class="partners-section" id="partners">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Partenaires en Tunisie</h2>
                <p class="section-subtitle">Notre réseau local d'organisations partageant notre vision de l'innovation et du développement</p>
            </div>

            <!-- Tunisie - 4 partenaires par ligne -->
            <div class="country-section">
                <div class="partners-grid-tunisia">
                    <!-- Delice -->
                    <div class="partner-card" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Delice Holding" 
                         data-country="Tunisie" 
                         data-logo="https://upload.wikimedia.org/wikipedia/fr/thumb/5/5c/Logo_D%C3%A9lice_Holding.png/800px-Logo_D%C3%A9lice_Holding.png"
                         data-description="Delice Holding est le leader tunisien de l'industrie agroalimentaire, spécialisé dans les produits laitiers, les jus de fruits et les produits alimentaires. Avec plus de 30 ans d'expérience, le groupe exporte ses produits vers plus de 40 pays et emploie plus de 4 000 collaborateurs. Delice représente l'excellence de l'industrie tunisienne à l'international."
                         data-website="https://www.delice.tn">
                        <div class="partner-logo-container">
                            <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/5/5c/Logo_D%C3%A9lice_Holding.png/800px-Logo_D%C3%A9lice_Holding.png" alt="Delice Holding" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=DELICE'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Delice Holding</h3>
                            <span class="partner-country">Tunisie - Agroalimentaire</span>
                            <p class="partner-short-description">Leader tunisien de l'industrie agroalimentaire et de l'export.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Hannibal Lease -->
                    <div class="partner-card" data-aos="fade-up" data-aos-delay="150" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Hannibal Lease" 
                         data-country="Tunisie" 
                         data-logo="https://www.hanniballease.com.tn/wp-content/uploads/2022/03/logo-hannibal-lease.png"
                         data-description="Hannibal Lease est une société de location de véhicules longue durée leader en Tunisie. Elle propose des solutions de mobilité complètes pour les professionnels et les particuliers, avec un parc diversifié de véhicules et des services sur mesure. Hannibal Lease accompagne ses clients dans l'optimisation de leur budget transport."
                         data-website="https://www.hanniballease.com.tn">
                        <div class="partner-logo-container">
                            <img src="https://www.hanniballease.com.tn/wp-content/uploads/2022/03/logo-hannibal-lease.png" alt="Hannibal Lease" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=HANNIBAL+LEASE'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Hannibal Lease</h3>
                            <span class="partner-country">Tunisie - Location Véhicules</span>
                            <p class="partner-short-description">Société leader en location de véhicules longue durée.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Université Montplaisir Tunis -->
                    <div class="partner-card" data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Université Montplaisir Tunis" 
                         data-country="Tunisie" 
                         data-logo="https://universite-montplaisir.tn/wp-content/uploads/2023/02/logo-UMT-2023.png"
                         data-description="L'Université Montplaisir Tunis est un établissement d'enseignement supérieur privé reconnu par l'État tunisien. Elle propose des formations diplômantes dans divers domaines : informatique, gestion, commerce, design et langues. L'UMT se distingue par sa pédagogie innovante et son accompagnement personnalisé des étudiants."
                         data-website="https://universite-montplaisir.tn">
                        <div class="partner-logo-container">
                            <img src="https://universite-montplaisir.tn/wp-content/uploads/2023/02/logo-UMT-2023.png" alt="Université Montplaisir Tunis" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=UMT'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Université Montplaisir Tunis</h3>
                            <span class="partner-country">Tunisie - Enseignement Supérieur</span>
                            <p class="partner-short-description">Établissement d'enseignement supérieur privé reconnu.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Univers FC -->
                    <div class="partner-card featured-partner" data-aos="fade-up" data-aos-delay="250" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Univers FC" 
                         data-country="Tunisie" 
                         data-logo="https://univers-fc.com/assets/images/logo-univers-fc.png"
                         data-description="Univers FC est une plateforme innovante dédiée au football connecté, utilisant la technologie pour révolutionner l'expérience des fans. Elle combine data, intelligence artificielle et contenu exclusif pour offrir une expérience immersive aux passionnés de football. Avec des fonctionnalités innovantes comme les statistiques en temps réel, les analyses tactiques et les communautés de fans, Univers FC redéfinit la manière dont les supporters interagissent avec leur sport favori."
                         data-website="https://univers-fc.com">
                        <div class="featured-badge">Partenaire Clé</div>
                        <div class="partner-logo-container">
                            <img src="https://univers-fc.com/assets/images/logo-univers-fc.png" alt="Univers FC" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=UNIVERS+FC'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Univers FC</h3>
                            <span class="partner-country">Tunisie - Sport Digital</span>
                            <p class="partner-short-description">Plateforme innovante de football connecté et d'expériences digitales immersives.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Inproov Consulting -->
                    <div class="partner-card featured-partner" data-aos="fade-up" data-aos-delay="300" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Inproov Consulting" 
                         data-country="Tunisie" 
                         data-logo="https://inproovconsulting.com/images/logo.png"
                         data-description="Cabinet de conseil spécialisé dans l'innovation, la transformation digitale et l'amélioration des performances organisationnelles. Inproov Consulting accompagne les entreprises dans leur mutation digitale avec des méthodologies agiles et une expertise sectorielle approfondie. Leurs consultants expérimentés aident les organisations à optimiser leurs processus, adopter les nouvelles technologies et développer des stratégies d'innovation durable."
                         data-website="https://inproovconsulting.com">
                        <div class="featured-badge">Partenaire Clé</div>
                        <div class="partner-logo-container">
                            <img src="https://inproovconsulting.com/images/logo.png" alt="Inproov Consulting" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=INPROOV'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Inproov Consulting</h3>
                            <span class="partner-country">Tunisie - Conseil Innovation</span>
                            <p class="partner-short-description">Cabinet de conseil en innovation et transformation digitale.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Eterpe -->
                    <div class="partner-card featured-partner" data-aos="fade-up" data-aos-delay="350" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Eterpe" 
                         data-country="Tunisie" 
                         data-logo="https://eterpe.com/images/logo.png"
                         data-description="Plateforme de streaming musical légale qui révolutionne l'industrie musicale en rémunérant équitablement les artistes. Eterpe propose un catalogue riche de millions de titres et des contenus exclusifs tout en garantissant une rémunération juste des créateurs. Avec une interface intuitive et des algorithmes de recommandation performants, Eterpe offre une expérience d'écoute personnalisée tout en soutenant l'écosystème musical."
                         data-website="https://eterpe.com">
                        <div class="featured-badge">Partenaire Clé</div>
                        <div class="partner-logo-container">
                            <img src="https://eterpe.com/images/logo.png" alt="Eterpe" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=ETERPE'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Eterpe</h3>
                            <span class="partner-country">Tunisie - Streaming Musical</span>
                            <p class="partner-short-description">Plateforme de streaming musical légale qui rémunère équitablement les artistes.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Study Link Hub -->
                    <div class="partner-card featured-partner" data-aos="fade-up" data-aos-delay="400" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Study Link Hub" 
                         data-country="Tunisie" 
                         data-logo="https://study-link-hub.com/images/logo.png"
                         data-description="Plateforme éducative innovante qui connecte les étudiants avec des opportunités de formation et de mobilité internationale. Study Link Hub facilite l'accès à l'éducation supérieure à l'étranger grâce à un réseau étendu d'universités partenaires et des services d'accompagnement personnalisés. La plateforme offre également des ressources pédagogiques, des outils d'orientation et un accompagnement complet pour les démarches administratives des étudiants internationaux."
                         data-website="https://study-link-hub.com">
                        <div class="featured-badge">Partenaire Clé</div>
                        <div class="partner-logo-container">
                            <img src="https://study-link-hub.com/images/logo.png" alt="Study Link Hub" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=STUDY+LINK'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Study Link Hub</h3>
                            <span class="partner-country">Tunisie - Éducation Internationale</span>
                            <p class="partner-short-description">Plateforme connectant étudiants et opportunités de formation internationale.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lang Bridge -->
                    <div class="partner-card featured-partner" data-aos="fade-up" data-aos-delay="450" data-bs-toggle="modal" data-bs-target="#partnerModal"
                         data-name="Lang Bridge" 
                         data-country="Tunisie" 
                         data-logo="https://lang-bridge.com/images/logo.png"
                         data-description="Centre de formation linguistique en ligne spécialisé dans l'enseignement des langues vivantes avec des professeurs natifs. Lang Bridge propose des cours personnalisés de français, anglais, espagnol, allemand et arabe pour les particuliers et les entreprises. Leur méthode innovante combine cours en visioconférence, plateforme d'apprentissage interactive et immersion culturelle pour garantir des résultats rapides et durables."
                         data-website="https://lang-bridge.com">
                        <div class="featured-badge">Partenaire Clé</div>
                        <div class="partner-logo-container">
                            <img src="https://lang-bridge.com/images/logo.png" alt="Lang Bridge" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=LANG+BRIDGE'">
                        </div>
                        <div class="partner-info">
                            <h3 class="partner-name">Lang Bridge</h3>
                            <span class="partner-country">Tunisie - Formation Linguistique</span>
                            <p class="partner-short-description">Centre de formation linguistique en ligne avec professeurs natifs.</p>
                            <a class="partner-more">
                                En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- International Partners Section -->
    <section class="international-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Partenaires Internationaux</h2>
                <p class="section-subtitle">Notre réseau mondial pour une expansion internationale réussie</p>
            </div>

            <div class="partners-grid-international">
                <!-- Aléph Consult (Angleterre) -->
                <div class="partner-card" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#partnerModal"
                     data-name="Aléph Consult" 
                     data-country="Angleterre" 
                     data-logo="https://alephconsult.com/images/logo.png"
                     data-description="Aléph Consult est un cabinet de conseil en stratégie basé à Londres, spécialisé dans l'accompagnement des entreprises dans leur développement international et leur transformation digitale. Avec une équipe multiculturelle et une expertise sectorielle approfondie, Aléph Consult aide les organisations à naviguer les complexités des marchés internationaux et à optimiser leurs opérations à l'échelle mondiale."
                     data-website="https://alephconsult.com">
                    <div class="partner-logo-container">
                        <img src="https://alephconsult.com/images/logo.png" alt="Aléph Consult" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=ALÉPH+CONSULT'">
                    </div>
                    <div class="partner-info">
                        <h3 class="partner-name">Aléph Consult</h3>
                        <span class="partner-country">Angleterre - Conseil Stratégique</span>
                        <p class="partner-short-description">Cabinet de conseil en stratégie internationale basé à Londres.</p>
                        <a class="partner-more">
                            En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- AÉSIO Mutuelle (France) -->
                <div class="partner-card" data-aos="fade-up" data-aos-delay="150" data-bs-toggle="modal" data-bs-target="#partnerModal"
                     data-name="AÉSIO Mutuelle" 
                     data-country="France" 
                     data-logo="https://www.aesio.fr/static/media/logo-aesio-mutuelle.8f2c0b92.svg"
                     data-description="AÉSIO Mutuelle est l'une des principales mutuelles santé en France, offrant une protection sociale complète pour les particuliers et les entreprises. Née de la fusion de plusieurs mutuelles historiques, AÉSIO propose des solutions innovantes en matière de santé, prévoyance et épargne, avec un engagement fort en faveur de l'accessibilité aux soins pour tous."
                     data-website="https://www.aesio.fr">
                    <div class="partner-logo-container">
                        <img src="https://www.aesio.fr/static/media/logo-aesio-mutuelle.8f2c0b92.svg" alt="AÉSIO Mutuelle" class="partner-logo" onerror="this.src='https://via.placeholder.com/200x80?text=AÉSIO+MUTUELLE'">
                    </div>
                    <div class="partner-info">
                        <h3 class="partner-name">AÉSIO Mutuelle</h3>
                        <span class="partner-country">France - Mutuelle Santé</span>
                        <p class="partner-short-description">L'une des principales mutuelles santé en France.</p>
                        <a class="partner-more">
                            En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- ANBG Gabon -->
                <div class="partner-card" data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#partnerModal"
                     data-name="ANBG Gabon" 
                     data-country="Gabon" 
                     data-logo="https://www.anbg.ga/images/logo-anbg.png"
                     data-description="L'Agence Nationale des Bourses du Gabon est un établissement public chargé de la gestion des bourses d'études et de la mobilité académique des étudiants gabonais. L'ANBG joue un rôle essentiel dans la formation des cadres gabonais à l'international et soutient la politique éducative du gouvernement gabonais en facilitant l'accès à l'enseignement supérieur de qualité à l'étranger."
                     data-website="https://www.anbg.ga">
                    <div class="partner-logo-container">
                        <img src="https://via.placeholder.com/200x80?text=ANBG+GABON" alt="ANBG Gabon" class="partner-logo">
                    </div>
                    <div class="partner-info">
                        <h3 class="partner-name">ANBG Gabon</h3>
                        <span class="partner-country">Gabon - Éducation</span>
                        <p class="partner-short-description">Agence Nationale des Bourses du Gabon.</p>
                        <a class="partner-more">
                            En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Mahima Supermarket (Cameroun) -->
                <div class="partner-card" data-aos="fade-up" data-aos-delay="250" data-bs-toggle="modal" data-bs-target="#partnerModal"
                     data-name="Mahima Supermarket" 
                     data-country="Cameroun" 
                     data-logo="https://www.mahimasupermarket.cm/images/logo.png"
                     data-description="Chaîne de supermarchés leader au Cameroun, Mahima Supermarket propose une large gamme de produits alimentaires et de grande consommation. Avec plusieurs implantations dans les principales villes camerounaises, Mahima est un acteur majeur de la distribution moderne. L'enseigne se distingue par la qualité de ses produits, son service client et son engagement en faveur des producteurs locaux."
                     data-website="https://www.mahimasupermarket.cm">
                    <div class="partner-logo-container">
                        <img src="https://via.placeholder.com/200x80?text=MAHIMA+MARKET" alt="Mahima Supermarket" class="partner-logo">
                    </div>
                    <div class="partner-info">
                        <h3 class="partner-name">Mahima Supermarket</h3>
                        <span class="partner-country">Cameroun - Grande Distribution</span>
                        <p class="partner-short-description">Chaîne de supermarchés leader au Cameroun.</p>
                        <a class="partner-more">
                            En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Modal -->
    <div class="modal fade modal-partner" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="partnerModalLabel">Détails du Partenaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" alt="" class="partner-modal-logo" id="modalPartnerLogo">
                    <h3 class="modal-title" id="modalPartnerName"></h3>
                    <p class="text-primary fw-bold mb-3" id="modalPartnerCountry"></p>
                    <p class="text-muted mb-4" id="modalPartnerDescription"></p>
                    
                    <div class="modal-contact-buttons">
                        <a href="#" class="btn-visit-site" id="modalPartnerWebsite" target="_blank">
                            <i class="fas fa-external-link-alt"></i> Visiter le site officiel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Rejoignez Notre Réseau International</h2>
                <p>Bénéficiez de synergies uniques pour développer vos activités à l'international et accéder à de nouveaux marchés grâce à notre réseau de partenaires stratégiques.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="cta-btn cta-btn-primary">Devenir Partenaire</a>
                    <a href="services.php" class="cta-btn cta-btn-secondary">Découvrir nos Services</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Gestion de la modal de partenaire
        function setupPartnerModal() {
            const partnerModal = document.getElementById('partnerModal');
            partnerModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                
                // Récupérer les données
                const name = button.getAttribute('data-name');
                const country = button.getAttribute('data-country');
                const logo = button.getAttribute('data-logo');
                const description = button.getAttribute('data-description');
                const website = button.getAttribute('data-website');

                // Mettre à jour le contenu de la modal
                document.getElementById('modalPartnerName').textContent = name;
                document.getElementById('modalPartnerCountry').textContent = country;
                document.getElementById('modalPartnerDescription').textContent = description;
                document.getElementById('modalPartnerLogo').src = logo;
                document.getElementById('modalPartnerWebsite').href = website;
            });
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            setupPartnerModal();
        });
    </script>
</body>
</html>