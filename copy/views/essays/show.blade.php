@extends('layouts.app')

@section('title', 'Essay Status - ' . $team->name)

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white pt-24 sm:pt-28 md:pt-32 pb-16 sm:pb-20 overflow-hidden">
    <div class="absolute inset-0 opacity-15 mix-blend-multiply pointer-events-none" style="background-image: url('/assets/images/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
         <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
            <a href="{{ route('dashboard') }}" class="hover:text-[#6F97B6] transition font-bold">Dashboard</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-[#0F4C82]">Essay Status</span>
        </div>
        
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-helvetica font-black tracking-tighter mb-2 sm:mb-3">Status Pre-Elimination Essay</h1>
        <p class="text-white/90 text-sm sm:text-base lg:text-lg font-garet">{{ $team->name }}</p>
    </div>
    
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V60H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<section class="py-8 sm:py-12 bg-[#F8FBFC] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Status Card -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden border-2 border-[#D3EB9F]/30 mb-6">
            @if($essay->status === 'pending')
            <!-- Pending Status -->
            <div class="bg-gradient-to-r from-amber-400 to-amber-500 p-4 sm:p-6">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center animate-pulse">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl sm:text-2xl font-helvetica font-black text-white">Sedang Diproses</h2>
                        <p class="text-white/90 text-sm font-garet">Essay Anda sedang dinilai oleh tim admin</p>
                    </div>
                </div>
            </div>
            
            @elseif($essay->status === 'passed')
           <!-- Passed Status -->
            <div class="p-4 sm:p-6" style="background-color:#D3EB9F;">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl sm:text-2xl font-helvetica font-black text-[#0F4C82]">Selamat! Anda Lolos!</h2>
                        <p class="text-[#0F4C82]/80 text-sm font-garet">Essay Anda dinyatakan lolos pre-elimination</p>
                    </div>
                </div>
            </div>

            
            @else
            <!-- Failed Status -->
            <div class="bg-gradient-to-r from-red-400 to-red-500 p-4 sm:p-6">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl sm:text-2xl font-helvetica font-black text-white">Belum Lolos</h2>
                        <p class="text-white/90 text-sm font-garet">Terima kasih atas partisipasi Anda</p>
                    </div>
                </div>
            </div>
            @endif

            <!-- Essay Details -->
            <div class="p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mb-6">
                    <!-- Submission Time -->
                    <div class="bg-gray-50 rounded-xl p-4 border-2 border-gray-100">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-5 h-5 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm">Waktu Submit</h3>
                        </div>
                        <p class="text-sm text-gray-600 font-garet">{{ $essay->created_at->format('d M Y, H:i') }} WIB</p>
                        <p class="text-xs text-gray-400 font-garet mt-1">{{ $essay->created_at->diffForHumans() }}</p>
                    </div>

                    <!-- Status -->
                    <div class="bg-gray-50 rounded-xl p-4 border-2 border-gray-100">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-5 h-5 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm">Status</h3>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 {{ $essay->status_badge }} text-xs font-helvetica font-black rounded-full border">
                            {{ $essay->status_label }}
                        </span>
                    </div>
                </div>

                <!-- Google Drive Link -->
                <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-5 border-2 border-[#D3EB9F]/30 mb-6">
                    <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        Link Essay Anda
                    </h3>
                    <div class="flex items-center space-x-3">
                        <input type="text" 
                               value="{{ $essay->drive_link }}" 
                               readonly
                               class="flex-1 px-4 py-2 bg-white border-2 border-gray-200 rounded-lg text-sm font-mono text-gray-600">
                        <a href="{{ $essay->drive_link }}" 
                           target="_blank"
                           class="flex-shrink-0 px-4 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-bold text-sm rounded-lg hover:shadow-lg transition">
                            Buka
                        </a>
                    </div>
                </div>

                <!-- Notes -->
                @if($essay->notes)
                <div class="bg-blue-50 rounded-xl p-4 border-2 border-blue-100 mb-6">
                    <h3 class="font-helvetica font-bold text-blue-900 text-sm mb-2">Catatan Anda</h3>
                    <p class="text-sm text-blue-800 font-garet">{{ $essay->notes }}</p>
                </div>
                @endif

                <!-- Score (if graded) -->
                @if($essay->isScored())
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mb-6">
                    <div class="bg-gradient-to-br from-[#0F4C82]/5 to-[#6F97B6]/5 rounded-xl p-4 sm:p-5 border-2 border-[#0F4C82]/20">
                        <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm mb-3">Score</h3>
                        <div class="flex items-end space-x-2">
                            <span class="text-4xl sm:text-5xl font-helvetica font-black text-[#0F4C82]">{{ number_format($essay->score, 1) }}</span>
                            <span class="text-xl text-gray-500 font-garet mb-2">/100</span>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4 border-2 border-gray-100">
                        <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm mb-2">Dinilai Oleh</h3>
                        <p class="text-sm text-gray-600 font-garet">{{ $essay->scorer->name ?? 'Admin' }}</p>
                        <p class="text-xs text-gray-400 font-garet mt-1">{{ $essay->scored_at->format('d M Y, H:i') }} WIB</p>
                    </div>
                </div>
                @endif

                <!-- Admin Feedback -->
                @if($essay->admin_feedback && $essay->isScored())
                <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-5 border-2 border-[#D3EB9F]/30">
                    <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        Feedback dari Admin
                    </h3>
                    <p class="text-sm text-gray-700 font-garet leading-relaxed whitespace-pre-line">{{ $essay->admin_feedback }}</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Action Button -->
        <div class="text-center">
            <a href="{{ route('dashboard') }}" 
               class="inline-flex items-center px-8 py-3 bg-white border-2 border-[#0F4C82] text-[#0F4C82] font-helvetica font-bold rounded-xl hover:bg-[#F8FBFC] transition-all">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Dashboard
            </a>
        </div>

        <!-- Help -->
        @if($essay->status === 'failed')
        <div class="mt-6 bg-white border-2 border-gray-100 rounded-xl p-4 sm:p-6">
            <h3 class="font-helvetica font-black text-[#0F4C82] text-sm mb-3">💬 Butuh Klarifikasi?</h3>
            <p class="text-sm text-gray-600 font-garet mb-4">
                Jika Anda ingin bertanya lebih lanjut mengenai hasil penilaian, silakan hubungi tim admin:
            </p>
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="mailto:boreyes@speunpad.com" class="flex items-center text-sm text-[#0F4C82] hover:text-[#6F97B6] font-garet">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    boreyes@speunpad.com
                </a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection