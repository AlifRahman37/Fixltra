<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="introduction" content="no-reference">
    <title>Change Password - PTC Premium</title>

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
            
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            --gradient-secondary: linear-gradient(135deg, #4CAF50 0%, #45A049 100%);
            --gradient-dark: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
            --gradient-accent: linear-gradient(135deg, #00A2FF 0%, #0080CC 100%);
            --gradient-success: linear-gradient(135deg, #4CAF50 0%, #45A049 100%);
            
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

        .main-content {
            width: 100%;
            min-height: 100vh;
            padding: 20px 0;
            position: relative;
            z-index: 1;
        }

        .main-container {
            width: 100%;
            max-width: 991px;
            padding: 0 20px 120px;
            margin: 0 auto;
        }

        /* Page Header */
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

        .page-title-section {
            position: relative;
            z-index: 2;
        }

        .greeting {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .user-icon {
            width: 40px;
            height: 40px;
            fill: #00A2FF;
            filter: drop-shadow(0 0 10px rgba(0, 162, 255, 0.5));
        }

        .greeting-text {
            font-size: 24px;
            font-weight: 700;
            color: white;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 20px rgba(0, 162, 255, 0.5);
        }

        .breadcrumb-nav {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .breadcrumb {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 20px;
            margin: 0;
            backdrop-filter: blur(10px);
        }

        .breadcrumb-item {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: #00A2FF;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #00A2FF;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.6);
            content: "/";
            padding: 0 8px;
        }

        /* Main Card */
        .password-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 40px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-heavy);
            position: relative;
            overflow: hidden;
        }

        .password-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
        }

        /* Form Title */
        .form-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .security-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: var(--gradient-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(0, 162, 255, 0.3);
        }

        .security-icon svg {
            width: 30px;
            height: 30px;
            fill: white;
        }

        .form-title h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark-color);
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .form-subtitle {
            color: #666;
            font-size: 16px;
            margin-top: 8px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .field-icon {
            width: 16px;
            height: 16px;
            fill: var(--accent-color);
        }

        .input-group {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border: 2px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-md);
            background: rgba(255, 255, 255, 0.9);
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(0, 162, 255, 0.1);
            background: white;
        }

        .form-control::placeholder {
            color: #999;
            opacity: 0.7;
        }

        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            border-radius: 50%;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .password-toggle:hover {
            background: rgba(0, 162, 255, 0.1);
        }

        .toggle-icon {
            width: 18px;
            height: 18px;
            fill: #666;
            transition: fill 0.3s ease;
        }

        .password-toggle:hover .toggle-icon {
            fill: var(--accent-color);
        }

        /* Password Strength Indicator */
        .password-strength {
            margin-top: 8px;
            display: none;
        }

        .strength-bar {
            height: 4px;
            background: #f0f0f0;
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 8px;
        }

        .strength-fill {
            height: 100%;
            border-radius: 2px;
            transition: all 0.3s ease;
            width: 0%;
        }

        .strength-weak .strength-fill { background: #ff4757; width: 25%; }
        .strength-fair .strength-fill { background: #ffa726; width: 50%; }
        .strength-good .strength-fill { background: #26c6da; width: 75%; }
        .strength-strong .strength-fill { background: #66bb6a; width: 100%; }

        .strength-text {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Submit Button */
        .submit-button {
            width: 100%;
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 18px 30px;
            border-radius: var(--border-radius-md);
            font-size: 16px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-medium);
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }

        .submit-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
        }

        .submit-button:hover::before {
            left: 100%;
        }

        .submit-button:active {
            transform: translateY(-1px);
        }

        .button-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .button-icon {
            width: 20px;
            height: 20px;
            fill: white;
        }

        /* Security Tips */
        .security-tips {
            background: rgba(0, 162, 255, 0.1);
            border: 1px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-md);
            padding: 20px;
            margin-top: 30px;
        }

        .tips-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .tips-icon {
            width: 20px;
            height: 20px;
            fill: var(--accent-color);
        }

        .tips-title {
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
        }

        .tips-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .tips-list li {
            color: #666;
            font-size: 14px;
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }

        .tips-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 6px;
            height: 6px;
            background: var(--accent-color);
            border-radius: 50%;
        }

        /* Loading State */
        .loading {
            pointer-events: none;
        }

        .loading .button-content {
            opacity: 0.7;
        }

        .loading .button-icon {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                padding: 0 15px 120px;
            }

            .page-header {
                padding: 30px 15px 20px;
            }

            .greeting-text {
                font-size: 20px;
            }

            .password-card {
                padding: 25px;
            }

            .form-title h2 {
                font-size: 20px;
            }

            .breadcrumb-nav {
                margin-top: 15px;
            }
        }

        @media (max-width: 480px) {
            .greeting {
                flex-direction: column;
                gap: 10px;
            }

            .user-icon {
                width: 32px;
                height: 32px;
            }

            .greeting-text {
                font-size: 18px;
                text-align: center;
            }

            .password-card {
                padding: 20px;
            }

            .form-control {
                padding: 12px 45px 12px 15px;
            }

            .submit-button {
                padding: 15px 20px;
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="main-content">
        <div class="main-container">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title-section">
                    <div class="greeting">
                        <svg class="user-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                        <h1 class="greeting-text">Welcome, {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
                    </div>
                    
                    <div class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Security Settings</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Password Change Card -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="password-card">
                        <!-- Form Title -->
                        <div class="form-title">
                            <div class="security-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                                </svg>
                            </div>
                            <h2>Change Your Password</h2>
                            <p class="form-subtitle">Keep your account secure with a strong password</p>
                        </div>

                        <!-- Password Form -->
                        <form action="" method="post" id="passwordForm">
                            @csrf
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <svg class="field-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
                                    </svg>
                                    Current Password
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="current_password" id="currentPassword" required autocomplete="current-password" placeholder="Enter your current password">
                                    <button type="button" class="password-toggle" onclick="togglePassword('currentPassword', this)">
                                        <svg class="toggle-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <svg class="field-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
                                    </svg>
                                    New Password
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="newPassword" required autocomplete="new-password" placeholder="Enter your new password">
                                    <button type="button" class="password-toggle" onclick="togglePassword('newPassword', this)">
                                        <svg class="toggle-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="password-strength" id="passwordStrength">
                                    <div class="strength-bar">
                                        <div class="strength-fill"></div>
                                    </div>
                                    <div class="strength-text">Password Strength: <span id="strengthLevel">Weak</span></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <svg class="field-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"/>
                                    </svg>
                                    Confirm New Password
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirmation" id="confirmPassword" required autocomplete="new-password" placeholder="Confirm your new password">
                                    <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword', this)">
                                        <svg class="toggle-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        
                            <button type="submit" class="submit-button" id="submitButton">
                                <div class="button-content">
                                    <svg class="button-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"/>
                                    </svg>
                                    Update Password
                                </div>
                            </button>
                        </form>

                        <!-- Security Tips -->
                        <div class="security-tips">
                            <div class="tips-header">
                                <svg class="tips-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                                </svg>
                                <h6 class="tips-title">Password Security Tips</h6>
                            </div>
                            <ul class="tips-list">
                                <li>Use at least 8 characters with a mix of letters, numbers, and symbols</li>
                                <li>Avoid using personal information like your name or birthdate</li>
                                <li>Don't reuse passwords from other websites</li>
                                <li>Consider using a password manager for better security</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Password toggle functionality
        function togglePassword(inputId, button) {
            const input = document.getElementById(inputId);
            const icon = button.querySelector('.toggle-icon path');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.setAttribute('d', 'M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.09L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.76,7.13 11.37,7 12,7Z');
            } else {
                input.type = 'password';
                icon.setAttribute('d', 'M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z');
            }
        }

        // Password strength checker
        function checkPasswordStrength(password) {
            let score = 0;
            const strengthBar = document.querySelector('.password-strength');
            const strengthLevel = document.getElementById('strengthLevel');
            
            if (!password) {
                strengthBar.style.display = 'none';
                return;
            }
            
            strengthBar.style.display = 'block';
            
            // Length check
            if (password.length >= 8) score++;
            if (password.length >= 12) score++;
            
            // Character variety checks
            if (/[a-z]/.test(password)) score++;
            if (/[A-Z]/.test(password)) score++;
            if (/[0-9]/.test(password)) score++;
            if (/[^A-Za-z0-9]/.test(password)) score++;
            
            // Remove previous classes
            strengthBar.className = 'password-strength';
            
            if (score < 3) {
                strengthBar.classList.add('strength-weak');
                strengthLevel.textContent = 'Weak';
            } else if (score < 4) {
                strengthBar.classList.add('strength-fair');
                strengthLevel.textContent = 'Fair';
            } else if (score < 5) {
                strengthBar.classList.add('strength-good');
                strengthLevel.textContent = 'Good';
            } else {
                strengthBar.classList.add('strength-strong');
                strengthLevel.textContent = 'Strong';
            }
        }

        // Form handling
        $(document).ready(function() {
            const newPasswordInput = document.getElementById('newPassword');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const form = document.getElementById('passwordForm');
            const submitButton = document.getElementById('submitButton');
            
            // Password strength monitoring
            newPasswordInput.addEventListener('input', function() {
                checkPasswordStrength(this.value);
            });
            
            // Password confirmation validation
            function validatePasswords() {
                if (newPasswordInput.value && confirmPasswordInput.value) {
                    if (newPasswordInput.value === confirmPasswordInput.value) {
                        confirmPasswordInput.style.borderColor = 'var(--success-color)';
                        return true;
                    } else {
                        confirmPasswordInput.style.borderColor = 'var(--danger-color)';
                        return false;
                    }
                }
                confirmPasswordInput.style.borderColor = '';
                return false;
            }
            
            confirmPasswordInput.addEventListener('input', validatePasswords);
            newPasswordInput.addEventListener('input', validatePasswords);
            
            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (!validatePasswords() && newPasswordInput.value && confirmPasswordInput.value) {
                    alert('Passwords do not match!');
                    return;
                }
                
                // Show loading state
                submitButton.classList.add('loading');
                submitButton.disabled = true;
                
                // Simulate form submission (replace with actual form submission)
                setTimeout(() => {
                    // Remove loading state
                    submitButton.classList.remove('loading');
                    submitButton.disabled = false;
                    
                    // Submit the form for real
                    this.submit();
                }, 1000);
            });
        });
    </script>

    @include($activeTemplate.'partials.footers')
</body>
</html>