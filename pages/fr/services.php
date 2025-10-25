<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - TunaFFaires</title>
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

        /* Services Section */
        .services-section {
            padding: 80px 0;
            background: white;
        }

        .service-card {
            background: white;
            padding: 30px 25px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .service-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: var(--dark);
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--primary);
            color: white;
        }

        .service-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .service-description {
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .service-features {
            text-align: left;
            margin-bottom: 20px;
        }

        .service-features ul {
            list-style: none;
            padding-left: 0;
        }

        .service-features li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
            font-size: 0.9rem;
        }

        .service-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        /* Solutions Section */
        .solutions-section {
            background: var(--light);
            padding: 80px 0;
        }

        .solution-card {
            background: white;
            padding: 30px 25px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .solution-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--secondary);
        }

        .solution-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .solution-icon {
            width: 70px;
            height: 70px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: white;
            transition: var(--transition);
        }

        .solution-card:hover .solution-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--secondary);
            color: var(--dark);
        }

        .solution-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .solution-description {
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .coming-soon {
            background: var(--secondary);
            color: var(--dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
        }

        /* Pricing Section */
        .pricing-section {
            padding: 80px 0;
            background: white;
        }

        .pricing-table {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            margin-bottom: 40px;
        }

        .pricing-header {
            background: var(--primary);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .pricing-category {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .pricing-description {
            opacity: 0.9;
            font-size: 1rem;
        }

        .pricing-body {
            padding: 0;
        }

        .pricing-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .pricing-table th, .pricing-table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .pricing-table th {
            background: var(--light);
            font-weight: 600;
            color: var(--dark);
        }

        .pricing-table tr:last-child td {
            border-bottom: none;
        }

        .pricing-table tr:hover {
            background: rgba(9, 170, 57, 0.05);
        }

        .price-cell {
            font-weight: 700;
            color: var(--primary);
            text-align: center;
        }

        .price-range {
            font-size: 0.9rem;
            color: var(--gray);
            margin-top: 5px;
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

        /* Modal Styles */
        .modal-header {
            background: var(--primary);
            color: white;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-service-icon {
            width: 60px;
            height: 60px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.5rem;
            color: var(--dark);
        }

        .modal-solution-icon {
            width: 60px;
            height: 60px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.5rem;
            color: white;
        }

        .service-details, .solution-details {
            margin-top: 20px;
        }

        .service-details h5, .solution-details h5 {
            color: var(--primary);
            margin-bottom: 15px;
        }

        .service-details ul, .solution-details ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .service-details li, .solution-details li {
            margin-bottom: 10px;
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
            .expertise-grid {
                grid-template-columns: repeat(3, 1fr);
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

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-btn {
                width: 100%;
                max-width: 250px;
            }

            .pricing-table {
                overflow-x: auto;
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
            
            .service-card, .solution-card {
                padding: 25px 20px;
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
                <h1 class="display-4 fw-bold mb-4">Nos Services & Solutions</h1>
                <p class="lead mb-4">Des prestations digitales complètes pour propulser votre entreprise</p>
                <a href="#services" class="btn btn-primary btn-lg pulse">
                    Découvrir Nos Services <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos Services</h2>
                    <p class="section-subtitle">Des prestations sur mesure pour répondre à tous vos besoins digitaux</p>
                </div>
            </div>
            
            <div class="row">
                <!-- Communication & Marketing Digital -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card floating">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h4 class="service-title">Communication & Marketing Digital</h4>
                        <p class="service-description">
                            Nous aidons les entreprises à construire une présence digitale forte et cohérente.
                        </p>
                        <div class="service-features">
                            <ul>
                                <li>Gestion complète des réseaux sociaux</li>
                                <li>Création de contenus engageants</li>
                                <li>Campagnes publicitaires ciblées</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal1">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Relations Presse & Visibilité -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card floating">
                        <div class="service-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h4 class="service-title">Relations Presse & Visibilité</h4>
                        <p class="service-description">
                            Offrez à votre entreprise une visibilité médiatique à fort impact.
                        </p>
                        <div class="service-features">
                            <ul>
                                <li>Publication d'articles sponsorisés</li>
                                <li>Interviews et reportages vidéo</li>
                                <li>Couverture médiatique d'événements</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal2">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Événementiel & Partenariats -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card floating">
                        <div class="service-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h4 class="service-title">Événementiel & Partenariats</h4>
                        <p class="service-description">
                            Organisation et promotion d'événements professionnels et économiques.
                        </p>
                        <div class="service-features">
                            <ul>
                                <li>Organisation de conférences et forums</li>
                                <li>Campagnes de communication événementielle</li>
                                <li>Mise en relation avec partenaires</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal3">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Formation & Orientation -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card floating">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="service-title">Formation & Orientation</h4>
                        <p class="service-description">
                            Promotion des formations et accompagnement des étudiants.
                        </p>
                        <div class="service-features">
                            <ul>
                                <li>Campagnes digitales pour universités</li>
                                <li>Création de contenus éducatifs</li>
                                <li>Conseils d'orientation personnalisés</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal4">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Accompagnement au Lancement -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card floating">
                        <div class="service-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4 class="service-title">Accompagnement au Lancement</h4>
                        <p class="service-description">
                            Support complet pour les créateurs d'entreprises et porteurs de projets.
                        </p>
                        <div class="service-features">
                            <ul>
                                <li>Étude de marché et plan de communication</li>
                                <li>Création d'identité visuelle</li>
                                <li>Mise en relation avec partenaires</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal5">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Consulting -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card floating">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="service-title">Consulting Stratégique</h4>
                        <p class="service-description">
                            Accompagnement expert pour la transformation et la croissance de votre entreprise.
                        </p>
                        <div class="service-features">
                            <ul>
                                <li>Diagnostic et audit d'entreprise</li>
                                <li>Stratégie de développement</li>
                                <li>Optimisation des processus</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal6">En savoir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-section" id="solutions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Solutions Innovantes</h2>
                    <p class="section-subtitle">Des outils digitaux conçus spécifiquement pour les entreprises tunisiennes</p>
                </div>
            </div>
            
            <div class="row">
                <!-- TunAnnu -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="solution-title">TunAnnu</h4>
                        <p class="solution-description">
                            Annuaire professionnel 100% gratuit qui recense les entreprises tunisiennes par secteur, région et activité.
                        </p>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#solutionModal1">Découvrir</button>
                    </div>
                </div>
                
                <!-- TuniMentors -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="solution-title">TuniMentors</h4>
                        <p class="solution-description">
                            Réseau de mentors et de formations pour entrepreneurs et étudiants en Tunisie.
                        </p>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#solutionModal2">Découvrir</button>
                    </div>
                </div>
                
                <!-- TuniCasting -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h4 class="solution-title">TuniCasting</h4>
                        <p class="solution-description">
                            Plateforme de gestion de castings pour mannequins, acteurs, modèles et influenceurs.
                        </p>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#solutionModal3">Découvrir</button>
                    </div>
                </div>
                
                <!-- TuniPro -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <h4 class="solution-title">TuniPro</h4>
                        <p class="solution-description">
                            Générateur de cartes de visite professionnelles avec QR code et portfolio en ligne.
                        </p>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#solutionModal4">Découvrir</button>
                    </div>
                </div>
                
                <!-- CRM WhatsApp -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 class="solution-title">CRM WhatsApp Export</h4>
                        <p class="solution-description">
                            Solution CRM intégrée à WhatsApp pour les entreprises exportatrices tunisiennes.
                        </p>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#solutionModal5">Découvrir</button>
                    </div>
                </div>
                
                <!-- Solutions à venir -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="solution-title">Solutions à Venir</h4>
                        <p class="solution-description">
                            Découvrez nos prochaines solutions innovantes pour l'écosystème économique tunisien.
                        </p>
                        <div class="coming-soon">Bientôt Disponible</div>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#solutionModal6">En savoir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Tarifs & Packs</h2>
                    <p class="section-subtitle">Des solutions adaptées à tous les budgets avec une politique de tarifs transparents</p>
                </div>
            </div>
            
            <!-- Création de Sites Web Professionnels -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-header">
                    <h3 class="pricing-category">Création de Sites Web Professionnels</h3>
                    <p class="pricing-description">Des sites conçus pour séduire, convertir et refléter le sérieux de votre entreprise</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Type de Site</th>
                                <th>Description enrichie</th>
                                <th>Tarif Tunisie (DT HT)</th>
                                <th>Prix Tunaffaires.tn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Site Vitrine Professionnel</td>
                                <td>Un site de présentation de 5 à 7 pages avec design moderne, responsive, SEO de base, hébergement conseillé, et intégration des réseaux sociaux. Idéal pour les PME et startups.</td>
                                <td class="price-cell">Bas : 800 • Moyenne : 1 200 • Haut : 1 800</td>
                                <td class="price-cell">1 300 DT</td>
                            </tr>
                            <tr>
                                <td>Site Institutionnel / Entreprise</td>
                                <td>Conception sur mesure avec structure complète (accueil, services, équipe, blog, contact), sécurité HTTPS, intégration CRM, et assistance 3 mois.</td>
                                <td class="price-cell">Bas : 2 500 • Moyenne : 4 000 • Haut : 8 000</td>
                                <td class="price-cell">6 000 DT</td>
                            </tr>
                            <tr>
                                <td>E-Commerce Professionnel</td>
                                <td>Boutique en ligne complète (WooCommerce ou Prestashop), gestion produits, paiement en ligne, tracking des ventes, SEO et automatisations marketing.</td>
                                <td class="price-cell">Bas : 3 000 • Moyenne : 4 500 • Haut : 6 500</td>
                                <td class="price-cell">5 700 DT</td>
                            </tr>
                            <tr>
                                <td>Landing Page Optimisée</td>
                                <td>Page unique à fort taux de conversion (Facebook Ads, Google Ads, campagne emailing), intégrée à vos outils marketing.</td>
                                <td class="price-cell">Bas : 400 • Moyenne : 600 • Haut : 900</td>
                                <td class="price-cell">700 DT</td>
                            </tr>
                            <tr>
                                <td>Refonte de Site Web</td>
                                <td>Audit UX/UI, optimisation des performances, refonte du design, migration du contenu et SEO.</td>
                                <td class="price-cell">Bas : 900 • Moyenne : 1 100 • Haut : 1 500</td>
                                <td class="price-cell">1 300 DT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Communication Digitale & Gestion des Réseaux Sociaux -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-header">
                    <h3 class="pricing-category">Communication Digitale & Gestion des Réseaux Sociaux</h3>
                    <p class="pricing-description">Construisez une image forte et cohérente. Nous gérons vos contenus, campagnes et interactions pour booster votre notoriété.</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Pack</th>
                                <th>Contenu du service</th>
                                <th>Tarifs Tunisie (DT HT)</th>
                                <th>Prix Tunaffaires.tn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pack Standard</td>
                                <td>Création et publication de 8 posts/mois, gestion Facebook & Instagram, réponse aux messages, reporting mensuel.</td>
                                <td class="price-cell">Bas : 400 • Moyenne : 550 • Haut : 800</td>
                                <td class="price-cell">590 DT</td>
                            </tr>
                            <tr>
                                <td>Pack Premium</td>
                                <td>15 publications créatives/mois, gestion sponsorisation (budget exclu), création visuels & vidéos courtes.</td>
                                <td class="price-cell">Bas : 700 • Moyenne : 900 • Haut : 1 200</td>
                                <td class="price-cell">950 DT</td>
                            </tr>
                            <tr>
                                <td>Pack Entreprise</td>
                                <td>Stratégie de communication globale, shooting photo, vidéos, copywriting, calendrier éditorial et reporting détaillé.</td>
                                <td class="price-cell">Bas : 1 000 • Moyenne : 1 300 • Haut : 1 800</td>
                                <td class="price-cell">1 450 DT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Accompagnement à la Création et au Lancement d'Entreprise -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-header">
                    <h3 class="pricing-category">Accompagnement à la Création et au Lancement d'Entreprise</h3>
                    <p class="pricing-description">De l'idée à la réussite, Tunaffaires vous accompagne à chaque étape avec méthode, stratégie et réseau.</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Offre</th>
                                <th>Contenu détaillé</th>
                                <th>Tarifs Tunisie (DT HT)</th>
                                <th>Prix Tunaffaires.tn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pack Start</td>
                                <td>Aide à la création (Business Model, formalités légales, identité visuelle, présence digitale).</td>
                                <td class="price-cell">Bas : 1 000 • Moyenne : 1 300 • Haut : 2 000</td>
                                <td class="price-cell">1 500 DT</td>
                            </tr>
                            <tr>
                                <td>Pack Lancement</td>
                                <td>Plan marketing complet, création digitale, stratégie commerciale, accompagnement au lancement.</td>
                                <td class="price-cell">Bas : 2 000 • Moyenne : 2 400 • Haut : 3 000</td>
                                <td class="price-cell">2 500 DT</td>
                            </tr>
                            <tr>
                                <td>Accompagnement Financement</td>
                                <td>Préparation de dossiers, pitch deck, mise en relation avec investisseurs.</td>
                                <td class="price-cell">Bas : 3% • Moyenne : 5% • Haut : 7%</td>
                                <td class="price-cell">5% du montant levé</td>
                            </tr>
                            <tr>
                                <td>Suivi Stratégique Mensuel</td>
                                <td>Mentorat, suivi d'objectifs, accompagnement digital & commercial.</td>
                                <td class="price-cell">Bas : 250 • Moyenne : 300 • Haut : 400</td>
                                <td class="price-cell">350 DT / mois</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Solutions Digitales Signées Tunaffaires -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-header">
                    <h3 class="pricing-category">Solutions Digitales Signées Tunaffaires</h3>
                    <p class="pricing-description">Nos outils conçus pour les entrepreneurs tunisiens : simples, efficaces et interconnectés.</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Solution</th>
                                <th>Description</th>
                                <th>Accès / Abonnement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tunannu</td>
                                <td>Annuaire gratuit des entreprises tunisiennes avec profil vérifié, liens et visibilité nationale.</td>
                                <td class="price-cell">Gratuit</td>
                            </tr>
                            <tr>
                                <td>Tunimentors</td>
                                <td>Réseau de mentors, formations, et accompagnements personnalisés pour entrepreneurs.</td>
                                <td class="price-cell">59 DT / mois</td>
                            </tr>
                            <tr>
                                <td>Tunicasting</td>
                                <td>Plateforme de gestion de castings et profils (modèles, acteurs, créateurs).</td>
                                <td class="price-cell">199 DT / mois</td>
                            </tr>
                            <tr>
                                <td>Tunipro</td>
                                <td>Création de cartes de visite professionnelles interactives et partage QR code.</td>
                                <td class="price-cell">89 DT / an</td>
                            </tr>
                            <tr>
                                <td>CRM WhatsApp Export</td>
                                <td>Solution d'automatisation pour la prospection et gestion de clients export via WhatsApp Business.</td>
                                <td class="price-cell">350 DT / mois</td>
                            </tr>
                            <tr>
                                <td>Autres solutions à venir</td>
                                <td>Systèmes personnalisés selon secteur (immobilier, éducation, RH).</td>
                                <td class="price-cell">Sur devis</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Visibilité & Publicité sur Tunaffaires.tn -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="500">
                <div class="pricing-header">
                    <h3 class="pricing-category">Visibilité & Publicité sur Tunaffaires.tn</h3>
                    <p class="pricing-description">Boostez votre présence et votre notoriété auprès d'un réseau d'entrepreneurs, exportateurs et investisseurs.</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Détails</th>
                                <th>Tarif Tunisie (DT HT)</th>
                                <th>Prix Tunaffaires.tn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bannière Page d'Accueil</td>
                                <td>1 mois de visibilité premium sur la page d'accueil du site.</td>
                                <td class="price-cell">Bas : 200 • Moyenne : 250 • Haut : 350</td>
                                <td class="price-cell">290 DT / mois</td>
                            </tr>
                            <tr>
                                <td>Article Sponsorisé</td>
                                <td>Rédaction SEO + diffusion blog + partage réseaux sociaux Tunaffaires.</td>
                                <td class="price-cell">Bas : 250 • Moyenne : 320 • Haut : 400</td>
                                <td class="price-cell">350 DT</td>
                            </tr>
                            <tr>
                                <td>Pack Visibilité</td>
                                <td>Bannière + article sponsorisé + boost social + newsletter.</td>
                                <td class="price-cell">Bas : 450 • Moyenne : 550 • Haut : 700</td>
                                <td class="price-cell">590 DT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Formations & Mentorat -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="600">
                <div class="pricing-header">
                    <h3 class="pricing-category">Formations & Mentorat</h3>
                    <p class="pricing-description">Apprenez à piloter votre business et à maîtriser le digital avec des experts tunisiens et internationaux.</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Prix Tunaffaires.tn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Formation 1 journée</td>
                                <td>SEO, Meta Ads, IA, Communication digitale ou gestion de projet.</td>
                                <td class="price-cell">250 DT / participant</td>
                            </tr>
                            <tr>
                                <td>Programme Tunimentors</td>
                                <td>5 sessions de mentorat business + suivi individuel.</td>
                                <td class="price-cell">690 DT / cycle</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Networking & Événements -->
            <div class="pricing-table" data-aos="fade-up" data-aos-delay="700">
                <div class="pricing-header">
                    <h3 class="pricing-category">Networking & Événements</h3>
                    <p class="pricing-description">Créez des opportunités. Rejoignez nos événements business et connectez-vous à l'écosystème entrepreneurial tunisien.</p>
                </div>
                <div class="pricing-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Détails</th>
                                <th>Prix Tunaffaires.tn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Participation Simple</td>
                                <td>Accès complet à l'événement, réseautage et ateliers.</td>
                                <td class="price-cell">Gratuit à 50 DT</td>
                            </tr>
                            <tr>
                                <td>Pack Partenaire</td>
                                <td>Visibilité marque, stand, interview média et diffusion web.</td>
                                <td class="price-cell">450 DT et plus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <p class="mb-4">Vous avez un projet spécifique ? Nous créons des solutions sur mesure adaptées à vos besoins.</p>
                    <a href="contact.php" class="btn btn-secondary btn-lg">Demander un devis personnalisé</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Prêt à booster votre entreprise avec nos services ?</h2>
                <p>Rejoignez les 85 entreprises qui nous font déjà confiance. Discutons de votre projet et créons ensemble une stratégie sur mesure pour accélérer votre croissance.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="cta-btn cta-btn-primary">Démarrer un projet</a>
                    <a href="rdv.php" class="cta-btn cta-btn-secondary">Réserver une consultation gratuite</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <!-- Service Modals -->
    <!-- Modal 1: Communication & Marketing Digital -->
    <div class="modal fade" id="serviceModal1" tabindex="-1" aria-labelledby="serviceModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h5 class="modal-title" id="serviceModal1Label">Communication & Marketing Digital</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Chez TunAffaires.tn, nous aidons les entreprises à construire une présence digitale forte et cohérente. Nos experts en communication et marketing digital conçoivent des stratégies adaptées au marché tunisien et international pour renforcer votre visibilité et votre image de marque.</p>
                    
                    <div class="service-details">
                        <h5>Nos services incluent :</h5>
                        <ul>
                            <li>Gestion complète des réseaux sociaux (Facebook, Instagram, LinkedIn)</li>
                            <li>Création de contenus engageants : articles, visuels, vidéos, reels</li>
                            <li>Campagnes Meta Ads & Google Ads ciblées</li>
                            <li>Stratégie de référencement naturel (SEO) et payant (SEA)</li>
                            <li>Audit et repositionnement de votre marque digitale</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#pricing" class="btn btn-primary" data-bs-dismiss="modal">Voir les tarifs</a>
                        <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2: Relations Presse & Visibilité -->
    <div class="modal fade" id="serviceModal2" tabindex="-1" aria-labelledby="serviceModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-service-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h5 class="modal-title" id="serviceModal2Label">Relations Presse & Visibilité</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nous offrons aux entreprises, universités et institutions un espace de visibilité médiatique à fort impact. Grâce à notre plateforme TunAffaires.tn, vos informations touchent directement les décideurs économiques et le grand public tunisien.</p>
                    
                    <div class="service-details">
                        <h5>Nos solutions presse :</h5>
                        <ul>
                            <li>Publication d'articles sponsorisés et de communiqués de presse</li>
                            <li>Interviews et reportages vidéo professionnels</li>
                            <li>Couverture médiatique des événements (photos, vidéos, articles)</li>
                            <li>Diffusion sur nos réseaux partenaires et médias économiques tunisiens</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#pricing" class="btn btn-primary" data-bs-dismiss="modal">Voir les tarifs</a>
                        <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3: Événementiel & Partenariats -->
    <div class="modal fade" id="serviceModal3" tabindex="-1" aria-labelledby="serviceModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-service-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h5 class="modal-title" id="serviceModal3Label">Événementiel & Partenariats</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Notre équipe assure la conception, la communication et la couverture de vos événements professionnels. De la planification à la diffusion digitale, TunAffaires.tn met en valeur vos rencontres économiques et vos initiatives institutionnelles.</p>
                    
                    <div class="service-details">
                        <h5>Nos expertises :</h5>
                        <ul>
                            <li>Organisation de conférences, forums et salons B2B</li>
                            <li>Campagnes de communication autour de l'événement</li>
                            <li>Mise en relation avec partenaires, sponsors et médias</li>
                            <li>Reportages et couverture photo/vidéo</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#pricing" class="btn btn-primary" data-bs-dismiss="modal">Voir les tarifs</a>
                        <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4: Formation & Orientation -->
    <div class="modal fade" id="serviceModal4" tabindex="-1" aria-labelledby="serviceModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5 class="modal-title" id="serviceModal4Label">Formation & Orientation</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>TunAffaires.tn est un acteur majeur de la communication éducative en Tunisie. Nous promouvons les universités privées, les masters, licences et formations spécialisées auprès des futurs étudiants et de leurs familles.</p>
                    
                    <div class="service-details">
                        <h5>Nos missions :</h5>
                        <ul>
                            <li>Campagnes digitales pour universités privées et écoles supérieures</li>
                            <li>Création de contenus éducatifs et vidéos de présentation</li>
                            <li>Conseils d'orientation pour les bacheliers et étudiants étrangers</li>
                            <li>Publication de fiches métiers et guides d'orientation</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#pricing" class="btn btn-primary" data-bs-dismiss="modal">Voir les tarifs</a>
                        <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5: Accompagnement au Lancement -->
    <div class="modal fade" id="serviceModal5" tabindex="-1" aria-labelledby="serviceModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-service-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h5 class="modal-title" id="serviceModal5Label">Accompagnement au Lancement</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lancer une entreprise demande plus qu'une idée : il faut du réseau, des outils et une visibilité. TunAffaires.tn accompagne les porteurs de projets et les jeunes entrepreneurs tunisiens dans la mise en place, la communication et la croissance de leur activité.</p>
                    
                    <div class="service-details">
                        <h5>Nos services d'accompagnement :</h5>
                        <ul>
                            <li>Étude de marché et plan de communication</li>
                            <li>Création de l'identité visuelle et stratégie digitale</li>
                            <li>Mise en relation avec des partenaires, investisseurs et médias</li>
                            <li>Promotion via nos plateformes et réseaux professionnels</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#pricing" class="btn btn-primary" data-bs-dismiss="modal">Voir les tarifs</a>
                        <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6: Consulting Stratégique -->
    <div class="modal fade" id="serviceModal6" tabindex="-1" aria-labelledby="serviceModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="modal-title" id="serviceModal6Label">Consulting Stratégique</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Notre service de consulting stratégique vous aide à transformer votre entreprise et à accélérer sa croissance. Nous analysons votre situation actuelle, identifions les opportunités et mettons en place des plans d'action concrets pour atteindre vos objectifs.</p>
                    
                    <div class="service-details">
                        <h5>Nos domaines d'expertise en consulting :</h5>
                        <ul>
                            <li>Diagnostic et audit d'entreprise complet</li>
                            <li>Stratégie de développement et plan de croissance</li>
                            <li>Optimisation des processus et amélioration de la productivité</li>
                            <li>Transformation digitale et innovation</li>
                            <li>Stratégie d'export et développement international</li>
                            <li>Conseil en management et organisation</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#pricing" class="btn btn-primary" data-bs-dismiss="modal">Voir les tarifs</a>
                        <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Solution Modals -->
    <!-- Modal 1: TunAnnu -->
    <div class="modal fade" id="solutionModal1" tabindex="-1" aria-labelledby="solutionModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-solution-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5 class="modal-title" id="solutionModal1Label">TunAnnu – L'annuaire gratuit des entreprises tunisiennes</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>TunAnnu est un annuaire professionnel 100 % gratuit qui recense les entreprises tunisiennes par secteur, région et activité. Les entrepreneurs peuvent créer leur fiche, y ajouter leur logo, description, site web et réseaux sociaux, et être visibles auprès de milliers de visiteurs chaque mois.</p>
                    
                    <div class="solution-details">
                        <h5>Fonctionnalités principales :</h5>
                        <ul>
                            <li>Moteur de recherche intelligent pour trouver facilement des partenaires, fournisseurs et prestataires locaux</li>
                            <li>Création de fiche entreprise gratuite avec logo, description et coordonnées</li>
                            <li>Classement par secteur d'activité, région et spécialité</li>
                            <li>Visibilité nationale auprès d'un public qualifié</li>
                        </ul>
                    </div>
                    
                    <p><strong>Objectif :</strong> offrir une visibilité digitale gratuite et qualifiée à toutes les entreprises tunisiennes.</p>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <a href="/solutions/tunannu" class="btn btn-secondary">Accéder à TunAnnu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2: TuniMentors -->
    <div class="modal fade" id="solutionModal2" tabindex="-1" aria-labelledby="solutionModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-solution-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="modal-title" id="solutionModal2Label">TuniMentors – Le réseau de mentors et de formations</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>TuniMentors met en relation mentors, experts, formateurs et jeunes talents autour de programmes de formation, coaching et accompagnement. C'est un espace d'apprentissage collaboratif qui valorise l'expérience et encourage le développement des compétences tunisiennes.</p>
                    
                    <div class="solution-details">
                        <h5>Fonctionnalités principales :</h5>
                        <ul>
                            <li>Plateforme de mise en relation entre mentors et apprenants</li>
                            <li>Programmes de formation et accompagnements personnalisés</li>
                            <li>Réservation de sessions de mentorat en ligne</li>
                            <li>Espace communautaire pour échanges et partages</li>
                        </ul>
                    </div>
                    
                    <p><strong>Objectif :</strong> connecter la communauté du savoir et du partage d'expérience en Tunisie.</p>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <a href="/solutions/tunimentors" class="btn btn-secondary">Accéder à TuniMentors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3: TuniCasting -->
    <div class="modal fade" id="solutionModal3" tabindex="-1" aria-labelledby="solutionModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-solution-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="modal-title" id="solutionModal3Label">TuniCasting – Plateforme de gestion de castings et de talents</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>TuniCasting est une plateforme tunisienne de gestion de castings pour mannequins, acteurs, modèles, influenceurs et agences. Les talents peuvent créer leur profil, publier des photos et vidéos, et postuler à des offres. Les agences et marques disposent d'un tableau de bord professionnel pour gérer leurs annonces et sélectionner les meilleurs profils.</p>
                    
                    <div class="solution-details">
                        <h5>Fonctionnalités principales :</h5>
                        <ul>
                            <li>Création de profils talents complets avec portfolio</li>
                            <li>Publication d'annonces de castings par les agences</li>
                            <li>Système de candidature et de sélection</li>
                            <li>Tableau de bord professionnel pour les agences</li>
                        </ul>
                    </div>
                    
                    <p><strong>Objectif :</strong> professionnaliser le secteur du casting en Tunisie avec un outil digital complet.</p>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <a href="/solutions/tunicasting" class="btn btn-secondary">Accéder à TuniCasting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4: TuniPro -->
    <div class="modal fade" id="solutionModal4" tabindex="-1" aria-labelledby="solutionModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-solution-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <h5 class="modal-title" id="solutionModal4Label">TuniPro – Générateur de cartes de visite professionnelles</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>TuniPro permet aux professionnels de créer une carte de visite numérique personnalisée, avec QR code, liens sociaux, logo et portfolio. Chaque utilisateur dispose d'un profil professionnel en ligne, facile à partager sur les réseaux sociaux ou par message. La solution s'adresse aux entrepreneurs, indépendants et entreprises souhaitant moderniser leur image.</p>
                    
                    <div class="solution-details">
                        <h5>Fonctionnalités principales :</h5>
                        <ul>
                            <li>Création de cartes de visite digitales personnalisées</li>
                            <li>Génération de QR code pour partage facile</li>
                            <li>Intégration des réseaux sociaux et portfolio</li>
                            <li>Partage via message, email ou réseaux sociaux</li>
                        </ul>
                    </div>
                    
                    <p><strong>Objectif :</strong> digitaliser la présentation professionnelle et favoriser le networking.</p>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <a href="/solutions/tunipro" class="btn btn-secondary">Accéder à TuniPro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5: CRM WhatsApp Export -->
    <div class="modal fade" id="solutionModal5" tabindex="-1" aria-labelledby="solutionModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-solution-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h5 class="modal-title" id="solutionModal5Label">TunAffaires CRM – CRM WhatsApp dédié à l'export de marchandises</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Une solution CRM intégrée à WhatsApp spécialement conçue pour les entreprises tunisiennes exportatrices. Elle permet de gérer les prospects et clients internationaux, suivre les commandes et relances, automatiser les messages commerciaux multilingues, et centraliser les échanges dans un tableau de bord unique.</p>
                    
                    <div class="solution-details">
                        <h5>Fonctionnalités principales :</h5>
                        <ul>
                            <li>Gestion des prospects et clients internationaux</li>
                            <li>Suivi des commandes et relances automatisées</li>
                            <li>Automatisation des messages commerciaux multilingues</li>
                            <li>Centralisation des échanges dans un tableau de bord unique</li>
                            <li>Intégration avec WhatsApp Business API</li>
                        </ul>
                    </div>
                    
                    <p><strong>Objectif :</strong> faciliter la gestion commerciale et l'export via un canal familier et rapide.</p>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <a href="/solutions/crm-export" class="btn btn-secondary">Accéder au CRM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6: Solutions à venir -->
    <div class="modal fade" id="solutionModal6" tabindex="-1" aria-labelledby="solutionModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <div class="modal-solution-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5 class="modal-title" id="solutionModal6Label">Solutions à venir – L'écosystème du business tunisien</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>TunAffaires continue d'enrichir son écosystème digital avec des outils innovants à venir. Notre objectif est de créer un écosystème digital complet au service du développement économique tunisien.</p>
                    
                    <div class="solution-details">
                        <h5>Nos prochaines solutions :</h5>
                        <ul>
                            <li><strong>TuniMarket :</strong> plateforme de vente et d'achat B2B tunisienne</li>
                            <li><strong>TuniInvest :</strong> espace de mise en relation entre startups et investisseurs</li>
                            <li><strong>TuniPress :</strong> solution de communiqués de presse automatisés</li>
                            <li><strong>TuniNetWork :</strong> réseau social professionnel tunisien</li>
                            <li><strong>TuniLearn :</strong> plateforme de formation en ligne spécialisée</li>
                            <li><strong>TuniJobs :</strong> plateforme de recrutement dédiée aux métiers digitaux</li>
                        </ul>
                    </div>
                    
                    <p>Ces solutions sont actuellement en développement et seront disponibles progressivement en 2025. Si vous souhaitez être informé de leur lancement ou participer à nos programmes bêta, n'hésitez pas à nous contacter.</p>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <a href="contact.php" class="btn btn-secondary">Être informé du lancement</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

        // Add floating animation to random elements
        document.querySelectorAll('.service-card, .solution-card').forEach((card, index) => {
            if (index % 3 === 0) {
                card.classList.add('floating');
            } else if (index % 4 === 0) {
                card.classList.add('pulse');
            }
        });
    </script>
</body>
</html>