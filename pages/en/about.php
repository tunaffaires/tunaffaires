<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About INPROOV - Expertise in Business Transformation</title>
    <meta name="description" content="Discover INPROOV, your strategic partner for organizational, operational, and human transformations. Sector expertise and tailored solutions.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
 .dynamic-values {
    padding: 5rem 0;
    background-color: var(--light-color);
}

.dynamic-values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 fixed columns */
    gap: 1rem;
    margin-top: 3rem;
}

.dynamic-value-card {
    position: relative;
    height: 400px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: var(--transition);
    cursor: pointer;
}

.dynamic-value-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-hover);
}

        
        .value-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.6s ease;
            z-index: 1;
        }
        
        .dynamic-value-card:hover .value-bg {
            transform: scale(1.05);
        }
        
        .value-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.2) 100%);
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
            color: white;
        }
        
        .value-icon {
            font-size: 0.5rem;
            margin-bottom: 1.5rem;
            color: #fff;
            transition: transform 0.3s ease;
        }
        
        .dynamic-value-card:hover .value-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .dynamic-value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        

        

        
        .dynamic-value-card p {
            font-size: 0.8rem;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
            max-height: 0;
            overflow: hidden;
            color: #fff;
            align-items: justify;
        }
        
        .dynamic-value-card:hover p {
            opacity: 1;
            transform: translateY(0);
            max-height: 200px;
            background-color: rgba(87, 0, 69, 0.25);
            padding: 1rem;
            border-radius: 8px;
            margin-top: 0.5rem;
        }
        
        /* Card appearance animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .dynamic-value-card {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }
        
        .dynamic-value-card:nth-child(1) { animation-delay: 0.1s; }
        .dynamic-value-card:nth-child(2) { animation-delay: 0.2s; }
        .dynamic-value-card:nth-child(3) { animation-delay: 0.3s; }
        .dynamic-value-card:nth-child(4) { animation-delay: 0.4s; }
        
        /* Responsive */
        @media (max-width: 768px) {
            .dynamic-values-grid {
                grid-template-columns: 1fr;
            }
            
            .dynamic-value-card {
                height: 350px;
            }
            
            .dynamic-value-card:hover p {
                padding: 0.8rem;
                font-size: 0.9rem;
            }
        }
        
        /* Hero section adjustments */
        .hero-content h1 {
            color: white;
        }
        
        /* Promise section adjustments */
        .promise {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 5rem 0;
            text-align: center;
        }
        
        .promise-content {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.2rem;
        }
        
        .promise-content h3 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        
        .promise-content p {
            opacity: 0.9;
            line-height: 1.8;
        }
    </style>
</head>
<body>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-video">
<video id="maVideo" autoplay muted loop playsinline>
    <source src="https://www.pexels.com/fr-fr/download/video/5680034/" type="video/mp4">
</video>

<script>
    const video = document.getElementById('maVideo');
    video.playbackRate = 0.7; // 0.5 = half normal speed
