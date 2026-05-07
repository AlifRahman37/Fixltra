<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="introduction" content="no-reference">
    <title>Recharge - PTC Premium</title>

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
            padding: 0 20px;
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
            margin-bottom: 20px;
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

        /* Balance Banner */
        .banner {
            background: var(--gradient-success);
            border-radius: var(--border-radius-xl);
            padding: 30px 25px;
            margin-bottom: 25px;
            text-align: left;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .banner::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .banner .txt {
            position: relative;
            z-index: 2;
        }

        .banner .txt p {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
            opacity: 0.9;
        }

        .banner .txt h3 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        /* Tab Navigation */
        .tab-list {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
            position: relative;
        }

        .tab-tag {
            position: absolute;
            top: -8px;
            right: 15px;
            background: var(--gradient-primary);
            color: white;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 10;
        }

        .nav-link {
            background: transparent !important;
            border: none !important;
            color: var(--dark-color) !important;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            padding: 15px 20px !important;
            border-radius: var(--border-radius-md) !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link.active {
            background: rgba(0, 162, 255, 0.1) !important;
            color: var(--accent-color) !important;
            font-weight: 700 !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 8px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        /* Important Notes */
        .important-note {
            background: rgba(255, 171, 38, 0.1);
            border: 1px solid rgba(255, 171, 38, 0.3);
            border-radius: var(--border-radius-md);
            padding: 15px;
            margin-bottom: 25px;
            color: #E67E22;
            font-weight: 600;
            text-align: center;
            font-size: 14px;
        }

        /* Section Titles */
        .title {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark-color);
            margin: 25px 0 15px;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-icon {
            width: 24px;
            height: 24px;
            fill: var(--accent-color);
        }



        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .input-group {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-md);
            border: 2px solid rgba(0, 162, 255, 0.2);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(0, 162, 255, 0.1);
        }

        .input-group-text {
            background: rgba(0, 162, 255, 0.1) !important;
            border: none !important;
            color: var(--dark-color) !important;
            font-weight: 600 !important;
            padding: 15px 20px !important;
            font-size: 14px !important;
        }

        .form-control {
            background: transparent !important;
            border: none !important;
            padding: 15px 20px !important;
            font-size: 15px !important;
            color: var(--dark-color) !important;
        }

        .form-control:focus {
            box-shadow: none !important;
            background: white !important;
        }

        .form-control::placeholder {
            color: #999 !important;
            opacity: 0.7 !important;
        }

        /* Select Dropdown */
        select.form-control {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(0, 162, 255, 0.2) !important;
            border-radius: var(--border-radius-md) !important;
            padding: 15px 20px !important;
            font-size: 15px !important;
            color: var(--dark-color) !important;
            transition: all 0.3s ease;
        }

        select.form-control:focus {
            border-color: var(--accent-color) !important;
            box-shadow: 0 0 0 3px rgba(0, 162, 255, 0.1) !important;
        }

        /* Preview Details */
        .preview-details {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            margin: 20px 0;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .list-group-item {
            background: transparent !important;
            border: none !important;
            border-bottom: 1px solid rgba(0, 162, 255, 0.1) !important;
            padding: 15px 20px !important;
            color: var(--dark-color) !important;
        }

        .list-group-item:last-child {
            border-bottom: none !important;
        }

        /* Submit Button */
        .btn-submit {
            width: 100% !important;
            background: var(--gradient-primary) !important;
            border: none !important;
            border-radius: var(--border-radius-md) !important;
            padding: 18px 30px !important;
            color: white !important;
            font-size: 16px !important;
            font-weight: 700 !important;
            font-family: 'Poppins', sans-serif !important;
            text-transform: uppercase !important;
            letter-spacing: 1px !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            box-shadow: var(--shadow-medium) !important;
            margin: 25px 0 !important;
            position: relative;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .btn-submit:hover {
            transform: translateY(-3px) !important;
            box-shadow: var(--shadow-heavy) !important;
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        /* Rules Section */
        .rule-txt {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 25px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .rule-txt p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .rule-txt p:last-child {
            margin-bottom: 0;
        }

        /* Loading Overlay */
        #con {
            display: none;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999;
        }

        .loaderClass {
            background: var(--gradient-primary);
            padding: 20px 30px;
            border-radius: var(--border-radius-md);
            color: white;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: var(--shadow-heavy);
        }

        .loaderClass .animation {
            width: 25px;
            height: 25px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top: 3px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .page-header {
                padding: 30px 15px 20px;
            }

            .page-title h1 {
                font-size: 24px;
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
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <svg class="title-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M17,13H13V17H11V13H7V11H11V7H13V11H17V13Z"/>
                </svg>
                <h1>Recharge</h1>
            </div>
        </div>

        <div class="container">
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

            <!-- Balance Banner -->
            <div class="banner">
                <div class="txt">
                    <p>Current Balance</p>
                    <h3>{{__($general->cur_text)}} {{ $balance }}</h3>
                </div>
            </div>

            <!-- Tab Navigation -->
            <nav class="tab-list">
                <div class="tab-tag">Premium</div>
                <div class="nav nav-pills nav-justified" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Cash Recharge</a>
                </div>
            </nav>

            <!-- Important Notes -->
            <div class="important-note">
                <svg class="section-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 18px; height: 18px; margin-right: 8px; vertical-align: middle;">
                    <path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z"/>
                </svg>
                Important: Please first select amount then choose deposit method
            </div>

            <!-- Form Content -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                    <form class="login-form" action="{{route('user.deposit.insert')}}" method="post">
                        @csrf
                        <input type="hidden" name="method_code">
                        <input type="hidden" name="currency">
                        <input type="hidden" name="selected_channel" class="selected_channel" value="">

                        <!-- Custom Amount Input -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Amount</div>
                                </div>
                                <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter the Amount" required>
                            </div>
                        </div>

                        <!-- Preview Details -->
                        <div class="mt-3 preview-details d-none">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Limit</span>
                                    <span><span class="min fw-bold">0</span> {{__($general->cur_text)}} - <span class="max fw-bold">0</span> {{__($general->cur_text)}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Payable</span> 
                                    <span><span class="payable fw-bold"> 0</span> {{__($general->cur_text)}}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Gateway Selection -->
                        <div class="title">
                            <svg class="section-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21,18V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H19A2,2 0 0,1 21,5V6H12C10.89,6 10,6.9 10,8V16A2,2 0 0,0 12,18M12,16H22V8H12M16,13.5A1.5,1.5 0 0,1 14.5,12A1.5,1.5 0 0,1 16,10.5A1.5,1.5 0 0,1 17.5,12A1.5,1.5 0 0,1 16,13.5Z"/>
                            </svg>
                            Payment Method
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="gateway" required>
                                <option>Select Payment Method</option>
                                @foreach($gatewayCurrency as $data)
                                <option value="{{$data->method_code}}" @selected(old('gateway') == $data->method_code) data-gateway="{{ $data }}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-submit">
                            Proceed to Payment
                        </button>
                    </form>

                    <!-- Rules Section -->
                    <div class="rule-txt">
                        <p><strong>Payment Guidelines:</strong></p>
                        <p>1. The recharge amount is the same as the payment amount.</p>
                        <p>2. For the safety of your account and property, you need to enter the recharge page to obtain the latest payment information every time you recharge.</p>
                        <p>3. For recharge issues, please contact our customer support.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loading Overlay -->
        <div id="con">
            <div class="loaderClass">
                <div class="animation"></div>
                Processing Payment...
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <!-- Custom Scripts -->
    <script>
        $(document).ready(function() {
            // Gateway change handler
            $('select[name=gateway]').change(function(){
                if(!$('select[name=gateway]').val()){
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=gateway] option:selected').data('gateway');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                if(resource.method.crypto == 1){
                    var toFixedDigit = 8;
                    $('.crypto_currency').removeClass('d-none');
                }else{
                    var toFixedDigit = 2;
                    $('.crypto_currency').addClass('d-none');
                }
                $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                $('.max').text(parseFloat(resource.max_amount).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());
                if (!amount) {
                    amount = 0;
                }
                if(amount <= 0){
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                $('.preview-details').removeClass('d-none');
                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                $('.payable').text(payable);
                var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge)))*rate).toFixed(toFixedDigit);
                $('.final_amo').text(final_amo);
                if (resource.currency != '{{ $general->cur_text }}') {
                    var rateElement = `<span class="fw-bold">Conversion Rate</span> <span><span  class="fw-bold">1 {{__($general->cur_text)}} = <span class="rate">${rate}</span>  <span class="base-currency">${resource.currency}</span></span></span>`;
                    $('.rate-element').html(rateElement)
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                }else{
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                $('.base-currency').text(resource.currency);
                $('.method_currency').text(resource.currency);
                $('input[name=currency]').val(resource.currency);
                $('input[name=method_code]').val(resource.method_code);
                $('input[name=amount]').on('input');
            });

            // Amount input handler
            $('input[name=amount]').on('input',function(){
                $('select[name=gateway]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });

            // Form submit handler
            $('.login-form').on('submit', function() {
                $('#con').show();
            });
        });
    </script>

    @include('partials.notify')
    @include($activeTemplate . 'partials.footers')
</body>
</html>