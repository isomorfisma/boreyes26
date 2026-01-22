@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden min-h-screen flex items-center pb-0">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-20 mix-blend-multiply gsap-grunge" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Palm Shadows -->
    <div class="absolute top-0 right-0 w-1/3 h-96 opacity-15 pointer-events-none palm-sway gsap-palm-right" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    <div class="absolute bottom-20 left-0 w-1/4 h-80 opacity-15 pointer-events-none palm-sway-reverse gsap-palm-left" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: bottom left; background-repeat: no-repeat; transform: scaleX(-1);"></div>
    
    <!-- Multiple Sparkles -->
    <div class="sparkle-float gsap-comp-sparkle absolute top-20 right-20 w-12 sm:w-16 h-12 sm:h-16 opacity-80">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute top-40 right-1/4 w-10 sm:w-12 h-10 sm:h-12 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute top-32 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute top-1/3 left-1/4 w-8 sm:w-10 h-8 sm:h-10 opacity-60">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute bottom-40 right-32 w-14 sm:w-20 h-14 sm:h-20 opacity-85">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.9)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute bottom-1/3 left-1/3 w-7 sm:w-8 h-7 sm:h-8 opacity-65">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute top-1/2 right-1/3 w-9 sm:w-11 h-9 sm:h-11 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute bottom-32 left-40 w-10 sm:w-13 h-10 sm:h-13 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute top-1/2 right-1/2 w-9 sm:w-11 h-9 sm:h-11 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float gsap-comp-sparkle absolute bottom-32 left-60 w-10 sm:w-13 h-10 sm:h-13 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-24 w-full z-10">
        <!-- WRAPPER: kiri + kanan -->
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
            
            <!-- Logo Mobile (tampil hanya di mobile) -->
            <div class="lg:hidden flex items-center justify-center w-full gsap-hero-logo-wrapper-mobile mb-4">
                <div class="relative">
                    <!-- Glow Effect -->
                    <div class="gsap-hero-glow absolute -inset-6 bg-white/20 backdrop-blur-md rounded-full blur-2xl"></div>

                    <!-- Main Logo Container -->
                    <div class="gsap-hero-logo-container relative bg-white/10 backdrop-blur-md border-4 border-white/40 rounded-full p-8 sm:p-10 shadow-2xl">
                        <img src="{{ asset('assets/svg/LOGO.svg') }}"
                             alt="Logo"
                             class="gsap-hero-logo w-32 h-32 sm:w-40 sm:h-40 drop-shadow-2xl object-contain" />
                    </div>

                    <!-- Animated Rings -->
                    <div class="gsap-hero-ring-1 absolute inset-0 border-4 border-[#D3EB9F]/30 rounded-full"></div>
                    <div class="gsap-hero-ring-2 absolute -inset-4 border-2 border-dashed border-[#C5E6C9]/40 rounded-full"></div>
                </div>
            </div>

            <!-- LEFT: Text + Buttons -->
            <div class="w-full lg:max-w-4xl space-y-5 sm:space-y-6 lg:space-y-4 lg:flex-1 text-center lg:text-left">
                <!-- Main Title with Letter Animation -->
                <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-7xl font-helvetica font-black tracking-tighter leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)] gsap-hero-title"
                    style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    <span class="gsap-hero-letter inline-block">B</span><span class="gsap-hero-letter inline-block">O</span><span class="gsap-hero-letter inline-block">R</span><span class="gsap-hero-letter inline-block">E</span><span class="gsap-hero-letter inline-block">Y</span><span class="gsap-hero-letter inline-block">E</span><span class="gsap-hero-letter inline-block">S</span>
                    <br class="block sm:hidden">
                    <span class="gsap-hero-letter inline-block sm:ml-4 lg:ml-4">2</span><span class="gsap-hero-letter inline-block">0</span><span class="gsap-hero-letter inline-block">2</span><span class="gsap-hero-letter inline-block">6</span>
                </h1>

                <!-- Divider Line -->
                <div class="gsap-hero-divider w-32 sm:w-40 lg:w-32 h-1.5 sm:h-2 lg:h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white rounded-full shadow-lg mx-auto lg:mx-0"></div>

                <!-- Tagline -->
                <p class="gsap-hero-tagline text-2xl sm:text-3xl md:text-4xl lg:text-3xl font-semibold text-[#D3EB9F] font-marola drop-shadow-md">
                    #EyesOnTheFuture
                </p>

                <!-- Buttons -->
                <div class="pt-4 sm:pt-6 lg:pt-3 flex flex-col sm:flex-row gap-4 sm:gap-5 lg:gap-4 justify-center lg:justify-start">
                    <button onclick="scrollToNavAndOpenDropdown()"
                        class="gsap-hero-btn-primary group inline-flex items-center justify-center px-8 sm:px-10 lg:px-8 py-4 sm:py-5 lg:py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-base sm:text-lg lg:text-base min-h-[60px] sm:min-h-[64px] lg:min-h-[56px] cursor-pointer opacity-100 w-full sm:w-auto">
                        <span>View Competitions</span>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-5 lg:h-5 ml-2 bounce-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>

                    @guest
                        <a href="{{ route('register') }}"
                            class="gsap-hero-btn-secondary group inline-flex items-center justify-center px-8 sm:px-10 lg:px-8 py-4 sm:py-5 lg:py-4 bg-white/10 backdrop-blur-md border-3 border-white text-white font-helvetica font-black rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-base sm:text-lg lg:text-base min-h-[60px] sm:min-h-[64px] lg:min-h-[56px] opacity-100 w-full sm:w-auto">
                            <span class="drop-shadow-[0_1px_1px_rgba(15,76,130,0.35)]">Register Now</span>
                        </a>
                    @endguest
                </div>
            </div>

            <!-- RIGHT: Logo - HIDDEN ON MOBILE, VISIBLE FROM LG (Desktop tetap sama) -->
            <div class="hidden lg:flex items-center justify-center lg:flex-1 gsap-hero-logo-wrapper">
                <div class="relative">
                    <!-- Glow Effect -->
                    <div class="gsap-hero-glow absolute -inset-8 bg-white/20 backdrop-blur-md rounded-full blur-2xl"></div>

                    <!-- Main Logo Container -->
                    <div class="gsap-hero-logo-container relative bg-white/10 backdrop-blur-md border-4 border-white/40 rounded-full p-10 lg:p-12 shadow-2xl">
                        <img src="{{ asset('assets/svg/LOGO.svg') }}"
                             alt="Logo"
                             class="gsap-hero-logo w-64 h-64 lg:w-72 lg:h-72 xl:w-80 xl:h-80 drop-shadow-2xl object-contain" />
                    </div>

                    <!-- Animated Rings -->
                    <div class="gsap-hero-ring-1 absolute inset-0 border-4 border-[#D3EB9F]/30 rounded-full"></div>
                    <div class="gsap-hero-ring-2 absolute -inset-4 border-2 border-dashed border-[#C5E6C9]/40 rounded-full"></div>
                </div>
            </div>

        </div>
    </div>

   <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full wave-svg" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- What is Section -->
