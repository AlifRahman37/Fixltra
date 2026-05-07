<!-- Footer Navigation Futurista -->
<style>
    /* Footer Navigation Mejorado */
    .footer-nav {
        width: 100%;
        max-width: 991px;
        height: 70px;
        transform: translateX(-50%);
        position: fixed;
        left: 50%;
        bottom: 0;
        z-index: 1000;
        overflow: visible;
        padding-bottom: env(safe-area-inset-bottom, 0px);
    }

    .footer-nav-container {
        width: 100%;
        height: 70px;
        background: rgba(45, 55, 72, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 25px 25px 0 0;
        border-top: 1px solid rgba(0, 162, 255, 0.3);
        box-shadow: 
            0 -5px 30px rgba(0,0,0,0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        position: relative;
        overflow: visible;
        margin: 0 10px 0 10px;
    }

    .footer-nav-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            #00A2FF 20%, 
            #FF6B35 50%, 
            #00A2FF 80%, 
            transparent 100%);
        animation: glow-line 3s ease-in-out infinite;
    }

    @keyframes glow-line {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }

    .nav-set {
        width: 100%;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        position: relative;
    }

    /* Navigation Items */
    .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 8px 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 15px;
        position: relative;
        min-width: 60px;
    }

    .nav-item:hover {
        transform: translateY(-2px);
        background: rgba(255, 255, 255, 0.1);
    }

    .nav-item.active {
        background: rgba(0, 162, 255, 0.2);
        border: 1px solid rgba(0, 162, 255, 0.4);
        box-shadow: 0 0 15px rgba(0, 162, 255, 0.3);
    }

    .nav-icon {
        width: 28px;
        height: 28px;
        margin-bottom: 4px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-icon svg {
        width: 24px;
        height: 24px;
        fill: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
    }

    .nav-item:hover .nav-icon svg {
        fill: #00A2FF;
        filter: drop-shadow(0 0 5px rgba(0, 162, 255, 0.5));
    }

    .nav-item.active .nav-icon svg {
        fill: #00A2FF;
        filter: drop-shadow(0 0 8px rgba(0, 162, 255, 0.8));
    }

    .nav-label {
        font-size: 11px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
        text-align: center;
        line-height: 1;
    }

    .nav-item:hover .nav-label,
    .nav-item.active .nav-label {
        color: #00A2FF;
        text-shadow: 0 0 5px rgba(0, 162, 255, 0.5);
    }

    /* Center Share Button - Ultra Premium */
    .nav-item.center {
        position: relative;
        transform: translateY(-30px);
        z-index: 10;
    }

    .nav-item.center .share-circle {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #FF6B35 0%, #F7931E 50%, #FF8C42 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 
            0 10px 30px rgba(255, 107, 53, 0.5),
            0 0 0 4px rgba(255, 255, 255, 0.1),
            0 0 0 8px rgba(0, 162, 255, 0.1),
            inset 0 2px 0 rgba(255, 255, 255, 0.3),
            inset 0 -2px 0 rgba(0, 0, 0, 0.1);
        position: relative;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        overflow: hidden;
    }

    /* Animated border gradient */
    .nav-item.center .share-circle::before {
        content: '';
        position: absolute;
        top: -8px;
        left: -8px;
        right: -8px;
        bottom: -8px;
        background: conic-gradient(from 0deg, #FF6B35, #00A2FF, #4CAF50, #FF6B35, #00A2FF);
        border-radius: 50%;
        z-index: -1;
        opacity: 0;
        animation: rotate-rainbow 4s linear infinite;
        transition: opacity 0.4s ease;
    }

    /* Inner glow effect */
    .nav-item.center .share-circle::after {
        content: '';
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .nav-item.center:hover .share-circle::before {
        opacity: 1;
    }

    .nav-item.center:hover .share-circle::after {
        opacity: 1;
    }

    @keyframes rotate-rainbow {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Floating animation */
    .nav-item.center .share-circle {
        animation: float-button 3s ease-in-out infinite;
    }

    @keyframes float-button {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-3px); }
    }

    .nav-item.center:hover .share-circle {
        transform: scale(1.15) translateY(-2px);
        box-shadow: 
            0 15px 40px rgba(255, 107, 53, 0.7),
            0 0 0 4px rgba(255, 255, 255, 0.2),
            0 0 0 8px rgba(0, 162, 255, 0.2),
            0 0 50px rgba(255, 107, 53, 0.3),
            inset 0 2px 0 rgba(255, 255, 255, 0.4),
            inset 0 -2px 0 rgba(0, 0, 0, 0.1);
        animation: none;
    }

    /* Icon styling */
    .nav-item.center .nav-icon {
        margin-bottom: 0;
        position: relative;
        z-index: 2;
    }

    .nav-item.center .nav-icon svg {
        width: 32px;
        height: 32px;
        fill: white;
        filter: drop-shadow(0 3px 6px rgba(0,0,0,0.3));
        transition: all 0.3s ease;
    }

    .nav-item.center:hover .nav-icon svg {
        transform: scale(1.1);
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.4));
    }

    /* Label styling */
    .nav-item.center .nav-label {
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-weight: 600;
        font-size: 12px;
        text-shadow: 0 0 10px rgba(0, 162, 255, 0.8);
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    .nav-item.center:hover .nav-label {
        text-shadow: 0 0 15px rgba(255, 107, 53, 0.8);
        transform: translateX(-50%) scale(1.05);
    }

    /* Pulse effect for attention */
    .nav-item.center .pulse-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 70px;
        height: 70px;
        border: 2px solid rgba(255, 107, 53, 0.6);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        animation: pulse-ring 2s ease-out infinite;
        z-index: -1;
    }

    @keyframes pulse-ring {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        100% {
            transform: translate(-50%, -50%) scale(1.8);
            opacity: 0;
        }
    }

    /* Label styling */
    .nav-item.center .nav-label {
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-weight: 600;
        font-size: 12px;
        text-shadow: 0 0 10px rgba(0, 162, 255, 0.8);
        white-space: nowrap;
        transition: all 0.3s ease;
    }
    .sticky-service {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
        border-radius: 25px 0 0 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        right: 0;
        bottom: 120px;
        z-index: 999;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 
            -5px 5px 20px rgba(255, 107, 53, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    .sticky-service:hover {
        transform: translateX(-5px) scale(1.1);
        box-shadow: 
            -8px 8px 30px rgba(255, 107, 53, 0.5),
            inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }

    .sticky-service svg {
        width: 28px;
        height: 28px;
        fill: white;
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
    }

    /* Ripple Effect */
    .nav-item::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(0, 162, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .nav-item:active::before {
        width: 60px;
        height: 60px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer-nav-container {
            margin: 0 5px;
        }

        .nav-item {
            min-width: 50px;
            padding: 6px 8px;
        }

        .nav-icon {
            width: 24px;
            height: 24px;
        }

        .nav-icon svg {
            width: 20px;
            height: 20px;
        }

        .nav-label {
            font-size: 10px;
        }

        .nav-item.center .share-circle {
            width: 55px;
            height: 55px;
        }

        .nav-item.center .nav-icon svg {
            width: 26px;
            height: 26px;
        }
    }

    @media (max-width: 480px) {
        .footer-nav-container {
            margin: 0;
            border-radius: 20px 20px 0 0;
        }

        .nav-item {
            min-width: 45px;
            padding: 5px 6px;
        }

        .nav-label {
            font-size: 9px;
        }
    }
</style>

<!-- Sticky Service Button -->
<div class="sticky-service" onclick="window.location.href='{{ route('ticket') }}'">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 13.5l-2.5-2.5L9 14.5 11.5 17 18 10.5 16.5 9 11.5 14z"/>
        <circle cx="12" cy="8" r="2"/>
        <path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
    </svg>
</div>

<!-- Footer Navigation -->
<div class="footer-nav">
    <div class="footer-nav-container">
        <div class="nav-set">
            <!-- Home -->
            <div class="nav-item active" onclick="window.location.href='{{route('user.home')}}'">
                <div class="nav-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                </div>
                <div class="nav-label">Home</div>
            </div>

            <!-- Plans -->
            <div class="nav-item" onclick="window.location.href='{{route('plans')}}'">
                <div class="nav-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2l3.09 6.26L22 9l-5 4.87L18.18 21 12 17.77 5.82 21 7 13.87 2 9l6.91-1.74L12 2z"/>
                        <path d="M9 11H7v8h2v-8zm4-4h-2v12h2V7zm4-4h-2v16h2V3z"/>
                    </svg>
                </div>
                <div class="nav-label">Plans</div>
            </div>

            <!-- Share (Center) -->
            <div class="nav-item center" onclick="window.location.href='{{ route('user.referred') }}'">
                <div class="pulse-ring"></div>
                <div class="share-circle">
                    <div class="nav-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/>
                        </svg>
                    </div>
                </div>
                <div class="nav-label"></div>
            </div>

            <!-- Tasks -->
            <div class="nav-item" onclick="window.location.href='{{ route('user.ptc.index') }}'">
                <div class="nav-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <div class="nav-label">Tasks</div>
            </div>

            <!-- Profile -->
            <div class="nav-item" onclick="window.location.href='{{ route('user.profile.setting') }}'">
                <div class="nav-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <div class="nav-label">Profile</div>
            </div>
        </div>
    </div>
</div>


<!-- Scripts (manteniendo los originales) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script>
    // Navigation active state management
    $(document).ready(function() {
        // Get current page URL
        const currentPath = window.location.pathname;
        
        // Remove active class from all nav items
        $('.nav-item').removeClass('active');
        
        // Add active class based on current route
        if (currentPath.includes('/home') || currentPath === '/') {
            $('.nav-item').first().addClass('active');
        } else if (currentPath.includes('/plans')) {
            $('.nav-item').eq(1).addClass('active');
        } else if (currentPath.includes('/referred')) {
            $('.nav-item.center').addClass('active');
        } else if (currentPath.includes('/ptc')) {
            $('.nav-item').eq(3).addClass('active');
        } else if (currentPath.includes('/profile')) {
            $('.nav-item').last().addClass('active');
        }
    });

    // Cookie functions (manteniendo las originales)
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

    function showLoader(message) {
        $('#teleModal').modal('toggle');
        document.getElementById("loaderId").innerHTML = message;
        $('.loaderClass').delay(3000).fadeOut(500);
        
        setTimeout(function() {
            location.reload();
        }, 1000);
    }

    // Copy link functionality (manteniendo la original)
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

    // Modal functionality (manteniendo la original)
    var selector = document.getElementById('contry-code');
    var modclose = document.getElementById('modal-close');
    var modback = document.getElementById('modal-back');
    var modfoot = document.getElementById('modal-foot');

    if (selector && modclose && modback && modfoot) {
        $(selector).on('click', function(){
            $(modback).addClass('show');
            $(modfoot).addClass('show');
        });
        $(modclose).on('click', function(){
            $(modback).removeClass('show');
            $(modfoot).removeClass('show');
        });
    }
</script>