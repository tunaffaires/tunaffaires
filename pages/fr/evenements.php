<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements - TUNaffaires</title>
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

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            padding: 150px 0 100px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            opacity: 0.1;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .hero-section p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            font-size: 1.2rem;
        }

        /* Events Section */
        .events-section {
            padding: 80px 0;
            background: var(--light);
        }

        .filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .filter-btn {
            padding: 0.6rem 1.5rem;
            border: none;
            background-color: white;
            color: var(--dark);
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
            font-weight: 600;
        }

        .filter-btn:hover, .filter-btn.active {
            background-color: var(--primary);
            color: white;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        .event-card {
            background-color: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .event-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .event-content {
            padding: 1.5rem;
        }

        .event-date {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 5px;
            font-size: 0.9rem;
            margin-bottom: 0.8rem;
        }

        .event-title {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            color: var(--secondary);
        }

        .event-excerpt {
            color: #666;
            margin-bottom: 1.2rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more-btn {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .read-more-btn:hover {
            background-color: #1e6b4e;
        }

        /* Calendar Section */
        .calendar-section {
            padding: 80px 0;
            background: white;
        }

        .calendar-container {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 2rem;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .calendar-nav {
            display: flex;
            gap: 1rem;
        }

        .calendar-nav-btn {
            background: var(--light);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .calendar-nav-btn:hover {
            background: var(--primary);
            color: white;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-day-header {
            text-align: center;
            padding: 10px;
            font-weight: 600;
            color: var(--dark);
            border-bottom: 1px solid #eee;
        }

        .calendar-day {
            height: 80px;
            padding: 5px;
            border: 1px solid #eee;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }

        .calendar-day:hover {
            background: var(--light);
        }

        .calendar-day.empty {
            background: #f9f9f9;
            cursor: default;
        }

        .calendar-day.has-event {
            background: rgba(9, 170, 57, 0.05);
        }

        .calendar-day-number {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .calendar-event-indicator {
            display: flex;
            gap: 3px;
            flex-wrap: wrap;
        }

        .event-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary);
        }

        .event-dot.upcoming {
            background: var(--primary);
        }

        .event-dot.past {
            background: var(--secondary);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            overflow-y: auto;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background-color: white;
            margin: 2rem auto;
            width: 90%;
            max-width: 900px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.4s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background-color: var(--secondary);
            color: white;
        }

        .modal-title {
            font-size: 1.5rem;
            margin: 0;
        }

        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .close-btn:hover {
            color: var(--primary);
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-media {
            width: 100%;
            margin-bottom: 1.5rem;
        }

        .modal-media img, .modal-media video {
            width: 100%;
            border-radius: 8px;
        }

        .modal-text {
            line-height: 1.7;
        }

        .event-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: var(--light);
            border-radius: 8px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .detail-item i {
            color: var(--primary);
        }



        /* Responsive */
        @media (max-width: 992px) {
            h1 {
                font-size: 2.8rem;
            }
            
            h2 {
                font-size: 2.2rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }

            .events-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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
            
            .hero-section {
                padding: 130px 0 80px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .calendar-grid {
                gap: 2px;
            }

            .calendar-day {
                height: 60px;
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
            
            .hero-section {
                padding: 120px 0 60px;
            }
            
            .calendar-day {
                height: 50px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
     <?php include 'includes/header.php'; ?>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <h1>Événements TUNaffaires</h1>
                <p>Découvrez nos événements passés et à venir. Participez à nos conférences, ateliers et rencontres pour développer votre entreprise.</p>
                <a href="#events" class="btn btn-primary">
                    Voir les événements <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section" id="events">
        <div class="container">
            <h2 data-aos="fade-up">Nos Événements</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Rejoignez-nous pour des expériences enrichissantes et des opportunités de networking</p>
            
            <div class="filters" data-aos="fade-up" data-aos-delay="200">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="upcoming">À venir</button>
                <button class="filter-btn" data-filter="past">Passés</button>
                <button class="filter-btn" data-filter="conference">Conférences</button>
                <button class="filter-btn" data-filter="workshop">Ateliers</button>
            </div>

            <div class="events-grid" id="eventsContainer">
                <!-- Les événements seront générés dynamiquement par JavaScript -->
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section class="calendar-section">
        <div class="container">
            <h2 data-aos="fade-up">Calendrier des Événements</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Visualisez tous nos événements sur le calendrier mensuel</p>
            
            <div class="calendar-container" data-aos="fade-up" data-aos-delay="200">
                <div class="calendar-header">
                    <h3 id="currentMonth">Novembre 2023</h3>
                    <div class="calendar-nav">
                        <button class="calendar-nav-btn" id="prevMonth"><i class="fas fa-chevron-left"></i></button>
                        <button class="calendar-nav-btn" id="nextMonth"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="calendar-grid" id="calendarGrid">
                    <!-- Le calendrier sera généré dynamiquement par JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Modal pour afficher le contenu complet -->
    <div class="modal" id="eventModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Titre de l'événement</h2>
                <button class="close-btn" id="closeModal">&times;</button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Contenu de l'événement sera injecté ici -->
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

        // Données des événements (remplaçables par une API ou base de données)
        const eventsData = [
            {
                id: 1,
                title: "Forum des Entrepreneurs 2023",
                date: "2023-11-15",
                endDate: "2023-11-16",
                category: "upcoming",
                type: "conference",
                location: "Centre des Congrès, Tunis",
                time: "9h00 - 18h00",
                excerpt: "Un événement incontournable pour les entrepreneurs tunisiens cherchant à développer leur réseau et leurs compétences.",
                image: "https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                content: `
                    <div class="event-details">
                        <div class="detail-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>15-16 Novembre 2023</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <span>9h00 - 18h00</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Centre des Congrès, Tunis</span>
                        </div>
                    </div>
                    <div class="modal-media">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Forum des Entrepreneurs">
                    </div>
                    <div class="modal-text">
                        <p>Le Forum des Entrepreneurs 2023 est l'événement phare de l'année pour la communauté entrepreneuriale tunisienne. Cet événement réunira plus de 500 entrepreneurs, investisseurs et experts du secteur.</p>
                        <h3>Au programme :</h3>
                        <ul>
                            <li>Conférences inspirantes avec des leaders d'opinion</li>
                            <li>Ateliers pratiques sur le financement et la croissance</li>
                            <li>Session de networking avec des investisseurs</li>
                            <li>Présentation des startups prometteuses</li>
                        </ul>
                        <p>Inscription obligatoire sur notre plateforme.</p>
                    </div>
                `
            },
            {
                id: 2,
                title: "Atelier Marketing Digital",
                date: "2023-10-05",
                category: "past",
                type: "workshop",
                location: "Espace Coworking, Lac 1",
                time: "14h00 - 17h00",
                excerpt: "Apprenez à maîtriser les outils du marketing digital pour booster votre entreprise.",
                image: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                content: `
                    <div class="event-details">
                        <div class="detail-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>5 Octobre 2023</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <span>14h00 - 17h00</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Espace Coworking, Lac 1</span>
                        </div>
                    </div>
                    <div class="modal-media">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Atelier Marketing Digital">
                    </div>
                    <div class="modal-text">
                        <p>Cet atelier intensif de 3 heures a permis aux participants de découvrir les fondamentaux du marketing digital et d'appliquer ces connaissances à leur propre entreprise.</p>
                        <h3>Points abordés :</h3>
                        <ul>
                            <li>Stratégie de présence en ligne</li>
                            <li>Optimisation pour les moteurs de recherche (SEO)</li>
                            <li>Marketing sur les réseaux sociaux</li>
                            <li>Publicité en ligne ciblée</li>
                            <li>Analyse des performances</li>
                        </ul>
                        <p>Les participants sont repartis avec un plan d'action personnalisé pour améliorer leur visibilité en ligne.</p>
                        <p><strong>Animateur :</strong> Mehdi Ben Salah, expert en marketing digital</p>
                    </div>
                `
            },
            {
                id: 3,
                title: "Conférence Innovation Technologique",
                date: "2023-12-20",
                category: "upcoming",
                type: "conference",
                location: "Hôtel El Mouradi, Gammarth",
                time: "14h00 - 19h00",
                excerpt: "Découvrez les dernières tendances technologiques qui transformeront les entreprises tunisiennes.",
                image: "https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                content: `
                    <div class="event-details">
                        <div class="detail-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>20 Décembre 2023</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <span>14h00 - 19h00</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Hôtel El Mouradi, Gammarth</span>
                        </div>
                    </div>
                    <div class="modal-media">
                        <video controls poster="https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80">
                            <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de vidéos.
                        </video>
                    </div>
                    <div class="modal-text">
                        <p>Cette conférence exclusive présentera les technologies émergentes qui auront un impact majeur sur le paysage des affaires en Tunisie au cours des prochaines années.</p>
                        <h3>Thèmes principaux :</h3>
                        <ul>
                            <li>Intelligence Artificielle et Machine Learning</li>
                            <li>Blockchain et ses applications business</li>
                            <li>Internet des Objets (IoT) pour l'industrie</li>
                            <li>Cybersécurité pour les PME</li>
                        </ul>
                        <p>Des démonstrations en direct et des études de cas concrètes illustreront comment ces technologies peuvent être intégrées dans différents secteurs d'activité.</p>
                        <p><strong>Intervenants :</strong> Experts internationaux et locaux</p>
                    </div>
                `
            },
            {
                id: 4,
                title: "Workshop Gestion Financière",
                date: "2023-09-12",
                category: "past",
                type: "workshop",
                location: "Siège TUNaffaires, Centre Ville",
                time: "10h00 - 13h00",
                excerpt: "Maîtrisez les bases de la gestion financière pour une entreprise saine et pérenne.",
                image: "https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                content: `
                    <div class="event-details">
                        <div class="detail-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>12 Septembre 2023</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <span>10h00 - 13h00</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Siège TUNaffaires, Centre Ville</span>
                        </div>
                    </div>
                    <div class="modal-media">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Workshop Gestion Financière">
                    </div>
                    <div class="modal-text">
                        <p>Ce workshop pratique a permis aux entrepreneurs de mieux comprendre et gérer leurs finances d'entreprise.</p>
                        <h3>Contenu du workshop :</h3>
                        <ul>
                            <li>Élaboration d'un budget prévisionnel</li>
                            <li>Gestion de trésorerie au quotidien</li>
                            <li>Analyse des états financiers</li>
                            <li>Stratégies de réduction des coûts</li>
                            <li>Préparation pour une demande de financement</li>
                        </ul>
                        <p>Les participants ont travaillé sur des cas réels et ont reçu des outils pratiques qu'ils peuvent appliquer immédiatement dans leur entreprise.</p>
                        <p><strong>Formatrice :</strong> Leila Trabelsi, experte-comptable</p>
                    </div>
                `
            },
            {
                id: 5,
                title: "Rencontre Investisseurs & Startups",
                date: "2023-11-28",
                category: "upcoming",
                type: "conference",
                location: "Technopole El Ghazala",
                time: "16h00 - 20h00",
                excerpt: "Une occasion unique pour les startups de rencontrer des investisseurs et présenter leurs projets.",
                image: "https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                content: `
                    <div class="event-details">
                        <div class="detail-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>28 Novembre 2023</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <span>16h00 - 20h00</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Technopole El Ghazala</span>
                        </div>
                    </div>
                    <div class="modal-media">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Rencontre Investisseurs & Startups">
                    </div>
                    <div class="modal-text">
                        <p>Cet événement spécial réunira une sélection de startups prometteuses et des investisseurs locaux et internationaux à la recherche de projets innovants.</p>
                        <h3>Au programme :</h3>
                        <ul>
                            <li>Présentations pitch des startups (5 min chacune)</li>
                            <li>Session de questions-réponses avec les investisseurs</li>
                            <li>Networking et rencontres B2B</li>
                            <li>Table ronde sur les tendances d'investissement en Tunisie</li>
                        </ul>
                        <p>Les startups intéressées doivent soumettre leur candidature au moins 2 semaines avant l'événement.</p>
                        <p><strong>Partenaires :</strong> Startup Act, Smart Capital, BIAT</p>
                    </div>
                `
            }
        ];

        // Références aux éléments DOM
        const eventsContainer = document.getElementById('eventsContainer');
        const eventModal = document.getElementById('eventModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalBody = document.getElementById('modalBody');
        const closeModal = document.getElementById('closeModal');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const calendarGrid = document.getElementById('calendarGrid');
        const currentMonthElement = document.getElementById('currentMonth');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');

        // Variables globales
        let currentFilter = 'all';
        let currentDate = new Date();
        let currentMonth = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();

        // Fonction pour formater la date
        function formatDate(dateString) {
            const date = new Date(dateString);
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            return date.toLocaleDateString('fr-FR', options);
        }

        // Fonction pour afficher les événements
        function displayEvents(events) {
            eventsContainer.innerHTML = '';
            
            events.forEach(event => {
                const eventDate = new Date(event.date);
                const formattedDate = formatDate(event.date);
                
                const eventCard = document.createElement('div');
                eventCard.className = 'event-card';
                eventCard.setAttribute('data-category', event.category);
                eventCard.setAttribute('data-type', event.type);
                eventCard.setAttribute('data-aos', 'fade-up');
                
                eventCard.innerHTML = `
                    <img src="${event.image}" alt="${event.title}" class="event-image">
                    <div class="event-content">
                        <span class="event-date">${formattedDate}</span>
                        <h3 class="event-title">${event.title}</h3>
                        <p class="event-excerpt">${event.excerpt}</p>
                        <button class="read-more-btn" data-id="${event.id}">Lire la suite</button>
                    </div>
                `;
                
                eventsContainer.appendChild(eventCard);
            });
            
            // Ajouter les écouteurs d'événements aux boutons "Lire la suite"
            document.querySelectorAll('.read-more-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const eventId = parseInt(this.getAttribute('data-id'));
                    openEventModal(eventId);
                });
            });
        }

        // Fonction pour ouvrir la modale d'un événement
        function openEventModal(eventId) {
            const event = eventsData.find(e => e.id === eventId);
            if (event) {
                modalTitle.textContent = event.title;
                modalBody.innerHTML = event.content;
                eventModal.style.display = 'block';
                document.body.style.overflow = 'hidden'; // Empêcher le défilement
            }
        }

        // Fonction pour fermer la modale
        function closeEventModal() {
            eventModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Rétablir le défilement
        }

        // Fonction pour filtrer les événements
        function filterEvents(category) {
            currentFilter = category;
            
            // Mettre à jour les boutons de filtre
            filterButtons.forEach(btn => {
                if (btn.getAttribute('data-filter') === category) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
            
            // Filtrer les événements
            let filteredEvents;
            if (category === 'all') {
                filteredEvents = eventsData;
            } else {
                filteredEvents = eventsData.filter(event => 
                    event.category === category || event.type === category
                );
            }
            
            displayEvents(filteredEvents);
        }

        // Fonctions pour le calendrier
        function generateCalendar() {
            // Réinitialiser le calendrier
            calendarGrid.innerHTML = '';
            
            // Ajouter les en-têtes des jours
            const days = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
            days.forEach(day => {
                const dayHeader = document.createElement('div');
                dayHeader.className = 'calendar-day-header';
                dayHeader.textContent = day;
                calendarGrid.appendChild(dayHeader);
            });
            
            // Obtenir le premier jour du mois et le nombre de jours dans le mois
            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startingDay = firstDay.getDay();
            
            // Ajouter les jours vides avant le premier jour du mois
            for (let i = 0; i < startingDay; i++) {
                const emptyDay = document.createElement('div');
                emptyDay.className = 'calendar-day empty';
                calendarGrid.appendChild(emptyDay);
            }
            
            // Ajouter les jours du mois
            for (let day = 1; day <= daysInMonth; day++) {
                const dayElement = document.createElement('div');
                dayElement.className = 'calendar-day';
                dayElement.innerHTML = `<div class="calendar-day-number">${day}</div>`;
                
                // Vérifier s'il y a des événements ce jour-là
                const dateStr = `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const dayEvents = eventsData.filter(event => {
                    const eventDate = new Date(event.date);
                    const eventDateStr = `${eventDate.getFullYear()}-${String(eventDate.getMonth() + 1).padStart(2, '0')}-${String(eventDate.getDate()).padStart(2, '0')}`;
                    return eventDateStr === dateStr;
                });
                
                if (dayEvents.length > 0) {
                    dayElement.classList.add('has-event');
                    const indicator = document.createElement('div');
                    indicator.className = 'calendar-event-indicator';
                    
                    dayEvents.forEach(event => {
                        const dot = document.createElement('div');
                        dot.className = `event-dot ${event.category}`;
                        indicator.appendChild(dot);
                    });
                    
                    dayElement.appendChild(indicator);
                    
                    // Ajouter un événement de clic pour afficher les événements du jour
                    dayElement.addEventListener('click', () => {
                        const eventIds = dayEvents.map(event => event.id);
                        if (eventIds.length > 0) {
                            openEventModal(eventIds[0]);
                        }
                    });
                }
                
                calendarGrid.appendChild(dayElement);
            }
            
            // Mettre à jour l'affichage du mois et de l'année
            const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
            ];
            currentMonthElement.textContent = `${monthNames[currentMonth]} ${currentYear}`;
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Afficher tous les événements au chargement
            displayEvents(eventsData);
            
            // Ajouter les écouteurs d'événements aux boutons de filtre
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    filterEvents(filter);
                });
            });
            
            // Fermer la modale en cliquant sur le bouton fermer
            closeModal.addEventListener('click', closeEventModal);
            
            // Fermer la modale en cliquant en dehors du contenu
            eventModal.addEventListener('click', function(e) {
                if (e.target === eventModal) {
                    closeEventModal();
                }
            });
            
            // Fermer la modale avec la touche Échap
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeEventModal();
                }
            });
            
            // Gestion du calendrier
            generateCalendar();
            
            // Navigation du calendrier
            prevMonthBtn.addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                generateCalendar();
            });
            
            nextMonthBtn.addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                generateCalendar();
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
        });
    </script>
</body>
</html>