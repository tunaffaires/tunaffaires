<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - TunAffaires.tn | Votre Partenaire Digital en Tunisie</title>
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

        /* Hero Section - Modifiée pour correspondre à la charte */
        .contact-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 180px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .contact-hero:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" opacity="0.1"><polygon fill="%23ffffff" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .contact-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: white;
        }

        .contact-hero p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }

        /* Contact Methods Section - Modifiée */
        .contact-methods-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
        }

        .contact-methods-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%2309aa39" fill-opacity="0.03" points="0,0 1000,1000 0,1000"/></svg>');
            background-size: cover;
        }

        .methods-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            position: relative;
            z-index: 2;
        }

        .method-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px 30px;
            text-align: center;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .method-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(9, 170, 57, 0.1), transparent);
            transition: var(--transition);
        }

        .method-card:hover:before {
            left: 100%;
        }

        .method-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--primary);
        }

        .method-icon-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
        }

        .method-icon-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--secondary);
            border-radius: 50%;
            transition: var(--transition);
        }

        .method-card:hover .method-icon-bg {
            background: var(--primary);
            transform: scale(1.1) rotate(10deg);
        }

        .method-icon {
            position: relative;
            z-index: 2;
            color: var(--dark);
            font-size: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            transition: var(--transition);
        }

        .method-card:hover .method-icon {
            color: white;
            transform: scale(1.1);
        }

        .method-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .method-card p {
            color: var(--gray);
            margin-bottom: 25px;
            min-height: 60px;
        }

        .method-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            padding: 10px 20px;
            border: 2px solid var(--primary);
            border-radius: 50px;
        }

        .method-link:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Enhanced Contact Form - Amélioré */
        .contact-form-section {
            padding: 100px 0;
            background: white;
        }

        .form-container {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto;
        }

        .form-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }

        .form-header h2 {
            color: white;
            margin-bottom: 10px;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0;
        }

        .form-body {
            padding: 50px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .form-label .required {
            color: #dc3545;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid var(--light);
            border-radius: var(--radius);
            font-size: 1rem;
            transition: var(--transition);
            background: white;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(9, 170, 57, 0.1);
        }

        .form-control::placeholder {
            color: #a0a0a0;
            opacity: 1;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-select {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid var(--light);
            border-radius: var(--radius);
            font-size: 1rem;
            transition: var(--transition);
            background: white;
            cursor: pointer;
            font-family: inherit;
        }

        .form-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(9, 170, 57, 0.1);
        }

        .input-hint {
            font-size: 0.8rem;
            color: var(--gray);
            margin-top: 5px;
            display: block;
        }

        .captcha-container {
            background: var(--light);
            padding: 20px;
            border-radius: var(--radius);
            text-align: center;
        }

        .captcha-question {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .captcha-input {
            display: inline-block;
            width: 100px;
            padding: 10px;
            border: 2px solid var(--light);
            border-radius: var(--radius);
            text-align: center;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .captcha-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: var(--radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-btn:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(9, 170, 57, 0.3);
        }

        .submit-btn:disabled {
            background: var(--gray);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Offices Section - Redesign */
        .offices-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .offices-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .office-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .office-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .office-header {
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .office-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            opacity: 0.9;
            z-index: 1;
        }

        .office-header-content {
            position: relative;
            z-index: 2;
        }

        .office-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.8rem;
        }

        .office-body {
            padding: 30px;
        }

        .office-info {
            margin-bottom: 25px;
        }

        .office-info h4 {
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .office-info h4 i {
            color: var(--secondary);
            width: 20px;
        }

        .schedule-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 5px;
            margin-top: 10px;
        }

        .schedule-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid var(--light);
        }

        .schedule-day {
            font-weight: 600;
            color: var(--dark);
        }

        .schedule-time {
            color: var(--gray);
        }

        .services-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .service-tag {
            background: var(--light);
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            border: 1px solid rgba(9, 170, 57, 0.2);
        }

        .office-actions {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .office-btn {
            flex: 1;
            padding: 12px 20px;
            border: 2px solid var(--primary);
            border-radius: var(--radius);
            background: transparent;
            color: var(--primary);
            text-decoration: none;
            text-align: center;
            font-weight: 600;
            transition: var(--transition);
        }

        .office-btn:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        .office-btn.primary {
            background: var(--primary);
            color: white;
        }

        .office-btn.primary:hover {
            background: var(--primary-light);
        }

        /* Bureau La Manouba avec image de fond */
        .office-card:nth-child(1) .office-header {
            background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80') center/cover no-repeat;
        }

        /* Bureau La Marsa avec image de fond */
        .office-card:nth-child(2) .office-header {
            background: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80') center/cover no-repeat;
        }

        /* Maps Section - Agrandie */
        .maps-section {
            padding: 80px 0;
            background: white;
        }

        .maps-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .map-card {
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .map-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .map-header {
            background: var(--light);
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #e9ecef;
        }

        .map-header h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .map-container {
            height: 400px; /* Agrandi de 300px à 400px */
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
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

        /* Responsive */
        @media (max-width: 992px) {
            h1 {
                font-size: 2.8rem;
            }
            
            h2 {
                font-size: 2.2rem;
            }
            
            .contact-hero h1 {
                font-size: 3rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }

            .methods-grid {
                grid-template-columns: 1fr;
            }

            .offices-grid {
                grid-template-columns: 1fr;
            }

            .maps-grid {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
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
            
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .contact-hero p {
                font-size: 1.1rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }

            .form-body {
                padding: 30px 25px;
            }

            .office-actions {
                flex-direction: column;
            }

            .schedule-grid {
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
            
            .contact-hero {
                padding: 150px 0 80px;
            }
            
            .contact-hero h1 {
                font-size: 2.2rem;
            }

            .method-icon-wrapper {
                width: 80px;
                height: 80px;
            }

            .method-icon {
                font-size: 2rem;
            }

            .map-container {
                height: 300px;
            }
        }

        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 5s ease-in-out infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .pulse {
            animation: pulse 3s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <?php include 'includes/header.php'; ?>
    </header>

    <!-- Hero Section - Modifiée pour correspondre à la charte -->
    <section class="contact-hero" id="hero">
        <div class="container">
            <div class="contact-hero-content" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-4">Contactez TunAffaires</h1>
                <p class="lead mb-4">Votre partenaire de confiance pour la transformation digitale en Tunisie</p>
                <a href="#contact-methods" class="btn btn-primary btn-lg pulse">
                    Nous Contacter <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="contact-methods-section" id="contact-methods">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2>Autres Moyens de Contact</h2>
                </div>
            </div>

            <div class="methods-grid">
                <!-- WhatsApp -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="method-icon-wrapper">
                        <div class="method-icon-bg"></div>
                        <div class="method-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </div>
                    <h3>WhatsApp Business</h3>
                    <p>Support rapide et personnalisé pour vos questions urgentes</p>
                    
                    <a href="https://wa.me/21624604475" class="method-link" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Discuter sur WhatsApp
                    </a>
                </div>

                <!-- Téléphone -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="method-icon-wrapper">
                        <div class="method-icon-bg"></div>
                        <div class="method-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                    <h3>Appel Direct</h3>
                    <p>Échangez directement avec notre équipe pour des conseils personnalisés</p>
                    
                    <a href="tel:+21624604475" class="method-link">
                        <i class="fas fa-phone me-2"></i>+216 24 60 44 75
                    </a>
                </div>

                <!-- Email -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="method-icon-wrapper">
                        <div class="method-icon-bg"></div>
                        <div class="method-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <h3>Email Professionnel</h3>
                    <p>Pour les demandes détaillées et l'envoi de documents importants</p>
                    
                    <a href="mailto:contact@tunaffaires.tn" class="method-link">
                        <i class="fas fa-envelope me-2"></i>contact@tunaffaires.tn
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section" id="contact-form">
        <div class="container">
            <div class="form-container" data-aos="fade-up">
                <div class="form-header">
                    <h2>Parlons de Votre Projet</h2>
                    <p>Remplissez ce formulaire et nous vous recontacterons dans les plus brefs délais</p>
                </div>

                <div class="form-body">
                    <form id="contactForm" method="POST" action="send-contact.php">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="firstname" class="form-label">
                                    Prénom <span class="required">*</span>
                                </label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" required>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="form-label">
                                    Nom <span class="required">*</span>
                                </label>
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Votre nom de famille" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">
                                    Email <span class="required">*</span>
                                </label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="votre.email@exemple.com" required>
                                <span class="input-hint">Nous ne partagerons jamais votre email</span>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">
                                    Téléphone <span class="required">*</span>
                                </label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+216 XX XXX XXX" required>
                            </div>

                            <div class="form-group">
                                <label for="company" class="form-label">Entreprise</label>
                                <input type="text" id="company" name="company" class="form-control" placeholder="Nom de votre entreprise (optionnel)">
                            </div>

                            <div class="form-group">
                                <label for="service" class="form-label">
                                    Service Intéressé <span class="required">*</span>
                                </label>
                                <select id="service" name="service" class="form-select" required>
                                    <option value="">Choisissez un service</option>
                                    <option value="site-web">Création de Site Web</option>
                                    <option value="ecommerce">Site E-Commerce</option>
                                    <option value="marketing">Marketing Digital</option>
                                    <option value="reseaux-sociaux">Gestion des Réseaux Sociaux</option>
                                    <option value="crm">CRM WhatsApp</option>
                                    <option value="accompagnement">Accompagnement Entreprise</option>
                                    <option value="formation">Formation & Mentorat</option>
                                    <option value="tunipro">Carte de Visite TuniPro</option>
                                    <option value="tunannu">Annonce TunAnnu</option>
                                    <option value="tunicasting">TuniCasting</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                            <div class="form-group full-width">
                                <label for="message" class="form-label">
                                    Description du Projet <span class="required">*</span>
                                </label>
                                <textarea id="message" name="message" class="form-control" placeholder="Décrivez votre projet, vos objectifs, votre budget et vos attentes..." required></textarea>
                                <span class="input-hint">Plus votre description est précise, mieux nous pourrons vous aider</span>
                            </div>

                            <!-- CAPTCHA Section -->
                            <div class="form-group full-width">
                                <div class="captcha-container">
                                    <div class="captcha-question" id="captchaQuestion">
                                        Combien font <span id="num1">5</span> + <span id="num2">3</span> ?
                                    </div>
                                    <input type="number" id="captchaAnswer" class="captcha-input" placeholder="Votre réponse" required>
                                    <input type="hidden" id="captchaSolution" name="captcha_solution">
                                </div>
                            </div>

                            <div class="form-group full-width">
                                <button type="submit" class="submit-btn" id="submitBtn">
                                    <i class="fas fa-paper-plane me-2"></i>Envoyer ma Demande
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Offices Section -->
    <section class="offices-section" id="offices">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2>Nos Bureaux</h2>
                    <p class="section-subtitle">Deux emplacements stratégiques pour mieux vous servir</p>
                </div>
            </div>

            <div class="offices-grid">
                <!-- Bureau La Manouba -->
                <div class="office-card" data-aos="fade-right">
                    <div class="office-header">
                        <div class="office-header-content">
                            <div class="office-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <h3>Bureau La Manouba</h3>
                            <p>Siège Administratif & Centre de Formation</p>
                        </div>
                    </div>
                    <div class="office-body">
                        <div class="office-info">
                            <h4><i class="fas fa-map-marker-alt"></i>Adresse</h4>
                            <p>AV Habib Bourguiba, La Manouba<br>À côté de l'hôpital Kassab</p>
                        </div>
                        
                        <div class="office-info">
                            <h4><i class="fas fa-clock"></i>Horaires d'Ouverture</h4>
                            <div class="schedule-grid">
                                <div class="schedule-item">
                                    <span class="schedule-day">Lundi - Vendredi</span>
                                    <span class="schedule-time">7h-12h / 18h-21h</span>
                                </div>
                                <div class="schedule-item">
                                    <span class="schedule-day">Samedi</span>
                                    <span class="schedule-time">Sur rendez-vous</span>
                                </div>
                                <div class="schedule-item">
                                    <span class="schedule-day">Dimanche</span>
                                    <span class="schedule-time">Fermé</span>
                                </div>
                            </div>
                        </div>

                        <div class="office-info">
                            <h4><i class="fas fa-briefcase"></i>Services Disponibles</h4>
                            <div class="services-tags">
                                <span class="service-tag">Accompagnement</span>
                                <span class="service-tag">Formations</span>
                                <span class="service-tag">Consulting</span>
                                <span class="service-tag">Réunions</span>
                                <span class="service-tag">Administratif</span>
                            </div>
                        </div>

                        <div class="office-actions">
                            <a href="tel:+21624604475" class="office-btn">
                                <i class="fas fa-phone me-2"></i>Appeler
                            </a>
                            <a href="#contact-form" class="office-btn primary">
                                <i class="fas fa-calendar me-2"></i>Rendez-vous
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bureau La Marsa -->
                <div class="office-card" data-aos="fade-left">
                    <div class="office-header">
                        <div class="office-header-content">
                            <div class="office-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3>Bureau La Marsa</h3>
                            <p>Centre Créatif & Showroom Digital</p>
                        </div>
                    </div>
                    <div class="office-body">
                        <div class="office-info">
                            <h4><i class="fas fa-map-marker-alt"></i>Adresse</h4>
                            <p>Rue de la Mecque, La Marsa<br>À côté de la salle de sport Top Forme</p>
                        </div>
                        
                        <div class="office-info">
                            <h4><i class="fas fa-clock"></i>Horaires d'Ouverture</h4>
                            <div class="schedule-grid">
                                <div class="schedule-item">
                                    <span class="schedule-day">Lundi - Vendredi</span>
                                    <span class="schedule-time">10h-13h / 18h-21h</span>
                                </div>
                                <div class="schedule-item">
                                    <span class="schedule-day">Samedi</span>
                                    <span class="schedule-time">Sur rendez-vous</span>
                                </div>
                                <div class="schedule-item">
                                    <span class="schedule-day">Dimanche</span>
                                    <span class="schedule-time">Fermé</span>
                                </div>
                            </div>
                        </div>

                        <div class="office-info">
                            <h4><i class="fas fa-palette"></i>Services Disponibles</h4>
                            <div class="services-tags">
                                <span class="service-tag">Design Créatif</span>
                                <span class="service-tag">Présentations</span>
                                <span class="service-tag">Showroom</span>
                                <span class="service-tag">Événements</span>
                                <span class="service-tag">Innovation</span>
                            </div>
                        </div>

                        <div class="office-actions">
                            <a href="tel:+21624604475" class="office-btn">
                                <i class="fas fa-phone me-2"></i>Appeler
                            </a>
                            <a href="#contact-form" class="office-btn primary">
                                <i class="fas fa-eye me-2"></i>Visite Showroom
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maps Section - Agrandie -->
    <section class="maps-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2>Localisation de Nos Bureaux</h2>
                    <p class="section-subtitle">Trouvez facilement le bureau le plus proche de vous</p>
                </div>
            </div>

            <div class="maps-grid">
                <!-- Carte La Manouba -->
                <div class="map-card" data-aos="fade-right">
                    <div class="map-header">
                        <h4>Bureau La Manouba</h4>
                        <p>AV Habib Bourguiba, À côté de l'hôpital Kassab</p>
                    </div>
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12775.842667303246!2d10.095797776042388!3d36.80803087199231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd337f5e7ef543%3A0xd671924e714a0275!2sLa%20Manouba%2C%20Tunisie!5e0!3m2!1sfr!2sfr!4v1648822812485!5m2!1sfr!2sfr" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Carte La Marsa -->
                <div class="map-card" data-aos="fade-left">
                    <div class="map-header">
                        <h4>Bureau La Marsa</h4>
                        <p>Rue de la Mecque, À côté de la salle de sport Top Forme</p>
                    </div>
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12786.665375390507!2d10.3214337760423!3d36.87677137199305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4a7e22a5a5%3A0x6b6b5b5b5b5b5b5b!2sLa%20Marsa%2C%20Tunisie!5e0!3m2!1sfr!2sfr!4v1648822812485!5m2!1sfr!2sfr" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
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

        // CAPTCHA System
        function generateCaptcha() {
            const num1 = Math.floor(Math.random() * 10) + 1;
            const num2 = Math.floor(Math.random() * 10) + 1;
            const solution = num1 + num2;
            
            document.getElementById('num1').textContent = num1;
            document.getElementById('num2').textContent = num2;
            document.getElementById('captchaSolution').value = solution;
            
            return solution;
        }

        // Initialize CAPTCHA
        let currentCaptchaSolution = generateCaptcha();

        // Form submission handling with CAPTCHA validation
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const userAnswer = parseInt(document.getElementById('captchaAnswer').value);
                const correctAnswer = parseInt(document.getElementById('captchaSolution').value);
                
                if (userAnswer !== correctAnswer) {
                    alert('❌ Réponse CAPTCHA incorrecte. Veuillez réessayer.');
                    document.getElementById('captchaAnswer').value = '';
                    document.getElementById('captchaAnswer').focus();
                    generateCaptcha();
                    return;
                }
                
                const originalText = submitBtn.innerHTML;
                
                // Simulate form submission
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Envoi en cours...';
                submitBtn.disabled = true;
                
                // Here you would normally send the form data to your PHP script
                // For demonstration, we'll simulate a successful submission
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Message Envoyé!';
                    submitBtn.style.background = 'var(--accent)';
                    
                    // Show success message
                    const successMsg = document.createElement('div');
                    successMsg.className = 'alert alert-success mt-4';
                    successMsg.innerHTML = `
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Succès!</strong> Votre message a été envoyé avec succès. Nous vous contacterons dans les plus brefs délais.
                    `;
                    
                    contactForm.appendChild(successMsg);
                    
                    // Reset form and CAPTCHA after 5 seconds
                    setTimeout(() => {
                        contactForm.reset();
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        submitBtn.style.background = 'var(--primary)';
                        successMsg.remove();
                        generateCaptcha();
                    }, 5000);
                }, 2000);
            });
        }

        // Add floating animation to method cards
        document.querySelectorAll('.method-card').forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
        });
    </script>
</body>
</html>