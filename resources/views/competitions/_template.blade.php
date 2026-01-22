<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-20 pb-20">
    <!-- Decorative Light Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-orb-2"></div>
    
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
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 z-10">
       <!-- Breadcrumb -->
        <div class="mb-6 sm:mb-8 gsap-breadcrumb">
            <div class="flex items-center space-x-2 text-[#0F4C82] text-xs sm:text-sm font-garet bg-white/90 backdrop-blur-sm px-3 py-1.5 sm:px-4 sm:py-2 rounded-full inline-flex shadow-lg">
                <a href="/" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0F4C82] font-bold">Competition</span>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Title Section -->
            <div class="text-center mb-6 sm:mb-8">
                <!-- Status Badges -->
                <div class="flex flex-wrap justify-center gap-2 mb-4 gsap-status-badge">
                    @if($competition['status'] === 'OPEN')
                        <span class="px-4 py-2 bg-[#10B981] text-white text-xs sm:text-sm font-black rounded-full flex items-center space-x-2 font-helvetica shadow-lg">
                            <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                            <span>OPEN FOR REGISTRATION</span>
                        </span>
                    @elseif($competition['status'] === 'CLOSED')
                        <span class="px-4 py-2 bg-[#EF4444] text-white text-xs sm:text-sm font-black rounded-full flex items-center space-x-2 font-helvetica shadow-lg">
                            <span class="w-2 h-2 bg-white rounded-full"></span>
                            <span>REGISTRATION CLOSED</span>
                        </span>
                    @else
                        <span class="px-4 py-2 bg-[#F59E0B] text-white text-xs sm:text-sm font-black rounded-full flex items-center space-x-2 font-helvetica shadow-lg">
                            <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                            <span>COMING SOON</span>
                        </span>
                    @endif
                </div>
                
                <!-- Title - Smaller -->
                <h1 class="gsap-comp-title text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-4 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]" 
                    style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    {{ $competition['title'] }}
                </h1>
                
                <!-- Divider - Smaller -->
                <div class="gsap-comp-divider w-20 h-1 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-4 rounded-full shadow-lg mx-auto"></div>
                
                <!-- Description - WIDER & BETTER READABILITY -->
                <div class="gsap-comp-desc max-w-4xl mx-auto px-4">
                    <p class="text-sm sm:text-base md:text-lg leading-relaxed font-garet text-white/95 drop-shadow-lg" 
                       style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4); line-height: 1.7;">
                        {{ $competition['description'] }}
                    </p>
                </div>
            </div>

            <!-- Info Cards Grid - More Compact -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <!-- Card 1 - Batch 1 -->
                <div class="gsap-info-card bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition shadow-lg opacity-100">
                    <div class="text-center">
                        <p class="text-[10px] sm:text-xs font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-1.5">
                            {{ $competition['batch1_label'] ?? 'Batch 1' }}
                        </p>
                        <p class="text-[#0F4C82] text-sm sm:text-base font-black font-helvetica leading-tight">
                            {{ $competition['batch1'] }}
                        </p>
                        <div class="w-8 h-[2px] bg-[#D3EB9F] rounded-full mx-auto mt-2 opacity-70"></div>
                    </div>
                </div>

                <!-- Card 2 - Batch 2 (Conditional) -->
                @if(!empty($competition['batch2']))
                    <div class="gsap-info-card bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition shadow-lg opacity-100">
                        <div class="text-center">
                            <p class="text-[10px] sm:text-xs font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-1.5">
                                {{ $competition['batch2_label'] ?? 'Batch 2' }}
                            </p>
                            <p class="text-[#0F4C82] text-sm sm:text-base font-black font-helvetica leading-tight">
                                {{ $competition['batch2'] }}
                            </p>
                            <div class="w-8 h-[2px] bg-[#6F97B6] rounded-full mx-auto mt-2 opacity-40"></div>
                        </div>
                    </div>
                @endif

                <!-- Card 3 - Registration Fee -->
                <div class="gsap-info-card bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition shadow-lg opacity-100">
                    <div class="text-center">
                        <p class="text-[10px] sm:text-xs font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-1.5">Registration Fee</p>
                        <p class="text-[#0F4C82] text-sm sm:text-base font-black font-helvetica leading-tight">
                            {{ $competition['fee'] }}
                        </p>
                        <div class="w-8 h-[2px] bg-[#0F4C82] rounded-full mx-auto mt-2 opacity-25"></div>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons - More Compact -->
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                @guest
                @if($competition['status'] === 'OPEN')
                    <a href="{{ $competition['register_url'] }}" 
                       class="gsap-cta-btn opacity-100 group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-2xl hover:shadow-[0_25px_60px_rgba(211,235,159,0.6)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm min-h-[48px] border-2 border-[#0F4C82]/30">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span>Register Now</span>
                    </a>
                @else
                    <button disabled
                       class="gsap-cta-btn opacity-100 inline-flex items-center justify-center px-6 py-3 bg-gray-400 text-white font-helvetica font-black rounded-xl shadow-xl cursor-not-allowed text-sm min-h-[48px] border-2 border-gray-500/30 opacity-60">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <span>Pendaftaran Ditutup</span>
                    </button>
                @endif
                @endguest
                
                <!-- Registration Booklet Button -->
                @if(!empty($competition['booklet_url']))
                    <a href="{{ $competition['booklet_url'] }}" 
                       target="_blank"
                       class="gsap-cta-btn opacity-100 group inline-flex items-center justify-center px-6 py-3 bg-white text-[#0F4C82] font-helvetica font-black rounded-xl border-2 border-[#0F4C82]/30 hover:bg-[#0F4C82] hover:text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm min-h-[48px]">
                        <svg class="w-5 h-5 mr-2 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Registration Booklet</span>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full gsap-wave" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Other Competitions Section -->
