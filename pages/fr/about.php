<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission & Valeurs - TunaFFaires</title>
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

        /* Founder Section */
.founder-section blockquote {
  border-left: 3px solid #d32f2f;
  padding-left: 15px;
  font-style: italic;
  color: #444;
}
.founder-signature {
  font-family: 'Georgia', serif;
  font-size: 1.1rem;
  margin-top: 30px;
}
.founder-content p {
  line-height: 1.8;
  font-size: 1.05rem;
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

        .mission-icon {
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

        .mission-card:hover .mission-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--primary);
            color: white;
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

        /* Commitment Section */
        .commitment-section {
            background: white;
            padding: 80px 0;
        }

        .commitment-card {
            background: white;
            padding: 40px 30px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .commitment-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--secondary);
        }

        .commitment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .commitment-icon {
            width: 80px;
            height: 80px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
            transition: var(--transition);
        }

        .commitment-card:hover .commitment-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--secondary);
            color: var(--dark);
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
            
            .founder-content h2, .mission-content h2 {
                text-align: center;
            }
            
            .founder-content h2:after, .mission-content h2:after {
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
                <h1 class="display-4 fw-bold mb-4">Notre Mission & Nos Valeurs</h1>
                <p class="lead mb-4">L'ADN qui guide chaque action chez TunaFFaires</p>
                <a href="#founder" class="btn btn-primary btn-lg pulse">
                    Découvrir Notre Vision <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

<!-- Founder Section -->
<section style="max-width:900px;margin:60px auto;padding:40px;background:#fff;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.05);font-family:'Poppins',sans-serif;color:#111111;line-height:1.5;font-size:18px;">
  <div style="display:flex;flex-wrap:wrap;align-items:flex-start;gap:30px;">

    <!-- Photo du fondateur -->
    <div style="flex:0 0 180px;">
      <img src="http://tunaffaires.tn/img/index.png" alt="Moez Ben Said" style="width:100%;border-radius:12px;box-shadow:0 4px 15px rgba(0,0,0,0.1);">
    </div>

    <!-- Texte du fondateur -->
    <div style="flex:1;">
      <p>
        Chez <strong>Tunaffaires</strong>, nous ne travaillons pas de manière conventionnelle. 
        Nos clients sont plus que des partenaires, ce sont des amis. 
        Ensemble, nous imaginons, bâtissons et propulsons les projets qui font vibrer la Tunisie et bien au-delà.
      </p>

      <p>
        Nous accompagnons chaque entreprise, quel que soit son budget ou son stade de développement, 
        parce que l’audace n’a pas de prix et le talent n’a pas de frontières.
      </p>

      <p>
        Notre vision est simple : aider ceux qui osent à se faire entendre, à se faire voir et à exister dans un monde en constante mutation.
      </p>

      <blockquote style="margin:20px 0;padding-left:20px;border-left:4px solid #111;font-style:italic;">
        « Reality is wrong, dreams are for real. » — 2Pac
      </blockquote>

      <p>
        En tant que créatif et musicien, j’ai toujours cru que chaque marque a sa propre mélodie, son propre flow. 
        C’est cette énergie que <strong>Tunaffaires</strong> insuffle dans chaque projet.
      </p>

      <p>
        Nous ne sommes pas un simple prestataire, mais une équipe qui pense différemment, 
        qui agit avec cœur, stratégie et intuition. 
        Nous voulons que chaque marque raconte une histoire authentique, qu’elle soit locale ou internationale.
      </p>

      <blockquote style="margin:20px 0;padding-left:20px;border-left:4px solid #111;font-style:italic;">
        « Ce n’est pas la réalité qu’il faut craindre, mais la peur de la découvrir. » — Morpheus, Matrix
      </blockquote>

      <p>
        Et pour reprendre les mots de Béji Caïd Essebsi : 
        <em>« La Tunisie a besoin de tous ses enfants. »</em><br>
        C’est dans cet esprit que nous avançons, ensemble.
      </p>

      <div style="text-align:right;font-weight:bold;font-size:20px;margin-top:30px;">
        Moez Ben Said
      </div>
    </div>
  </div>
</section>



    <!-- Mission Section -->
    <section class="mission-section" id="mission">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5" data-aos="fade-up">
                    <div class="mission-content text-center">
                        <h2 class="section-title">Notre Mission</h2>
                        <p class="lead">
                            TunAffaires accompagne les entreprises tunisiennes et internationales dans leur croissance à travers des stratégies de communication, de marketing digital et de transformation numérique innovantes.
                        </p>
                        <p>
                            Notre mission est de connecter les marques à leurs publics, de renforcer leur image et de générer des résultats mesurables, durables et alignés avec leurs objectifs business.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-card text-center">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4>Stratégie Digitale</h4>
                        <p>Élaboration de stratégies digitales sur mesure pour maximiser l'impact et le retour sur investissement.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="mission-card text-center">
                        <div class="mission-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Croissance Durable</h4>
                        <p>Accompagnement dans la transformation digitale pour une croissance pérenne et mesurable.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="mission-card text-center">
                        <div class="mission-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Innovation Continue</h4>
                        <p>Intégration des dernières technologies et tendances pour rester à la pointe du marché.</p>
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
                <!-- Intégrité & Transparence -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="value-title">Intégrité & Transparence</h4>
                    <p class="value-description">
                        Nous menons nos actions avec honnêteté, clarté et loyauté, pour mériter la confiance de nos clients et partenaires.
                    </p>
                </div>
                
                <!-- Excellence professionnelle -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="value-title">Excellence Professionnelle</h4>
                    <p class="value-description">
                        Nous visons l'excellence dans chaque détail, chaque prestation, pour offrir un service de haute qualité.
                    </p>
                </div>
                
                <!-- Créativité innovante -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="value-title">Créativité Innovante</h4>
                    <p class="value-description">
                        Nous encourageons l'innovation, l'audace dans les idées pour proposer des solutions originales et percutantes.
                    </p>
                </div>
                
                <!-- Réactivité & flexibilité -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h4 class="value-title">Réactivité & Flexibilité</h4>
                    <p class="value-description">
                        Nous répondons rapidement, nous adaptons nos stratégies aux évolutions, aux retours, aux urgences.
                    </p>
                </div>
                
                <!-- Proximité & écoute client -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="value-title">Proximité & Écoute Client</h4>
                    <p class="value-description">
                        Nous plaçons le client au centre, comprenons ses besoins, dialoguons pour co-construire des solutions pertinentes.
                    </p>
                </div>
                
                <!-- Orientée résultat & performance -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="value-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h4 class="value-title">Résultat & Performance</h4>
                    <p class="value-description">
                        Nos actions sont guidées par des objectifs clairs, mesurables, avec un suivi rigoureux pour garantir un retour sur investissement.
                    </p>
                </div>
                
                <!-- Respect & responsabilité -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="700">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="value-title">Respect & Responsabilité</h4>
                    <p class="value-description">
                        Respect des engagements, des personnes, des langues, des cultures ; responsabilité dans ce que nous faisons et ses impacts.
                    </p>
                </div>
                
                <!-- Apprentissage continu -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="800">
                    <div class="value-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="value-title">Apprentissage Continu</h4>
                    <p class="value-description">
                        Nous nous formons, explorons, évoluons sans cesse pour rester à la pointe et apporter toujours plus de valeur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment Section -->
    <section class="commitment-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Notre Engagement</h2>
                    <p class="section-subtitle">Comment nos valeurs se traduisent dans notre travail au quotidien</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="commitment-card">
                        <div class="commitment-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h4>Accompagnement Personnalisé</h4>
                        <p>Chaque client bénéficie d'un accompagnement sur mesure, adapté à ses objectifs spécifiques et à son secteur d'activité.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="commitment-card">
                        <div class="commitment-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h4>Transparence des Résultats</h4>
                        <p>Nous fournissons des rapports détaillés et transparents sur les performances de vos campagnes et leur impact business.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="commitment-card">
                        <div class="commitment-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Éthique et Déontologie</h4>
                        <p>Nous respectons scrupuleusement les règles éthiques et déontologiques dans toutes nos interventions et recommandations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Prêt à collaborer avec une équipe qui partage vos valeurs ?</h2>
                <p>Rejoignez les entreprises qui nous font confiance pour leur transformation digitale. Discutons de votre projet et créons ensemble une stratégie alignée avec vos valeurs et objectifs.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="cta-btn cta-btn-primary">Démarrer un projet</a>
                    <a href="rdv.php" class="cta-btn cta-btn-secondary">Réserver une consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <?php include 'includes/footer.php'; ?>
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
        document.querySelectorAll('.value-card, .commitment-card').forEach((card, index) => {
            if (index % 3 === 0) {
                card.classList.add('floating');
            } else if (index % 4 === 0) {
                card.classList.add('pulse');
            }
        });
    </script>
</body>
</html>