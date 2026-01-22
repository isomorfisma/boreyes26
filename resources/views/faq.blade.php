@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-16 sm:pt-20 lg:pt-24 pb-16 sm:pb-20 lg:pb-24">
    <!-- Decorative Light Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-faq-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-faq-orb-2"></div>
    
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
        <div class="max-w-4xl">
            <!-- Breadcrumb -->
            <div class="gsap-faq-breadcrumb mb-8 sm:mb-10">
                <div class="flex items-center space-x-2 text-[#0F4C82] text-xs sm:text-sm font-garet bg-white/90 backdrop-blur-sm px-3 py-2 sm:px-4 sm:py-2 rounded-full inline-flex shadow-lg">
                    <a href="/" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                    <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-[#0F4C82] font-bold">FAQ</span>
                </div>
            </div>

            <div class="ml-0 sm:ml-6 lg:ml-10">
                <!-- Title -->
                <h1 class="gsap-faq-title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-helvetica font-black tracking-tighter mb-5 sm:mb-6 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]"
                    style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    Frequently Asked Questions
                </h1>

                <!-- Divider -->
                <div class="gsap-faq-divider w-32 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-5 sm:mb-6 rounded-full shadow-lg"></div>

                <!-- Tagline -->
                <p class="gsap-faq-tagline text-xl sm:text-2xl md:text-3xl font-semibold mb-6 text-[#D3EB9F] font-marola drop-shadow-md">
                    #EyesOnTheFuture
                </p>

                <!-- Description -->
                <div class="gsap-faq-desc max-w-3xl">
                    <p class="text-base sm:text-lg md:text-xl leading-relaxed font-garet text-white/95 drop-shadow-lg"
                       style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4); line-height: 1.8;">
                        Temukan jawaban atas pertanyaan yang sering diajukan seputar BOREYES 2026
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full gsap-faq-wave" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 sm:py-20 bg-[#F8FBFC] relative overflow-hidden">
    <!-- Decorative Circles -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-faq-section-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-faq-section-orb-2"></div>
    
    <!-- Floating Sparkles -->
    <div class="absolute top-20 left-20 w-12 h-12 opacity-50 gsap-faq-section-sparkle-1">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute bottom-32 right-1/4 w-16 h-16 opacity-65 gsap-faq-section-sparkle-2">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- FAQ Accordion -->
        <div class="space-y-4 gsap-faq-items" x-data="{ activeIndex: null }">
            <!-- FAQ Item 1 -->
            <div class="gsap-faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60"
                 :class="{ 'ring-2 ring-[#D3EB9F] border-[#D3EB9F]': activeIndex === 0 }">
                <button @click="activeIndex = activeIndex === 0 ? null : 0"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-[#F8FBFC]/50 transition group">
                    <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                        Apa itu BOREYES 2026?
                    </span>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                         :class="activeIndex === 0 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F]' : 'bg-[#F8FBFC]'">
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                             :class="[activeIndex === 0 ? 'rotate-180 text-[#0F4C82]' : 'text-[#6F97B6]']"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                
                <div x-show="activeIndex === 0"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden">
                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">BOREYES 2026 adalah event tahunan yang menampilkan berbagai kompetisi menarik untuk pelajar dan mahasiswa. Event ini dirancang untuk mengembangkan potensi dan kreativitas peserta melalui berbagai kategori lomba.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="gsap-faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60"
                 :class="{ 'ring-2 ring-[#D3EB9F] border-[#D3EB9F]': activeIndex === 1 }">
                <button @click="activeIndex = activeIndex === 1 ? null : 1"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-[#F8FBFC]/50 transition group">
                    <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                        Siapa saja yang bisa mengikuti kompetisi?
                    </span>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                         :class="activeIndex === 1 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F]' : 'bg-[#F8FBFC]'">
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                             :class="[activeIndex === 1 ? 'rotate-180 text-[#0F4C82]' : 'text-[#6F97B6]']"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                
                <div x-show="activeIndex === 1"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden">
                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">BOREYES 2026 terbuka untuk semua pelajar SMA/SMK dan mahasiswa S1 di seluruh Indonesia. Setiap kompetisi memiliki ketentuan khusus yang dapat dilihat di halaman detail kompetisi masing-masing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="gsap-faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60"
                 :class="{ 'ring-2 ring-[#D3EB9F] border-[#D3EB9F]': activeIndex === 2 }">
                <button @click="activeIndex = activeIndex === 2 ? null : 2"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-[#F8FBFC]/50 transition group">
                    <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                        Bagaimana cara mendaftar kompetisi?
                    </span>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                         :class="activeIndex === 2 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F]' : 'bg-[#F8FBFC]'">
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                             :class="[activeIndex === 2 ? 'rotate-180 text-[#0F4C82]' : 'text-[#6F97B6]']"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                
                <div x-show="activeIndex === 2"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden">
                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">Pendaftaran dapat dilakukan melalui website resmi BOREYES 2026. Pilih kompetisi yang ingin diikuti, isi formulir pendaftaran, upload dokumen yang diperlukan, dan lakukan pembayaran sesuai ketentuan yang berlaku.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="gsap-faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60"
                 :class="{ 'ring-2 ring-[#D3EB9F] border-[#D3EB9F]': activeIndex === 3 }">
                <button @click="activeIndex = activeIndex === 3 ? null : 3"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-[#F8FBFC]/50 transition group">
                    <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                        Kapan batas waktu pendaftaran?
                    </span>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                         :class="activeIndex === 3 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F]' : 'bg-[#F8FBFC]'">
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                             :class="[activeIndex === 3 ? 'rotate-180 text-[#0F4C82]' : 'text-[#6F97B6]']"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                
                <div x-show="activeIndex === 3"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden">
                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">Batas waktu pendaftaran berbeda untuk setiap kompetisi. Informasi detail mengenai timeline dapat dilihat pada halaman masing-masing kompetisi. Kami sarankan untuk mendaftar sesegera mungkin karena kuota peserta terbatas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="gsap-faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60"
                 :class="{ 'ring-2 ring-[#D3EB9F] border-[#D3EB9F]': activeIndex === 4 }">
                <button @click="activeIndex = activeIndex === 4 ? null : 4"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-[#F8FBFC]/50 transition group">
                    <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                        Apakah ada biaya pendaftaran?
                    </span>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                         :class="activeIndex === 4 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F]' : 'bg-[#F8FBFC]'">
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                             :class="[activeIndex === 4 ? 'rotate-180 text-[#0F4C82]' : 'text-[#6F97B6]']"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                
                <div x-show="activeIndex === 4"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden">
                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">Ya, setiap kompetisi memiliki biaya pendaftaran yang berbeda-beda. Biaya tersebut sudah termasuk sertifikat, merchandise, dan akses ke seluruh fasilitas event. Informasi lengkap mengenai biaya dapat dilihat di halaman detail kompetisi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="gsap-faq-item bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60"
                 :class="{ 'ring-2 ring-[#D3EB9F] border-[#D3EB9F]': activeIndex === 5 }">
                <button @click="activeIndex = activeIndex === 5 ? null : 5"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-[#F8FBFC]/50 transition group">
                    <span class="font-black text-[#0F4C82] pr-8 font-helvetica group-hover:text-[#6F97B6] transition text-base sm:text-lg">
                        Apa saja hadiah untuk pemenang?
                    </span>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                         :class="activeIndex === 5 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F]' : 'bg-[#F8FBFC]'">
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                             :class="[activeIndex === 5 ? 'rotate-180 text-[#0F4C82]' : 'text-[#6F97B6]']"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                
                <div x-show="activeIndex === 5"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden">
                    <div class="px-6 pb-6">
                        <div class="pt-2 border-t border-[#0F4C82]/10">
                            <p class="text-[#374151] leading-relaxed font-garet pt-4">Pemenang akan mendapatkan uang tunai, sertifikat, trophy, dan berbagai hadiah menarik lainnya. Total hadiah mencapai puluhan juta rupiah. Selain itu, pemenang juga berkesempatan untuk mendapatkan networking dengan profesional di bidangnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 gsap-faq-contact bg-gradient-to-br from-white to-[#F8FBFC] rounded-2xl p-8 border border-[#0F4C82]/10 shadow-xl">
            <div class="text-center">
                <div class="gsap-faq-contact-icon w-20 h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-10 h-10 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl sm:text-3xl font-black text-[#0F4C82] mb-3 font-helvetica">Masih Ada Pertanyaan?</h3>
                <p class="text-[#6B7280] mb-8 font-garet text-base">Jangan ragu untuk menghubungi kami!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center gsap-faq-contact-buttons">
                    <a href="mailto:contact@boreyes2026.com" class="gsap-faq-contact-btn inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 border border-[#0F4C82]/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Email Us
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="gsap-faq-contact-btn inline-flex items-center justify-center px-8 py-4 bg-white text-[#0F4C82] font-helvetica font-black rounded-xl border-2 border-[#0F4C82]/30 hover:bg-[#0F4C82] hover:text-white shadow-xl hover:shadow-2xl transition-all duration-300">
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
    <!-- Decorative Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl gsap-cta-orb-1"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl gsap-cta-orb-2"></div>
    
    <!-- Sparkles -->
    <div class="gsap-cta-sparkle-1 absolute top-20 right-20 w-14 sm:w-20 h-14 sm:h-20 opacity-80">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_15px_rgba(211,235,159,0.9)]">
    </div>
    <div class="gsap-cta-sparkle-2 absolute bottom-20 left-32 w-11 sm:w-14 h-11 sm:h-14 opacity-65">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div>
            <!-- Badge -->
            <div class="gsap-cta-badge inline-block mb-6">
                <span class="px-4 py-2 bg-white/20 backdrop-blur-md border-2 border-[#D3EB9F] text-white text-sm font-semibold rounded-full font-marola shadow-lg">
                    Siap Bergabung?
                </span>
            </div>
            
            <!-- Title -->
            <h2 class="gsap-cta-title text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter mb-6 text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]" 
                style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                Mulai Perjalananmu di BOREYES 2026
            </h2>
            
            <!-- Description -->
            <p class="gsap-cta-desc text-base sm:text-lg md:text-xl mb-10 max-w-3xl mx-auto leading-relaxed font-garet text-white/95 drop-shadow-lg" 
               style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4); line-height: 1.8;">
                Daftarkan dirimu sekarang dan jadilah bagian dari kompetisi terbesar tahun ini!
            </p>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-5 justify-center gsap-cta-buttons">
                <a href="/" class="gsap-cta-btn group inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-base min-h-[60px] border-2 border-[#0F4C82]/30">
                    <svg class="w-6 h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="/" class="gsap-cta-btn group inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-md border-3 border-white text-white font-helvetica font-black rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-base min-h-[60px]">
                    <span>Lihat Kompetisi</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
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

.animate-float {
    animation: float 6s ease-in-out infinite;
}
</style>
@endpush

@push('scripts')
<script>
// ============================================
// FAQ PAGE GSAP ANIMATIONS - FIXED VERSION
// ============================================

(function() {
    'use strict';
    
    // Flag untuk prevent double initialization
    let isInitialized = false;
    
    function initFAQAnimations() {
        // Prevent double init
        if (isInitialized) {
            console.log('⚠️ FAQ animations already initialized');
            return;
        }
        
        // Check if GSAP loaded
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
            // Register ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);
            
            // Set defaults for smoother animations
            gsap.defaults({
                ease: 'power2.out',
                duration: 0.8
            });
            
            // ============================================
            // HERO SECTION ANIMATIONS
            // ============================================
            
            // 1. ORBS - Breathing effect
            gsap.to('.gsap-faq-orb-1', {
                scale: 1.2,
                opacity: 0.15,
                duration: 5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-faq-orb-2', {
                scale: 1.25,
                opacity: 0.18,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                delay: 1
            });
            
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
            
            // 3. BREADCRUMB
            gsap.from('.gsap-faq-breadcrumb', {
                x: -60,
                opacity: 0,
                duration: 0.8,
                delay: 0.2
            });
            
            // 4. TITLE - Slide up with fade
            gsap.from('.gsap-faq-title', {
                y: 50,
                opacity: 0,
                duration: 1,
                delay: 0.4
            });
            
            // 5. DIVIDER - Scale from left
            gsap.from('.gsap-faq-divider', {
                scaleX: 0,
                transformOrigin: 'left center',
                opacity: 0,
                duration: 0.8,
                delay: 0.7
            });
            
            // Divider pulse
            gsap.to('.gsap-faq-divider', {
                scaleX: 1.05,
                duration: 2.5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // 6. TAGLINE
            gsap.from('.gsap-faq-tagline', {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 1
            });
            
            // 7. DESCRIPTION
            gsap.from('.gsap-faq-desc', {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 1.3
            });
            
            // 8. WAVE - Subtle wave motion
            gsap.from('.gsap-faq-wave', {
                y: 30,
                opacity: 0,
                duration: 1.2,
                delay: 0.3
            });
            
            gsap.to('.gsap-faq-wave', {
                x: 15,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // ============================================
            // FAQ SECTION ANIMATIONS
            // ============================================
            
            // 9. SECTION ORBS
            gsap.to('.gsap-faq-section-orb-1', {
                scale: 1.3,
                opacity: 0.15,
                duration: 7,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-faq-section-orb-2', {
                scale: 1.2,
                opacity: 0.18,
                duration: 8,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // 10. SECTION SPARKLES
            gsap.to('.gsap-faq-section-sparkle-1', {
                y: -20,
                x: 10,
                rotation: 360,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-faq-section-sparkle-2', {
                y: 15,
                x: -10,
                rotation: -360,
                duration: 7,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // 11. FAQ ITEMS - Stagger entrance
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
                        trigger: '.gsap-faq-items',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                });
                
                // Add hover effect to each item
                faqItems.forEach(item => {
                    item.addEventListener('mouseenter', () => {
                        gsap.to(item, {
                            scale: 1.02,
                            duration: 0.3,
                            ease: 'power2.out'
                        });
                    });
                    
                    item.addEventListener('mouseleave', () => {
                        gsap.to(item, {
                            scale: 1,
                            duration: 0.3,
                            ease: 'power2.out'
                        });
                    });
                });
            }
            
            // 12. CONTACT SECTION
            gsap.from('.gsap-faq-contact', {
                y: 60,
                opacity: 0,
                scale: 0.95,
                duration: 0.8,
                ease: 'back.out(1.5)',
                scrollTrigger: {
                    trigger: '.gsap-faq-contact',
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
            
            // 13. CONTACT ICON - Pop in + bounce
            gsap.from('.gsap-faq-contact-icon', {
                scale: 0,
                rotation: 360,
                duration: 0.8,
                delay: 0.3,
                ease: 'back.out(2)',
                scrollTrigger: {
                    trigger: '.gsap-faq-contact',
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
            
            gsap.to('.gsap-faq-contact-icon', {
                y: -8,
                duration: 2,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true,
                scrollTrigger: {
                    trigger: '.gsap-faq-contact',
                    start: 'top 85%'
                }
            });
            
            // 14. CONTACT BUTTONS
            const contactButtons = gsap.utils.toArray('.gsap-faq-contact-btn');
            if (contactButtons.length > 0) {
                gsap.from(contactButtons, {
                    y: 30,
                    opacity: 0,
                    scale: 0.9,
                    duration: 0.6,
                    stagger: 0.15,
                    ease: 'back.out(1.5)',
                    scrollTrigger: {
                        trigger: '.gsap-faq-contact-buttons',
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                });
            }
            
            // ============================================
            // CTA SECTION ANIMATIONS
            // ============================================
            
            // 15. CTA ORBS
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
            
            // 16. CTA SPARKLES
            gsap.to('.gsap-cta-sparkle-1', {
                y: -15,
                x: 10,
                rotation: 360,
                duration: 5,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            gsap.to('.gsap-cta-sparkle-2', {
                y: 15,
                x: -10,
                rotation: -360,
                duration: 6,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // 17. CTA BADGE
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
            
            // 18. CTA TITLE
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
            
            // 19. CTA DESCRIPTION
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
            
            // 20. CTA BUTTONS
            const ctaButtons = gsap.utils.toArray('.gsap-cta-btn');
            if (ctaButtons.length > 0) {
                gsap.from(ctaButtons, {
                    y: 40,
                    opacity: 0,
                    scale: 0.9,
                    duration: 0.7,
                    stagger: 0.15,
                    ease: 'back.out(1.5)',
                    scrollTrigger: {
                        trigger: '.gsap-cta-buttons',
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                });
            }
            
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
            
            // Set initialized flag
            isInitialized = true;
            console.log('✅ FAQ animations initialized successfully!');
            
        } catch (error) {
            console.error('❌ Error initializing FAQ animations:', error);
        }
    }
    
    // ============================================
    // INITIALIZATION LOGIC
    // ============================================
    
    // Try multiple initialization methods
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFAQAnimations);
    } else {
        // DOM already loaded
        initFAQAnimations();
    }
    
    // Backup: window load event
    window.addEventListener('load', function() {
        if (!isInitialized) {
            setTimeout(initFAQAnimations, 200);
        }
    });
    
})();
</script>
@endpush