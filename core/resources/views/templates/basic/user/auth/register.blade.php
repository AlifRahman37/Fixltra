<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PTC Premium - Register</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset ('assets/pub/npm/bootstrap%404.5.3/dist/css/bootstrap.min.css')}}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('assets/pub/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css')}}" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* PTC Theme Colors - Inspired by top PTC sites */
            --primary-color: #FF6B35;
            --primary-dark: #E55A2E;
            --secondary-color: #4CAF50;
            --accent-color: #2196F3;
            --success-color: #28A745;
            --warning-color: #FFA726;
            --danger-color: #FF5252;
            --dark-color: #2C3E50;
            --light-color: #ECF0F1;
            
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            --gradient-secondary: linear-gradient(135deg, #4CAF50 0%, #45A049 100%);
            --gradient-dark: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
            --gradient-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            
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
            height: 100%;
            font-family: 'Inter', sans-serif;
            background: #000 url('https://img.freepik.com/vector-gratis/zoom-velocidad-tubo-luz-azul-abstracto-tecnologia-fondo-negro_1142-9980.jpg?semt=ais_hybrid&w=740&q=80') center center fixed;
            background-size: cover;
            overflow-x: hidden;
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
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        /* Container principal responsive */
        .main-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        /* Animated background particles - Enhanced for tech background */
        .bg-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: radial-gradient(circle, rgba(0, 162, 255, 0.3) 0%, rgba(0, 162, 255, 0.1) 50%, transparent 100%);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
            box-shadow: 0 0 20px rgba(0, 162, 255, 0.3);
        }

        .particle:nth-child(1) { width: 60px; height: 60px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 80px; height: 80px; left: 25%; animation-delay: 1.5s; }
        .particle:nth-child(3) { width: 40px; height: 40px; left: 70%; animation-delay: 3s; }
        .particle:nth-child(4) { width: 100px; height: 100px; left: 85%; animation-delay: 4.5s; }
        .particle:nth-child(5) { width: 50px; height: 50px; left: 60%; animation-delay: 6s; }

        @keyframes float {
            0%, 100% { 
                transform: translateY(100vh) rotate(0deg); 
                opacity: 0; 
                filter: blur(0px);
            }
            10%, 90% { 
                opacity: 1; 
                filter: blur(1px);
            }
            50% { 
                transform: translateY(-10vh) rotate(180deg); 
                filter: blur(2px);
            }
        }

        /* Register Card */
        .register-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(25px);
            border-radius: var(--border-radius-xl);
            box-shadow: 
                var(--shadow-heavy),
                0 0 40px rgba(0, 162, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 450px;
            position: relative;
            z-index: 10;
            overflow: hidden;
            border: 1px solid rgba(0, 162, 255, 0.2);
        }

        /* Form Container */
        .form-container {
            padding: 40px 30px;
        }

        .welcome-text {
            text-align: center;
            margin-bottom: 30px;
        }

        .welcome-text h2 {
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .welcome-text p {
            color: #666;
            font-size: 14px;
        }

        /* Stats Bar */
        .stats-bar {
            background: linear-gradient(135deg, #2C3E50 0%, #1a252f 50%, #0f1419 100%);
            padding: 15px 20px;
            border-radius: var(--border-radius-md);
            margin-bottom: 25px;
            display: flex;
            justify-content: space-around;
            text-align: center;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: 
                0 4px 15px rgba(0,0,0,0.1),
                inset 0 1px 0 rgba(0, 162, 255, 0.1);
        }

        .stat-item {
            color: white;
            position: relative;
        }

        .stat-number {
            font-size: 18px;
            font-weight: 700;
            display: block;
            color: #00A2FF;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
            animation: statGlow 2s ease-in-out infinite alternate;
        }

        @keyframes statGlow {
            from { text-shadow: 0 0 10px rgba(0, 162, 255, 0.5); }
            to { text-shadow: 0 0 20px rgba(0, 162, 255, 0.8); }
        }

        .stat-label {
            font-size: 11px;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            background: #F8F9FA;
            border: 2px solid transparent;
            border-radius: var(--border-radius-md);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .input-wrapper:hover {
            background: #F0F2F5;
            box-shadow: var(--shadow-light);
        }

        .input-wrapper.focused {
            background: white;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        .input-icon {
            padding: 0 15px;
            color: var(--primary-color);
            font-size: 18px;
            display: flex;
            align-items: center;
            min-width: 50px;
            justify-content: center;
        }

        .form-control {
            border: none;
            background: transparent;
            padding: 16px 15px 16px 0;
            font-size: 15px;
            color: var(--dark-color);
            flex: 1;
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
            font-weight: 400;
        }

        /* Buttons */
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            border-radius: var(--border-radius-md);
            padding: 16px 24px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
        }

        .btn-secondary {
            background: var(--gradient-secondary);
            border: none;
            border-radius: var(--border-radius-md);
            padding: 16px 24px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.3);
        }

        /* Features List */
        .features-list {
            margin: 20px 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            padding: 6px 0;
            color: #666;
            font-size: 13px;
        }

        .feature-icon {
            color: var(--success-color);
            margin-right: 8px;
            font-size: 14px;
            min-width: 20px;
        }

        /* Referral Alert */
        .referral-alert {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 15px;
            border-radius: var(--border-radius-md);
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.2);
        }

        .referral-alert strong {
            font-weight: 600;
        }

        /* Sponsor Field */
        .sponsor-field {
            background: #E8F5E8;
            border: 2px solid #28a745;
        }

        /* Loading Spinner */
        .loading-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.9);
            padding: 30px;
            border-radius: var(--border-radius-md);
            display: none;
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(255, 107, 53, 0.3);
            border-radius: 50%;
            border-top-color: var(--primary-color);
            animation: spin 1s ease-in-out infinite;
            margin-right: 15px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .loading-text {
            color: white;
            font-weight: 500;
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 15px 20px;
            border-radius: var(--border-radius-md);
            display: none;
            z-index: 9999;
            min-width: 300px;
            box-shadow: var(--shadow-heavy);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                padding: 15px;
            }

            .register-card {
                max-width: 100%;
            }

            .form-container {
                padding: 30px 20px;
            }

            .welcome-text h2 {
                font-size: 20px;
            }

            .stats-bar {
                flex-direction: column;
                gap: 10px;
            }

            .stat-item {
                padding: 5px 0;
            }

            .toast-notification {
                top: 50%;
                right: 15px;
                left: 15px;
                transform: translateY(-50%);
                min-width: auto;
            }
        }

        @media (max-width: 480px) {
            .main-container {
                padding: 10px;
            }

            .form-container {
                padding: 25px 15px;
            }

            .welcome-text h2 {
                font-size: 18px;
            }

            .form-control {
                font-size: 14px;
            }

            .btn-primary, .btn-secondary {
                padding: 14px 20px;
                font-size: 14px;
            }
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Error messages */
        .alert {
            padding: 12px 16px;
            border-radius: var(--border-radius-md);
            margin-bottom: 20px;
            font-size: 14px;
            border: none;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            border-left: 4px solid #28a745;
        }

        .alert-danger {
            background: linear-gradient(135deg, #f8d7da 0%, #f1b0b7 100%);
            color: #721c24;
            border-left: 4px solid #dc3545;
        }
    </style>
</head>

<body>
    <!-- Background Particles -->
    <div class="bg-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <div class="register-card fade-in">
            <!-- Form Container -->
            <div class="form-container">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h2>Join Our Community!</h2>
                    <p>Create your account and start earning crypto</p>
                </div>

                <!-- Stats Bar -->
                <div class="stats-bar">
                    <div class="stat-item">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">Members</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">$2.5M</span>
                        <span class="stat-label">Paid Out</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support</span>
                    </div>
                </div>

                @if (session()->get('ref') != null)
                    <?php
                    // Get the user's username from the session
                    $username = session()->get('ref');

                    // Search for the username in the users table
                    $user = App\Models\User::where('ref', $username)->first();

                    // Check if the user exists
                    if ($user) {
                        // Username exists
                        $message = "<div class='referral-alert'><strong>{$user->username}</strong> has invited you to join <strong>Our Platform</strong></div>";
                    } else {
                        // Username does not exist
                        $message = "<div class='alert alert-danger'><strong>{$username}</strong> User not found.</div>";
                    }

                    // Display the message
                    echo $message;
                    ?>
                @endif

                <!-- Register Form -->
                <form action="{{ route('user.register') }}" method="post" class="register-form" id="registerForm">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="form-group">
                        <div class="input-wrapper" id="emailWrapper">
                            <div class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/>
                                </svg>
                            </div>
                            <input type="email" name="email" value="{{ old('email') }}" 
                                   class="form-control" placeholder="Enter your email address"
                                   autocomplete="email" required>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <div class="input-wrapper" id="passwordWrapper">
                            <div class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M6 10v-4c0-3.313 2.686-6 6-6 3.312 0 6 2.687 6 6v4h2v14h-16v-14h2zm5 7.723v2.277h2v-2.277c.595-.347 1-.984 1-1.723 0-1.104-.896-2-2-2s-2 .896-2 2c0 .738.404 1.376 1 1.723zm-3-7.723h8v-4c0-2.208-1.792-4-4-4s-4 1.792-4 4v4z"/>
                                </svg>
                            </div>
                            <input type="password" name="password" class="form-control" 
                                   placeholder="Create a secure password"
                                   autocomplete="new-password" required>
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-group">
                        <div class="input-wrapper" id="confirmPasswordWrapper">
                            <div class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 1l3.09 6.26L22 9l-5 4.87L18.18 21 12 17.77 5.82 21 7 13.87 2 9l6.91-1.74L12 1z"/>
                                </svg>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" 
                                   placeholder="Confirm your password"
                                   autocomplete="new-password" required>
                        </div>
                    </div>

                    @if (session()->get('ref') != null)
                    <!-- Sponsor Field -->
                    <div class="form-group">
                        <div class="input-wrapper sponsor-field" id="sponsorWrapper">
                            <div class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <input type="text" class="form-control" name="referBy" id="referenceBy" 
                                   value="{{ session()->get('ref') }}" disabled>
                        </div>
                    </div>
                    @endif

                    <!-- Features List -->
                    <div class="features-list">
                        <div class="feature-item">
                            <span class="feature-icon">✓</span>
                            <span>Instant crypto withdrawals</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">✓</span>
                            <span>Earn up to $0.05 per click</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">✓</span>
                            <span>25% lifetime referral commissions</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">✓</span>
                            <span>Daily bonus opportunities</span>
                        </div>
                    </div>

                    <!-- Register Button -->
                    <button type="submit" class="btn-primary">
                        <span class="btn-text">Create Account</span>
                    </button>

                    <!-- Login Button -->
                    <button type="button" class="btn-secondary" onclick="window.location.href='{{route('user.login')}}'">
                        <span class="btn-text">Already have an account? Login</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Loading Container -->
    <div class="loading-container" id="loadingContainer">
        <div class="loading-spinner"></div>
        <div class="loading-text">Creating your account...</div>
    </div>

    <!-- Toast Notification -->
    <div class="toast-notification" id="toastNotification">
        <div class="toast-content"></div>
    </div>

    <!-- Scripts -->
    <script src="https://perview.freelancerawais.online/malltask/assets/pub/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Input focus effects
            $('.form-control').on('focus', function() {
                $(this).closest('.input-wrapper').addClass('focused');
            });

            $('.form-control').on('blur', function() {
                $(this).closest('.input-wrapper').removeClass('focused');
            });

            // Form submission with loading
            $('#registerForm').on('submit', function() {
                $('#loadingContainer').css('display', 'flex');
                $('.btn-primary').prop('disabled', true);
                $('.btn-text').text('Creating account...');
            });

            // Toast notification function
            window.showToast = function(message, duration = 5000) {
                $('#toastNotification .toast-content').text(message);
                $('#toastNotification').fadeIn(300);
                
                setTimeout(function() {
                    $('#toastNotification').fadeOut(300);
                }, duration);
            };

            // Particle animation enhancement
            function createParticle() {
                const particle = $('<div class="particle"></div>');
                const size = Math.random() * 60 + 20;
                const left = Math.random() * 100;
                const animationDuration = Math.random() * 3 + 4;
                
                particle.css({
                    width: size + 'px',
                    height: size + 'px',
                    left: left + '%',
                    animationDuration: animationDuration + 's'
                });
                
                $('.bg-particles').append(particle);
                
                setTimeout(function() {
                    particle.remove();
                }, animationDuration * 1000);
            }

            // Create particles periodically
            setInterval(createParticle, 2000);

            // Form validation feedback
            $('.form-control').on('input', function() {
                const value = $(this).val();
                const wrapper = $(this).closest('.input-wrapper');
                
                if (value.length > 0) {
                    wrapper.addClass('has-value');
                } else {
                    wrapper.removeClass('has-value');
                }
            });

            // Password confirmation validation
            $('input[name="password_confirmation"]').on('input', function() {
                const password = $('input[name="password"]').val();
                const confirmPassword = $(this).val();
                const wrapper = $(this).closest('.input-wrapper');
                
                if (confirmPassword.length > 0) {
                    if (password === confirmPassword) {
                        wrapper.css('border-color', '#28a745');
                    } else {
                        wrapper.css('border-color', '#dc3545');
                    }
                } else {
                    wrapper.css('border-color', 'transparent');
                }
            });

            // Accessibility improvements
            $('.btn-primary, .btn-secondary').on('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    $(this).click();
                }
            });

            // Auto-hide loading on page errors
            setTimeout(function() {
                $('#loadingContainer').hide();
                $('.btn-primary').prop('disabled', false);
                $('.btn-text').text('Create Account');
            }, 10000);
        });
    </script>

    @include('partials.notify')
</body>
</html>