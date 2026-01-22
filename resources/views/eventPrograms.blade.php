@extends('layouts.app')

@section('title', 'Event Programs')

@section('content')

<!-- Hero Section -->
<section id="event-programs" class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-20 sm:pt-24 lg:pt-28 pb-24 sm:pb-32 lg:pb-40 scroll-mt-20">
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Floating Circles -->
        <div class="floating-shape absolute top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
        <div class="floating-shape absolute top-40 right-20 w-40 h-40 bg-[#D3EB9F]/10 rounded-full blur-3xl"></div>
        <div class="floating-shape absolute bottom-32 left-1/4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
        <div class="floating-shape absolute bottom-20 right-1/3 w-36 h-36 bg-[#6F97B6]/10 rounded-full blur-2xl"></div>
        
       
    </div>
    
     <!-- Multiple Sparkles -->
    <div class="gsap-faq-sparkle sparkle-float absolute top-20 right-20 w-12 sm:w-16 h-12 sm:h-16 opacity-80">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute top-40 right-1/4 w-10 sm:w-12 h-10 sm:h-12 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute top-32 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute top-1/3 left-1/4 w-8 sm:w-10 h-8 sm:h-10 opacity-60">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute bottom-40 right-32 w-14 sm:w-20 h-14 sm:h-20 opacity-85">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.9)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute bottom-1/3 left-1/3 w-7 sm:w-8 h-7 sm:h-8 opacity-65">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(211,235,159,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute top-1/2 right-1/3 w-9 sm:w-11 h-9 sm:h-11 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute bottom-32 left-40 w-10 sm:w-13 h-10 sm:h-13 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute top-1/2 right-1/2 w-9 sm:w-11 h-9 sm:h-11 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="gsap-faq-sparkle sparkle-float absolute bottom-32 left-60 w-10 sm:w-13 h-10 sm:h-13 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 sm:pt-6 pb-8 sm:pb-12 lg:pb-16 w-full z-10">
        <div class="max-w-4xl hero-content">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg breadcrumb">
                <a href="/" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0F4C82] font-bold">Event Programs</span>
            </div>
            <!-- Title & Content -->
            <div class="ml-4 sm:ml-6 lg:ml-10">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-helvetica font-black tracking-tighter mb-6 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)] hero-title" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    Event Programs
                </h1>

                <div class="w-32 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-8 rounded-full shadow-lg hero-line"></div>

                <p class="text-xl sm:text-2xl md:text-3xl font-semibold mb-6 text-[#D3EB9F] font-marola drop-shadow-md hero-tagline">
                    #EyesOnTheFuture
                </p>

                <p class="text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-2xl font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)] hero-description" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
                    Join us for a series of exciting activities designed to inspire, educate, and entertain all participants!
                </p>
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

<!-- Event Program 1 (Image Left) -->
<section id="company-talks" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Floating Blobs -->
    <div class="hidden lg:block absolute top-20 right-20 w-64 h-64 bg-[#D3EB9F]/10 rounded-full blur-3xl blob-animate-1"></div>
    <div class="hidden lg:block absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl blob-animate-2"></div>
    
    <!-- Particle Effects -->
    <div class="particle absolute top-10 left-10 w-2 h-2 bg-[#D3EB9F]/30 rounded-full"></div>
    <div class="particle absolute top-32 right-16 w-3 h-3 bg-[#6F97B6]/20 rounded-full"></div>
    <div class="particle absolute bottom-24 left-1/3 w-2 h-2 bg-[#D3EB9F]/25 rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 1</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">Company Talks</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">1</span>
                    </div>
                </div>
            </div>

            <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-2 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">4th March 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">Bale Sawala, Padjadjaran University</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Company Talks is a seminar-style event that brings industry professionals to share insights about the professional world. Through talks and discussions, students can explore various career paths and learn from real workplace experiences. This event also helps participants understand essential skills needed in the industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 2 (Image Right) -->
<section id="csr" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Particle Effects -->
    <div class="particle absolute top-16 right-12 w-2 h-2 bg-[#D3EB9F]/30 rounded-full"></div>
    <div class="particle absolute bottom-28 left-14 w-3 h-3 bg-[#6F97B6]/20 rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 2</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">CSR</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <!-- Placeholder Image - Ganti dengan gambar asli nanti -->
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">2</span>
                    </div>
                </div>
            </div>

            <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-1 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">28th March 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">Kepulauan Seribu, Jakarta</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">The CSR Event is designed to raise environmental awareness by involving participants in simple and meaningful activities. The event includes a short introduction to seagrass and its importance for marine ecosystems, followed by a hands-on seagrass planting activity that allows participants to work together.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 3 (Image Left) -->