</script>
        </div>
        <div class="hero-overlay"></div>

        <div class="hero-container">
            <!-- Text on the left -->
            <div class="hero-content">
                <h1 style="font-size: 50px;">Unlock Your Company's Potential!</h1>
                <p>Strategic support to accelerate your performance.</p>
                <div class="hero-buttons">
                     <a href="<?php echo url('expertise'); ?>" class="btn" style="
            display: inline-block;
            background-color: #7c005fff;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: normal;
            margin-top: 20px;
        ">Discover our services</a>
                     <a href="<?php echo url('contact'); ?>" class="btn" style="
            display: inline-block;
            background-color: #ab5d99ff;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: normal;
            margin-top: 20px;
        ">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Intro Section -->
    <section class="about-intro">
        <div class="container">
            <div class="intro-content">
                <div class="intro-text">
                    <h2>Who is INPROOV?</h2>
                    <p>At <strong>INPROOV</strong>, we transform your challenges into opportunities. As a strategic partner, we support companies in their <strong>organizational</strong>, <strong>operational</strong>, and <strong>human</strong> transformations to help them anticipate, decide, and excel.</p>
                    <p>Our consultants, trained at top institutions, provide high-level expertise and a vision aligned with international standards. We offer customized solutions to create impact and foster continuous improvement.</p>
                </div>
                <div class="intro-image">
                    <img src="https://plus.unsplash.com/premium_photo-1683120926357-a7ff70a957a7?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="INPROOV Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section - Enhanced version -->
    <section class="dynamic-values">
        <div class="container">
            <div class="section-title">
                <h2>Our Values</h2>
                <p style="color: #333;">The principles that guide our actions</p>
            </div>
            
            <div class="dynamic-values-grid">
                <!-- Value 1 - Excellence -->
                <div class="dynamic-value-card">
                    <div class="value-bg" style="background-image: url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT_3dFrivO3HgmO-St6AVnSvvIQN9GGhdRu_Iw-LLLGPHUsPDMB');"></div>
                    <div class="value-overlay">

                        <h3>Excellence</h3>
                        <p>We strive for excellence through tailored solutions aligned with international standards, creating value and guaranteeing results. Your challenges become our priority.</p>
                    </div>
                </div>
                
                <!-- Value 2 - Integrity -->
                <div class="dynamic-value-card">
                    <div class="value-bg" style="background-image: url('https://media.licdn.com/dms/image/v2/D5622AQGPNAjJe-qtVw/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1733839626078?e=2147483647&v=beta&t=xhxjiQe2gbKE8TOtsvRjjcJ8Vqo3JAeDQ0UsFgmFyBU');"></div>
                    <div class="value-overlay">
  
                        <h3>Integrity</h3>
                        <p>Transparency and ethics guide each of our actions. We build lasting partnership relationships while adhering to the strictest standards of confidentiality and responsibility.</p>
                    </div>
                </div>
                
                <!-- Value 3 - Innovation -->
                <div class="dynamic-value-card">
                    <div class="value-bg" style="background-image: url('https://assets.isu.pub/document-structure/230607120235-8acac13c2742a444f8d568855ad5f12c/v1/2fdf844b92eadc37914844a1f6693b6f.jpeg');"></div>
                    <div class="value-overlay">

                        <h3>Innovation</h3>
                        <p>Innovation is at the heart of our DNA. By combining advanced tools, modern methodologies, and creativity, we transform complex challenges into strategic growth opportunities.</p>
                    </div>
                </div>
                
                <!-- Value 4 - Partnership First -->
                <div class="dynamic-value-card">
                    <div class="value-bg" style="background-image: url('https://www.fredzone.org/wp-content/uploads/2021/08/intelligence-artificielle.jpg');"></div>
                    <div class="value-overlay">

                        <h3>Partnership First</h3>
                        <p>We place collaboration at the heart of our concerns. We favor a partnership relationship based on co-construction to enhance overall effectiveness and jointly transform objectives into successes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Clients Section -->
 <section class="sectors">
    <div class="container">
        <div class="section-title">
            <h2>Sectors of Our Partner Clients</h2>
        </div>
        
        <div class="sectors-slider-container">
            <div class="sectors-track">
                <!-- Industry -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Industrial factory with machinery and equipment">
                    </div>
                    <h3>Industry</h3>
                </div>
                
                <!-- Banks -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Modern bank interior with counter">
                    </div>
                    <h3>Banks</h3>
                </div>
                
                <!-- NGOs -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://www.internationalequipments.com/images/about-us.jpg" alt="NGO volunteers helping people in need">
                    </div>
                    <h3>NGOs & Associations</h3>
                </div>
                
                <!-- Retail and distribution -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://forbesafrique.com/wp-content/uploads/2025/07/Cameroun-I-Grande-Distribution-_-Nouvelles-Strategies-En-Vue-%C2%A9Droits-Reserves_Forbesafrique.com_.jpg" alt="Well-stocked supermarket shelves">
                    </div>
                    <h3>Retail & Distribution</h3>
                </div>
                
                <!-- Public service -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://scontent.ftun8-1.fna.fbcdn.net/v/t39.30808-6/519406578_1225410119620077_4417288762374814184_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=833d8c&_nc_ohc=N-Ek2RUWT74Q7kNvwHPpCgV&_nc_oc=Admt1bpKoS37_bEqTeILWnvkjgC8-_N92Hwz1d8HiLMmOm1X02n2gWJzX_2qU6SOZO0&_nc_zt=23&_nc_ht=scontent.ftun8-1.fna&_nc_gid=ftRg0DEueDZ3XstEhagOFA&oh=00_Afa5kwa2i6G7aZckMSwQzChJRWf_5nPkfbAfPVwL62cL4g&oe=68D8C0D3" alt="Modern public administrative building">
                    </div>
                    <h3>Public Service</h3>
                </div>
                
                <!-- Services -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Team meeting of service professionals">
                    </div>
                    <h3>Services</h3>
                </div>
                
                <!-- Education and training -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1758270705172-07b53627dfcb?q=80&w=1031&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Modern classroom with students">
                    </div>
                    <h3>Education & Training</h3>
                </div>
                
                <!-- University -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1632834380561-d1e05839a33a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="University campus with students">
                    </div>
                    <h3>University</h3>
                </div>
                
                <!-- Energy -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Wind farm with modern turbines">
                    </div>
                    <h3>Energy</h3>
                </div>
                
                <!-- Insurance -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Insurance agent consulting a client">
                    </div>
                    <h3>Insurance</h3>
                </div>
                
                <!-- IT Services -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Team of developers working on computers">
                    </div>
                    <h3>IT Services</h3>
                </div>
                
                <!-- Repeat for infinite effect -->
                <!-- Industry -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Industrial factory with machinery and equipment">
                    </div>
                    <h3>Industry</h3>
                </div>
                
                <!-- Banks -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Modern bank interior with counter">
                    </div>
                    <h3>Banks</h3>
                </div>
                
                <!-- NGOs -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="NGO volunteers helping people in need">
                    </div>
                    <h3>NGOs</h3>
                </div>
                
                <!-- Retail and distribution -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Well-stocked supermarket shelves">
                    </div>
                    <h3>Retail & Distribution</h3>
                </div>
                
                <!-- Public service -->
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Modern public administrative building">
                    </div>
                    <h3>Public Service</h3>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .sectors {
            padding: 80px 0;
            background-color: #f9f9f9;
            overflow: hidden;
        }

        .sectors .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .sectors .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .sectors .section-title h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #570045;
        }

        .sectors .section-title p {
            font-size: 18px;
            color: #7f8c8d;
        }

        .sectors-slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .sectors-track {
            display: flex;
            animation: sectors-scroll 30s linear infinite;
            width: calc(250px * 16); /* 11 originals + 5 duplicates */
        }

        .sector-card {
            flex: 0 0 auto;
            width: 230px;
            margin: 0 10px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            text-align: center;
        }

        .sector-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .sector-image {
            height: 160px;
            overflow: hidden;
        }

        .sector-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .sector-card:hover .sector-image img {
            transform: scale(1.05);
        }

        .sector-card h3 {
            padding: 10px 0px 0px 0px;
            margin: 0;
            font-size: 13px;
            color: #2c3e50;
            font-weight: 500;
        }

        @keyframes sectors-scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 11)); /* Scrolls the length of the 11 original elements */
            }
        }

        @media (max-width: 768px) {
            .sectors-track {
                animation-duration: 40s; /* Slow down animation on mobile */
            }
            
            .sector-card {
                width: 200px;
            }
            
            .sector-image {
                height: 140px;
            }
        }

        @media (max-width: 576px) {
            .sector-card {
                width: 180px;
            }
            
            .sector-image {
                height: 120px;
            }
            
            .sector-card h3 {
                font-size: 14px;
                padding: 10px 5px;
                color: #000000;
            }
        }
    </style>
