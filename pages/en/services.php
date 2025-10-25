<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Univers Formation & Consulting</title>
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

        .hero-section {
            background: linear-gradient(rgba(0, 77, 153, 0.8), rgba(0, 77, 153, 0.8)), url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&auto=format&fit=crop&w=1974&q=80') no-repeat center center/cover;
            min-height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-weight: 900;
            font-size: 3.5rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        }

        .service-block {
            padding: 4rem 0;
        }

        .service-image-container {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .service-image-container:hover {
            transform: scale(1.02);
        }

        .service-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .service-content {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            padding: 3rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .service-content .icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .service-content h3 {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .service-content p {
            color: var(--text-light);
        }

        .cta-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1900&q=80') no-repeat center center/cover;
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

        .list-unstyled li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .list-unstyled li::before {
            content: '\f00c'; /* FontAwesome check icon */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 5px;
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <section class="hero-section text-center py-5">
        <div class="container" data-aos="fade-up">
            <h1 class="hero-title fw-bold mb-3">Our Services</h1>
            <p class="hero-subtitle mb-0">Comprehensive solutions to support your professional development.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <div data-aos="fade-up">
                <h2 class="section-title">Our Fields of Excellence</h2>
                <p class="section-subtitle">At Univers Formation & Consulting, we offer a range of services designed to support organizations and individuals at every stage of their development. Our interventions combine training, coaching, and strategic consulting to create a lasting and measurable impact.</p>
            </div>
        </div>
    </section>

    <section class="service-block bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <div class="service-image-container">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="service-image" alt="Individual and collective coaching">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="service-content">
                        <i class="fas fa-users icon"></i>
                        <h3>Individual and Collective Coaching</h3>
                        <p>We support professionals and teams in developing leadership, self-confidence, and the ability to make the right decisions. Our sessions are personalized and based on proven methodologies to adapt to your specific challenges.</p>
                        <ul class="list-unstyled mt-3">
                            <li>Development of leadership and self-confidence</li>
                            <li>Strengthening team cohesion and performance</li>
                            <li>Support for professional orientation and skill development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-block">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-image-container">
                        <img src="https://images.unsplash.com/photo-1543286386-249539483a99?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="service-image" alt="Business support">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-content">
                        <i class="fas fa-building icon"></i>
                        <h3>Business Support</h3>
                        <p>We help organizations tackle strategic and operational challenges through change management, process optimization, and digitalization. Each mission is designed to transform skills and practices into success.</p>
                        <ul class="list-unstyled mt-3">
                            <li>Change management and process optimization</li>
                            <li>Improvement of performance and productivity</li>
                            <li>Digitalization and adoption of new work practices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-block bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <div class="service-image-container">
                        <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="service-image" alt="Consulting and strategy">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="service-content">
                        <i class="fas fa-chart-pie icon"></i>
                        <h3>Consulting and Strategy</h3>
                        <p>We provide close support and targeted advice to develop suitable strategies, identify growth levers, and implement concrete action plans. Our approach combines field experience, sectoral expertise, and educational methods for comprehensive and results-oriented support.</p>
                        <ul class="list-unstyled mt-3">
                            <li>Development of tailored and personalized strategies</li>
                            <li>Identification of growth levers and innovation opportunities</li>
                            <li>Implementation of concrete and measurable action plans</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-block">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-image-container">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="service-image" alt="Tailor-made training">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-content">
                        <i class="fas fa-graduation-cap icon"></i>
                        <h3>Tailor-made Training</h3>
                        <p>We design personalized programs to strengthen key skills and develop leadership, creativity, and organizational agility. Each training is interactive and focused on skill development to meet the specific needs of our clients.</p>
                        <ul class="list-unstyled mt-3">
                            <li>Strengthening key employee skills</li>
                            <li>Developing leadership and organizational agility</li>
                            <li>Encouraging practical and immediately operational learning methods</li>
                        </ul>
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