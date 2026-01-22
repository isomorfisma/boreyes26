@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-16 sm:pt-20 lg:pt-24 pb-16 sm:pb-20 lg:pb-24 scroll-mt-20">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Palm Shadows -->
    <div class="absolute top-0 right-0 w-1/3 h-96 opacity-15 pointer-events-none gsap-palm-1" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    <div class="absolute bottom-0 left-0 w-1/4 h-80 opacity-15 pointer-events-none gsap-palm-2" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: bottom left; background-repeat: no-repeat; transform: scaleX(-1);"></div>
    
    <!-- Decorative Light Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-hero-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-hero-orb-2"></div>
    
    <!-- Multiple Sparkles -->
    <div class="gsap-hero-sparkle absolute top-20 right-20 w-12 sm:w-16 h-12 sm:h-16 opacity-80">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="gsap-hero-sparkle absolute top-40 right-1/4 w-10 sm:w-12 h-10 sm:h-12 opacity-70">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="gsap-hero-sparkle absolute top-32 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-75">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="gsap-hero-sparkle absolute bottom-40 right-32 w-14 sm:w-20 h-14 sm:h-20 opacity-85">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.9)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 sm:pt-6 pb-8 sm:pb-12 lg:pb-16 w-full z-10">
        <div class="max-w-4xl">
            <!-- Breadcrumb -->
            <div class="gsap-breadcrumb flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
                <a href="/" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0F4C82] font-bold">FAQ</span>
            </div>

            <div class="ml-4 sm:ml-6 lg:ml-10">
                <!-- Title -->
                <h1 class="gsap-title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-helvetica font-black tracking-tighter mb-6 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]"
                    style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    Frequently Asked Questions
                </h1>

                <!-- Divider -->
                <div class="gsap-divider w-32 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-8 rounded-full shadow-lg"></div>

                <!-- Tagline -->
                <p class="gsap-tagline text-xl sm:text-2xl md:text-3xl font-semibold mb-6 text-[#D3EB9F] font-marola drop-shadow-md">
                    #EyesOnTheFuture
                </p>

                <!-- Description -->
                <p class="gsap-desc text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-2xl font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]"
                   style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
                    Find answers to the most frequently asked questions about our event
                </p>
            </div>
        </div>
    </div>

    <!-- Wave Divider - STATIC (NO ANIMATION) -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 sm:py-20 bg-[#F8FBFC] relative overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Decorative Circles -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-section-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-section-orb-2"></div>
    
    <!-- Sparkles -->
    <div class="absolute top-20 left-20 w-12 h-12 opacity-50 gsap-section-sparkle-1">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute bottom-32 right-1/4 w-16 h-16 opacity-65 gsap-section-sparkle-2">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- FAQ Accordion - NATIVE HTML5 DETAILS/SUMMARY -->
        <div class="space-y-4 gsap-faq-container">
               @forelse($faqs as $index => $faq)
                <details class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#6F97B6]/40 hover:shadow-xl group">
                    <summary class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gradient-to-r hover:from-[#F8FBFC] hover:to-[#F0F9FF] transition cursor-pointer list-none">
                        <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                            {{ $faq->question }}
                        </span>

                        <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300 bg-[#F8FBFC] group-open:bg-gradient-to-br group-open:from-[#C5E6C9] group-open:to-[#D3EB9F] group-hover:shadow-md">
                            <svg class="w-5 h-5 transform transition-transform duration-300 text-[#6F97B6] group-open:rotate-180 group-open:text-[#0F4C82]"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </summary>

                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">{{ $faq->answer }}</p>
                        </div>
                    </div>
                </details>
            @empty
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                    <p class="text-[#6B7280] font-garet">No FAQs available at the moment.</p>
                </div>
            @endforelse
        </div>

        

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-br from-white to-[#F8FBFC] rounded-2xl p-8 border border-[#0F4C82]/10 shadow-xl">
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg animate-bounce-slow">
                    <svg class="w-10 h-10 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl sm:text-3xl font-black text-[#0F4C82] mb-3 font-helvetica">Still Have Questions?</h3>
                <p class="text-[#6B7280] mb-8 font-garet text-base">Don't hesitate to reach out to us!</p>
                
                <!-- Contact Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:contact@example.com" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 border border-[#0F4C82]/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Email Us
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-white text-[#0F4C82] font-helvetica font-black rounded-xl border-2 border-[#0F4C82]/30 hover:bg-[#0F4C82] hover:text-white shadow-xl hover:shadow-2xl transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 sm:py-32 bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white relative overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Palm Shadows -->
    <div class="absolute top-0 left-0 w-1/3 h-full opacity-15 gsap-cta-palm-1" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top left; background-repeat: no-repeat; transform: scaleX(-1);"></div>
    <div class="absolute bottom-0 right-0 w-1/3 h-full opacity-15 gsap-cta-palm-2" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: bottom right; background-repeat: no-repeat;"></div>
    
    <!-- Decorative Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-cta-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-cta-orb-2"></div>
    
    <!-- Multiple Sparkles -->
    <div class="gsap-cta-sparkle absolute top-20 right-20 w-14 sm:w-20 h-14 sm:h-20 opacity-80">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_15px_rgba(211,235,159,0.9)]">
    </div>
    <div class="gsap-cta-sparkle absolute bottom-20 left-32 w-11 sm:w-14 h-11 sm:h-14 opacity-65">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div>
            <!-- Badge -->
            <div class="gsap-cta-badge inline-block mb-6">
                <span class="px-4 py-2 bg-white/20 backdrop-blur-md border-2 border-[#D3EB9F] text-white text-sm font-semibold rounded-full font-marola shadow-lg">
                    Ready to Join?
                </span>
            </div>
            
            <!-- Title -->
            <h2 class="gsap-cta-title text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter mb-6 text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]" 
                style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                Start Your Journey at Event 2026
            </h2>
            
            <!-- Description -->
            <p class="gsap-cta-desc text-base sm:text-lg md:text-xl mb-10 max-w-3xl mx-auto leading-relaxed font-garet font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]" 
               style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
                Register now and be part of the biggest competition this year!
            </p>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                @guest
                <a href="{{ route('register') }}" class="group inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-base min-h-[60px] border-2 border-[#0F4C82]/30">
                    <svg class="w-6 h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
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

@push('styles')
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-25px); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-35px); }
}

