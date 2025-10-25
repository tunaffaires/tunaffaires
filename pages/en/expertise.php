<?php
$page_title = "Our Expertise - INPROOV";
$page_description = "Discover INPROOV's unique expertise in strategic consulting, process optimization, human capital, and business development.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <style>
    body {
      background-color: #ffffff !important;
    }
  </style>
</head>
<body background="#ffffff">
<!-- Hero Section -->
<section class="hero">   
  <div class="hero-video">
        <video autoplay muted loop playsinline>
            <source src="https://videos.pexels.com/video-files/3209211/3209211-hd_1280_720_25fps.mp4" type="video/mp4">
        </video></div>  <div class="hero-overlay"></div>
    <div class="hero-content-container"> 
        <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
            <h1>A network of over 60 experts</h1>
            <p>Tailored solutions to transform your challenges into performance levers.</p>
            <div class="hero-buttons">

                     <a href="<?php echo url('contact'); ?>" class="btn" style="
            display: inline-block;
            background-color: #7c005fff;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: normal;
            margin-top: 20px;
        ">Contact Us</a>
            </div>
        </div>
        <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">

        </div>
    </div>
    <div class="scroll-indicator">
        <div class="scroll-line"></div>
    </div>
</section>

<!-- Expertise Intro Section -->
<section class="expertise-intro section-padding" id="expertise" style="padding: 5rem 0;">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div class="section-title" data-aos="fade-up" data-aos-duration="800" style="text-align: center; margin-bottom: 2rem;">
     
  
    </div>

    <div class="intro-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" style="display: flex; flex-wrap: wrap; gap: 3rem; align-items: center; background-color: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 16px; box-shadow: 0 8px 24px rgba(0,0,0,0.04); padding: 2.5rem;">
      <div class="intro-text" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200" style="flex: 1 1 50%;"> <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem; color: #570045;">A multidisciplinary approach</h2>
        <p class="lead" style="font-weight: 500; font-size: 1.1rem; line-height: 1.6; margin-bottom: 1.2rem; color: #333;">At <strong>INPROOV</strong>, we provide our clients with unique expertise, combining field experience, academic expertise, and a multidisciplinary approach to address the most complex strategic, operational, and human challenges.<br>
Our goal is to transform your challenges into performance and growth levers.</p>
       
      </div>

      <div class="intro-image" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400" style="flex: 1 1 40%;">
        <div class="image-container" style="position: relative; border-radius: 12px; overflow: hidden;">
          <img src="https://plus.unsplash.com/premium_photo-1711134826471-437ee57e8455?q=80&w=812&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="INPROOV Strategic Collaboration" style="width: 100%; height: auto; display: block; border-radius: 12px; transition: transform 0.3s ease;">
          <div class="image-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom right, rgba(255,255,255,0.05), rgba(0,0,0,0.05));"></div>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- Expertise Grid Section -->
