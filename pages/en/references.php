<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our References - Univers Formation & Consulting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #004d99; /* Dark Blue */
            --secondary-color: #ffc107; /* Golden Yellow */
            --accent-color: #dc3545; /* Dynamic Red */
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --text-dark: #212529;
            --text-light: #6c757d;
            --border-color: #e9ecef;
            --border-radius: 1rem;
            --shadow-sm: 0 0.5rem 1rem rgba(0,0,0,0.08);
            --shadow-md: 0 1rem 2rem rgba(0,0,0,0.1);
            --shadow-lg: 0 1.5rem 3rem rgba(0,0,0,0.15);
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            line-height: 1.8;
            background-color: #f0f2f5;
        }
        
        /* General styles */
        .section-title {
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            font-size: 2.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 6px;
            background: var(--secondary-color);
            border-radius: 3px;
        }

        .section-subtitle {
            color: var(--text-light);
            font-size: 1.2rem;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .page-hero {
            background: linear-gradient(rgba(0, 77, 153, 0.8), rgba(0, 77, 153, 0.8)), url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1900&q=80') no-repeat center center/cover;
            min-height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
            border-bottom-left-radius: var(--border-radius);
            border-bottom-right-radius: var(--border-radius);
        }
        
        /* Clients Logos Section */
        .clients-section {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            margin-top: -3rem;
            position: relative;
            z-index: 1;
        }

        .clients-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        .client-logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: var(--light-color);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid var(--border-color);
            height: 120px;
        }

        .client-logo-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--secondary-color);
        }

        .client-logo {
            max-width: 100%;
            max-height: 80px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(rgba(0, 77, 153, 0.8), rgba(0, 77, 153, 0.8)), url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&auto=format&fit=crop&w=1974&q=80') no-repeat center center/cover;
            color: white;
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            font-weight: 600;
            padding: 0.75rem 2.5rem;
            border-radius: 50px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        
        .btn-primary:hover {
            background-color: #e9a600;
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline-light {
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2.5rem;
            border-radius: 50px;
            transition: var(--transition);
        }

        .btn-outline-light:hover {
            border-color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <section class="page-hero bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4"><?php echo t('references_title'); ?></h1>
                    <p class="lead mb-0"><?php echo t('references_subtitle'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Our Trusted Partners</h2>
                    <p class="section-subtitle">Over 50 companies trust us with their development</p>
                </div>
            </div>
            
            <div class="clients-grid" data-aos="fade-up" data-aos-delay="200">
                <?php
                $clientLogos = [
                    'Attijari.jpeg' => 'Attijari Bank',
                    'shell.jpeg' => 'Shell',
                    'sannofi.png' => 'Sanofi',
                    'QNB.jpeg' => 'QNB',
                    'ATB.jpeg' => 'ATB',
                    'Uib.png' => 'UIB',
                    'BH.png' => 'BH Bank',
                    'Albaraka.png' => 'Al Baraka Bank',
                    'Almaviva.png' => 'Almaviva',
                    'Sicame.png' => 'Sicame',
                    'Delice.jpeg' => 'Délice',
                    'Natilait.jpeg' => 'Natilait',
                    'Vitalait.png' => 'Vitalait',
                    'Industrial Polyservices.jpeg' => 'Industrial Polyservices',
                    'Ideal Vision.jpeg' => 'Ideal Vision',
                    'BK Consult.png' => 'BK Consult',
                    'Gepar.png' => 'Gepar',
                    'Demco.jpeg' => 'Demco',
                    'Iscae.png' => 'ISCAE',
                    'sbf.png' => 'SBF',
                    'Alluco academy.png' => 'Alluco Academy',
                    'alluco.jpeg' => 'Alluco',
                    'Asteelflash.png' => 'Asteelflash',
                    'CIPI.jpeg' => 'CIPI',
                    'Samm.png' => 'SAMM',
                    'Artus RH.jpeg' => 'Artus RH',
                    'laboratoire africa.jpeg' => 'Laboratoire Africa',
                    'ben yaghlan shop.png' => 'Ben Yaghlan Shop',
                    'ABCO.jpeg' => 'ABCO',
                    'itissalia services SA.jpeg' => 'Itissalia Services',
                    'Injaz.png' => 'Injaz',
                    'Ailease.jpg' => 'Ailease',
                    'Legal Parteners Advisor.jpg' => 'Legal Partners Advisor',
                    'SRA integration.png' => 'SRA Integration',
                    'fbl consulting.png' => 'FBL Consulting',
                    'anneti.jpg' => 'Anneti',
                    'giz.png' => 'GIZ',
                    'wit.PNG' => 'WIT',
                    'Aziza.png' => 'Aziza',
                    'Sopat Mliha.png' => 'Sopat Mliha',
                    'Tuntex.jpeg' => 'Tuntex',
                    'iset rades.jpeg' => 'ISET Radès',
                    'CRTEN.jpeg' => 'CRTEN',
                    'compagne tunisienne de forage.png' => 'Compagnie Tunisienne de Forage',
                    'institut contre la torture -Dignity.jpeg' => 'Dignity - Institut contre la torture',
                    'stramiflex.jpeg' => 'Stramiflex',
                    'Bricola.png' => 'Bricola',
                    'espace entrepreneur tunisie.png' => 'Espace Entrepreneur Tunisie',
                    'chips_mahboul.jpeg' => 'Chips Mahboul' /* Ajout du document */,
                    'mg.jpeg' => 'MG',
                    'VITIS Company.jpeg' => 'VITIS Company',
                    'MMM.jpeg' => 'MMM',
                    'la_femme_urbaine.jpeg' => 'La Femme Urbaine',
                    'Perfect higiene.jpeg' => 'Perfect Higiene',
                    'connect_consulting.jpeg' => 'Connect Consulting',
                    'abt.jpeg' => 'ABT'
                ];
                
                foreach ($clientLogos as $filename => $altText) {
                    $imagePath = "assets/images/clients/" . $filename;
                    if (file_exists($imagePath)) {
                        echo '<div class="client-logo-item" data-aos="zoom-in" data-aos-delay="' . (rand(100, 800)) . '">';
                        echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($altText) . '" class="client-logo">';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="cta-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="mb-4">Join Our Satisfied Clients</h2>
                    <p class="lead mb-5">
                        Discover how we can support you and your teams in your development.
                    </p>
                    <div class="cta-actions">
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg me-3 mb-3">
                            <i class="fas fa-paper-plane me-2"></i>Contact Us
                        </a>
                        <a href="<?php echo url('services'); ?>" class="btn btn-outline-light btn-lg mb-3">
                            <i class="fas fa-eye me-2"></i>Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                easing: 'ease-in-out'
            });
        });
    </script>
</body>
</html>