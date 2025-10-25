<!-- File: includes/footer.php -->
 
<footer style="background: linear-gradient(135deg, #000000 0%, #09aa39 100%); color: white; padding: 60px 0 0; position: relative; overflow: hidden;">
    <!-- Pattern de carreaux en arrière-plan -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: 
        linear-gradient(45deg, rgba(9, 170, 57, 0.1) 25%, transparent 25%, transparent 75%, rgba(9, 170, 57, 0.1) 75%),
        linear-gradient(45deg, rgba(9, 170, 57, 0.1) 25%, transparent 25%, transparent 75%, rgba(9, 170, 57, 0.1) 75%);
        background-size: 40px 40px;
        background-position: 0 0, 20px 20px;
        opacity: 0.3; z-index: 1;">
    </div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <!-- Colonne Logo & Description -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="footer-brand mb-4">
                    <img src="assets/images/logo.png" alt="Tunaffaires" style="height: 50px; margin-bottom: 15px;">
                    <p style="color: rgba(255,255,255,0.9); line-height: 1.6; margin-bottom: 15px; font-size: 1.1rem;">
                        <strong>Votre partenaire de confiance depuis 2005</strong> pour la croissance et la transformation digitale des entreprises en Tunisie et en Afrique.
                    </p>
                    <p style="color: rgba(255,255,255,0.8); line-height: 1.6; margin-bottom: 20px;">
                        Plus de 20 ans d'expertise au service du développement entrepreneurial tunisien.
                    </p>
                    <div class="social-links" style="display: flex; gap: 12px;">
                        <a href="https://facebook.com/tunaffaires" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://linkedin.com/company/tunaffaires" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://instagram.com/tunaffaires" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/21624604475" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Colonne Navigation complète -->
            <div class="col-lg-2 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h5 style="color: #e9b949; margin-bottom: 20px; font-weight: 600; font-size: 1.1rem;">Navigation</h5>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('home'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-home fa-sm"></i> Accueil</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('about'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-info-circle fa-sm"></i> À propos</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('services'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-cogs fa-sm"></i> Services</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('solutions'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-lightbulb fa-sm"></i> Solutions</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('tarifs'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-tags fa-sm"></i> Tarifs</a></li>

                    <li style="margin-bottom: 10px;"><a href="<?php echo url('portfolio'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-briefcase fa-sm"></i> Portfolio</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('actualites'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-newspaper fa-sm"></i> Actualités</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('evenements'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-calendar fa-sm"></i> Événements</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('equipe'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-users fa-sm"></i> Équipe</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo url('partenaires'); ?>" style="color: rgba(255,255,255,0.9); text-decoration: none; transition: color 0.3s ease; display: flex; align-items: center; gap: 8px;"><i class="fas fa-handshake fa-sm"></i> Partenaires</a></li>
                </ul>
            </div>

            <!-- Colonne Domaines d'Expertise (Nuage de mots-clés) -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h5 style="color: #e9b949; margin-bottom: 20px; font-weight: 600; font-size: 1.1rem;">Nos Domaines d'Expertise</h5>
                <div class="expertise-cloud" style="display: flex; flex-wrap: wrap; gap: 8px;">
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Stratégie d'Entreprise</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Marketing Digital</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Export Afrique</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Accompagnement</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Mise à Niveau</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Acquisition</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Transformation Digitale</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Conseil Financier</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Gestion de Projet</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Formation</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Audit & Conformité</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Développement Commercial</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Innovation & R&D</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">Management</span>
                    <span style="background: rgba(233, 185, 73, 0.2); color: #e9b949; padding: 6px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; border: 1px solid rgba(233, 185, 73, 0.3);">RSE</span>
                </div>
            </div>
        </div>
        
        <hr style="border-color: rgba(255,255,255,0.2); margin: 40px 0 30px;">
        
        <!-- Section Coordonnées -->
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 mb-4">
                <h5 style="color: #e9b949; margin-bottom: 20px; font-weight: 600; font-size: 1.1rem;">Nos Coordonnées</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                            <h6 style="color: #e9b949; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                                <i class="fas fa-university"></i> Bureau La Manouba
                            </h6>
                            <p style="margin: 0; color: rgba(255,255,255,0.9); font-size: 0.9rem;">
                                AV Habib Bourguiba, La Manouba<br>
                                À côté de l'hôpital Kassab
                            </p>
                            <p style="margin: 10px 0 0; color: rgba(255,255,255,0.8); font-size: 0.85rem;">
                                <i class="fas fa-clock fa-sm"></i> Lun-Ven: 7h-12h / 18h-21h<br>
                                <i class="fas fa-phone fa-sm"></i> +216 24 60 44 75
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                            <h6 style="color: #e9b949; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                                <i class="fas fa-building"></i> Bureau La Marsa
                            </h6>
                            <p style="margin: 0; color: rgba(255,255,255,0.9); font-size: 0.9rem;">
                                Rue de la Mecque, La Marsa<br>
                                À côté de Top Forme
                            </p>
                            <p style="margin: 10px 0 0; color: rgba(255,255,255,0.8); font-size: 0.85rem;">
                                <i class="fas fa-clock fa-sm"></i> Lun-Ven: 10h-13h / 18h-21h<br>
                                <i class="fas fa-phone fa-sm"></i> +216 24 60 44 75
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <h5 style="color: #e9b949; margin-bottom: 20px; font-weight: 600; font-size: 1.1rem;">Contact Rapide</h5>
                <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px;">
                    <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                        <a href="tel:+21624604475" style="flex: 1; min-width: 120px; background: rgba(9, 170, 57, 0.3); color: white; padding: 12px 15px; border-radius: 8px; text-decoration: none; text-align: center; transition: all 0.3s ease; border: 1px solid rgba(9, 170, 57, 0.5);">
                            <i class="fas fa-phone fa-lg mb-2"></i><br>
                            <span style="font-size: 0.9rem; font-weight: 600;">Appeler</span>
                        </a>
                        <a href="https://wa.me/21624604475" style="flex: 1; min-width: 120px; background: rgba(37, 211, 102, 0.2); color: white; padding: 12px 15px; border-radius: 8px; text-decoration: none; text-align: center; transition: all 0.3s ease; border: 1px solid rgba(37, 211, 102, 0.4);">
                            <i class="fab fa-whatsapp fa-lg mb-2"></i><br>
                            <span style="font-size: 0.9rem; font-weight: 600;">WhatsApp</span>
                        </a>
                        <a href="mailto:contact@tunaffaires.tn" style="flex: 1; min-width: 120px; background: rgba(233, 185, 73, 0.2); color: white; padding: 12px 15px; border-radius: 8px; text-decoration: none; text-align: center; transition: all 0.3s ease; border: 1px solid rgba(233, 185, 73, 0.4);">
                            <i class="fas fa-envelope fa-lg mb-2"></i><br>
                            <span style="font-size: 0.9rem; font-weight: 600;">Email</span>
                        </a>
                        <a href="<?php echo url('rdv'); ?>" style="flex: 1; min-width: 120px; background: rgba(255,255,255,0.1); color: white; padding: 12px 15px; border-radius: 8px; text-decoration: none; text-align: center; transition: all 0.3s ease; border: 1px solid rgba(255,255,255,0.2);">
                            <i class="fas fa-calendar fa-lg mb-2"></i><br>
                            <span style="font-size: 0.9rem; font-weight: 600;">RDV</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <hr style="border-color: rgba(255,255,255,0.2); margin: 30px 0 20px;">
        
        <!-- Bottom Footer -->
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                    <strong>© 2005-<?php echo date('Y'); ?> Tunaffaires Services.</strong> Tous droits réservés.
                    <span style="color: #e9b949; margin-left: 10px;">Expertise entrepreneuriale depuis 2005</span>
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div style="display: flex; gap: 20px; justify-content: flex-end; flex-wrap: wrap;">
                    <a href="<?php echo url('mentions-legales'); ?>" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.9rem;">Mentions légales</a>
                    <a href="<?php echo url('confidentialite'); ?>" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.9rem;">Confidentialité</a>
                    <a href="<?php echo url('cgu'); ?>" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.9rem;">CGU</a>
                    <a href="<?php echo url('faq'); ?>" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.9rem;">FAQ</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
/* Styles supplémentaires pour le footer */
footer a:hover {
    color: #e9b949 !important;
    transform: translateY(-1px);
}

.social-links a:hover {
    background: #e9b949 !important;
    color: #000000 !important;
    transform: translateY(-3px);
}

.expertise-cloud span {
    transition: all 0.3s ease;
    cursor: pointer;
}

.expertise-cloud span:hover {
    background: #e9b949 !important;
    color: #000000 !important;
    transform: translateY(-2px);
}

.contact-btn:hover {
    background: rgba(255,255,255,0.2) !important;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    footer {
        text-align: center;
    }
    
    .social-links {
        justify-content: center;
    }
    
    .expertise-cloud {
        justify-content: center;
    }
    
    .contact-buttons {
        flex-direction: column;
    }
}
</style>