($activeTemplate . 'partials.headers')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Tasks - PTC Premium</title>
    
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
            padding: 20px;
            position: relative;
            z-index: 1;
            min-height: calc(100vh - 180px);
        }

        /* Tasks header section */
        .tasks-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 25px;
            margin-bottom: 25px;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
            text-align: center;
        }

        .tasks-title {
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.3);
        }

        .tasks-subtitle {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        /* Task Cards */
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
            height: 120px;
            background: var(--gradient-primary);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .img-top::before {
            content: '⚡';
            font-size: 48px;
            color: white;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.2); opacity: 1; }
        }

        .txt-body {
            padding: 20px;
        }

        .title {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
            font-family: 'Poppins', sans-serif;
            margin-bottom: 15px;
            text-shadow: 0 0 10px rgba(255, 107, 53, 0.3);
            line-height: 1.3;
        }

        .txt-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding: 8px 12px;
            background: rgba(248, 249, 250, 0.5);
            border-radius: var(--border-radius-sm);
            border-left: 3px solid var(--accent-color);
        }

        .txt-row:last-of-type {
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

        /* Earnings highlight */
        .txt-row.earnings p:last-child {
            color: var(--success-color);
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }

        /* Duration badge */
        .txt-row.duration p:last-child {
            background: var(--gradient-accent);
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
        }

        /* Complete Task Button */
        .btn.btn-rent {
            width: 100%;
            height: 50px;
            background: var(--gradient-secondary);
            border: none;
            border-radius: var(--border-radius-md);
            font-size: 16px;
            font-weight: 600;
            color: white;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 15px;
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
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.4);
            background: var(--gradient-secondary);
        }

        /* Empty state */
        .empty-state {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-xl);
            padding: 60px 30px;
            text-align: center;
            border: 1px solid rgba(0, 162, 255, 0.2);
            box-shadow: var(--shadow-medium);
        }

        .empty-state .icon {
            font-size: 64px;
            color: var(--accent-color);
            margin-bottom: 20px;
            opacity: 0.6;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .empty-state h2 {
            color: var(--dark-color);
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .empty-state p {
            color: #666;
            font-size: 16px;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .empty-state .refresh-btn {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: var(--border-radius-md);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .empty-state .refresh-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
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

        /* Task counter */
        .task-counter {
            background: var(--gradient-dark);
            color: white;
            padding: 15px 20px;
            border-radius: var(--border-radius-lg);
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid rgba(0, 162, 255, 0.3);
        }

        .task-counter .count {
            font-size: 24px;
            font-weight: 700;
            color: #00A2FF;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 10px rgba(0, 162, 255, 0.5);
        }

        .task-counter .label {
            font-size: 12px;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .tasks-header {
                padding: 20px;
            }

            .tasks-title {
                font-size: 20px;
            }

            .txt-body {
                padding: 15px;
            }

            .title {
                font-size: 16px;
            }

            .header .title {
                font-size: 16px;
            }

            .header .left-arrow {
                left: 15px;
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }

            .tasks-header {
                padding: 15px;
            }

            .tasks-title {
                font-size: 18px;
            }

            .txt-body {
                padding: 12px;
            }

            .txt-row {
                padding: 6px 10px;
            }

            .btn.btn-rent {
                height: 45px;
                font-size: 14px;
            }

            .empty-state {
                padding: 40px 20px;
            }

            .empty-state .icon {
                font-size: 48px;
            }

            .empty-state h2 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Loading Spinner -->
    <div class="container" id="con">
        <div class="loaderClass" id="loaderId">
            <div class="animation"></div>Loading Tasks
        </div>
    </div>

    <!-- Header -->
    <div class="header">
        <div class="left-arrow" onclick="history.back()">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="title">⚡ Available Tasks</div>
    </div>

    <div class="page">
        <div class="container">
            <!-- Tasks Header -->
            <div class="tasks-header">
                <h1 class="tasks-title">🎯 Complete Tasks & Earn</h1>
                <p class="tasks-subtitle">Click on ads, watch videos, and earn instant rewards</p>
            </div>

            <!-- Task Counter -->
            @if(count($ads) > 0)
            <div class="task-counter">
                <div class="count">{{ count($ads) }}</div>
                <div class="label">🎪 Available Tasks</div>
            </div>
            @endif

            <!-- Tasks List -->
            @forelse($ads as $ad)
            <div class="product">
                <div class="img-top"></div>
                <div class="txt-body">
                    <div class="title">{{ __($ad->title) }}</div>
                    
                    <div class="txt-row earnings">
                        <p>💰 Task Reward:</p>
                        <p>{{ $general->cur_sym }}{{ showAmount($ad->amount) }}</p>
                    </div>
                    
                    <div class="txt-row duration">
                        <p>⏱️ Duration:</p>
                        <p>{{ $ad->duration }}s</p>
                    </div>
                    
                    <div class="txt-row">
                        <p>🎯 Task Type:</p>
                        <p>
                            @if($ad->ads_type == 1)
                                🌐 Website Visit
                            @elseif($ad->ads_type == 2)
                                🖼️ Banner View
                            @elseif($ad->ads_type == 3)
                                💻 Interactive
                            @else
                                📺 Video Watch
                            @endif
                        </p>
                    </div>

                    <div class="text-center">
                        <button type="button" 
                                onclick="window.location.href='{{ route('user.ptc.show',encrypt($ad->id.'|'.auth()->user()->id)) }}'" 
                                class="btn btn-rent">
                            🚀 Complete Task Now
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <!-- Empty State -->
            <div class="empty-state">
                <div class="icon">🎯</div>
                <h2>No Tasks Available</h2>
                <p>Check back later for new earning opportunities!</p>
                <button class="refresh-btn" onclick="window.location.reload()">
                    🔄 Refresh Page
                </button>
            </div>
            @endforelse
        </div>
    </div>

    <script>
        // Task interaction animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add click animation to task cards
            const taskCards = document.querySelectorAll('.product');
            taskCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    if (e.target.tagName !== 'BUTTON') {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                    }
                });
            });

            // Add loading state to task buttons
            const taskButtons = document.querySelectorAll('.btn-rent');
            taskButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.innerHTML = '⏳ Loading Task...';
                    this.style.pointerEvents = 'none';
                    this.style.opacity = '0.7';
                });
            });

            // Auto-refresh counter
            let refreshTimer = 300; // 5 minutes
            const updateRefreshTimer = () => {
                const minutes = Math.floor(refreshTimer / 60);
                const seconds = refreshTimer % 60;
                document.title = `Tasks (${minutes}:${seconds.toString().padStart(2, '0')}) - PTC Premium`;
                refreshTimer--;
                
                if (refreshTimer < 0) {
                    window.location.reload();
                }
            };

            // Update every second
            setInterval(updateRefreshTimer, 1000);
        });
    </script>

    @include('partials.notify')
    @include($activeTemplate . 'partials.footers')
</body>
</html>