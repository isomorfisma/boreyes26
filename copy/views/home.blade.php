@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden min-h-screen flex items-center pb-0">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Palm Shadows -->
    <div class="absolute top-0 right-0 w-1/3 h-96 opacity-15 pointer-events-none animate-sway" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    <div class="absolute bottom-20 left-0 w-1/4 h-80 opacity-15 pointer-events-none animate-sway-reverse" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: bottom left; background-repeat: no-repeat; transform: scaleX(-1);"></div>
    
    <!-- Multiple Sparkles with Different Colors and Sizes -->
    <div class="absolute top-20 right-20 w-12 sm:w-16 h-12 sm:h-16 opacity-80 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-40 right-1/4 w-10 sm:w-12 h-10 sm:h-12 opacity-70 animate-float-delayed" style="animation-delay: 0.5s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="absolute top-32 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-75 animate-float-delayed">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-1/3 left-1/4 w-8 sm:w-10 h-8 sm:h-10 opacity-60 animate-float" style="animation-delay: 1s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="absolute bottom-40 right-32 w-14 sm:w-20 h-14 sm:h-20 opacity-85 animate-float" style="animation-delay: 0.3s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.9)]">
    </div>
    <div class="absolute bottom-1/3 left-1/3 w-7 sm:w-8 h-7 sm:h-8 opacity-65 animate-float-delayed" style="animation-delay: 0.7s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-1/2 right-1/3 w-9 sm:w-11 h-9 sm:h-11 opacity-70 animate-float" style="animation-delay: 1.2s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="absolute bottom-32 left-40 w-10 sm:w-13 h-10 sm:h-13 opacity-75 animate-float-delayed" style="animation-delay: 0.4s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-1/2 right-1/2 w-9 sm:w-11 h-9 sm:h-11 opacity-70 animate-float" style="animation-delay: 1.2s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="absolute bottom-32 left-60 w-10 sm:w-13 h-10 sm:h-13 opacity-75 animate-float-delayed" style="animation-delay: 0.4s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    
   <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 w-full z-10">
  <div class="max-w-4xl animate-fade-in-up space-y-4 sm:space-y-5">
    
    <div class="inline-block">
      <span class="px-4 py-2 bg-white/20 backdrop-blur-md border-2 border-[#D3EB9F] text-[#0F4C82] text-xs sm:text-sm font-semibold rounded-full font-helvetica shadow-lg hover:bg-[#D3EB9F]/30 transition-all duration-300 transform hover:scale-105">
        Nama Organisasi Student Chapter 2026
      </span>
    </div>

    <h1
      class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-helvetica font-black tracking-tighter leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]"
      style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);"
    >
      NAMA EVENT 2026
    </h1>

    <div class="w-32 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white rounded-full shadow-lg"></div>

    <p class="text-xl sm:text-2xl md:text-3xl font-semibold text-[#D3EB9F] font-marola drop-shadow-md">
      #TaglineEvent
    </p>

    <p
      class="text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-2xl font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]"
      style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
    </p>

    <!-- tombol kasih jarak agak lega -->
    <div class="pt-3 flex flex-col sm:flex-row gap-4">
      <button onclick="scrollToNavAndOpenDropdown()"
        class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base min-h-[56px] cursor-pointer">
        <span>Lihat Kompetisi</span>
        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
        </svg>
      </button>

      <a href="{{ route('register') }}"
        class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-md border-3 border-white text-white font-helvetica font-black rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm sm:text-base min-h-[56px]">
        <span class="drop-shadow-[0_1px_1px_rgba(15,76,130,0.35)]">Daftar Sekarang</span>
      </a>
    </div>

  </div>
</div>


    <!-- Wave Divider - Seamless -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- What is Section -->
