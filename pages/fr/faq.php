<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - TunAffaires.tn | Questions Fréquentes</title>
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

        /* FAQ Hero Section */
        .faq-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 150px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .faq-hero:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1434626881859-194d67b2b86f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            opacity: 0.1;
        }

        .faq-hero-content {
            position: relative;
            z-index: 2;
        }

        .faq-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .faq-hero p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .search-box {
            max-width: 500px;
            margin: 0 auto;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 50px;
            border: none;
            font-size: 1rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .search-box button {
            position: absolute;
            right: 5px;
            top: 5px;
            background: var(--secondary);
            color: var(--dark);
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-box button:hover {
            background: var(--secondary-light);
        }

        /* Floating Sidebar Navigation */
        .faq-sidebar {
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 20px 15px;
            z-index: 999;
            width: 220px;
            transition: var(--transition);
            max-height: 80vh;
            overflow-y: auto;
        }

        .faq-sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .faq-sidebar::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        .faq-sidebar.hidden {
            opacity: 0;
            transform: translateY(-50%) translateX(-100%);
        }

        .faq-sidebar-toggle {
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 998;
            box-shadow: var(--shadow);
            transition: var(--transition);
            display: none;
        }

        .faq-sidebar-toggle:hover {
            background: var(--primary-light);
            transform: translateY(-50%) scale(1.1);
        }

        .faq-nav-container {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .faq-nav-link {
            padding: 12px 15px;
            background: var(--light);
            border-radius: 8px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            border: none;
            text-align: left;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .faq-nav-link i {
            width: 20px;
            text-align: center;
            font-size: 0.8rem;
        }

        .faq-nav-link:hover, .faq-nav-link.active {
            background: var(--primary);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(9, 170, 57, 0.3);
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background: white;
            margin-left: 260px;
            transition: var(--transition);
        }

        .faq-section.full-width {
            margin-left: 0;
        }

        .faq-category {
            margin-bottom: 60px;
            scroll-margin-top: 100px;
        }

        .faq-category h3 {
            color: var(--primary);
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light);
            font-size: 1.8rem;
        }

        .faq-item {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 20px;
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-item:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .faq-question {
            padding: 25px 30px;
            background: var(--light);
            border: none;
            width: 100%;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .faq-question:hover {
            background: var(--secondary-light);
        }

        .faq-question i {
            transition: var(--transition);
        }

        .faq-question[aria-expanded="true"] i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-answer.show {
            padding: 25px 30px;
            max-height: 1000px;
        }

        .faq-answer p {
            margin-bottom: 15px;
        }

        .faq-answer ul {
            margin-bottom: 15px;
            padding-left: 20px;
        }

        .faq-answer li {
            margin-bottom: 8px;
            color: var(--gray);
        }

        .tarif-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }

        .tarif-link:hover {
            text-decoration: underline;
        }

        /* Contact CTA Section */
        .contact-cta {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            padding: 80px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            margin-left: 260px;
            transition: var(--transition);
        }

        .contact-cta.full-width {
            margin-left: 0;
        }

        .contact-cta:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            opacity: 0.1;
        }

        .contact-cta-content {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .contact-cta h2 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .contact-cta p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .contact-cta .btn {
            background: var(--secondary);
            color: var(--dark);
        }

        .contact-cta .btn:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
            margin-left: 260px;
            transition: var(--transition);
        }

        footer.full-width {
            margin-left: 0;
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

        /* Responsive */
        @media (max-width: 1200px) {
            .faq-sidebar {
                width: 200px;
            }
            
            .faq-section,
            .contact-cta,
            footer {
                margin-left: 240px;
            }
        }

        @media (max-width: 992px) {
            h1 {
                font-size: 2.8rem;
            }
            
            h2 {
                font-size: 2.2rem;
            }
            
            .faq-hero h1 {
                font-size: 3rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }

            .faq-sidebar {
                transform: translateY(-50%) translateX(-100%);
                opacity: 0;
            }

            .faq-sidebar.active {
                transform: translateY(-50%) translateX(0);
                opacity: 1;
            }

            .faq-sidebar-toggle {
                display: flex;
            }

            .faq-section,
            .contact-cta,
            footer {
                margin-left: 0;
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
            
            .faq-hero h1 {
                font-size: 2.5rem;
            }
            
            .faq-hero p {
                font-size: 1.1rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }

            .faq-question {
                padding: 20px;
                font-size: 1rem;
            }

            .faq-answer.show {
                padding: 20px;
            }

            .faq-sidebar {
                width: 280px;
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
            
            .faq-hero {
                padding: 130px 0 60px;
            }
            
            .faq-hero h1 {
                font-size: 2.2rem;
            }

            .faq-sidebar {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <?php include 'includes/header.php'; ?>
    </header>

    <!-- Floating Sidebar Navigation -->
    <div class="faq-sidebar-toggle" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </div>

    <nav class="faq-sidebar" id="faqSidebar">
        <div class="faq-nav-container">
            <a href="#presentation" class="faq-nav-link active">
                <i class="fas fa-info-circle"></i>
                <span>Présentation</span>
            </a>
            <a href="#services" class="faq-nav-link">
                <i class="fas fa-cogs"></i>
                <span>Services & Solutions</span>
            </a>
            <a href="#tarifs" class="faq-nav-link">
                <i class="fas fa-tags"></i>
                <span>Tarifs & Paiements</span>
            </a>
            <a href="#projets" class="faq-nav-link">
                <i class="fas fa-project-diagram"></i>
                <span>Projets & Accompagnement</span>
            </a>
            <a href="#solutions" class="faq-nav-link">
                <i class="fas fa-magic"></i>
                <span>Solutions Digitales</span>
            </a>
            <a href="#support" class="faq-nav-link">
                <i class="fas fa-headset"></i>
                <span>Support & Contact</span>
            </a>
            <a href="#technique" class="faq-nav-link">
                <i class="fas fa-tools"></i>
                <span>Questions Techniques</span>
            </a>
        </div>
    </nav>

    <!-- FAQ Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <div class="faq-hero-content" data-aos="fade-up">
                <h1>Foire Aux Questions</h1>
                <p>Trouvez rapidement des réponses à vos questions sur nos services, tarifs et solutions digitales</p>
                <div class="search-box" data-aos="fade-up" data-aos-delay="200">
                    
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faqSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2>Questions Fréquentes</h2>
                    <p class="section-subtitle">Plus de 30 questions-réponses organisées par thème</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Section Présentation Générale -->
                    <div class="faq-category" id="presentation" data-aos="fade-up">
                        <h3><i class="fas fa-info-circle me-2"></i>Présentation Générale</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Qu'est-ce que TunAffaires.tn ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq1" class="faq-answer collapse">
                                <p>TunAffaires.tn est un écosystème digital tunisien qui propose des solutions gratuites et premium pour accompagner les entreprises, les entrepreneurs, les talents et les étudiants dans leur développement : communication, mentorat, export, cartes de visite intelligentes, et bien plus.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Qui se cache derrière TunAffaires ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq2" class="faq-answer collapse">
                                <p>Une équipe tunisienne passionnée, issue des mondes du digital, du marketing, de la communication et de l'accompagnement entrepreneurial. Nous connaissons le terrain et les réalités des entreprises locales.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Quelle est la vision de TunAffaires ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq3" class="faq-answer collapse">
                                <p>Notre mission est de « digitaliser le succès tunisien » en offrir des outils concrets, un réseau solide et un accompagnement humain et stratégique.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Les autres sections restent identiques -->
                    <!-- Section Services & Solutions -->
                    <div class="faq-category" id="services" data-aos="fade-up">
                        <h3><i class="fas fa-cogs me-2"></i>Services & Solutions</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Quels sont les services phares de TunAffaires ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq4" class="faq-answer collapse">
                                <p>Nous proposons :</p>
                                <ul>
                                    <li><strong>TunAnnu</strong> : annuaire gratuit des entreprises tunisiennes</li>
                                    <li><strong>TuniPro</strong> : cartes de visite digitales avec QR code</li>
                                    <li><strong>TuniMentors</strong> : mentorat et formations</li>
                                    <li><strong>TuniCasting</strong> : gestion des talents et castings</li>
                                    <li><strong>TunAffaires CRM</strong> : gestion de prospection et export via WhatsApp</li>
                                    <li><strong>Accompagnement création d'entreprise</strong></li>
                                    <li><strong>Communication digitale & événementiel</strong></li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq5">
                                TunAnnu est-il vraiment gratuit ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq5" class="faq-answer collapse">
                                <p>Oui ! Chaque entreprise tunisienne peut créer sa fiche gratuitement sur TunAnnu. Aucun frais caché.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Comment fonctionne TuniPro ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq6" class="faq-answer collapse">
                                <p>Avec TuniPro, vous créez en quelques clics une carte de visite digitale personnalisée, avec QR code, liens sociaux, portfolio et coordonnées. Idéal pour le networking.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq7">
                                TuniCasting s'adresse à qui ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq7" class="faq-answer collapse">
                                <p>Aux agences, marques, mannequins, acteurs, influenceurs et tous les talents souhaitant se faire connaître ou gérer leurs castings professionnellement.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq8">
                                Le CRM WhatsApp est-il adapté aux débutants ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq8" class="faq-answer collapse">
                                <p>Absolument ! Notre CRM est conçu pour être intuitif. Nous fournissons également une formation et un support pour vous aider à maîtriser rapidement l'outil.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section Tarifs & Paiements -->
                    <div class="faq-category" id="tarifs" data-aos="fade-up">
                        <h3><i class="fas fa-tags me-2"></i>Tarifs & Paiements</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq9">
                                Où puis-je consulter vos tarifs détaillés ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq9" class="faq-answer collapse">
                                <p>Vous pouvez consulter notre politique de tarifs transparents complète sur la page <a href="tarifs.php" class="tarif-link">Tarifs & Services</a>. Tous nos prix sont indiqués en DT HT avec une transparence totale.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq10">
                                Proposez-vous des forfaits mensuels pour la gestion des réseaux sociaux ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq10" class="faq-answer collapse">
                                <p>Oui ! Nous proposons trois packs : Standard (590 DT/mois), Premium (950 DT/mois) et Entreprise (1450 DT/mois). Consultez notre <a href="tarifs.php" class="tarif-link">page tarifs</a> pour le détail complet de chaque offre.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq11">
                                Quel est le tarif pour la création d'un site e-commerce ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq11" class="faq-answer collapse">
                                <p>Un site e-commerce professionnel démarre à 5 700 DT. Ce prix inclut la boutique en ligne complète, la gestion des produits, les paiements en ligne et le SEO. <a href="tarifs.php" class="tarif-link">Voir tous nos tarifs web</a>.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq12">
                                Acceptez-vous les paiements en plusieurs fois ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq12" class="faq-answer collapse">
                                <p>Oui, pour les projets de plus de 2 000 DT, nous proposons un échelonnement sur 2 à 3 mois sans frais supplémentaires.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq13">
                                Y a-t-il des frais cachés dans vos devis ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq13" class="faq-answer collapse">
                                <p>Non, tous nos devis sont transparents et détaillés. Chaque poste est expliqué clairement et validé avec vous avant le début du projet.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section Projets & Accompagnement -->
                    <div class="faq-category" id="projets" data-aos="fade-up">
                        <h3><i class="fas fa-project-diagram me-2"></i>Projets & Accompagnement</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq14">
                                Comment se déroule un projet type avec TunAffaires ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq14" class="faq-answer collapse">
                                <p>Notre processus :</p>
                                <ul>
                                    <li>Audit et analyse de vos besoins</li>
                                    <li>Proposition détaillée et devis</li>
                                    <li>Validation et planning</li>
                                    <li>Réalisation avec points d'étape réguliers</li>
                                    <li>Livraison et formation</li>
                                    <li>Suivi et support</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq15">
                                Proposez-vous un accompagnement à la création d'entreprise ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq15" class="faq-answer collapse">
                                <p>Oui ! Notre Pack Start à 1 500 DT inclut l'aide à la création (business model, formalités légales, identité visuelle, présence digitale). <a href="tarifs.php" class="tarif-link">Voir nos packs création d'entreprise</a>.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq16">
                                Combien de temps faut-il pour créer un site web ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq16" class="faq-answer collapse">
                                <p>En moyenne :</p>
                                <ul>
                                    <li>Site vitrine : 2-3 semaines</li>
                                    <li>Site e-commerce : 4-6 semaines</li>
                                    <li>Site institutionnel : 6-8 semaines</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq17">
                                Puis-je suivre l'avancement de mon projet ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq17" class="faq-answer collapse">
                                <p>Oui ! Tous nos clients ont accès à un espace client sécurisé pour suivre en temps réel l'avancement de leur projet, consulter les documents et échanger avec notre équipe.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section Solutions Digitales -->
                    <div class="faq-category" id="solutions" data-aos="fade-up">
                        <h3><i class="fas fa-magic me-2"></i>Solutions Digitales</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq18">
                                Qu'est-ce que TuniMentors exactement ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq18" class="faq-answer collapse">
                                <p>TuniMentors est notre plateforme de mise en relation entre mentors expérimentés et entrepreneurs/étudiants. Vous pouvez réserver des sessions de mentorat personnalisées ou suivre des programmes de formation complets.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq19">
                                TuniPro propose-t-il des modèles de cartes de visite ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq19" class="faq-answer collapse">
                                <p>Oui, nous proposons plus de 50 modèles professionnels personnalisables. Vous pouvez également créer votre design from scratch avec notre éditeur intuitif.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq20">
                                Le CRM WhatsApp fonctionne-t-il à l'international ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq20" class="faq-answer collapse">
                                <p>Absolument ! Notre CRM est spécialement conçu pour l'export et supporte les communications internationales via WhatsApp Business.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq21">
                                Proposez-vous des solutions pour l'immobilier ou l'éducation ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq21" class="faq-answer collapse">
                                <p>Oui, nous développons des solutions sectorielles sur mesure. Contactez-nous pour discuter de vos besoins spécifiques.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section Support & Contact -->
                    <div class="faq-category" id="support" data-aos="fade-up">
                        <h3><i class="fas fa-headset me-2"></i>Support & Contact</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq22">
                                Comment puis-je contacter l'équipe TunAffaires ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq22" class="faq-answer collapse">
                                <p>Plusieurs moyens :</p>
                                <ul>
                                    <li>Formulaire de contact sur notre site</li>
                                    <li>Email : contact@tunaffaires.tn</li>
                                    <li>Téléphone : +216 24 60 44 75</li>
                                    <li>WhatsApp : via notre CRM</li>
                                    <li>Rendez-vous en agence</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq23">
                                Quel est votre délai de réponse ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq23" class="faq-answer collapse">
                                <p>Nous nous engageons à répondre sous 24 heures ouvrées maximum. Pour les urgences, privilégiez le téléphone.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq24">
                                Proposez-vous un support après la livraison ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq24" class="faq-answer collapse">
                                <p>Oui, tous nos projets incluent une période de support post-livraison (généralement 3 mois). Ensuite, nous proposons des formules de maintenance et support mensuelles.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq25">
                                Puis-je modifier mon projet en cours de route ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq25" class="faq-answer collapse">
                                <p>Oui, nous sommes flexibles. Les modifications sont soumises à avenant au devis et peuvent impacter les délais. Nous validons toujours les changements avec vous.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section Technique -->
                    <div class="faq-category" id="technique" data-aos="fade-up">
                        <h3><i class="fas fa-tools me-2"></i>Questions Techniques</h3>
                        
                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq26">
                                Proposez-vous l'hébergement pour les sites web ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq26" class="faq-answer collapse">
                                <p>Oui, nous proposons des solutions d'hébergement adaptées à chaque type de projet, avec des serveurs localisés en Tunisie ou à l'international selon vos besoins.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq27">
                                Les sites que vous créez sont-ils responsive ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq27" class="faq-answer collapse">
                                <p>Absolument ! Tous nos sites sont conçus "mobile-first" et s'adaptent parfaitement à tous les écrans (ordinateur, tablette, mobile).</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq28">
                                Intégrez-vous le référencement (SEO) dans vos sites ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq28" class="faq-answer collapse">
                                <p>Oui, le SEO est intégré dès la conception : structure technique optimisée, contenu optimisé SEO, performances, et sécurité. Nous proposons également des services SEO avancés en option.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq29">
                                Utilisez-vous des CMS comme WordPress ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq29" class="faq-answer collapse">
                                <p>Oui, nous travaillons avec les meilleurs CMS (WordPress, PrestaShop, WooCommerce) mais pouvons également développer des solutions sur mesure selon vos besoins.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq30">
                                Proposez-vous des formations pour gérer mon site moi-même ?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="faq30" class="faq-answer collapse">
                                <p>Oui, nous formons toujours nos clients à la gestion de leur site. Nous proposons également des sessions de formation avancée si nécessaire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta" id="contactCta">
        <div class="container">
            <div class="contact-cta-content" data-aos="fade-up">
                <h2>Vous n'avez pas trouvé réponse à votre question ?</h2>
                <p>Notre équipe est à votre disposition pour répondre à toutes vos interrogations et discuter de votre projet.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-lg">Nous Contacter</a>
                    <a href="tel:+21624604475" class="btn btn-lg ms-3"><i class="fas fa-phone me-2"></i>+216 24 60 44 75</a>
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
        
        if (mobileToggle && navMenu) {
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

        // Sidebar toggle functionality
        const sidebarToggle = document.getElementById('sidebarToggle');
        const faqSidebar = document.getElementById('faqSidebar');
        const faqSection = document.getElementById('faqSection');
        const contactCta = document.getElementById('contactCta');
        const mainFooter = document.getElementById('mainFooter');

        if (sidebarToggle && faqSidebar) {
            sidebarToggle.addEventListener('click', () => {
                faqSidebar.classList.toggle('active');
                
                // Update toggle icon
                const icon = sidebarToggle.querySelector('i');
                if (faqSidebar.classList.contains('active')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            });
        }

        // FAQ Search Functionality
        function searchFAQs() {
            const searchTerm = document.getElementById('faqSearch').value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            const categories = document.querySelectorAll('.faq-category');
            let hasResults = false;

            // Reset all items and categories
            faqItems.forEach(item => {
                item.style.display = 'block';
            });
            categories.forEach(category => {
                category.style.display = 'block';
            });

            if (searchTerm.length > 0) {
                hasResults = false;
                
                // Hide non-matching items and categories
                categories.forEach(category => {
                    let categoryHasResults = false;
                    const items = category.querySelectorAll('.faq-item');
                    
                    items.forEach(item => {
                        const question = item.querySelector('.faq-question').textContent.toLowerCase();
                        const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                        
                        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                            categoryHasResults = true;
                            hasResults = true;
                            // Auto-expand matching items
                            const collapse = new bootstrap.Collapse(item.querySelector('.faq-answer'));
                            collapse.show();
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    if (!categoryHasResults) {
                        category.style.display = 'none';
                    }
                });

                // Show message if no results
                if (!hasResults) {
                    const noResults = document.createElement('div');
                    noResults.className = 'no-results text-center py-5';
                    noResults.innerHTML = `<p>Aucun résultat trouvé pour "${searchTerm}". Essayez d'autres mots-clés.</p>`;
                    
                    // Remove previous no-results message
                    const existingNoResults = document.querySelector('.no-results');
                    if (existingNoResults) {
                        existingNoResults.remove();
                    }
                    
                    document.querySelector('.faq-section .container .row .col-lg-10').prepend(noResults);
                } else {
                    const existingNoResults = document.querySelector('.no-results');
                    if (existingNoResults) {
                        existingNoResults.remove();
                    }
                }
            } else {
                // Reset when search is empty
                const existingNoResults = document.querySelector('.no-results');
                if (existingNoResults) {
                    existingNoResults.remove();
                }
            }
        }

        // Enable search on Enter key
        document.getElementById('faqSearch').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchFAQs();
            }
        });

        // FAQ Navigation
        const faqNavLinks = document.querySelectorAll('.faq-nav-link');
        const faqCategories = document.querySelectorAll('.faq-category');

        // Update active nav link on scroll
        function updateActiveNavLink() {
            const scrollPosition = window.scrollY + 150;
            
            faqCategories.forEach(category => {
                const categoryTop = category.offsetTop;
                const categoryHeight = category.offsetHeight;
                const categoryId = category.getAttribute('id');
                
                if (scrollPosition >= categoryTop && scrollPosition < categoryTop + categoryHeight) {
                    faqNavLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + categoryId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }

        // Smooth scroll for nav links
        faqNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });

                    // Close sidebar on mobile after click
                    if (window.innerWidth <= 992) {
                        faqSidebar.classList.remove('active');
                        sidebarToggle.querySelector('i').className = 'fas fa-bars';
                    }
                }
            });
        });

        // Update active nav link on scroll
        window.addEventListener('scroll', updateActiveNavLink);

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                if (faqSidebar.classList.contains('active') && 
                    !faqSidebar.contains(e.target) && 
                    !sidebarToggle.contains(e.target)) {
                    faqSidebar.classList.remove('active');
                    sidebarToggle.querySelector('i').className = 'fas fa-bars';
                }
            }
        });
    </script>
</body>
</html>