<section class="expertise-grid section-padding">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <h2 style="color: #570045;">Our Business Expertise</h2>
            <p style="color: #333;">Comprehensive and integrated solutions for your strategic challenges</p>
        </div>
        
        <div class="expertise-cards">
            <!-- Strategic Consulting -->
            <div class="expertise-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="0">
                <div class="card-inner">
                    <!-- FRONT CARD -->
                    <div class="card-front">
                        <!-- Container for image + overlay (under text) -->
                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');
                            background-size: cover;
                            background-position: center;
                            border-radius: 15px;
                            z-index: 0;
                        "></div>

                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(255, 255, 255, 0.52);
                            backdrop-filter: blur(5px);
                            border-radius: 15px;
                            z-index: 1;
                        "></div>

                        <!-- TEXT ABOVE EVERYTHING (z-index 2) -->
                        <div style="
                            position: relative;
                            z-index: 2;
                            padding: 2rem;
                            text-align: center;
                            color: #000;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            box-sizing: border-box;
                        ">
                            <div class="card-icon">
                                <i class="fas fa-chess-knight"></i>
                            </div>
                            <h3 style="margin: 1rem 0 0.5rem; color: #000; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                Strategic Consulting and Organizational Support
                            </h3>
                            <p style="margin: 0.5rem 0 1.5rem; color: #000; font-size: 0.95rem; line-height: 1.5; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                We help you define your vision, structure your organization, and align your resources with your ambitions.
                            </p><br>
                            <div class="card-cta" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 600;">
                                <span style="color: #570045;">Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- BACK CARD - REMAINS INTACT, POSITIONED IN BACK BY 3D TRANSFORMATION -->
                    <div class="card-back">
                        <h4>Our interventions include:</h4>
                        <ul>
                            <li>✓ Development and deployment of innovative strategies</li>
                            <li>✓ Overhaul of business models and growth plans</li>
                            <li>✓ Optimization of governance and decision-making processes</li>
                            <li>✓ Support for complex organizational transformations</li>
                        </ul>
                       <br><br>
                    </div>
                </div>
            </div>
            
            <!-- Process Optimization -->
            <div class="expertise-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <div class="card-inner">
                    <!-- FRONT CARD -->
                    <div class="card-front">
                        <!-- Container for image + overlay (under text) -->
                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');
                            background-size: cover;
                            background-position: center;
                            border-radius: 15px;
                            z-index: 0;
                        "></div>

                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(255, 255, 255, 0.52);
                            backdrop-filter: blur(5px);
                            border-radius: 15px;
                            z-index: 1;
                        "></div>

                        <!-- TEXT ABOVE EVERYTHING (z-index 2) -->
                        <div style="
                            position: relative;
                            z-index: 2;
                            padding: 2rem;
                            text-align: center;
                            color: #000;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            box-sizing: border-box;
                        ">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 style="margin: 1rem 0 0.5rem; color: #000; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                Process Optimization and Operational Performance
                            </h3>
                            <p style="margin: 0.5rem 0 1.5rem; color: #000; font-size: 0.95rem; line-height: 1.5; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                We analyze your activities to identify improvement levers and maximize efficiency.
                            </p>
                            <div class="card-cta" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 600;">
                                <span style="color: #570045;">Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- BACK CARD - REMAINS INTACT, POSITIONED IN BACK BY 3D TRANSFORMATION -->
                    <div class="card-back">
                        <h4>Our solutions enable you to:</h4>
                        <ul>
                            <li>✓ Deploy Lean and Agile methodologies tailored to your needs</li>
                            <li>✓ Implement performance indicators and dynamic dashboards</li>
                            <li>✓ Digitalize processes and integrate advanced collaborative tools</li>
                            <li>✓ Reduce costs and rationalize resources</li>
                        </ul>
                       <br><br>
                    </div>
                </div>
            </div>
            
            <!-- Human Capital -->
            <div class="expertise-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="card-inner">
                    <!-- FRONT CARD -->
                    <div class="card-front">
                        <!-- Container for image + overlay (under text) -->
                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');
                            background-size: cover;
                            background-position: center;
                            border-radius: 15px;
                            z-index: 0;
                        "></div>

                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(255, 255, 255, 0.52);
                            backdrop-filter: blur(5px);
                            border-radius: 15px;
                            z-index: 1;
                        "></div>

                        <!-- TEXT ABOVE EVERYTHING (z-index 2) -->
                        <div style="
                            position: relative;
                            z-index: 2;
                            padding: 2rem;
                            text-align: center;
                            color: #000;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            box-sizing: border-box;
                        ">
                            <div class="card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 style="margin: 1rem 0 0.5rem; color: #000; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                Human Capital and Talent Management
                            </h3>
                            <p style="margin: 0.5rem 0 1.5rem; color: #000; font-size: 0.95rem; line-height: 1.5; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                An organization's success relies on its teams. We support you in developing your human capital.
                            </p>
                            <div class="card-cta" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 600;">
                                <span style="color: #570045;">Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- BACK CARD - REMAINS INTACT, POSITIONED IN BACK BY 3D TRANSFORMATION -->
                    <div class="card-back">
                        <h4>We support you to:</h4>
                        <ul>
                            <li>✓ Develop and retain key talents</li>
                            <li>✓ Build customized development and leadership pathways</li>
                            <li>✓ Stimulate team engagement and motivation</li>
                            <li>✓ Create an agile and inclusive organizational culture</li>
                        </ul>
                        <br><br>
                    </div>
                </div>
            </div>
            
            <!-- Training -->
            <div class="expertise-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="card-inner">
                    <!-- FRONT CARD -->
                    <div class="card-front">
                        <!-- Container for image + overlay (under text) -->
                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');
                            background-size: cover;
                            background-position: center;
                            border-radius: 15px;
                            z-index: 0;
                        "></div>

                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(255, 255, 255, 0.52);
                            backdrop-filter: blur(5px);
                            border-radius: 15px;
                            z-index: 1;
                        "></div>

                        <!-- TEXT ABOVE EVERYTHING (z-index 2) -->
                        <div style="
                            position: relative;
                            z-index: 2;
                            padding: 2rem;
                            text-align: center;
                            color: #000;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            box-sizing: border-box;
                        ">
                            <div class="card-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 style="margin: 1rem 0 0.5rem; color: #000; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                Training and Skills Development
                            </h3><br>
                            <p style="margin: 0.5rem 0 1.5rem; color: #000; font-size: 0.95rem; line-height: 1.5; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                In close collaboration with our exclusive accredited training partner, we offer certified and modular programs.
                            </p>
                            <div class="card-cta" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 600;">
                                <span style="color: #570045;">Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- BACK CARD - REMAINS INTACT, POSITIONED IN BACK BY 3D TRANSFORMATION -->
                    <div class="card-back">
                        <h4>Our programs include:</h4>
                        <ul>
                            <li>✓ Group and team coaching: develop cohesion and collective performance</li>
                            <li>✓ Team Building: stimulate collaboration and creativity</li>
                            <li>✓ Strategic support: manage change and optimize processes</li>
                            <li>✓ Customized training: develop key skills</li>
                        </ul>
                       <br><br>
                    </div>
                </div>
            </div>
            
            <!-- Business Development -->
            <div class="expertise-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card-inner">
                    <!-- FRONT CARD -->
                    <div class="card-front">
                        <!-- Container for image + overlay (under text) -->
                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');
                            background-size: cover;
                            background-position: center;
                            border-radius: 15px;
                            z-index: 0;
                        "></div>

                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(255, 255, 255, 0.52);
                            backdrop-filter: blur(5px);
                            border-radius: 15px;
                            z-index: 1;
                        "></div>

                        <!-- TEXT ABOVE EVERYTHING (z-index 2) -->
                        <div style="
                            position: relative;
                            z-index: 2;
                            padding: 2rem;
                            text-align: center;
                            color: #000;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            box-sizing: border-box;
                        ">
                            <div class="card-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 style="margin: 1rem 0 0.5rem; color: #000; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                Business Development and Strategic Marketing
                            </h3>
                            <p style="margin: 0.5rem 0 1.5rem; color: #000; font-size: 0.95rem; line-height: 1.5; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                We support you in developing results-oriented strategies to grow your business.
                            </p>
                            <div class="card-cta" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 600;">
                                <span style="color: #570045;">Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- BACK CARD - REMAINS INTACT, POSITIONED IN BACK BY 3D TRANSFORMATION -->
                    <div class="card-back">
                        <h4>Our areas of intervention:</h4>
                        <ul>
                            <li>✓ Optimization of business processes and sales performance</li>
                            <li>✓ Development of B2B strategies and customer loyalty</li>
                            <li>✓ Marketing and communication: visibility, branding, and engagement</li>
                            <li>✓ Market evolution analysis and adaptation</li>
                        </ul>
                        <br><br>
                    </div>
                </div>
            </div>
            
            <!-- Change Management -->
            <div class="expertise-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                <div class="card-inner">
                    <!-- FRONT CARD -->
                    <div class="card-front">
                        <!-- Container for image + overlay (under text) -->
                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');
                            background-size: cover;
                            background-position: center;
                            border-radius: 15px;
                            z-index: 0;
                        "></div>

                        <div style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(255, 255, 255, 0.52);
                            backdrop-filter: blur(5px);
                            border-radius: 15px;
                            z-index: 1;
                        "></div>

                        <!-- TEXT ABOVE EVERYTHING (z-index 2) -->
                        <div style="
                            position: relative;
                            z-index: 2;
                            padding: 2rem;
                            text-align: center;
                            color: #000;
                            height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            box-sizing: border-box;
                        ">
                            <div class="card-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <h3 style="margin: 1rem 0 0.5rem; color: #000; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                Change Management
                            </h3><br>
                            <p style="margin: 0.5rem 0 1.5rem; color: #000; font-size: 0.95rem; line-height: 1.5; text-shadow: 0 1px 3px rgba(255,255,255,0.5);">
                                We support organizations in planning and implementing sustainable transformations.
                            </p><br>
                            <div class="card-cta" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 600;">
                                <span style="color: #570045;">Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- BACK CARD - REMAINS INTACT, POSITIONED IN BACK BY 3D TRANSFORMATION -->
                    <div class="card-back">
                        <h4>Our interventions include:</h4>
                        <ul>
                            <li>✓ Define and lead strategic and operational change initiatives</li>
                            <li>✓ Support teams in adopting and embracing new practices</li>
                            <li>✓ Develop organizational and individual resilience during transitions</li>
                            <li>✓ Ensure alignment between objectives, processes, and culture for concrete impact</li>
                        </ul>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Approach Section -->
