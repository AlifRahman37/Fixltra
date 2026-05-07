<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="introduction" content="no-reference">
    <title>Customer Support - PTC Premium</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        :root {
            /* PTC Theme Colors */
            --primary-color: #FF6B35;
            --primary-dark: #E55A2E;
            --secondary-color: #4CAF50;
            --accent-color: #00A2FF;
            --success-color: #28A745;
            --warning-color: #FFA726;
            --danger-color: #FF5252;
            --dark-color: #2C3E50;
            --light-color: #ECF0F1;
            --telegram-color: #229ED9;
            
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            --gradient-secondary: linear-gradient(135deg, #4CAF50 0%, #45A049 100%);
            --gradient-dark: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
            --gradient-accent: linear-gradient(135deg, #00A2FF 0%, #0080CC 100%);
            --gradient-telegram: linear-gradient(135deg, #229ED9 0%, #1E88C7 100%);
            
            /* Shadows */
            --shadow-light: 0 2px 10px rgba(0,0,0,0.1);
            --shadow-medium: 0 4px 20px rgba(0,0,0,0.15);
            --shadow-heavy: 0 8px 30px rgba(0,0,0,0.2);
            
            /* Border Radius */
            --border-radius-sm: 8px;
            --border-radius-md: 12px;
            --border-radius-lg: 20px;
            --border-radius-xl: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            max-width: 991px;
            margin: 0 auto;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            font-weight: 400;
            color: rgba(0,0,0,.9);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            background: #000 url('https://img.freepik.com/vector-gratis/zoom-velocidad-tubo-luz-azul-abstracto-tecnologia-fondo-negro_1142-9980.jpg?semt=ais_hybrid&w=740&q=80') center top fixed;
            background-size: cover;
            position: relative;
        }

        /* Overlay para mejorar legibilidad */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
            pointer-events: none;
        }

        .page {
            width: 100%;
            min-height: 100vh;
            padding: 20px 0;
            position: relative;
            z-index: 1;
        }

        .container {
            width: 100%;
            max-width: 991px;
            padding: 0 20px 120px;
            margin: 0 auto;
        }

        /* Header Section */
        .page-header {
            background: var(--gradient-dark);
            padding: 40px 20px 30px;
            border-radius: 0 0 30px 30px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23ffffff" stroke-width="0.2" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .page-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .title-icon {
            width: 40px;
            height: 40px;
            fill: #00A2FF;
            filter: drop-shadow(0 0 10px rgba(0, 162, 255, 0.5));
        }

        .page-title h1 {
            font-size: 28px;
            font-weight: 700;
            color: white;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 20px rgba(0, 162, 255, 0.5);
            margin: 0;
        }

        .page-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        /* Back Button */
        .back-button {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-50%) scale(1.1);
        }

        .back-icon {
            width: 20px;
            height: 20px;
            fill: white;
        }

        /* Support Cards */
        .support-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
            position: relative;
            overflow: hidden;
        }

        .support-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-telegram);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: 700;
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
        }

        .section-icon {
            width: 28px;
            height: 28px;
            fill: var(--telegram-color);
        }

        /* Support Links */
        .support-link {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px 20px;
            background: rgba(34, 158, 217, 0.05);
            border: 2px solid rgba(34, 158, 217, 0.1);
            border-radius: var(--border-radius-lg);
            text-decoration: none;
            color: var(--dark-color);
            margin-bottom: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .support-link:hover {
            text-decoration: none;
            color: white;
            background: var(--gradient-telegram);
            border-color: var(--telegram-color);
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
        }

        .support-link:last-child {
            margin-bottom: 0;
        }

        .support-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .support-link:hover::before {
            left: 100%;
        }

        .link-icon {
            width: 35px;
            height: 35px;
            background: var(--gradient-telegram);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(34, 158, 217, 0.3);
        }

        .link-icon svg {
            width: 20px;
            height: 20px;
            fill: white;
        }

        .link-content {
            flex: 1;
        }

        .link-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
            font-family: 'Poppins', sans-serif;
        }

        .link-description {
            font-size: 13px;
            opacity: 0.8;
            margin: 0;
        }

        .link-arrow {
            width: 20px;
            height: 20px;
            fill: currentColor;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .support-link:hover .link-arrow {
            opacity: 1;
            transform: translateX(5px);
        }

        /* Tips Section */
        .tips-section {
            background: rgba(255, 171, 38, 0.1);
            border: 2px solid rgba(255, 171, 38, 0.2);
            border-radius: var(--border-radius-xl);
            padding: 25px;
            position: relative;
            overflow: hidden;
        }

        .tips-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .tips-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .tips-icon {
            width: 24px;
            height: 24px;
            fill: var(--primary-color);
        }

        .tips-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark-color);
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .tips-content {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        .tips-highlight {
            color: var(--primary-color);
            font-weight: 600;
        }

        /* Online Status Indicator */
        .status-indicator {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(76, 175, 80, 0.1);
            padding: 8px 12px;
            border-radius: 20px;
            margin-top: 10px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background: var(--secondary-color);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        .status-text {
            color: var(--secondary-color);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 0;
        }

        /* Additional Info Card */
        .info-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 25px;
            margin-top: 25px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid rgba(0, 162, 255, 0.1);
        }

        .info-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .info-icon {
            width: 20px;
            height: 20px;
            fill: var(--accent-color);
        }

        .info-text {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px 120px;
            }

            .page-header {
                padding: 30px 15px 20px;
            }

            .page-title h1 {
                font-size: 24px;
            }

            .support-section {
                padding: 20px;
            }

            .support-link {
                padding: 15px;
                gap: 12px;
            }

            .link-icon {
                width: 30px;
                height: 30px;
            }

            .link-icon svg {
                width: 16px;
                height: 16px;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                flex-direction: column;
                gap: 10px;
            }

            .title-icon {
                width: 32px;
                height: 32px;
            }

            .back-button {
                left: 15px;
                width: 35px;
                height: 35px;
            }

            .support-link {
                flex-direction: column;
                text-align: center;
                padding: 20px 15px;
            }

            .link-content {
                text-align: center;
            }

            .link-arrow {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- Page Header -->
        <div class="page-header">
            <div class="back-button" onclick="history.back()">
                <svg class="back-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"/>
                </svg>
            </div>
            
            <div class="page-title">
                <svg class="title-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12,2A3,3 0 0,1 15,5V7H20A2,2 0 0,1 22,9V19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19V9A2,2 0 0,1 4,7H9V5A3,3 0 0,1 12,2M12,4A1,1 0 0,0 11,5V7H13V5A1,1 0 0,0 12,4M12,10A4,4 0 0,0 8,14A4,4 0 0,0 12,18A4,4 0 0,0 16,14A4,4 0 0,0 12,10M12,12A2,2 0 0,1 14,14A2,2 0 0,1 12,16A2,2 0 0,1 10,14A2,2 0 0,1 12,12Z"/>
                </svg>
                <h1>Customer Support</h1>
            </div>
            <p class="page-subtitle">Get help from our support team</p>
        </div>

        <div class="container">
            <!-- Support Channels -->
            <div class="support-section">
                <div class="section-title">
                    <svg class="section-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78,18.65L10.06,18.65L10.15,18.64C10.64,18.58 10.99,18.15 10.99,17.64V16.36L11.17,16.36C15.89,16.36 19.71,12.54 19.71,7.82C19.71,3.1 15.89,-0.72 11.17,-0.72C6.45,-0.72 2.63,3.1 2.63,7.82C2.63,10.96 4.37,13.69 6.95,15.27V17.64C6.95,18.15 7.3,18.58 7.79,18.64L7.88,18.65L8.16,18.65C8.61,18.65 9,18.26 9,17.81V16.36L9.78,16.36V17.81C9.78,18.26 10.17,18.65 10.62,18.65L9.78,18.65M12,2A6,6 0 0,1 18,8A6,6 0 0,1 12,14A6,6 0 0,1 6,8A6,6 0 0,1 12,2Z"/>
                    </svg>
                    Support Channels
                </div>

                <a href="https://t.me/hyipmarketglobalDeveloper" class="support-link" target="_blank">
                    <div class="link-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78,18.65L10.06,18.65L10.15,18.64C10.64,18.58 10.99,18.15 10.99,17.64V16.36L11.17,16.36C15.89,16.36 19.71,12.54 19.71,7.82C19.71,3.1 15.89,-0.72 11.17,-0.72C6.45,-0.72 2.63,3.1 2.63,7.82C2.63,10.96 4.37,13.69 6.95,15.27V17.64C6.95,18.15 7.3,18.58 7.79,18.64L7.88,18.65L8.16,18.65C8.61,18.65 9,18.26 9,17.81V16.36L9.78,16.36V17.81C9.78,18.26 10.17,18.65 10.62,18.65L9.78,18.65M12,2A6,6 0 0,1 18,8A6,6 0 0,1 12,14A6,6 0 0,1 6,8A6,6 0 0,1 12,2Z"/>
                        </svg>
                    </div>
                    <div class="link-content">
                        <div class="link-title">Telegram Customer Service</div>
                        <div class="link-description">Chat directly with our support team</div>
                    </div>
                    <svg class="link-arrow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/>
                    </svg>
                </a>

                <a href="https://t.me/hyipmarketglobalDeveloper" class="support-link" target="_blank">
                    <div class="link-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12,2C17.5,2 22,6.5 22,12C22,17.5 17.5,22 12,22C6.5,22 2,17.5 2,12C2,6.5 6.5,2 12,2M15.31,8L20.5,17H18.5L15.1,10.5L12.5,15H10.5L15.31,8M12,6.5C9.5,6.5 7.5,8.5 7.5,11V13C7.5,15.5 9.5,17.5 12,17.5C14.5,17.5 16.5,15.5 16.5,13V11C16.5,8.5 14.5,6.5 12,6.5Z"/>
                        </svg>
                    </div>
                    <div class="link-content">
                        <div class="link-title">Telegram Channel</div>
                        <div class="link-description">Follow for updates and announcements</div>
                    </div>
                    <svg class="link-arrow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/>
                    </svg>
                </a>

                <a href="https://t.me/hyipmarketglobalDeveloper" class="support-link" target="_blank">
                    <div class="link-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20,18H18V9.25C18,7.19 16.31,5.5 14.25,5.5C12.19,5.5 10.5,7.19 10.5,9.25V11H9V9.25C9,6.35 11.35,4 14.25,4C17.15,4 19.5,6.35 19.5,9.25V18H20V20H4V18H6V9.25C6,8.56 6.56,8 7.25,8S8.5,8.56 8.5,9.25V18H10.5V9.25C10.5,7.19 12.19,5.5 14.25,5.5C16.31,5.5 18,7.19 18,9.25V18M12,14A2,2 0 0,1 14,16A2,2 0 0,1 12,18A2,2 0 0,1 10,16A2,2 0 0,1 12,14Z"/>
                        </svg>
                    </div>
                    <div class="link-content">
                        <div class="link-title">Technical Support</div>
                        <div class="link-description">Get help with technical issues</div>
                    </div>
                    <svg class="link-arrow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/>
                    </svg>
                </a>

                <div class="status-indicator">
                    <div class="status-dot"></div>
                    <p class="status-text">Support Team Online</p>
                </div>
            </div>

            <!-- Support Hours -->
            <div class="tips-section">
                <div class="tips-header">
                    <svg class="tips-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/>
                    </svg>
                    <h3 class="tips-title">Support Hours</h3>
                </div>
                <p class="tips-content">
                    Our customer service team is available <span class="tips-highlight">24/7</span> to assist you with any questions or concerns. 
                    For the fastest response, please contact us via <span class="tips-highlight">Telegram</span>.
                </p>
            </div>

            <!-- Additional Information -->
            <div class="info-card">
                <div class="info-item">
                    <svg class="info-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17M11,9H13V7H11V9Z"/>
                    </svg>
                    <p class="info-text">Average response time: Under 30 minutes</p>
                </div>
                <div class="info-item">
                    <svg class="info-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17,3A4,4 0 0,1 21,7A4,4 0 0,1 17,11A4,4 0 0,1 13,7A4,4 0 0,1 17,3M17,5A2,2 0 0,0 15,7A2,2 0 0,0 17,9A2,2 0 0,0 19,7A2,2 0 0,0 17,5M3,7V9H11V7H3M3,11V13H11V11H3M3,15V17H11V15H3Z"/>
                    </svg>
                    <p class="info-text">Multiple languages supported</p>
                </div>
                <div class="info-item">
                    <svg class="info-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                    </svg>
                    <p class="info-text">Secure and confidential support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Enhanced link interactions
        $(document).ready(function() {
            $('.support-link').on('click', function(e) {
                // Add click animation
                $(this).addClass('clicked');
                setTimeout(() => {
                    $(this).removeClass('clicked');
                }, 300);
            });

            // Status indicator pulse
            setInterval(function() {
                $('.status-dot').fadeOut(500).fadeIn(500);
            }, 2000);
        });
    </script>

    @include($activeTemplate . 'partials.footers')
</body>
</html>