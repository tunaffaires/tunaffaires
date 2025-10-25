<?php
$page_title = "Careers at Improove Consulting - Join Our Team";
$page_description = "Join Improove Consulting and participate in innovative projects. Discover our job offers: Project Manager, Project Assistant, Senior HR and Administrative Assistant.";

// Form processing
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_application'])) {
    $errors = [];
    $success = false;
    
    // Field validation
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
    $reference = filter_input(INPUT_POST, 'reference', FILTER_SANITIZE_STRING);
    $captcha_answer = filter_input(INPUT_POST, 'captcha_answer', FILTER_SANITIZE_NUMBER_INT);
    $captcha_code = filter_input(INPUT_POST, 'captcha_code', FILTER_SANITIZE_STRING);
    
    // Required field verification
    if (empty($nom)) $errors[] = "Last name is required";
    if (empty($prenom)) $errors[] = "First name is required";
    if (!$email) $errors[] = "Email is invalid";
    if (empty($telephone)) $errors[] = "Phone number is required";
    
    // CAPTCHA verification
    if ($captcha_answer != $captcha_code) {
        $errors[] = "CAPTCHA answer is incorrect";
    }
    
    // Uploaded file verification
    $cv_path = null;
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $max_size = 5 * 1024 * 1024; // 5MB
        
        if ($_FILES['cv']['size'] > $max_size) {
            $errors[] = "CV file must not exceed 5MB";
        } elseif (!in_array($_FILES['cv']['type'], $allowed_types)) {
            $errors[] = "CV format must be PDF, DOC or DOCX";
        } else {
            $upload_dir = 'uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            $file_extension = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
            $cv_filename = 'cv_' . time() . '_' . uniqid() . '.' . $file_extension;
            $cv_path = $upload_dir . $cv_filename;
            
            if (!move_uploaded_file($_FILES['cv']['tmp_name'], $cv_path)) {
                $errors[] = "Error uploading CV";
            }
        }
    } else {
        $errors[] = "Please attach your CV";
    }
    
    // If no errors, send email
    if (empty($errors)) {
        $to = "job@inproovconsulting.com";
        $subject = "Application for position: $reference";
        
        $message = "
        New application received:\n\n
        Position: $reference\n
        Last Name: $nom\n
        First Name: $prenom\n
        Email: $email\n
        Phone: $telephone\n
        Date: " . date('d/m/Y H:i') . "\n
        ";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        // Send email with attachment
        $boundary = md5(time());
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
        
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=utf-8\r\n";
        $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $body .= $message . "\r\n\r\n";
        
        // Add attachment
        if ($cv_path) {
            $file_content = file_get_contents($cv_path);
            $file_content = chunk_split(base64_encode($file_content));
            $filename = basename($cv_path);
            
            $body .= "--$boundary\r\n";
            $body .= "Content-Type: application/octet-stream; name=\"$filename\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n\r\n";
            $body .= $file_content . "\r\n\r\n";
        }
        
        $body .= "--$boundary--";
        
        if (mail($to, $subject, $body, $headers)) {
            $success = true;
            // Clean up uploaded file after sending
            if ($cv_path && file_exists($cv_path)) {
                unlink($cv_path);
            }
        } else {
            $errors[] = "Error sending email";
        }
    }
}
?>

<!-- Hero Section -->
<section class="hero career-hero">
    <div class="hero-video">
        <video autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80">
            <source src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47b5e33e8ca7a94&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="Improove Consulting Team">
        </video>
    </div>
    <div class="hero-overlay"></div>

    <div class="hero-container">
        <!-- Text on the left -->
        <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Join the Adventure!</h1>
            
            <div class="hero-buttons">
                     <a href="#"class="btn btn-secondary open-application-modal" data-reference="Spontaneous Application" style="
            display: inline-block;
            background-color: #7c005fff;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
        ">Apply</a>



            </div>
        </div>

        <!-- Image on the right -->
        <div class="hero-image" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
       
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="scroll-indicator">
        <div class="scroll-line"></div>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="why-join section-padding">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <h2>Why Join INPROOV?</h2>
            <p style="color: #333;">Discover what makes our company an inspiring place to develop your career</p>
        </div>
        
        <div class="reasons-grid">
            <div class="reason-card" data-aos="fade-up" data-aos-duration="800" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;">
                <div class="reason-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Stimulating and Multidisciplinary Environment</h3>
                <p style="color: #000000;">Work alongside experienced consultants with diverse skills, tackling complex and strategic projects.</p>
            </div>
            
            <div class="reason-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;">
                <div class="reason-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Continuous Professional Development</h3>
                <p style="color: #000000;">We encourage excellence and offer learning opportunities through diverse missions and internal support programs.</p>
            </div>
            
            <div class="reason-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;">
                <div class="reason-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Collaborative and Innovative Culture</h3>
                <p style="color: #000000;">Cooperation and idea exchange are at the heart of our approach. Every team member actively contributes to co-building solutions.</p>
            </div>
            
            <div class="reason-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;">
                <div class="reason-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Concrete Impact <br>and Strategic <br>Visibility</h3>
                <p style="color: #000000;">Each project results in measurable and strategically significant outcomes, with direct visibility on your contribution.</p>
            </div>
        </div>
    </div>
