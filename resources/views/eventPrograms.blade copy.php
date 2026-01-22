@extends('layouts.app')

@section('title', 'Program Acara')

@section('content')

<!-- Hero Section -->
<section id="event-programs" class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-20 sm:pt-24 lg:pt-28 pb-24 sm:pb-32 lg:pb-40 scroll-mt-20">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Palm Shadows - Hidden on mobile -->
    <div class="hidden md:block absolute top-0 right-0 w-1/3 h-96 opacity-15 pointer-events-none palm-shadow-1" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    <div class="hidden md:block absolute bottom-0 left-0 w-1/4 h-80 opacity-15 pointer-events-none palm-shadow-2" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: bottom left; background-repeat: no-repeat; transform: scaleX(-1);"></div>
    
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
    
    <!-- Floating Circles -->
    <div class="absolute top-1/4 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl floating-circle-1"></div>
    <div class="absolute bottom-1/3 right-16 w-32 h-32 bg-[#D3EB9F]/10 rounded-full blur-2xl floating-circle-2"></div>
    
 <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 sm:pt-6 pb-8 sm:pb-12 lg:pb-16 w-full z-10">
  <div class="max-w-4xl hero-content">
     <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg breadcrumb">
      <a href="/" class="hover:text-[#6F97B6] transition font-bold">Beranda</a>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
      <span class="text-[#0F4C82] font-bold">Program Acara</span>
    </div>
    <!-- Title & Content -->
    <div class="ml-4 sm:ml-6 lg:ml-10">
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-helvetica font-black tracking-tighter mb-6 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)] hero-title" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
        Program Acara
      </h1>

      <div class="w-32 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-8 rounded-full shadow-lg hero-line"></div>

      <p class="text-xl sm:text-2xl md:text-3xl font-semibold mb-6 text-[#D3EB9F] font-marola drop-shadow-md hero-tagline">
        #JelajahiPetualanganBersama
      </p>

      <p class="text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-2xl font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)] hero-description" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
        Bergabunglah dalam serangkaian kegiatan seru yang dirancang untuk menginspirasi, mendidik, dan menghibur semua peserta!
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
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    <div class="hidden lg:block absolute top-20 right-20 w-64 h-64 bg-[#D3EB9F]/10 rounded-full blur-3xl blob-1"></div>
    <div class="hidden lg:block absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl blob-2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 1</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Seminar Perusahaan</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">1</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">15 Februari 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Aula Utama Kampus</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Sebuah kesempatan luar biasa untuk mendengar langsung dari para pemimpin industri tentang tren terbaru, peluang karir, dan wawasan bisnis yang akan memperkaya pengetahuan Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 2 (Image Right) -->
