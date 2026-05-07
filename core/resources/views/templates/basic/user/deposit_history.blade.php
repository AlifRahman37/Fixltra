<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="introduction" content="no-reference">
    <title>Recharge History - PTC Premium</title>

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

        /* Transaction Cards */
        .transaction-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 20px;
            margin-bottom: 15px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .transaction-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
            border-color: var(--accent-color);
        }

        .transaction-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-accent);
        }

        /* Transaction Header */
        .transaction-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .transaction-amount {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .amount-icon {
            width: 35px;
            height: 35px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .amount-icon svg {
            width: 18px;
            height: 18px;
            fill: white;
        }

        .amount-info h4 {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark-color);
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .amount-info .label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 0;
        }

        .transaction-date {
            text-align: right;
        }

        .date-primary {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
        }

        .date-secondary {
            font-size: 12px;
            color: #666;
            margin: 0;
        }

        /* Status Badge */
        .status-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .status-badge {
            padding: 8px 16px !important;
            border-radius: 20px !important;
            font-size: 12px !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.5px !important;
            border: none !important;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .status-icon {
            width: 12px;
            height: 12px;
            fill: currentColor;
        }

        /* Status Colors */
        .badge-success {
            background: var(--gradient-secondary) !important;
            color: white !important;
            box-shadow: 0 2px 10px rgba(76, 175, 80, 0.3);
        }

        .badge-warning {
            background: var(--gradient-primary) !important;
            color: white !important;
            box-shadow: 0 2px 10px rgba(255, 171, 38, 0.3);
        }

        .badge-danger {
            background: linear-gradient(135deg, #FF5252 0%, #E53935 100%) !important;
            color: white !important;
            box-shadow: 0 2px 10px rgba(255, 82, 82, 0.3);
        }

        .badge-secondary {
            background: linear-gradient(135deg, #666 0%, #555 100%) !important;
            color: white !important;
            box-shadow: 0 2px 10px rgba(102, 102, 102, 0.3);
        }

        .badge-info {
            background: var(--gradient-accent) !important;
            color: white !important;
            box-shadow: 0 2px 10px rgba(0, 162, 255, 0.3);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .empty-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            opacity: 0.5;
        }

        .empty-icon svg {
            width: 100%;
            height: 100%;
            fill: #ccc;
        }

        .empty-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .empty-message {
            font-size: 16px;
            color: #666;
            margin: 0;
            line-height: 1.5;
        }

        /* Loading Animation */
        .loading-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 20px;
            margin-bottom: 15px;
            border: 1px solid rgba(0, 162, 255, 0.2);
        }

        .loading-shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .loading-line {
            height: 16px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .loading-line.short { width: 60%; }
        .loading-line.medium { width: 80%; }
        .loading-line.long { width: 100%; }

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

            .transaction-card {
                padding: 15px;
            }

            .transaction-header {
                flex-direction: column;
                gap: 15px;
            }

            .transaction-date {
                text-align: left;
            }

            .amount-info h4 {
                font-size: 16px;
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

            .transaction-card {
                padding: 12px;
            }

            .amount-info h4 {
                font-size: 14px;
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
                    <path d="M3,3H21V5H3V3M3,7H21V9H3V7M3,11H21V13H3V11M3,15H21V17H3V15M3,19H21V21H3V19Z"/>
                </svg>
                <h1>Recharge History</h1>
            </div>
            <p class="page-subtitle">View your transaction history</p>
        </div>

        <div class="container">
            @forelse($deposits as $deposit)
                <div class="transaction-card">
                    <div class="transaction-header">
                        <div class="transaction-amount">
                            <div class="amount-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M17,13H13V17H11V13H7V11H11V7H13V11H17V13Z"/>
                                </svg>
                            </div>
                            <div class="amount-info">
                                <h4>{{ __($general->cur_sym) }}{{ showAmount($deposit->amount) }}</h4>
                                <p class="label">Recharge Amount</p>
                            </div>
                        </div>
                        
                        <div class="transaction-date">
                            <p class="date-primary">{{ showDateTime($deposit->created_at, 'M d, Y') }}</p>
                            <p class="date-secondary">{{ showDateTime($deposit->created_at, 'h:i A') }}</p>
                        </div>
                    </div>
                    
                    <div class="status-container">
                        @php
                            $statusClass = '';
                            $statusIcon = '';
                            $statusText = '';
                            
                            if($deposit->status == 1) {
                                $statusClass = 'badge-success';
                                $statusIcon = '<path d="M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z"/>';
                                $statusText = 'Completed';
                            } elseif($deposit->status == 2) {
                                $statusClass = 'badge-warning';
                                $statusIcon = '<path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/>';
                                $statusText = 'Pending';
                            } elseif($deposit->status == 3) {
                                $statusClass = 'badge-danger';
                                $statusIcon = '<path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>';
                                $statusText = 'Rejected';
                            } else {
                                $statusClass = 'badge-secondary';
                                $statusIcon = '<path d="M11,18H13V16H11V18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,6A4,4 0 0,0 8,10H10A2,2 0 0,1 12,8A2,2 0 0,1 14,10C14,12 11,11.75 11,15H13C13,12.75 16,12.5 16,10A4,4 0 0,0 12,6Z"/>';
                                $statusText = 'Unknown';
                            }
                        @endphp
                        
                        <span class="badge status-badge {{ $statusClass }}">
                            <svg class="status-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                {!! $statusIcon !!}
                            </svg>
                            {{ $statusText }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <div class="empty-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17,7H22V9H19V17A2,2 0 0,1 17,19H7A2,2 0 0,1 5,17V9H2V7H7V6A3,3 0 0,1 10,3H14A3,3 0 0,1 17,6V7M7,9V17H17V9H7M9,5V7H15V5A1,1 0 0,0 14,4H10A1,1 0 0,0 9,5Z"/>
                        </svg>
                    </div>
                    <h3 class="empty-title">No Transactions Found</h3>
                    <p class="empty-message">{{ __($emptyMessage ?? 'You haven\'t made any recharge transactions yet. Start by making your first deposit!') }}</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    @include('partials.notify')
    @include($activeTemplate . 'partials.footers')
</body>
</html>