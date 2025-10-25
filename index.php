
<?php
require_once 'config/config.php';

$current_lang = getCurrentLanguage();
$page = isset($_GET['page']) ? $_GET['page'] : 'about';

// Pages autorisées
$allowed_pages = [
    'home',         // Accueil
    'about',        // À propos : Vision & Pourquoi nous choisir + Valeurs
    'services',     // Services détaillés
    'solutions',    // Solutions & Produits
    'tarifs',       // Tarifs / Packs
    'portfolio',    // Réalisations / Portfolio
    'actualites',   // Blog / Ressources
    'evenements',   // Événements passés & futurs
    'equipe',       // Équipe
    'partenaires',  // Partenaires & Témoignages
    'faq',          // Questions fréquentes
    'contact',      // Formulaire + Coordonnées
    'rdv'           // Prise de rendez-vous en ligne
];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo t('home_title'); ?> - <?php echo t('home_subtitle'); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo t('home_description'); ?>">
    <meta name="keywords" content="services, Tunisie, entrepreneurs, entreprises, digitalisation, mentoring, export, consulting">
    <meta name="author" content="Tunaffaires Services">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo t('home_title'); ?>">
    <meta property="og:description" content="<?php echo t('home_description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
    /* --- Cookie Banner amélioré --- */
    .cookie-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 10000;
    }
    
    .cookie-banner {
        background: #fff;
        color: #333;
        width: 90%;
        max-width: 600px;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        text-align: center;
        animation: fadeIn 0.5s ease;
    }
    
    .cookie-banner h3 {
        margin-top: 0;
        color: #1C2D5A;
        font-size: 1.5rem;
        margin-bottom: 15px;
    }
    
    .cookie-banner p {
        margin-bottom: 20px;
        line-height: 1.6;
        font-size: 1rem;
    }
    
    .cookie-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }
    
    .cookie-btn {
        padding: 12px 25px;
        border-radius: 6px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1rem;
    }
    
    .cookie-accept {
        background: #1C2D5A;
        color: #fff;
    }
    
    .cookie-accept:hover {
        background: #2a3f7a;
    }
    
    .cookie-reject {
        background: #f1f1f1;
        color: #333;
    }
    
    .cookie-reject:hover {
        background: #e2e2e2;
    }
    
    .cookie-settings {
        margin-top: 20px;
        text-align: left;
        background: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
        display: none;
    }
    
    .cookie-toggle {
        color: #1C2D5A;
        text-decoration: underline;
        cursor: pointer;
        font-size: 0.9rem;
        margin-top: 10px;
        display: inline-block;
    }
    
    .cookie-option {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    
    .cookie-option input {
        margin-right: 10px;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @media (max-width: 576px) {
        .cookie-buttons {
            flex-direction: column;
        }
        
        .cookie-btn {
            width: 100%;
        }
    }
    </style>
</head>
<body style="background-color:#ffffff;">
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Main Content -->
    <main>
        <?php
        $page_file = "pages/{$current_lang}/{$page}.php";
        if (file_exists($page_file)) {
            include $page_file;
        } else {
            include "pages/{$current_lang}/about.php";
        }
        ?>
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Back to Top Button -->
    <button id="backToTop" class="btn-back-to-top" aria-label="<?php echo t('back_to_top'); ?>">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Cookie Banner amélioré -->
    <div id="cookieOverlay" class="cookie-overlay">
        <div class="cookie-banner">
            <h3>Gestion des cookies</h3>
            <p>Nous utilisons des cookies pour améliorer votre expérience, analyser le trafic et personnaliser le contenu. Vous pouvez choisir lesquels accepter ou tous refuser.</p>
            
            <div id="cookieSettings" class="cookie-settings">
                <div class="cookie-option">
                    <input type="checkbox" id="necessaryCookies" checked disabled>
                    <label for="necessaryCookies">Cookies nécessaires (obligatoires)</label>
                </div>
                <div class="cookie-option">
                    <input type="checkbox" id="analyticsCookies">
                    <label for="analyticsCookies">Cookies d'analyse</label>
                </div>
                <div class="cookie-option">
                    <input type="checkbox" id="marketingCookies">
                    <label for="marketingCookies">Cookies marketing</label>
                </div>
            </div>
            
            <div class="cookie-buttons">
                <button id="acceptAllCookies" class="cookie-btn cookie-accept">Tout accepter</button>
                <button id="saveCookiePreferences" class="cookie-btn cookie-accept">Enregistrer les préférences</button>
                <button id="rejectAllCookies" class="cookie-btn cookie-reject">Tout refuser</button>
            </div>
            
            <div class="cookie-toggle" id="toggleSettings">Paramètres avancés</div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="assets/libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/aos/aos.js"></script>
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const cookieOverlay = document.getElementById('cookieOverlay');
        
        // Vérifier si l'utilisateur a déjà fait un choix de cookies dans cette session
        if (!sessionStorage.getItem('cookieChoiceMade')) {
            cookieOverlay.style.display = 'flex';
        }
        
        // Gestionnaire pour le bouton "Paramètres avancés"
        document.getElementById('toggleSettings').addEventListener('click', function() {
            const settings = document.getElementById('cookieSettings');
            if (settings.style.display === 'block') {
                settings.style.display = 'none';
                this.textContent = 'Paramètres avancés';
            } else {
                settings.style.display = 'block';
                this.textContent = 'Masquer les paramètres';
            }
        });
        
        // Gestionnaire pour "Tout accepter"
        document.getElementById('acceptAllCookies').addEventListener('click', function() {
            document.getElementById('analyticsCookies').checked = true;
            document.getElementById('marketingCookies').checked = true;
            handleCookieAcceptance();
        });
        
        // Gestionnaire pour "Enregistrer les préférences"
        document.getElementById('saveCookiePreferences').addEventListener('click', function() {
            handleCookieAcceptance();
        });
        
        // Gestionnaire pour "Tout refuser"
        document.getElementById('rejectAllCookies').addEventListener('click', function() {
            document.getElementById('analyticsCookies').checked = false;
            document.getElementById('marketingCookies').checked = false;
            handleCookieAcceptance();
        });
        
        function handleCookieAcceptance() {
            // Enregistrement des préférences
            const analytics = document.getElementById('analyticsCookies').checked;
            const marketing = document.getElementById('marketingCookies').checked;
            
            // Stocker le choix dans sessionStorage pour la session en cours
            sessionStorage.setItem('cookieChoiceMade', 'true');
            sessionStorage.setItem('cookiePreferences', JSON.stringify({
                analytics: analytics,
                marketing: marketing
            }));
            
            // Pour les tests, on affiche les préférences dans la console
            console.log('Préférences cookies enregistrées:');
            console.log('- Analytics: ' + analytics);
            console.log('- Marketing: ' + marketing);
            
            // Masquer le bandeau
            cookieOverlay.style.display = 'none';
        }
        
        // Pour les tests: réafficher avec Ctrl+F5
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'F5') {
                // Supprimer le choix de session pour forcer le réaffichage
                sessionStorage.removeItem('cookieChoiceMade');
                cookieOverlay.style.display = 'flex';
                
                // Réinitialiser les cases à cocher
                document.getElementById('analyticsCookies').checked = false;
                document.getElementById('marketingCookies').checked = false;
            }
        });
    });
    </script>
</body>
</html>