@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white pt-24 sm:pt-28 md:pt-32 pb-16 sm:pb-20 overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-15 mix-blend-multiply pointer-events-none" style="background-image: url('/assets/images/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Decorative Sparkles - Hidden on mobile -->
    <div class="hidden md:block absolute top-20 right-20 w-12 h-12 opacity-60 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="hidden lg:block absolute top-40 left-32 w-10 h-10 opacity-50 animate-float-delayed" style="animation-delay: 0.7s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="hidden md:block absolute bottom-32 right-1/4 w-14 h-14 opacity-70 animate-float" style="animation-delay: 0.3s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(211,235,159,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
                    <a href="{{ route('home') }}" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-[#0F4C82] font-bold">Dashboard</span>
                </div>
                @php
                    $userTeam = auth()->user()->team;
                    $displayName = $userTeam ? $userTeam->name : auth()->user()->name;
                @endphp
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-2 sm:mb-3">Welcome back, {{ $displayName }}!</h1>
                <p class="text-white/90 text-sm sm:text-base lg:text-lg font-garet">
                    @if($userTeam)
                        {{ $userTeam->institution }}
                    @else
                        Manage your team registration and track your progress
                    @endif
                </p>
            </div>
        </div>
    </div>
    
    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V60H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Dashboard Content -->
<section class="py-8 sm:py-12 bg-[#F8FBFC] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Alert Messages -->
        @if(session('success'))
        <div class="mb-6 sm:mb-8 p-3 sm:p-4 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 border-2 border-[#D3EB9F] text-[#0F4C82] rounded-xl flex items-center font-garet shadow-lg text-sm sm:text-base">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="mb-6 sm:mb-8 p-3 sm:p-4 bg-red-50 border-2 border-red-200 text-red-700 rounded-xl flex items-center font-garet shadow-lg text-sm sm:text-base">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            {{ session('error') }}
        </div>
        @endif

        @if($team)
        @php
            $members = $team->getAllMembers();
            $competition = $team->competition;
            $essay = $team->preEliminationEssay;
        @endphp

         <!-- Competition Info Card -->
        <div class="bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl sm:rounded-2xl shadow-2xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30">
            <div class="relative p-4 sm:p-6 lg:p-8 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 30px 30px;"></div>
                
                <div class="relative z-10">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 sm:gap-6">
                        <!-- Left Side - Competition Info -->
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                                <div class="min-w-0 flex-1">
                                    <p class="text-white/70 text-xs sm:text-sm font-garet mb-0.5 sm:mb-1">Your Competition</p>
                                    <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-helvetica font-black text-white truncate">{{ $competition->name }}</h2>
                                </div>
                            </div>
                            
                            <p class="text-white/90 font-garet mb-3 sm:mb-4 leading-relaxed text-sm sm:text-base line-clamp-2 sm:line-clamp-none">
                                {{ $competition->description }}
                            </p>
                        </div>
                        
                        <!-- Right Side - Guidebook Button -->
                        @if($competition->guidebook)
                        <div class="lg:text-right mt-4 lg:mt-0">
                            <a href="{{ $competition->guidebook }}" 
                               target="_blank"
                               class="group inline-flex items-center justify-center w-full lg:w-auto px-6 sm:px-8 py-3 sm:py-4 bg-white text-[#0F4C82] font-helvetica font-black rounded-lg sm:rounded-xl border-2 border-white/30 hover:bg-[#D3EB9F] hover:border-[#D3EB9F] shadow-2xl hover:shadow-[0_20px_50px_rgba(211,235,159,0.4)] transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span>Download Guidebook</span>
                            </a>
                            <p class="text-white/70 text-xs font-garet mt-2 text-center lg:text-right">Panduan & peraturan lomba</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

          <!-- Status Overview Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
            <!-- Competition Status -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 border-2 border-[#D3EB9F]/30">
                <div class="flex items-center justify-between mb-3 sm:mb-4">
                    <h3 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">Status Kompetisi</h3>
                    @switch($team->status)
                        @case('approved')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            @break
                        @case('pending')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            @break
                        @case('rejected')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                            @break
                    @endswitch
                </div>
                
                <div class="space-y-1 sm:space-y-2">
                    @switch($team->status)
                        @case('approved')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-[#0F4C82]">Approved</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Tim Anda telah disetujui!</p>
                            @break
                        @case('pending')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-yellow-600">Pending</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Menunggu verifikasi admin</p>
                            @break
                        @case('rejected')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-red-600">Rejected</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet line-clamp-2">{{ $team->rejection_reason ?? 'Silakan hubungi admin' }}</p>
                            @break
                    @endswitch
                </div>
            </div>

            <!-- Payment Status -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 border-2 border-[#D3EB9F]/30">
                <div class="flex items-center justify-between mb-3 sm:mb-4">
                    <h3 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">Status Pembayaran</h3>
                    @if($team->payment_proof)
                        @if($team->payment_status === 'verified')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        @elseif($team->payment_status === 'pending')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        @else
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                        @endif
                    @else
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                    @endif
                </div>
                
                <div class="space-y-1 sm:space-y-2">
                    @if($team->payment_proof)
                        @if($team->payment_status === 'verified')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-[#0F4C82]">Verified</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Pembayaran dikonfirmasi</p>
                        @elseif($team->payment_status === 'pending')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-yellow-600">Under Review</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Sedang diverifikasi</p>
                        @else
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-red-600">Rejected</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet line-clamp-2">{{ $team->payment_rejection_reason ?? 'Upload ulang bukti' }}</p>
                        @endif
                    @else
                        <p class="text-xl sm:text-2xl font-helvetica font-black text-gray-600">Not Submitted</p>
                        <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Belum upload bukti</p>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Essay Submission Alert (if team can submit) -->
        @if($team->canSubmitEssay() && !$team->hasSubmittedEssay())
        <div class="mb-6 sm:mb-8 bg-gradient-to-r from-amber-50 to-amber-100 border-2 border-amber-200 rounded-xl p-4 sm:p-6 shadow-lg">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-helvetica font-black text-amber-900 text-lg mb-2">Submit Pre-Elimination Essay</h3>
                    <p class="text-sm text-amber-800 font-garet mb-4">
                        Tim Anda sudah disetujui dan pembayaran sudah diverifikasi. Saatnya submit essay untuk tahap pre-elimination!
                    </p>
                    <a href="{{ route('essay.create') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all text-sm">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        Submit Essay Sekarang
                    </a>
                </div>
            </div>
        </div>
        @endif

       <!-- Essay Status Card (if already submitted) -->
@if($essay)
<div class="mb-6 sm:mb-8">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border-2 border-[#D3EB9F]/30 hover:shadow-3xl transition-all duration-300">
        <!-- Header -->
        <div class="relative bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-5 sm:p-6 overflow-hidden">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
            <div class="relative z-10 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg sm:text-xl font-helvetica font-black text-white leading-tight">Status Pre-Elimination Essay</h2>
                        <p class="text-white/80 text-xs sm:text-sm font-garet mt-1">{{ $essay->created_at->format('d M Y, H:i') }} WIB</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="p-5 sm:p-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                
                <!-- Status Card -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-5 border-2 border-gray-100 hover:border-[#D3EB9F] transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-sm font-helvetica font-bold text-gray-600">Status</p>
                        
                    </div>
                    <div class="flex items-center justify-center">
                        <span class="inline-flex items-center px-4 py-2 {{ $essay->status_badge }} text-sm font-helvetica font-black rounded-xl border-2">
                            {{ $essay->status_label }}
                        </span>
                    </div>
                </div>

                <!-- Score Card -->
                @if($essay->isScored())
                <div class="bg-gradient-to-br from-[#0F4C82]/5 to-[#6F97B6]/5 rounded-xl p-5 border-2 border-[#0F4C82]/20 hover:border-[#0F4C82]/40 transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-sm font-helvetica font-bold text-gray-600">Score</p>
                       
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="flex items-end space-x-1">
                            <p class="text-4xl font-helvetica font-black text-[#0F4C82] leading-none">{{ number_format($essay->score, 1) }}</p>
                            <span class="text-xl text-gray-400 font-garet pb-0.5">/100</span>
                        </div>
                    </div>
                </div>
                @else
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-5 border-2 border-gray-100 hover:border-gray-200 transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-sm font-helvetica font-bold text-gray-600">Score</p>
                        
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="text-center">
                            <p class="text-3xl font-helvetica font-black text-gray-300 leading-none">—</p>
                            <p class="text-xs text-gray-400 font-garet mt-1">Belum dinilai</p>
                        </div>
                    </div>
                </div>
                @endif
                
                <!-- Action Card -->
                <div class="bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-xl p-5 border-2 border-[#D3EB9F] hover:shadow-xl transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-sm font-helvetica font-bold text-[#0F4C82]">Detail</p>
                        
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="{{ route('essay.show') }}" 
                           class="w-full px-4 py-2 bg-white text-[#0F4C82] font-helvetica font-black text-sm rounded-lg hover:bg-[#0F4C82] hover:text-white transition-all text-center">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

       

      

        <!-- Competition Schedule Card - COLLAPSIBLE -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30" x-data="{ open: false }">
            <button @click="open = !open" class="w-full relative bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-4 sm:p-6 overflow-hidden text-left focus:outline-none focus:ring-2 focus:ring-[#D3EB9F] focus:ring-offset-2">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div class="flex items-center flex-1 min-w-0 mr-4">
                       
                        <div class="min-w-0 flex-1">
                            <h2 class="text-base sm:text-xl lg:text-2xl font-helvetica font-black text-white truncate">Jadwal Kompetisi</h2>
                            <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5 truncate">Timeline {{ $competition->name }}</p>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </button>

            <div x-show="open" x-collapse class="p-4 sm:p-6 lg:p-8">
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-4 sm:left-6 top-0 bottom-0 w-0.5 bg-gradient-to-b from-[#0F4C82] via-[#6F97B6] to-[#D3EB9F]"></div>

                    <!-- Timeline Items -->
                    <div class="space-y-6 sm:space-y-8">
                        <!-- Registration Period -->
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-full flex items-center justify-center shadow-lg ring-4 ring-white">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 sm:ml-6 flex-1 min-w-0">
                                <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-5 border-2 border-[#D3EB9F]/30 shadow-md">
                                    <h3 class="font-helvetica font-black text-[#0F4C82] text-base sm:text-lg mb-2">Periode Pendaftaran</h3>
                                    <div class="flex flex-wrap items-center text-[#6B7280] font-garet text-xs sm:text-sm mb-2 sm:mb-3 gap-1">
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 text-[#6F97B6] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="font-bold text-[#0F4C82]">{{ $competition->registration_start->format('d M Y') }}</span>
                                        <span class="mx-1">-</span>
                                        <span class="font-bold text-[#0F4C82]">{{ $competition->registration_end->format('d M Y') }}</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-[#6B7280] font-garet mb-2 sm:mb-3">
                                        Batas waktu pendaftaran dan upload dokumen
                                    </p>
                                    @if(now()->between($competition->registration_start, $competition->registration_end))
                                    <div class="inline-flex items-center px-2 sm:px-3 py-1 bg-green-100 text-green-700 text-xs font-helvetica font-black rounded-full">
                                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1.5 sm:mr-2 animate-pulse"></span>
                                        Berlangsung
                                    </div>
                                    @elseif(now()->lt($competition->registration_start))
                                    <div class="inline-flex items-center px-2 sm:px-3 py-1 bg-blue-100 text-blue-700 text-xs font-helvetica font-black rounded-full">
                                        <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Akan Datang
                                    </div>
                                    @else
                                    <div class="inline-flex items-center px-2 sm:px-3 py-1 bg-gray-100 text-gray-600 text-xs font-helvetica font-black rounded-full">
                                        <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Selesai
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Competition Period -->
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center shadow-lg ring-4 ring-white">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 sm:ml-6 flex-1 min-w-0">
                                <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-5 border-2 border-[#D3EB9F]/30 shadow-md">
                                    <h3 class="font-helvetica font-black text-[#0F4C82] text-base sm:text-lg mb-2">Pelaksanaan Kompetisi</h3>
                                    <div class="flex flex-wrap items-center text-[#6B7280] font-garet text-xs sm:text-sm mb-2 sm:mb-3 gap-1">
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 text-[#6F97B6] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="font-bold text-[#0F4C82]">{{ $competition->competition_start->format('d M Y') }}</span>
                                        <span class="mx-1">-</span>
                                        <span class="font-bold text-[#0F4C82]">{{ $competition->competition_end->format('d M Y') }}</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-[#6B7280] font-garet mb-2 sm:mb-3">
                                        Periode pelaksanaan kompetisi dan penilaian
                                    </p>
                                    @if(now()->between($competition->competition_start, $competition->competition_end))
                                    <div class="inline-flex items-center px-2 sm:px-3 py-1 bg-green-100 text-green-700 text-xs font-helvetica font-black rounded-full">
                                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1.5 sm:mr-2 animate-pulse"></span>
                                        Berlangsung
                                    </div>
                                    @elseif(now()->lt($competition->competition_start))
                                    <div class="inline-flex items-center px-2 sm:px-3 py-1 bg-blue-100 text-blue-700 text-xs font-helvetica font-black rounded-full">
                                        <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Akan Datang
                                    </div>
                                    @else
                                    <div class="inline-flex items-center px-2 sm:px-3 py-1 bg-gray-100 text-gray-600 text-xs font-helvetica font-black rounded-full">
                                        <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Selesai
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Countdown (if competition hasn't started) -->
                        @if(now()->lt($competition->competition_start))
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center shadow-lg ring-4 ring-white">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 sm:ml-6 flex-1 min-w-0">
                                <div class="bg-gradient-to-br from-[#0F4C82]/5 to-[#6F97B6]/5 rounded-xl p-4 sm:p-5 border-2 border-[#0F4C82]/20 shadow-md">
                                    <h3 class="font-helvetica font-black text-[#0F4C82] text-base sm:text-lg mb-2">Countdown</h3>
                                   @php
                                        $start = $competition->competition_start; // biasanya sudah Carbon kalau cast datetime
                                        $secondsLeft = now()->diffInSeconds($start, false); // bisa negatif kalau lewat
                                        $daysLeft = $secondsLeft > 0 ? (int) ceil($secondsLeft / 86400) : 0;
                                    @endphp

                                    <div class="flex items-center">
                                        <div class="text-3xl sm:text-4xl font-helvetica font-black text-[#0F4C82] mr-2 sm:mr-3">{{ $daysLeft }}</div>
                                        <div class="text-xs sm:text-sm font-garet text-[#6B7280]">
                                            <div class="font-bold">Hari Lagi</div>
                                            <div class="hidden sm:block">Menuju Kompetisi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Team Registration Card - COLLAPSIBLE -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30" x-data="{ open: false }">
            <button @click="open = !open" class="w-full relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] p-4 sm:p-6 lg:p-8 overflow-hidden text-left focus:outline-none focus:ring-2 focus:ring-[#D3EB9F] focus:ring-offset-2">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 30px 30px;"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div class="flex items-center space-x-2 sm:space-x-3 flex-1 min-w-0 mr-4">
                       
                        <div class="min-w-0 flex-1">
                            <h2 class="text-base sm:text-xl lg:text-2xl xl:text-3xl font-helvetica font-black tracking-tighter text-white truncate">{{ $team->name }}</h2>
                            <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5 sm:mt-1 truncate">{{ $team->institution }}</p>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </button>

            <div x-show="open" x-collapse class="p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                    
                    <!-- Team Members -->
                    <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30 shadow-lg">
                        <h3 class="text-base sm:text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Anggota Tim
                        </h3>
                        
                        <div class="space-y-3 sm:space-y-4">
                            @foreach($members as $member)
                            <div class="flex items-center space-x-3 sm:space-x-4 p-3 sm:p-4 bg-white rounded-xl border border-[#D3EB9F]/20 hover:border-[#D3EB9F] transition-all duration-300">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                    <span class="text-white font-helvetica font-black text-base sm:text-lg">{{ substr($member['name'], 0, 1) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-0.5 sm:mb-1">
                                        <h4 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base truncate">{{ $member['name'] }}</h4>
                                        @if($member['role'] === 'leader')
                                        <span class="px-2 py-0.5 sm:py-1 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-xs font-helvetica font-black rounded-full whitespace-nowrap flex-shrink-0">
                                            Ketua
                                        </span>
                                        @else
                                        <span class="px-2 py-0.5 sm:py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-helvetica font-black rounded-full whitespace-nowrap flex-shrink-0">
                                            Anggota
                                        </span>
                                        @endif
                                    </div>
                                    <p class="text-xs sm:text-sm text-[#6B7280] font-garet truncate">{{ $member['email'] }}</p>
                                    <p class="text-xs text-[#6B7280] font-garet mt-0.5 sm:mt-1">{{ $member['phone'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Team Details -->
                    <div class="space-y-4 sm:space-y-6">
                        <!-- Contact Information -->
                        <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30 shadow-lg">
                            <h3 class="text-base sm:text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3 sm:mb-4 flex items-center">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Kontak Tim
                            </h3>
                            
                            <div class="space-y-2 sm:space-y-3">
                                <div class="p-2.5 sm:p-3 bg-white rounded-lg border border-[#D3EB9F]/20">
                                    <p class="text-xs text-[#6B7280] font-garet mb-0.5 sm:mb-1">Email</p>
                                    <p class="font-garet text-[#0F4C82] text-sm sm:text-base break-all">{{ $team->contact_email }}</p>
                                </div>
                                <div class="p-2.5 sm:p-3 bg-white rounded-lg border border-[#D3EB9F]/20">
                                    <p class="text-xs text-[#6B7280] font-garet mb-0.5 sm:mb-1">Nomor HP</p>
                                    <p class="font-garet text-[#0F4C82] text-sm sm:text-base">{{ $team->contact_phone }}</p>
                                </div>
                                <div class="p-2.5 sm:p-3 bg-white rounded-lg border border-[#D3EB9F]/20">
                                    <p class="text-xs text-[#6B7280] font-garet mb-0.5 sm:mb-1">Universitas</p>
                                    <p class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">{{ $team->institution }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-white rounded-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30 shadow-lg">
                            <h3 class="font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3 sm:mb-4 text-base sm:text-lg">Quick Actions</h3>
                            <div class="space-y-2 sm:space-y-3">
                                @if($team->isApproved() && $team->wa_group_link)
                                <a href="{{ $team->wa_group_link }}" 
                                   target="_blank"
                                   class="flex items-center justify-center px-4 py-2.5 sm:py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                    Join WA Group
                                </a>
                                @endif
                                
                                <a href="{{ route('profile.edit') }}" 
                                   class="flex items-center justify-center px-4 py-2.5 sm:py-3 bg-white border-2 border-[#0F4C82] text-[#0F4C82] font-helvetica font-black rounded-xl hover:bg-[#F8FBFC] transition-all duration-300 text-sm sm:text-base">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <!-- No Registration State -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl p-8 sm:p-12 text-center border-2 border-[#D3EB9F]/30">
            <div class="max-w-md mx-auto">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-2xl">
                    <svg class="w-10 h-10 sm:w-12 sm:h-12 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-2 sm:mb-3">Belum Ada Pendaftaran Tim</h3>
                <p class="text-[#6B7280] mb-6 sm:mb-8 font-garet text-sm sm:text-base">Anda belum mendaftar kompetisi apapun. Mulai perjalananmu dengan mendaftar sekarang!</p>
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Lihat Kompetisi
                </a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection

@push('styles')
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-25px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 7s ease-in-out infinite;
}
</style>
@endpush

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white pt-24 sm:pt-28 md:pt-32 pb-16 sm:pb-20 overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-15 mix-blend-multiply pointer-events-none" style="background-image: url('/assets/images/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Decorative Sparkles - Hidden on mobile -->
    <div class="hidden md:block absolute top-20 right-20 w-12 h-12 opacity-60 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="hidden lg:block absolute top-40 left-32 w-10 h-10 opacity-50 animate-float-delayed" style="animation-delay: 0.7s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    <div class="hidden md:block absolute bottom-32 right-1/4 w-14 h-14 opacity-70 animate-float" style="animation-delay: 0.3s;">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(211,235,159,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <!-- Breadcrumb -->
                <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
                    <a href="/" class="hover:text-[#6F97B6] transition font-bold">Home</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-[#0F4C82] font-bold">Dashboard</span>
                </div>
                @php
                    $displayName = auth()->user()->team_name ?? auth()->user()->name;
                @endphp
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-2 sm:mb-3">Welcome back, {{ $displayName }}!</h1>
                <p class="text-white/90 text-sm sm:text-base lg:text-lg font-garet">
                    {{ auth()->user()->university ?? 'Manage your team registration and track your progress' }}
                </p>
            </div>
        </div>
    </div>
    
    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V60H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Dashboard Content -->
<section class="py-8 sm:py-12 bg-[#F8FBFC] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Alert Messages -->
        @if(session('success'))
        <div class="mb-6 sm:mb-8 p-3 sm:p-4 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 border-2 border-[#D3EB9F] text-[#0F4C82] rounded-xl flex items-center font-garet shadow-lg text-sm sm:text-base">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="mb-6 sm:mb-8 p-3 sm:p-4 bg-red-50 border-2 border-red-200 text-red-700 rounded-xl flex items-center font-garet shadow-lg text-sm sm:text-base">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            {{ session('error') }}
        </div>
        @endif

        @if(auth()->user()->competition_id)
        @php
            $user = auth()->user();
            $competition = $user->competition;
            $submission = $user->submission;
            $selection = $user->selection;
        @endphp

         <!-- Competition Info Card -->
        <div class="bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl sm:rounded-2xl shadow-2xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30">
            <div class="relative p-4 sm:p-6 lg:p-8 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 30px 30px;"></div>
                
                <div class="relative z-10">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 sm:gap-6">
                        <!-- Left Side - Competition Info -->
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                                <div class="min-w-0 flex-1">
                                    <p class="text-white/70 text-xs sm:text-sm font-garet mb-0.5 sm:mb-1">Your Competition</p>
                                    <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-helvetica font-black text-white truncate">{{ $competition->name }}</h2>
                                </div>
                            </div>
                            
                            <p class="text-white/90 font-garet mb-3 sm:mb-4 leading-relaxed text-sm sm:text-base line-clamp-2 sm:line-clamp-none">
                                @if($competition->description)
                                    {{ $competition->description }}
                                @else
                                    Kompetisi {{ $competition->name }} - {{ $user->university }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Overview Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
            <!-- Payment Status -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 border-2 border-[#D3EB9F]/30">
                <div class="flex items-center justify-between mb-3 sm:mb-4">
                    <h3 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">Status Pembayaran</h3>
                    @php
                        $status = $user->payment_status ?? 'pending';
                    @endphp
                    @if($user->link_drive_payment)
                        @if($status === 'verified')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        @elseif($status === 'pending')
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        @else
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                        @endif
                    @else
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                    @endif
                </div>
                
                <div class="space-y-1 sm:space-y-2">
                    @if($user->link_drive_payment)
                        @if($status === 'verified')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-[#0F4C82]">Verified</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Pembayaran dikonfirmasi</p>
                        @elseif($status === 'pending')
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-yellow-600">Under Review</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Sedang diverifikasi</p>
                        @else
                            <p class="text-xl sm:text-2xl font-helvetica font-black text-red-600">Rejected</p>
                            <p class="text-xs sm:text-sm text-[#6B7280] font-garet line-clamp-2">Upload ulang bukti</p>
                        @endif
                    @else
                        <p class="text-xl sm:text-2xl font-helvetica font-black text-gray-600">Not Submitted</p>
                        <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Belum upload bukti</p>
                    @endif
                </div>
            </div>

            <!-- Submission Status (only if competition has submission) -->
            @if($competition->has_submission)
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 border-2 border-[#D3EB9F]/30">
                <div class="flex items-center justify-between mb-3 sm:mb-4">
                    <h3 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">Status Submission</h3>
                    @if($submission)
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    @else
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    @endif
                </div>
                
                <div class="space-y-1 sm:space-y-2">
                    @if($submission)
                        <p class="text-xl sm:text-2xl font-helvetica font-black text-[#0F4C82]">Submitted</p>
                        <p class="text-xs sm:text-sm text-[#6B7280] font-garet">{{ $submission->submitted_at->format('d M Y, H:i') }}</p>
                    @else
                        <p class="text-xl sm:text-2xl font-helvetica font-black text-gray-600">Not Submitted</p>
                        <p class="text-xs sm:text-sm text-[#6B7280] font-garet">Belum submit karya</p>
                    @endif
                </div>
            </div>
            @endif
        </div>
        
        <!-- Submission Card (if payment verified and has submission requirement) -->
        @if($status === 'verified' && $competition->has_submission)
        <div class="mb-6 sm:mb-8">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border-2 border-[#D3EB9F]/30 hover:shadow-3xl transition-all duration-300">
                <!-- Header -->
                <div class="relative bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-5 sm:p-6 overflow-hidden">
                    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                    <div class="relative z-10 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg sm:text-xl font-helvetica font-black text-white leading-tight">📤 Submission</h2>
                                @if($competition->submission_deadline)
                                <p class="text-white/80 text-xs sm:text-sm font-garet mt-1">Deadline: {{ $competition->submission_deadline->format('d M Y, H:i') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-5 sm:p-6">
                    @if($competition->submission_deadline && now()->gt($competition->submission_deadline))
                        <!-- Deadline Passed -->
                        <div class="p-3 bg-red-100 text-red-700 rounded-xl mb-4">
                            ⛔ Deadline submission sudah lewat. Submission tidak dapat diubah.
                        </div>

                        @if($submission)
                        <div class="text-sm">
                            <p class="font-semibold mb-2">Submission terakhir:</p>
                            <a href="{{ $submission->drive_link }}" target="_blank" class="text-blue-600 underline break-all">
                                {{ $submission->drive_link }}
                            </a>
                            <p class="text-gray-500 mt-2">
                                Dikirim pada: {{ $submission->submitted_at->format('d M Y, H:i') }}
                            </p>
                        </div>
                        @endif
                    @else
                        <!-- Can still submit -->
                        @if($submission)
                        <div class="p-3 bg-blue-50 rounded-xl text-sm mb-4">
                            <p class="font-semibold">Submission tersimpan:</p>
                            <a href="{{ $submission->drive_link }}" target="_blank" class="text-blue-600 underline break-all">
                                {{ $submission->drive_link }}
                            </a>
                            <p class="text-gray-500 mt-1">
                                Terakhir diperbarui: {{ $submission->submitted_at->format('d M Y, H:i') }}
                            </p>
                            <p class="mt-1 text-blue-600 italic">
                                Kamu masih bisa mengedit submission sampai deadline
                            </p>
                        </div>
                        @endif

                        <!-- Submission Form -->
                        <form method="POST" action="{{ route('submission.store') }}" class="space-y-4">
                            @csrf
                            <div>
                                <label class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                                    Link Google Drive Submission <span class="text-red-500">*</span>
                                </label>
                                <input type="url" 
                                       name="drive_link" 
                                       required 
                                       class="w-full px-4 py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet"
                                       placeholder="https://drive.google.com/..."
                                       value="{{ $submission?->drive_link }}">
                            </div>
                            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all">
                                {{ $submission ? 'Perbarui Submission' : 'Kirim Submission' }}
                            </button>
                        </form>
                    @endif

                    <!-- Selection Status (if exists) -->
                    @if($selection)
                    <div class="pt-4 mt-4 border-t-2 border-[#D3EB9F]/30">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-helvetica font-black text-[#0F4C82]">Status Seleksi:</span>
                            <span class="px-4 py-2 {{ $selection->status === 'passed' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }} text-sm font-helvetica font-black rounded-xl">
                                {{ strtoupper($selection->status) }}
                            </span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        <!-- Team Registration Card - COLLAPSIBLE -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30" x-data="{ open: false }">
            <button @click="open = !open" class="w-full relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] p-4 sm:p-6 lg:p-8 overflow-hidden text-left focus:outline-none focus:ring-2 focus:ring-[#D3EB9F] focus:ring-offset-2">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 30px 30px;"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div class="flex items-center space-x-2 sm:space-x-3 flex-1 min-w-0 mr-4">
                        <div class="min-w-0 flex-1">
                            <h2 class="text-base sm:text-xl lg:text-2xl xl:text-3xl font-helvetica font-black tracking-tighter text-white truncate">{{ $user->team_name }}</h2>
                            <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5 sm:mt-1 truncate">{{ $user->university }}</p>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </button>

            <div x-show="open" x-collapse class="p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                    
                    <!-- Team Members -->
                    <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30 shadow-lg">
                        <h3 class="text-base sm:text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-4 sm:mb-6 flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Anggota Tim
                        </h3>
                        
                        <div class="space-y-3 sm:space-y-4">
                            <!-- Leader -->
                            @if($user->team_leader)
                            <div class="flex items-center space-x-3 sm:space-x-4 p-3 sm:p-4 bg-white rounded-xl border border-[#D3EB9F]/20 hover:border-[#D3EB9F] transition-all duration-300">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                    <span class="text-white font-helvetica font-black text-base sm:text-lg">{{ substr($user->team_leader, 0, 1) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-0.5 sm:mb-1">
                                        <h4 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base truncate">{{ $user->team_leader }}</h4>
                                        <span class="px-2 py-0.5 sm:py-1 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-xs font-helvetica font-black rounded-full whitespace-nowrap flex-shrink-0">
                                            Ketua
                                        </span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-[#6B7280] font-garet truncate">{{ $user->email }}</p>
                                    <p class="text-xs text-[#6B7280] font-garet mt-0.5 sm:mt-1">{{ $user->contact_number }}</p>
                                </div>
                            </div>
                            @endif

                            <!-- Member 1 -->
                            @if($user->team_member_1)
                            <div class="flex items-center space-x-3 sm:space-x-4 p-3 sm:p-4 bg-white rounded-xl border border-[#D3EB9F]/20 hover:border-[#D3EB9F] transition-all duration-300">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                    <span class="text-white font-helvetica font-black text-base sm:text-lg">{{ substr($user->team_member_1, 0, 1) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-0.5 sm:mb-1">
                                        <h4 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base truncate">{{ $user->team_member_1 }}</h4>
                                        <span class="px-2 py-0.5 sm:py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-helvetica font-black rounded-full whitespace-nowrap flex-shrink-0">
                                            Anggota
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <!-- Member 2 -->
                            @if($user->team_member_2)
                            <div class="flex items-center space-x-3 sm:space-x-4 p-3 sm:p-4 bg-white rounded-xl border border-[#D3EB9F]/20 hover:border-[#D3EB9F] transition-all duration-300">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                    <span class="text-white font-helvetica font-black text-base sm:text-lg">{{ substr($user->team_member_2, 0, 1) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-0.5 sm:mb-1">
                                        <h4 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base truncate">{{ $user->team_member_2 }}</h4>
                                        <span class="px-2 py-0.5 sm:py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-helvetica font-black rounded-full whitespace-nowrap flex-shrink-0">
                                            Anggota
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Team Details -->
                    <div class="space-y-4 sm:space-y-6">
                        <!-- Contact Information -->
                        <div class="bg-gradient-to-br from-[#F8FBFC] to-white rounded-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30 shadow-lg">
                            <h3 class="text-base sm:text-xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3 sm:mb-4 flex items-center">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Kontak Tim
                            </h3>
                            
                            <div class="space-y-2 sm:space-y-3">
                                <div class="p-2.5 sm:p-3 bg-white rounded-lg border border-[#D3EB9F]/20">
                                    <p class="text-xs text-[#6B7280] font-garet mb-0.5 sm:mb-1">Email</p>
                                    <p class="font-garet text-[#0F4C82] text-sm sm:text-base break-all">{{ $user->email }}</p>
                                </div>
                                <div class="p-2.5 sm:p-3 bg-white rounded-lg border border-[#D3EB9F]/20">
                                    <p class="text-xs text-[#6B7280] font-garet mb-0.5 sm:mb-1">Nomor HP</p>
                                    <p class="font-garet text-[#0F4C82] text-sm sm:text-base">{{ $user->contact_number }}</p>
                                </div>
                                <div class="p-2.5 sm:p-3 bg-white rounded-lg border border-[#D3EB9F]/20">
                                    <p class="text-xs text-[#6B7280] font-garet mb-0.5 sm:mb-1">Universitas</p>
                                    <p class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">{{ $user->university }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-white rounded-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30 shadow-lg">
                            <h3 class="font-helvetica font-black tracking-tighter text-[#0F4C82] mb-3 sm:mb-4 text-base sm:text-lg">Quick Actions</h3>
                            <div class="space-y-2 sm:space-y-3">
                                <a href="/profile" 
                                   class="flex items-center justify-center px-4 py-2.5 sm:py-3 bg-white border-2 border-[#0F4C82] text-[#0F4C82] font-helvetica font-black rounded-xl hover:bg-[#F8FBFC] transition-all duration-300 text-sm sm:text-base">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <!-- No Registration State -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl p-8 sm:p-12 text-center border-2 border-[#D3EB9F]/30">
            <div class="max-w-md mx-auto">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-2xl">
                    <svg class="w-10 h-10 sm:w-12 sm:h-12 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-2 sm:mb-3">Belum Ada Pendaftaran Tim</h3>
                <p class="text-[#6B7280] mb-6 sm:mb-8 font-garet text-sm sm:text-base">Anda belum mendaftar kompetisi apapun. Mulai perjalananmu dengan mendaftar sekarang!</p>
                <a href="/" 
                   class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Lihat Kompetisi
                </a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection

@push('styles')
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-25px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 7s ease-in-out infinite;
}
</style>
@endpush