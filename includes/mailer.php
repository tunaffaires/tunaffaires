<?php
require_once '../vendor/phpmailer/src/Exception.php';
require_once '../vendor/phpmailer/src/PHPMailer.php';
require_once '../vendor/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailerService {
    private $mailer;
    private $config;
    
    public function __construct() {
        $this->mailer = new PHPMailer(true);
        $this->config = $this->loadConfig();
        $this->setupMailer();
    }
    
    /**
     * Charge la configuration email
     */
    private function loadConfig() {
        return [
            'smtp_host' => SMTP_HOST,
            'smtp_port' => SMTP_PORT,
            'smtp_username' => SMTP_USERNAME,
            'smtp_password' => SMTP_PASSWORD,
            'from_email' => CONTACT_EMAIL,
            'from_name' => 'INPROOV Consulting',
            'reply_to' => CONTACT_EMAIL,
            'admin_email' => CONTACT_EMAIL
        ];
    }
    
    /**
     * Configure PHPMailer
     */
    private function setupMailer() {
        try {
            // Configuration du serveur SMTP
            $this->mailer->isSMTP();
            $this->mailer->Host = $this->config['smtp_host'];
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = $this->config['smtp_username'];
            $this->mailer->Password = $this->config['smtp_password'];
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mailer->Port = $this->config['smtp_port'];
            
            // Configuration générale
            $this->mailer->setFrom($this->config['from_email'], $this->config['from_name']);
            $this->mailer->addReplyTo($this->config['reply_to'], $this->config['from_name']);
            $this->mailer->isHTML(true);
            $this->mailer->CharSet = 'UTF-8';
            
            // Configuration pour le débogage (désactivé en production)
            $this->mailer->SMTPDebug = 0; // 0 = off, 1 = client, 2 = client and server
            $this->mailer->Debugoutput = 'html';
            
        } catch (Exception $e) {
            error_log("Erreur configuration PHPMailer: " . $e->getMessage());
            throw new Exception("Erreur de configuration email");
        }
    }
    
    /**
     * Envoie un email de confirmation au client
     */
    public function sendClientConfirmation($contactData) {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->clearAttachments();
            
            // Destinataire
            $this->mailer->addAddress($contactData['email'], $contactData['firstname'] . ' ' . $contactData['lastname']);
            
            // Sujet
            $this->mailer->Subject = 'Confirmation de réception - INPROOV Consulting';
            
            // Corps du message
            $this->mailer->Body = $this->getClientConfirmationTemplate($contactData);
            $this->mailer->AltBody = $this->generatePlainTextConfirmation($contactData);
            
            // Envoi
            $result = $this->mailer->send();
            
            if ($result) {
                error_log("Email de confirmation envoyé à: " . $contactData['email']);
                return true;
            }
            
            return false;
            
        } catch (Exception $e) {
            error_log("Erreur envoi confirmation: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Envoie une notification à l'équipe
     */
    public function sendAdminNotification($contactData) {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->clearAttachments();
            
            // Destinataires (équipe)
            $this->mailer->addAddress($this->config['admin_email'], 'Équipe INPROOV Consulting');
            
            // Sujet avec priorité
            $priority = $this->getPriorityLevel($contactData['message']);
            $this->mailer->Subject = "[{$priority}] Nouveau contact depuis le site web";
            
            // Priorité de l'email
            if ($priority === 'URGENT') {
                $this->mailer->Priority = 1; // Haute priorité
            } elseif ($priority === 'IMPORTANT') {
                $this->mailer->Priority = 3; // Normale
            } else {
                $this->mailer->Priority = 5; // Basse priorité
            }
            
            // Corps du message
            $this->mailer->Body = $this->getAdminNotificationTemplate($contactData);
            $this->mailer->AltBody = $this->generatePlainTextNotification($contactData);
            
            // Envoi
            $result = $this->mailer->send();
            
            if ($result) {
                error_log("Notification admin envoyée pour: " . $contactData['email']);
                return true;
            }
            
            return false;
            
        } catch (Exception $e) {
            error_log("Erreur envoi notification admin: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Envoie les deux emails (confirmation + notification)
     */
    public function sendContactEmails($contactData) {
        $results = [
            'client_confirmation' => false,
            'admin_notification' => false
        ];
        
        // Envoi de la confirmation au client
        $results['client_confirmation'] = $this->sendClientConfirmation($contactData);
        
        // Envoi de la notification à l'équipe
        $results['admin_notification'] = $this->sendAdminNotification($contactData);
        
        return $results;
    }
    
    /**
     * Détermine le niveau de priorité
     */
    private function getPriorityLevel($message) {
        $message = strtolower($message);
        
        if (strpos($message, 'urgent') !== false || strpos($message, 'urgente') !== false) {
            return 'URGENT';
        } elseif (strpos($message, 'important') !== false || strpos($message, 'importante') !== false) {
            return 'IMPORTANT';
        }
        
        return 'NORMAL';
    }
    
    /**
     * Génère la version HTML de l'email de confirmation
     */
    private function getClientConfirmationTemplate($data) {
        $name = $data['firstname'] . ' ' . $data['lastname'];
        $company = !empty($data['company']) ? $data['company'] : 'Non spécifiée';
        $job = !empty($data['job']) ? $data['job'] : 'Non spécifiée';
        
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Confirmation de réception</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #570045; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; }
                .footer { background-color: #f1f1f1; padding: 10px; text-align: center; font-size: 12px; }
                .info-label { font-weight: bold; color: #570045; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>INPROOV Consulting</h1>
                </div>
                <div class='content'>
                    <h2>Confirmation de réception</h2>
                    <p>Bonjour $name,</p>
                    <p>Nous avons bien reçu votre message et nous vous remercions de votre intérêt pour nos services.</p>
                    <p>Notre équipe va examiner votre demande et vous répondra dans les plus brefs délais, généralement sous 24 heures ouvrables.</p>
                    
                    <h3>Récapitulatif de votre demande :</h3>
                    <p><span class='info-label'>Nom :</span> $name</p>
                    <p><span class='info-label'>Société :</span> $company</p>
                    <p><span class='info-label'>Fonction :</span> $job</p>
                    <p><span class='info-label'>Email :</span> " . $data['email'] . "</p>
                    <p><span class='info-label'>Téléphone :</span> " . (!empty($data['phone']) ? $data['phone'] : 'Non spécifié') . "</p>
                    <p><span class='info-label'>Message :</span><br>" . nl2br($data['message']) . "</p>
                    
                    <p><span class='info-label'>Date :</span> " . date('d/m/Y à H:i') . "</p>
                </div>
                <div class='footer'>
                    <p>© " . date('Y') . " INPROOV Consulting. Tous droits réservés.</p>
                    <p>8 rue Mehdia, Tunis, Tunisie | contact@inproovconsulting.com | +216 29 384 574</p>
                </div>
            </div>
        </body>
        </html>
        ";
    }
    
    /**
     * Génère la version HTML de la notification admin
     */
    private function getAdminNotificationTemplate($data) {
        $name = $data['firstname'] . ' ' . $data['lastname'];
        $company = !empty($data['company']) ? $data['company'] : 'Non spécifiée';
        $job = !empty($data['job']) ? $data['job'] : 'Non spécifiée';
        
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Nouveau contact depuis le site web</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #570045; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; }
                .footer { background-color: #f1f1f1; padding: 10px; text-align: center; font-size: 12px; }
                .info-label { font-weight: bold; color: #570045; }
                .urgent { color: #ff0000; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>INPROOV Consulting - Nouveau contact</h1>
                </div>
                <div class='content'>
                    <h2>Nouveau message de contact</h2>
                    
                    <h3>Informations du contact :</h3>
                    <p><span class='info-label'>Nom :</span> $name</p>
                    <p><span class='info-label'>Société :</span> $company</p>
                    <p><span class='info-label'>Fonction :</span> $job</p>
                    <p><span class='info-label'>Email :</span> " . $data['email'] . "</p>
                    <p><span class='info-label'>Téléphone :</span> " . (!empty($data['phone']) ? $data['phone'] : 'Non spécifié') . "</p>
                    
                    <h3>Message :</h3>
                    <p>" . nl2br($data['message']) . "</p>
                    
                    <p><span class='info-label'>Date de réception :</span> " . date('d/m/Y à H:i:s') . "</p>
                    <p><span class='info-label'>Adresse IP :</span> " . ($_SERVER['REMOTE_ADDR'] ?? 'Inconnue') . "</p>
                </div>
                <div class='footer'>
                    <p>© " . date('Y') . " INPROOV Consulting. Tous droits réservés.</p>
                </div>
            </div>
        </body>
        </html>
        ";
    }
    
    /**
     * Génère la version texte de l'email de confirmation
     */
    private function generatePlainTextConfirmation($data) {
        $name = $data['firstname'] . ' ' . $data['lastname'];
        $company = !empty($data['company']) ? $data['company'] : 'Non spécifiée';
        $job = !empty($data['job']) ? $data['job'] : 'Non spécifiée';
        
        return "
Bonjour $name,

Nous avons bien reçu votre message et nous vous remercions de votre intérêt pour nos services.

Notre équipe va examiner votre demande et vous répondra dans les plus brefs délais, généralement sous 24 heures ouvrables.

Récapitulatif de votre demande :
- Nom : $name
- Société : $company
- Fonction : $job
- Email : " . $data['email'] . "
- Téléphone : " . (!empty($data['phone']) ? $data['phone'] : 'Non spécifié') . "
- Message : " . $data['message'] . "
- Date : " . date('d/m/Y à H:i') . "

Nos coordonnées :
Email : contact@inproovconsulting.com
Téléphone : +216 29 384 574
Adresse : 8 rue Mehdia, Tunis, Tunisie
Horaires : Lun - Ven : 8h00 - 18h00

Cordialement,
L'équipe INPROOV Consulting

---
© " . date('Y') . " INPROOV Consulting. Tous droits réservés.
        ";
    }
    
    /**
     * Génère la version texte de la notification admin
     */
    private function generatePlainTextNotification($data) {
        $name = $data['firstname'] . ' ' . $data['lastname'];
        $company = !empty($data['company']) ? $data['company'] : 'Non spécifiée';
        $job = !empty($data['job']) ? $data['job'] : 'Non spécifiée';
        
        return "
NOUVEAU MESSAGE DE CONTACT

Informations du contact :
- Nom : $name
- Société : $company
- Fonction : $job
- Email : " . $data['email'] . "
- Téléphone : " . (!empty($data['phone']) ? $data['phone'] : 'Non spécifié') . "

Message :
" . $data['message'] . "

---
Date de réception : " . date('d/m/Y à H:i:s') . "
Adresse IP : " . ($_SERVER['REMOTE_ADDR'] ?? 'Inconnue') . "
        ";
    }
    
    /**
     * Test de la configuration email
     */
    public function testConfiguration() {
        try {
            // Test de connexion SMTP
            $this->mailer->smtpConnect();
            $this->mailer->smtpClose();
            return true;
        } catch (Exception $e) {
            error_log("Test configuration email échoué: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Envoie un email de test
     */
    public function sendTestEmail($toEmail = null) {
        try {
            $this->mailer->clearAddresses();
            
            $testEmail = $toEmail ?? $this->config['admin_email'];
            $this->mailer->addAddress($testEmail);
            
            $this->mailer->Subject = 'Test de configuration - INPROOV Consulting';
            $this->mailer->Body = '
                <h2>Test de configuration email</h2>
                <p>Si vous recevez cet email, la configuration PHPMailer fonctionne correctement.</p>
                <p><strong>Date du test :</strong> ' . date('d/m/Y à H:i:s') . '</p>
                <p><strong>Serveur :</strong> ' . ($_SERVER['SERVER_NAME'] ?? 'localhost') . '</p>
            ';
            $this->mailer->AltBody = 'Test de configuration email - ' . date('d/m/Y à H:i:s');
            
            return $this->mailer->send();
            
        } catch (Exception $e) {
            error_log("Erreur test email: " . $e->getMessage());
            return false;
        }
    }
}

/**
 * Fonction utilitaire pour envoyer facilement un email de contact
 */
function sendContactEmail($contactData) {
    try {
        $mailer = new MailerService();
        $results = $mailer->sendContactEmails($contactData);
        
        // Au moins un email doit être envoyé avec succès
        return $results['client_confirmation'] || $results['admin_notification'];
        
    } catch (Exception $e) {
        error_log("Erreur service email: " . $e->getMessage());
        return false;
    }
}
?>