<section class="approach-section" style="padding: 40px 0; background-color: #570045; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; position: relative; overflow: hidden; animation: fadeIn 1s ease-out;">
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .approach-section .card {
      animation: slideUp 0.8s ease forwards;
      opacity: 0;
    }
    @keyframes slideUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .approach-section .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .circle-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: linear-gradient(135deg, #8a4c7c 0%, #6b2e5f 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      margin: 0 auto 20px auto;
      transition: transform 0.3s ease;
    }
    .card:hover .circle-icon {
      transform: scale(1.1);
    }
    .card-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
  </style>

  <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px; position: relative; z-index: 2;">
    <div style="text-align: center; margin-bottom: 40px;">
      <h2 style="font-size: 2.8rem; font-weight: 700; color: #f3e8ff;">Our Strengths</h2>
      <p style="font-size: 1.1rem; color: #e9d5ec; max-width: 600px; margin: 0 auto; line-height: 1.6;">Each project is treated with a comprehensive and personalized vision. We combine sector expertise, international experience, and cutting-edge methods to provide you with support that sustainably transforms your organization.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
      <div class="card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <div class="card-content">
          <div class="circle-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h4 style="font-size: 1.2rem; font-weight: 600; color: #333 margin-bottom: 10px;">Multisectoral and International Expertise</h4>
          <p style="font-size: 0.95rem; color: #333; line-height: 1.5;">Recognized know-how, combining sector diversity and international standards, offering strategic, innovative solutions perfectly adapted to your specific challenges.</p>
        </div>
      </div>

      <div class="card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <div class="card-content">
          <div class="circle-icon">
            <i class="fas fa-tools"></i>
          </div>
          <h4 style="font-size: 1.2rem; font-weight: 600; color: #333; margin-bottom: 10px;">Advanced Methodologies and Tools</h4><br>
          <p style="font-size: 0.95rem; color: #333; line-height: 1.5;">We adopt proven methodologies and leverage advanced technological tools to design and implement solutions most suited to your needs, ensuring the success of your projects.</p>
        </div>
      </div>

      <div class="card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <div class="card-content">
          <div class="circle-icon">
            <i class="fas fa-chart-pie"></i>
          </div>
          <h4 style="font-size: 1.2rem; font-weight: 600; color: #333;">Close Monitoring and Performance-Driven Management</h4>
          <p style="font-size: 0.95rem; color: #333; line-height: 1.5;">Targeted support, driven by strategic and measurable KPIs, ensuring the achievement and surpassing of objectives. Our actions are guided by agility and results-oriented.</p>
        </div>
      </div>
    </div>
  </div>