<section class="py-12 sm:py-16 bg-[#F8FBFC] relative overflow-hidden">
    <!-- Decorative Circles -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-other-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-other-orb-2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-10">
            <h2 class="gsap-other-title text-2xl sm:text-3xl md:text-4xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4">
                Other Competitions
            </h2>
            <div class="gsap-other-divider w-20 h-1 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-6 rounded-full shadow-md"></div>
        </div>
        
        <!-- Dynamic Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 gsap-other-cards">
            @foreach($others as $index => $other)
                <a href="{{ $other['url'] }}" class="gsap-other-card group block h-full" data-index="{{ $index }}">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60 flex flex-col h-full">
                        <!-- Image -->
                        <div class="h-40 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] overflow-hidden relative flex-shrink-0">
                            <div class="w-full h-full flex items-center justify-center gsap-card-icon">
                                <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-4 flex flex-col flex-grow">
                            <!-- Title -->
                            <h3 class="font-black text-[#0F4C82] mb-2 line-clamp-2 font-helvetica text-base leading-tight min-h-[2.8rem]">
                                {{ $other['title'] }}
                            </h3>
                            
                            <!-- Description -->
                            <p class="text-xs text-[#374151] mb-3 line-clamp-2 font-garet leading-relaxed min-h-[2.2rem] flex-grow">
                                {{ $other['desc'] }}
                            </p>
                            
                            <!-- Button -->
                            <div class="inline-flex items-center text-[#0F4C82] font-black text-xs group-hover:text-[#6F97B6] transition font-helvetica mt-auto">
                                View Details
                                <svg class="w-4 h-4 ml-1 bounce-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-25px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes bounce-arrow {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(5px); }
}

.bounce-arrow {
    animation: bounce-arrow 1.5s ease-in-out infinite;
}
</style>

