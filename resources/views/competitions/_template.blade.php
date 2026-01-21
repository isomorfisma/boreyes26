<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-24 pb-24">
    <!-- Decorative Light Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    
    <!-- Multiple Sparkles -->
    <div class="sparkle-float absolute top-20 right-20 w-12 sm:w-16 h-12 sm:h-16 opacity-80 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-40 right-1/4 w-10 sm:w-12 h-10 sm:h-12 opacity-70 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float absolute top-32 left-20 w-11 sm:w-14 h-11 sm:h-14 opacity-75 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-1/3 left-1/4 w-8 sm:w-10 h-8 sm:h-10 opacity-60 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float absolute bottom-40 right-32 w-14 sm:w-20 h-14 sm:h-20 opacity-85 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.9)]">
    </div>
    <div class="sparkle-float absolute bottom-1/3 left-1/3 w-7 sm:w-8 h-7 sm:h-8 opacity-65 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_6px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-1/2 right-1/3 w-9 sm:w-11 h-9 sm:h-11 opacity-70 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float absolute bottom-32 left-40 w-10 sm:w-13 h-10 sm:h-13 opacity-75 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="sparkle-float absolute top-1/2 right-1/2 w-9 sm:w-11 h-9 sm:h-11 opacity-70 animate-float" >
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="sparkle-float absolute bottom-32 left-60 w-10 sm:w-13 h-10 sm:h-13 opacity-75 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    
    

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 z-10">
       <!-- Breadcrumb -->
        <div class="mb-8 sm:mb-10 lg:mb-12">
            <div class="flex items-center space-x-2 text-[#0F4C82] text-xs sm:text-sm font-garet bg-white/90 backdrop-blur-sm px-3 py-2 sm:px-4 sm:py-2 rounded-full inline-flex shadow-lg">
                <a href="/" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0F4C82] font-bold">Competition</span>
            </div>
        </div>

        <div class="max-w-5xl mx-auto">
            <!-- Title Section -->
            <div class="text-center mb-6 animate-fade-in-up">
                <!-- Status Badges -->
                <div class="flex flex-wrap justify-center gap-2 mb-4">
                    @if($competition['status'] === 'OPEN')
                        <span class="px-4 py-2 bg-[#10B981] text-white text-xs font-black rounded-full flex items-center space-x-2 font-helvetica">
                            <span class="w-2.5 h-2.5 bg-white rounded-full animate-pulse"></span>
                            <span>OPEN</span>
                        </span>
                    @elseif($competition['status'] === 'CLOSED')
                        <span class="px-4 py-2 bg-[#EF4444] text-white text-xs font-black rounded-full flex items-center space-x-2 font-helvetica">
                            <span class="w-2.5 h-2.5 bg-white rounded-full"></span>
                            <span>CLOSED</span>
                        </span>
                    @else
                        <span class="px-4 py-2 bg-[#F59E0B] text-white text-xs font-black rounded-full flex items-center space-x-2 font-helvetica">
                            <span class="w-2.5 h-2.5 bg-white rounded-full animate-pulse"></span>
                            <span>COMING SOON</span>
                        </span>
                    @endif
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-helvetica font-black tracking-tighter mb-4 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    {{ $competition['title'] }}
                </h1>
                
                <div class="w-24 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-4 rounded-full shadow-lg mx-auto"></div>
                
                <!-- Description -->
                <p class="text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-3xl mx-auto font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
                    {{ $competition['description'] }}
                </p>
            </div>

            <!-- Info Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6 animate-fade-in-up animation-delay-200">
                <!-- Card 1 - Batch 1 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition">
                    <div class="text-center">
                        <p class="text-[11px] font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-2">
                            {{ $competition['batch1_label'] ?? 'Batch 1' }}
                        </p>
                        <p class="text-[#0F4C82] text-base sm:text-sm font-black font-helvetica leading-tight">
                            {{ $competition['batch1'] }}
                        </p>
                        <div class="w-10 h-[2px] bg-[#D3EB9F] rounded-full mx-auto mt-3 opacity-70"></div>
                    </div>
                </div>

                <!-- Card 2 - Batch 2 (Conditional) -->
                @if(!empty($competition['batch2']))
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition">
                        <div class="text-center">
                            <p class="text-[11px] font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-2">
                                {{ $competition['batch2_label'] ?? 'Batch 2' }}
                            </p>
                            <p class="text-[#0F4C82] text-base sm:text-sm font-black font-helvetica leading-tight">
                                {{ $competition['batch2'] }}
                            </p>
                            <div class="w-10 h-[2px] bg-[#6F97B6] rounded-full mx-auto mt-3 opacity-40"></div>
                        </div>
                    </div>
                @endif

                <!-- Card 3 - Registration Fee -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition">
                    <div class="text-center">
                        <p class="text-[11px] font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-2">Registration Fee</p>
                        <p class="text-[#0F4C82] text-base sm:text-sm font-black font-helvetica leading-tight">
                            {{ $competition['fee'] }}
                        </p>
                        <div class="w-10 h-[2px] bg-[#0F4C82] rounded-full mx-auto mt-3 opacity-25"></div>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-3 justify-center animate-fade-in-up animation-delay-400">
                @guest
                @if($competition['status'] === 'OPEN')
                
                    <a href="{{ $competition['register_url'] }}" 
                       class="group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-2xl hover:shadow-[0_25px_60px_rgba(211,235,159,0.6)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm min-h-[50px] border-2 border-[#0F4C82]/30">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span>Register Now</span>
                    </a>
                @else
                    <button disabled
                       class="inline-flex items-center justify-center px-6 py-3 bg-gray-400 text-white font-helvetica font-black rounded-xl shadow-xl cursor-not-allowed text-sm min-h-[50px] border-2 border-gray-500/30 opacity-60">
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
                       class="group inline-flex items-center justify-center px-6 py-3 bg-white text-[#0F4C82] font-helvetica font-black rounded-xl border-2 border-[#0F4C82]/30 hover:bg-[#0F4C82] hover:text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm min-h-[50px]">
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
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Other Competitions Section -->
<section class="py-16 sm:py-20 bg-[#F8FBFC] relative overflow-hidden">
    <!-- Decorative Circles -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-[#D3EB9F]/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 animate-fade-in-up">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-6">
                Other Competitions
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] mx-auto mb-8 rounded-full shadow-md"></div>
        </div>
        
        <!-- Dynamic Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 animate-fade-in-up animation-delay-200">
            @foreach($others as $other)
                <a href="{{ $other['url'] }}" class="group block h-full">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60 flex flex-col h-full">
                        <!-- Image -->
                        <div class="h-48 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] overflow-hidden relative flex-shrink-0">
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5 flex flex-col flex-grow">
                            <!-- Title -->
                            <h3 class="font-black text-[#0F4C82] mb-3 line-clamp-2 font-helvetica text-lg leading-tight min-h-[3.5rem]">
                                {{ $other['title'] }}
                            </h3>
                            
                            <!-- Description -->
                            <p class="text-sm text-[#374151] mb-4 line-clamp-2 font-garet leading-relaxed min-h-[2.5rem] flex-grow">
                                {{ $other['desc'] }}
                            </p>
                            
                            <!-- Button -->
                            <div class="inline-flex items-center text-[#0F4C82] font-black text-sm group-hover:text-[#6F97B6] transition font-helvetica mt-auto">
                                View Details
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
</style>
@endpush