 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - TunaFFaires</title>
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

        /* Mission Section */
        .mission-section {
            padding: 80px 0;
            background: white;
        }

        .mission-content h2 {
            text-align: left;
        }

        .mission-content h2:after {
            left: 0;
            transform: none;
        }

        .mission-image {
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            position: relative;
        }

        .mission-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .mission-image:hover img {
            transform: scale(1.05);
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

        /* Values Section */
        .values-section {
            background: var(--light);
            padding: 80px 0;
        }

        .values-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .value-card {
            background: white;
            padding: 40px 30px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
            flex: 1;
            min-width: 250px;
            max-width: 280px;
        }

        .value-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: var(--dark);
            transition: var(--transition);
        }

        .value-card:hover .value-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--primary);
            color: white;
        }

        .value-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .value-description {
            color: var(--gray);
            line-height: 1.7;
        }

        /* Expertise Section */
        .expertise-section {
            padding: 80px 0;
            background: white;
        }

        .expertise-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .expertise-card {
            background: white;
            padding: 30px 20px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            color: white;
            z-index: 1;
        }

        .expertise-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(1, 110, 19, 0.85);
            z-index: -1;
            transition: var(--transition);
        }

        .expertise-card:hover:before {
            background: rgba(233, 185, 73, 0.9);
        }

        .expertise-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .expertise-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 1.8rem;
            color: white;
            transition: var(--transition);
        }

        .expertise-card:hover .expertise-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--primary);
        }

        .expertise-card h5 {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .expertise-card p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.7;
            font-size: 0.9rem;
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

            .values-row {
                flex-direction: column;
                align-items: center;
            }

            .value-card {
                max-width: 100%;
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
            
            .mission-content h2 {
                text-align: center;
            }
            
            .mission-content h2:after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }

            .expertise-grid {
                grid-template-columns: repeat(2, 1fr);
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
            
            .value-card, .expertise-card {
                padding: 30px 20px;
            }

            .expertise-grid {
                grid-template-columns: 1fr;
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
                <h1 class="display-4 fw-bold mb-4">Tunaffaires Services</h1>
                <p class="lead mb-4">Le Hub d'Affaires Digital en Tunisie</p>
                <a href="#mission" class="btn btn-primary btn-lg pulse">
                    Découvrir Notre Vision <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
<section class="mission-section" id="mission">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-lg-6" data-aos="fade-right">
        <div class="mission-content">
          <h2 class="section-title">Qui Sommes-Nous ?</h2>

          <p class="lead mb-4">
            <strong>Tunaffaires</strong> est un lieu où les idées se croisent et deviennent des projets concrets. <b>Notre équipe</b> est composée de profils <b>différents</b>, chacun apportant son <b>énergie</b>, sa créativité et sa manière unique de voir le monde. <b>Ensemble</b>, nous travaillons, expérimentons et inventons des solutions qui font vraiment la différence pour les entreprises, <b>grandes ou petites</b>, en Tunisie et à l’international.
          </p>

          <p class="mb-4">
            Nous ne faisons pas les choses comme tout le monde. Nos clients ne sont pas des numéros ou des contrats, ce sont des <strong>partenaires, des complices, parfois même des amis</strong>. Nous partageons avec eux nos réussites, nos idées, et parfois nos défis, pour avancer toujours plus loin.
          </p>

          <p class="mb-4">
            Notre mission est simple : <strong>aider chaque entreprise à grandir, se raconter et toucher les bonnes personnes</strong> grâce à des projets concrets, créatifs et adaptés à sa réalité. Chaque mission est unique, chaque collaboration est différente, et c’est cette diversité qui nous fait avancer.
          </p>

          <p class="mb-4">
            Chez <strong>Tunaffaires</strong>, nous croyons que le digital n’est pas juste une technique ou un outil, c’est un moyen de créer du lien, de raconter des histoires et de construire des projets avec des humains pour des humains.
          </p>

                    <div class="d-flex gap-3 mt-4 flex-wrap">
                        <a href="<?php echo url('services'); ?>" class="btn btn-primary">Nos Services</a>
                        <a href="<?php echo url('contact'); ?>" class="btn btn-secondary">Nous Contacter</a>
                    </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left">
        <div class="mission-image floating">
          <img src="http://tunaffaires.tn/img/index.png" alt="Équipe Tunaffaires" class="img-fluid rounded shadow">
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
                        <span class="stat-number" data-count="150">0</span>
                        <div class="stat-text">Projets Réalisés</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="85">0</span>
                        <div class="stat-text">Clients Satisfaits</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="22">0</span>
                        <div class="stat-text">Années d'Expérience</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item bounce">
                        <span class="stat-number" data-count="7">0</span>
                        <div class="stat-text">Experts Métiers</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos Valeurs Fondamentales</h2>
                    <p class="section-subtitle">Les principes qui guident notre action au quotidien</p>
                </div>
            </div>
            
            <div class="values-row">
                <!-- Excellence -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="value-title">Excellence</h4>
                    <p class="value-description">
                        Nous plaçons la qualité et la rigueur au cœur de nos actions pour créer de la valeur durable et mesurable.
                    </p>
                </div>
                
                <!-- Intégrité -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="value-title">Intégrité</h4>
                    <p class="value-description">
                        Nous travaillons avec transparence, respect et éthique, en veillant toujours à protéger vos intérêts.
                    </p>
                </div>
                
                <!-- Innovation -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4 class="value-title">Innovation</h4>
                    <p class="value-description">
                        Nous intégrons des approches modernes et des outils numériques pour stimuler la croissance et anticiper les défis.
                    </p>
                </div>
                
                <!-- Valeur Humaine -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="value-title">Valeur Humaine</h4>
                    <p class="value-description">
                        Nous valorisons la dimension humaine, l'épanouissement des équipes et le développement d'un leadership responsable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Areas -->
    <section class="expertise-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos Domaines d'Expertise</h2>
                    <p class="section-subtitle">15 domaines d'expertise pour répondre à tous vos besoins d'entreprise</p>
                </div>
            </div>
            
            <div class="expertise-grid">
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="100" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5>Stratégie d'Entreprise</h5>
                    <p>Élaboration de plans stratégiques, analyse de marché et positionnement concurrentiel.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="200" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h5>Marketing Digital</h5>
                    <p>Stratégies digitales complètes, référencement, publicité en ligne et gestion des médias sociaux.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="300" style="background-image: url('https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h5>Export en Afrique</h5>
                    <p>Accompagnement pour pénétrer les marchés africains et développement de réseaux de distribution.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="400" style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h5>Accompagnement au Lancement</h5>
                    <p>Support complet pour le lancement de nouvelles entreprises, produits ou services.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="500" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h5>Mise à Niveau d'Entreprises</h5>
                    <p>Diagnostic et plans d'action pour moderniser les processus et améliorer la productivité.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="600" style="background-image: url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5>Assistance à l'Acquisition</h5>
                    <p>Due diligence, négociation et intégration pour des fusions-acquisitions réussies.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="700" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-digital-tachograph"></i>
                    </div>
                    <h5>Transformation Digitale</h5>
                    <p>Accompagnement dans l'adoption des technologies digitales pour optimiser les processus.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="800" style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h5>Conseil Financier</h5>
                    <p>Optimisation financière, recherche de financements et évaluation d'entreprises.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="900" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h5>Gestion de Projet</h5>
                    <p>Planification, exécution et contrôle de projets complexes avec des méthodologies éprouvées.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="1000" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5>Formation Professionnelle</h5>
                    <p>Programmes de formation sur mesure pour développer les compétences de vos équipes.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="1100" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h5>Audit et Conformité</h5>
                    <p>Audits organisationnels, due diligence réglementaire et mise en conformité.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="1200" style="background-image: url('https://images.unsplash.com/photo-1563010880-76f4bd60c16a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h5>Développement Commercial</h5>
                    <p>Stratégies de croissance commerciale et optimisation du cycle de vente.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="1300" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5>Innovation et R&D</h5>
                    <p>Stratégies d'innovation, gestion de projets R&D et valorisation de la propriété intellectuelle.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="1400" style="background-image: url('https://images.unsplash.com/photo-1542744173-05336fcc7ad4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5>Management et Leadership</h5>
                    <p>Développement des compétences managériales, coaching des dirigeants et transformation culturelle.</p>
                </div>
                
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="1500" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <div class="expertise-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h5>Responsabilité Sociétale (RSE)</h5>
                    <p>Stratégies RSE, reporting extra-financier et développement de pratiques durables et éthiques.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Prêt à transformer votre entreprise ?</h2>
                <p>Rejoignez les 85 entreprises qui nous font déjà confiance. Discutons de votre projet et créons ensemble une stratégie sur mesure pour accélérer votre croissance.</p>
                <div class="cta-buttons">
                    <a href="<?php echo url('contact'); ?>" class="cta-btn cta-btn-primary">Démarrer un projet</a>
                    <a href="<?php echo url('rdv'); ?>" class="cta-btn cta-btn-secondary">Réserver une consultation</a>
                </div>
            </div>
        </div>
    </section>


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
        
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileToggle.innerHTML = navMenu.classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
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

        observer.observe(statsSection);

        // Add floating animation to random elements
        document.querySelectorAll('.value-card, .expertise-card').forEach((card, index) => {
            if (index % 3 === 0) {
                card.classList.add('floating');
            } else if (index % 4 === 0) {
                card.classList.add('pulse');
            }
        });
    </script>
</body>
</html>