<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
        
        @font-face {
            font-family: 'Helvetica';
            font-weight: 900;
            font-style: normal;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        .font-helvetica {
            font-family: 'Helvetica', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .font-garet {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-25px); }
        }

        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slide-in-right {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }

        @keyframes rotate-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes shooting-star {
            0% {
                opacity: 0;
            }
            0.1% {
                opacity: 1;
                transform: translateX(-100px) translateY(-100px);
            }
            70% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translateX(700px) translateY(700px);
            }
        }

        @media (max-width: 768px) {
            @keyframes shooting-star {
                0% {
                    opacity: 0;
                }
                0.1% {
                    opacity: 1;
                    transform: translateX(-80px) translateY(-80px);
                }
                70% {
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                    transform: translateX(500px) translateY(500px);
                }
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }

        .animate-slide-in-right {
            animation: slide-in-right 0.8s ease-out;
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        .animate-rotate-slow {
            animation: rotate-slow 20s linear infinite;
        }

        .shooting-star {
            position: absolute;
            width: 3px;
            height: 3px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.9),
                        0 0 20px 4px rgba(197, 230, 201, 0.7),
                        0 0 30px 6px rgba(211, 235, 159, 0.5);
            filter: blur(0.5px);
            opacity: 0;
        }

        .shooting-star::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, 
                rgba(255,255,255,0) 0%, 
                rgba(255,255,255,0.9) 20%,
                rgba(197,230,201,0.8) 50%, 
                rgba(211,235,159,0.6) 80%,
                rgba(211,235,159,0) 100%);
            transform: translateX(-100px) translateY(1px) rotate(45deg);
            transform-origin: right center;
        }

        @media (max-width: 768px) {
            .shooting-star::before {
                width: 60px;
                transform: translateX(-60px) translateY(1px) rotate(45deg);
            }
        }

        /* Bintang jatuh dengan posisi tersebar merata dan delay berbeda */
        .shooting-star-1 {
            top: 2%;
            left: 8%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 0s;
        }

        .shooting-star-2 {
            top: 5%;
            left: 25%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 3.5s;
        }

        .shooting-star-3 {
            top: 3%;
            left: 45%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 7s;
        }

        .shooting-star-4 {
            top: 6%;
            left: 62%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 10.5s;
        }

        .shooting-star-5 {
            top: 4%;
            left: 78%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 14s;
        }

        .shooting-star-6 {
            top: 7%;
            left: 15%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 17.5s;
        }

        .shooting-star-7 {
            top: 8%;
            left: 35%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 21s;
        }

        .shooting-star-8 {
            top: 5%;
            left: 55%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 24.5s;
        }

        .shooting-star-9 {
            top: 6%;
            left: 72%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 28s;
        }

        .shooting-star-10 {
            top: 4%;
            left: 88%;
            animation: shooting-star 2.5s linear infinite;
            animation-delay: 31.5s;
        }

        /* Responsive adjustments untuk mobile */
        @media (max-width: 768px) {
            .shooting-star-1 { top: 3%; left: 5%; }
            .shooting-star-2 { top: 6%; left: 20%; }
            .shooting-star-3 { top: 4%; left: 35%; }
            .shooting-star-4 { top: 8%; left: 50%; }
            .shooting-star-5 { top: 5%; left: 70%; }
            .shooting-star-6 { top: 9%; left: 15%; }
            .shooting-star-7 { top: 7%; left: 30%; }
            .shooting-star-8 { top: 6%; left: 55%; }
            .shooting-star-9 { top: 8%; left: 75%; }
            .shooting-star-10 { top: 5%; left: 90%; }
        }

        .animation-delay-200 { animation-delay: 200ms; }
        .animation-delay-400 { animation-delay: 400ms; }
        .animation-delay-600 { animation-delay: 600ms; }
        
        /* Responsive sparkle sizes - BIGGER */
        .sparkle-sm { width: 14px; height: 14px; }
        .sparkle-md { width: 20px; height: 20px; }
        .sparkle-lg { width: 26px; height: 26px; }
        
        @media (min-width: 640px) {
            .sparkle-sm { width: 16px; height: 16px; }
            .sparkle-md { width: 22px; height: 22px; }
            .sparkle-lg { width: 28px; height: 28px; }
        }
        
        @media (min-width: 1024px) {
            .sparkle-sm { width: 18px; height: 18px; }
            .sparkle-md { width: 24px; height: 24px; }
            .sparkle-lg { width: 30px; height: 30px; }
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] overflow-hidden">
        <!-- Grunge Texture -->
        <div class="absolute inset-0 opacity-20 mix-blend-multiply"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-10 sm:top-20 left-10 sm:left-20 w-40 sm:w-60 lg:w-80 h-40 sm:h-60 lg:h-80 bg-[#D3EB9F]/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-10 sm:bottom-20 right-10 sm:right-20 w-48 sm:w-72 lg:w-96 h-48 sm:h-72 lg:h-96 bg-[#0F4C82]/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
        
        <!-- SHOOTING STARS - TERSEBAR MERATA DENGAN DELAY BERBEDA -->
        <div class="shooting-star shooting-star-1"></div>
        <div class="shooting-star shooting-star-2"></div>
        <div class="shooting-star shooting-star-3"></div>
        <div class="shooting-star shooting-star-4"></div>
        <div class="shooting-star shooting-star-5"></div>
        <div class="shooting-star shooting-star-6"></div>
        <div class="shooting-star shooting-star-7"></div>
        <div class="shooting-star shooting-star-8"></div>
        <div class="shooting-star shooting-star-9"></div>
        <div class="shooting-star shooting-star-10"></div>

        <!-- SPARKLES - BIGGER SIZE -->
        
        <!-- ROW 1: Top Edge -->
        <div class="absolute sparkle-lg opacity-75 animate-float" style="top: 8%; left: 15%; animation-delay: 0.2s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-70 animate-float-delayed" style="top: 12%; left: 85%; animation-delay: 0.8s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_12px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>

        <!-- ROW 2: Upper Section -->
        <div class="absolute sparkle-lg opacity-80 animate-float" style="top: 25%; left: 8%; animation-delay: 1.2s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_14px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-70 animate-float-delayed" style="top: 28%; left: 92%; animation-delay: 0.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_12px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>

        <!-- ROW 3: Middle-Left -->
        <div class="absolute sparkle-lg opacity-75 animate-float" style="top: 45%; left: 5%; animation-delay: 0.9s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_14px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>

        <!-- ROW 4: Middle-Right -->
        <div class="absolute sparkle-md opacity-70 animate-float-delayed" style="top: 50%; left: 95%; animation-delay: 1.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_12px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>

        <!-- ROW 5: Lower Section -->
        <div class="absolute sparkle-lg opacity-80 animate-float" style="top: 68%; left: 10%; animation-delay: 0.4s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-75 animate-float-delayed" style="top: 72%; left: 88%; animation-delay: 1.1s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_13px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>

        <!-- ROW 6: Bottom Edge -->
        <div class="absolute sparkle-lg opacity-75 animate-float" style="top: 85%; left: 20%; animation-delay: 0.7s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_14px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-70 animate-float-delayed" style="top: 88%; left: 75%; animation-delay: 1.3s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_12px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>

        <!-- Additional scattered sparkles - BIGGER -->
        <div class="absolute sparkle-md opacity-65 animate-float" style="top: 18%; left: 45%; animation-delay: 0.3s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_10px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-70 animate-float-delayed" style="top: 35%; left: 65%; animation-delay: 1.0s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_11px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-65 animate-float" style="top: 55%; left: 35%; animation-delay: 0.6s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_10px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        <div class="absolute sparkle-md opacity-70 animate-float-delayed" style="top: 60%; left: 70%; animation-delay: 1.4s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_11px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>

        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Side - Error Message -->
                <div class="text-center lg:text-left lg:pl-8 xl:pl-16">
                    <!-- Error Code -->
                    <div class="mb-4 sm:mb-6 animate-fade-in-up">
                        <div class="relative inline-block">
                            <h1 class="relative text-6xl sm:text-7xl md:text-8xl lg:text-9xl xl:text-[10rem] font-helvetica font-black tracking-tighter text-white drop-shadow-2xl" style="text-shadow: 3px 3px 10px rgba(15,76,130,0.6), -2px -2px 6px rgba(15,76,130,0.4);">
                                403
                            </h1>
                        </div>
                    </div>

                    <!-- Error Message -->
                    <div class="mb-4 sm:mb-6 animate-fade-in-up animation-delay-200">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-white mb-3 sm:mb-4 drop-shadow-lg">
                           Not Found
                        </h2>
                        <div class="w-24 sm:w-32 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto lg:mx-0 mb-4 sm:mb-6 rounded-full shadow-lg"></div>
                    </div>

                     <!-- Action Button -->
                    <div class="animate-fade-in-up animation-delay-600">
                        <button onclick="history.back()" class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl sm:rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base min-h-[48px] sm:min-h-[56px]">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            <span>Back</span>
                        </button>
                    </div>
                </div>

                <!-- Right Side - Logo -->
                <div class="flex items-center justify-center animate-slide-in-right mt-8 lg:mt-0">
                    <div class="relative">
                        <div class="absolute -inset-4 sm:-inset-8 bg-white/20 backdrop-blur-md rounded-full blur-2xl"></div>
                        <div class="relative bg-white/10 backdrop-blur-md border-2 sm:border-4 border-white/40 rounded-full p-8 sm:p-10 lg:p-12 shadow-2xl">
                            <img src="assets/svg/LOGO.svg" alt="Logo" class="w-40 h-40 sm:w-52 sm:h-52 md:w-64 md:h-64 lg:w-72 lg:h-72 xl:w-80 xl:h-80 drop-shadow-2xl object-contain"/>
                        </div>
                        <!-- Decorative Ring 1 -->
                        <div class="absolute inset-0 border-2 sm:border-4 border-[#D3EB9F]/30 rounded-full animate-pulse-slow" style="animation-duration: 4s;"></div>
                        <!-- Decorative Ring 2 - Rotating -->
                        <div class="absolute -inset-2 sm:-inset-4 border border-dashed sm:border-2 border-[#C5E6C9]/40 rounded-full animate-rotate-slow"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0 -mb-1 opacity-30">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-16 sm:h-20 md:h-24 lg:h-auto" preserveAspectRatio="none">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="white" fill-opacity="0.1"/>
            </svg>
        </div>
    </section>
</body>
</html>