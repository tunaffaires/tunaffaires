<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Équipe - TunaFFaires</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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

        /* Team Section */
        .team-section {
            padding: 80px 0;
            background: var(--light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .team-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            cursor: pointer;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .team-photo-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .team-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .team-card:hover .team-photo {
            transform: scale(1.05);
        }

        .team-info {
            padding: 1.5rem;
            text-align: center;
        }

        .team-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.3rem;
        }

        .team-role {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
        }

        .team-contact {
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            margin-top: 1rem;
        }

        .contact-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .contact-btn:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Modal Styles */
        .modal-team .modal-content {
            border-radius: 15px;
            border: none;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .modal-team .modal-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border-bottom: none;
            padding: 2rem 2rem 1rem;
            position: relative;
        }

        .modal-team .modal-body {
            padding: 2rem;
        }

        .team-modal-img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            margin: -80px auto 1.5rem;
            display: block;
            background: white;
            position: relative;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .modal-contact-buttons {
            display: flex;
            gap: 1rem;
            margin: 1.5rem 0;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-whatsapp {
            background: #25D366;
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

        .btn-whatsapp:hover {
            background: #128C7E;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
        }

        .btn-email {
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

        .btn-email:hover {
            background: var(--primary-light);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(46, 204, 113, 0.3);
        }

        /* Formulaire de contact dans modal */
        .contact-form {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 1.5rem;
            border-left: 4px solid var(--primary);
        }

        .contact-form h5 {
            color: var(--dark);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e1e5e9;
            padding: 0.75rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(9, 170, 57, 0.25);
        }

        .captcha-container {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            border: 1px solid #e1e5e9;
            margin: 1rem 0;
        }

        .captcha-code {
            font-family: 'Courier New', monospace;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 3px;
            background: linear-gradient(45deg, var(--primary), var(--primary-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            padding: 0.5rem;
            border-radius: 5px;
            text-align: center;
        }

        .btn-send {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            width: 100%;
        }

        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(9, 170, 57, 0.4);
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

        /* Animation des cartes */
        .team-card.animate {
            animation: cardEntrance 0.6s ease forwards;
        }

        @keyframes cardEntrance {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
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
            .video-hero h1 {
                font-size: 2.5rem;
            }
            
            .video-hero p {
                font-size: 1.1rem;
            }
            
            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
            }
            
            .modal-contact-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .team-photo-container {
                height: 200px;
            }
            
            .modal-team .modal-body {
                padding: 1.5rem;
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
            
            .team-grid {
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
                <h1 class="display-4 fw-bold mb-4">Notre Équipe d'Experts</h1>
                <p class="lead mb-4">Découvrez les talents et les esprits créatifs qui font de TunaFFaires une référence dans le domaine digital</p>
                <a href="#team" class="btn btn-primary btn-lg">
                    Rencontrer l'Équipe <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section" id="team">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Rencontrez Notre Équipe</h2>
                <p class="section-subtitle">Une équipe d'experts passionnés dédiée à votre succès</p>
            </div>

            <div class="team-grid">
                <!-- Membre 1: Moez Ben Said -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#teamModal" 
                     data-name="Moez Ben Said" 
                     data-role="CEO & Fondateur" 
                     data-email="moez@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/moez-bensaid"
                     data-image="https://www.tunaffaires.tn/img/team/team-1.jpg"
                     data-description="Visionnaire et stratège, Moez a fondé TunaFFaires avec une passion pour l'innovation digitale. Avec plus de 10 ans d'expérience dans le conseil aux entreprises, il guide la vision stratégique de l'entreprise et assure son expansion sur les marchés internationaux.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/team-1.jpg" alt="Moez Ben Said" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Moez Ben Said</h3>
                        <p class="team-role">CEO & Fondateur</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/moez-bensaid" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:moez@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 2: Kareem Boulakbech -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Kareem Boulakbech" 
                     data-role="COO" 
                     data-email="kreem@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/kareem-boulakbech"
                     data-image="https://www.tunaffaires.tn/img/team/kreem.jpg"
                     data-description="Expert en optimisation opérationnelle, Kareem transforme les visions stratégiques en résultats concrets. Avec un background en gestion de projets complexes, il supervise toutes les opérations de TunaFFaires et assure l'excellence opérationnelle.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/kreem.jpg" alt="Kareem Boulakbech" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Kareem Boulakbech</h3>
                        <p class="team-role">COO</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/kareem-boulakbech" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:kreem@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 3: Amine Jerbi -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="300" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Amine Jerbi" 
                     data-role="Deputy" 
                     data-email="amine@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/jerbi-amine-9974b873/"
                     data-image="https://www.tunaffaires.tn/img/team/jerbi.jpg"
                     data-description="Amine apporte son expertise en gestion de projet et développement stratégique. Son approche méthodique et son attention aux détails assurent le succès de chaque initiative. Il excelle dans la coordination des équipes et l'optimisation des processus.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/jerbi.jpg" alt="Amine Jerbi" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Amine Jerbi</h3>
                        <p class="team-role">Deputy</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/jerbi-amine-9974b873/" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:amine@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 4: Chedy Khelifi -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="400" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Chedy Khelifi" 
                     data-role="Innovateur Digital en Cybersécurité" 
                     data-email="chedy@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/chedy-khelifi"
                     data-image="https://www.tunaffaires.tn/img/team/chedy.jpg"
                     data-description="Expert en cybersécurité et innovation digitale, Chedy protège vos assets numériques avec des solutions cutting-edge. Sa maîtrise des technologies émergentes et son expertise en sécurité informatique font de lui un atout précieux.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/chedy.jpg" alt="Chedy Khelifi" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Chedy Khelifi</h3>
                        <p class="team-role">Innovateur Digital en Cybersécurité</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/chedy-khelifi" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:chedy@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 5: Nourshène Cheguini -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="500" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Nourshène Cheguini" 
                     data-role="Ambassadrice de l'Identité de l'Entreprise" 
                     data-email="noch@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/nourshene-cheguini"
                     data-image="https://www.tunaffaires.tn/img/team/noch.jpeg"
                     data-description="Nourshène incarne et promeut l'identité et les valeurs de notre entreprise. Son expertise en communication et son sens aigu du relationnel renforcent notre image de marque. Elle excelle dans la création de connexions authentiques.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/noch.jpeg" alt="Nourshène Cheguini" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Nourshène Cheguini</h3>
                        <p class="team-role">Ambassadrice de l'Identité</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/nourshene-cheguini" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:noch@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 6: Sihem Ben Ali -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="600" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Sihem Ben Ali" 
                     data-role="Stratège Commerciale Tunisie" 
                     data-email="sihem@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/sihem-ben-ali"
                     data-image="https://www.tunaffaires.tn/img/team/sihem.jpg"
                     data-description="Sihem développe et met en œuvre les stratégies commerciales pour le marché tunisien. Sa connaissance approfondie du marché local et son réseau étendu permettent à TunaFFaires de créer des opportunités business significatives.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/sihem.jpg" alt="Sihem Ben Ali" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Sihem Ben Ali</h3>
                        <p class="team-role">Stratège Commerciale Tunisie</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/sihem-ben-ali" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:sihem@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 7: Ramzy Mechri -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="700" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Ramzy Mechri" 
                     data-role="Explorateur de Marchés Internationaux" 
                     data-email="ramzy@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/ramzy-mechri"
                     data-image="https://www.tunaffaires.tn/img/team/ramzy.jpeg"
                     data-description="Ramzy identifie et développe de nouvelles opportunités sur les marchés internationaux. Sa vision globale et sa compréhension des dynamiques interculturelles permettent à TunaFFaires d'étendre son influence au-delà des frontières.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/ramzy.jpeg" alt="Ramzy Mechri" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Ramzy Mechri</h3>
                        <p class="team-role">Explorateur de Marchés Internationaux</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/ramzy-mechri" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:ramzy@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 8: Ibtissem Sliti -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="800" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Ibtissem Sliti" 
                     data-role="Comportementaliste" 
                     data-email="ibtissem@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/ibtissem-sliti"
                     data-image="https://www.tunaffaires.tn/img/team/ibtissem.jpg"
                     data-description="Ibtissem analyse les comportements pour optimiser les interactions clients et équipes. Son expertise en psychologie comportementale permet de comprendre les motivations profondes et d'améliorer l'expérience utilisateur.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/ibtissem.jpg" alt="Ibtissem Sliti" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Ibtissem Sliti</h3>
                        <p class="team-role">Comportementaliste</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/ibtissem-sliti" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:ibtissem@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 9: Sofiene Habbechi -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="900" data-bs-toggle="modal" data-bs-target="#teamModal"
                     data-name="Sofiene Habbechi" 
                     data-role="Expert en Stratégie Digitale" 
                     data-email="essou@tunaffaires.tn" 
                     data-phone="+21624604475" 
                     data-linkedin="https://www.linkedin.com/in/sofiene-habbechi"
                     data-image="https://www.tunaffaires.tn/img/team/essou.jpg"
                     data-description="Sofiene conçoit et implémente des stratégies digitales performantes pour nos clients. Sa maîtrise des dernières tendances digitales et son approche data-driven permettent de créer des campagnes qui génèrent des résultats mesurables.">
                    <div class="team-photo-container">
                        <img src="https://www.tunaffaires.tn/img/team/essou.jpg" alt="Sofiene Habbechi" class="team-photo">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Sofiene Habbechi</h3>
                        <p class="team-role">Expert en Stratégie Digitale</p>
                        <div class="team-contact">
                            <a href="https://www.linkedin.com/in/sofiene-habbechi" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:essou@tunaffaires.tn" class="contact-btn" onclick="event.stopPropagation();">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="https://wa.me/21624604475" class="contact-btn" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Modal -->
    <div class="modal fade modal-team" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" alt="" class="team-modal-img" id="modalMemberImage">
                    <h3 class="modal-title" id="modalMemberName"></h3>
                    <p class="text-primary fw-bold mb-3" id="modalMemberRole"></p>
                    <p class="text-muted mb-4" id="modalMemberDescription"></p>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><i class="fas fa-envelope me-2 text-primary"></i> <span id="modalMemberEmail"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-phone me-2 text-primary"></i> <span id="modalMemberPhone"></span></p>
                        </div>
                    </div>

                    <div class="modal-contact-buttons">
                        <a href="#" class="btn-whatsapp" id="modalWhatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="#" class="btn-email" id="modalEmail">
                            <i class="fas fa-envelope"></i> Email direct
                        </a>
                    </div>

                    <!-- Formulaire de contact -->
                    <div class="contact-form">
                        <h5><i class="fas fa-paper-plane me-2"></i>Envoyer un message</h5>
                        <form id="contactMemberForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Votre nom complet" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Votre adresse email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Sujet du message" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Votre message..." required></textarea>
                            </div>
                            
                            <!-- CAPTCHA -->
                            <div class="captcha-container">
                                <p class="small mb-2">Veuillez recopier le code ci-dessous :</p>
                                <div class="captcha-code" id="captchaText"></div>
                                <div class="mt-2">
                                    <input type="text" class="form-control text-center" placeholder="Entrez le code" id="captchaInput" required>
                                    <div class="mt-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="generateCaptcha()">
                                            <i class="fas fa-redo me-1"></i> Nouveau code
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-send">
                                <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

        // Génération de CAPTCHA
        function generateCaptcha() {
            const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
                captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('captchaText').textContent = captcha;
            document.getElementById('captchaInput').value = '';
        }

        // Gestion de la modal d'équipe
        function setupTeamModal() {
            const teamModal = document.getElementById('teamModal');
            teamModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                
                // Récupérer les données
                const name = button.getAttribute('data-name');
                const role = button.getAttribute('data-role');
                const email = button.getAttribute('data-email');
                const phone = button.getAttribute('data-phone');
                const linkedin = button.getAttribute('data-linkedin');
                const image = button.getAttribute('data-image');
                const description = button.getAttribute('data-description');

                // Mettre à jour le contenu de la modal
                document.getElementById('modalMemberName').textContent = name;
                document.getElementById('modalMemberRole').textContent = role;
                document.getElementById('modalMemberEmail').textContent = email;
                document.getElementById('modalMemberPhone').textContent = phone;
                document.getElementById('modalMemberDescription').textContent = description;
                document.getElementById('modalMemberImage').src = image;

                // Mettre à jour les liens
                const whatsappMessage = `Bonjour ${name}, je vous contacte depuis le site TunaFFaires`;
                document.getElementById('modalWhatsapp').href = `https://wa.me/${phone.replace(/\s/g, '')}?text=${encodeURIComponent(whatsappMessage)}`;
                document.getElementById('modalEmail').href = `mailto:${email}?subject=Contact depuis TunaFFaires&body=Bonjour ${name},`;

                // Générer un nouveau CAPTCHA
                generateCaptcha();
                
                // Réinitialiser le formulaire
                document.getElementById('contactMemberForm').reset();
            });
        }

        // Gestion de l'envoi du formulaire
        function setupContactForm() {
            document.getElementById('contactMemberForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const captchaInput = document.getElementById('captchaInput').value;
                const captchaText = document.getElementById('captchaText').textContent;
                
                if (captchaInput !== captchaText) {
                    alert('❌ Code CAPTCHA incorrect. Veuillez réessayer.');
                    generateCaptcha();
                    return;
                }
                
                // Simulation d'envoi réussi
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                // Animation de chargement
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Envoi en cours...';
                submitBtn.disabled = true;
                
                // Simuler l'envoi
                setTimeout(() => {
                    // Message de succès
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Message envoyé !';
                    submitBtn.style.background = '#28a745';
                    
                    setTimeout(() => {
                        // Réinitialiser
                        this.reset();
                        generateCaptcha();
                        submitBtn.innerHTML = originalText;
                        submitBtn.style.background = '';
                        submitBtn.disabled = false;
                        
                        // Message de confirmation
                        const memberName = document.getElementById('modalMemberName').textContent;
                        alert(`✅ Votre message a été envoyé à ${memberName} ! Nous vous répondrons dans les plus brefs délais.`);
                    }, 1500);
                }, 2000);
            });
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            setupTeamModal();
            setupContactForm();
            generateCaptcha();
        });
    </script>
</body>
</html>