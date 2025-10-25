<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - INPROOV Consulting</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', sans-serif;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--light-color);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--primary-color);
            color: white;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }
        
        .btn-secondary {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-secondary:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .btn-accent {
            background: var(--accent-color);
        }
        
        .btn-accent:hover {
            background: #00a895;
        }
        
        /* Hero Section with background image */
        .faq-hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            padding-top: 80px;
            overflow: hidden;
            background: linear-gradient(rgba(87, 0, 69, 0.1), rgba(87, 0, 69, 0.1)), 
                        url('https://images.unsplash.com/photo-1590650516494-0c8e4a4dd67e?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center/cover;
        }
        
        .hero-container {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            gap: 40px;
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero-image img {
            max-width: 400px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(87, 0, 69, 0.4);
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: white;
            line-height: 1.2;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
            margin-top: 2rem;
        }
        
        /* Search Section */
        .faq-search-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .search-box {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .search-box .input-group {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
        }
        
        .search-box .form-control {
            border: none;
            padding: 20px 25px;
            font-size: 1.1rem;
            border-radius: 50px 0 0 50px;
        }
        
        .search-box .form-control:focus {
            box-shadow: none;
        }
        
        .search-box .btn {
            border-radius: 0 50px 50px 0;
            padding: 0 30px;
            background: var(--primary-color);
            border: none;
            transition: var(--transition);
        }
        
        .search-box .btn:hover {
            background: var(--primary-dark);
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 100px 0;
        }
        
        .faq-categories {
            margin-bottom: 60px;
        }
        
        .faq-categories h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--dark-color);
        }
        
        .category-btn {
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            padding: 10px 25px;
            margin: 0 10px 15px 0;
            background: transparent;
            color: var(--primary-color);
            font-weight: 600;
            transition: var(--transition);
        }
        
        .category-btn:hover,
        .category-btn.active {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }
        
        .accordion-item {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .accordion-item:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-2px);
        }
        
        .accordion-button {
            padding: 25px;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 10px !important;
            background: white;
            color: var(--dark-color);
            box-shadow: none;
        }
        
        .accordion-button:not(.collapsed) {
            background: var(--primary-color);
            color: white;
        }
        
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transition: var(--transition);
        }
        
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transform: rotate(-180deg);
        }
        
        .accordion-body {
            padding: 25px;
            background: #f8f9fa;
        }
        
        /* Feature items */
        .feature-item {
            transition: var(--transition);
            padding: 15px;
            border-radius: 10px;
        }
        
        .feature-item:hover {
            background: rgba(87, 0, 69, 0.05);
            transform: translateX(5px);
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-color);
            color: white;
            font-size: 1.2rem;
            transition: var(--transition);
        }
        
        .feature-item:hover .feature-icon {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(87, 0, 69, 0.3);
        }
        
        /* CTA Section */
        .faq-cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .faq-cta-section .btn {
            border-radius: 50px;
            padding: 15px 30px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .faq-cta-section .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Animation for accordion items */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .accordion-item {
            animation: fadeIn 0.5s ease forwards;
        }
        
        .accordion-item:nth-child(even) {
            animation-delay: 0.1s;
        }
        
        .accordion-item:nth-child(odd) {
            animation-delay: 0.2s;
        }
        
        /* No results */
        .no-results {
            opacity: 0;
            transition: var(--transition);
            padding: 60px 0;
        }
        
        .no-results.show {
            opacity: 1;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-content {
                margin-bottom: 2rem;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .accordion-button {
                padding: 20px;
                font-size: 1rem;
            }
            
            .feature-item {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<!-- Hero Section with background image -->
<section class="faq-hero">
    <div class="hero-overlay"></div>

    <div class="hero-container">
        <!-- Text on the left -->
        <div class="hero-content" data-aos="fade-right">
            <h1>Frequently Asked Questions</h1>
            <p>Get answers about our services, methods, and expertise.</p>
            <div class="hero-buttons">
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

        <!-- Image on the right -->
        <div class="hero-image" data-aos="fade-left">
            <!-- Image can be added here if needed -->
        </div>
    </div>
</section>

<!-- Search Section
<section class="faq-search-section" id="faq-search">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4" data-aos="fade-up">Search for a question</h2>
                <div class="search-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="input-group">
                        <input type="text" class="form-control" id="faq-search-input" placeholder="Type your question...">
                        <button class="btn" type="button">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> ---->

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="faq-categories text-center" data-aos="fade-up">
                    <h3>How can we help you?</h3>
                    <div class="d-flex flex-wrap justify-content-center">
                        <button class="category-btn active" data-category="all">
                            All Questions
                        </button>
                        <button class="category-btn" data-category="expertise">
                            Expertise
                        </button>
                        <button class="category-btn" data-category="methodology">
                            Methodology
                        </button>
                        <button class="category-btn" data-category="training">
                            Training
                        </button>
                    </div>
                </div>

                <div class="accordion" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-category="expertise">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="accordion-icon me-3">
                                    <i class="fas fa-question-circle"></i>
                                </span>
                                What are your main areas of expertise?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Our firm offers multidisciplinary support in the following areas:</p>
                                <div class="expertise-list">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Strategy and business development</li>
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Process optimization and operational performance</li>
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Talent management and skills development</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Financial management</li>
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Digital transformation and innovation</li>
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Marketing and communication</li>
                                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Other services based on your specific needs</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100" data-category="methodology">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="accordion-icon me-3">
                                    <i class="fas fa-question-circle"></i>
                                </span>
                                How do your consultants work with our teams?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Our experts combine field experience, international standard methodologies, and a personalized approach to co-build concrete and measurable solutions.</p>
                                <p>They can intervene in two ways:</p>
                                <div class="working-methods">
                                    <div class="method-card bg-light p-4 rounded mb-3">
                                        <h5 class="d-flex align-items-center">
                                            <i class="fas fa-building text-primary me-3"></i>
                                            Direct immersion at your premises
                                        </h5>
                                        <p class="mb-0">Our consultants integrate with your teams for optimal collaboration and a deep understanding of your environment.</p>
                                    </div>
                                    <div class="method-card bg-light p-4 rounded">
                                        <h5 class="d-flex align-items-center">
                                            <i class="fas fa-laptop-house text-primary me-3"></i>
                                            Remote support
                                        </h5>
                                        <p class="mb-0">We adapt our methods to ensure optimal monitoring and effective implementation, regardless of distance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200" data-category="training">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="accordion-icon me-3">
                                    <i class="fas fa-question-circle"></i>
                                </span>
                                Do you offer certified training and coaching programs?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Yes. We offer modular and certified pathways in close collaboration with our exclusive training partner.</p>
                                <div class="training-features">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex align-items-start mb-4">
                                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                                <div>
                                                    <h5>Certified training</h5>
                                                    <p class="mb-0">Recognized programs to value acquired skills</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex align-items-start mb-4">
                                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                                    <i class="fas fa-puzzle-piece"></i>
                                                </div>
                                                <div>
                                                    <h5>Modular approach</h5>
                                                    <p class="mb-0">Adaptable pathways according to your needs and constraints</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex align-items-start mb-4">
                                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                                    <i class="fas fa-handshake"></i>
                                                </div>
                                                <div>
                                                    <h5>Exclusive partnership</h5>
                                                    <p class="mb-0">Close collaboration with training experts</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex align-items-start mb-4">
                                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                                <div>
                                                    <h5>Personalized follow-up</h5>
                                                    <p class="mb-0">Individualized coaching to maximize learning</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300" data-category="methodology">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="accordion-icon me-3">
                                    <i class="fas fa-question-circle"></i>
                                </span>
                                What is your working methodology?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Our methodology is based on a 4-phase approach:</p>
                                <div class="methodology-steps">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="step-card text-center p-3 mb-3">
                                                <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                                    1
                                                </div>
                                                <h5>Diagnosis</h5>
                                                <p class="small">In-depth analysis of your situation and identification of challenges</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="step-card text-center p-3 mb-3">
                                                <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                                    2
                                                </div>
                                                <h5>Design</h5>
                                                <p class="small">Development of a tailored strategy and detailed action plan</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="step-card text-center p-3 mb-3">
                                                <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                                    3
                                                </div>
                                                <h5>Implementation</h5>
                                                <p class="small">Support in execution and adaptation to field realities</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="step-card text-center p-3 mb-3">
                                                <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                                    4
                                                </div>
                                                <h5>Evaluation</h5>
                                                <p class="small">Measurement of results and adjustments for continuous improvement</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400" data-category="expertise">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="accordion-icon me-3">
                                    <i class="fas fa-question-circle"></i>
                                </span>
                                In which sectors do you operate?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>INPROOV operates in a wide range of sectors. Thanks to a network of over 60 experts with multisectoral profiles, we adapt our intervention to your specific needs and mobilize the most suitable skills to design tailored solutions.</p>
                                <p style="font-weight: 900; text-align: center">Share your needs with us!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="no-results text-center mt-5" id="noResults">
                    <i class="fas fa-search fa-3x text-muted mb-3"></i>
                    <h4>No questions match your search</h4>
                    <p>Try other terms or <a href="contact.php">contact us</a> directly</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="faq-cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4" data-aos="fade-up">Still have questions?</h2>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Our team is here to help you with any additional questions you may have.</p>
                <a href="<?php echo url('contact'); ?>" class="btn btn-light" data-aos="fade-up" data-aos-delay="200">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Elements
        const categoryButtons = document.querySelectorAll('.category-btn');
        const accordionItems = document.querySelectorAll('.accordion-item');
        const searchInput = document.getElementById('faq-search-input');
        const searchButton = document.querySelector('.search-box .btn');
        const noResults = document.getElementById('noResults');
        
        // Hide no results initially
        noResults.style.display = 'none';
        
        // Category filtering
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Update active button
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter items
                let visibleItems = 0;
                accordionItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                        visibleItems++;
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                // Show/hide no results
                toggleNoResults(visibleItems);
            });
        });
        
        // Search functionality
        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            let foundItems = 0;
            
            if (searchTerm === '') {
                // If search is empty, show all items
                accordionItems.forEach(item => {
                    item.style.display = 'block';
                    foundItems++;
                });
                
                // Reset category filter to "all"
                categoryButtons.forEach(btn => {
                    if (btn.getAttribute('data-category') === 'all') {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            } else {
                // Search through items
                accordionItems.forEach(item => {
                    const question = item.querySelector('.accordion-button').textContent.toLowerCase();
                    const answer = item.querySelector('.accordion-body').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                        foundItems++;
                        
                        // Auto-expand if it contains search term
                        const collapseElement = item.querySelector('.accordion-collapse');
                        if (!collapseElement.classList.contains('show')) {
                            new bootstrap.Collapse(collapseElement, { toggle: true });
                        }
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
            
            // Show/hide no results
            toggleNoResults(foundItems);
        }
        
        // Event listeners for search
        searchInput.addEventListener('input', performSearch);
        searchButton.addEventListener('click', performSearch);
        
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
        
        // Toggle no results message
        function toggleNoResults(visibleCount) {
            if (visibleCount === 0) {
                noResults.style.display = 'block';
                setTimeout(() => {
                    noResults.classList.add('show');
                }, 10);
            } else {
                noResults.classList.remove('show');
                setTimeout(() => {
                    noResults.style.display = 'none';
                }, 500);
            }
        }
        
        // Add animation to accordion items on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.accordion-item').forEach(item => {
            item.style.animationPlayState = 'paused';
            observer.observe(item);
        });
        
        // Smooth scroll for "Search for a question" button
        document.querySelector('a[href="#faq-search"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>