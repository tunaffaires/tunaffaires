<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="hero-background">
        <div class="hero-overlay"></div>
    </div>
    
    <div class="container position-relative">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-8 col-xl-7">
                <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="hero-title display-3 fw-bold text-white mb-4">
                        <?php echo t('home_title'); ?>
                    </h1>
                    <p class="hero-subtitle h4 text-white-50 mb-4">
                        <?php echo t('home_subtitle'); ?>
                    </p>
                    <p class="hero-description lead text-white mb-5">
                        <?php echo t('home_description'); ?>
                    </p>
                    
                    <div class="hero-actions">
                        <a href="<?php echo url('services'); ?>" class="btn btn-primary btn-lg me-3 mb-3">
                            <i class="fas fa-rocket me-2"></i><?php echo t('home_cta'); ?>
                        </a>
                        <a href="<?php echo url('contact'); ?>" class="btn btn-outline-light btn-lg mb-3">
                            <i class="fas fa-phone me-2"></i><?php echo t('contact_title'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-arrow">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-overview py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Areas of Excellence</h2>
                <p class="section-subtitle">Comprehensive solutions for your development</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 class="service-title"><?php echo t('services_coaching'); ?></h5>
                    <p class="service-description">Leadership development and personalized coaching</p>
                    <a href="<?php echo url('services'); ?>" class="service-link">
                        <?php echo t('learn_more'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5 class="service-title"><?php echo t('services_accompagnement'); ?></h5>
                    <p class="service-description">Organizational transformation and process optimization</p>
                    <a href="<?php echo url('services'); ?>" class="service-link">
                        <?php echo t('learn_more'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5 class="service-title"><?php echo t('services_conseil'); ?></h5>
                    <p class="service-description">Innovative strategies and expert advice</p>
                    <a href="<?php echo url('services'); ?>" class="service-link">
                        <?php echo t('learn_more'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 class="service-title"><?php echo t('services_formations_mesure'); ?></h5>
                    <p class="service-description">Programs tailored to your specific needs</p>
                    <a href="<?php echo url('formations'); ?>" class="service-link">
                        <?php echo t('learn_more'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-content">
                    <h2 class="section-title"><?php echo t('about_title'); ?></h2>
                    <p class="lead mb-4">
                        Univers Formation & Consulting is a training and consulting firm dedicated to supporting businesses, institutions, and individual talents in their evolution.
                    </p>
                    <p class="mb-4">
                        We believe in the power of knowledge, innovation, and coaching to transform organizations and reveal human potential.
                    </p>
                    
                    <!-- Values -->
                    <div class="values-grid">
                        <div class="value-item">
                            <i class="fas fa-star text-primary me-2"></i>
                            <span><?php echo t('about_excellence'); ?></span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-handshake text-primary me-2"></i>
                            <span><?php echo t('about_integrity'); ?></span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-rocket text-primary me-2"></i>
                            <span><?php echo t('about_innovation'); ?></span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-heart text-primary me-2"></i>
                            <span><?php echo t('about_human_value'); ?></span>
                        </div>
                    </div>
                    
                    <a href="<?php echo url('about'); ?>" class="btn btn-primary mt-4">
                        <?php echo t('learn_more'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-image">
                    <img src="assets/images/team-meeting.jpg" alt="Our team" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-item">
                    <div class="stat-number" data-count="500">0</div>
                    <div class="stat-label">Satisfied Clients</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-number" data-count="1000">0</div>
                    <div class="stat-label">Training Hours</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <div class="stat-number" data-count="50">0</div>
                    <div class="stat-label">Developed Programs</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-item">
                    <div class="stat-number" data-count="10">0</div>
                    <div class="stat-label">Years of Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="section-title mb-4" style="color: white;">Ready to Transform Your Organization?</h2>
                <p class="lead mb-5">
                    Contact us today to discover how we can support you in your development.
                </p>
                <div class="cta-actions">
                    <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg me-3 mb-3">
                        <i class="fas fa-paper-plane me-2"></i>Contact Us
                    </a>
                    <a href="<?php echo url('services'); ?>" class="btn btn-outline-primary btn-lg mb-3">
                        <i class="fas fa-eye me-2"></i>View Our Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>