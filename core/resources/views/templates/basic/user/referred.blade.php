<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $general->siteName(__($pageTitle)) }}</title>
    ($activeTemplate . 'partials.headers')

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap & FontAwesome -->
    <link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/css/all.min.css') }}" rel="stylesheet">

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

        .content-body {
            position: relative;
            z-index: 1;
            padding-top: 60px;
            min-height: 100vh;
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

        .header i {
            position: absolute;
            left: 20px;
            color: white;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 8px;
            border-radius: 50%;
        }

        .header i:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--accent-color);
        }

        /* Container principal */
        .container, .container-fluid {
            width: 100%;
            max-width: 991px;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        /* Cards premium */
        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-medium);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
            border-color: var(--accent-color);
        }

        .card-header {
            background: var(--gradient-dark);
            color: white;
            border-bottom: 1px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-xl) var(--border-radius-xl) 0 0;
            padding: 20px;
        }

        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin: 0;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.3);
        }

        .card-body {
            padding: 25px;
        }

        /* Top stats block */
        .top-block {
            background: var(--gradient-dark);
            border-radius: var(--border-radius-xl);
            margin: 20px 0;
            box-shadow: var(--shadow-medium);
            border: 1px solid rgba(0, 162, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        .top-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-accent);
        }

        .flex-area {
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .part-two {
            text-align: center;
            color: white;
        }

        .part-two p:first-child {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #00A2FF;
            text-shadow: 0 0 15px rgba(0, 162, 255, 0.5);
            font-family: 'Poppins', sans-serif;
        }

        .part-two p:last-child {
            font-size: 14px;
            font-weight: 500;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Referral link section */
        .referral-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 25px;
            margin: 20px 0;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .form-control {
            background: rgba(248, 249, 250, 0.8);
            border: 2px solid transparent;
            border-radius: var(--border-radius-md);
            padding: 12px 15px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: white;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(0, 162, 255, 0.1);
        }

        /* Buttons */
        .btn {
            border: none;
            border-radius: var(--border-radius-md);
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            font-family: 'Poppins', sans-serif;
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
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
            color: white;
        }

        .btn-lg {
            padding: 16px 32px;
            font-size: 16px;
        }

        .btn-block {
            width: 100%;
        }

        /* Navigation tabs */
        .nav-pills {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 8px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            margin: 20px 0;
        }

        .nav-item.nav-link {
            background: transparent;
            border: none;
            border-radius: var(--border-radius-md);
            padding: 12px 20px;
            color: #666;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-item.nav-link.active {
            background: var(--gradient-accent);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 162, 255, 0.3);
        }

        .nav-item.nav-link:hover:not(.active) {
            background: rgba(0, 162, 255, 0.1);
            color: var(--accent-color);
        }

        /* Table styling */
        .table-responsive {
            border-radius: var(--border-radius-lg);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: var(--gradient-dark);
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 15px;
            border-top: 1px solid rgba(0, 162, 255, 0.1);
            vertical-align: middle;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: rgba(0, 162, 255, 0.05);
        }

        /* Tab content */
        .tab-content {
            margin-top: 20px;
        }

        .tab-pane {
            padding: 20px 0;
            text-align: center;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tab-pane h6 {
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            font-weight: 500;
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: var(--border-radius-lg);
            backdrop-filter: blur(10px);
        }

        /* Empty state */
        .text-center {
            color: #666;
            font-style: italic;
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container, .container-fluid {
                padding: 15px;
            }

            .card-body {
                padding: 20px;
            }

            .referral-section {
                padding: 20px;
            }

            .flex-area {
                flex-direction: column;
                gap: 20px;
            }

            .part-two {
                width: 100%;
            }

            .part-two p:first-child {
                font-size: 24px;
            }

            .header .title {
                font-size: 16px;
            }

            .header i {
                left: 15px;
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .container, .container-fluid {
                padding: 10px;
            }

            .card-body,
            .referral-section {
                padding: 15px;
            }

            .btn-lg {
                padding: 12px 24px;
                font-size: 14px;
            }

            .nav-item.nav-link {
                padding: 10px 15px;
                font-size: 14px;
            }
        }

        /* Copy notification */
        .copy-notification {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 15px 25px;
            border-radius: var(--border-radius-md);
            font-weight: 500;
            z-index: 9999;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .copy-notification.show {
            opacity: 1;
        }
    </style>
</head>

<body>
    @php
        $authUser = Auth::user();
        $userCount = App\Models\User::where('ref_by', $authUser->id)->count();
        use App\Models\Transaction;
        $authUserId = Auth::id();
        $referralCommission = Transaction::where('user_id', $authUserId)
                                        ->where('remark', 'referral_commission')
                                        ->sum('amount');
        $formattedReferralCommission = number_format($referralCommission, 0, '.', '');
    @endphp

    <!-- Copy notification -->
    <div class="copy-notification" id="copyNotification">
        🎉 Link copied to clipboard!
    </div>

    <div class="content-body">
        <!-- Header -->
        <div class="header">
            <i class="fas fa-chevron-left" onclick="window.location.href='{{route('user.home')}}'"></i>
            <div class="title">🤝 Team & Referrals</div>
        </div>

        <div class="container-fluid">
            <!-- Referral Link Section -->
            <div class="referral-section">
                <div class="mb-3">
                    <label for="address" class="form-label">🔗 Your Referral Link</label>
                    <input type="text" value="{{ route('home') }}/ref/{{ $user->ref }}" class="form-control" id="myInput" readonly>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="myFunction()">
                    📋 Copy My Referral Link
                </button>
            </div>

            <!-- Stats Section -->
            <div class="top-block">
                <div class="flex-area">
                    <div class="part-two">
                        <p>{{ $userCount }}</p>
                        <p>👥 Team Members</p>
                    </div>
                    <div class="part-two">
                        <p>{{ $formattedReferralCommission }}</p>
                        <p>💰 Team Earnings</p>
                    </div>
                </div>
            </div>

            <!-- Level Navigation -->
            <nav>
                <div class="nav nav-pills nav-justified" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">
                        🥇 Level 1
                    </a>
                    <a class="nav-item nav-link" id="nav-two-tab" data-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">
                        🥈 Level 2
                    </a>
                    <a class="nav-item nav-link" id="nav-three-tab" data-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">
                        🥉 Level 3
                    </a>
                </div>
            </nav>

            <!-- Tab Content -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                    <h6>👥 Your direct referrals will appear here</h6>
                </div>
                <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                    <h6>🤝 Second level referrals will appear here</h6>
                </div>
                <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                    <h6>🌟 Third level referrals will appear here</h6>
                </div>
            </div>

            <!-- Referred Users Table -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">👥 Referred Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>📧 @lang('Email')</th>
                                    <th>💎 @lang('Plan')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($refUsers as $log)
                                <tr>
                                    <td data-label="@lang('Email')">{{ $log->email }}</td>
                                    <td data-label="@lang('Plan')">
                                        @if($log->plan)
                                            <span style="color: var(--success-color); font-weight: 600;">
                                                {{ __($log->plan->name) }}
                                            </span>
                                        @else
                                            <span style="color: #999;">No Plan</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%" class="text-center">
                                        🤷‍♂️ {{ __($emptyMessage ?? 'No referrals yet. Share your link to get started!') }}
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <script>
        function copyToClipboard(text) {
            if (navigator.clipboard && window.isSecureContext) {
                // Modern approach
                navigator.clipboard.writeText(text).then(() => {
                    showCopyNotification();
                });
            } else {
                // Fallback approach
                var sampleTextarea = document.createElement("textarea");
                document.body.appendChild(sampleTextarea);
                sampleTextarea.value = text;
                sampleTextarea.select();
                document.execCommand("copy");
                document.body.removeChild(sampleTextarea);
                showCopyNotification();
            }
        }

        function showCopyNotification() {
            const notification = document.getElementById('copyNotification');
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 2000);
        }

        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyToClipboard(copyText.value);
        }

        // Smooth tab transitions
        $(document).ready(function() {
            $('.nav-link').on('click', function() {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

            // Add hover effects to cards
            $('.card').hover(
                function() {
                    $(this).addClass('shadow-lg');
                },
                function() {
                    $(this).removeClass('shadow-lg');
                }
            );

            // Animate stats on page load
            $('.part-two p:first-child').each(function() {
                const $this = $(this);
                const countTo = parseInt($this.text());
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(countTo);
                    }
                });
            });
        });
    </script>

    @include('partials.notify')
</body>
</html>