@endpush
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') {
        console.warn('GSAP not loaded for Competition Page');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // ============================================
    // HERO SECTION ANIMATIONS - FULLY FIXED
    // ============================================

    // 1. DECORATIVE ORBS
    gsap.to('.gsap-orb-1', {
        scale: 1.15,
        opacity: 0.15,
        duration: 5,
        ease: 'sine.inOut',
        repeat: -1,
        yoyo: true
    });
    
    gsap.to('.gsap-orb-2', {
        scale: 1.2,
        opacity: 0.18,
        duration: 6,
        ease: 'sine.inOut',
        repeat: -1,
        yoyo: true,
        delay: 1
    });

    // 2. SPARKLES
    document.querySelectorAll('.gsap-comp-sparkle').forEach((sparkle, index) => {
        gsap.from(sparkle, {
            scale: 0,
            opacity: 0,
            rotation: 360,
            duration: 1,
            delay: index * 0.05,
            ease: 'back.out(1.5)'
        });

        gsap.to(sparkle, {
            rotation: 360,
            duration: 20 + (index * 3),
            ease: 'none',
            repeat: -1
        });

        gsap.to(sparkle, {
            scale: 1.08,
            duration: 2.5 + (index * 0.2),
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    });

    // 3. BREADCRUMB
    gsap.from('.gsap-breadcrumb', {
        x: -60,
        opacity: 0,
        duration: 0.8,
        ease: 'power3.out',
        delay: 0.2
    });

    // 4. STATUS BADGE - Pop ONCE
    gsap.from('.gsap-status-badge', {
        scale: 0,
        opacity: 0,
        duration: 0.6,
        ease: 'back.out(2)',
        delay: 0.4
    });

    // 5. TITLE - NO PARALLAX
    const compTitle = document.querySelector('.gsap-comp-title');
    if (compTitle) {
        gsap.from(compTitle, {
            y: 30,
            opacity: 0,
            duration: 0.9,
            ease: 'power3.out',
            delay: 0.6
        });
    }

    // 6. DIVIDER - NO PARALLAX
    const compDivider = document.querySelector('.gsap-comp-divider');
    if (compDivider) {
        gsap.from(compDivider, {
            scaleX: 0,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out',
            delay: 1
        });
        
        gsap.to(compDivider, {
            scaleX: 1.05,
            duration: 2.5,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
    }

    // 7. DESCRIPTION
    gsap.from('.gsap-comp-desc', {
        y: 30,
        opacity: 0,
        duration: 0.8,
        ease: 'power2.out',
        delay: 1.3
    });

    // 8. INFO CARDS - FIXED TO ALWAYS SHOW
    const infoCards = document.querySelectorAll('.gsap-info-card');
    if (infoCards.length > 0) {
        // Ensure they start visible
        infoCards.forEach(card => {
            card.style.opacity = '1';
            card.style.visibility = 'visible';
        });
        
        // Then animate FROM hidden state
        gsap.fromTo(infoCards,
            {
                y: 40,
                opacity: 0,
                scale: 0.95
            },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.7,
                stagger: 0.12,
                ease: 'back.out(1.5)',
                delay: 1.6
            }
        );
        
        // Hover effects
        infoCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, { y: -8, scale: 1.03, duration: 0.3, ease: 'power2.out' });
            });
            card.addEventListener('mouseleave', () => {
                gsap.to(card, { y: 0, scale: 1, duration: 0.3, ease: 'power2.out' });
            });
        });
    }

    // 9. CTA BUTTONS - FIXED TO ALWAYS SHOW
    const ctaButtons = document.querySelectorAll('.gsap-cta-btn');
    if (ctaButtons.length > 0) {
        // Ensure they start visible
        ctaButtons.forEach(btn => {
            btn.style.opacity = '1';
            btn.style.visibility = 'visible';
        });
        
        // Then animate FROM hidden state
        gsap.fromTo(ctaButtons,
            {
                y: 40,
                opacity: 0,
                scale: 0.9
            },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.7,
                stagger: 0.12,
                ease: 'back.out(1.5)',
                delay: 1.9
            }
        );
    }

    // 10. WAVE
    gsap.from('.gsap-wave', {
        y: 30,
        opacity: 0,
        duration: 1.2,
        ease: 'power2.out',
        delay: 0.3
    });
    
    gsap.to('.gsap-wave', {
        x: 12,
        duration: 6,
        ease: 'sine.inOut',
        repeat: -1,
        yoyo: true
    });

    // ============================================
    // OTHER COMPETITIONS SECTION
    // ============================================

    gsap.to('.gsap-other-orb-1', {
        scale: 1.25,
        opacity: 0.15,
        duration: 7,
        ease: 'sine.inOut',
        repeat: -1,
        yoyo: true
    });
    
    gsap.to('.gsap-other-orb-2', {
        scale: 1.18,
        opacity: 0.18,
        duration: 8,
        ease: 'sine.inOut',
        repeat: -1,
        yoyo: true
    });

    gsap.from('.gsap-other-title', {
        y: 40,
        opacity: 0,
        scale: 0.95,
        duration: 0.9,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.gsap-other-title',
            start: 'top 85%'
        }
    });

    gsap.from('.gsap-other-divider', {
        scaleX: 0,
        duration: 0.9,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.gsap-other-divider',
            start: 'top 85%'
        }
    });

    const otherCards = document.querySelectorAll('.gsap-other-card');
    if (otherCards.length > 0) {
        gsap.from(otherCards, {
            y: 60,
            opacity: 0,
            scale: 0.9,
            duration: 0.7,
            stagger: { amount: 0.5, from: 'start' },
            ease: 'back.out(1.5)',
            scrollTrigger: {
                trigger: '.gsap-other-cards',
                start: 'top 85%'
            }
        });
        
        otherCards.forEach(card => {
            const icon = card.querySelector('.gsap-card-icon svg');
            
            ScrollTrigger.create({
                trigger: card,
                start: 'top 90%',
                onEnter: () => {
                    gsap.to(icon, { rotation: 360, duration: 1, ease: 'power2.out' });
                }
            });
            
            card.addEventListener('mouseenter', () => {
                gsap.to(card, { y: -12, scale: 1.03, duration: 0.4, ease: 'power2.out' });
                gsap.to(icon, { scale: 1.15, rotation: '+=15', duration: 0.4, ease: 'back.out(2)' });
            });
            
            card.addEventListener('mouseleave', () => {
                gsap.to(card, { y: 0, scale: 1, duration: 0.4, ease: 'power2.out' });
                gsap.to(icon, { scale: 1, duration: 0.4, ease: 'power2.out' });
            });
        });
    }

    // ============================================
    // PARALLAX - ONLY FOR SPARKLES
    // ============================================
    if (window.innerWidth >= 768) {
        gsap.to('.gsap-comp-sparkle', {
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

    // ============================================
    // MOBILE OPTIMIZATIONS
    // ============================================
    if (window.innerWidth < 1024) {
        gsap.set('.gsap-comp-sparkle', { willChange: 'transform' });
        
        if (window.devicePixelRatio <= 1.5) {
            gsap.globalTimeline.timeScale(0.85);
        }
    }

    console.log('✅ Competition page animations initialized - CARDS & BUTTONS FIXED');
});
</script>
@endpush