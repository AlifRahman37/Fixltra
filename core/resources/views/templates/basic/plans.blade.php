($activeTemplate . 'partials.headers')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans - PTC Premium</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
            min-height: 100%;
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
            padding-top: 60px;
            position: relative;
            z-index: 1;
        }

        /* Header mejorado */
        .header {
            width: 100%;
            max-width: 991px;
            height: 60px;
            background: rgba(45, 55, 72, 0.95);
            backdrop-filter: blur(20px);
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            transform: translateX(-50%);
            left: 50%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .header .title {
            font-size: 18px;
            font-weight: 600;
            color: white;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
        }

        .header .left-arrow {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 8px;
            border-radius: 50%;
        }

        .header .left-arrow:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--accent-color);
        }

        /* Container principal */
        .container {
            width: 100%;
            max-width: 991px;
            padding: 20px 20px 120px;
            position: relative;
            z-index: 1;
        }

        /* Plan Cards */
        .product {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-medium);
            border: 1px solid rgba(0, 162, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
            border-color: var(--accent-color);
        }

        .product::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product:hover::before {
            opacity: 1;
        }

        .img-top {
            width: 100%;
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .img-top img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product:hover .img-top img {
            transform: scale(1.05);
        }

        .img-top::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, 
                rgba(255, 107, 53, 0.1) 0%, 
                rgba(0, 162, 255, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product:hover .img-top::after {
            opacity: 1;
        }

        .txt-body {
            padding: 25px;
        }

        .title {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(255, 107, 53, 0.3);
        }

        .txt-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .txt-row:last-of-type {
            border-bottom: none;
            margin-bottom: 20px;
        }

        .txt-row p {
            font-size: 14px;
            margin: 0;
            line-height: 1.4;
        }

        .txt-row p:first-child {
            color: #666;
            font-weight: 500;
        }

        .txt-row p:last-child {
            color: var(--dark-color);
            font-weight: 600;
        }

        /* Buttons */
        .btn.btn-rent {
            width: 100%;
            height: 50px;
            background: var(--gradient-primary);
            border: none;
            border-radius: var(--border-radius-md);
            font-size: 16px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .btn.btn-rent::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn.btn-rent:hover::before {
            left: 100%;
        }

        .btn.btn-rent:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
        }

        .package-disabled {
            width: 100%;
            height: 50px;
            background: #6c757d;
            border: none;
            border-radius: var(--border-radius-md);
            font-size: 16px;
            font-weight: 600;
            color: white;
            margin-top: 20px;
            cursor: not-allowed;
            opacity: 0.7;
            font-family: 'Poppins', sans-serif;
        }

        /* Loading Spinner */
        #con {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            display: none;
        }

        .loaderClass {
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 20px 30px;
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            font-size: 15px;
            font-weight: 500;
        }

        .loaderClass .animation {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Modal mejorado */
        .modal.fade .modal-dialog {
            transform: translate(0, -50px);
            transition: transform 0.3s ease-out;
        }

        .modal.show .modal-dialog {
            transform: none;
        }

        .modal .modal-content {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-heavy);
        }

        .modal .modal-header {
            border-bottom: 1px solid rgba(0, 162, 255, 0.1);
            padding: 20px 30px;
        }

        .modal .modal-title {
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .modal .modal-body {
            padding: 30px;
            text-align: center;
        }

        .modal .modal-body strong {
            color: var(--dark-color);
            font-size: 16px;
        }

        .modal .modal-body code {
            background: rgba(255, 107, 53, 0.1);
            color: var(--primary-color);
            padding: 10px 15px;
            border-radius: var(--border-radius-md);
            margin-top: 15px;
            font-size: 14px;
        }

        .modal .modal-footer {
            border-top: 1px solid rgba(0, 162, 255, 0.1);
            padding: 20px 30px;
            gap: 15px;
        }

        .btn.btn-dark {
            background: var(--gradient-dark);
            border: none;
            border-radius: var(--border-radius-md);
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn.btn-dark:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(44, 62, 80, 0.3);
        }

        .btn.btn--base {
            background: var(--gradient-primary);
            border: none;
            border-radius: var(--border-radius-md);
            padding: 12px 24px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }

        .btn.btn--base:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
            color: white;
        }

        /* Plan Badges */
        .plan-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--gradient-primary);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            box-shadow: 0 2px 10px rgba(255, 107, 53, 0.3);
        }

        .plan-badge.popular {
            background: var(--gradient-accent);
        }

        .plan-badge.premium {
            background: var(--gradient-secondary);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px 15px 120px;
            }

            .header .title {
                font-size: 16px;
            }

            .header .left-arrow {
                left: 15px;
                font-size: 20px;
            }

            .txt-body {
                padding: 20px;
            }

            .title {
                font-size: 18px;
            }

            .modal .modal-body,
            .modal .modal-header,
            .modal .modal-footer {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 10px 10px 120px;
            }

            .txt-body {
                padding: 15px;
            }

            .title {
                font-size: 16px;
            }

            .txt-row p {
                font-size: 13px;
            }

            .btn.btn-rent {
                height: 45px;
                font-size: 14px;
            }
        }

        /* Footer Navigation Integration */
        .footer-nav {
            z-index: 999;
        }
    </style>
