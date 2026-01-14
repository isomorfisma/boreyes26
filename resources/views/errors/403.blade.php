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
            50% { transform: translateY(-25px); }
        }

        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-35px); }
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

        .animation-delay-200 { animation-delay: 200ms; }
        .animation-delay-400 { animation-delay: 400ms; }
        .animation-delay-600 { animation-delay: 600ms; }
        .animation-delay-800 { animation-delay: 800ms; }
        .animation-delay-1000 { animation-delay: 1000ms; }
    </style>
</head>
<body class="overflow-x-hidden">
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] overflow-hidden">
        <!-- Grunge Texture -->
        <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-20 left-20 w-80 h-80 bg-[#D3EB9F]/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-[#0F4C82]/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
        
        <!-- Enhanced Sparkles with Professional Glow - Massive Collection -->
        <!-- Top Section -->
        
        <div class="absolute top-20 right-1/3 w-12 sm:w-15 h-12 sm:h-15 opacity-75 animate-float-delayed" style="animation-delay: 0.8s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_18px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        <div class="absolute top-40 right-12 w-10 sm:w-13 h-10 sm:h-13 opacity-70 animate-float" style="animation-delay: 1.1s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute top-24 right-1/4 w-14 sm:w-17 h-14 sm:h-17 opacity-80 animate-float-delayed" style="animation-delay: 0.4s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_20px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute top-16 right-2/3 w-11 sm:w-14 h-11 sm:h-14 opacity-65 animate-float" style="animation-delay: 1.4s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_16px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
        <div class="absolute top-36 right-1/2 w-13 sm:w-16 h-13 sm:h-16 opacity-75 animate-float-delayed" style="animation-delay: 0.7s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_19px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        
        <!-- Top Left Section -->
     
        <div class="absolute top-20 left-1/4 w-12 sm:w-15 h-12 sm:h-15 opacity-70 animate-float-delayed" style="animation-delay: 1.0s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_17px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
        <div class="absolute top-44 left-16 w-10 sm:w-13 h-10 sm:h-13 opacity-65 animate-float" style="animation-delay: 1.6s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute top-32 left-1/3 w-14 sm:w-17 h-14 sm:h-17 opacity-75 animate-float-delayed" style="animation-delay: 0.9s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_20px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        <div class="absolute top-16 left-1/2 w-11 sm:w-14 h-11 sm:h-14 opacity-80 animate-float" style="animation-delay: 0.3s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_18px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute top-40 left-2/3 w-13 sm:w-16 h-13 sm:h-16 opacity-70 animate-float-delayed" style="animation-delay: 1.3s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_16px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
        
      
        <!-- Middle Left Section -->
        <div class="absolute top-1/3 left-24 w-14 sm:w-18 h-14 sm:h-18 opacity-80 animate-float-delayed" style="animation-delay: 0.4s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_20px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute top-1/4 left-1/4 w-10 sm:w-13 h-10 sm:h-13 opacity-65 animate-float" style="animation-delay: 1.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
       
        <div class="absolute top-1/4 left-16 w-12 sm:w-15 h-12 sm:h-15 opacity-70 animate-float" style="animation-delay: 1.1s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_17px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        
        
        <!-- Bottom Section -->
        <div class="absolute bottom-1/3 left-1/4 w-14 sm:w-18 h-14 sm:h-18 opacity-80 animate-float" style="animation-delay: 0.3s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_20px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute bottom-1/4 right-1/4 w-10 sm:w-13 h-10 sm:h-13 opacity-65 animate-float" style="animation-delay: 1.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_14px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute bottom-1/3 right-1/3 w-13 sm:w-16 h-13 sm:h-16 opacity-75 animate-float-delayed" style="animation-delay: 0.8s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_18px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        
        <div class="absolute bottom-1/3 left-16 w-11 sm:w-14 h-11 sm:h-14 opacity-70 animate-float-delayed" style="animation-delay: 1.2s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_16px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
        <div class="absolute bottom-1/4 right-16 w-12 sm:w-15 h-12 sm:h-15 opacity-75 animate-float" style="animation-delay: 0.7s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_17px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        
        <!-- Bottom Near Edge -->
        <div class="absolute bottom-40 right-40 w-15 sm:w-19 h-15 sm:h-19 opacity-85 animate-float" style="animation-delay: 0.4s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_17px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute bottom-32 left-32 w-14 sm:w-17 h-14 sm:h-17 opacity-80 animate-float-delayed" style="animation-delay: 0.9s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_20px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        <div class="absolute bottom-36 right-24 w-11 sm:w-14 h-11 sm:h-14 opacity-70 animate-float" style="animation-delay: 1.3s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_16px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
        <div class="absolute bottom-28 left-1/4 w-13 sm:w-16 h-13 sm:h-16 opacity-75 animate-float-delayed" style="animation-delay: 0.6s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_18px_rgba(140,205,207,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#8CCDCF"/>
            </svg>
        </div>
        <div class="absolute bottom-44 right-1/3 w-16 sm:w-20 h-16 sm:h-20 opacity-85 animate-float" style="animation-delay: 0.2s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_24px_rgba(211,235,159,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#D3EB9F"/>
            </svg>
        </div>
        <div class="absolute bottom-40 left-1/3 w-12 sm:w-15 h-12 sm:h-15 opacity-70 animate-float-delayed" style="animation-delay: 1.1s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_17px_rgba(197,230,201,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#C5E6C9"/>
            </svg>
        </div>
        
        <!-- Additional Random Positions for Full Coverage -->
        <div class="absolute top-3/4 right-1/4 w-10 sm:w-13 h-10 sm:h-13 opacity-65 animate-float" style="animation-delay: 1.6s;">
            <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(111,151,182,0.9)]">
                <path d="M50 0 L55 45 L100 50 L55 55 L50 100 L45 55 L0 50 L45 45 Z" fill="#6F97B6"/>
            </svg>
        </div>
        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Side - Error Message -->
                <div class="text-center lg:text-left">
                    <!-- Error Code -->
                    <div class="mb-6 animate-fade-in-up">
                        <div class="relative inline-block">
                          
                            <h1 class="relative text-7xl sm:text-8xl md:text-9xl lg:text-[10rem] font-helvetica font-black tracking-tighter text-white drop-shadow-2xl" style="text-shadow: 4px 4px 12px rgba(15,76,130,0.6), -2px -2px 6px rgba(15,76,130,0.4);">
                                403
                            </h1>
                        </div>
                    </div>

                    <!-- Error Message -->
                    <div class="mb-6 animate-fade-in-up animation-delay-200">
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-white mb-4 drop-shadow-lg">
                           Not Found
                        </h2>
                        <div class="w-32 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto lg:mx-0 mb-6 rounded-full shadow-lg"></div>
                    </div>

                     <!-- Action Button -->
                    <div class="animate-fade-in-up animation-delay-600">
                        <button onclick="history.back()" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base min-h-[56px]">
                            <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            <span>Back</span>
                        </button>
                    </div>


                   

                 
                </div>

                <!-- Right Side - Logo -->
                <div class="hidden lg:flex items-center justify-center animate-slide-in-right">
                    <div class="relative">
                        <div class="absolute -inset-8 bg-white/20 backdrop-blur-md rounded-full blur-2xl"></div>
                        <div class="relative bg-white/10 backdrop-blur-md border-4 border-white/40 rounded-full p-12 shadow-2xl">
                            <!-- Replace the image src with your actual logo path -->
                            <img src="assets/svg/LOGO.svg" alt="Logo" class="w-64 h-64 sm:w-80 sm:h-80 drop-shadow-2xl object-contain"/>
                        </div>
                        <!-- Decorative Ring 1 -->
                        <div class="absolute inset-0 border-4 border-[#D3EB9F]/30 rounded-full animate-pulse-slow" style="animation-duration: 4s;"></div>
                        <!-- Decorative Ring 2 - Rotating -->
                        <div class="absolute -inset-4 border-2 border-dashed border-[#C5E6C9]/40 rounded-full animate-rotate-slow"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0 -mb-1 opacity-30">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="white" fill-opacity="0.1"/>
            </svg>
        </div>
    </section>
</body>
</html>