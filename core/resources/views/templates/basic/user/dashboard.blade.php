<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $general->siteName(__($pageTitle)) }}</title>
    @include('partials.seo')

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
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
            padding: 0 20px;
            background: rgba(45, 55, 72, 0.95);
            backdrop-filter: blur(20px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            transform: translateX(-50%);
            left: 50%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .header .logo {
            display: flex;
            align-items: center;
        }

        .header .logo img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 2px solid var(--accent-color);
            box-shadow: 0 0 15px rgba(0, 162, 255, 0.4);
        }

        .header .logo-text {
            margin-left: 12px;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            font-weight: 600;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
        }

        /* Banner mejorado */
        .banner {
            width: 100%;
            padding: 20px 20px 15px;
            margin-bottom: 25px;
            position: relative;
        }

        .banner-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-heavy);
            border: 1px solid rgba(0, 162, 255, 0.2);
        }

        .banner .video-area {
            position: relative;
            border-radius: var(--border-radius-lg);
            overflow: hidden;
        }

        .banner .video-area img {
            width: 100%;
            height: auto;
            border-radius: var(--border-radius-lg);
            transition: transform 0.3s ease;
        }

        .banner .video-area:hover img {
            transform: scale(1.05);
        }

        /* News marquee mejorado */
        .news-area {
            background: var(--gradient-dark);
            padding: 12px 15px;
            margin-top: 15px;
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            border: 1px solid rgba(0, 162, 255, 0.3);
        }

        .news-area .news-icon {
            width: 20px;
            height: 20px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            flex-shrink: 0;
        }

        .news-area .news-icon i {
            font-size: 12px;
            color: white;
        }

        .news-area marquee {
            color: white;
            font-size: 13px;
            font-weight: 500;
            text-shadow: 0 0 5px rgba(0, 162, 255, 0.3);
        }

        /* Container principal */
        .container {
            width: 100%;
            max-width: 991px;
            padding: 0 20px 120px;
            position: relative;
            z-index: 1;
        }

        /* Top Navigation mejorada */
        .top-nav {
            width: 100%;
            margin-bottom: 30px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .top-nav .nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 20px 10px;
            border-radius: var(--border-radius-lg);
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-light);
        }

        .top-nav .nav:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
            border-color: var(--accent-color);
        }

        .top-nav .nav img {
            width: 45px;
            height: 45px;
            margin-bottom: 8px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .top-nav .nav span {
            font-size: 13px;
            font-weight: 600;
            color: var(--dark-color);
        }

        /* Live Updates Section */
        .live-section {
            margin-bottom: 30px;
        }

        .live-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .live-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .live-indicator {
            width: 12px;
            height: 12px;
            background: #ff4444;
            border-radius: 50%;
            margin-right: 8px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        .live-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
        }

        .live-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            margin-bottom: 8px;
            background: #f8f9fa;
            border-radius: var(--border-radius-sm);
            border-left: 4px solid var(--accent-color);
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .live-item .user {
            font-size: 14px;
            font-weight: 500;
            color: var(--dark-color);
        }

        .live-item .amount {
            font-size: 14px;
            font-weight: 600;
            color: var(--success-color);
        }

        .live-item .crypto {
            color: var(--accent-color);
        }

        /* Headings mejorados */
        .headings {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .headings .title {
            font-size: 18px;
            font-weight: 600;
            color: white;
            font-family: 'Poppins', sans-serif;
            position: relative;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
        }

        .headings .title::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            border-radius: 5px;
            background: var(--gradient-accent);
            position: absolute;
            left: 0;
            bottom: -8px;
        }

        .headings .right-link {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .headings .right-link:hover {
            color: var(--accent-color);
        }

        /* News blocks mejorados */
        .news-block {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-light);
        }

        .news-block:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
            border-color: var(--accent-color);
        }

        .news-block .left-img {
            width: 80px;
            height: 80px;
            border-radius: var(--border-radius-md);
            overflow: hidden;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .news-block .left-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-block:hover .left-img img {
            transform: scale(1.1);
        }

        .news-block .right {
            flex: 1;
        }

        .news-block .right p {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark-color);
            line-height: 1.4;
            margin-bottom: 5px;
        }

        .news-block .right h6 {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.3;
            color: #666;
            margin-bottom: 3px;
        }

        .news-block .right .author {
            font-size: 11px;
            color: var(--accent-color);
            font-weight: 500;
        }

        /* Loading animation */
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
        .modal.load-modal .modal-content {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 162, 255, 0.2);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-heavy);
        }

        .modal.load-modal .modal-content .body {
            padding: 30px;
        }

        .modal.load-modal .modal-content button.btn.btn-view {
            background: var(--gradient-primary);
            border: none;
            border-radius: var(--border-radius-md);
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .modal.load-modal .modal-content button.btn.btn-view:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px 120px;
            }

            .banner {
                padding: 15px;
            }

            .top-nav {
                gap: 10px;
            }

            .top-nav .nav {
                padding: 15px 8px;
            }

            .top-nav .nav img {
                width: 35px;
                height: 35px;
            }

            .top-nav .nav span {
                font-size: 12px;
            }

            .news-block {
                padding: 12px;
            }

            .news-block .left-img {
                width: 70px;
                height: 70px;
                margin-right: 12px;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 0 15px;
            }

            .header .logo img {
                width: 35px;
                height: 35px;
            }

            .header .logo-text {
                font-size: 16px;
            }

            .live-container {
                padding: 15px;
            }

            .live-item {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container" id="con">
        <div class="loaderClass" id="loaderId">
            <div class="animation"></div>Loading
        </div>
    </div>
    
    @php
        $kycInfo = getContent('kyc_info.content',true);
    @endphp
    
    <!-- Auto Modal -->
    <div class="modal load-modal fade" id="homeModal" tabindex="-1" aria-labelledby="homeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="/pop.png" class="w-100">
                <div class="body">
                    <p>{{ __($kycInfo->data_values->verification_content) }}</p>
                    <div class="text-center">
                        <button class="btn btn-view" onclick="" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="logo">
            <img src="{{ asset('assets/images/logoIcon/logo.png') }}">
            <div class="logo-text">PTC - Pay Per Clic</div>
        </div>
    </div>

    @php
        $banners = getContent('banner.element');
    @endphp

    <div class="page">
        <div class="banner">
            <div class="banner-container">
                <div class="video-area">
                    @foreach($banners as $banner)
                    <div>
                        <img src="{{ asset('assets/images/frontend/banner/'.$banner->data_values->image) }}" alt="Banner">
                    </div>
                    @endforeach
                </div>
                
                <div class="news-area">
                    <div class="news-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <marquee>
                        🎉 User 598****661 withdrew $86.32 • User 983****124 upgraded to VIP4 (+120% profit) • User 632****966 upgraded to VIP2 (+60% profit) • User 856****778 withdrew $18.94
                    </marquee>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="top-nav">
                <div class="nav" onclick="window.location.href='{{route('user.deposit')}}'">
                    <img src="{{asset('assets/img/icon-recharge.png')}}">
                    <span>Recharge</span>
                </div>
                <div class="nav" onclick="window.location.href='{{route('user.withdraw')}}'">
                    <img src="{{asset('assets/img/icon-withdraw.png')}}">
                    <span>Withdraw</span>
                </div>
                <div class="nav" onclick="window.location.href='{{ route('user.referred') }}'">
                    <img src="{{asset('assets/img/icon-invite.png')}}">
                    <span>Invite</span>
                </div>
                <div class="nav" onclick="window.location.href=''">
                    <img src="{{asset('assets/img/icon-download.png')}}">
                    <span>Download</span>
                </div>
            </div>
            
            <!-- Live Deposits Section -->
            <div class="live-section">
                <div class="live-container">
                    <div class="live-header">
                        <div class="live-indicator"></div>
                        <div class="live-title">🔴 Live Deposits</div>
                    </div>
                    <div id="liveDeposits">
                        <div class="live-item">
                            <div class="user">User 892****456</div>
                            <div class="amount crypto">+$127.50 BTC</div>
                        </div>
                        <div class="live-item">
                            <div class="user">User 634****189</div>
                            <div class="amount crypto">+$89.25 ETH</div>
                        </div>
                        <div class="live-item">
                            <div class="user">User 751****923</div>
                            <div class="amount crypto">+$234.75 USDT</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Live Tasks Section -->
            <div class="live-section">
                <div class="live-container">
                    <div class="live-header">
                        <div class="live-indicator"></div>
                        <div class="live-title">⚡ Live Task Completions</div>
                    </div>
                    <div id="liveTasks">
                        <div class="live-item">
                            <div class="user">User 456****789 - Ad Click</div>
                            <div class="amount">+$0.05</div>
                        </div>
                        <div class="live-item">
                            <div class="user">User 123****567 - Survey</div>
                            <div class="amount">+$1.25</div>
                        </div>
                        <div class="live-item">
                            <div class="user">User 789****234 - Video View</div>
                            <div class="amount">+$0.15</div>
                        </div>
                    </div>
                </div>
            </div>
            
            @php
                $blogCaption = getContent('blog.content',true);
                $blogs = getContent('blog.element',false,3);
            @endphp
            
            <div class="headings">
                <div class="title">📰 News & Updates</div>
                <div class="right-link" onclick="window.location.href=''">
                    <i class="bi bi-chevron-double-right"></i> View All
                </div>
            </div>
            
            @foreach($blogs as $blog)
            <div class="news-block" onclick="window.location.href=''">
                <div class="left-img">
                    <img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->image) }}">
                </div>
                <div class="right">
                    <p>{{ __($blog->data_values->title) }}</p>
                    <h6>{{ strLimit(strip_tags($blog->data_values->description),80) }}</h6>
                    <h6 class="author mb-0">📝 Posted by Admin</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script>
        // Live Updates System
        function generateRandomUser() {
            const prefix = Math.floor(Math.random() * 999) + 100;
            const suffix = Math.floor(Math.random() * 999) + 100;
            return `${prefix}****${suffix}`;
        }

        function generateRandomAmount(min, max) {
            return (Math.random() * (max - min) + min).toFixed(2);
        }

        function updateLiveDeposits() {
            const deposits = $('#liveDeposits');
            const cryptos = ['BTC', 'ETH', 'USDT', 'LTC', 'ADA'];
            const crypto = cryptos[Math.floor(Math.random() * cryptos.length)];
            const amount = generateRandomAmount(50, 500);
            const user = generateRandomUser();
            
            const newDeposit = `
                <div class="live-item" style="display: none;">
                    <div class="user">User ${user}</div>
                    <div class="amount crypto">+$${amount} ${crypto}</div>
                </div>
            `;
            
            deposits.prepend(newDeposit);
            deposits.children().first().slideDown(300);
            
            // Keep only last 4 items
            if (deposits.children().length > 4) {
                deposits.children().last().slideUp(300, function() {
                    $(this).remove();
                });
            }
        }

        function updateLiveTasks() {
            const tasks = $('#liveTasks');
            const taskTypes = [
                { name: 'Ad Click', pay: [0.01, 0.05] },
                { name: 'Survey', pay: [0.50, 2.00] },
                { name: 'Video View', pay: [0.05, 0.25] },
                { name: 'Social Share', pay: [0.10, 0.50] },
                { name: 'App Download', pay: [1.00, 3.00] }
            ];
            
            const task = taskTypes[Math.floor(Math.random() * taskTypes.length)];
            const amount = generateRandomAmount(task.pay[0], task.pay[1]);
            const user = generateRandomUser();
            
            const newTask = `
                <div class="live-item" style="display: none;">
                    <div class="user">User ${user} - ${task.name}</div>
                    <div class="amount">+$${amount}</div>
                </div>
            `;
            
            tasks.prepend(newTask);
            tasks.children().first().slideDown(300);
            
            // Keep only last 4 items
            if (tasks.children().length > 4) {
                tasks.children().last().slideUp(300, function() {
                    $(this).remove();
                });
            }
        }

        // Update live feeds every few seconds
        setInterval(updateLiveDeposits, 8000);  // Every 8 seconds
        setInterval(updateLiveTasks, 5000);     // Every 5 seconds

        // Cookie functions
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
    
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    
        $(document).ready(function() {
            let user = getCookie("username");
            if (user != "") {
                // User exists
            } else {
                $('#homeModal').modal('toggle');
            }
        });

        function showLoader(message) {
            $('#teleModal').modal('toggle');
            document.getElementById("loaderId").innerHTML = `<div class="animation"></div>${message}`;
            $('.loaderClass').delay(3000).fadeOut(500);
            
            setTimeout(function() {
                location.reload();
            }, 1000);
        }

        // Copy link functionality
        $(".button-addon2").on('click', function() {
            document.getElementById("con").style.display = "flex";
        
            var target = $("#link");
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(target.val()).select();
            document.execCommand("copy");
            $temp.remove();

            window.setTimeout(function() {
                showLoader('Copy Link');
            }, 2000);
        });

        $(".button-addon3").on('click', function() {
            var target = $("#link1");
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(target.val()).select();
            document.execCommand("copy");
            $temp.remove();

            $(".button-addon3").text('Copied');
            window.setTimeout(function() {
                $(".button-addon3").text('Copy Code');
            }, 2000);
        });
    </script>

    @include($activeTemplate . 'partials.footers')
</body>
</html>