<section id="about" class="py-20 sm:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Decorative Circles -->
    <div class="absolute top-20 right-20 w-64 h-64 bg-[#D3EB9F]/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl"></div>
    
    <!-- Multiple Sparkles -->
    <div class="absolute top-20 left-20 w-10 sm:w-12 h-10 sm:h-12 opacity-50 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-40 right-40 w-11 sm:w-14 h-11 sm:h-14 opacity-60 animate-float-delayed" style="animation-delay: 0.6s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="absolute bottom-40 left-1/3 w-8 sm:w-10 h-8 sm:h-10 opacity-55 animate-float" style="animation-delay: 0.9s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute bottom-32 right-1/4 w-12 sm:w-16 h-12 sm:h-16 opacity-65 animate-float-delayed">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                What is [NAMA EVENT]?
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
            <p class="text-base sm:text-lg text-[#6B7280] max-w-3xl mx-auto leading-relaxed font-garet">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </p>
        </div>

       <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Vision -->
            <div class="group bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden animate-fade-in-up">
                <div class="absolute inset-0 bg-gradient-to-br from-[#C5E6C9]/5 to-[#D3EB9F]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>

                <!-- center all content -->
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#0F4C82]/20 to-[#6F97B6]/20 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3">Vision</h3>
                    <p class="text-sm text-[#6B7280] leading-relaxed font-garet">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="group bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden animate-fade-in-up animation-delay-200">
                <div class="absolute inset-0 bg-gradient-to-br from-[#C5E6C9]/5 to-[#D3EB9F]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>

                <!-- center all content -->
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#0F4C82]/20 to-[#6F97B6]/20 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3">Mission</h3>
                    <p class="text-sm text-[#6B7280] leading-relaxed font-garet">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="group bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 relative overflow-hidden animate-fade-in-up animation-delay-400">
                <div class="absolute inset-0 bg-gradient-to-br from-[#C5E6C9]/5 to-[#D3EB9F]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>

                <!-- center all content -->
                <div class="relative z-10 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#0F4C82]/20 to-[#6F97B6]/20 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3">Values</h3>
                    <p class="text-sm text-[#6B7280] leading-relaxed font-garet">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Grand Theme -->
