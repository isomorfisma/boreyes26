@extends('layouts.app')

@section('title', $competition->name)

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden pt-24 pb-24">
    <!-- Decorative Light Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#D3EB9F]/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-[#6F97B6]/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 z-10">
       <!-- Breadcrumb - CONSISTENT POSITION -->
        <div class="mb-8 sm:mb-10 lg:mb-12">
            <div class="flex items-center space-x-2 text-[#0F4C82] text-xs sm:text-sm font-garet bg-white/90 backdrop-blur-sm px-3 py-2 sm:px-4 sm:py-2 rounded-full inline-flex shadow-lg">
                <a href="{{ route('home') }}" class="hover:text-[#6F97B6] transition font-bold">Home</a>
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
                    <!-- <span class="px-4 py-2 bg-white border-2 border-[#0F4C82] text-[#0F4C82] text-xs font-black rounded-full font-helvetica shadow-lg uppercase tracking-wider">
                        {{ $competition->category->name }}
                    </span> -->
                    @if($competition->isRegistrationOpen())
                    <span class="px-4 py-2 bg-[#10B981] text-white text-xs font-black rounded-full flex items-center space-x-2 font-helvetica">
                        <span class="w-2.5 h-2.5 bg-white rounded-full animate-pulse"></span>
                        <span>OPEN</span>
                    </span>
                    @else
                    <span class="px-4 py-2 bg-[#DC2626] text-white text-xs font-black rounded-full font-helvetica shadow-lg uppercase border-2 border-white">
                        FINISHED
                    </span>
                    @endif
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-helvetica font-black tracking-tighter mb-4 leading-tight text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5), -1px -1px 2px rgba(15,76,130,0.3);">
                    {{ $competition->name }}
                </h1>
                
                <div class="w-24 h-1.5 bg-gradient-to-r from-white via-[#D3EB9F] to-white mb-4 rounded-full shadow-lg mx-auto"></div>
                
                <!-- Description -->
                <p class="text-base sm:text-lg md:text-xl leading-relaxed font-garet max-w-3xl mx-auto font-bold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
                    {{ $competition->description }}
                </p>
            </div>

            <!-- Info Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6 animate-fade-in-up animation-delay-200">
                <!-- Card 1 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition">
                    <div class="text-center">
                        <p class="text-[11px] font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-2">Batch 1</p>
                        <p class="text-[#0F4C82] text-base sm:text-sm font-black font-helvetica leading-tight">
                            {{ $competition->registration_start->format('d M') }} - {{ $competition->registration_end->format('d M') }}
                        </p>
                        <div class="w-10 h-[2px] bg-[#D3EB9F] rounded-full mx-auto mt-3 opacity-70"></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition">
                    <div class="text-center">
                        <p class="text-[11px] font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-2">Batch 2</p>
                        @php
                            $batch2Start = $competition->registration_end->copy()->addDay();
                            $batch2End = $competition->competition_start->copy()->subDays(3);
                        @endphp
                        <p class="text-[#0F4C82] text-base sm:text-sm font-black font-helvetica leading-tight">
                            {{ $batch2Start->format('d M') }} - {{ $batch2End->format('d M') }}
                        </p>
                        <div class="w-10 h-[2px] bg-[#6F97B6] rounded-full mx-auto mt-3 opacity-40"></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-4 border border-[#0F4C82]/10 hover:border-[#0F4C82]/20 transition">
                    <div class="text-center">
                        <p class="text-[11px] font-garet uppercase tracking-wider text-[#0F4C82]/70 font-black mb-2">Registration Fee</p>
                        <p class="text-[#0F4C82] text-base sm:text-sm font-black font-helvetica leading-tight">
                            Rp {{ number_format($competition->registration_fee, 0, ',', '.') }}
                        </p>
                        <div class="w-10 h-[2px] bg-[#0F4C82] rounded-full mx-auto mt-3 opacity-25"></div>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-3 justify-center animate-fade-in-up animation-delay-400">
                @auth
                    @if($competition->isRegistrationOpen())
                    <a href="{{ route('teams.create', $competition->slug) }}" 
                       class="group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-2xl hover:shadow-[0_25px_60px_rgba(211,235,159,0.6)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm min-h-[50px] border-2 border-[#0F4C82]/30">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span>Daftar Sekarang</span>
                    </a>
                    @else
                    <button disabled class="inline-flex items-center justify-center px-6 py-3 bg-[#6B7280] text-white font-black rounded-xl cursor-not-allowed font-helvetica opacity-60 text-sm min-h-[50px] border border-[#374151]/30">
                        Registration Closed
                    </button>
                    @endif
                @else
                <a href="{{ route('login') }}" 
                   class="group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-2xl hover:shadow-[0_25px_60px_rgba(211,235,159,0.6)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 text-sm min-h-[50px] border-2 border-[#0F4C82]/30">
                    <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    <span>Daftar Sekarang</span>
                </a>
                @endauth
                
                <!-- Registration Booklet Button -->
                @if($competition->guidebook)
                <a href="{{ $competition->guidebook }}" 
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
@if($relatedCompetitions->count() > 0)
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
        
        <!-- 4 Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 animate-fade-in-up animation-delay-200">
            @foreach($relatedCompetitions->take(4) as $related)
            <a href="{{ route('competitions.show', $related->slug) }}" class="group block h-full">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-[#0F4C82]/10 hover:border-[#D3EB9F]/60 flex flex-col h-full">
                    <!-- Image -->
                    <div class="h-48 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] overflow-hidden relative flex-shrink-0">
                        @if($related->poster)
                        <img src="{{ Storage::url($related->poster) }}" 
                             alt="{{ $related->name }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Content -->
                    <div class="p-5 flex flex-col flex-grow">
                        <!-- <span class="px-3 py-1.5 bg-[#D3EB9F]/30 text-[#0F4C82] text-xs font-black rounded-full font-helvetica uppercase tracking-wider border border-[#0F4C82]/15 inline-block mb-3 w-fit">
                            {{ $related->category->name }}
                        </span> -->
                        
                        <!-- Title -->
                        <h3 class="font-black text-[#0F4C82] mb-3 line-clamp-2 font-helvetica text-lg leading-tight min-h-[3.5rem]">
                            {{ $related->name }}
                        </h3>
                        
                        <!-- Description -->
                        <p class="text-sm text-[#374151] mb-4 line-clamp-2 font-garet leading-relaxed min-h-[2.5rem] flex-grow">
                            {{ $related->description }}
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
        
        <!-- View All Button -->
        @if($relatedCompetitions->count() > 4)
        <div class="text-center mt-10">
            <a href="{{ route('home') }}#competitions" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 border border-[#0F4C82]/20">
                <span>Lihat Semua Kompetisi</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        @endif
    </div>
</section>
@endif

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

@keyframes pulse-slow {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.8; transform: scale(1.05); }
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

.animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out;
}

.animation-delay-200 {
    animation-delay: 200ms;
}

.animation-delay-400 {
    animation-delay: 400ms;
}
</style>
@endpush