<section id="field-trip" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Floating Blobs -->
    <div class="hidden lg:block absolute top-20 left-20 w-64 h-64 bg-[#6F97B6]/10 rounded-full blur-3xl blob-animate-1"></div>
    <div class="hidden lg:block absolute bottom-20 right-20 w-80 h-80 bg-[#D3EB9F]/10 rounded-full blur-3xl blob-animate-2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 3</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">Field Trip</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <!-- Placeholder Image - Ganti dengan gambar asli nanti -->
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">3</span>
                    </div>
                </div>
            </div>

              <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-2 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">4th April 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">TBA</p>
                    </div>
                </div>

           
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">This field trip gives participants the opportunity to visit an oil and gas company and see how the industry works in real life. The event includes a guided company visit, facility tour, and discussion sessions with industry representatives. Through this visit, participants can learn directly from professionals and get a clearer picture of daily operations in the oil and gas sector.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 4 (Image Right) -->
<section id="ignite-talks" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Particle Effects -->
    <div class="particle absolute top-16 right-12 w-2 h-2 bg-[#D3EB9F]/30 rounded-full"></div>
    <div class="particle absolute bottom-28 left-14 w-3 h-3 bg-[#6F97B6]/20 rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 4</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">Ignite Talks</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <!-- Placeholder Image - Ganti dengan gambar asli nanti -->
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">2</span>
                    </div>
                </div>
            </div>
              <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-1 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">28th March 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">TBA</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Ignite Talks is an initiative to strengthen the bonds within the SC community by connecting student chapters across Indonesia. Through casual sharing sessions, participants can talk about their annual events, exchange experiences, and reflect on their SPE journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 5 (Image Left) -->