<section id="csr" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden program-section">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 2</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Kegiatan Sosial</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">2</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-1 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">20 Februari 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Panti Asuhan Harapan</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Wujudkan kepedulian sosial dengan bergabung dalam kegiatan bakti sosial yang memberikan dampak nyata bagi masyarakat. Mari berbagi kebahagiaan dan membuat perbedaan bersama!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 3 (Image Left) -->
<section id="field-trip" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 3</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Kunjungan Lapangan</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">3</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">25 Februari 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Museum Nasional</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Eksplorasi langsung ke lokasi-lokasi menarik yang memperkaya wawasan dan pengetahuan praktis. Pengalaman belajar yang tak terlupakan di luar ruang kelas!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 4 (Image Right) -->
<section id="final-competition" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden program-section">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 4</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Kompetisi Final</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">4</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-1 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">1 Maret 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Stadion Utama</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Ajang puncak untuk menunjukkan kemampuan terbaik! Berkompetisi dengan sportif dan tunjukkan bakat Anda di hadapan juri profesional dan audiens yang mendukung.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 5 (Image Left) -->
<section id="ignite-talks" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 5</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Seminar Inspiratif</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">5</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">5 Maret 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Auditorium Besar</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Dengarkan cerita inspiratif dan motivasi dari para pembicara hebat yang telah mencapai kesuksesan. Dapatkan insight berharga untuk memicu semangat dan kreativitas Anda!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 6 (Image Right) -->
<section id="funday" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden program-section">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 6</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Hari Kegembiraan</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">6</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-1 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">8 Maret 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Taman Kota</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Hari penuh keceriaan dengan berbagai permainan seru, games interaktif, dan hiburan yang menyenangkan untuk semua peserta. Saatnya bersenang-senang dan membuat kenangan indah!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Program 7 (Image Left) -->
<section id="banquet" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden program-section">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 program-header">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 7</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Malam Gala Dinner</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md divider-line"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 program-image">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl corner-tl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl corner-br"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 number-badge">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">7</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 program-details">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">10 Maret 2025</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10 info-card">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Grand Ballroom Hotel</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6 description-card">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Penutupan acara yang mewah dan berkesan. Nikmati malam penuh kemewahan dengan hidangan istimewa, penghargaan untuk peserta terbaik, dan hiburan spektakuler!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="py-12 sm:py-16 lg:py-20 xl:py-32 bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white relative overflow-hidden cta-section">
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Floating elements -->
    <div class="absolute top-10 left-10 w-24 h-24 bg-white/5 rounded-full blur-2xl cta-blob-1"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-[#D3EB9F]/10 rounded-full blur-2xl cta-blob-2"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div class="cta-content">
            <div class="inline-block mb-4 sm:mb-6 cta-badge">
                <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-white/20 backdrop-blur-md border-2 border-[#0F4C82] text-[#0F4C82] text-xs sm:text-sm font-semibold rounded-full font-helvetica shadow-lg">
                    Jangan Sampai Terlewat!
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-4 sm:mb-6 drop-shadow-lg px-4 cta-title">
                Jangan Lewatkan Setiap Momentnya!
            </h2>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-8 sm:mb-10 text-white/95 max-w-3xl mx-auto leading-relaxed font-garet drop-shadow-md px-4 cta-subtitle">
                Daftarkan diri Anda sekarang dan jadilah bagian dari pengalaman tak terlupakan bersama ribuan peserta lainnya!
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 lg:gap-5 justify-center px-4">
                <a href="/register" class="group inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl sm:rounded-2xl shadow-xl sm:shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base min-h-[56px] sm:min-h-[60px]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="#competitions" class="group inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 bg-white/10 backdrop-blur-md border-2 sm:border-3 border-white text-white font-helvetica font-black rounded-xl sm:rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-lg sm:shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm sm:text-base min-h-[56px] sm:min-h-[60px]">
                    <span>Lihat Kompetisi</span>
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

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
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

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out;
}

.animation-delay-200 {
    animation-delay: 200ms;
}

html {
    scroll-behavior: smooth;
}

.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
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
    // CONTINUOUS ANIMATIONS (Always Running)
    // ==========================================
    
    // Hero sparkles - FIXED VERSION
    const heroSparkles = gsap.utils.toArray('.gsap-hero-sparkle');
    heroSparkles.forEach((sparkle, index) => {
        // Initial appearance animation
        gsap.from(sparkle, {
            scale: 0,
            opacity: 0,
            rotation: 360,
            duration: 1,
            delay: index * 0.15,
            ease: 'back.out(1.5)'
        });
        
        // Continuous rotation
        gsap.to(sparkle, {
            rotation: 360,
            duration: 20 + (index * 3),
            ease: 'none',
            repeat: -1
        });
        
        // Floating up and down
        gsap.to(sparkle, {
            y: -25 - (index * 5),
            duration: 3 + (index * 0.5),
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });
        
        // Slight horizontal movement
        gsap.to(sparkle, {
            x: (index % 2 === 0 ? 15 : -15),
            duration: 4 + (index * 0.3),
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true,
            delay: index * 0.2
        });
        
        // Scale pulsing
        gsap.to(sparkle, {
            scale: 1.1,
            duration: 2 + (index * 0.2),
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true,
            delay: index * 0.1
        });
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

    // Palm shadows swaying
    gsap.to('.palm-shadow-1', {
        rotation: 3,
        transformOrigin: 'top center',
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.palm-shadow-2', {
        rotation: -3,
        transformOrigin: 'top center',
        duration: 6,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // Floating circles
    gsap.to('.floating-circle-1', {
        y: 30,
        x: 20,
        scale: 1.2,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.floating-circle-2', {
        y: -40,
        x: -30,
        scale: 1.3,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // Wave SVG subtle animation
    gsap.to('.wave-svg path', {
        attr: { d: 'M0 0L60 15C120 30 240 50 360 53.7C480 57 600 43 720 40C840 37 960 43 1080 50C1200 57 1320 63 1380 66.3L1440 70V120H0V0Z' },
        duration: 3,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // Blob animations in program sections
    gsap.utils.toArray('.blob-1, .blob-2').forEach((blob, index) => {
        gsap.to(blob, {
            scale: 1.3,
            x: index % 2 === 0 ? 30 : -30,
            y: index % 2 === 0 ? -30 : 30,
            duration: 6 + index,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    });

    // CTA floating blobs
    gsap.to('.cta-blob-1', {
        x: 40,
        y: -40,
        scale: 1.5,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    gsap.to('.cta-blob-2', {
        x: -50,
        y: 50,
        scale: 1.4,
        duration: 6,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // ==========================================
    // SCROLL TRIGGERED ANIMATIONS
    // ==========================================

    // Hero section entrance
    const heroTimeline = gsap.timeline();
    heroTimeline
        .from('.breadcrumb', {
            y: -30,
            opacity: 0,
            duration: 0.6,
            ease: 'back.out(1.7)'
        })
        .from('.hero-title', {
            y: 50,
            opacity: 0,
            duration: 0.8,
            ease: 'power3.out'
        }, '-=0.3')
        .from('.hero-line', {
            scaleX: 0,
            opacity: 0,
            duration: 0.6,
            ease: 'power2.out'
        }, '-=0.5')
        .from('.hero-tagline', {
            y: 30,
            opacity: 0,
            duration: 0.6,
            ease: 'power2.out'
        }, '-=0.4')
        .from('.hero-description', {
            y: 30,
            opacity: 0,
            duration: 0.6,
            ease: 'power2.out'
        }, '-=0.3');

    // Animate each program section on scroll
    gsap.utils.toArray('.program-section').forEach((section, index) => {
        const header = section.querySelector('.program-header');
        const image = section.querySelector('.program-image');
        const details = section.querySelector('.program-details');
        const infocards = section.querySelectorAll('.info-card');
        const descCard = section.querySelector('.description-card');
        const dividerLine = section.querySelector('.divider-line');
        const numberBadge = section.querySelector('.number-badge');
        const corners = section.querySelectorAll('.corner-tl, .corner-br');

        // Create timeline for this section
        const sectionTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
                end: 'top 20%',
                toggleActions: 'play none none reverse'
            }
        });

        // Header animation
        sectionTimeline
            .from(header.querySelector('span'), {
                scale: 0,
                opacity: 0,
                duration: 0.5,
                ease: 'back.out(1.7)'
            })
            .from(header.querySelector('h2'), {
                y: 50,
                opacity: 0,
                duration: 0.7,
                ease: 'power3.out'
            }, '-=0.3')
            .from(dividerLine, {
                scaleX: 0,
                opacity: 0,
                duration: 0.5,
                ease: 'power2.out'
            }, '-=0.4');

        // Image animation with corner elements
        sectionTimeline
            .from(image, {
                scale: 0.8,
                opacity: 0,
                duration: 0.8,
                ease: 'power3.out'
            }, '-=0.3')
            .from(corners, {
                scale: 0,
                opacity: 0,
                duration: 0.4,
                stagger: 0.1,
                ease: 'back.out(1.7)'
            }, '-=0.6')
            .from(numberBadge, {
                scale: 0,
                rotation: -180,
                opacity: 0,
                duration: 0.6,
                ease: 'back.out(1.7)'
            }, '-=0.4');

        // Details animation
        sectionTimeline
            .from(infocards, {
                x: index % 2 === 0 ? 50 : -50,
                opacity: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: 'power2.out'
            }, '-=0.5')
            .from(descCard, {
                y: 30,
                opacity: 0,
                duration: 0.6,
                ease: 'power2.out'
            }, '-=0.4');

        // Hover effect for number badges
        numberBadge.addEventListener('mouseenter', () => {
            gsap.to(numberBadge, {
                scale: 1.2,
                rotation: 360,
                duration: 0.6,
                ease: 'back.out(1.7)'
            });
        });

        numberBadge.addEventListener('mouseleave', () => {
            gsap.to(numberBadge, {
                scale: 1,
                rotation: 0,
                duration: 0.6,
                ease: 'back.out(1.7)'
            });
        });
    });

    // CTA Section animation
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
            opacity: 0,
            duration: 0.6,
            ease: 'back.out(1.7)'
        })
        .from('.cta-title', {
            y: 50,
            opacity: 0,
            duration: 0.7,
            ease: 'power3.out'
        }, '-=0.3')
        .from('.cta-subtitle', {
            y: 30,
            opacity: 0,
            duration: 0.6,
            ease: 'power2.out'
        }, '-=0.4')
        .from('.cta-section a', {
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.15,
            ease: 'back.out(1.7)'
        }, '-=0.3');

    // Parallax effect for hero section
    gsap.to('.hero-content', {
        yPercent: -15,
        ease: 'none',
        scrollTrigger: {
            trigger: '#event-programs',
            start: 'top top',
            end: 'bottom top',
            scrub: 1
        }
    });

    // Info cards hover animation
    document.querySelectorAll('.info-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -5,
                scale: 1.05,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                scale: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });

    // Description cards hover animation
    document.querySelectorAll('.description-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                boxShadow: '0 20px 40px rgba(15, 76, 130, 0.15)',
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                boxShadow: '0 4px 6px rgba(0, 0, 0, 0.1)',
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });

    console.log('🎨 GSAP Animations initialized successfully!');
    console.log('✨ Sparkles found:', heroSparkles.length);
});
</script>
@endpush