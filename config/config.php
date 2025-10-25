<?php
// Configuration générale du site
define('SITE_NAME', 'Tunaffaires Services');
define('SITE_URL', 'https://www.tunaffaires.tn');
define('DEFAULT_LANG', 'fr');

// Configuration email
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', ''); // À configurer
define('SMTP_PASSWORD', ''); // À configurer
define('CONTACT_EMAIL', 'contact@inproovconsulting.com');

// Langues supportées
$supported_languages = ['fr', 'ar', 'en'];

// Pages autorisées sur le site TunAffaires
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


// Fonction pour obtenir la langue actuelle
function getCurrentLanguage() {
    $lang = isset($_GET['lang']) ? $_GET['lang'] : DEFAULT_LANG;
    global $supported_languages;
    return in_array($lang, $supported_languages) ? $lang : DEFAULT_LANG;
}

// Fonction pour charger les traductions
function loadTranslations($lang) {
    $translations_file = __DIR__ . "/translations_{$lang}.php";
    if (file_exists($translations_file)) {
        return include $translations_file;
    }
    return [];
}

// Fonction pour traduire
function t($key, $lang = null) {
    if ($lang === null) {
        $lang = getCurrentLanguage();
    }
    static $translations = [];
    
    if (!isset($translations[$lang])) {
        $translations[$lang] = loadTranslations($lang);
    }
    
    return isset($translations[$lang][$key]) ? $translations[$lang][$key] : $key;
}

// Fonction pour générer les URLs avec langue
function url($page, $lang = null) {
    if ($lang === null) {
        $lang = getCurrentLanguage();
    }
    return "?page={$page}&lang={$lang}";
}

// Fonction pour envoyer des emails
function sendEmail($to, $subject, $body, $from = CONTACT_EMAIL) {
    // Cette fonction sera implémentée avec PHPMailer
    return true;
}
?>