</section>

<!-- Job Offers Section -->
<section class="job-offers section-padding" id="offres">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
            <h2>Our Job Offers</h2>
            <p style="color: #333;">Join our team of expert consultants and participate in ambitious projects</p>
        </div>
        
        <div class="jobs-capsules-container">
            <!-- Electronics Industry Business Expert -->
            <div class="job-capsule" data-aos="fade-up" data-aos-duration="800">
                <div class="capsule-content">
                    <h3>Electronics Industry Business Expert</h3>
                    <p><i class="fas fa-users"></i> M/F • <i class="fas fa-map-marker-alt"></i> Tunis</p>
                </div>
                <div class="capsule-actions">
                    <a href="#" class="btn open-application-modal" data-reference="Electronics Industry Business Expert (REF: PROJ-001)">Apply</a>
                </div>
            </div>
            
            <!-- Project Officer (Service Sector) -->
            <div class="job-capsule" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <div class="capsule-content">
                    <h3>Project Officer (Service Sector)</h3>
                    <p><i class="fas fa-users"></i> M/F • <i class="fas fa-map-marker-alt"></i> Morocco</p>
                </div>
                <div class="capsule-actions">
                    <a href="#" class="btn open-application-modal" data-reference="Project Officer (Service Sector) (REF: ASST-002)">Apply</a>
                </div>
            </div>
            
            <!-- Educational Advisor -->
            <div class="job-capsule" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="capsule-content">
                    <h3>Educational Advisor</h3>
                    <p><i class="fas fa-users"></i> M/F • <i class="fas fa-map-marker-alt"></i> Tunis</p>
                </div>
                <div class="capsule-actions">
                    <a href="#" class="btn open-application-modal" data-reference="Educational Advisor (REF: RH-003)">Apply</a>
                </div>
            </div>
            
            <!-- Administrative and Financial Assistant -->
            <div class="job-capsule" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="capsule-content">
                    <h3>Administrative and Financial Assistant</h3>
<p><i class="fas fa-users"></i> M/F • <i class="fas fa-map-marker-alt"></i> Tunis</p>                </div>
                <div class="capsule-actions">
                    <a href="#" class="btn open-application-modal" data-reference="Administrative and Financial Assistant (REF: ADM-004)">Apply</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- CTA Section -->