</section>

    <!-- CTA Section -->
<!-- Promise Section -->
<section class="promise" style="
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), 
                url('https://plus.unsplash.com/premium_photo-1664476794112-15afc6de2e0f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
">
    <div class="container">
        <div class="section-title">
            <h1>Our Promise</h1>
            <p style="color: #ffffffff;">
                More than advice, support towards success! <br>We don't just provide advice, we accompany its implementation, ensuring the achievement of set objectives while stimulating overperformance, thanks to tailored solutions and close follow-up.
            </p>
            <a href="<?php echo url('contact'); ?>" class="btn" style="
                display: inline-block;
                background-color: #8a4c7c;
                color: white;
                padding: 12px 30px;
                text-decoration: none;
                border-radius: 4px;
                font-weight: bold;
                margin-top: 20px;
            ">Contact us</a>
        </div>
    </div>
</section>


    <!-- Back to Top Button -->
    <button class="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Additional scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const valueCards = document.querySelectorAll('.dynamic-value-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });
            
            valueCards.forEach(card => {
                observer.observe(card);
            });
            
            // Back to top button
            const backToTopButton = document.querySelector('.btn-back-to-top');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.display = 'flex';
                } else {
                    backToTopButton.style.display = 'none';
                }
            });
            
            backToTopButton.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            // Mobile menu toggle
            const mobileToggle = document.querySelector('.mobile-toggle');
            const nav = document.querySelector('nav');
            
            mobileToggle.addEventListener('click', () => {
                nav.classList.toggle('active');
            });
        });
    </script>
</body>
</html>