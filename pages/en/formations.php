<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Training Programs - Univers Formation & Consulting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007bff; /* Vibrant Blue */
            --secondary-color: #28a745; /* Vibrant Green */
            --accent-color: #fd7e14; /* Dynamic Orange */
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --text-dark: #343a40;
            --text-light: #6c757d;
            --border-color: #e9ecef;
            --border-radius: 12px;
            --border-radius-lg: 16px;
            --shadow-sm: 0 4px 8px rgba(0,0,0,0.05);
            --shadow-md: 0 8px 16px rgba(0,0,0,0.1);
            --shadow-lg: 0 15px 30px rgba(0,0,0,0.15);
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            line-height: 1.8;
            background-color: #f0f2f5;
        }
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
            left: 0;
            width: 80px;
            height: 6px;
            background: var(--secondary-color);
            border-radius: 3px;
        }
        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        .section-subtitle {
            color: var(--text-light);
            font-size: 1.2rem;
            margin-bottom: 3rem;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=1974&q=80') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
            border-bottom-left-radius: var(--border-radius-lg);
            border-bottom-right-radius: var(--border-radius-lg);
        }
        .hero-title {
            font-weight: 900;
            font-size: 3.5rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        }
        .hero-subtitle {
            font-weight: 300;
            font-size: 1.5rem;
        }
        .training-card {
            background: white;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            overflow: hidden;
            border: none;
            position: relative;
            z-index: 1;
        }
        .training-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: var(--secondary-color);
            transition: height 0.4s ease-in-out;
            z-index: -1;
            opacity: 0.1;
        }
        .training-card:hover::before {
            height: 100%;
        }
        .training-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        .card-body {
            padding: 2.5rem;
        }
        .training-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            transition: var(--transition);
        }
        .training-card:hover .training-icon {
            color: var(--secondary-color);
            transform: rotateY(180deg);
        }
        .training-card h5 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .training-card p {
            color: var(--text-light);
            font-size: 1rem;
        }

        .pack-section {
            background-color: white;
            border-radius: var(--border-radius-lg);
            padding: 4rem 2rem;
            box-shadow: var(--shadow-md);
        }

        .pack-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 3rem;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            height: 100%;
            transition: var(--transition);
        }

        .pack-card h4 {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .pack-card ul {
            list-style: none;
            padding: 0;
            margin-top: 1.5rem;
        }
        
        .pack-card ul li {
            position: relative;
            padding-left: 30px;
            text-align: left;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .pack-card ul li::before {
            content: '\f058'; /* FontAwesome check icon in circle */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--accent-color);
            font-size: 1.2rem;
        }
        .cta-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1900&q=80') no-repeat center center/cover;
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
            background-color: var(--primary-color);
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
    <section class="hero-section text-center py-5">
        <div class="container" data-aos="fade-up">
            <h1 class="hero-title fw-bold mb-3">Our Training Programs</h1>
            <p class="hero-subtitle mb-0">Comprehensive and tailor-made solutions for your development</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">B2B Programs - Companies & Organizations</h2>
                    <p class="section-subtitle">Strengthening team competitiveness and supporting organizational transformations.</p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-chart-line training-icon"></i>
                            <h5 class="card-title">Mini MBA & Mini DBA</h5>
                            <p class="card-text">Project management, multi-sector corporate strategy, leadership, and innovation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-users-cog training-icon"></i>
                            <h5 class="card-title">Management & Leadership</h5>
                            <p class="card-text">Agile leadership, change management, performance management, and team motivation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-shield-alt training-icon"></i>
                            <h5 class="card-title">Risk & Quality Management</h5>
                            <p class="card-text">Risk identification and mitigation, quality systems, health, and safety at work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-bullhorn training-icon"></i>
                            <h5 class="card-title">Sales Training</h5>
                            <p class="card-text">Sales fundamentals, negotiation techniques, customer relationship management, and advanced sales performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-laptop-code training-icon"></i>
                            <h5 class="card-title">Digital Transformation</h5>
                            <p class="card-text">Artificial intelligence applied to business, process optimization with collaborative tools, and IT certifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-brain training-icon"></i>
                            <h5 class="card-title">Soft Skills & Professional Effectiveness</h5>
                            <p class="card-text">Time management, personal organization, self-confidence, emotional intelligence, and creativity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">B2C Programs - Individuals & Freelancers</h2>
                    <p class="section-subtitle">Develop employability, boost your career, and foster personal and professional growth.</p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-user-tie training-icon"></i>
                            <h5 class="card-title">Employability & Career</h5>
                            <p class="card-text">Personal branding, impactful CV, LinkedIn profile optimization, and career strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-comments training-icon"></i>
                            <h5 class="card-title">Coaching & NLP</h5>
                            <p class="card-text">Fundamentals of coaching, individual and group coaching, and effective communication through NLP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-tools training-icon"></i>
                            <h5 class="card-title">Operational Skills & Management</h5>
                            <p class="card-text">Process optimization, digital transformation, office solutions, and finance for non-financial professionals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="training-card text-center">
                        <div class="card-body">
                            <i class="fas fa-heart training-icon"></i>
                            <h5 class="card-title">Personal Development</h5>
                            <p class="card-text">Stress management, adaptability, creativity, critical thinking, decision making, autonomy, and accountability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container pack-section">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Featured: Our Packs</h2>
                    <p class="section-subtitle">Structured and coherent learning paths for a complete and synergistic learning experience.</p>
                </div>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6 d-flex" data-aos="fade-right">
                    <div class="pack-card flex-grow-1">
                        <h4>Why choose our packs?</h4>
                        <p>Our packs combine educational coherence, time-saving, and synergy between the addressed themes. They offer a global vision while providing targeted solutions.</p>
                        <img src="https://images.unsplash.com/photo-1543286386-249539483a99?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Why choose our packs?" class="img-fluid rounded mt-4 shadow">
                    </div>
                </div>
                <div class="col-lg-6 d-flex" data-aos="fade-left">
                    <div class="pack-card flex-grow-1">
                        <h4>Pack objectives</h4>
                        <ul>
                            <li>Offer integrated and high-value-added training.</li>
                            <li>Optimize companies' time and investment in talent management.</li>
                            <li>Guarantee an immediate impact through practical and results-oriented approaches.</li>
                        </ul>
                        <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pack objectives" class="img-fluid rounded mt-4 shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5 text-center text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="section-title text-white mb-4">Ready to Transform Your Organization?</h2>
                    <p class="lead mb-5">
                        Contact us today to find out how we can support your development.
                    </p>
                    <div class="cta-actions">
                        <a href="contact.php" class="btn btn-primary btn-lg me-3 mb-3">
                            <i class="fas fa-paper-plane me-2"></i>Contact Us
                        </a>
                        <a href="about.php" class="btn btn-outline-light btn-lg mb-3">
                            <i class="fas fa-eye me-2"></i>Discover Our Team
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