<section class="cta" style="
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('https://plus.unsplash.com/premium_photo-1676666379095-9ca0e5cfa979?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
    color: white;
    text-align: center;
">
    <div class="container">
        <h2>We Remain Open to Talent</h2>
        <p>Beyond the opportunities offered, we pay special attention to each application and will contact you when your skills can enrich our future projects.</p>
        <a href="<?php echo url('contact'); ?>" class="btn open-application-modal" data-reference="Spontaneous Application" style="text-decoration: none;
            display: inline-block;
            background-color: #8a4c7c;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
        ">Send a Spontaneous Application</a> 
    </div>
</section>

<!-- Application Modal -->
<div id="application-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Apply to: <span id="modal-reference"></span></h2>
        
        <?php if (isset($success) && $success): ?>
            <div class="success-message">
                Your application has been sent successfully!
            </div>
        <?php elseif (!empty($errors)): ?>
            <div class="error-message">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <form id="application-form" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="reference" id="form-reference" value="">
            <input type="hidden" name="captcha_code" id="captcha-code" value="">
            
            <div class="form-group">
                <label for="nom">Last Name *</label>
                <input type="text" id="nom" name="nom" required value="<?php echo isset($nom) ? $nom : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="prenom">First Name *</label>
                <input type="text" id="prenom" name="prenom" required value="<?php echo isset($prenom) ? $prenom : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required value="<?php echo isset($email) ? $email : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="telephone">Phone *</label>
                <input type="tel" id="telephone" name="telephone" required value="<?php echo isset($telephone) ? $telephone : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="cv">CV (PDF, DOC, DOCX - max 5MB) *</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message (optional)</label>
                <textarea id="message" name="message" rows="4"><?php echo isset($message) ? $message : ''; ?></textarea>
            </div>
            
            <div class="form-group captcha-container">
                <label>Anti-spam Verification *</label>
                <div class="captcha-question">
                    <span id="captcha-question-text"></span> = 
                    <input type="number" id="captcha-answer" name="captcha_answer" required>
                </div>
            </div>
            
            <button type="submit" name="submit_application" class="btn">Send My Application</button>
        </form>
    </div>
</div>

<style>
    /* Styles for "Why Join Us" section */
    .why-join {
        background-color: #f8f9fa;
        padding: 5rem 0;
    }
    
    .reasons-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }
    
    .reason-card {
        padding: 2rem;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .reason-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .reason-icon {
        font-size: 2.5rem;
        color: #570045;
        margin-bottom: 1rem;
    }
    
    .reason-card h3 {
        font-size: 1.2rem;
        margin-bottom: 1rem;
        color: #333;
    }
    
    .reason-card p {
        color: #666;
        line-height: 1.6;
    }
    
    /* Styles for job capsules */
    .jobs-capsules-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .job-capsule {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .job-capsule:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }
    
    .capsule-content h3 {
        margin: 0 0 0.5rem 0;
        color: #333;
        font-size: 1.2rem;
    }
    
    .capsule-content p {
        margin: 0;
        color: #666;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .capsule-content i {
        color: #570045;
    }
    
    .capsule-actions .btn {
        background-color: #570045;
        color: white;
        border: none;
        padding: 0.6rem 1.2rem;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }
    
    .capsule-actions .btn:hover {
        background-color: #3d0030;
    }
    
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.5);
    }
    
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.2);
        width: 90%;
        max-width: 600px;
        position: relative;
    }
    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        right: 20px;
        top: 15px;
        cursor: pointer;
    }
    
    .close:hover {
        color: #000;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
    }
    
    .form-group input, 
    .form-group textarea, 
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 16px;
        box-sizing: border-box;
    }
    
    .form-group input:focus, 
    .form-group textarea:focus {
        outline: none;
        border-color: #570045;
        box-shadow: 0 0 0 2px rgba(87, 0, 69, 0.2);
    }
    
    .captcha-container {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 6px;
    }
    
    .captcha-question {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    #captcha-question-text {
        font-weight: bold;
        font-size: 18px;
    }
    
    #captcha-answer {
        width: 100px;
    }
    
    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
    
    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .reasons-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .jobs-capsules-container {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 576px) {
        .reasons-grid {
            grid-template-columns: 1fr;
        }
        
        .job-capsule {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }
        
        .capsule-content p {
            justify-content: center;
        }
        
        .modal-content {
            width: 95%;
            margin: 10% auto;
            padding: 20px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal variables
    const modal = document.getElementById('application-modal');
    const openModalButtons = document.querySelectorAll('.open-application-modal');
    const closeModalButton = document.querySelector('.close');
    const modalReference = document.getElementById('modal-reference');
    const formReference = document.getElementById('form-reference');
    const captchaQuestion = document.getElementById('captcha-question-text');
    const captchaCode = document.getElementById('captcha-code');
    
    // Generate simple CAPTCHA
    function generateCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        captchaQuestion.textContent = `${num1} + ${num2}`;
        captchaCode.value = num1 + num2;
    }
    
    // Open modal
    openModalButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const reference = this.getAttribute('data-reference');
            modalReference.textContent = reference;
            formReference.value = reference;
            generateCaptcha();
            modal.style.display = 'block';
        });
    });
    
    // Close modal
    closeModalButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
    
    // Form validation
    const form = document.getElementById('application-form');
    form.addEventListener('submit', function(e) {
        let valid = true;
        
        // Basic validation of required fields
        const requiredFields = form.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                valid = false;
                field.style.borderColor = 'red';
            } else {
                field.style.borderColor = '#ddd';
            }
        });
        
        // File validation
        const cvInput = document.getElementById('cv');
        if (cvInput.files.length > 0) {
            const file = cvInput.files[0];
            const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            const maxSize = 5 * 1024 * 1024; // 5MB
            
            if (file.size > maxSize) {
                alert('File must not exceed 5MB');
                valid = false;
            } else if (!allowedTypes.includes(file.type)) {
                alert('File format must be PDF, DOC or DOCX');
                valid = false;
            }
        }
        
        if (!valid) {
            e.preventDefault();
            alert('Please fill all required fields correctly.');
        }
    });
});
</script>