<section id="about" class="py-20 sm:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Decorative Circles -->
    <div class="absolute top-20 right-20 w-64 h-64 bg-[#D3EB9F]/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl pulse-glow" style="animation-delay: 1.5s;"></div>
    
    <!-- Animated Background Elements -->
    <div class="gsap-morph absolute top-1/4 left-10 w-32 h-32 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-[30%_70%_70%_30%/30%_30%_70%_70%]"></div>
    <div class="gsap-morph absolute bottom-1/4 right-10 w-40 h-40 bg-gradient-to-br from-[#6F97B6]/20 to-[#0F4C82]/20 rounded-[70%_30%_30%_70%/70%_70%_30%_30%]"></div>
    
    <!-- Multiple Sparkles -->
    <div class="sparkle-float absolute top-20 left-20 w-10 sm:w-12 h-10 sm:h-12 opacity-50" style="--float-duration: 4.5s; --float-delay: 0s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-40 right-40 w-11 sm:w-14 h-11 sm:h-14 opacity-60" style="--float-duration: 5.5s; --float-delay: 0.6s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float absolute bottom-40 left-1/3 w-8 sm:w-10 h-8 sm:h-10 opacity-55" style="--float-duration: 4.8s; --float-delay: 0.9s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute bottom-32 right-1/4 w-12 sm:w-16 h-12 sm:h-16 opacity-65" style="--float-duration: 6s; --float-delay: 1.2s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            
            
            <!-- Title with Split Text Animation -->
            <h2 class="gsap-title text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6 overflow-hidden">
                <span class="gsap-title-word inline-block">What</span>
                <span class="gsap-title-word inline-block">is</span>
                <span class="gsap-title-word inline-block">BOREYES</span>
                <span class="gsap-title-word inline-block">2026?</span>
            </h2>
            
            <!-- Animated Divider -->
            <div class="gsap-divider-container flex justify-center items-center gap-2 mb-8">
                <div class="gsap-divider-line w-12 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] rounded-full shadow-md"></div>
                <div class="gsap-divider-circle w-2 h-2 bg-[#0F4C82] rounded-full"></div>
                <div class="gsap-divider-line w-12 h-1.5 bg-gradient-to-r from-[#D3EB9F] to-[#6F97B6] rounded-full shadow-md"></div>
            </div>
            
            <!-- Description with Highlight Animation -->
            <div class="gsap-description relative max-w-3xl mx-auto">
                <!-- Decorative Quote Marks -->
                <div class="gsap-quote-left absolute -top-4 -left-4 text-6xl text-[#D3EB9F]/30 font-serif">"</div>
                <div class="gsap-quote-right absolute -bottom-4 -right-4 text-6xl text-[#D3EB9F]/30 font-serif">"</div>
                
                <p class="gsap-text text-base sm:text-lg text-[#6B7280] text-justify leading-relaxed font-garet relative z-10 p-6 bg-white/50 backdrop-blur-sm rounded-2xl shadow-lg border border-[#D3EB9F]/20">
                    <span class="gsap-highlight-text">BOREYES International Energy Fair is the largest annual event organized by SPE Unpad SC, focusing on energy-related competitions and supporting non-competition activities.</span> 
                    <span class="gsap-highlight-text">The competitions serve as a platform for individuals and teams to develop and present innovative solutions addressing zero carbon emissions, energy production, efficiency, and sustainability, while promoting technological advancement in the energy sector.</span>
                </p>
            </div>
            
            
        </div>
    </div>
</section>

