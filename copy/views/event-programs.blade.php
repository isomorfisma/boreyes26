@extends('layouts.app')

@section('title', 'Event Programs')

@section('content')
<!-- Hero Section -->
<section id="event-programs" class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-20 sm:pt-24 lg:pt-28 pb-24 sm:pb-32 lg:pb-40 scroll-mt-20">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Palm Shadows - Hidden on mobile -->
    <div class="hidden md:block absolute top-0 right-0 w-1/3 h-96 opacity-15 pointer-events-none animate-sway" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: top right; background-repeat: no-repeat;"></div>
    <div class="hidden md:block absolute bottom-0 left-0 w-1/4 h-80 opacity-15 pointer-events-none animate-sway-reverse" style="background-image: url('/path/to/palm-shadow.png'); background-size: contain; background-position: bottom left; background-repeat: no-repeat; transform: scaleX(-1);"></div>
    
    <!-- Sparkles - Responsive positioning -->
    <div class="absolute top-12 right-8 sm:top-20 sm:right-20 w-10 h-10 sm:w-12 sm:h-12 lg:w-16 lg:h-16 opacity-80 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-24 right-1/4 sm:top-40 sm:right-1/4 w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 opacity-70 animate-float-delayed" style="animation-delay: 0.5s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    
 <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 sm:pt-6 pb-8 sm:pb-12 lg:pb-16 w-full z-10">
  <div class="max-w-4xl animate-fade-in-up">
     <!-- Breadcrumb (match style with Competition page) -->
    <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
      <a href="{{ route('home') }}" class="hover:text-[#6F97B6] transition font-bold">Home</a>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
      <span class="text-[#0F4C82] font-bold">Event Programs</span>
    </div>
    <!-- Title & Content (geser kanan seperti FAQ) -->
    <div class="ml-4 sm:ml-6 lg:ml-10">
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-helvetica font-black tracking-tighter mb-6 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
        Event Programs
      </h1>

      <div class="w-32 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-8 rounded-full shadow-lg"></div>

      <p class="text-xl sm:text-2xl md:text-3xl font-semibold mb-6 text-[#D3EB9F] font-marola drop-shadow-md">
        #TaglineEvent
      </p>

      <p class="text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-2xl font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!
      </p>
    </div>

  </div>
</div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Event Program 1 (Image Left) -->
<section id="program-1" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    <div class="hidden lg:block absolute top-20 right-20 w-64 h-64 bg-[#D3EB9F]/10 rounded-full blur-3xl"></div>
    <div class="hidden lg:block absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 1</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 1</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">1</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Event Program 2 (Image Right) -->
<section id="program-2" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 2</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 2</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">2</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-1 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Event Program 3 (Image Left) -->
<section id="program-3" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 3</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 3</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">3</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Event Program 4 (Image Right) -->
<section id="program-4" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 4</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 4</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">4</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-1 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Event Program 5 (Image Left) -->
<section id="program-5" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 5</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 5</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">5</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Event Program 6 (Image Right) -->
<section id="program-6" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-white scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 6</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 6</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-2 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">6</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-1 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Event Program 7 (Image Left) -->
<section id="program-7" class="py-12 sm:py-16 lg:py-20 xl:py-28 bg-[#F8FBFC] scroll-mt-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 mix-blend-multiply pointer-events-none" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12 animate-fade-in-up">
            <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-black rounded-full font-helvetica inline-block mb-3 sm:mb-4">Program 7</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 px-4">Nama Program Event 7</h2>
            <div class="w-20 sm:w-24 h-1 sm:h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-4 sm:mb-6 rounded-full shadow-md"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div class="order-1 lg:order-1 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="relative bg-gradient-to-br from-[#0F4C82]/10 via-[#6F97B6]/10 to-[#8CCDCF]/10 p-3 sm:p-4 rounded-2xl sm:rounded-3xl shadow-xl sm:shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-xl" style="aspect-ratio: 4/3;">
                            <div class="w-full h-full bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] flex items-center justify-center">
                                <svg class="w-24 h-24 sm:w-32 sm:h-32 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -left-1.5 sm:-top-2 sm:-left-2 w-12 h-12 sm:w-16 sm:h-16 border-t-2 border-l-2 sm:border-t-4 sm:border-l-4 border-[#D3EB9F] rounded-tl-xl sm:rounded-tl-2xl"></div>
                        <div class="absolute -bottom-1.5 -right-1.5 sm:-bottom-2 sm:-right-2 w-12 h-12 sm:w-16 sm:h-16 border-b-2 border-r-2 sm:border-b-4 sm:border-r-4 border-[#D3EB9F] rounded-br-xl sm:rounded-br-2xl"></div>
                    </div>
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                        <span class="text-xl sm:text-2xl font-black text-[#0F4C82] font-helvetica">7</span>
                    </div>
                </div>
            </div>

            <div class="order-2 lg:order-2 animate-fade-in-up animation-delay-400">
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-4 sm:mb-6">
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82]/10 to-[#6F97B6]/10 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Tanggal</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica">Tanggal</p></div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg sm:rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-md sm:shadow-lg border border-[#0F4C82]/10">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-md sm:rounded-lg flex items-center justify-center mr-2 sm:mr-3 flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div><p class="text-[10px] sm:text-xs text-[#6B7280] font-garet">Lokasi</p><p class="text-xs sm:text-sm font-black text-[#0F4C82] font-helvetica line-clamp-1">Nama Lokasi</p></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md sm:shadow-lg border border-[#0F4C82]/10 mb-4 sm:mb-6">
                    <h3 class="font-black text-[#0F4C82] mb-2 sm:mb-3 font-helvetica flex items-center text-base sm:text-lg">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#D3EB9F] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Tentang Program
                    </h3>
                    <p class="text-[#6B7280] leading-relaxed font-garet text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="py-12 sm:py-16 lg:py-20 xl:py-32 bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div class="animate-fade-in-up">
            <div class="inline-block mb-4 sm:mb-6">
                <span class="px-3 py-1.5 sm:px-4 sm:py-2 bg-white/20 backdrop-blur-md border-2 border-[#0F4C82] text-[#0F4C82] text-xs sm:text-sm font-semibold rounded-full font-helvetica shadow-lg">
                    Don't Miss Out!
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-4 sm:mb-6 drop-shadow-lg px-4">
                Jangan Lewatkan Setiap Momentnya!
            </h2>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-8 sm:mb-10 text-white/95 max-w-3xl mx-auto leading-relaxed font-garet drop-shadow-md px-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 lg:gap-5 justify-center px-4">
                <a href="{{ route('register') }}" class="group inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl sm:rounded-2xl shadow-xl sm:shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.5)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base min-h-[56px] sm:min-h-[60px]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="{{ route('home') }}#competitions" class="group inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 bg-white/10 backdrop-blur-md border-2 sm:border-3 border-white text-white font-helvetica font-black rounded-xl sm:rounded-2xl hover:bg-white hover:text-[#0F4C82] shadow-lg sm:shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm sm:text-base min-h-[56px] sm:min-h-[60px]">
                    <span>Lihat Kompetisi</span>
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

.animation-delay-100 {
    animation-delay: 100ms;
}

.animation-delay-200 {
    animation-delay: 200ms;
}

.animation-delay-300 {
    animation-delay: 300ms;
}

.animation-delay-400 {
    animation-delay: 400ms;
}

.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endpush