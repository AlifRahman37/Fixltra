<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="introduction" content="no-reference">
    <title>User Profile - PTC Premium</title>

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
            padding-top: 0;
            position: relative;
            z-index: 1;
        }

        /* Header Premium */
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
            transition: all 0.3s ease;
        }

        .header span {
            font-size: 18px;
            font-weight: 600;
            color: white;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
        }

        .header .right-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .header .right-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-50%) scale(1.1);
        }

        .header .right-icon img {
            width: 20px;
            height: 20px;
            filter: brightness(0) invert(1);
        }

        /* Banner Section */
        .banner {
            width: 100%;
            background: var(--gradient-dark);
            border-radius: 0 0 30px 30px;
            padding: 80px 20px 25px;
            position: relative;
            overflow: hidden;
        }

        .banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23ffffff" stroke-width="0.2" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
            z-index: 2;
        }

        .dp {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            border: 3px solid rgba(0, 162, 255, 0.5);
            box-shadow: 0 0 20px rgba(0, 162, 255, 0.3);
            position: relative;
        }

        .dp::after {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            border-radius: 50%;
            border: 2px solid transparent;
            background: linear-gradient(45deg, #00A2FF, #FF6B35) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            animation: rotate 3s linear infinite;
        }

        @keyframes rotate {
            to { transform: rotate(360deg); }
        }

        .dp img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .txt-right {
            flex: 1;
        }

        .number-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .number-row span {
            font-size: 20px;
            font-weight: 700;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .vip-box {
            background: var(--gradient-primary);
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 10px rgba(255, 107, 53, 0.3);
        }

        .txt-right p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin: 0;
        }

        /* Top Navigation */
        .top-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 20px 10px;
            display: flex;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
            position: relative;
            z-index: 2;
        }

        .top-nav .nav {
            flex: 1;
            text-align: center;
            cursor: pointer;
            padding: 10px;
            border-radius: var(--border-radius-md);
            transition: all 0.3s ease;
        }

        .top-nav .nav:hover {
            background: rgba(0, 162, 255, 0.1);
            transform: translateY(-3px);
        }

        .top-nav .nav img {
            width: 30px;
            height: 30px;
            margin-bottom: 8px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .top-nav .nav span {
            font-size: 13px;
            font-weight: 600;
            color: var(--dark-color);
            display: block;
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 991px;
            padding: 20px;
            padding-bottom: 120px;
        }

        /* Asset Details Section */
        .top-white-box {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 25px;
            margin-bottom: 15px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
        }

        .top-white-box:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
            border-color: var(--accent-color);
        }

        .title {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
            padding-left: 20px;
            position: relative;
            margin-bottom: 20px;
        }

        .title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 30px;
            background: var(--gradient-primary);
            border-radius: 3px;
        }

        .detail-row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .detail-row:last-child {
            margin-bottom: 0;
        }

        .part-one, .part-two {
            flex: 1;
            min-width: 200px;
            padding: 15px;
            background: rgba(248, 249, 250, 0.5);
            border-radius: var(--border-radius-md);
            margin: 5px;
            border-left: 3px solid var(--accent-color);
        }

        .part-one.d-block {
            display: flex;
            justify-content: center;
            align-items: center;
            background: transparent;
            border: none;
        }

        .part-one p, .part-two p {
            font-size: 24px;
            font-weight: 700;
            color: var(--success-color);
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .part-one p span, .part-two p span {
            font-size: 14px;
            color: #666;
            font-weight: 500;
            margin-left: 5px;
        }

        .part-one h6, .part-two h6 {
            font-size: 14px;
            color: #666;
            font-weight: 500;
            margin: 5px 0 0 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Grey Box */
        .top-grey-box {
            background: var(--gradient-dark);
            color: white;
            padding: 20px 25px;
            border-radius: var(--border-radius-xl);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid rgba(0, 162, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        .top-grey-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-accent);
        }

        .top-grey-box h6 {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .top-grey-box p {
            font-size: 20px;
            font-weight: 700;
            color: #00A2FF;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
        }

        /* Mid Navigation */
        .mid-navs {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 20px 10px;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .mid-navs .nav {
            width: 25%;
            text-align: center;
            padding: 15px 10px;
            cursor: pointer;
            border-radius: var(--border-radius-md);
            transition: all 0.3s ease;
        }

        .mid-navs .nav:hover {
            background: rgba(0, 162, 255, 0.1);
            transform: translateY(-3px);
        }

        .mid-navs .nav img {
            width: 30px;
            height: 30px;
            margin-bottom: 8px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .mid-navs .nav span {
            font-size: 12px;
            font-weight: 600;
            color: var(--dark-color);
            display: block;
        }

        /* Mid Links */
        .mid-link {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 18px 20px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            cursor: pointer;
            border: 1px solid rgba(0, 162, 255, 0.2);
            transition: all 0.3s ease;
        }

        .mid-link:hover {
            background: rgba(0, 162, 255, 0.05);
            transform: translateX(5px);
            border-color: var(--accent-color);
        }

        .mid-link .icon {
            width: 35px;
            height: 35px;
            margin-right: 15px;
            background: rgba(0, 162, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mid-link .icon img {
            width: 20px;
            height: 20px;
        }

        .mid-link span {
            font-size: 15px;
            font-weight: 600;
            color: var(--dark-color);
            flex: 1;
        }

        .mid-link i {
            font-size: 16px;
            color: #999;
            transition: all 0.3s ease;
        }

        .mid-link:hover i {
            color: var(--accent-color);
            transform: translateX(3px);
        }

        /* Sticky Service Button */
        .sticky-service {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 25px 0 0 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            right: 0;
            bottom: 220px;
            z-index: 999;
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .sticky-service:hover {
            width: 60px;
            box-shadow: var(--shadow-heavy);
        }

        .sticky-service img {
            width: 25px;
            height: 25px;
            filter: brightness(0) invert(1);
        }

        /* Wallet Animation */
        .wallet-animation {
            width: 100px;
            height: 100px;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                padding-bottom: 120px;
            }

            .banner {
                padding: 70px 15px 20px;
            }

            .profile {
                flex-direction: column;
                text-align: center;
                margin-bottom: 20px;
            }

            .dp {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .detail-row {
                flex-direction: column;
            }

            .part-one, .part-two {
                width: 100%;
                margin: 5px 0;
            }

            .mid-navs .nav {
                width: 50%;
                margin-bottom: 10px;
            }

            .top-grey-box {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }

        @media (max-width: 480px) {
            .header span {
                font-size: 16px;
            }

            .title {
                font-size: 18px;
                padding-left: 15px;
            }

            .part-one p, .part-two p {
                font-size: 20px;
            }

            .mid-navs .nav {
                width: 100%;
                margin-bottom: 8px;
            }

            .mid-link {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header" id="header">
        <span id="head-txt">👤 Profile</span>
        <div class="right-icon" onclick="window.location.href='{{ route('user.change.password') }}'">
            <i class="fas fa-cog"></i>
        </div>
    </div>

    <div class="page">
        <!-- Banner Section -->
        <div class="banner">
            <div class="profile">
                <div class="dp">
                    <img src="{{ asset('assets/images/logoIcon/logo.png') }}">
                </div>
                <div class="txt-right">
                    <div class="number-row">
                        <span>🌟 Status</span>
                        <div class="vip-box">
                            @if ($user->plan)
                                {{ __($user->plan->name) }}
                            @else
                                Free Account
                            @endif
                        </div>
                    </div>
                    <p>🆔 User ID: {{ $user->id ?? '17914' }}</p>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="top-nav">
                <div class="nav" onclick="window.location.href='{{route ('user.deposit')}}'">
                    <img src="{{asset ('assets/img/icon-recharge2.png')}}">
                    <span>💳 Recharge</span>
                </div>
                <div class="nav" onclick="window.location.href='{{route ('user.withdraw')}}'">
                    <img src="{{asset ('assets/img/icon-withdraw2.png')}}">
                    <span>💰 Withdraw</span>
                </div>
                <div class="nav" onclick="window.location.href='{{route ('plans')}}'">
                    <img src="{{asset ('assets/img/icon-bill.png')}}">
                    <span>💎 Plans</span>
                </div>
                <div class="nav" onclick="window.location.href='{{route ('user.ptc.index')}}'">
                    <img src="{{asset ('assets/img/icon-coupon.png')}}">
                    <span>⚡ Tasks</span>
                </div>
            </div>
        </div>

        <!-- PHP Variables -->
        @php
            $authUser = Auth::user();
            $balance = number_format($authUser->balance, 0, '.', '');
            
            use App\Models\Transaction;
            $authUserId = Auth::id();
            $referralCommission = Transaction::where('user_id', $authUserId)
                                            ->where('remark', 'referral_commission')
                                            ->sum('amount');
            $formattedReferralCommission = number_format($referralCommission, 0, '.', '');
            
            $ptcEarn = Transaction::where('user_id', $authUserId)
                                    ->where('remark', 'ptc_earn')
                                    ->sum('amount');
            $formattedPtcEarn = intval($ptcEarn);
            
            use App\Models\Withdrawal;
            $withdrawal = Withdrawal::where('user_id', $authUserId)
                                    ->where('status', 2)
                                    ->first();
            $finalAmount = $withdrawal ? number_format($withdrawal->final_amount, 0, '.', '') : 0;
            
            $withdrawal = Withdrawal::where('user_id', $authUserId)
                                    ->where('status', 1)
                                    ->first();
            $withdrawalAmount = $withdrawal ? number_format($withdrawal->final_amount, 0, '.', '') : 0;
        @endphp

        <div class="container">
            <!-- Asset Details -->
            <div class="top-white-box">
                <div class="title">💼 Asset Details</div>
                
                <div class="detail-row">
                    <div class="part-one">
                        <p>{{ $balance }}<span>{{ $general->cur_text }}</span></p>
                        <h6>💳 Wallet Balance</h6>
                    </div>
                    <div class="part-one d-block">
                        <img src="{{asset ('assets/img/wallet-animation.gif')}}" class="wallet-animation">
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="part-two">
                        <h6>⚡ Task Earnings</h6>
                        <p>{{ $formattedPtcEarn }}<span>{{ $general->cur_text }}</span></p>
                    </div>
                    <div class="part-two">
                        <h6>✅ Approved Withdrawal</h6>
                        <p>{{ $withdrawalAmount }}<span>{{ $general->cur_text }}</span></p>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="part-two">
                        <h6>⏳ Pending Withdrawal</h6>
                        <p>{{ $finalAmount }}<span>{{ $general->cur_text }}</span></p>
                    </div>
                    <div class="part-two">
                        <h6>📈 Total Recharge</h6>
                        <p>{{ showAmount($user->deposits->sum('amount')) }}<span>{{ $general->cur_text }}</span></p>
                    </div>
                </div>
            </div>

            <!-- Total Withdrawal -->
            <div class="top-grey-box">
                <div>
                    <h6>💸 Total Withdrawal</h6>
                    <p>{{ showAmount($user->withdrawals->where('status', 1)->sum('amount')) }}<span>{{ $general->cur_text }}</span></p>
                </div>
            </div>

            <!-- Navigation Menu -->
            <div class="mid-navs">
                <div class="nav" onclick="window.location.href='{{route ('user.deposit.history')}}'">
                    <img src="{{asset ('assets/img/icon-bankaccount.png')}}">
                    <span>📊 My Recharge</span>
                </div>
                <div class="nav" onclick="window.location.href='{{route ('user.withdraw.history')}}'">
                    <img src="{{asset ('assets/img/icon-task.png')}}">
                    <span>💸 My Withdraw</span>
                </div>
                <div class="nav" onclick="window.location.href='{{ route('user.referred') }}'">
                    <img src="{{asset ('assets/img/icon-about.png')}}">
                    <span>👥 My Team</span>
                </div>
                <div class="nav" onclick="window.location.href='https://t.me/hyipmarketglobalDeveloper'">
                    <img src="{{asset ('assets/img/icon-download2.png')}}">
                    <span>📱 Download</span>
                </div>
            </div>

            <!-- Service Links -->
            <div class="mid-link" onclick="window.location.href='{{ route('ticket') }}'">
                <div class="icon">
                    <img src="{{asset ('assets/img/icon-crowdfund.png')}}">
                </div>
                <span>🛠️ Services</span>
                <i class="bi bi-chevron-right"></i>
            </div>

            <div class="mid-link" onclick="window.location.href='https://t.me/hyipmarketglobalDeveloper'">
                <div class="icon">
                    <img src="{{asset ('assets/img/icon-crowdfund.png')}}">
                </div>
                <span>💬 Contact Developers</span>
                <i class="bi bi-chevron-right"></i>
            </div>

            <div class="mid-link" onclick="window.location.href='{{route ('user.logout')}}'">
                <div class="icon">
                    <img src="{{asset ('assets/img/icon-logout.png')}}">
                </div>
                <span>🚪 Logout</span>
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>

        <!-- Sticky Service Button -->
        <div class="sticky-service">
            <img src="{{asset ('assets/img/icon-crowdfund.png')}}">
        </div>
    </div>

    @include('partials.notify')
    @include($activeTemplate . 'partials.footers')
</body>
</html>