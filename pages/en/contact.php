<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - INPROOV Consulting</title>
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
            --light-color: #FFFFFF;
            --gray-color: #6C757D;
            --dark-gray: #495057;
            --light-gray: #f8f9fa;
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
        
        /* Hero Section with image */
        .contact-hero {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            color: white;
            padding: 100px 0 60px;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(87, 0, 69, 0.4) 0%, rgba(61, 0, 48, 0.5) 100%), url('https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80') no-repeat center center/cover;
        }
        
        .hero-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            gap: 40px;
        }
        
        .hero-content {
            flex: 1;
            padding-right: 40px;
        }
        
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }
        
        .hero-image img {
            max-width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transition: all 0.5s ease;
        }
        
        .hero-image img:hover {
            transform: scale(1.03);
        }
        
        .hero-content h1 {
            font-size: 3.2rem;
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
            flex-wrap: wrap;
        }
        
        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .section-title {
            font-size: 2.2rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            display: inline-block;
        }
        
        .contact-form-wrapper {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .contact-form-wrapper:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }
        
        .form-control {
            padding: 15px 20px;
            border-radius: 10px;
            border: 1px solid var(--light-gray);
            transition: var(--transition);
            font-size: 1rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(87, 0, 69, 0.15);
        }
        
        .form-floating>label {
            padding: 1rem 1.25rem;
            color: var(--gray-color);
        }
        
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            color: var(--primary-color);
            transform: scale(0.85) translateY(-0.9rem) translateX(0.15rem);
        }
        
        .contact-info-card {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 25px;
            background: white;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            min-height: 130px;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 20px;
            flex-shrink: 0;
            transition: var(--transition);
        }
        
        .contact-info-card:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .contact-details h4 {
            color: var(--primary-color);
            margin-bottom: 8px;
            font-size: 1.2rem;
        }
        
        .contact-details p, 
        .contact-details a {
            color: var(--dark-gray);
            margin-bottom: 0;
            text-decoration: none;
            transition: var(--transition);
            word-break: break-word;
        }
        
        .contact-details a:hover {
            color: var(--primary-color);
        }
        
        /* Map Section */
        .map-section {
            padding: 80px 0;
            background: var(--light-color);
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .map-container:hover {
            box-shadow: var(--shadow-hover);
        }
        
        /* CTA Section */
        .contact-cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .contact-cta-section .btn {
            border-radius: 50px;
            padding: 15px 30px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .contact-cta-section .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Animation for form elements */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-floating {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        .form-floating:nth-child(1) { animation-delay: 0.1s; }
        .form-floating:nth-child(2) { animation-delay: 0.2s; }
        .form-floating:nth-child(3) { animation-delay: 0.3s; }
        .form-floating:nth-child(4) { animation-delay: 0.4s; }
        
        /* Enhanced focus effect for form fields */
        .form-floating {
            margin-bottom: 1.5rem;
        }
        
        /* Adjustments to align sections */
        .contact-info-wrapper {
            padding-left: 0;
        }
        
        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-content {
                padding-right: 0;
                margin-bottom: 40px;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .contact-form-wrapper {
                padding: 30px;
            }
            
            .contact-info-card {
                padding: 20px;
            }
            
            .contact-info-wrapper {
                padding-left: 0;
                margin-top: 40px;
            }
            
            .hero-buttons {
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            .contact-hero {
                padding: 120px 0 60px;
            }
            
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .contact-info-card {
                flex-direction: column;
                text-align: center;
                min-height: auto;
            }
            
            .contact-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-buttons .btn {
                width: 100%;
                max-width: 280px;
                margin-bottom: 10px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .contact-form-wrapper {
                padding: 20px 15px;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .contact-info-card {
                padding: 15px;
            }
            
            .contact-icon {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
<!-- Hero Section with image -->
<section class="contact-hero position-relative overflow-hidden">
    <div class="hero-container">
        <!-- Text on the left -->
        <div class="hero-content" data-aos="fade-right">
            <h1 class="hero-title display-4 fw-bold text-white mb-4">
                Contact Us
            </h1>
            <p class="hero-subtitle text-white mb-4">
                Share your projects with us and let's see how we can contribute to their success
            </p>
            <div class="hero-buttons">
                     <a href="#map" class="btn" style="
            display: inline-block;
            background-color: #ab5d99ff;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: normal;
            margin-top: 20px;
        ">
               
                    <i class="fas fa-map-marker-alt me-2"></i>Find Us
                </a>
            </div>
        </div>

        <!-- Image on the right -->
        <div class="hero-image" data-aos="fade-left">
           
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5" id="contact-form">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="contact-form-wrapper">
                    <h2 class="section-title text-start mb-4">Send Us a Message</h2>
                    <form id="contactForm" action="traitement_formulaire.php" method="POST">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Your company">
                            <label for="company"><i class="fas fa-building me-2"></i>Company</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your last name" required>
                                    <label for="lastname"><i class="fas fa-user me-2"></i>Last Name</label>
                                    <div class="invalid-feedback">Please enter your last name</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your first name" required>
                                    <label for="firstname"><i class="fas fa-user me-2"></i>First Name</label>
                                    <div class="invalid-feedback">Please enter your first name</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="job" name="job" placeholder="Your position">
                            <label for="job"><i class="fas fa-briefcase me-2"></i>Position</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your email" required>
                            <label for="email"><i class="fas fa-envelope me-2"></i>Email Address</label>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone">
                            <label for="phone"><i class="fas fa-phone me-2"></i>Phone</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" id="message" name="message" placeholder="Your message" style="height: 150px" required></textarea>
                            <label for="message"><i class="fas fa-comment me-2"></i>Your Message</label>
                            <div class="invalid-feedback">Please enter your message</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 contact-info-wrapper" data-aos="fade-left">
                <h2 class="section-title text-start mb-4"><br>Our Contact Information</h2>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Address</h4>
                                <p>Pacha centre, Montplaisir 1073, Tunis, Tunisia</p>
                            </div>
                        </div>
                    </div><br>
                    <div class="col-md-6">
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Phone</h4>
                                <p>+216 55 056 959<br></p>
                                <p>+216 55 838 456</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Business Hours</h4>
                                <p>Monday - Friday <br> 9am - 6pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p><a href="mailto:contact@inproovconsulting.com" class="text-decoration-none">contact@inproovconsulting.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Website</h4>
                                <p><a href="https://www.inproovconsulting.com" class="text-decoration-none">www.inproovconsulting.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section py-5" id="map">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Location</h2>
                <p class="section-subtitle">Come and meet us</p>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-12">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12775.367027312497!2d10.173758!3d36.806908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQ4JzI0LjkiTiAxMMKwMTAnMjUuNUU!5e0!3m2!1sfr!2stn!4v1628173456789!5m2!1sfr!2stn"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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
        
        // Form validation and interaction
        const contactForm = document.getElementById('contactForm');
        const inputs = contactForm.querySelectorAll('.form-control');
        
        // Add real-time validation
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });
        
        // Form submission
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            
            // Validate all fields
            inputs.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });
            
            if (isValid) {
                // Simulate form submission
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
                
                setTimeout(() => {
                    alert('Your message has been sent successfully! We will get back to you as soon as possible.');
                    contactForm.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    
                    // Scroll to thank you message
                    window.scrollTo({
                        top: contactForm.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }, 2000);
            }
        });
        
        // Field validation function
        function validateField(field) {
            let isValid = true;
            const value = field.value.trim();
            
            if (field.hasAttribute('required') && !value) {
                showError(field, 'This field is required');
                isValid = false;
            } else if (field.type === 'email' && value) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(value)) {
                    showError(field, 'Please enter a valid email address');
                    isValid = false;
                } else {
                    showSuccess(field);
                }
            } else if (field.hasAttribute('required') && value) {
                showSuccess(field);
            } else {
                clearValidation(field);
            }
            
            return isValid;
        }
        
        function showError(field, message) {
            clearValidation(field);
            field.classList.add('is-invalid');
            
            // Add error message if it doesn't exist
            if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('invalid-feedback')) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                errorDiv.textContent = message;
                field.parentNode.appendChild(errorDiv);
            } else {
                field.nextElementSibling.textContent = message;
            }
        }
        
        function showSuccess(field) {
            clearValidation(field);
            field.classList.add('is-valid');
        }
        
        function clearValidation(field) {
            field.classList.remove('is-invalid');
            field.classList.remove('is-valid');
            
            // Remove error message if it exists
            if (field.nextElementSibling && field.nextElementSibling.classList.contains('invalid-feedback')) {
                field.nextElementSibling.remove();
            }
        }
        
        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Interactive map hover effect
        const mapContainer = document.querySelector('.map-container');
        if (mapContainer) {
            mapContainer.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
            });
            
            mapContainer.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        }
        
        // Add animation to contact info cards on scroll
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
        
        document.querySelectorAll('.contact-info-card').forEach(card => {
            card.style.animation = 'fadeInUp 0.6s ease forwards paused';
            observer.observe(card);
        });
    });
</script>
</body>
</html>