@keyframes sway {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(3deg); }
}

@keyframes sway-reverse {
    0%, 100% { transform: scaleX(-1) rotate(0deg); }
    50% { transform: scaleX(-1) rotate(-3deg); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}

/* Hide default details marker */
details summary::-webkit-details-marker {
    display: none;
}

details summary::marker {
    display: none;
}

/* GSAP will handle these, but keep as fallback */
.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
}
</style>
@endpush

@push('scripts')
<script>
// ============================================
// FAQ PAGE GSAP ANIMATIONS - SIMPLIFIED
// ============================================

(function() {
    'use strict';
    
    let isInitialized = false;
    
    function initFAQAnimations() {
        if (isInitialized) {
            console.log('⚠️ FAQ animations already initialized');
            return;
        }
        
        if (typeof gsap === 'undefined') {
            console.error('❌ GSAP not loaded!');
            return;
        }
        
        if (typeof ScrollTrigger === 'undefined') {
            console.error('❌ ScrollTrigger not loaded!');
            return;
        }
        
        console.log('🚀 Initializing FAQ GSAP Animations...');
        
        try {
            gsap.registerPlugin(ScrollTrigger);
            gsap.defaults({ ease: 'power2.out', duration: 0.8 });
            
            // ============================================
            // HERO SECTION ANIMATIONS
            // ============================================
            
            // Orbs breathing effect
            gsap.to('.gsap-hero-orb-1', {
                scale: 1.2,
                opacity: 0.15,
                duration: 5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-hero-orb-2', {
                scale: 1.25,
                opacity: 0.18,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                delay: 1
            });
            
            // Palm shadows sway
            gsap.to('.gsap-palm-1', {
                rotation: 3,
                duration: 10,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                transformOrigin: 'top center'
            });
            
            gsap.to('.gsap-palm-2', {
                rotation: -3,
                duration: 12,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                transformOrigin: 'top center'
            });
            
            // Hero sparkles
            const heroSparkles = gsap.utils.toArray('.gsap-hero-sparkle');
            heroSparkles.forEach((sparkle, index) => {
                gsap.from(sparkle, {
                    scale: 0,
                    opacity: 0,
                    rotation: 360,
                    duration: 1,
                    delay: index * 0.1,
                    ease: 'back.out(1.5)'
                });
                
                gsap.to(sparkle, {
                    rotation: 360,
                    duration: 20 + (index * 3),
                    ease: 'none',
                    repeat: -1
                });
                
                gsap.to(sparkle, {
                    y: -25,
                    duration: 3 + (index * 0.5),
                    ease: 'sine.inOut',
                    repeat: -1,
                    yoyo: true
                });
            });
            
            // Breadcrumb
            gsap.from('.gsap-breadcrumb', {
                x: -60,
                opacity: 0,
                duration: 0.8,
                delay: 0.2
            });
            
            // Title
            gsap.from('.gsap-title', {
                y: 50,
                opacity: 0,
                duration: 1,
                delay: 0.4
            });
            
            // Divider
            gsap.from('.gsap-divider', {
                scaleX: 0,
                transformOrigin: 'left center',
                opacity: 0,
                duration: 0.8,
                delay: 0.7
            });
            
            gsap.to('.gsap-divider', {
                scaleX: 1.05,
                duration: 2.5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // Tagline
            gsap.from('.gsap-tagline', {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 1
            });
            
            // Description
            gsap.from('.gsap-desc', {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 1.3
            });
            
            // ============================================
            // FAQ SECTION ANIMATIONS
            // ============================================
            
            // Section orbs
            gsap.to('.gsap-section-orb-1', {
                scale: 1.3,
                opacity: 0.15,
                duration: 7,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-section-orb-2', {
                scale: 1.2,
                opacity: 0.18,
                duration: 8,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // Section sparkles
            gsap.to('.gsap-section-sparkle-1', {
                y: -20,
                x: 10,
                rotation: 360,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-section-sparkle-2', {
                y: 15,
                x: -10,
                rotation: -360,
                duration: 7,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // FAQ Items - Stagger animation
            const faqItems = gsap.utils.toArray('.gsap-faq-item');
            if (faqItems.length > 0) {
                gsap.from(faqItems, {
                    y: 50,
                    opacity: 0,
                    scale: 0.95,
                    duration: 0.6,
                    stagger: 0.1,
                    ease: 'back.out(1.5)',
                    scrollTrigger: {
                        trigger: '.gsap-faq-container',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                });
            }
            
            // ============================================
            // CTA SECTION ANIMATIONS
            // ============================================
            
            // CTA Orbs
            gsap.to('.gsap-cta-orb-1', {
                scale: 1.2,
                opacity: 0.15,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-cta-orb-2', {
                scale: 1.25,
                opacity: 0.18,
                duration: 7,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // CTA Palm shadows
            gsap.to('.gsap-cta-palm-1', {
                rotation: 3,
                duration: 10,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                transformOrigin: 'top center'
            });
            
            gsap.to('.gsap-cta-palm-2', {
                rotation: -3,
                duration: 12,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                transformOrigin: 'top center'
            });
            
            // CTA Sparkles
            const ctaSparkles = gsap.utils.toArray('.gsap-cta-sparkle');
            ctaSparkles.forEach((sparkle, index) => {
                gsap.to(sparkle, {
                    y: index === 0 ? -15 : 15,
                    x: index === 0 ? 10 : -10,
                    rotation: index === 0 ? 360 : -360,
                    duration: 5 + index,
                    ease: 'sine.inOut',
                    repeat: -1,
                    yoyo: true
                });
            });
            
            // CTA Badge
            gsap.from('.gsap-cta-badge', {
                scale: 0,
                opacity: 0,
                duration: 0.6,
                ease: 'back.out(2)',
                scrollTrigger: {
                    trigger: '.gsap-cta-badge',
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
            
            // CTA Title
            gsap.from('.gsap-cta-title', {
                y: 40,
                opacity: 0,
                duration: 0.9,
                scrollTrigger: {
                    trigger: '.gsap-cta-title',
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
            
            // CTA Description
            gsap.from('.gsap-cta-desc', {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 0.2,
                scrollTrigger: {
                    trigger: '.gsap-cta-desc',
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
            
            // ============================================
            // PARALLAX EFFECTS (Desktop only)
            // ============================================
            if (window.innerWidth >= 768) {
                gsap.to('.gsap-hero-sparkle', {
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
            
            isInitialized = true;
            console.log('✅ FAQ animations initialized successfully!');
            
        } catch (error) {
            console.error('❌ Error initializing FAQ animations:', error);
        }
    }
    
    // ============================================
    // INITIALIZATION
    // ============================================
    
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFAQAnimations);
    } else {
        initFAQAnimations();
    }
    
    window.addEventListener('load', function() {
        if (!isInitialized) {
            setTimeout(initFAQAnimations, 200);
        }
    });
    
})();
</script>
@endpush