</head>

<body>
    <!-- Loading Spinner -->
    <div class="container" id="con">
        <div class="loaderClass" id="loaderId">
            <div class="animation"></div>Loading
        </div>
    </div>

    <!-- Header -->
    <div class="header">
        <div class="left-arrow" onclick="history.back()">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="title">💎 Membership Plans</div>
    </div>

    <!-- Main Content -->
    <div class="page">
        <div class="container">
            @foreach ($plans as $key => $plan)
            <div class="product">
                @if($key == 0)
                    <div class="plan-badge">Starter</div>
                @elseif($key == 1)
                    <div class="plan-badge popular">Popular</div>
                @elseif($key == 2)
                    <div class="plan-badge premium">Premium</div>
                @endif
                
                <div class="img-top">
                    <img src="/1.jpg" alt="Plan Image">
                </div>
                
                <div class="txt-body">
                    <div class="title">{{ __($plan->name) }}</div>
                    
                    <div class="txt-row">
                        <p>💰 Total Price:</p>
                        <p>{{ __(showAmount($plan->price)) }} {{ $general->cur_text }}</p>
                    </div>
                    
                    <div class="txt-row">
                        <p>📅 Duration:</p>
                        <p>{{ $plan->validity }} Days</p>
                    </div>
                    
                    <div class="txt-row">
                        <p>⚡ Daily Tasks:</p>
                        <p>{{ $plan->daily_limit }}</p>
                    </div>
                    
                    <div class="txt-row">
                        <p>🌟 Commission Levels:</p>
                        <p>Up to {{ $plan->ref_level }}</p>
                    </div>

                    <div class="text-center">
                        @if (@auth()->user()->runningPlan && @auth()->user()->plan_id == $plan->id)
                            <button class="package-disabled">🔒 Currently Active</button>
                        @else
                            <form method="post" action="{{ route('user.buyPlan') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $plan->id }}">
                                <button type="submit" class="btn btn-rent">
                                    🚀 Subscribe Now
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Scripts -->
    <script src="/assets/global/js/jquery-3.6.0.min.js"></script>
    <script>
        // Plan card hover effects
        $(document).ready(function() {
            $('.product').hover(
                function() {
                    $(this).find('.img-top img').css('transform', 'scale(1.05)');
                },
                function() {
                    $(this).find('.img-top img').css('transform', 'scale(1)');
                }
            );

            // Button click effects
            $('.btn-rent').on('click', function() {
                $(this).css('transform', 'translateY(0)');
                setTimeout(() => {
                    $(this).css('transform', 'translateY(-2px)');
                }, 150);
            });

            // Loading animation
            function showLoader() {
                $('#con').css('display', 'flex');
                setTimeout(() => {
                    $('#con').fadeOut(500);
                }, 2000);
            }

            // Form submission
            $('form').on('submit', function() {
                showLoader();
            });
        });
    </script>

    @include('partials.notify')
    @include($activeTemplate . 'partials.footers')
</body>
</html>