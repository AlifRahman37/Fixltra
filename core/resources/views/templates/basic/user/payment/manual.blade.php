<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="introduction" content="no-reference">
    <title>Deposit Confirmation - PTC Premium</title>

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

        .content-body {
            width: 100%;
            min-height: 100vh;
            padding: 20px 0;
            position: relative;
            z-index: 1;
        }

        .container-fluid {
            max-width: 991px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
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

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .page-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
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
        }

        /* Main Card */
        .main-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 40px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-heavy);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
        }

        /* Amount Display */
        .amount-display {
            background: var(--gradient-success);
            color: white;
            padding: 30px;
            border-radius: var(--border-radius-lg);
            text-align: center;
            margin-bottom: 30px;
            box-shadow: var(--shadow-medium);
            position: relative;
            overflow: hidden;
        }

        .amount-display::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .amount-value {
            font-size: 36px;
            font-weight: 800;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .amount-label {
            font-size: 16px;
            font-weight: 500;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Instructions Section */
        .instructions-section {
            background: rgba(0, 162, 255, 0.1);
            border: 1px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-lg);
            padding: 25px;
            margin-bottom: 30px;
        }

        .instructions-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }

        .info-icon {
            width: 24px;
            height: 24px;
            fill: var(--accent-color);
        }

        .instructions-description {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        /* Form Styles */
        .payment-form {
            background: rgba(248, 249, 250, 0.5);
            border-radius: var(--border-radius-lg);
            padding: 30px;
            border: 1px solid rgba(0, 162, 255, 0.1);
        }

        .form-group {
            margin-bottom: 25px;
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

        .form-control {
            width: 100%;
            padding: 15px 20px;
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

        /* File Upload Styles */
        .file-upload-area {
            position: relative;
            border: 2px dashed rgba(0, 162, 255, 0.3);
            border-radius: var(--border-radius-md);
            padding: 30px;
            text-align: center;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-area:hover {
            border-color: var(--accent-color);
            background: rgba(0, 162, 255, 0.05);
        }

        .upload-icon {
            width: 48px;
            height: 48px;
            fill: var(--accent-color);
            margin: 0 auto 15px;
            opacity: 0.7;
        }

        .upload-text {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        .upload-hint {
            color: #999;
            font-size: 12px;
            margin: 5px 0 0;
        }

        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
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

        .button-icon {
            width: 20px;
            height: 20px;
            fill: white;
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Security Notice */
        .security-notice {
            background: var(--gradient-dark);
            color: white;
            padding: 20px;
            border-radius: var(--border-radius-lg);
            margin-top: 30px;
            border: 1px solid rgba(0, 162, 255, 0.3);
        }

        .security-notice-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .security-icon {
            width: 20px;
            height: 20px;
            fill: #4CAF50;
        }

        .security-title {
            font-weight: 600;
            font-size: 16px;
            margin: 0;
        }

        .security-text {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin: 0;
            line-height: 1.5;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container-fluid {
                padding: 0 15px;
            }

            .page-header {
                padding: 40px 15px 20px;
            }

            .page-title h1 {
                font-size: 24px;
            }

            .main-card {
                padding: 25px;
            }

            .amount-value {
                font-size: 28px;
            }

            .payment-form {
                padding: 20px;
            }

            .submit-button {
                padding: 15px 20px;
                font-size: 15px;
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

            .amount-value {
                font-size: 24px;
            }

            .main-card {
                padding: 20px;
            }

            .instructions-section {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="content-body">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <svg class="title-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M17,13H13V17H11V13H7V11H11V7H13V11H17V13Z"/>
                        </svg>
                        <h1>Deposit Confirmation</h1>
                    </div>
                    <p class="page-subtitle">Complete your payment securely</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row">
                <div class="col-12">
                    <div class="main-card">
                        <!-- Amount Display -->
                        <div class="amount-display">
                            <div class="amount-value">{{showAmount($data['final_amo']) .' '.$data['method_currency'] }}</div>
                            <div class="amount-label">For successful payment</div>
                        </div>

                        <!-- Instructions -->
                        <div class="instructions-section">
                            <h4 class="instructions-title">
                                <svg class="info-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z"/>
                                </svg>
                                Payment Instructions
                            </h4>
                            <p class="instructions-description">@php echo $data->gateway->description @endphp</p>
                        </div>

                        <!-- Payment Form -->
                        <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data" class="payment-form">
                            @csrf
                            
                            <x-viser-form identifier="id" identifierValue="{{ $gateway->form_id }}"></x-viser-form>

                            <button type="submit" class="submit-button">
                                <svg class="button-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"/>
                                </svg>
                                Complete Payment
                            </button>
                        </form>

                        <!-- Security Notice -->
                        <div class="security-notice">
                            <div class="security-notice-header">
                                <svg class="security-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                                </svg>
                                <h6 class="security-title">Secure Payment</h6>
                            </div>
                            <p class="security-text">
                                Your transaction is protected by industry-standard encryption. Please ensure all information is accurate before submitting.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/global/js/jquery-3.6.0.min.js"></script>
    
    <!-- Enhanced Form Styling Script -->
    <script>
        $(document).ready(function() {
            // Style viser form elements
            $('.form-group input, .form-group textarea, .form-group select').addClass('form-control');
            
            // Add icons to form labels
            $('.form-group label').each(function() {
                const labelText = $(this).text();
                $(this).html(`
                    <svg class="field-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/>
                    </svg>
                    ${labelText}
                `).addClass('form-label');
            });

            // Enhanced file upload styling
            $('input[type="file"]').each(function() {
                const $input = $(this);
                const fileName = $input.attr('name') || 'file';
                
                // Create wrapper
                const $wrapper = $('<div class="file-upload-area" style="position: relative; cursor: pointer;"></div>');
                
                // Create visual content
                const $content = $(`
                    <div class="upload-content">
                        <svg class="upload-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                        <p class="upload-text">Click to upload file or drag and drop</p>
                        <p class="upload-hint">Supported formats: JPG, PNG, PDF</p>
                        <div class="file-name" style="margin-top: 10px; font-weight: 600; color: var(--success-color); display: none;"></div>
                    </div>
                `);
                
                // Hide original input but keep it functional
                $input.css({
                    'position': 'absolute',
                    'top': '0',
                    'left': '0',
                    'width': '100%',
                    'height': '100%',
                    'opacity': '0',
                    'cursor': 'pointer',
                    'z-index': '10'
                });
                
                // Insert wrapper before input
                $input.before($wrapper);
                // Add content to wrapper
                $wrapper.append($content);
                // Move input into wrapper (on top of content)
                $wrapper.append($input);
                
                // Handle file change
                $input.on('change', function() {
                    const file = this.files[0];
                    const $fileName = $wrapper.find('.file-name');
                    const $uploadText = $wrapper.find('.upload-text');
                    
                    if (file) {
                        $fileName.text(`Selected: ${file.name}`).show();
                        $uploadText.text('File selected successfully!');
                        $wrapper.css('border-color', 'var(--success-color)');
                    } else {
                        $fileName.hide();
                        $uploadText.text('Click to upload file or drag and drop');
                        $wrapper.css('border-color', 'rgba(0, 162, 255, 0.3)');
                    }
                });
            });

            // Submit button loading state
            $('.submit-button').on('click', function() {
                const $btn = $(this);
                if ($btn.closest('form')[0].checkValidity()) {
                    $btn.prop('disabled', true);
                    $btn.html(`
                        <svg class="button-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12,4V2A10,10 0 0,0 2,12H4A8,8 0 0,1 12,4Z"/>
                        </svg>
                        Processing...
                    `);
                }
            });
        });
    </script>

    @include('partials.notify')
    @include($activeTemplate.'partials.footers')
</body>
</html>