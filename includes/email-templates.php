<?php
// Templates d'emails pour le site Univers Formation & Consulting

class EmailTemplates {
    
    /**
     * Template pour l'email de confirmation envoyé au client
     */
    public static function getClientConfirmationTemplate($data) {
        $template = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Confirmation de réception - Univers Formation & Consulting</title>
            <style>
                body { 
                    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; 
                    line-height: 1.6; 
                    color: #333; 
                    margin: 0; 
                    padding: 0; 
                    background-color: #f8f9fa;
                }
                .container { 
                    max-width: 600px; 
                    margin: 0 auto; 
                    background: white;
                    box-shadow: 0 0 20px rgba(0,0,0,0.1);
                }
                .header { 
                    background: linear-gradient(135deg, #2563eb, #1d4ed8); 
                    color: white; 
                    padding: 30px 20px; 
                    text-align: center; 
                }
                .header h1 { 
                    margin: 0; 
                    font-size: 24px; 
                    font-weight: 600;
                }
                .header p { 
                    margin: 10px 0 0 0; 
                    opacity: 0.9; 
                }
                .content { 
                    padding: 30px 20px; 
                }
                .greeting { 
                    font-size: 18px; 
                    color: #2563eb; 
                    margin-bottom: 20px; 
                    font-weight: 600;
                }
                .message { 
                    margin-bottom: 25px; 
                    line-height: 1.7;
                }
                .info-box { 
                    background: #f8f9fa; 
                    border-left: 4px solid #2563eb; 
                    padding: 20px; 
                    margin: 20px 0; 
                    border-radius: 0 8px 8px 0;
                }
                .info-title { 
                    font-weight: 600; 
                    color: #2563eb; 
                    margin-bottom: 10px; 
                }
                .contact-info { 
                    background: #2563eb; 
                    color: white; 
                    padding: 20px; 
                    border-radius: 8px; 
                    margin: 25px 0; 
                }
                .contact-info h3 { 
                    margin: 0 0 15px 0; 
                    font-size: 18px; 
                }
                .contact-item { 
                    margin: 8px 0; 
                    display: flex; 
                    align-items: center; 
                }
                .contact-item i { 
                    width: 20px; 
                    margin-right: 10px; 
                }
                .footer { 
                    background: #1e293b; 
                    color: white; 
                    padding: 20px; 
                    text-align: center; 
                    font-size: 14px; 
                }
                .footer a { 
                    color: #f59e0b; 
                    text-decoration: none; 
                }
                .social-links { 
                    margin: 15px 0; 
                }
                .social-links a { 
                    display: inline-block; 
                    margin: 0 10px; 
                    color: white; 
                    text-decoration: none; 
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>Univers Formation & Consulting</h1>
                    <p>Former, accompagner et transformer</p>
                </div>
                
                <div class="content">
                    <div class="greeting">
                        Bonjour ' . htmlspecialchars($data['name']) . ',
                    </div>
                    
                    <div class="message">
                        <p>Nous avons bien reçu votre message et nous vous remercions de votre intérêt pour nos services.</p>
                        
                        <p>Notre équipe d\'experts va examiner votre demande concernant "<strong>' . htmlspecialchars($data['subject']) . '</strong>" et vous répondra dans les plus brefs délais, généralement sous 24 heures ouvrables.</p>
                    </div>
                    
                    <div class="info-box">
                        <div class="info-title">Récapitulatif de votre demande :</div>
                        <p><strong>Sujet :</strong> ' . htmlspecialchars($data['subject']) . '</p>
                        <p><strong>Date :</strong> ' . date('d/m/Y à H:i') . '</p>
                        ' . (!empty($data['company']) ? '<p><strong>Entreprise :</strong> ' . htmlspecialchars($data['company']) . '</p>' : '') . '
                    </div>
                    
                    <div class="message">
                        <p>En attendant notre réponse, nous vous invitons à :</p>
                        <ul>
                            <li>Consulter notre site web pour découvrir nos programmes de formation</li>
                            <li>Suivre nos actualités sur nos réseaux sociaux</li>
                            <li>Télécharger nos brochures détaillées</li>
                        </ul>
                    </div>
                    
                    <div class="contact-info">
                        <h3>Nos coordonnées</h3>
                        <div class="contact-item">
                            <span>📧</span> contact@univers-fc.com
                        </div>
                        <div class="contact-item">
                            <span>📞</span> +216 XX XXX XXX
                        </div>
                        <div class="contact-item">
                            <span>📍</span> Tunis, Tunisie
                        </div>
                        <div class="contact-item">
                            <span>🕒</span> Lun - Ven : 9h00 - 18h00
                        </div>
                    </div>
                </div>
                
                <div class="footer">
                    <div class="social-links">
                        <a href="#">Facebook</a> |
                        <a href="#">LinkedIn</a> |
                        <a href="#">Twitter</a> |
                        <a href="#">Instagram</a>
                    </div>
                    <p>&copy; ' . date('Y') . ' Univers Formation & Consulting. Tous droits réservés.</p>
                    <p>
                        <a href="#">Politique de confidentialité</a> | 
                        <a href="#">Conditions d\'utilisation</a>
                    </p>
                </div>
            </div>
        </body>
        </html>';
        
        return $template;
    }
    
    /**
     * Template pour l'email de notification envoyé à l'équipe
     */
    public static function getAdminNotificationTemplate($data) {
        $template = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nouveau message de contact</title>
            <style>
                body { 
                    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; 
                    line-height: 1.6; 
                    color: #333; 
                    margin: 0; 
                    padding: 0; 
                    background-color: #f8f9fa;
                }
                .container { 
                    max-width: 700px; 
                    margin: 0 auto; 
                    background: white;
                    box-shadow: 0 0 20px rgba(0,0,0,0.1);
                }
                .header { 
                    background: linear-gradient(135deg, #dc2626, #b91c1c); 
                    color: white; 
                    padding: 20px; 
                    text-align: center; 
                }
                .header h1 { 
                    margin: 0; 
                    font-size: 22px; 
                    font-weight: 600;
                }
                .priority { 
                    background: #f59e0b; 
                    color: white; 
                    padding: 10px 20px; 
                    text-align: center; 
                    font-weight: 600;
                }
                .content { 
                    padding: 25px; 
                }
                .field-group { 
                    margin-bottom: 20px; 
                    border-bottom: 1px solid #e5e7eb; 
                    padding-bottom: 15px;
                }
                .field-group:last-child { 
                    border-bottom: none; 
                }
                .field-label { 
                    font-weight: 600; 
                    color: #2563eb; 
                    margin-bottom: 5px; 
                    font-size: 14px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }
                .field-value { 
                    background: #f8f9fa; 
                    padding: 12px; 
                    border-radius: 6px; 
                    border-left: 3px solid #2563eb;
                    font-size: 15px;
                }
                .message-content { 
                    background: #fff; 
                    border: 1px solid #e5e7eb; 
                    padding: 20px; 
                    border-radius: 8px; 
                    white-space: pre-wrap; 
                    font-family: Georgia, serif;
                    line-height: 1.7;
                }
                .metadata { 
                    background: #1e293b; 
                    color: white; 
                    padding: 15px; 
                    font-size: 13px; 
                }
                .metadata-item { 
                    margin: 5px 0; 
                }
                .action-buttons { 
                    text-align: center; 
                    padding: 20px; 
                    background: #f8f9fa; 
                }
                .btn { 
                    display: inline-block; 
                    padding: 12px 24px; 
                    margin: 0 10px; 
                    text-decoration: none; 
                    border-radius: 6px; 
                    font-weight: 600; 
                    font-size: 14px;
                }
                .btn-primary { 
                    background: #2563eb; 
                    color: white; 
                }
                .btn-secondary { 
                    background: #6b7280; 
                    color: white; 
                }
                .urgency-high { 
                    border-left-color: #dc2626 !important; 
                }
                .urgency-medium { 
                    border-left-color: #f59e0b !important; 
                }
                .urgency-low { 
                    border-left-color: #10b981 !important; 
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>🔔 Nouveau message de contact</h1>
                </div>
                
                <div class="priority">
                    ⚡ Priorité : ' . self::getPriority($data['subject']) . ' - Réponse requise sous 24h
                </div>
                
                <div class="content">
                    <div class="field-group">
                        <div class="field-label">👤 Informations du contact</div>
                        <div class="field-value">
                            <strong>' . htmlspecialchars($data['name']) . '</strong><br>
                            📧 <a href="mailto:' . htmlspecialchars($data['email']) . '">' . htmlspecialchars($data['email']) . '</a><br>
                            ' . (!empty($data['phone']) ? '📞 <a href="tel:' . htmlspecialchars($data['phone']) . '">' . htmlspecialchars($data['phone']) . '</a><br>' : '') . '
                            ' . (!empty($data['company']) ? '🏢 ' . htmlspecialchars($data['company']) . '<br>' : '') . '
                        </div>
                    </div>
                    
                    <div class="field-group">
                        <div class="field-label">📋 Sujet de la demande</div>
                        <div class="field-value ' . self::getUrgencyClass($data['subject']) . '">
                            ' . htmlspecialchars($data['subject']) . '
                        </div>
                    </div>
                    
                    <div class="field-group">
                        <div class="field-label">💬 Message</div>
                        <div class="message-content">
                            ' . nl2br(htmlspecialchars($data['message'])) . '
                        </div>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <a href="mailto:' . htmlspecialchars($data['email']) . '?subject=Re: ' . urlencode($data['subject']) . '" class="btn btn-primary">
                        📧 Répondre par email
                    </a>
                    ' . (!empty($data['phone']) ? '<a href="tel:' . htmlspecialchars($data['phone']) . '" class="btn btn-secondary">📞 Appeler</a>' : '') . '
                </div>
                
                <div class="metadata">
                    <div class="metadata-item"><strong>Date de réception :</strong> ' . date('d/m/Y à H:i:s') . '</div>
                    <div class="metadata-item"><strong>Adresse IP :</strong> ' . ($_SERVER['REMOTE_ADDR'] ?? 'Inconnue') . '</div>
                    <div class="metadata-item"><strong>User Agent :</strong> ' . ($_SERVER['HTTP_USER_AGENT'] ?? 'Inconnu') . '</div>
                    <div class="metadata-item"><strong>Référent :</strong> ' . ($_SERVER['HTTP_REFERER'] ?? 'Direct') . '</div>
                </div>
            </div>
        </body>
        </html>';
        
        return $template;
    }
    
    /**
     * Détermine la priorité basée sur le sujet
     */
    private static function getPriority($subject) {
        $highPriority = ['partenariat', 'urgent', 'important'];
        $mediumPriority = ['formation', 'coaching'];
        
        $subject = strtolower($subject);
        
        foreach ($highPriority as $keyword) {
            if (strpos($subject, $keyword) !== false) {
                return 'HAUTE';
            }
        }
        
        foreach ($mediumPriority as $keyword) {
            if (strpos($subject, $keyword) !== false) {
                return 'MOYENNE';
            }
        }
        
        return 'NORMALE';
    }
    
    /**
     * Retourne la classe CSS pour l'urgence
     */
    private static function getUrgencyClass($subject) {
        $priority = self::getPriority($subject);
        
        switch ($priority) {
            case 'HAUTE':
                return 'urgency-high';
            case 'MOYENNE':
                return 'urgency-medium';
            default:
                return 'urgency-low';
        }
    }
    
    /**
     * Template pour l'email de newsletter
     */
    public static function getNewsletterTemplate($data) {
        // Template pour newsletter (optionnel)
        return '';
    }
}
?>