<!-- Grand Theme -->
<section id="grand-theme" class="py-20 sm:py-28 bg-white scroll-mt-20 relative overflow-hidden">
    <!-- Palm Shadow Overlay -->
    <div class="absolute top-0 right-0 w-1/3 h-96 opacity-10 pointer-events-none palm-sway" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-40 left-10 w-72 h-72 bg-[#C5E6C9]/10 rounded-full blur-3xl pulse-glow"></div>
    
    <!-- Animated Blob Shapes -->
    <div class="gsap-blob absolute top-20 right-20 w-48 h-48 bg-gradient-to-br from-[#D3EB9F]/10 to-[#6F97B6]/10 rounded-[40%_60%_70%_30%/40%_50%_60%_50%]"></div>
    
    <!-- Multiple Sparkles -->
    <div class="sparkle-float absolute top-32 right-20 w-11 sm:w-14 h-11 sm:h-14 opacity-60" style="--float-duration: 5s; --float-delay: 0s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float absolute bottom-40 left-32 w-10 sm:w-12 h-10 sm:h-12 opacity-55" style="--float-duration: 4.5s; --float-delay: 0.8s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-1/2 left-1/4 w-8 sm:w-10 h-8 sm:h-10 opacity-50" style="--float-duration: 5.5s; --float-delay: 1.1s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            
            
            <!-- Title with Gradient Animation -->
            <h2 class="gsap-grand-title text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter mb-6 overflow-hidden">
                <span class="gsap-grand-word inline-block bg-gradient-to-r from-[#0F4C82] via-[#6F97B6] to-[#0F4C82] bg-clip-text text-transparent bg-[length:200%_100%]">Grand</span>
                <span class="gsap-grand-word inline-block bg-gradient-to-r from-[#0F4C82] via-[#6F97B6] to-[#0F4C82] bg-clip-text text-transparent bg-[length:200%_100%]">Theme</span>
                <span class="gsap-grand-word inline-block bg-gradient-to-r from-[#0F4C82] via-[#6F97B6] to-[#0F4C82] bg-clip-text text-transparent bg-[length:200%_100%]">2026</span>
            </h2>
            
            <!-- Theme Quote with Typewriter Effect -->
            <div class="gsap-theme-quote-container relative mb-10">
                <!-- Decorative Lines -->
                <div class="gsap-deco-line-left absolute left-0 top-1/2 w-0 h-0.5 bg-gradient-to-r from-transparent to-[#D3EB9F]"></div>
                <div class="gsap-deco-line-right absolute right-0 top-1/2 w-0 h-0.5 bg-gradient-to-l from-transparent to-[#D3EB9F]"></div>
                
                <div class="gsap-theme-box relative bg-gradient-to-br from-[#C5E6C9]/10 via-white to-[#D3EB9F]/10 p-8 rounded-3xl border-2 border-[#D3EB9F]/40 shadow-2xl backdrop-blur-sm">
                    <p class="gsap-theme-text text-xl sm:text-2xl font-semibold text-[#0F4C82] font-garet leading-relaxed relative z-10">
                        "Paving the way with ingenuity toward a smarter and sustainable energy future"
                    </p>
                    
                    <!-- Animated Accent Marks -->
                    <div class="gsap-accent-top absolute -top-3 -left-4 w-12 h-12 border-t-4 border-l-4 border-[#D3EB9F] rounded-tl-2xl"></div>
                    <div class="gsap-accent-bottom absolute -bottom-3 -right-4 w-12 h-12 border-b-4 border-r-4 border-[#6F97B6] rounded-br-2xl"></div>

            </div>
            
            
        </div>
    </div>
</section>

<!-- Logo & Mascot Section -->
<section id="logo-mascot" class="py-20 sm:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Multiple Sparkles -->
    <div class="sparkle-float absolute top-20 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-60" style="--float-duration: 5s; --float-delay: 0s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-40 right-32 w-12 sm:w-16 h-12 sm:h-16 opacity-65" style="--float-duration: 5.5s; --float-delay: 0.5s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Logo & Mascot
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
        </div>

        <!-- Side by Side Flip Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 max-w-6xl mx-auto">
            
            <!-- Logo Flip Card -->
            <div class="flip-card h-[400px] sm:h-[450px] scroll-reveal" style="--reveal-delay: 0.1s;">
                <div class="flip-card-inner">
                    <!-- Front Side -->
                    <div class="flip-card-front">
                        <div class="relative h-full bg-gradient-to-br from-[#0F4C82]/95 via-[#6F97B6]/90 to-[#8CCDCF]/85 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl border border-white/20">
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-md"></div>
                            <div class="absolute -top-20 -left-20 w-40 h-40 bg-white/20 rounded-full blur-3xl"></div>
                            
                            <div class="relative h-full flex flex-col items-center justify-center p-8">
                                <div class="absolute top-6 left-6 inline-flex items-center space-x-2 px-4 py-2 bg-white/20 backdrop-blur-md rounded-full border border-white/30">
                                    <div class="w-2 h-2 rounded-full bg-[#D3EB9F] pulse-dot"></div>
                                    <span class="text-xs font-helvetica font-bold text-white/90 uppercase tracking-wider">Official Logo</span>
                                </div>
                                
                                <img src="{{ asset('assets/svg/LOGO.svg') }}" alt="Event Logo" class="w-full h-auto max-w-[280px] max-h-[280px] object-contain drop-shadow-2xl mb-8 logo-float">
                                
                                <div class="absolute bottom-6 left-0 right-0 flex justify-center">
                                    <div class="flex items-center space-x-2 text-white/80 text-sm bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full border border-white/30">
                                        <span class="font-garet">Click for details</span>
                                        <svg class="w-4 h-4 bounce-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Back Side -->
                    <div class="flip-card-back">
                        <div class="relative h-full bg-gradient-to-br from-[#C5E6C9] via-[#D3EB9F] to-[#D6EBDF] rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl border-2 border-[#0F4C82]/20">
                            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgba(15,76,130,0.3) 1px, transparent 0); background-size: 30px 30px;"></div>
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#0F4C82]/20 to-transparent rounded-bl-full"></div>
                            
                            <div class="relative h-full flex flex-col p-8 sm:p-10">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-2xl mb-6 shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>
                                
                                <h3 class="text-2xl sm:text-3xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4">
                                    Logo Name 2026
                                </h3>
                                
                                <p class="text-sm sm:text-base text-[#0F4C82]/90 font-garet leading-relaxed mb-6 flex-grow">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                
                                <div class="flex items-center justify-between pt-4 border-t-2 border-[#0F4C82]/20">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-3 h-3 rounded-full bg-[#0F4C82] shadow-lg"></div>
                                        <span class="text-sm text-[#0F4C82] font-garet font-bold">Official Logo 2026</span>
                                    </div>
                                    <button class="text-[#0F4C82]/70 hover:text-[#0F4C82] transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mascot Flip Card -->
            <div class="flip-card h-[400px] sm:h-[450px] scroll-reveal" style="--reveal-delay: 0.2s;">
                <div class="flip-card-inner">
                    <!-- Front Side -->
                    <div class="flip-card-front">
                        <div class="relative h-full bg-gradient-to-bl from-[#8CCDCF]/85 via-[#6F97B6]/90 to-[#0F4C82]/95 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl border border-white/20">
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-md"></div>
                            <div class="absolute -top-20 -right-20 w-40 h-40 bg-white/20 rounded-full blur-3xl"></div>
                            
                            <div class="relative h-full flex flex-col items-center justify-center p-8">
                                <div class="absolute top-6 right-6 inline-flex items-center space-x-2 px-4 py-2 bg-white/20 backdrop-blur-md rounded-full border border-white/30">
                                    <div class="w-2 h-2 rounded-full bg-[#D3EB9F] pulse-dot"></div>
                                    <span class="text-xs font-helvetica font-bold text-white/90 uppercase tracking-wider">Official Mascot</span>
                                </div>
                                
                                <img src="{{ asset('assets/svg/MATA.svg') }}" alt="Event Mascot" class="w-full h-auto max-w-[280px] max-h-[280px] object-contain drop-shadow-2xl mb-8 mascot-bounce">
                                
                                <div class="absolute bottom-6 left-0 right-0 flex justify-center">
                                    <div class="flex items-center space-x-2 text-white/80 text-sm bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full border border-white/30">
                                        <span class="font-garet">Click for details</span>
                                        <svg class="w-4 h-4 bounce-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Back Side -->
                    <div class="flip-card-back">
                        <div class="relative h-full bg-gradient-to-bl from-[#D6EBDF] via-[#8CCDCF] to-[#C5E6C9] rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl border-2 border-[#0F4C82]/20">
                            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgba(15,76,130,0.3) 1px, transparent 0); background-size: 30px 30px;"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-[#0F4C82]/20 to-transparent rounded-tr-full"></div>
                            
                            <div class="relative h-full flex flex-col p-8 sm:p-10">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-2xl mb-6 shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </div>
                                
                                <h3 class="text-2xl sm:text-3xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4">
                                    Mascot Name
                                </h3>
                                
                                <p class="text-sm sm:text-base text-[#0F4C82]/90 font-garet leading-relaxed mb-6 flex-grow">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                
                                <div class="flex items-center justify-between pt-4 border-t-2 border-[#0F4C82]/20">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-3 h-3 rounded-full bg-[#0F4C82] shadow-lg"></div>
                                        <span class="text-sm text-[#0F4C82] font-garet font-bold">Official Mascot 2026</span>
                                    </div>
                                    <button class="text-[#0F4C82]/70 hover:text-[#0F4C82] transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    
<!-- Team Profile - FINAL VERSION -->
<section id="team-profile" class="py-16 sm:py-20 bg-white scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-[#0F4C82]/5 via-transparent to-[#D3EB9F]/5"></div>
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgba(15,76,130,0.05) 1px, transparent 0); background-size: 40px 40px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 scroll-reveal">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Team Profile
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-6 rounded-full shadow-md"></div>
            <p class="text-sm sm:text-base text-[#6B7280] max-w-2xl mx-auto font-garet">
                BOREYES 2026 Organization Structure
            </p>
        </div>

        <!-- ========== DESKTOP VERSION ========== -->
        <div class="hidden lg:block max-w-6xl mx-auto">
            <!-- Level 1: PO & SV -->
            <div class="flex justify-center gap-4 mb-6">
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.1s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                 <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs uppercase text-[#D3EB9F] font-helvetica font-bold">PO</p>
                                <h3 class="text-base font-helvetica font-black text-white">Project Officer</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group scroll-reveal" style="--reveal-delay: 0.2s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                               <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs uppercase text-white/90 font-helvetica font-bold">SV</p>
                                <h3 class="text-base font-helvetica font-black text-white">Supervisor</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vertical Line Down -->
            <div class="flex justify-center mb-0">
                <div class="w-0.5 h-8 bg-gradient-to-b from-[#8CCDCF] to-[#D3EB9F] line-grow"></div>
            </div>

            <!-- Horizontal Line Level 2 with branches -->
            <div class="relative h-12 mb-0">
                <div class="absolute left-0 right-0 top-0 h-0.5 bg-[#D3EB9F]"></div>
                <!-- Lines down to Level 2 boxes (4 cards) -->
                <div class="absolute left-[12.5%] top-0 w-0.5 h-12 bg-[#D3EB9F]"></div>
                <div class="absolute left-[37.5%] top-0 w-0.5 h-12 bg-[#D3EB9F]"></div>
                <div class="absolute left-[62.5%] top-0 w-0.5 h-12 bg-[#D3EB9F]"></div>
                <div class="absolute left-[87.5%] top-0 w-0.5 h-12 bg-[#D3EB9F]"></div>
            </div>

            <!-- Level 2: VPO 1, VPO 2, Treasurer, Secretary (NO OPERATIONAL) -->
            <div class="grid grid-cols-4 gap-3 mb-0">
                <!-- VPO 1 -->
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.3s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                               <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Vice PO 1</p>
                            <h4 class="text-sm font-helvetica font-black text-[#0F4C82]">VPO 1</h4>
                        </div>
                    </div>
                </div>

                <!-- VPO 2 -->
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.4s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Vice PO 2</p>
                            <h4 class="text-sm font-helvetica font-black text-[#0F4C82]">VPO 2</h4>
                        </div>
                    </div>
                </div>

                <!-- Treasurer - SAME COLOR AS VPO -->
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.5s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Treasurer</p>
                            <h4 class="text-xs font-helvetica font-black text-[#0F4C82]">Treasurer 1&2</h4>
                        </div>
                    </div>
                </div>

                <!-- Secretary - SAME COLOR AS VPO -->
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.6s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Secretary</p>
                            <h4 class="text-xs font-helvetica font-black text-[#0F4C82]">Secretary 1&2</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SPACING -->
            <div class="h-8"></div>

            <!-- Branching Lines to Level 3 -->
            <div class="relative h-12 mt-0 mb-0">
                <div class="absolute left-0 right-0 top-0 h-0.5 bg-[#D3EB9F]"></div>
                
                <!-- VPO 1 (12.5%) splits to Internal (3%) & Competition (22%) - SHIFT MORE LEFT -->
                <div class="absolute left-[12.5%] top-0 w-0.5 h-6 bg-[#D3EB9F]"></div>
                <div class="absolute left-[5%] top-6 w-[19%] h-0.5 bg-[#D3EB9F]"></div>
                <div class="absolute left-[5%] top-6 w-0.5 h-6 bg-[#D3EB9F]"></div>
                <div class="absolute left-[24%] top-6 w-0.5 h-6 bg-[#D3EB9F]"></div>
                
                <!-- VPO 2 (37.5%) straight to External (37.5%) -->
                <div class="absolute left-[37.5%] top-0 w-0.5 h-6 bg-[#D3EB9F]"></div>
                <div class="absolute left-[37.5%] top-6 w-[5%] h-0.5 bg-[#D3EB9F]"></div>
                <div class="absolute left-[42.5%] top-6 w-0.5 h-6 bg-[#D3EB9F]"></div>
                
                <!-- CENTER LINE (50%) straight to Operational (62.5%) -->
                <div class="absolute left-[50%] top-0 w-0.5 h-8 bg-[#D3EB9F]"></div>
                <div class="absolute left-[50%] top-8 w-[17.5%] h-0.5 bg-[#D3EB9F]"></div>
                <div class="absolute left-[67.5%] top-8 w-0.5 h-[18px] bg-[#D3EB9F]"></div>

                                    
                <!-- Treasurer (62.5%) straight to Fundraising (82%) -->
                <div class="absolute left-[62.5%] top-0 w-0.5 h-5 bg-[#D3EB9F]"></div>
                <div class="absolute left-[62.5%] top-5 w-[28%] h-0.5 bg-[#D3EB9F]"></div> 
                <div class="absolute left-[90.5%] top-5 w-0.5 h-7 bg-[#D3EB9F]"></div>
                
            </div>

            <!-- Level 3: Divisions - ADJUSTED POSITIONS -->
            <div class="flex items-start gap-3 max-w-6xl mx-auto">
                <!-- Internal - SHIFT MORE LEFT (~3%) -->
                <div class="w-[16%] group relative scroll-reveal" style="margin-left: 0; --reveal-delay: 0.7s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Internal</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                    </div>
                </div>

                <!-- Competition - (~22%) -->
                <div class="w-[16%] group relative scroll-reveal" style="--reveal-delay: 0.8s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                           <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Competition</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                    </div>
                </div>

                <!-- External - (~42%) FROM VPO 2 -->
                <div class="w-[16%] group relative md:translate-x-14 scroll-reveal" style="--reveal-delay: 0.9s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">External</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                    </div>
                </div>

                 <!-- Operational - (60%) FROM CENTER -->
                <div class="w-[16%] group relative md:translate-x-28">
                    <div class="scroll-reveal" style="--reveal-delay: 1s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Operational</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                    </div>
                    </div>
                </div>

                <!-- Fundraising - (~82%) -->
                <div class="w-[16%] group relative md:translate-x-44">
                 <div class="scroll-reveal" style="--reveal-delay: 1.1s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                           <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Fundraising</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- ========== MOBILE VERSION ========== -->
        <div class="block lg:hidden max-w-md mx-auto space-y-6">
            <!-- Level 1: PO & SV -->
            <div class="space-y-4">
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.1s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs uppercase text-[#D3EB9F] font-helvetica font-bold">PO</p>
                                <h3 class="text-base font-helvetica font-black text-white">Project Officer</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group scroll-reveal" style="--reveal-delay: 0.2s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                 <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs uppercase text-white/90 font-helvetica font-bold">SV</p>
                                <h3 class="text-base font-helvetica font-black text-white">Supervisor</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Line Down -->
            <div class="flex justify-center">
                <div class="w-0.5 h-8 bg-gradient-to-b from-[#8CCDCF] to-[#D3EB9F]"></div>
            </div>

            <!-- Level 2: Management (2x2 Grid) -->
            <div class="grid grid-cols-2 gap-3">
                <div class="relative group scroll-reveal" style="--reveal-delay: 0.3s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                              <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Vice PO 1</p>
                            <h4 class="text-sm font-helvetica font-black text-[#0F4C82]">VPO 1</h4>
                        </div>
                    </div>
                </div>

                <div class="relative group scroll-reveal" style="--reveal-delay: 0.4s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Vice PO 2</p>
                            <h4 class="text-sm font-helvetica font-black text-[#0F4C82]">VPO 2</h4>
                        </div>
                    </div>
                </div>

                <div class="relative group scroll-reveal" style="--reveal-delay: 0.5s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                               <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Treasurer</p>
                            <h4 class="text-xs font-helvetica font-black text-[#0F4C82]">Treasurer 1&2</h4>
                        </div>
                    </div>
                </div>

                <div class="relative group scroll-reveal" style="--reveal-delay: 0.6s;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                 <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Secretary</p>
                            <h4 class="text-xs font-helvetica font-black text-[#0F4C82]">Secretary 1&2</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Line Down to Operational -->
            <div class="flex justify-center">
                <div class="w-0.5 h-8 bg-[#D3EB9F]"></div>
            </div>

            <!-- Operational (Center) -->
            <div class="group relative max-w-xs mx-auto scroll-reveal" style="--reveal-delay: 0.7s;">
                <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                    <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                         <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                         </svg>
                    </div>
                    <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Operational</p>
                    <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                </div>
            </div>

            <!-- SECTIONS FOR DIVISIONS -->
            <div class="space-y-8 pt-4">
                <!-- VPO 1 Divisions -->
                <div>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-px bg-[#D3EB9F] flex-1"></div>
                        <span class="text-xs font-helvetica font-bold text-[#0F4C82] px-3 bg-[#D3EB9F]/20 rounded-full py-1">VPO 1 Divisions</span>
                        <div class="h-px bg-[#D3EB9F] flex-1"></div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="group relative scroll-reveal" style="--reveal-delay: 0.8s;">
                            <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                                <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                </div>
                                <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Internal</p>
                                <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                            </div>
                        </div>

                        <div class="group relative scroll-reveal" style="--reveal-delay: 0.9s;">
                            <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                                <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                    <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Competition</p>
                                <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VPO 2 Division -->
                <div>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-px bg-[#D3EB9F] flex-1"></div>
                        <span class="text-xs font-helvetica font-bold text-[#0F4C82] px-3 bg-[#D3EB9F]/20 rounded-full py-1">VPO 2 Division</span>
                        <div class="h-px bg-[#D3EB9F] flex-1"></div>
                    </div>
                    <div class="group relative max-w-xs mx-auto scroll-reveal" style="--reveal-delay: 1s;">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                            <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">External</p>
                            <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                        </div>
                    </div>
                </div>

                <!-- Treasurer Division -->
                <div>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-px bg-[#D3EB9F] flex-1"></div>
                        <span class="text-xs font-helvetica font-bold text-[#0F4C82] px-3 bg-[#D3EB9F]/20 rounded-full py-1">Treasurer Division</span>
                        <div class="h-px bg-[#D3EB9F] flex-1"></div>
                    </div>
                    <div class="group relative max-w-xs mx-auto scroll-reveal" style="--reveal-delay: 1.1s;">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                            <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Fundraising</p>
                            <p class="text-xs text-[#6B7280] font-garet text-center">Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline - 7 EVENTS -->
<section id="timeline" class="py-20 sm:py-28 bg-gradient-to-b from-[#F8FBFC] to-white scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, #0F4C82 0, #0F4C82 1px, transparent 0, transparent 50%); background-size: 20px 20px;"></div>
    </div>
    
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-[#6F97B6]/20 to-transparent rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-gradient-to-tr from-[#D3EB9F]/20 to-transparent rounded-full blur-3xl pulse-glow" style="animation-delay: 1s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 scroll-reveal">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Timeline
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
            <!-- <p class="text-base sm:text-lg text-[#6B7280] max-w-2xl mx-auto font-garet">
                Lorem ipsum dolor sit amet consectetur adipiscing elit
            </p> -->
        </div>

        <div class="relative max-w-6xl mx-auto">
            <div class="absolute left-1/2 top-0 bottom-0 w-1 -ml-0.5 hidden lg:block overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-[#0F4C82] via-[#6F97B6] via-[#8CCDCF] to-[#D3EB9F] timeline-line"></div>
            </div>

            <div class="absolute left-6 top-0 bottom-0 w-1 bg-gradient-to-b from-[#0F4C82] via-[#6F97B6] via-[#8CCDCF] to-[#D3EB9F] lg:hidden"></div>

            <div class="space-y-12 sm:space-y-16">
                <!-- EVENT 1 -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.1s;">
                    <div class="lg:flex lg:items-center">
                        <div class="lg:w-1/2 lg:pr-12 lg:text-right hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md ml-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3 lg:flex-row-reverse">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 1</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">4 Maret 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Companies Talks</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 1</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">4 Maret 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Companies Talks</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-16 h-16 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full pulse-dot"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pl-12"></div>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.2s;">
                    <div class="lg:flex lg:items-center lg:flex-row-reverse">
                        <div class="lg:w-1/2 lg:pl-12 hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md mr-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#6F97B6]/20 hover:border-[#6F97B6]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 2</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">26 - 29 March 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Competition Prelimination Stage</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#6F97B6]/20 hover:border-[#6F97B6]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 2</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">26 - 29 March 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Competition Prelimination Stage</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-16 h-16 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full pulse-dot"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pr-12"></div>
                    </div>
                </div>

                <!-- EVENT 3 -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.3s;">
                    <div class="lg:flex lg:items-center">
                        <div class="lg:w-1/2 lg:pr-12 lg:text-right hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md ml-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#8CCDCF]/20 hover:border-[#8CCDCF]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3 lg:flex-row-reverse">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 3</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">28 March 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">CSR</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#8CCDCF]/20 hover:border-[#8CCDCF]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 3</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">28 March 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">CSR</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-16 h-16 bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-[#0F4C82] rounded-full pulse-dot"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pl-12"></div>
                    </div>
                </div>

                <!-- EVENT 4 -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.4s;">
                    <div class="lg:flex lg:items-center lg:flex-row-reverse">
                        <div class="lg:w-1/2 lg:pl-12 hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md mr-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#C5E6C9]/20 hover:border-[#C5E6C9]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 4</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">6 April 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Field Trip</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#C5E6C9]/20 hover:border-[#C5E6C9]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 4</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">6 April 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Field Trip</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-16 h-16 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-[#0F4C82] rounded-full pulse-dot"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pr-12"></div>
                    </div>
                </div>

                <!-- EVENT 5 -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.5s;">
                    <div class="lg:flex lg:items-center">
                        <div class="lg:w-1/2 lg:pr-12 lg:text-right hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md ml-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3 lg:flex-row-reverse">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 5</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">8 May 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Ignite Talks</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 5</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">8 May 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Ignite Talks</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-16 h-16 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full pulse-dot"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pl-12"></div>
                    </div>
                </div>

                <!-- EVENT 6 -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.6s;">
                    <div class="lg:flex lg:items-center lg:flex-row-reverse">
                        <div class="lg:w-1/2 lg:pl-12 hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md mr-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#6F97B6]/20 hover:border-[#6F97B6]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 6</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">9 May 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Competition Grand Final</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#6F97B6]/20 hover:border-[#6F97B6]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white text-xs font-black rounded-full font-helvetica shadow-lg">EVENT 6</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">9 May 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Competition Grand Final</h3>
                                    <!-- <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-16 h-16 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full pulse-dot"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pr-12"></div>
                    </div>
                </div>

                <!-- EVENT 7 - Grand Final -->
                <div class="relative scroll-reveal" style="--reveal-delay: 0.7s;">
                    <div class="lg:flex lg:items-center">
                        <div class="lg:w-1/2 lg:pr-12 lg:text-right hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md ml-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#D3EB9F] via-[#8CCDCF] to-[#0F4C82] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-2xl p-6 shadow-xl border-2 border-white/30 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3 lg:flex-row-reverse">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#D3EB9F] to-[#C5E6C9] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg sparkle-badge inline-flex items-center gap-1.5">
                                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                                            </svg>
                                            Main Event
                                        </span>
                                        <span class="text-white font-black text-sm font-helvetica">10 May 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-white mb-2">Fun Day and Gala Dinner</h3>
                                    <!-- <p class="text-sm text-white/80 font-garet">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#D3EB9F] via-[#8CCDCF] to-[#0F4C82] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-2xl p-5 shadow-xl border-2 border-white/30 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#D3EB9F] to-[#C5E6C9] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg sparkle-badge inline-flex items-center gap-1.5">
                                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                                            </svg>
                                            Main Event
                                        </span>
                                        <span class="text-white font-black text-sm font-helvetica">10 May 2026</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-white mb-2">Fun Day and Gala Dinner</h3>
                                    <!-- <p class="text-sm text-white/80 font-garet">Lorem ipsum dolor sit amet consectetur</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 top-8 w-20 h-20 bg-gradient-to-br from-[#D3EB9F] via-[#8CCDCF] to-[#0F4C82] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                            </svg>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pl-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 sm:py-32 bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
     <!-- Multiple Sparkles -->
    <div class="sparkle-float absolute top-20 right-20 w-14 sm:w-20 h-14 sm:h-20 opacity-80" style="--float-duration: 4s; --float-delay: 0s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_15px_rgba(211,235,159,0.9)]">
    </div>
    <div class="sparkle-float absolute top-1/3 right-1/4 w-14 sm:w-20 h-20 sm:h-20 opacity-70" style="--float-duration: 5s; --float-delay: 0.6s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_12px_rgba(111,151,182,0.9)]">
    </div>
    <div class="sparkle-float absolute bottom-1/5 left-1/4 translate-y-6 w-20 h-20 sm:w-20 sm:h-20 opacity-75" style="--float-duration: 4.5s; --float-delay: 0.3s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_14px_rgba(211,235,159,0.9)]">
    </div>

    <div class="sparkle-float absolute bottom-20 left-32 w-11 sm:w-14 h-11 sm:h-14 opacity-65" style="--float-duration: 5.5s; --float-delay: 1s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div class="scroll-reveal">
            <div class="inline-block mb-6">
                <span class="px-4 py-2 bg-white/20 backdrop-blur-md border-2 border-[#ffffff] text-[#ffffff] text-sm font-semibold rounded-full font-garet shadow-lg">
                    Join Us Now
                </span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter mb-6 drop-shadow-lg">
                Ready for #EyesOnTheFuture?
            </h2>
            <!-- <p class="text-base sm:text-lg md:text-xl mb-10 text-white/95 max-w-3xl mx-auto leading-relaxed font-garet drop-shadow-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!
            </p> -->
            <div class="flex flex-col sm:flex-row gap-5 justify-center mb-16">
            @guest    
            <a href="{{ route('register') }}" class="group inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-base font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 min-h-[60px]">
                    <svg class="w-6 h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span>Register Now</span>
                </a>
                @endguest
                
            <button onclick="scrollToNavAndOpenDropdown()" class="group inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-md border-3 border-white text-white text-base font-helvetica font-black rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 min-h-[60px] cursor-pointer">
                <svg class="w-6 h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>View Competitions</span>
            </button>

            </div>
        </div>
    </div>
</section>

@endsection
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* ==================== FONT CLASSES ==================== */
        .font-helvetica {
            font-family: 'Helvetica', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .font-garet {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* ==================== CONTINUOUS FLOATING ANIMATIONS ==================== */
        @keyframes sparkle-float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg); 
                opacity: var(--base-opacity, 0.7);
            }
            25% { 
                transform: translateY(-15px) rotate(5deg); 
                opacity: calc(var(--base-opacity, 0.7) + 0.1);
            }
            50% { 
                transform: translateY(-25px) rotate(0deg); 
                opacity: var(--base-opacity, 0.7);
            }
            75% { 
                transform: translateY(-15px) rotate(-5deg); 
                opacity: calc(var(--base-opacity, 0.7) + 0.15);
            }
        }

        .sparkle-float {
            animation: sparkle-float var(--float-duration, 5s) ease-in-out infinite;
            animation-delay: var(--float-delay, 0s);
            will-change: transform, opacity;
        }

        /* Palm Shadow Sway */
        @keyframes palm-sway {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(3deg); }
        }

        @keyframes palm-sway-reverse {
            0%, 100% { transform: scaleX(-1) rotate(0deg); }
            50% { transform: scaleX(-1) rotate(-3deg); }
        }

        .palm-sway {
            animation: palm-sway 10s ease-in-out infinite;
            transform-origin: top center;
        }

        .palm-sway-reverse {
            animation: palm-sway-reverse 12s ease-in-out infinite;
            transform-origin: top center;
        }

        /* Pulse Glow */
        @keyframes pulse-glow {
            0%, 100% { 
                opacity: 0.5; 
                transform: scale(1); 
            }
            50% { 
                opacity: 0.8; 
                transform: scale(1.05); 
            }
        }

        .pulse-glow {
            animation: pulse-glow 4s ease-in-out infinite;
        }

        /* Pulse Dot */
        @keyframes pulse-dot {
            0%, 100% { 
                transform: scale(1); 
                opacity: 1;
            }
            50% { 
                transform: scale(1.5); 
                opacity: 0.5;
            }
        }

        .pulse-dot {
            animation: pulse-dot 2s ease-in-out infinite;
        }

        /* Icon Bounce */
        @keyframes icon-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .icon-bounce {
            animation: icon-bounce 3s ease-in-out infinite;
        }

        /* Logo Float */
        @keyframes logo-float {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-10px) scale(1.02); }
        }

        .logo-float {
            animation: logo-float 4s ease-in-out infinite;
        }

        /* Mascot Bounce */
        @keyframes mascot-bounce {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-8px) rotate(2deg); }
            75% { transform: translateY(-8px) rotate(-2deg); }
        }

        .mascot-bounce {
            animation: mascot-bounce 3s ease-in-out infinite;
        }

        /* Bounce Arrow */
        @keyframes bounce-arrow {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(5px); }
        }

        .bounce-arrow {
            animation: bounce-arrow 1.5s ease-in-out infinite;
        }

        /* Timeline Animations */
        @keyframes timeline-draw {
            from { transform: scaleY(0); }
            to { transform: scaleY(1); }
        }

        .timeline-line {
            transform-origin: top;
            animation: timeline-draw 2s ease-out forwards;
        }

        @keyframes timeline-pop {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .timeline-dot {
            animation: timeline-pop 0.5s ease-out forwards;
        }

        @keyframes final-glow {
            0%, 100% { 
                box-shadow: 0 0 20px rgba(211, 235, 159, 0.5), 0 0 40px rgba(140, 205, 207, 0.3);
            }
            50% { 
                box-shadow: 0 0 30px rgba(211, 235, 159, 0.8), 0 0 60px rgba(140, 205, 207, 0.5);
            }
        }

        .final-dot {
            animation: timeline-pop 0.5s ease-out forwards, final-glow 2s ease-in-out infinite;
        }

        /* Sparkle Badge */
        @keyframes sparkle-badge {
            0%, 100% { box-shadow: 0 4px 15px rgba(211, 235, 159, 0.4); }
            50% { box-shadow: 0 4px 25px rgba(211, 235, 159, 0.8); }
        }

        .sparkle-badge {
            animation: sparkle-badge 2s ease-in-out infinite;
        }

        /* ==================== SCROLL REVEAL ANIMATIONS ==================== */
        @keyframes reveal-up {
            from { 
                opacity: 0; 
                transform: translateY(40px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        @keyframes reveal-left {
            from { 
                opacity: 0; 
                transform: translateX(-40px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }

        @keyframes reveal-right {
            from { 
                opacity: 0; 
                transform: translateX(40px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(40px);
        }

        .scroll-reveal.revealed {
            animation: reveal-up 0.8s ease-out forwards;
            animation-delay: var(--reveal-delay, 0s);
        }

        /* Hover Effects */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px rgba(15, 76, 130, 0.15);
        }

        /* ==================== FLIP CARD STYLES - IMPROVED ==================== */
        .flip-card {
            perspective: 1000px;
            cursor: pointer;
            -webkit-tap-highlight-color: transparent; /* Remove blue highlight on mobile */
            touch-action: manipulation; /* Improve touch response */
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1); /* Smoother easing */
            transform-style: preserve-3d;
        }

        /* Flipped state */
        .flip-card.flipped .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1.5rem;
        }

        .flip-card-front {
            z-index: 2;
            transform: rotateY(0deg);
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }

        /* Hover effect for desktop */
        @media (hover: hover) and (pointer: fine) {
            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }
            
            .flip-card.flipped:hover .flip-card-inner {
                transform: rotateY(180deg);
            }
        }

        /* Mobile specific improvements */
        @media (max-width: 1024px) {
            .flip-card {
                user-select: none;
                -webkit-user-select: none;
            }
            
            /* Disable hover on mobile */
            .flip-card:hover .flip-card-inner {
                transform: none;
            }
            
            .flip-card.flipped .flip-card-inner {
                transform: rotateY(180deg);
            }
            
            /* Active state feedback */
            .flip-card:active {
                opacity: 0.9;
            }
        }

        /* Ensure smooth performance */
        .flip-card-inner,
        .flip-card-front,
        .flip-card-back {
            will-change: transform;
        }

        /* Remove will-change after animation completes */
        .flip-card-inner.animation-complete {
            will-change: auto;
        }
        /* ==================== GRADIENT ANIMATIONS ==================== */
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient-shift 5s ease infinite;
        }

        /* ==================== SHOOTING STARS ==================== */
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

        /* Shooting star positions */
        .shooting-star-1 { top: 2%; left: 8%; animation: shooting-star 2.5s linear infinite; animation-delay: 0s; }
        .shooting-star-2 { top: 5%; left: 25%; animation: shooting-star 2.5s linear infinite; animation-delay: 3.5s; }
        .shooting-star-3 { top: 3%; left: 45%; animation: shooting-star 2.5s linear infinite; animation-delay: 7s; }
        .shooting-star-4 { top: 6%; left: 62%; animation: shooting-star 2.5s linear infinite; animation-delay: 10.5s; }
        .shooting-star-5 { top: 4%; left: 78%; animation: shooting-star 2.5s linear infinite; animation-delay: 14s; }
        .shooting-star-6 { top: 7%; left: 15%; animation: shooting-star 2.5s linear infinite; animation-delay: 17.5s; }
        .shooting-star-7 { top: 8%; left: 35%; animation: shooting-star 2.5s linear infinite; animation-delay: 21s; }
        .shooting-star-8 { top: 5%; left: 55%; animation: shooting-star 2.5s linear infinite; animation-delay: 24.5s; }
        .shooting-star-9 { top: 6%; left: 72%; animation: shooting-star 2.5s linear infinite; animation-delay: 28s; }
        .shooting-star-10 { top: 4%; left: 88%; animation: shooting-star 2.5s linear infinite; animation-delay: 31.5s; }

        /* ==================== UTILITY CLASSES ==================== */
        .animation-delay-200 { animation-delay: 200ms; }
        .animation-delay-400 { animation-delay: 400ms; }
        .animation-delay-600 { animation-delay: 600ms; }
        
        /* Sparkle sizes */
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

        /* ==================== MOBILE RESPONSIVE ==================== */
        @media (max-width: 768px) {
            @keyframes shooting-star {
                0% { opacity: 0; }
                0.1% { opacity: 1; transform: translateX(-80px) translateY(-80px); }
                70% { opacity: 1; }
                100% { opacity: 0; transform: translateX(500px) translateY(500px); }
            }

            .shooting-star::before {
                width: 60px;
                transform: translateX(-60px) translateY(1px) rotate(45deg);
            }

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

        @media (hover: none) {
            .flip-card:active .flip-card-inner {
                transform: rotateY(180deg);
            }
        }

        @media (max-width: 1024px) {
            .flip-card {
                -webkit-tap-highlight-color: transparent;
            }
        }

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
<body>
 
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') {
        console.warn('GSAP not loaded for Hero Section');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // ============================================
    // HERO SECTION ANIMATIONS
    // ============================================

    // 1. SPARKLES - Enhanced Float Animation
    const sparkles = document.querySelectorAll('.gsap-sparkle');
    if (sparkles.length > 0) {
        sparkles.forEach((sparkle, index) => {
            // Initial entrance
            gsap.from(sparkle, {
                scale: 0,
                opacity: 0,
                rotation: 360,
                duration: 1,
                delay: index * 0.1,
                ease: 'back.out(2)'
            });

            // Continuous gentle rotation
            gsap.to(sparkle, {
                rotation: 360,
                duration: 20 + (index * 2),
                ease: 'none',
                repeat: -1
            });

            // Additional subtle scale pulse
            gsap.to(sparkle, {
                scale: 1.1,
                duration: 2 + (index * 0.2),
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
        });
    }

    // 2. TITLE LETTERS - Stagger Animation
    const heroLetters = document.querySelectorAll('.gsap-hero-letter');
    if (heroLetters.length > 0) {
        gsap.from(heroLetters, {
            y: 100,
            opacity: 0,
            rotationX: -90,
            stagger: 0.05,
            duration: 1,
            ease: 'back.out(1.7)',
            delay: 0.3
        });

        // Subtle bounce on hover (desktop only)
        if (window.innerWidth >= 1024) {
            heroLetters.forEach(letter => {
                letter.addEventListener('mouseenter', () => {
                    gsap.to(letter, {
                        y: -10,
                        duration: 0.3,
                        ease: 'power2.out'
                    });
                });
                
                letter.addEventListener('mouseleave', () => {
                    gsap.to(letter, {
                        y: 0,
                        duration: 0.3,
                        ease: 'power2.out'
                    });
                });
            });
        }
    }

    // 3. DIVIDER LINE - Scale from center
    const heroDivider = document.querySelector('.gsap-hero-divider');
    if (heroDivider) {
        gsap.from(heroDivider, {
            scaleX: 0,
            opacity: 0,
            duration: 1,
            delay: 1.2,
            ease: 'power3.out'
        });

        // Pulse effect
        gsap.to(heroDivider, {
            scaleX: 1.05,
            opacity: 1,
            duration: 2,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    }

    // 4. TAGLINE - Fade and slide up
    const heroTagline = document.querySelector('.gsap-hero-tagline');
    if (heroTagline) {
        gsap.from(heroTagline, {
            y: 30,
            opacity: 0,
            duration: 1,
            delay: 1.5,
            ease: 'power2.out'
        });

        // Gentle glow pulse
        gsap.to(heroTagline, {
            textShadow: '0 0 20px rgba(211, 235, 159, 0.8)',
            duration: 2,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    }

    // 5. BUTTONS - Stagger entrance with bounce - PERBAIKAN
const btnPrimary = document.querySelector('.gsap-hero-btn-primary');
const btnSecondary = document.querySelector('.gsap-hero-btn-secondary');

if (btnPrimary) {
    // Set initial state explicitly
    gsap.set(btnPrimary, { 
        opacity: 1,  // Pastikan visible dulu
        y: 0,
        scale: 1
    });
    
    // Then animate from hidden state
    gsap.fromTo(btnPrimary, 
        {
            y: 50,
            opacity: 0,
            scale: 0.8
        },
        {
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 0.8,
            delay: 1.8,
            ease: 'back.out(1.7)'
        }
    );
}

if (btnSecondary) {
    // Set initial state explicitly
    gsap.set(btnSecondary, { 
        opacity: 1,
        y: 0,
        scale: 1
    });
    
    // Then animate from hidden state
    gsap.fromTo(btnSecondary,
        {
            y: 50,
            opacity: 0,
            scale: 0.8
        },
        {
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 0.8,
            delay: 2,
            ease: 'back.out(1.7)'
        }
    );
}

   // ==========================================
    // LOGO ANIMATIONS - Mobile & Desktop
    // ==========================================
    
    // Function untuk animate logo (dipakai untuk mobile dan desktop)
    function animateLogo(wrapperSelector) {
        const logoWrapper = document.querySelector(wrapperSelector);
        if (!logoWrapper) return;

        // Logo container entrance
        const logoContainer = logoWrapper.querySelector('.gsap-hero-logo-container');
        if (logoContainer) {
            gsap.from(logoContainer, {
                scale: 0,
                rotation: -180,
                opacity: 0,
                duration: 1.5,
                delay: 0.5,
                ease: 'elastic.out(1, 0.6)'
            });
        }

        // Logo image subtle float
        const logo = logoWrapper.querySelector('.gsap-hero-logo');
        if (logo) {
            gsap.to(logo, {
                y: -15,
                rotation: 5,
                duration: 3,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
        }

        // Glow effect pulse
        const glow = logoWrapper.querySelector('.gsap-hero-glow');
        if (glow) {
            gsap.to(glow, {
                scale: 1,
                opacity: 0.4,
                duration: 2,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
        }

        // Ring 1 - Pulse
        const ring1 = logoWrapper.querySelector('.gsap-hero-ring-1');
        if (ring1) {
            gsap.from(ring1, {
                scale: 0.5,
                opacity: 0,
                duration: 1,
                delay: 1.2,
                ease: 'back.out(2)'
            });

            gsap.to(ring1, {
                scale: 1.1,
                opacity: 0.3,
                duration: 2.5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
        }

        // Ring 2 - Rotate continuously
        const ring2 = logoWrapper.querySelector('.gsap-hero-ring-2');
        if (ring2) {
            gsap.from(ring2, {
                scale: 0.5,
                opacity: 0,
                duration: 1,
                delay: 1.4,
                ease: 'back.out(2)'
            });

            gsap.to(ring2, {
                rotation: 360,
                duration: 20,
                ease: 'none',
                repeat: -1
            });
        }
    }

    // Apply animation to DESKTOP logo
    if (window.innerWidth >= 1024) {
        animateLogo('.gsap-hero-logo-wrapper');
    }

    // Apply animation to MOBILE logo
    if (window.innerWidth < 1024) {
        animateLogo('.gsap-hero-logo-wrapper-mobile');
    }

    // 7. WAVE DIVIDER - Subtle movement
    const wave = document.querySelector('.gsap-wave');
    if (wave) {
        gsap.from(wave, {
            y: 50,
            opacity: 0,
            duration: 1.5,
            delay: 0.5,
            ease: 'power2.out'
        });

        // Gentle wave motion
        gsap.to(wave, {
            x: 10,
            duration: 4,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    }

    // 8. PALM SHADOWS - Sway enhancement
    const palmRight = document.querySelector('.gsap-palm-right');
    const palmLeft = document.querySelector('.gsap-palm-left');
    
    if (palmRight) {
        gsap.to(palmRight, {
            x: 10,
            y: -5,
            duration: 8,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    }
    
    if (palmLeft) {
        gsap.to(palmLeft, {
            x: -10,
            y: 5,
            duration: 10,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    }

    // 9. GRUNGE TEXTURE - Subtle pan
    const grunge = document.querySelector('.gsap-grunge');
    if (grunge) {
        gsap.to(grunge, {
            backgroundPosition: '10% 10%',
            duration: 30,
            ease: 'none',
            repeat: -1,
            yoyo: true
        });
    }

    // ============================================
    // MOBILE OPTIMIZATIONS
    // ============================================
    if (window.innerWidth < 1024) {
        // Reduce animation complexity on mobile
        gsap.set('.gsap-sparkle', { 
            willChange: 'transform' 
        });

        // Disable heavy animations on low-end devices
        if (window.devicePixelRatio <= 1.5) {
            gsap.globalTimeline.timeScale(0.7); // Slow down all animations
        }
    }

    // ============================================
    // SCROLL TRIGGER - Parallax Effect
    // ============================================
    if (window.innerWidth >= 768) {
        const heroSection = document.querySelector('section');
        
        gsap.to('.gsap-sparkle', {
            y: 100,
            opacity: 0,
            ease: 'none',
            scrollTrigger: {
                trigger: heroSection,
                start: 'top top',
                end: 'bottom top',
                scrub: 1
            }
        });

        gsap.to('.gsap-hero-title', {
            y: 50,
            opacity: 0.5,
            ease: 'none',
            scrollTrigger: {
                trigger: heroSection,
                start: 'top top',
                end: 'bottom top',
                scrub: 1
            }
        });
    }

    console.log('Hero section animations initialized');
});

// Smooth scroll function for competitions button
function scrollToNavAndOpenDropdown() {
    const nav = document.querySelector('nav');
    if (nav) {
        nav.scrollIntoView({ behavior: 'smooth' });
        // Add your dropdown logic here
    }
}
        // ============================================
        // WAIT FOR DOM AND GSAP TO LOAD
        // ============================================
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded');
            
            // Check if GSAP is loaded
            if (typeof gsap === 'undefined') {
                console.error('GSAP is not loaded!');
                return;
            }
            
            console.log('GSAP loaded successfully');
            
            // Register ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);
            
            // ============================================
            // BASIC SCROLL REVEAL (Intersection Observer)
            // ============================================
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const scrollObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-reveal').forEach(el => {
                scrollObserver.observe(el);
            });

            // ============================================
            // FLIP CARD FUNCTIONALITY - IMPROVED MOBILE
            // ============================================
            const flipCards = document.querySelectorAll('.flip-card');
            
            flipCards.forEach(card => {
                let isFlipped = false;
                let isAnimating = false; // Prevent multiple clicks during animation
                
                // Main card click handler
                const handleCardClick = function(e) {
                    // Ignore if clicking on close button or if currently animating
                    if (e.target.closest('button') || isAnimating) return;
                    
                    isAnimating = true;
                    isFlipped = !isFlipped;
                    card.classList.toggle('flipped', isFlipped);
                    
                    // Reset animation lock after transition completes
                    setTimeout(() => {
                        isAnimating = false;
                    }, 800); // Match with CSS transition duration
                };
                
                // Add click event
                card.addEventListener('click', handleCardClick);
                
                // Add touch event for better mobile responsiveness
                card.addEventListener('touchend', function(e) {
                    if (e.target.closest('button') || isAnimating) return;
                    e.preventDefault(); // Prevent ghost click
                    handleCardClick(e);
                });
                
                // Close button handler
                const closeBtn = card.querySelector('.flip-card-back button');
                if (closeBtn) {
                    const handleClose = function(e) {
                        e.stopPropagation();
                        if (isAnimating) return;
                        
                        isAnimating = true;
                        card.classList.remove('flipped');
                        isFlipped = false;
                        
                        setTimeout(() => {
                            isAnimating = false;
                        }, 800);
                    };
                    
                    closeBtn.addEventListener('click', handleClose);
                    closeBtn.addEventListener('touchend', function(e) {
                        e.preventDefault();
                        handleClose(e);
                    });
                }
                
                // Optional: Auto-flip back when clicking outside
                document.addEventListener('click', function(e) {
                    if (isFlipped && !card.contains(e.target) && !isAnimating) {
                        isAnimating = true;
                        card.classList.remove('flipped');
                        isFlipped = false;
                        
                        setTimeout(() => {
                            isAnimating = false;
                        }, 800);
                    }
                });
            });

            // ============================================
            // SMOOTH SCROLL
            // ============================================
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href !== '#' && href !== '') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });

            // ============================================
            // TIMELINE ANIMATION
            // ============================================
            const timelineObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const dots = entry.target.querySelectorAll('.timeline-dot');
                        dots.forEach((dot, index) => {
                            dot.style.animationDelay = `${index * 0.2}s`;
                        });
                    }
                });
            }, { threshold: 0.2 });

            const timelineSection = document.querySelector('#timeline');
            if (timelineSection) {
                timelineObserver.observe(timelineSection);
            }

            // ============================================
            // GSAP ANIMATIONS
            // ============================================
            
            // Morphing Blobs
            const morphElements = document.querySelectorAll('.gsap-morph');
            if (morphElements.length > 0) {
                gsap.to('.gsap-morph', {
                    borderRadius: '30% 70% 70% 30% / 70% 30% 30% 70%',
                    duration: 8,
                    ease: 'sine.inOut',
                    repeat: -1,
                    yoyo: true,
                    stagger: 0.5
                });
            }
            
            // Rotating Ring
            const rotateRing = document.querySelector('.gsap-rotate-ring');
            if (rotateRing) {
                gsap.to('.gsap-rotate-ring', {
                    rotation: 360,
                    duration: 20,
                    ease: 'none',
                    repeat: -1
                });
            }
            
            // Pulsing Center Icon
            const centerIcon = document.querySelector('.gsap-icon-center');
            if (centerIcon) {
                gsap.to('.gsap-icon-center', {
                    scale: 1.1,
                    duration: 2,
                    ease: 'sine.inOut',
                    repeat: -1,
                    yoyo: true
                });
            }
            
            // Orbiting Dots
            const orbitDots = document.querySelectorAll('.gsap-orbit-dot');
            if (orbitDots.length > 0) {
                gsap.to('.gsap-orbit-dot', {
                    rotation: 360,
                    transformOrigin: '50% 50%',
                    duration: 8,
                    ease: 'none',
                    repeat: -1,
                    stagger: 0.5
                });
            }
            
            // Title Words Animation
            const titleWords = document.querySelectorAll('.gsap-title-word');
            if (titleWords.length > 0) {
                gsap.from('.gsap-title-word', {
                    y: 100,
                    opacity: 0,
                    rotationX: -90,
                    stagger: 0.1,
                    duration: 1,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.gsap-title',
                        start: 'top 80%'
                    }
                });
            }
            
            // Divider Animation
            const dividerLine = document.querySelector('.gsap-divider-line');
            if (dividerLine) {
                gsap.from('.gsap-divider-line', {
                    width: 0,
                    duration: 1,
                    ease: 'power2.out',
                    stagger: 0.2,
                    scrollTrigger: {
                        trigger: '.gsap-divider-container',
                        start: 'top 80%'
                    }
                });
            }
            
            const dividerCircle = document.querySelector('.gsap-divider-circle');
            if (dividerCircle) {
                gsap.from('.gsap-divider-circle', {
                    scale: 0,
                    duration: 0.5,
                    delay: 0.5,
                    ease: 'back.out(2)',
                    scrollTrigger: {
                        trigger: '.gsap-divider-container',
                        start: 'top 80%'
                    }
                });
            }
            
            // Quote Marks Animation
            const quoteLeft = document.querySelector('.gsap-quote-left');
            if (quoteLeft) {
                gsap.from('.gsap-quote-left', {
                    x: -50,
                    opacity: 0,
                    rotation: -180,
                    duration: 1,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.gsap-description',
                        start: 'top 80%'
                    }
                });
            }
            
            const quoteRight = document.querySelector('.gsap-quote-right');
            if (quoteRight) {
                gsap.from('.gsap-quote-right', {
                    x: 50,
                    opacity: 0,
                    rotation: 180,
                    duration: 1,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.gsap-description',
                        start: 'top 80%'
                    }
                });
            }
            
            // Text Highlight Animation
            const highlightText = document.querySelectorAll('.gsap-highlight-text');
            if (highlightText.length > 0) {
                gsap.from('.gsap-highlight-text', {
                    backgroundPosition: '-100% 0',
                    duration: 1.5,
                    stagger: 0.3,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.gsap-text',
                        start: 'top 80%'
                    }
                });
            }
            
            // Stats Counter Animation
            const statCards = document.querySelectorAll('.gsap-stat-card');
            if (statCards.length > 0) {
                gsap.from('.gsap-stat-card', {
                    y: 50,
                    opacity: 0,
                    scale: 0.8,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.gsap-stats-container',
                        start: 'top 85%',
                        onEnter: () => {
                            document.querySelectorAll('.gsap-counter').forEach(counter => {
                                const target = parseInt(counter.dataset.target);
                                gsap.to(counter, {
                                    innerText: target,
                                    duration: 2,
                                    snap: { innerText: 1 },
                                    ease: 'power1.out'
                                });
                            });
                        }
                    }
                });
            }
            
            // ===== GRAND THEME SECTION =====
            
            // Blob Morphing
            const blobs = document.querySelectorAll('.gsap-blob');
            if (blobs.length > 0) {
                gsap.to('.gsap-blob', {
                    borderRadius: '60% 40% 30% 70% / 60% 30% 70% 40%',
                    duration: 10,
                    ease: 'sine.inOut',
                    repeat: -1,
                    yoyo: true
                });
            }
            
            // Badge Pulse
            const badgePulse = document.querySelector('.gsap-badge-pulse');
            if (badgePulse) {
                gsap.to('.gsap-badge-pulse', {
                    scale: 1.5,
                    opacity: 0.5,
                    duration: 1.5,
                    ease: 'power1.out',
                    repeat: -1
                });
            }
            
            // Badge Entrance
            const badge = document.querySelector('.gsap-badge');
            if (badge) {
                gsap.from('.gsap-badge', {
                    y: -50,
                    opacity: 0,
                    scale: 0.5,
                    duration: 1,
                    ease: 'elastic.out(1, 0.5)',
                    scrollTrigger: {
                        trigger: '#grand-theme',
                        start: 'top 80%'
                    }
                });
            }
            
            // Grand Title Gradient
            const grandWords = document.querySelectorAll('.gsap-grand-word');
            if (grandWords.length > 0) {
                gsap.to('.gsap-grand-word', {
                    backgroundPosition: '200% 0',
                    duration: 3,
                    ease: 'none',
                    repeat: -1,
                    stagger: 0.2
                });
                
                gsap.from('.gsap-grand-word', {
                    y: 80,
                    opacity: 0,
                    rotationX: -90,
                    stagger: 0.15,
                    duration: 1,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.gsap-grand-title',
                        start: 'top 80%'
                    }
                });
            }
            
            // Theme Divider Icons
            const dividerIcons = document.querySelectorAll('.gsap-divider-icon');
            if (dividerIcons.length > 0) {
                gsap.from('.gsap-divider-icon', {
                    scale: 0,
                    rotation: 360,
                    duration: 1,
                    ease: 'back.out(2)',
                    stagger: 0.2,
                    scrollTrigger: {
                        trigger: '.gsap-theme-divider',
                        start: 'top 80%'
                    }
                });
            }
            
            const themeLine = document.querySelector('.gsap-theme-line');
            if (themeLine) {
                gsap.from('.gsap-theme-line', {
                    width: 0,
                    duration: 1,
                    delay: 0.4,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.gsap-theme-divider',
                        start: 'top 80%'
                    }
                });
            }
            
            // Decorative Lines
            const decoLineLeft = document.querySelector('.gsap-deco-line-left');
            if (decoLineLeft) {
                gsap.to('.gsap-deco-line-left', {
                    width: '20%',
                    duration: 1.5,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.gsap-theme-quote-container',
                        start: 'top 80%'
                    }
                });
            }
            
            const decoLineRight = document.querySelector('.gsap-deco-line-right');
            if (decoLineRight) {
                gsap.to('.gsap-deco-line-right', {
                    width: '20%',
                    duration: 1.5,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.gsap-theme-quote-container',
                        start: 'top 80%'
                    }
                });
            }
            
            // Theme Box
            const themeBox = document.querySelector('.gsap-theme-box');
            if (themeBox) {
                gsap.from('.gsap-theme-box', {
                    scale: 0.9,
                    opacity: 0,
                    duration: 1,
                    ease: 'back.out(1.5)',
                    scrollTrigger: {
                        trigger: '.gsap-theme-quote-container',
                        start: 'top 80%'
                    }
                });
            }
            
            // Typewriter Effect for Theme Text
            const themeText = document.querySelector('.gsap-theme-text');
            if (themeText) {
                const text = themeText.textContent;
                themeText.textContent = '';
                
                ScrollTrigger.create({
                    trigger: '.gsap-theme-text',
                    start: 'top 80%',
                    onEnter: () => {
                        let i = 0;
                        const typeWriter = setInterval(() => {
                            if (i < text.length) {
                                themeText.textContent += text.charAt(i);
                                i++;
                            } else {
                                clearInterval(typeWriter);
                            }
                        }, 30);
                    }
                });
            }
            
            // Accent Corners
            const accentTop = document.querySelector('.gsap-accent-top');
            if (accentTop) {
                gsap.from('.gsap-accent-top', {
                    x: -20,
                    y: -20,
                    opacity: 0,
                    duration: 0.8,
                    delay: 1,
                    ease: 'back.out(2)',
                    scrollTrigger: {
                        trigger: '.gsap-theme-quote-container',
                        start: 'top 80%'
                    }
                });
            }
            
            const accentBottom = document.querySelector('.gsap-accent-bottom');
            if (accentBottom) {
                gsap.from('.gsap-accent-bottom', {
                    x: 20,
                    y: 20,
                    opacity: 0,
                    duration: 0.8,
                    delay: 1.2,
                    ease: 'back.out(2)',
                    scrollTrigger: {
                        trigger: '.gsap-theme-quote-container',
                        start: 'top 80%'
                    }
                });
            }
            
            // Feature Pills
            const pills = document.querySelectorAll('.gsap-pill');
            if (pills.length > 0) {
                gsap.from('.gsap-pill', {
                    y: 30,
                    opacity: 0,
                    scale: 0.8,
                    duration: 0.6,
                    stagger: 0.1,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.gsap-pills-container',
                        start: 'top 85%'
                    }
                });
            }
            
            console.log('All animations initialized');
        });
    </script>

    