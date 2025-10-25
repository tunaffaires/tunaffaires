<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Digitales - TunaFFaires</title>
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

        /* News Section */
        .news-section {
            padding: 80px 0;
            background: white;
        }

        .news-filters {
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

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .news-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            position: relative;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .news-image {
            position: relative;
            overflow: hidden;
            height: 220px;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .news-card:hover .news-image img {
            transform: scale(1.05);
        }

        .news-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .news-content {
            padding: 25px;
        }

        .news-date {
            display: flex;
            align-items: center;
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .news-date i {
            margin-right: 8px;
            color: var(--primary);
        }

        .news-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--dark);
            line-height: 1.4;
        }

        .news-excerpt {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .news-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(0,0,0,0.05);
        }

        .news-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: 700;
            color: var(--primary);
            font-size: 0.8rem;
        }

        .author-info h5 {
            margin-bottom: 0;
            font-size: 0.9rem;
        }

        .author-info p {
            margin-bottom: 0;
            font-size: 0.8rem;
            color: var(--gray);
        }

        /* Newsletter Section */
        .newsletter-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            padding: 80px 0;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .newsletter-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            opacity: 0.1;
        }

        .newsletter-content {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .newsletter-section h2 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .newsletter-section p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .newsletter-form {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .newsletter-input {
            flex: 1;
            min-width: 250px;
            padding: 14px 20px;
            border-radius: 50px;
            border: none;
            font-size: 1rem;
            outline: none;
        }

        /* Modal Styles */
        .modal-header {
            background: var(--primary);
            color: white;
            border-bottom: none;
            padding: 25px 30px;
        }

        .modal-title {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .modal-body {
            padding: 30px;
        }

        .modal-news-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: var(--radius);
            margin-bottom: 25px;
        }

        .modal-news-video {
            width: 100%;
            height: 400px;
            border-radius: var(--radius);
            margin-bottom: 25px;
        }

        .modal-news-meta {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .modal-news-date {
            display: flex;
            align-items: center;
            margin-right: 20px;
            color: var(--gray);
        }

        .modal-news-date i {
            margin-right: 8px;
            color: var(--primary);
        }

        .modal-news-category {
            background: var(--secondary);
            color: var(--dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .modal-news-content {
            line-height: 1.8;
        }

        .modal-news-content h3 {
            color: var(--primary);
            margin: 25px 0 15px;
        }

        .modal-news-content p {
            margin-bottom: 20px;
        }

        .modal-news-content img {
            max-width: 100%;
            height: auto;
            border-radius: var(--radius);
            margin: 20px 0;
        }

        .modal-news-content blockquote {
            border-left: 4px solid var(--primary);
            padding-left: 20px;
            margin: 25px 0;
            font-style: italic;
            color: var(--gray);
        }

        .modal-footer {
            border-top: 1px solid rgba(0,0,0,0.1);
            padding: 20px 30px;
        }

        .modal-share {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .share-text {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0;
        }

        .share-icons {
            display: flex;
            gap: 10px;
        }

        .share-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
        }

        .share-icon:hover {
            background: var(--primary);
            color: white;
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
            .news-grid {
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

            .news-grid {
                grid-template-columns: 1fr;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-input {
                min-width: 100%;
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
            
            .news-filters {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 100%;
                max-width: 250px;
                text-align: center;
            }

            .modal-news-image, .modal-news-video {
                height: 250px;
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
                <h1 class="display-4 fw-bold mb-4">Actualités Digitales</h1>
                <p class="lead mb-4">Restez informé des dernières tendances et innovations du monde digital en Tunisie, en Afrique et dans le monde</p>
                <a href="#actualites" class="btn btn-primary btn-lg pulse">
                    Découvrir les Actualités <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section" id="actualites">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Dernières Actualités</h2>
                    <p class="section-subtitle">Suivez l'actualité digitale en Tunisie, en Afrique et dans le monde</p>
                </div>
            </div>
            
            <div class="news-filters" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Toutes les actualités</button>
                <button class="filter-btn" data-filter="tunisie">Tunisie</button>
                <button class="filter-btn" data-filter="afrique">Afrique</button>
                <button class="filter-btn" data-filter="monde">Monde</button>
            </div>
            
            <div class="news-grid">
                <!-- Article 1 - Tunisie -->
                <div class="news-card" data-category="tunisie" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Startup Tunisienne">
                        <div class="news-category">Tunisie</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i> 15 Novembre 2023
                        </div>
                        <h3 class="news-title">Une startup tunisienne lève 2 millions d'euros pour son application de santé digitale</h3>
                        <p class="news-excerpt">
                            HealthTech Tunisie, une startup spécialisée dans les solutions de télémédecine, annonce une levée de fonds record pour développer sa plateforme de consultation à distance.
                        </p>
                        <div class="news-meta">
                            <div class="news-author">
                                <div class="author-avatar">MT</div>
                                <div class="author-info">
                                    <h5>Mohamed Tounsi</h5>
                                    <p>Journaliste Digital</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal1">Lire la suite</button>
                        </div>
                    </div>
                </div>
                
                <!-- Article 2 - Afrique -->
                <div class="news-card" data-category="afrique" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fintech Afrique">
                        <div class="news-category">Afrique</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i> 12 Novembre 2023
                        </div>
                        <h3 class="news-title">L'explosion des fintechs en Afrique subsaharienne transforme le paysage bancaire</h3>
                        <p class="news-excerpt">
                            Les services financiers mobiles connaissent une croissance exponentielle en Afrique, avec plus de 200 millions d'utilisateurs actifs selon un récent rapport.
                        </p>
                        <div class="news-meta">
                            <div class="news-author">
                                <div class="author-avatar">AS</div>
                                <div class="author-info">
                                    <h5>Amina Sow</h5>
                                    <p>Spécialiste Fintech</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal2">Lire la suite</button>
                        </div>
                    </div>
                </div>
                
                <!-- Article 3 - Monde -->
                <div class="news-card" data-category="monde" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="IA Générative">
                        <div class="news-category">Monde</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i> 10 Novembre 2023
                        </div>
                        <h3 class="news-title">L'IA générative révolutionne la création de contenu : opportunités et défis</h3>
                        <p class="news-excerpt">
                            Les outils d'intelligence artificielle comme ChatGPT et Midjourney transforment radicalement la façon dont le contenu est créé et consommé à l'échelle mondiale.
                        </p>
                        <div class="news-meta">
                            <div class="news-author">
                                <div class="author-avatar">JD</div>
                                <div class="author-info">
                                    <h5>Jean Digital</h5>
                                    <p>Expert IA</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal3">Lire la suite</button>
                        </div>
                    </div>
                </div>
                
                <!-- Article 4 - Tunisie -->
                <div class="news-card" data-category="tunisie" data-aos="fade-up" data-aos-delay="400">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-commerce Tunisie">
                        <div class="news-category">Tunisie</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i> 8 Novembre 2023
                        </div>
                        <h3 class="news-title">Le e-commerce en Tunisie a progressé de 45% en 2023 selon une étude</h3>
                        <p class="news-excerpt">
                            La pandémie a accéléré l'adoption du commerce en ligne en Tunisie, avec une croissance record cette année et des perspectives prometteuses pour 2024.
                        </p>
                        <div class="news-meta">
                            <div class="news-author">
                                <div class="author-avatar">NS</div>
                                <div class="author-info">
                                    <h5>Nadia Sassi</h5>
                                    <p>Analyste Marché</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal4">Lire la suite</button>
                        </div>
                    </div>
                </div>
                
                <!-- Article 5 - Afrique -->
                <div class="news-card" data-category="afrique" data-aos="fade-up" data-aos-delay="500">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Agritech Afrique">
                        <div class="news-category">Afrique</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i> 5 Novembre 2023
                        </div>
                        <h3 class="news-title">L'agritech africaine attire 1,2 milliard de dollars d'investissements en 2023</h3>
                        <p class="news-excerpt">
                            Les solutions technologiques pour l'agriculture connaissent un essor remarquable en Afrique, avec des innovations dans l'irrigation, la logistique et la distribution.
                        </p>
                        <div class="news-meta">
                            <div class="news-author">
                                <div class="author-avatar">KD</div>
                                <div class="author-info">
                                    <h5>Kofi Dagnon</h5>
                                    <p>Spécialiste Agritech</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal5">Lire la suite</button>
                        </div>
                    </div>
                </div>
                
                <!-- Article 6 - Monde -->
                <div class="news-card" data-category="monde" data-aos="fade-up" data-aos-delay="600">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Métavers">
                        <div class="news-category">Monde</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i> 2 Novembre 2023
                        </div>
                        <h3 class="news-title">Le métavers : opportunité business ou bulle spéculative ?</h3>
                        <p class="news-excerpt">
                            Alors que les géants tech investissent des milliards dans le métavers, les experts divergent sur son potentiel réel et son adoption par le grand public.
                        </p>
                        <div class="news-meta">
                            <div class="news-author">
                                <div class="author-avatar">EV</div>
                                <div class="author-info">
                                    <h5>Emma Virtual</h5>
                                    <p>Journaliste Tech</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal6">Lire la suite</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <a href="#" class="btn btn-secondary btn-lg">Voir plus d'articles</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <h2>Restez Informé</h2>
                <p>Abonnez-vous à notre newsletter pour recevoir les dernières actualités digitales directement dans votre boîte email.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Votre adresse email" required>
                    <button type="submit" class="btn btn-secondary">S'abonner</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Article Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="articleModal1" tabindex="-1" aria-labelledby="articleModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="articleModal1Label">Une startup tunisienne lève 2 millions d'euros pour son application de santé digitale</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Startup Tunisienne" class="modal-news-image">
                    
                    <div class="modal-news-meta">
                        <div class="modal-news-date">
                            <i class="far fa-calendar-alt"></i> 15 Novembre 2023
                        </div>
                        <div class="modal-news-category">Tunisie</div>
                    </div>
                    
                    <div class="modal-news-content">
                        <p>HealthTech Tunisie, une startup spécialisée dans les solutions de télémédecine, annonce une levée de fonds record de 2 millions d'euros pour développer sa plateforme de consultation à distance. Cette levée, menée par un consortium d'investisseurs européens et locaux, représente l'une des plus importantes dans le secteur de la santé digitale en Tunisie.</p>
                        
                        <h3>Une croissance exponentielle</h3>
                        <p>Fondée en 2020, HealthTech Tunisie a connu une croissance remarquable, avec plus de 50 000 utilisateurs actifs et 500 médecins partenaires sur sa plateforme. La startup propose des consultations vidéo, un suivi médical à distance et une pharmacie en ligne intégrée.</p>
                        
                        <blockquote>
                            "Cette levée de fonds nous permettra d'accélérer notre développement et de renforcer notre présence en Afrique du Nord", explique Dr. Sami Ben Ammar, fondateur et CEO de HealthTech Tunisie.
                        </blockquote>
                        
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Télémédecine">
                        
                        <h3>Perspectives d'expansion</h3>
                        <p>Avec ces nouveaux fonds, HealthTech Tunisie prévoit de s'étendre en Algérie et au Maroc d'ici fin 2024, et de développer de nouvelles fonctionnalités comme l'intelligence artificielle pour l'aide au diagnostic et la gestion des maladies chroniques.</p>
                        
                        <p>Cette réussite témoigne du dynamisme de l'écosystème startup tunisien et du potentiel du secteur de la santé digitale en Afrique, où l'accès aux soins reste un défi majeur dans de nombreuses régions.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-share">
                        <p class="share-text">Partager cet article :</p>
                        <div class="share-icons">
                            <a href="#" class="share-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="share-icon"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="articleModal2" tabindex="-1" aria-labelledby="articleModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="articleModal2Label">L'explosion des fintechs en Afrique subsaharienne transforme le paysage bancaire</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="modal-news-video" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="modal-news-meta">
                        <div class="modal-news-date">
                            <i class="far fa-calendar-alt"></i> 12 Novembre 2023
                        </div>
                        <div class="modal-news-category">Afrique</div>
                    </div>
                    
                    <div class="modal-news-content">
                        <p>Les services financiers mobiles connaissent une croissance exponentielle en Afrique, avec plus de 200 millions d'utilisateurs actifs selon un récent rapport de la Banque Mondiale. Cette révolution financière numérique transforme radicalement l'accès aux services bancaires sur le continent.</p>
                        
                        <h3>Le mobile money en tête</h3>
                        <p>Le mobile money reste le moteur principal de cette transformation, avec des pays comme le Kenya, le Ghana et la Côte d'Ivoire en tête. Des plateformes comme M-Pesa, MTN Mobile Money et Orange Money ont permis à des millions de personnes d'accéder pour la première fois à des services financiers formels.</p>
                        
                        <blockquote>
                            "L'Afrique est en train de sauter une étape du développement bancaire traditionnel pour passer directement aux services financiers digitaux", explique Dr. Fatoumata Bâ, économiste spécialiste de l'Afrique.
                        </blockquote>
                        
                        <img src="https://images.unsplash.com/photo-1563010880-76f4bd60c16a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fintech Afrique">
                        
                        <h3>Nouvelles tendances</h3>
                        <p>Au-delà du mobile money, de nouvelles fintechs émergent dans des domaines comme le crédit scoring alternatif, l'assurance digitale, les plateformes d'investissement et les services de paiement cross-border. Ces innovations répondent aux besoins spécifiques des populations africaines et des PME locales.</p>
                        
                        <p>Les investissements dans les fintechs africaines ont atteint un record de 3,5 milliards de dollars en 2023, attirant l'attention des fonds d'investissement internationaux et témoignant du potentiel de croissance du secteur.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-share">
                        <p class="share-text">Partager cet article :</p>
                        <div class="share-icons">
                            <a href="#" class="share-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="share-icon"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="articleModal3" tabindex="-1" aria-labelledby="articleModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="articleModal3Label">L'IA générative révolutionne la création de contenu : opportunités et défis</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="IA Générative" class="modal-news-image">
                    
                    <div class="modal-news-meta">
                        <div class="modal-news-date">
                            <i class="far fa-calendar-alt"></i> 10 Novembre 2023
                        </div>
                        <div class="modal-news-category">Monde</div>
                    </div>
                    
                    <div class="modal-news-content">
                        <p>Les outils d'intelligence artificielle comme ChatGPT, Midjourney et DALL-E transforment radicalement la façon dont le contenu est créé et consommé à l'échelle mondiale. Ces technologies promettent d'augmenter la productivité mais soulèvent également des questions éthiques et réglementaires.</p>
                        
                        <h3>Une adoption rapide</h3>
                        <p>ChatGPT a atteint 100 millions d'utilisateurs en seulement deux mois, devenant l'application à la croissance la plus rapide de l'histoire. Les entreprises du monde entier expérimentent ces outils pour la rédaction de contenu, la création d'images, le développement de code et même la composition musicale.</p>
                        
                        <blockquote>
                            "L'IA générative n'est pas une menace pour les créateurs humains, mais un outil qui peut amplifier leur créativité", estime Sarah Chen, directrice de l'innovation chez TechFuture.
                        </blockquote>
                        
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="ChatGPT">
                        
                        <h3>Défis réglementaires</h3>
                        <p>Les gouvernements et organismes de régulation s'efforcent de suivre le rythme de ces innovations. Des questions cruciales se posent concernant la propriété intellectuelle, la protection des données, la désinformation et l'impact sur l'emploi dans les secteurs créatifs.</p>
                        
                        <p>Malgré ces défis, l'IA générative représente un marché potentiel de 1,3 trillion de dollars d'ici 2032 selon les estimations, attirant des investissements massifs de la part des géants technologiques et des startups innovantes.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-share">
                        <p class="share-text">Partager cet article :</p>
                        <div class="share-icons">
                            <a href="#" class="share-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="share-icon"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Les autres modales suivent le même modèle -->
    <!-- Modal 4, 5, 6 seraient structurées de manière similaire -->

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

            // News Filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const newsCards = document.querySelectorAll('.news-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    newsCards.forEach(card => {
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

            // Add floating animation to random elements
            document.querySelectorAll('.news-card').forEach((card, index) => {
                if (index % 3 === 0) {
                    card.classList.add('floating');
                } else if (index % 4 === 0) {
                    card.classList.add('pulse');
                }
            });

            // Newsletter form submission
            const newsletterForm = document.querySelector('.newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const email = this.querySelector('.newsletter-input').value;
                    alert(`Merci pour votre inscription avec l'adresse : ${email}`);
                    this.reset();
                });
            }
        });
    </script>
</body>
</html>