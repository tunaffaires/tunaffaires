<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../config/config.php';

// Fonction pour nettoyer les données d'entrée
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fonction pour valider l'email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Fonction pour valider le téléphone
function validatePhone($phone) {
    $phone = preg_replace('/[^0-9+\-\s\(\)]/', '', $phone);
    return strlen($phone) >= 8;
}

// Fonction pour détecter le spam
function isSpam($data) {
    $spamWords = ['viagra', 'casino', 'lottery', 'winner', 'congratulations', 'click here', 'free money'];
    $content = strtolower($data['name'] . ' ' . $data['email'] . ' ' . $data['message']);
    
    foreach ($spamWords as $word) {
        if (strpos($content, $word) !== false) {
            return true;
        }
    }
    
    // Vérifier si le message contient trop de liens
    $linkCount = preg_match_all('/https?:\/\//', $data['message']);
    if ($linkCount > 2) {
        return true;
    }
    
    return false;
}

// Fonction pour enregistrer le message dans un fichier log
function logMessage($data) {
    $logFile = '../logs/contact-messages.log';
    $logDir = dirname($logFile);
    
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    $logEntry = [
        'timestamp' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
        'data' => $data
    ];
    
    file_put_contents($logFile, json_encode($logEntry) . "\n", FILE_APPEND | LOCK_EX);
}

// Vérifier que la requête est POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

try {
    // Récupérer et nettoyer les données
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $company = sanitizeInput($_POST['company'] ?? '');
    $subject = sanitizeInput($_POST['subject'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    $privacy = isset($_POST['privacy']) ? true : false;
    
    // Validation des champs obligatoires
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Le nom est obligatoire';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Le nom doit contenir au moins 2 caractères';
    }
    
    if (empty($email)) {
        $errors[] = 'L\'email est obligatoire';
    } elseif (!validateEmail($email)) {
        $errors[] = 'L\'adresse email n\'est pas valide';
    }
    
    if (!empty($phone) && !validatePhone($phone)) {
        $errors[] = 'Le numéro de téléphone n\'est pas valide';
    }
    
    if (empty($subject)) {
        $errors[] = 'Le sujet est obligatoire';
    }
    
    if (empty($message)) {
        $errors[] = 'Le message est obligatoire';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Le message doit contenir au moins 10 caractères';
    } elseif (strlen($message) > 5000) {
        $errors[] = 'Le message ne peut pas dépasser 5000 caractères';
    }
    
    if (!$privacy) {
        $errors[] = 'Vous devez accepter la politique de confidentialité';
    }
    
    // Si il y a des erreurs, les retourner
    if (!empty($errors)) {
        echo json_encode([
            'success' => false, 
            'message' => 'Erreurs de validation : ' . implode(', ', $errors)
        ]);
        exit;
    }
    
    // Préparer les données pour la vérification anti-spam
    $formData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'company' => $company,
        'subject' => $subject,
        'message' => $message
    ];
    
    // Vérification anti-spam
    if (isSpam($formData)) {
        echo json_encode([
            'success' => false, 
            'message' => 'Votre message a été détecté comme spam'
        ]);
        exit;
    }
    
    // Limitation du taux (rate limiting)
    $rateLimitFile = '../logs/rate-limit.json';
    $rateLimitDir = dirname($rateLimitFile);
    
    if (!is_dir($rateLimitDir)) {
        mkdir($rateLimitDir, 0755, true);
    }
    
    $clientIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $currentTime = time();
    $rateLimitData = [];
    
    if (file_exists($rateLimitFile)) {
        $rateLimitData = json_decode(file_get_contents($rateLimitFile), true) ?: [];
    }
    
    // Nettoyer les anciennes entrées (plus de 1 heure)
    $rateLimitData = array_filter($rateLimitData, function($timestamp) use ($currentTime) {
        return ($currentTime - $timestamp) < 3600;
    });
    
    // Vérifier le nombre de soumissions pour cette IP
    $submissionsCount = 0;
    foreach ($rateLimitData as $ip => $timestamp) {
        if ($ip === $clientIP) {
            $submissionsCount++;
        }
    }
    
    if ($submissionsCount >= 5) {
        echo json_encode([
            'success' => false, 
            'message' => 'Trop de tentatives. Veuillez réessayer plus tard.'
        ]);
        exit;
    }
    
    // Ajouter cette soumission au rate limiting
    $rateLimitData[$clientIP . '_' . $currentTime] = $currentTime;
    file_put_contents($rateLimitFile, json_encode($rateLimitData), LOCK_EX);
    
    // Enregistrer le message dans les logs
    logMessage($formData);
    
    // Préparer l'email
    $emailSubject = "Nouveau message de contact - " . $subject;
    $emailBody = "
    <html>
    <head>
        <title>Nouveau message de contact</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #2563eb; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f8f9fa; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #2563eb; }
            .value { margin-top: 5px; }
            .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nouveau message de contact</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Nom :</div>
                    <div class='value'>" . htmlspecialchars($name) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email :</div>
                    <div class='value'>" . htmlspecialchars($email) . "</div>
                </div>";
    
    if (!empty($phone)) {
        $emailBody .= "
                <div class='field'>
                    <div class='label'>Téléphone :</div>
                    <div class='value'>" . htmlspecialchars($phone) . "</div>
                </div>";
    }
    
    if (!empty($company)) {
        $emailBody .= "
                <div class='field'>
                    <div class='label'>Entreprise :</div>
                    <div class='value'>" . htmlspecialchars($company) . "</div>
                </div>";
    }
    
    $emailBody .= "
                <div class='field'>
                    <div class='label'>Sujet :</div>
                    <div class='value'>" . htmlspecialchars($subject) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Message :</div>
                    <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Date :</div>
                    <div class='value'>" . date('d/m/Y à H:i:s') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Adresse IP :</div>
                    <div class='value'>" . $clientIP . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>Ce message a été envoyé depuis le formulaire de contact du site Univers Formation & Consulting</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Inclure PHPMailer
    require_once 'mailer.php';
    
    // Envoyer l'email
    $emailSent = sendContactEmail($formData);
    
    if ($emailSent) {
        echo json_encode([
            'success' => true, 
            'message' => 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.'
        ]);
    } else {
        echo json_encode([
            'success' => false, 
            'message' => 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer.'
        ]);
    }
    
} catch (Exception $e) {
    // Enregistrer l'erreur dans les logs
    error_log("Erreur formulaire de contact : " . $e->getMessage());
    
    echo json_encode([
        'success' => false, 
        'message' => 'Une erreur technique est survenue. Veuillez réessayer plus tard.'
    ]);
}
?>