<section id="final-competition" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Floating Blobs -->
    <div class="hidden lg:block absolute top-20 left-20 w-64 h-64 bg-[#6F97B6]/10 rounded-full blur-3xl blob-animate-1"></div>
    <div class="hidden lg:block absolute bottom-20 right-20 w-80 h-80 bg-[#D3EB9F]/10 rounded-full blur-3xl blob-animate-2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 5</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">Final Competition</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <!-- Placeholder Image - Ganti dengan gambar asli nanti -->
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">3</span>
                    </div>
                </div>
            </div>

              <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-2 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">10th May 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">TBA</p>
                    </div>
                </div>

         
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">The final competition of Boreyes 2026 marked the final stage of the event, bringing together top teams from all five competition categories to present and defend their work before the judges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 6 (Image Right) -->
<section id="funday" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Particle Effects -->
    <div class="particle absolute top-16 right-12 w-2 h-2 bg-[#D3EB9F]/30 rounded-full"></div>
    <div class="particle absolute bottom-28 left-14 w-3 h-3 bg-[#6F97B6]/20 rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 6</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">Funday</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <!-- Placeholder Image - Ganti dengan gambar asli nanti -->
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">2</span>
                    </div>
                </div>
            </div>

              <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-1 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">10th May 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">TBA</p>
                    </div>
                </div>

           
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Fun Day is a light and enjoyable event held after the Boreyes 2026 competitions, providing participants with a relaxed space to unwind and enjoy simple activities together after the competition sessions. The event includes fun activities and informal interactions in a relaxed atmosphere.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 7 (Image Left) -->
<section id="banquet" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    
    <!-- Floating Blobs -->
    <div class="hidden lg:block absolute top-20 left-20 w-64 h-64 bg-[#6F97B6]/10 rounded-full blur-3xl blob-animate-1"></div>
    <div class="hidden lg:block absolute bottom-20 right-20 w-80 h-80 bg-[#D3EB9F]/10 rounded-full blur-3xl blob-animate-2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4 badge-float">EVENT 7</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4 section-title">Banquet</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group magnetic-card">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <!-- Placeholder Image - Ganti dengan gambar asli nanti -->
                            <img src="{{ asset('assets/img/kebun.jpg') }}" alt="Field Visit" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">3</span>
                    </div>
                </div>
            </div>

              <!-- Ubah struktur info cards dari grid 2 kolom menjadi stack vertical -->
            <div class="order-2 lg:order-2 program-details">
                <!-- Date Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-2 sm:mb-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Date</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">10th May 2026</p>
                    </div>
                </div>

                <!-- Location Card (Full Width) -->
                <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card mb-4 sm:mb-6">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0 icon-container">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Location</p>
                        <p class="text-[11px] sm:text-sm font-black text-[#0F4C82] font-helvetica">TBA</p>
                    </div>
                </div>

          
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">The Banquet is a dinner event that marks the closing of Boreyes 2026. This event brings together participants, committees, and guests to celebrate the end of the series of activities in a warm and relaxed atmosphere. The banquet includes a dinner session, closing remarks, and the announcement of competition winners.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 sm:py-16 lg:py-20 xl:py-32 bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white relative overflow-hidden cta-section">
    
    <!-- Floating elements -->
    <div class="absolute top-10 left-10 w-24 h-24 bg-white/5 rounded-full blur-2xl cta-blob-1"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-[#D3EB9F]/10 rounded-full blur-2xl cta-blob-2"></div>
    <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-white/10 rounded-full blur-xl cta-blob-3"></div>
    
    <!-- Sparkles -->
    <div class="absolute top-20 right-1/4 w-8 h-8 opacity-40 cta-sparkle-1">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full">
    </div>
    <div class="absolute bottom-32 left-1/3 w-10 h-10 opacity-50 cta-sparkle-2">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div class="cta-content">
            <div class="inline-block mb-4 sm:mb-6 cta-badge">
                <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-white/20 backdrop-blur-md border-2 border-white text-white text-xs sm:text-sm font-black rounded-full font-helvetica shadow-lg">
                    Don't Miss Out!
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-4 sm:mb-6 drop-shadow-lg px-4 cta-title text-white">
                Don't Miss Every Moment!
            </h2>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-8 sm:mb-10 text-white/95 max-w-3xl mx-auto leading-relaxed font-garet drop-shadow-md px-4 cta-subtitle">
                Register now and be part of an unforgettable experience with thousands of other participants!
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 lg:gap-5 justify-center px-4 cta-buttons">
                @guest
                <a href="{{ route('register') }}" class="group inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl sm:rounded-2xl shadow-xl sm:shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base min-h-[56px] sm:min-h-[60px]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span>Register Now</span>
                </a>
                @endguest
                <a href="#company-talks" class="group inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 bg-white/10 backdrop-blur-md border-2 sm:border-3 border-white text-white font-helvetica font-black rounded-xl sm:rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-lg sm:shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm sm:text-base min-h-[56px] sm:min-h-[60px] btn-secondary">
                    <span>View Programs</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
html {
    scroll-behavior: smooth;
}

.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Hide elements initially for animation */
.program-section {
    opacity: 1;
}
</style>
@endpush

@push('scripts')
<!-- GSAP Core -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<!-- GSAP ScrollTrigger Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Register GSAP plugins
    gsap.registerPlugin(ScrollTrigger);

    // ==========================================
    // CONTINUOUS FLOATING ANIMATIONS
    // ==========================================

    // Hero sparkles with complex floating patterns
    gsap.to('.sparkle-1', {
        y: -30,
        x: 15,
        rotation: 360,
        scale: 1.2,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.sparkle-2', {
        y: -40,
        x: -20,
        rotation: -360,
        scale: 1.3,
        duration: 5,
        delay: 0.5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.sparkle-3', {
        y: -25,
        x: 25,
        rotation: 180,
        scale: 1.15,
        duration: 4.5,
        delay: 1,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.sparkle-4', {
        y: -35,
        x: -10,
        rotation: -180,
        scale: 1.25,
        duration: 3.5,
        delay: 1.5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // Floating shapes in hero
    gsap.utils.toArray('.floating-shape').forEach((shape, index) => {
        gsap.to(shape, {
            y: index % 2 === 0 ? -40 : 40,
            x: index % 2 === 0 ? 30 : -30,
            scale: 1.3,
            duration: 5 + index,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            delay: index * 0.5
        });
    });

    // Animated lines morphing
    gsap.to('.line-1', {
        attr: { x2: 500, y2: 200 },
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.line-2', {
        attr: { y2: 500, x2: 200 },
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // Wave SVG animation
    const wavePath = document.querySelector('.wave-svg path');
    if (wavePath) {
        gsap.to(wavePath, {
            attr: { 
                d: 'M0 0L60 15C120 30 240 50 360 53.7C480 57 600 43 720 40C840 37 960 43 1080 50C1200 57 1320 63 1380 66.3L1440 70V120H0V0Z' 
            },
            duration: 4,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    }

    // Blob animations
    gsap.utils.toArray('.blob-animate-1, .blob-animate-2').forEach((blob, index) => {
        gsap.to(blob, {
            scale: 1.4,
            x: index % 2 === 0 ? 40 : -40,
            y: index % 2 === 0 ? -40 : 40,
            rotation: index % 2 === 0 ? 15 : -15,
            duration: 7 + index,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    });

    // Particles floating
    gsap.utils.toArray('.particle').forEach((particle, index) => {
        gsap.to(particle, {
            y: -100 - (index * 20),
            x: (index % 2 === 0 ? 50 : -50),
            opacity: 0,
            scale: 2,
            duration: 3 + index,
            repeat: -1,
            ease: 'none',
            delay: index * 0.8
        });
    });

    // Badge floating
    gsap.utils.toArray('.badge-float').forEach(badge => {
        gsap.to(badge, {
            y: -8,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    });

    // CTA Section continuous animations
    gsap.to('.cta-blob-1', {
        x: 50,
        y: -50,
        scale: 1.6,
        duration: 6,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.cta-blob-2', {
        x: -60,
        y: 60,
        scale: 1.5,
        duration: 7,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.cta-blob-3', {
        x: 40,
        y: -40,
        scale: 1.4,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.cta-sparkle-1', {
        y: -30,
        x: 20,
        rotation: 360,
        scale: 1.3,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.cta-sparkle-2', {
        y: -40,
        x: -25,
        rotation: -360,
        scale: 1.4,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // ==========================================
    // SCROLL TRIGGERED ANIMATIONS
    // ==========================================

    // Hero section entrance with stagger
    const heroTimeline = gsap.timeline();
    heroTimeline
        .from('.breadcrumb', {
            y: -40,
            opacity: 0,
            scale: 0.9,
            duration: 0.8,
            ease: 'back.out(1.7)'
        })
        .from('.hero-title', {
            y: 60,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        }, '-=0.4')
        .from('.hero-line', {
            scaleX: 0,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out'
        }, '-=0.6')
        .from('.hero-tagline', {
            y: 40,
            opacity: 0,
            duration: 0.7,
            ease: 'power2.out'
        }, '-=0.5')
        .from('.hero-description', {
            y: 40,
            opacity: 0,
            duration: 0.7,
            ease: 'power2.out'
        }, '-=0.4');

    // Parallax effect for hero
    gsap.to('.hero-content', {
        yPercent: -20,
        ease: 'none',
        scrollTrigger: {
            trigger: '#event-programs',
            start: 'top top',
            end: 'bottom top',
            scrub: 1
        }
    });

    // Program sections with elaborate animations
    gsap.utils.toArray('.program-section').forEach((section, index) => {
        const header = section.querySelector('.program-header');
        const badge = header?.querySelector('.badge-float');
        const title = header?.querySelector('.section-title');
        const divider = header?.querySelector('.divider-line');
        
        const image = section.querySelector('.program-image');
        const cardInner = image?.querySelector('.card-inner');
        const corners = image?.querySelectorAll('.corner-tl, .corner-br');
        const numberBadge = image?.querySelector('.number-badge');
        
        const details = section.querySelector('.program-details');
        const infocards = details?.querySelectorAll('.info-card');
        const descCard = details?.querySelector('.description-card');

        const timeline = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: 'top 75%',
                end: 'top 25%',
                toggleActions: 'play none none reverse'
            }
        });

        // Header animations with bounce
        if (badge) {
            timeline.from(badge, {
                scale: 0,
                rotation: -180,
                opacity: 0,
                duration: 0.6,
                ease: 'back.out(2)'
            });
        }

        if (title) {
            timeline.from(title, {
                y: 60,
                opacity: 0,
                duration: 0.8,
                ease: 'power3.out'
            }, '-=0.4');
        }

        if (divider) {
            timeline.from(divider, {
                scaleX: 0,
                opacity: 0,
                duration: 0.6,
                ease: 'power2.out'
            }, '-=0.5');
        }

        // Image with 3D effect
        if (cardInner) {
            timeline
                .from(cardInner, {
                    scale: 0.7,
                    opacity: 0,
                    rotationY: -45,
                    z: -200,
                    duration: 1,
                    ease: 'power3.out'
                }, '-=0.4');
        }

        // Corners with stagger
        if (corners.length > 0) {
            timeline.from(corners, {
                scale: 0,
                rotation: -90,
                opacity: 0,
                duration: 0.5,
                stagger: 0.15,
                ease: 'back.out(2)'
            }, '-=0.8');
        }

        // Number badge with spin
        if (numberBadge) {
            timeline.from(numberBadge, {
                scale: 0,
                rotation: 720,
                opacity: 0,
                duration: 0.8,
                ease: 'back.out(2)'
            }, '-=0.6');
        }

        // Info cards with wave effect
        if (infocards.length > 0) {
            timeline.from(infocards, {
                x: index % 2 === 0 ? 100 : -100,
                opacity: 0,
                rotationY: index % 2 === 0 ? 45 : -45,
                duration: 0.7,
                stagger: 0.15,
                ease: 'power3.out'
            }, '-=0.6');
        }

        // Description card with flip
        if (descCard) {
            timeline.from(descCard, {
                y: 50,
                opacity: 0,
                rotationX: -15,
                duration: 0.7,
                ease: 'power3.out'
            }, '-=0.5');
        }

        // Magnetic card effect on hover
        if (image) {
            const card = image.querySelector('.magnetic-card');
            card?.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                gsap.to(card, {
                    x: x * 0.1,
                    y: y * 0.1,
                    rotationY: x * 0.05,
                    rotationX: -y * 0.05,
                    duration: 0.5,
                    ease: 'power2.out'
                });
            });

            card?.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    x: 0,
                    y: 0,
                    rotationY: 0,
                    rotationX: 0,
                    duration: 0.5,
                    ease: 'power2.out'
                });
            });
        }
    });

    // CTA Section with dramatic entrance
    const ctaTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: '.cta-section',
            start: 'top 80%',
            end: 'top 30%',
            toggleActions: 'play none none reverse'
        }
    });

    ctaTimeline
        .from('.cta-badge', {
            scale: 0,
            rotation: -360,
            opacity: 0,
            duration: 0.8,
            ease: 'back.out(2)'
        })
        .from('.cta-title', {
            y: 60,
            opacity: 0,
            duration: 0.9,
            ease: 'power3.out'
        }, '-=0.5')
        .from('.cta-subtitle', {
            y: 40,
            opacity: 0,
            duration: 0.7,
            ease: 'power2.out'
        }, '-=0.5')
        .from('.cta-buttons a', {
            y: 50,
            opacity: 0,
            scale: 0.8,
            duration: 0.7,
            stagger: 0.2,
            ease: 'back.out(1.7)',
            immediateRender: false
        }, '-=0.4');

    // Button hover animations
    document.querySelectorAll('.btn-primary, .btn-secondary').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            gsap.to(this, {
                scale: 1.05,
                y: -5,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        btn.addEventListener('mouseleave', function() {
            gsap.to(this, {
                scale: 1,
                y: 0,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });

    // Info cards hover with 3D tilt
    document.querySelectorAll('.info-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                y: -8,
                scale: 1.05,
                boxShadow: '0 20px 40px rgba(15, 76, 130, 0.2)',
                duration: 0.3,
                ease: 'power2.out'
            });

            const icon = this.querySelector('.icon-container');
            if (icon) {
                gsap.to(icon, {
                    rotation: 360,
                    scale: 1.2,
                    duration: 0.5,
                    ease: 'back.out(1.7)'
                });
            }
        });

        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                y: 0,
                scale: 1,
                boxShadow: '0 4px 6px rgba(0, 0, 0, 0.1)',
                duration: 0.3,
                ease: 'power2.out'
            });

            const icon = this.querySelector('.icon-container');
            if (icon) {
                gsap.to(icon, {
                    rotation: 0,
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            }
        });
    });

    // Description cards hover
    document.querySelectorAll('.description-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                y: -5,
                boxShadow: '0 25px 50px rgba(15, 76, 130, 0.15)',
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                y: 0,
                boxShadow: '0 4px 6px rgba(0, 0, 0, 0.1)',
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
     // ============================================
            // PARALLAX EFFECTS (Desktop only)
            // ============================================
            if (window.innerWidth >= 768) {
                gsap.to('.gsap-faq-sparkle', {
                    y: 100,
                    opacity: 0,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: 'section',
                        start: 'top top',
                        end: 'bottom top',
                        scrub: 1
                    }
                });
            }
            
          // 2. SPARKLES - Individual animations
            const sparkles = gsap.utils.toArray('.gsap-faq-sparkle');
            sparkles.forEach((sparkle, index) => {
                // Initial entrance
                gsap.from(sparkle, {
                    scale: 0,
                    opacity: 0,
                    rotation: 360,
                    duration: 1,
                    delay: index * 0.05,
                    ease: 'back.out(1.5)'
                });
                
                // Continuous rotation
                gsap.to(sparkle, {
                    rotation: 360,
                    duration: 20 + (index * 3),
                    ease: 'none',
                    repeat: -1
                });
                
                // Pulse effect
                gsap.to(sparkle, {
                    scale: 1.1,
                    duration: 2.5 + (index * 0.2),
                    ease: 'sine.inOut',
                    repeat: -1,
                    yoyo: true
                });
            });

    console.log('🎨 Advanced GSAP Animations initialized successfully!');
});
</script>
@endpush