</section>







<!-- CTA Section -->
 <!-- CTA Section -->
  <section class="cta" style="
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
    color: white;
    text-align: center;
">
    <div class="container">
        <h2>Ready to transform your challenges into opportunities?</h2>
        <p>Contact us to discuss your needs and discover how our expertise can help you achieve your objectives.</p>
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




<!-- Scripts for animations --> <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Function to check if an element is in the viewport
      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
      
      // Function to handle scroll animation
      function handleScrollAnimation() {
        const elements = document.querySelectorAll('.fade-in');
        
        elements.forEach(element => {
          if (isInViewport(element)) {
            element.classList.add('visible');
          }
        });
      }
      
      // Initial check on page load
      handleScrollAnimation();
      
      // Listen for scroll events
      window.addEventListener('scroll', handleScrollAnimation);
      
      // Animation for icons on hover
      const features = document.querySelectorAll('.feature');
      features.forEach(feature => {
        feature.addEventListener('mouseenter', function() {
          this.querySelector('.feature-icon').style.transform = 'scale(1.1) rotate(5deg)';
        });
        
        feature.addEventListener('mouseleave', function() {
          this.querySelector('.feature-icon').style.transform = 'scale(1) rotate(0)';
        });
      });
    });
  </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
// Initialization of animations
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
    
    // Statistics animation
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            
            const inc = target / speed;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };
        
        // Trigger animation when element is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCount();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(counter);
    });
    
    // Scroll bar animation
    const scrollIndicator = document.querySelector('.scroll-line');
    window.addEventListener('scroll', () => {
        const scrollTop = document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercent = (scrollTop / scrollHeight) * 100;
        scrollIndicator.style.width = scrollPercent + '%';
    });
    
    // Expertise cards animation
    const expertiseCards = document.querySelectorAll('.expertise-card');
    
    expertiseCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('active');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('active');
        });
    });
    
    // Floating cards animation in hero
    const floatingCards = document.querySelectorAll('.floating-cards .card');
    
    floatingCards.forEach((card, index) => {
        // Initial animation
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0) rotate(0)';
        }, index * 200);
        
        // Continuous animation
        setInterval(() => {
            card.style.transform = `translateY(${Math.sin(Date.now() / 1000 + index) * 10}px) rotate(${Math.sin(Date.now() / 1000 + index) * 2}deg)`;
        }, 100);
    });
});
</script>