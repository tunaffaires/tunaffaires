<?php
// Gestion de la langue - DOIT être en tout premier
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$supported_langs = ['fr', 'ar', 'en'];
$default_lang = 'fr';

if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs)) {
    $_SESSION['current_lang'] = $_GET['lang'];
    $current_lang = $_SESSION['current_lang'];
} elseif (isset($_SESSION['current_lang']) && in_array($_SESSION['current_lang'], $supported_langs)) {
    $current_lang = $_SESSION['current_lang'];
} else {
    $current_lang = $default_lang;
    $_SESSION['current_lang'] = $current_lang;
}

$lang_flags = [
    'fr' => 'https://flagcdn.com/w40/fr.png',
    'ar' => 'https://flagcdn.com/w40/tn.png',
    'en' => 'https://flagcdn.com/w40/gb.png'
];
$lang_names = ['fr'=>'FR','ar'=>'AR','en'=>'EN'];

// Déterminer la page courante si non définie
if (!isset($page)) {
    $page = 'home';
}
?>
<!-- Header Content Only - No HTML/BODY tags -->
<style>
    :root {
        --primary: #09aa39;
        --primary-dark: #078c2f;
        --primary-light: #0bc846;
        --secondary: #e9b949;
        --dark: #0f1f2f;
        --light: #f8f9fa;
        --skew-angle: -15deg;
        --skew-angle-positive: 15deg;
    }

    /* Header Base */
    #header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
    }

    #header.scrolled {
        background: rgba(255, 255, 255, 0.95);
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0;
    }

    /* Logo */
    .logo {
        padding: 15px 30px;
        background: var(--primary);
        position: relative;
        margin-right: -20px;
        transform: skewX(var(--skew-angle));
    }

    .logo::before {
        content: '';
        position: absolute;
        top: 0;
        right: -20px;
        width: 40px;
        height: 100%;
        background: var(--primary);
    }

    .logo a {
        display: block;
        transform: skewX(var(--skew-angle-positive));
    }

    .logo img {
        height: 40px;
        width: auto;
        filter: brightness(0) invert(1);
    }

    /* SKEWED MENU - Style Principal */
    nav.main-nav {
        display: flex;
        height: 100%;
    }

    ul.menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .nav-item {
        position: relative;
        height: 100%;
    }

    /* Élément de menu skewed */
    .nav-link {
        display: flex;
        align-items: center;
        padding: 0 30px;
        height: 70px;
        color: var(--dark);
        text-decoration: none;
        font-family: Tahoma, Calibri, sans-serif;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        transform: skewX(var(--skew-angle));
        background: transparent;
        transition: all 0.3s ease;
        border-left: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* Désincliner le texte */
    .nav-link span {
        transform: skewX(var(--skew-angle-positive));
        display: block;
    }

    /* Effet de survol avec fond skewed */
    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--primary);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
        z-index: -1;
    }

    .nav-link:hover::before,
    .nav-link.active::before {
        transform: scaleX(1);
    }

    .nav-link:hover,
    .nav-link.active {
        color: white;
    }

    /* Premier élément sans bordure gauche */
    .nav-item:first-child .nav-link {
        border-left: none;
    }

    /* Sous-menus Skewed */
    .sub-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        min-width: 250px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px) skewX(var(--skew-angle));
        transition: all 0.3s ease;
        z-index: 1000;
        border-top: 3px solid var(--primary);
    }

    .sub-menu.align-right {
        left: auto;
        right: 0;
    }

    .nav-item:hover .sub-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) skewX(var(--skew-angle));
    }

    .sub-menu li {
        transform: skewX(var(--skew-angle-positive));
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .sub-menu li:last-child {
        border-bottom: none;
    }

    .sub-menu a {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        color: var(--dark);
        text-decoration: none;
        font-family: Tahoma, Calibri, sans-serif;
        font-weight: 500;
        font-size: 13px;
        transition: all 0.2s ease;
        background: white;
    }

    .sub-menu a:hover {
        background: var(--primary);
        color: white;
        padding-left: 25px;
    }

    .item-icon {
        width: 30px;
        height: 30px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary);
        color: white;
        font-size: 12px;
        margin-right: 12px;
        transition: all 0.2s ease;
    }

    .sub-menu a:hover .item-icon {
        background: white;
        color: var(--primary);
        transform: scale(1.1);
    }

    .menu-item-content {
        flex: 1;
    }

    .menu-item-title {
        font-weight: 600;
        font-size: 13px;
        margin-bottom: 2px;
    }

    .menu-item-desc {
        font-size: 11px;
        opacity: 0.7;
    }

    /* Sélecteur de langue Skewed */
    .language-selector {
        position: relative;
        margin-left: 0;
    }

    .language-current {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 0 25px;
        height: 70px;
        background: rgba(9, 170, 57, 0.05);
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: Tahoma, Calibri, sans-serif;
        font-weight: 600;
        font-size: 13px;
        transform: skewX(var(--skew-angle));
        border-left: 1px solid rgba(0, 0, 0, 0.05);
    }

    .language-current span {
        transform: skewX(var(--skew-angle-positive));
    }

    .language-current:hover {
        background: var(--primary);
        color: white;
    }

    .language-dropdown {
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        min-width: 120px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        display: none;
        transform: skewX(var(--skew-angle));
        z-index: 1000;
    }

    .language-selector.open .language-dropdown {
        display: block;
    }

    .language-option {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 15px;
        color: var(--dark);
        text-decoration: none;
        font-family: Tahoma, Calibri, sans-serif;
        font-weight: 500;
        font-size: 13px;
        transition: all 0.2s ease;
        transform: skewX(var(--skew-angle-positive));
    }

    .language-option:hover {
        background: var(--primary);
        color: white;
    }

    /* Menu Mobile - Version simplifiée sans skew */
    .mobile-toggle {
        display: none;
        flex-direction: column;
        gap: 4px;
        cursor: pointer;
        background: none;
        border: none;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .mobile-toggle span {
        height: 2px;
        width: 24px;
        background: var(--dark);
        border-radius: 1px;
        transition: all 0.3s ease;
    }

    .mobile-toggle.open span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .mobile-toggle.open span:nth-child(2) {
        opacity: 0;
    }

    .mobile-toggle.open span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
        .nav-link {
            padding: 0 25px;
            font-size: 13px;
        }
        
        .language-current {
            padding: 0 20px;
        }
    }

    @media (max-width: 900px) {
        .nav-link {
            padding: 0 20px;
            font-size: 12px;
        }
        
        .logo {
            padding: 15px 25px;
        }
    }

    @media (max-width: 768px) {
        .header-container {
            padding: 0 15px;
            height: 70px;
        }

        .logo {
            margin-right: 0;
            transform: none;
            padding: 15px 0;
            background: transparent;
        }

        .logo::before {
            display: none;
        }

        .logo a {
            transform: none;
        }

        .logo img {
            filter: none;
            height: 35px;
        }

        /* Cacher le menu skewed desktop */
        nav.main-nav {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            max-width: 300px;
            height: 100vh;
            background: white;
            flex-direction: column;
            padding: 80px 0 30px;
            box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
            transition: right 0.3s ease;
            overflow-y: auto;
        }

        nav.main-nav.open {
            right: 0;
        }

        .nav-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .nav-overlay.active {
            display: block;
        }

        /* Menu mobile sans skew */
        ul.menu {
            flex-direction: column;
            width: 100%;
        }

        .nav-item {
            width: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .nav-link {
            transform: none;
            height: auto;
            padding: 18px 25px;
            border-left: none;
            font-size: 15px;
        }

        .nav-link span {
            transform: none;
        }

        .nav-link::before {
            display: none;
        }

        .nav-link:hover,
        .nav-link.active {
            background: var(--primary);
            color: white;
        }

        /* Sous-menus mobile */
        .sub-menu {
            position: static;
            display: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            border-top: none;
            background: rgba(9, 170, 57, 0.03);
        }

        .sub-menu.active {
            display: block;
        }

        .sub-menu li {
            transform: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.03);
        }

        .sub-menu a {
            padding: 15px 25px 15px 45px;
            font-size: 14px;
        }

        .nav-link.has-submenu::after {
            content: '›';
            margin-left: auto;
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .nav-link.has-submenu.submenu-open::after {
            transform: rotate(90deg);
        }

        /* Sélecteur de langue mobile */
        .language-selector {
            margin: 20px 25px 0;
            width: calc(100% - 50px);
        }

        .language-current {
            transform: none;
            height: auto;
            padding: 15px 20px;
            border-left: none;
            border-radius: 5px;
            justify-content: center;
        }

        .language-current span {
            transform: none;
        }

        .language-dropdown {
            position: static;
            width: 100%;
            margin-top: 8px;
            display: none;
            transform: none;
            box-shadow: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .language-option {
            transform: none;
        }

        .mobile-toggle {
            display: flex;
            z-index: 1001;
        }
    }

    @media (max-width: 480px) {
        .header-container {
            padding: 0 10px;
        }

        nav.main-nav {
            max-width: 280px;
        }

        .nav-link {
            padding: 16px 20px;
        }

        .sub-menu a {
            padding: 14px 20px 14px 40px;
        }

        .language-selector {
            margin: 20px 20px 0;
            width: calc(100% - 40px);
        }
    }
</style>

<header id="header">
    <div class="header-container">
        <!-- Logo avec effet skewed -->
        <div class="logo">
            <a href="<?php echo url('home'); ?>">
                <img src="assets/images/logo.png" alt="Tunaffaires" onerror="this.src='https://via.placeholder.com/180x50/09aa39/ffffff?text=TUN-AFFAIRES'">
            </a>
        </div>

        <!-- Overlay pour mobile -->
        <div class="nav-overlay" id="nav-overlay"></div>

        <!-- Navigation Skewed -->
        <nav id="main-nav" class="main-nav" role="navigation" aria-label="Navigation principale">
            <ul class="menu">
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'home' ? 'active' : ''; ?> has-submenu" href="<?php echo url('home'); ?>">
                        <span>Accueil</span>
                    </a>
                    <ul class="sub-menu" aria-hidden="true">
                        <li>
                            <a href="<?php echo url('about'); ?>">
                                <span class="item-icon">🎯</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Notre Mission</div>
                                    <div class="menu-item-desc">Découvrez notre vision</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('about'); ?>#valeurs">
                                <span class="item-icon">❤️</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Nos Valeurs</div>
                                    <div class="menu-item-desc">Ce qui nous guide</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($page, ['services','solutions','tarifs']) ? 'active' : ''; ?> has-submenu" href="<?php echo url('services'); ?>">
                        <span>Offres</span>
                    </a>
                    <ul class="sub-menu" aria-hidden="true">
                        <li>
                            <a href="<?php echo url('services'); ?>">
                                <span class="item-icon">⚡</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Nos Services</div>
                                    <div class="menu-item-desc">Solutions complètes</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('solutions'); ?>">
                                <span class="item-icon">💎</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Solutions</div>
                                    <div class="menu-item-desc">Approches sur-mesure</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('tarifs'); ?>">
                                <span class="item-icon">🏆</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Tarifs Premium</div>
                                    <div class="menu-item-desc">Options flexibles</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($page, ['portfolio','actualites','evenements']) ? 'active' : ''; ?> has-submenu" href="<?php echo url('portfolio'); ?>">
                        <span>Projets</span>
                    </a>
                    <ul class="sub-menu" aria-hidden="true">
                        <li>
                            <a href="<?php echo url('portfolio'); ?>">
                                <span class="item-icon">🚀</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Portfolio</div>
                                    <div class="menu-item-desc">Nos réalisations</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('actualites'); ?>">
                                <span class="item-icon">📢</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Actualités</div>
                                    <div class="menu-item-desc">Dernières nouvelles</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('evenements'); ?>">
                                <span class="item-icon">✨</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Événements</div>
                                    <div class="menu-item-desc">Agenda et rencontres</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($page, ['equipe','partenaires']) ? 'active' : ''; ?> has-submenu" href="<?php echo url('equipe'); ?>">
                        <span>Équipe</span>
                    </a>
                    <ul class="sub-menu align-right" aria-hidden="true">
                        <li>
                            <a href="<?php echo url('equipe'); ?>">
                                <span class="item-icon">🌟</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">L'équipe</div>
                                    <div class="menu-item-desc">Experts passionnés</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('partenaires'); ?>">
                                <span class="item-icon">🤝</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Partenaires</div>
                                    <div class="menu-item-desc">Réseau de confiance</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'faq' ? 'active' : ''; ?>" href="<?php echo url('faq'); ?>">
                        <span>Aide</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo in_array($page, ['contact','rdv']) ? 'active' : ''; ?> has-submenu" href="<?php echo url('contact'); ?>">
                        <span>Contact</span>
                    </a>
                    <ul class="sub-menu align-right" aria-hidden="true">
                        <li>
                            <a href="<?php echo url('contact'); ?>">
                                <span class="item-icon">📞</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Nous contacter</div>
                                    <div class="menu-item-desc">Échange direct</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('rdv'); ?>">
                                <span class="item-icon">🎯</span>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Réserver RDV</div>
                                    <div class="menu-item-desc">Consultation personnalisée</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sélecteur de Langue Skewed -->
            <div class="language-selector" id="language-selector">
                <div class="language-current" id="language-current">
                    <img src="<?php echo $lang_flags[$current_lang]; ?>" alt="<?php echo $lang_names[$current_lang]; ?>" style="width:18px;height:14px;object-fit:cover;">
                    <span><?php echo $lang_names[$current_lang]; ?></span>
                </div>
                <div class="language-dropdown" id="language-dropdown" role="menu">
                    <?php foreach($lang_flags as $code=>$flag): if($code === $current_lang) continue; ?>
                        <a class="language-option" href="?<?php 
                            $query_params = $_GET;
                            $query_params['lang'] = $code;
                            echo http_build_query($query_params);
                        ?>">
                            <img src="<?php echo $flag; ?>" alt="<?php echo strtoupper($code); ?>" style="width:18px;height:14px;object-fit:cover;">
                            <span><?php echo strtoupper($code); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </nav>

        <!-- Bouton Mobile -->
        <button class="mobile-toggle" id="mobile-toggle" aria-label="Menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script>
(function(){
    const mobileToggle = document.getElementById('mobile-toggle');
    const nav = document.getElementById('main-nav');
    const overlay = document.getElementById('nav-overlay');
    const langSel = document.getElementById('language-selector');
    const langCur = document.getElementById('language-current');
    const header = document.getElementById('header');

    // Toggle menu mobile
    function toggleMobileMenu() {
        const isOpen = nav.classList.toggle('open');
        mobileToggle.classList.toggle('open');
        overlay.classList.toggle('active');
        mobileToggle.setAttribute('aria-expanded', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    }

    mobileToggle?.addEventListener('click', toggleMobileMenu);
    overlay?.addEventListener('click', toggleMobileMenu);

    // Toggle sélecteur de langue
    langCur?.addEventListener('click', (e)=>{
        e.stopPropagation();
        langSel.classList.toggle('open');
    });

    // Gestion des sous-menus en mobile
    document.querySelectorAll('.nav-link.has-submenu').forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const submenu = this.nextElementSibling;
                const isActive = submenu.classList.contains('active');
                
                // Fermer tous les autres sous-menus
                document.querySelectorAll('.sub-menu').forEach(menu => {
                    if (menu !== submenu) menu.classList.remove('active');
                });
                document.querySelectorAll('.nav-link.has-submenu').forEach(navLink => {
                    if (navLink !== this) navLink.classList.remove('submenu-open');
                });
                
                // Toggle le sous-menu actuel
                submenu.classList.toggle('active');
                this.classList.toggle('submenu-open');
            }
        });
    });

    // Fermer les menus en cliquant à l'extérieur
    document.addEventListener('click', (e) => {
        if (langSel.classList.contains('open') && !langSel.contains(e.target)) {
            langSel.classList.remove('open');
        }
    });

    // Effet de scroll sur le header
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Réinitialiser au redimensionnement
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            nav.classList.remove('open');
            mobileToggle.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
            
            document.querySelectorAll('.sub-menu').forEach(menu => {
                menu.classList.remove('active');
            });
            document.querySelectorAll('.nav-link.has-submenu').forEach(link => {
                link.classList.remove('submenu-open');
            });
        }
    });

    // Fermer avec Echap
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (nav.classList.contains('open')) toggleMobileMenu();
            if (langSel.classList.contains('open')) langSel.classList.remove('open');
        }
    });
})();
</script>