<section id="grand-theme" class="py-20 sm:py-28 bg-white scroll-mt-20 relative overflow-hidden">
    <!-- Palm Shadow Overlay -->
    <div class="absolute top-0 right-0 w-1/3 h-96 opacity-10 pointer-events-none animate-sway" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-40 left-10 w-72 h-72 bg-[#C5E6C9]/10 rounded-full blur-3xl"></div>
    
    <!-- Multiple Sparkles -->
    <div class="absolute top-32 right-20 w-11 sm:w-14 h-11 sm:h-14 opacity-60 animate-float-delayed">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="absolute bottom-40 left-32 w-10 sm:w-12 h-10 sm:h-12 opacity-55 animate-float" style="animation-delay: 0.8s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-1/2 left-1/4 w-8 sm:w-10 h-8 sm:h-10 opacity-50 animate-float-delayed" style="animation-delay: 1.1s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl mx-auto text-center animate-fade-in-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Grand Theme 2026
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
            <p class="text-xl sm:text-2xl font-semibold text-[#0F4C82] mb-8 font-garet leading-relaxed">
                "Judul Grand Theme Tahun Ini Yang Menggambarkan Visi dan Misi"
            </p>
            <p class="text-base sm:text-lg text-[#6B7280] mb-10 leading-relaxed font-garet max-w-3xl mx-auto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-2xl mx-auto">
                <div class="flex items-start space-x-3 p-4 bg-gradient-to-br from-[#C5E6C9]/10 to-[#D3EB9F]/10 rounded-2xl border border-[#D3EB9F]/30">
                    <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center mt-0.5">
                        <svg class="w-3.5 h-3.5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base text-[#0F4C82] font-garet font-medium text-left">Poin Fokus Pertama</span>
                </div>
                <div class="flex items-start space-x-3 p-4 bg-gradient-to-br from-[#C5E6C9]/10 to-[#D3EB9F]/10 rounded-2xl border border-[#D3EB9F]/30">
                    <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center mt-0.5">
                        <svg class="w-3.5 h-3.5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base text-[#0F4C82] font-garet font-medium text-left">Poin Fokus Kedua</span>
                </div>
                <div class="flex items-start space-x-3 p-4 bg-gradient-to-br from-[#C5E6C9]/10 to-[#D3EB9F]/10 rounded-2xl border border-[#D3EB9F]/30">
                    <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center mt-0.5">
                        <svg class="w-3.5 h-3.5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base text-[#0F4C82] font-garet font-medium text-left">Poin Fokus Ketiga</span>
                </div>
                <div class="flex items-start space-x-3 p-4 bg-gradient-to-br from-[#C5E6C9]/10 to-[#D3EB9F]/10 rounded-2xl border border-[#D3EB9F]/30">
                    <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center mt-0.5">
                        <svg class="w-3.5 h-3.5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base text-[#0F4C82] font-garet font-medium text-left">Poin Fokus Keempat</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Logo & Mascot Section -->
<section id="logo-mascot" class="py-20 sm:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Multiple Sparkles -->
    <div class="absolute top-20 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-60 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-40 right-32 w-12 sm:w-16 h-12 sm:h-16 opacity-65 animate-float-delayed" style="animation-delay: 0.5s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Logo & Mascot
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
        </div>

        <!-- Side by Side Flip Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 max-w-6xl mx-auto">
            
            <!-- Logo Flip Card -->
            <div class="flip-card h-[400px] sm:h-[450px] animate-fade-in-left">
                <div class="flip-card-inner">
                    <!-- Front Side -->
                    <div class="flip-card-front">
                        <div class="relative h-full bg-gradient-to-br from-[#0F4C82]/95 via-[#6F97B6]/90 to-[#8CCDCF]/85 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl border border-white/20">
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-md"></div>
                            <div class="absolute -top-20 -left-20 w-40 h-40 bg-white/20 rounded-full blur-3xl"></div>
                            
                            <div class="relative h-full flex flex-col items-center justify-center p-8">
                                <div class="absolute top-6 left-6 inline-flex items-center space-x-2 px-4 py-2 bg-white/20 backdrop-blur-md rounded-full border border-white/30">
                                    <div class="w-2 h-2 rounded-full bg-[#D3EB9F] animate-pulse"></div>
                                    <span class="text-xs font-helvetica font-bold text-white/90 uppercase tracking-wider">Official Logo</span>
                                </div>
                                
                                <img src="{{ asset('assets/svg/LOGO.svg') }}" alt="Event Logo" class="w-full h-auto max-w-[280px] max-h-[280px] object-contain drop-shadow-2xl mb-8">
                                
                                <div class="absolute bottom-6 left-0 right-0 flex justify-center">
                                    <div class="flex items-center space-x-2 text-white/80 text-sm bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full border border-white/30">
                                        <span class="font-garet">Klik untuk detail</span>
                                        <svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    Nama Logo 2026
                                </h3>
                                
                                <p class="text-sm sm:text-base text-[#0F4C82]/90 font-garet leading-relaxed mb-6 flex-grow">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                
                                <div class="flex items-center justify-between pt-4 border-t-2 border-[#0F4C82]/20">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-3 h-3 rounded-full bg-[#0F4C82] shadow-lg"></div>
                                        <span class="text-sm text-[#0F4C82] font-garet font-bold">Logo Resmi 2026</span>
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
            <div class="flip-card h-[400px] sm:h-[450px] animate-fade-in-right">
                <div class="flip-card-inner">
                    <!-- Front Side -->
                    <div class="flip-card-front">
                        <div class="relative h-full bg-gradient-to-bl from-[#8CCDCF]/85 via-[#6F97B6]/90 to-[#0F4C82]/95 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl border border-white/20">
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-md"></div>
                            <div class="absolute -top-20 -right-20 w-40 h-40 bg-white/20 rounded-full blur-3xl"></div>
                            
                            <div class="relative h-full flex flex-col items-center justify-center p-8">
                                <div class="absolute top-6 right-6 inline-flex items-center space-x-2 px-4 py-2 bg-white/20 backdrop-blur-md rounded-full border border-white/30">
                                    <div class="w-2 h-2 rounded-full bg-[#D3EB9F] animate-pulse"></div>
                                    <span class="text-xs font-helvetica font-bold text-white/90 uppercase tracking-wider">Official Mascot</span>
                                </div>
                                
                                <img src="{{ asset('assets/svg/MATA.svg') }}" alt="Event Mascot" class="w-full h-auto max-w-[280px] max-h-[280px] object-contain drop-shadow-2xl mb-8">
                                
                                <div class="absolute bottom-6 left-0 right-0 flex justify-center">
                                    <div class="flex items-center space-x-2 text-white/80 text-sm bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full border border-white/30">
                                        <span class="font-garet">Klik untuk detail</span>
                                        <svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    Nama Maskot
                                </h3>
                                
                                <p class="text-sm sm:text-base text-[#0F4C82]/90 font-garet leading-relaxed mb-6 flex-grow">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                
                                <div class="flex items-center justify-between pt-4 border-t-2 border-[#0F4C82]/20">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-3 h-3 rounded-full bg-[#0F4C82] shadow-lg"></div>
                                        <span class="text-sm text-[#0F4C82] font-garet font-bold">Maskot Resmi 2026</span>
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
        <div class="text-center mb-12 animate-fade-in-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Team Profile
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-6 rounded-full shadow-md"></div>
            <p class="text-sm sm:text-base text-[#6B7280] max-w-2xl mx-auto font-garet">
                Struktur organisasi BOREYES 2026
            </p>
        </div>

        <!-- ========== DESKTOP VERSION ========== -->
        <div class="hidden lg:block max-w-6xl mx-auto">
            <!-- Level 1: PO & SV -->
            <div class="flex justify-center gap-4 mb-6">
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs uppercase text-[#D3EB9F] font-helvetica font-bold">PO</p>
                                <h3 class="text-base font-helvetica font-black text-white">Project Officer</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
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
                <div class="w-0.5 h-8 bg-gradient-to-b from-[#8CCDCF] to-[#D3EB9F]"></div>
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
                <div class="relative group">
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
                <div class="relative group">
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
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Treasurer</p>
                            <h4 class="text-xs font-helvetica font-black text-[#0F4C82]">Treasurer 1&2</h4>
                        </div>
                    </div>
                </div>

                <!-- Secretary - SAME COLOR AS VPO -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
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
                <div class="absolute left-[50%] top-0 w-0.5 h-6 bg-[#D3EB9F]"></div>
                <div class="absolute left-[50%] top-6 w-[8%] h-0.5 bg-[#D3EB9F]"></div>
                <div class="absolute left-[58%] top-6 w-0.5 h-[80px] bg-[#D3EB9F]"></div>
                <div class="absolute left-[58%] top-[104px] w-[3%] h-0.5 bg-[#D3EB9F]"></div>

                                
                
                <!-- Treasurer (62.5%) straight to Fundraising (82%) -->
                <div class="absolute left-[62.5%] top-0 w-0.5 h-6 bg-[#D3EB9F]"></div>
                <div class="absolute left-[62.5%] top-6 w-[28%] h-0.5 bg-[#D3EB9F]"></div> 
                <div class="absolute left-[90.5%] top-6 w-0.5 h-6 bg-[#D3EB9F]"></div>
                
            </div>

            <!-- Level 3: Divisions - ADJUSTED POSITIONS -->
            <div class="flex items-start gap-3 max-w-6xl mx-auto">
                <!-- Internal - SHIFT MORE LEFT (~3%) -->
                <div class="w-[16%] group relative" style="margin-left: 0;">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Internal</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                    </div>
                </div>

                <!-- Competition - (~22%) -->
                <div class="w-[16%] group relative ">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Competition</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                    </div>
                </div>

                <!-- External - (~42%) FROM VPO 2 -->
                <div class="w-[16%] group relative md:translate-x-14">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">External</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                    </div>
                </div>

                <!-- Operational - (60%) FROM CENTER -->
                <div class="w-[16%] group relative md:translate-x-28">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Operational</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                    </div>
                </div>

                <!-- Fundraising - (~82%) -->
                <div class="w-[16%] group relative md:translate-x-44">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative bg-white/40 rounded-xl p-3 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                        <div class="w-8 h-8 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                            <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Fundraising</p>
                        <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                    </div>
                </div>
            </div>
        </div>

       <!-- ========== MOBILE VERSION ========== -->
        <div class="block lg:hidden max-w-md mx-auto space-y-6">
            <!-- Level 1: PO & SV -->
            <div class="space-y-4">
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs uppercase text-[#D3EB9F] font-helvetica font-bold">PO</p>
                                <h3 class="text-base font-helvetica font-black text-white">Project Officer</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-xl p-4 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/50">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
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
                <div class="relative group">
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

                <div class="relative group">
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

                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82]/80 font-helvetica font-bold mb-1">Treasurer</p>
                            <h4 class="text-xs font-helvetica font-black text-[#0F4C82]">Treasurer 1&2</h4>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-xl blur opacity-30"></div>
                    <div class="relative bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl p-3 shadow-xl">
                        <div class="text-center">
                            <div class="w-10 h-10 rounded-full bg-white/30 flex items-center justify-center border-2 border-white/50 mx-auto mb-2">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
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
            <div class="group relative max-w-xs mx-auto">
                <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                    <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                        <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Operational</p>
                    <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
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
                        <div class="group relative">
                            <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                                <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                    <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </div>
                                <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Internal</p>
                                <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                            </div>
                        </div>

                        <div class="group relative">
                            <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                            <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                                <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                    <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>
                                <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Competition</p>
                                <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
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
                    <div class="group relative max-w-xs mx-auto">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                            <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">External</p>
                            <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
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
                    <div class="group relative max-w-xs mx-auto">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-[#0F4C82]/50 to-[#6F97B6]/50 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative bg-white/40 rounded-xl p-4 border-2 border-[#0F4C82]/20">
                            <div class="w-10 h-10 rounded-xl bg-[#0F4C82]/10 flex items-center justify-center mb-2 mx-auto">
                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <p class="text-xs uppercase text-[#0F4C82] font-helvetica font-bold text-center mb-1">Fundraising</p>
                            <p class="text-xs text-[#6B7280] font-garet text-center">Nama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section id="timeline" class="py-20 sm:py-28 bg-gradient-to-b from-[#F8FBFC] to-white scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, #0F4C82 0, #0F4C82 1px, transparent 0, transparent 50%); background-size: 20px 20px;"></div>
    </div>
    
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-[#6F97B6]/20 to-transparent rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-gradient-to-tr from-[#D3EB9F]/20 to-transparent rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 animate-fade-in-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Timeline
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
            <p class="text-base sm:text-lg text-[#6B7280] max-w-2xl mx-auto font-garet">
                Lorem ipsum dolor sit amet consectetur adipiscing elit
            </p>
        </div>

        <div class="relative max-w-6xl mx-auto">
            <div class="absolute left-1/2 top-0 bottom-0 w-1 -ml-0.5 hidden lg:block overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-[#0F4C82] via-[#6F97B6] via-[#8CCDCF] to-[#D3EB9F] animate-gradient-slow"></div>
            </div>

            <div class="absolute left-6 top-0 bottom-0 w-1 bg-gradient-to-b from-[#0F4C82] via-[#6F97B6] via-[#8CCDCF] to-[#D3EB9F] lg:hidden"></div>

            <div class="space-y-12 sm:space-y-16">
                <!-- Phase 1 -->
                <div class="relative animate-fade-in-up">
                    <div class="lg:flex lg:items-center">
                        <div class="lg:w-1/2 lg:pr-12 lg:text-right hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md ml-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500 animate-gradient-x"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3 lg:flex-row-reverse">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] text-white text-xs font-black rounded-full font-helvetica shadow-lg">PHASE 1</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">Tanggal</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Judul Phase 1</h3>
                                    <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] text-white text-xs font-black rounded-full font-helvetica shadow-lg">PHASE 1</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">Tanggal</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Judul Phase 1</h3>
                                    <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pl-12"></div>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="relative animate-fade-in-up animation-delay-200">
                    <div class="lg:flex lg:items-center lg:flex-row-reverse">
                        <div class="lg:w-1/2 lg:pl-12 hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md mr-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500 animate-gradient-x"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#6F97B6]/20 hover:border-[#6F97B6]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white text-xs font-black rounded-full font-helvetica shadow-lg">PHASE 2</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">Tanggal</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Judul Phase 2</h3>
                                    <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#6F97B6]/20 hover:border-[#6F97B6]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white text-xs font-black rounded-full font-helvetica shadow-lg">PHASE 2</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">Tanggal</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Judul Phase 2</h3>
                                    <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 lg:pr-12"></div>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="relative animate-fade-in-up animation-delay-400">
                    <div class="lg:flex lg:items-center">
                        <div class="lg:w-1/2 lg:pr-12 lg:text-right hidden lg:block">
                            <div class="group relative inline-block w-full max-w-md ml-auto">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500 animate-gradient-x"></div>
                                <div class="relative bg-white rounded-2xl p-6 shadow-xl border-2 border-[#8CCDCF]/20 hover:border-[#8CCDCF]/50 transition-all duration-300 transform group-hover:-translate-y-1">
                                    <div class="flex items-center justify-between mb-3 lg:flex-row-reverse">
                                        <span class="px-4 py-2 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg">PHASE 3</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">Tanggal</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Judul Phase 3</h3>
                                    <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:hidden ml-16 flex-1">
                            <div class="group relative inline-block w-full">
                                <div class="absolute -inset-1 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] rounded-2xl blur-lg opacity-25 group-hover:opacity-75 transition duration-500"></div>
                                <div class="relative bg-white rounded-2xl p-5 shadow-xl border-2 border-[#8CCDCF]/20 hover:border-[#8CCDCF]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="px-3 py-1.5 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg">PHASE 3</span>
                                        <span class="text-[#0F4C82] font-black text-sm font-helvetica">Tanggal</span>
                                    </div>
                                    <h3 class="text-xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-2">Judul Phase 3</h3>
                                    <p class="text-sm text-[#6B7280] font-garet">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute left-6 lg:left-1/2 transform lg:-translate-x-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-full border-4 border-white shadow-2xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-[#0F4C82] rounded-full"></div>
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
    <div class="absolute top-20 right-20 w-14 sm:w-20 h-14 sm:h-20 opacity-80 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_15px_rgba(211,235,159,0.9)]">
    </div>
    <div class="absolute top-1/3 right-1/4 w-14 sm:w-20 h-20 sm:h-20 opacity-70 animate-float-delayed" style="animation-delay: 0.6s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_12px_rgba(111,151,182,0.9)]">
    </div>
    <div class="absolute bottom-1/5 left-1/4 translate-y-6 w-20 h-20 sm:w-20 sm:h-20 opacity-75 animate-float" style="animation-delay: 0.3s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_14px_rgba(211,235,159,0.9)]">
    </div>

    <div class="absolute bottom-20 left-32 w-11 sm:w-14 h-11 sm:h-14 opacity-65 animate-float-delayed">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)]">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div class="animate-fade-in-up">
            <div class="inline-block mb-6">
                <span class="px-4 py-2 bg-white/20 backdrop-blur-md border-2 border-[#D3EB9F] text-[#D3EB9F] text-sm font-semibold rounded-full font-garet shadow-lg">
                    Join Us Now
                </span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter mb-6 drop-shadow-lg">
                Siap untuk #TaglineEvent?
            </h2>
            <p class="text-base sm:text-lg md:text-xl mb-10 text-white/95 max-w-3xl mx-auto leading-relaxed font-garet drop-shadow-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center mb-16">
                <a href="{{ route('register') }}" class="group inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-base font-helvetica font-black rounded-2xl shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 min-h-[60px]">
                    <svg class="w-6 h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span>Daftar Sekarang</span>
                </a>
                
            <button onclick="scrollToNavAndOpenDropdown()" class="group inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-md border-3 border-white text-white text-base font-helvetica font-black rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 min-h-[60px] cursor-pointer">
                <svg class="w-6 h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Lihat Kompetisi</span>
            </button>
            </div>
        </div>
    </div>
</section>

@endsection

<style>


/* Flip Card Styles */
.flip-card {
    perspective: 1000px;
    cursor: pointer;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner,
.flip-card:active .flip-card-inner,
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
}

.flip-card-back {
    transform: rotateY(180deg);
}

@media (max-width: 1024px) {
    .flip-card {
        -webkit-tap-highlight-color: transparent;
    }
}

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

@keyframes pulse-slow {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.8; transform: scale(1.05); }
}

@keyframes fade-in-up {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-left {
    from { opacity: 0; transform: translateX(-30px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes fade-in-right {
    from { opacity: 0; transform: translateX(30px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes gradient-x {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
}

.animate-sway {
    animation: sway 10s ease-in-out infinite;
    transform-origin: top center;
}

.animate-sway-reverse {
    animation: sway-reverse 12s ease-in-out infinite;
    transform-origin: top center;
}

.animate-pulse-slow {
    animation: pulse-slow 3s ease-in-out infinite;
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out;
}

.animate-fade-in-left {
    animation: fade-in-left 0.8s ease-out;
}

.animate-fade-in-right {
    animation: fade-in-right 0.8s ease-out;
}

.animate-gradient-x {
    background-size: 200% 200%;
    animation: gradient-x 5s ease infinite;
}

.animation-delay-100 { animation-delay: 100ms; }
.animation-delay-200 { animation-delay: 200ms; }
.animation-delay-300 { animation-delay: 300ms; }
.animation-delay-400 { animation-delay: 400ms; }
.animation-delay-500 { animation-delay: 500ms; }
.animation-delay-600 { animation-delay: 600ms; }
.animation-delay-700 { animation-delay: 700ms; }
</style>

<script>
// Flip card functionality
document.addEventListener('DOMContentLoaded', function() {
    const flipCards = document.querySelectorAll('.flip-card');
    
    flipCards.forEach(card => {
        let isFlipped = false;
        
        card.addEventListener('click', function(e) {
            if (e.target.closest('button')) {
                return;
            }
            
            if (window.innerWidth < 1024) {
                isFlipped = !isFlipped;
                if (isFlipped) {
                    card.classList.add('flipped');
                } else {
                    card.classList.remove('flipped');
                }
            }
        });
        
        const closeBtn = card.querySelector('.flip-card-back button');
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                card.classList.remove('flipped');
                isFlipped = false;
            });
        }
    });
});

function scrollToNavAndOpenDropdown() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    
    setTimeout(() => {
        const dropdown = document.querySelector('[data-dropdown-toggle]');
        if (dropdown) {
            dropdown.click();
        }
    }, 500);
}
</script>