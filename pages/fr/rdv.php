<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre Rendez-vous - TunaFFaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #09aa39ff;
            --primary-light: #000000ff;
            --secondary: #e9b949;
            --secondary-light: #f5d37c;
            --accent: #2a7f62;
            --dark: #0f1f2f;
            --light: #f8f9fa;
            --gray: #6c757d;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Video Hero Section */
        .video-hero {
            position: relative;
            height: 60vh;
            min-height: 400px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(1, 156, 60, 0.7);
            z-index: -1;
        }

        .video-hero-content {
            max-width: 800px;
            padding: 0 20px;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .logo span {
            color: var(--secondary);
        }

        .video-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .video-hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }

        /* Appointment Section */
        .appointment-section {
            padding: 60px 0;
        }

        .appointment-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .appointment-form {
            background: white;
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: var(--transition);
            font-family: 'Inter', sans-serif;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(9, 170, 57, 0.1);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .calendar-container {
            background: white;
            padding: 30px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark);
        }

        .calendar-nav {
            display: flex;
            gap: 10px;
        }

        .calendar-nav-btn {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--light);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .calendar-nav-btn:hover {
            background: var(--primary);
            color: white;
        }

        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 10px;
        }

        .weekday {
            font-weight: 600;
            color: var(--gray);
            font-size: 0.9rem;
            padding: 10px 0;
            text-align: center;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-day {
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            border: 2px solid transparent;
        }

        .calendar-day:hover {
            border-color: var(--primary);
            background: rgba(9, 170, 57, 0.05);
        }

        .calendar-day.empty {
            background: transparent;
            cursor: default;
        }

        .calendar-day.empty:hover {
            background: transparent;
            border-color: transparent;
        }

        .calendar-day.selected {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .calendar-day.today {
            border-color: var(--secondary);
        }

        .calendar-day.disabled {
            color: #ccc;
            cursor: not-allowed;
            background: #f8f9fa;
        }

        .calendar-day.disabled:hover {
            border-color: transparent;
            background: #f8f9fa;
            color: #ccc;
        }

        .time-slots-container {
            margin-top: 30px;
        }

        .time-slots-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
            text-align: center;
        }

        .time-slots {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .time-slot {
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            background: white;
        }

        .time-slot:hover {
            border-color: var(--primary);
            background: rgba(9, 170, 57, 0.05);
        }

        .time-slot.selected {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .time-slot.disabled {
            color: #ccc;
            cursor: not-allowed;
            background: #f8f9fa;
        }

        .time-slot.disabled:hover {
            border-color: #e9ecef;
            background: #f8f9fa;
            color: #ccc;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
            width: 100%;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(26, 58, 95, 0.2);
        }

        .btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .confirmation-message {
            display: none;
            background: #d4edda;
            color: #155724;
            padding: 30px;
            border-radius: var(--radius);
            text-align: center;
            margin-top: 20px;
        }

        .selected-info {
            background: #e7f3ff;
            padding: 20px;
            border-radius: var(--radius);
            margin-bottom: 20px;
            border-left: 4px solid var(--primary);
        }

        .selected-info h4 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .appointment-info {
            background: white;
            padding: 30px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-top: 30px;
        }

        .info-item {
            display: flex;
            margin-bottom: 20px;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.2rem;
            color: var(--dark);
            flex-shrink: 0;
        }

        .info-content h4 {
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .info-content p {
            color: var(--gray);
            margin-bottom: 0;
        }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 5s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .appointment-container {
                grid-template-columns: 1fr;
            }
            
            .video-hero h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .video-hero {
                height: 50vh;
                min-height: 350px;
            }
            
            .video-hero h1 {
                font-size: 2.2rem;
            }
            
            .time-slots {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .appointment-form, .calendar-container {
                padding: 25px;
            }
        }

        @media (max-width: 576px) {
            .video-hero h1 {
                font-size: 2rem;
            }
            
            .time-slots {
                grid-template-columns: 1fr;
            }
            
            .calendar-day {
                height: 40px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Video Hero Section -->
    <section class="video-hero">
        <video class="video-background" autoplay muted loop>
            <source src="https://videos.pexels.com/video-files/2314024/2314024-uhd_2560_1440_24fps.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
        <div class="container">
            <div class="video-hero-content">
                <a href="index.php" class="logo floating">
                    Tuna<span>FFaires</span>
                </a>
                <h1>Prendre Rendez-vous</h1>
                <p>Planifiez une consultation avec nos experts pour discuter de votre projet</p>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="container">
            <div class="appointment-container">
                <!-- Formulaire de rendez-vous -->
                <div class="appointment-form">
                    <form id="appointmentForm">
                        <div class="selected-info" id="selectedInfo" style="display: none;">
                            <h4>📅 Rendez-vous sélectionné</h4>
                            <p id="selectedDateTime">Aucune date sélectionnée</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">Prénom *</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName" class="form-label">Nom *</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Téléphone *</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="company" class="form-label">Entreprise</label>
                            <input type="text" id="company" name="company" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service" class="form-label">Service demandé *</label>
                            <select id="service" name="service" class="form-control" required>
                                <option value="">Sélectionnez un service</option>
                                <option value="Stratégie d'Entreprise">Stratégie d'Entreprise</option>
                                <option value="Marketing Digital">Marketing Digital</option>
                                <option value="Export en Afrique">Export en Afrique</option>
                                <option value="Accompagnement au Lancement">Accompagnement au Lancement</option>
                                <option value="Mise à Niveau d'Entreprises">Mise à Niveau d'Entreprises</option>
                                <option value="Transformation Digitale">Transformation Digitale</option>
                                <option value="Conseil Financier">Conseil Financier</option>
                                <option value="Formation Professionnelle">Formation Professionnelle</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message (optionnel)</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Décrivez brièvement votre projet ou vos besoins..."></textarea>
                        </div>
                        
                        <input type="hidden" id="selectedDate" name="selectedDate">
                        <input type="hidden" id="selectedTime" name="selectedTime">
                        
                        <button type="submit" class="btn btn-primary" id="submitBtn" disabled>
                            <i class="fas fa-calendar-check me-2"></i>Confirmer le rendez-vous
                        </button>
                    </form>
                    
                    <div id="confirmationMessage" class="confirmation-message">
                        <i class="fas fa-check-circle fa-3x mb-3" style="color: #155724;"></i>
                        <h3>Votre rendez-vous a été réservé avec succès !</h3>
                        <p>Nous vous avons envoyé un email de confirmation avec les détails de votre rendez-vous.</p>
                        <p class="mt-3"><strong>Prochaines étapes :</strong></p>
                        <ul style="text-align: left; max-width: 300px; margin: 0 auto;">
                            <li>Vous recevrez un rappel 24h avant</li>
                            <li>Préparez vos questions et documents</li>
                            <li>Le lien de visioconférence vous sera envoyé</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Calendrier et horaires -->
                <div>
                    <div class="calendar-container">
                        <div class="calendar-header">
                            <button class="calendar-nav-btn" id="prevMonth">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <div class="calendar-title" id="currentMonth">Mois 2023</div>
                            <button class="calendar-nav-btn" id="nextMonth">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        
                        <div class="calendar-weekdays">
                            <div class="weekday">Lun</div>
                            <div class="weekday">Mar</div>
                            <div class="weekday">Mer</div>
                            <div class="weekday">Jeu</div>
                            <div class="weekday">Ven</div>
                            <div class="weekday">Sam</div>
                            <div class="weekday">Dim</div>
                        </div>
                        
                        <div class="calendar-days" id="calendarDays">
                            <!-- Les jours du calendrier seront générés par JavaScript -->
                        </div>
                        
                        <div class="time-slots-container">
                            <div class="time-slots-title" id="timeSlotsTitle">
                                Sélectionnez une date pour voir les horaires disponibles
                            </div>
                            <div class="time-slots" id="timeSlots">
                                <!-- Les créneaux horaires seront générés par JavaScript -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informations pratiques -->
                    <div class="appointment-info">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h4>Durée de la consultation</h4>
                                <p>30 à 45 minutes selon vos besoins</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="info-content">
                                <h4>Modalités</h4>
                                <p>En visioconférence ou en présentiel à Tunis</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="info-content">
                                <h4>Expert dédié</h4>
                                <p>Vous serez accompagné par un expert spécialisé dans votre domaine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Configuration du calendrier
        document.addEventListener('DOMContentLoaded', function() {
            const currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();
            
            const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
            ];
            
            const timeSlots = [
                "09:00", "09:30", "10:00", "10:30", "11:00", "11:30",
                "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00"
            ];
            
            // Éléments DOM
            const currentMonthElement = document.getElementById('currentMonth');
            const calendarDaysElement = document.getElementById('calendarDays');
            const timeSlotsElement = document.getElementById('timeSlots');
            const timeSlotsTitle = document.getElementById('timeSlotsTitle');
            const selectedInfo = document.getElementById('selectedInfo');
            const selectedDateTime = document.getElementById('selectedDateTime');
            const selectedDateInput = document.getElementById('selectedDate');
            const selectedTimeInput = document.getElementById('selectedTime');
            const prevMonthButton = document.getElementById('prevMonth');
            const nextMonthButton = document.getElementById('nextMonth');
            const appointmentForm = document.getElementById('appointmentForm');
            const confirmationMessage = document.getElementById('confirmationMessage');
            const submitBtn = document.getElementById('submitBtn');
            
            let selectedDate = null;
            let selectedTime = null;
            let selectedDayElement = null;
            let selectedTimeElement = null;
            
            // Générer les créneaux horaires pour une date donnée
            function generateTimeSlots(date) {
                timeSlotsElement.innerHTML = '';
                timeSlotsTitle.textContent = `Horaires disponibles pour le ${date}`;
                
                // Simuler des créneaux disponibles (40% de chances d'être indisponible)
                const availableSlots = timeSlots.filter(() => Math.random() > 0.4);
                
                if (availableSlots.length === 0) {
                    timeSlotsElement.innerHTML = '<div class="text-center text-muted">Aucun créneau disponible pour cette date</div>';
                    return;
                }
                
                availableSlots.forEach(time => {
                    const timeSlot = document.createElement('div');
                    timeSlot.className = 'time-slot';
                    timeSlot.textContent = time;
                    timeSlot.dataset.time = time;
                    
                    timeSlot.addEventListener('click', function() {
                        // Désélectionner tous les créneaux
                        document.querySelectorAll('.time-slot').forEach(slot => {
                            slot.classList.remove('selected');
                        });
                        
                        // Sélectionner ce créneau
                        timeSlot.classList.add('selected');
                        selectedTime = time;
                        selectedTimeInput.value = selectedTime;
                        
                        if (selectedTimeElement) {
                            selectedTimeElement.classList.remove('selected');
                        }
                        selectedTimeElement = timeSlot;
                        
                        // Mettre à jour l'affichage et activer le bouton
                        updateSelectedInfo();
                        updateSubmitButton();
                    });
                    
                    timeSlotsElement.appendChild(timeSlot);
                });
            }
            
            // Générer le calendrier
            function generateCalendar(month, year) {
                currentMonthElement.textContent = `${monthNames[month]} ${year}`;
                calendarDaysElement.innerHTML = '';
                
                // Premier jour du mois
                const firstDay = new Date(year, month, 1);
                // Dernier jour du mois
                const lastDay = new Date(year, month + 1, 0);
                // Jour de la semaine du premier jour (0 = dimanche, 1 = lundi, etc.)
                const firstDayIndex = firstDay.getDay();
                // Ajustement pour commencer la semaine le lundi
                const startDay = firstDayIndex === 0 ? 6 : firstDayIndex - 1;
                
                // Jours du mois précédent
                const prevMonthLastDay = new Date(year, month, 0).getDate();
                
                // Ajouter les jours du mois précédent
                for (let i = startDay; i > 0; i--) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'calendar-day empty';
                    dayElement.textContent = prevMonthLastDay - i + 1;
                    calendarDaysElement.appendChild(dayElement);
                }
                
                // Ajouter les jours du mois courant
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                
                for (let i = 1; i <= lastDay.getDate(); i++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'calendar-day';
                    dayElement.textContent = i;
                    dayElement.dataset.day = i;
                    dayElement.dataset.month = month;
                    dayElement.dataset.year = year;
                    
                    const cellDate = new Date(year, month, i);
                    cellDate.setHours(0, 0, 0, 0);
                    
                    // Marquer aujourd'hui
                    if (cellDate.getTime() === today.getTime()) {
                        dayElement.classList.add('today');
                    }
                    
                    // Vérifier si la date est dans le passé
                    if (cellDate < today) {
                        dayElement.classList.add('disabled');
                    } else {
                        // Simuler des jours indisponibles (20% de chances)
                        if (Math.random() < 0.2) {
                            dayElement.classList.add('disabled');
                        } else {
                            dayElement.addEventListener('click', function() {
                                // Désélectionner tous les jours
                                document.querySelectorAll('.calendar-day').forEach(day => {
                                    day.classList.remove('selected');
                                });
                                
                                // Sélectionner ce jour
                                dayElement.classList.add('selected');
                                
                                if (selectedDayElement) {
                                    selectedDayElement.classList.remove('selected');
                                }
                                selectedDayElement = dayElement;
                                
                                // Mettre à jour la date sélectionnée
                                selectedDate = `${i} ${monthNames[month]} ${year}`;
                                selectedDateInput.value = selectedDate;
                                
                                // Générer les créneaux horaires pour cette date
                                generateTimeSlots(selectedDate);
                                
                                // Réinitialiser la sélection de temps
                                selectedTime = null;
                                selectedTimeInput.value = '';
                                if (selectedTimeElement) {
                                    selectedTimeElement.classList.remove('selected');
                                    selectedTimeElement = null;
                                }
                                
                                updateSelectedInfo();
                                updateSubmitButton();
                            });
                        }
                    }
                    
                    calendarDaysElement.appendChild(dayElement);
                }
                
                // Compléter avec les jours du mois suivant
                const totalCells = 42; // 6 semaines de 7 jours
                const daysInCalendar = startDay + lastDay.getDate();
                const nextDays = totalCells - daysInCalendar;
                
                for (let i = 1; i <= nextDays; i++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'calendar-day empty';
                    dayElement.textContent = i;
                    calendarDaysElement.appendChild(dayElement);
                }
            }
            
            // Mettre à jour l'affichage des informations sélectionnées
            function updateSelectedInfo() {
                if (selectedDate && selectedTime) {
                    selectedDateTime.textContent = `${selectedDate} à ${selectedTime}`;
                    selectedInfo.style.display = 'block';
                } else if (selectedDate) {
                    selectedDateTime.textContent = `${selectedDate} (horaire à sélectionner)`;
                    selectedInfo.style.display = 'block';
                } else {
                    selectedInfo.style.display = 'none';
                }
            }
            
            // Mettre à jour l'état du bouton de soumission
            function updateSubmitButton() {
                if (selectedDate && selectedTime) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i>Confirmer le rendez-vous';
                } else {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fas fa-calendar-times me-2"></i>Sélectionnez une date et un horaire';
                }
            }
            
            // Navigation du calendrier
            prevMonthButton.addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                generateCalendar(currentMonth, currentYear);
            });
            
            nextMonthButton.addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                generateCalendar(currentMonth, currentYear);
            });
            
            // Soumission du formulaire
            appointmentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validation finale
                if (!selectedDate || !selectedTime) {
                    alert('Veuillez sélectionner une date et un horaire');
                    return;
                }
                
                // Simulation d'envoi
                setTimeout(function() {
                    appointmentForm.style.display = 'none';
                    confirmationMessage.style.display = 'block';
                    
                    // Réinitialiser après 8 secondes
                    setTimeout(function() {
                        appointmentForm.reset();
                        appointmentForm.style.display = 'block';
                        confirmationMessage.style.display = 'none';
                        
                        // Réinitialiser les sélections
                        selectedDate = null;
                        selectedTime = null;
                        selectedDateInput.value = '';
                        selectedTimeInput.value = '';
                        
                        if (selectedDayElement) {
                            selectedDayElement.classList.remove('selected');
                            selectedDayElement = null;
                        }
                        
                        if (selectedTimeElement) {
                            selectedTimeElement.classList.remove('selected');
                            selectedTimeElement = null;
                        }
                        
                        timeSlotsTitle.textContent = 'Sélectionnez une date pour voir les horaires disponibles';
                        timeSlotsElement.innerHTML = '';
                        selectedInfo.style.display = 'none';
                        updateSubmitButton();
                        
                    }, 8000);
                }, 1000);
            });
            
            // Initialiser le calendrier
            generateCalendar(currentMonth, currentYear);
            updateSubmitButton();
        });
    </script>
</body>
</html>