<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sectors of Intervention - INPROOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #570045;
            --primary-light: #8a4c7c;
            --primary-dark: #3d0030;
            --secondary-color: #ff7b00;
            --secondary-light: #ff9e40;
            --secondary-dark: #e55a00;
            --accent-color: #00c6b3;
            --dark-color: #1A1A2E;
            --light-color: #F8F9FC;
            --gray-color: #6C757D;
            --light-gray: #e9ecef;
            --transition: all 0.3s ease;
            --shadow: 0 4px 20px rgba(87, 0, 69, 0.15);
            --shadow-hover: 0 15px 30px rgba(87, 0, 69, 0.2);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-color);
            line-height: 1.8;
            background-color: #ffffff;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .section-title {
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            font-size: 2.5rem;
        }

        .section-subtitle {
            color: var(--dark-color);
            font-size: 1.2rem;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-section {
            background: linear-gradient(rgba(93, 50, 139, 0.65), rgba(93, 50, 139, 0.53)), url('https://blog-assets.3ds.com/uploads/2025/01/best-of-2024-dassault-systemes-mbse.jpg') no-repeat center center/cover;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 4rem 0;
        }
        
        .hero-title {
            font-weight: 900;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 500;
        }

        .training-card {
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            border: 1px solid var(--light-gray);
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
        }

        .training-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .training-card-header {
            height: 180px;
            overflow: hidden;
            position: relative;
            flex-shrink: 0;
        }

        .training-card-header .card-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            opacity: 0.95;
            display: block;
        }

        .training-card:hover .training-card-header .card-bg {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }

        .training-card h5 {
            font-size: 1.2rem;
            font-weight: 700;
            margin: 0 0 1rem 0;
            color: var(--primary-color);
            line-height: 1.3;
            padding: 0 0.5rem;
            width: 100%;
            text-align: center;
        }

        .training-card p {
            color: #343a40;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .benefit-item {
            margin-bottom: 3.5rem;
            display: flex;
            align-items: flex-start;
            font-size: 1.2rem;

        }

        .benefit-icon {
            font-size: 2rem;
 
            margin-right: 1.5rem;
          
           color: #570045; 
        }

        .benefit-content {
            flex: 1;
        }

        .benefit-content h5 {
            font-weight: 500;
            margin-top: 5px;
        }

        .cta-section {
            background: linear-gradient(rgba(93, 50, 139, 0.65), rgba(93, 50, 139, 0.35)), url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1900&q=80') no-repeat center center/cover;
            color: white;
            padding: 5rem 0;
            text-align: center;
        }

        .btn-cta {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.9rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .btn-cta:hover {
            background-color: var(--secondary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .col-lg-3 {
                flex: 0 0 auto;
                width: 50%;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title { 
                font-size: 2rem; 
            }
            
            .section-title { 
                font-size: 2rem; 
            }
            
            .training-card-header { 
                height: 160px; 
            }
            
            .card-body { 
                padding: 1rem; 
            }
            
            .col-lg-3 { 
                width: 100%; 
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title" data-aos="fade-up">Multisectoral Expertise</h1>
            
            <div class="mt-4" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php echo url('contact'); ?>" class="btn" style="
                    display: inline-block;
                    background-color: #ab5d99ff;
                    color: white;
                    padding: 12px 30px;
                    text-decoration: none;
                    border-radius: 4px;
                    font-weight: normal;
                    margin-top: 20px;
                ">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Image on the left -->
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=870&auto=format&fit=crop"
             alt="INPROOV Sector Expertise"
             class="img-fluid rounded shadow-lg">
      </div>

      <!-- Text in a frame -->
      <div class="col-lg-6" data-aos="fade-left">
        <div class="p-4 p-lg-5 bg-white rounded-4 shadow-sm border position-relative" 
             style="z-index:1; font-size:0.95rem; line-height:1.55; min-height:100%;">
          <h2 class="section-title mb-3" style="color:#570045; font-size:1.6rem; line-height:1.3;">
            Specialized Know-How
          </h2>
          <p style="font-size: 16px;">
            INPROOV supports its clients where complexity meets opportunity,
            by providing solutions adapted to the specificities of each sector
            and to strategic, operational and human challenges.
          </p>
          <p style="font-size: 16px;">
            Our sectoral approach is based on <strong>multitask expertise, proven
            methodologies and a deep understanding of the target issues in each field</strong>.
          </p>
          <p style="font-size: 16px;">
            We understand that each sector presents its own regulatory, 
            technological, economic and human challenges. This is why
            we <strong>adapt our solutions and our advice</strong> to maximize the
            performance, agility and competitiveness of our clients, while ensuring
            continuous development and improvement.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Sectors Grid Section - Inspired by the training page -->
    <section id="sectors" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Overview of Our Sectors of Intervention</h2>
                    <p class="section-subtitle">Discover how we adapt our expertise to your sectoral challenges</p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Services -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1560264280-88b68371db39?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Services">
                        </div>
                        <div class="card-body">
                            <h5>Services</h5>
                            <p>Relational performance, operational excellence and organizational transformation.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Industry and production -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Industry and production">
                        </div>
                        <div class="card-body">
                            <h5>Industry and Production</h5>
                            <p>Process optimization, lean management, digital transformation of operations.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Financial services and banks -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Financial services and banks">
                        </div>
                        <div class="card-body">
                            <h5>Financial Services and Banks</h5>
                            <p>Risk management, regulatory compliance, strategic and organizational development.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Technology and innovation -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Technology and innovation">
                        </div>
                        <div class="card-body">
                            <h5>Technology and Innovation</h5>
                            <p>Integration of new technologies, AI, digitalization and complex project management.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Healthcare and pharmaceutical -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Healthcare and pharmaceutical">
                        </div>
                        <div class="card-body">
                            <h5>Healthcare and Pharmaceutical</h5>
                            <p>Improvement of operational performance, talent management and organizational transformation.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Public sector and institutions -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1593113598332-cd288d649433?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Public sector and institutions">
                        </div>
                        <div class="card-body">
                            <h5>Public Sector and Institutions</h5>
                            <p>Steering of strategic projects, skills development and organizational efficiency.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Commerce, distribution and B2B/B2C -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Commerce, distribution and B2B/B2C">
                        </div>
                        <div class="card-body">
                            <h5>Commerce and Distribution B2B/B2C</h5>
                            <p>Commercial strategies, marketing, customer relationship and loyalty.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Logistics and supply chain -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="training-card">
                        <div class="training-card-header">
                            <img class="card-bg" src="https://images.unsplash.com/photo-1634638025184-9ab3d47c8b74?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Logistics and supply chain">
                        </div>
                        <div class="card-body">
                            <h5>Logistics and Supply Chain</h5>
                            <p>Flow optimization, operations management, process digitalization and overall performance improvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Why Choose Us? - Inspired by the career page -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-start mb-5" data-aos="fade-up">
        <h2 class="section-title text-start">Why Choose Us?</h2>
      </div>
    </div>

    <div class="row align-items-stretch">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <img
          src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="INPROOV Team" style="width: 620px;"
          class="img-fluid rounded shadow"
        />
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center text-start" data-aos="fade-left" style="font-size: 0.9rem; line-height: 1.4;">
        <div class="benefit-item mb-3 d-flex">
          <div class="benefit-icon" style="width: 40px; display:flex; align-items:flex-start; justify-content:center;">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="benefit-content">
            <h5 class="fw-bold mb-1 text-start">Multidisciplinary Expertise</h5>
          </div>
        </div>

        <div class="benefit-item mb-3 d-flex">
          <div class="benefit-icon" style="width: 40px; display:flex; align-items:flex-start; justify-content:center;">
            <i class="fas fa-bullseye"></i>
          </div>
          <div class="benefit-content">
            <h5 class="fw-bold mb-1 text-start">Tailored and Results-Oriented Solutions</h5>
          </div>
        </div>

        <div class="benefit-item mb-3 d-flex">
          <div class="benefit-icon" style="width: 40px; display:flex; align-items:flex-start; justify-content:center;">
            <i class="fas fa-handshake"></i>
          </div>
          <div class="benefit-content">
            <h5 class="fw-bold mb-1 text-start">Collaborative and Partnership-Based Approach</h5>
          </div>
        </div>

        <div class="benefit-item mb-3 d-flex">
          <div class="benefit-icon" style="width: 40px; display:flex; align-items:flex-start; justify-content:center;">
            <i class="fas fa-lightbulb"></i>
          </div>
          <div class="benefit-content">
            <h5 class="fw-bold mb-1 text-start">Innovation and International Standard Methodologies</h5>
          </div>
        </div>
        
        <div class="benefit-item mb-3 d-flex">
          <div class="benefit-icon" style="width: 40px; display:flex; align-items:flex-start; justify-content:center;">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="benefit-content">
            <h5 class="fw-bold mb-1 text-start">Commitment to Performance</h5>
          </div>
        </div>

        <div class="benefit-item d-flex">
          <div class="benefit-icon" style="width: 40px; display:flex; align-items:flex-start; justify-content:center;">
            <i class="fas fa-seedling"></i>
          </div>
          <div class="benefit-content">
            <h5 class="fw-bold mb-1 text-start">Societal and Environmental Responsibility Integrated in Our Actions</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- CTA Section -->
<section class="cta" style="
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
    color: white;
    text-align: center;
">
    <div class="container">
        <h2>Ready to Stand Out in Your Business Sector?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem;">Contact us today to discuss your needs and discover how our tailored solutions can help you stand out.</p>
        <a href="<?php echo url('contact'); ?>" class="btn" style="
            display: inline-block;
            background-color: #8a4c7c;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
        ">Contact Us</a>
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