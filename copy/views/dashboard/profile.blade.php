@extends('layouts.app')

@section('title', 'Edit Profile')

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
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="flex items-center space-x-2 text-white/70 mb-3 sm:mb-4 text-xs sm:text-sm font-garet">
            <a href="{{ route('home') }}" class="hover:text-[#D3EB9F] transition">Home</a>
            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('dashboard') }}" class="hover:text-[#D3EB9F] transition">Dashboard</a>
            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-white">Profile</span>
        </div>
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-helvetica font-black tracking-tighter mb-2 sm:mb-3">My Profile</h1>
        <p class="text-white/90 text-sm sm:text-base lg:text-lg font-garet">Manage your account and team information</p>
    </div>
    
    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V60H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<section class="py-8 sm:py-12 bg-[#F8FBFC] min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
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

        <!-- Team Status Banner (if user has team) -->
        @if($user->hasTeam())
        @php
            $team = $user->team;
        @endphp
        <div class="bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30">
            <div class="p-4 sm:p-6">
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-helvetica font-black text-white text-base sm:text-lg truncate">{{ $team->name }}</h3>
                        <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5 truncate">{{ $team->competition->name }}</p>
                    </div>
                    <a href="{{ route('dashboard') }}" class="flex-shrink-0 px-3 sm:px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm text-white text-xs sm:text-sm font-helvetica font-black rounded-lg transition-all duration-300 border border-white/30">
                        View Team
                    </a>
                </div>
            </div>
        </div>
        @endif

        <!-- Profile Information Form -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30">
            <div class="relative bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-4 sm:p-6 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                <div class="relative z-10 flex items-center">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-3 sm:mr-4 flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg sm:text-xl font-helvetica font-black text-white">Personal Information</h2>
                        <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5">Update your personal details</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('profile.update') }}" class="p-4 sm:p-6 lg:p-8 space-y-4 sm:space-y-5">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   value="{{ old('name', $user->name) }}"
                                   class="w-full pl-9 sm:pl-10 pr-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('name') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="Enter your full name"
                                   required>
                        </div>
                        @error('name')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet flex items-center">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   value="{{ old('email', $user->email) }}"
                                   class="w-full pl-9 sm:pl-10 pr-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('email') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="your.email@example.com"
                                   required>
                        </div>
                        @error('email')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet flex items-center">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Phone Number
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <input type="text" 
                                   name="phone" 
                                   id="phone" 
                                   value="{{ old('phone', $user->phone) }}"
                                   class="w-full pl-9 sm:pl-10 pr-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('phone') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="081234567890">
                        </div>
                        @error('phone')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet flex items-center">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Institution -->
                    <div>
                        <label for="institution" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Institution / University
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <input type="text" 
                                   name="institution" 
                                   id="institution" 
                                   value="{{ old('institution', $user->institution) }}"
                                   class="w-full pl-9 sm:pl-10 pr-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('institution') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="Universitas Padjadjaran">
                        </div>
                        @error('institution')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet flex items-center">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 sm:pt-5 border-t-2 border-[#D3EB9F]/30">
                    <button type="submit" class="px-5 sm:px-6 py-2.5 sm:py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>

        <!-- Team Information (if user has team) -->
        @if($user->hasTeam())
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30">
            <div class="relative bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] p-4 sm:p-6 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                <div class="relative z-10 flex items-center">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-3 sm:mr-4 flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg sm:text-xl font-helvetica font-black text-[#0F4C82]">Team Information</h2>
                        <p class="text-[#0F4C82]/80 text-xs sm:text-sm font-garet mt-0.5">Update team details and member information</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('teams.update', $team->code) }}" class="p-4 sm:p-6 lg:p-8 space-y-6">
                @csrf
                @method('PATCH')

                <!-- Team Basic Info -->
                <div class="space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-helvetica font-black text-[#0F4C82] flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Team Details
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                        <!-- Team Name -->
                        <div>
                            <label for="team_name" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                                Team Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="team_name" 
                                   value="{{ old('name', $team->name) }}"
                                   class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('name') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="Team Innovators"
                                   required>
                            @error('name')
                            <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Institution -->
                        <div>
                            <label for="team_institution" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                                Institution <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="institution" 
                                   id="team_institution" 
                                   value="{{ old('institution', $team->institution) }}"
                                   class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('institution') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="Universitas Padjadjaran"
                                   required>
                            @error('institution')
                            <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Contact Email -->
                        <div>
                            <label for="contact_email" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                                Contact Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" 
                                   name="contact_email" 
                                   id="contact_email" 
                                   value="{{ old('contact_email', $team->contact_email) }}"
                                   class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('contact_email') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="team@example.com"
                                   required>
                            @error('contact_email')
                            <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Contact Phone -->
                        <div>
                            <label for="contact_phone" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                                Contact Phone <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="contact_phone" 
                                   id="contact_phone" 
                                   value="{{ old('contact_phone', $team->contact_phone) }}"
                                   class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('contact_phone') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="081234567890"
                                   required>
                            @error('contact_phone')
                            <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-helvetica font-black text-[#0F4C82] flex items-center pb-3 border-b-2 border-[#D3EB9F]/30">
                        <svg class="w-5 h-5 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Team Members (Max 2)
                    </h3>

                    @for($i = 1; $i <= 2; $i++)
                    @php
                        $memberName = "member{$i}_name";
                        $memberEmail = "member{$i}_email";
                        $memberPhone = "member{$i}_phone";
                    @endphp
                    
                    <!-- Member {{ $i }} -->
                    <div class="bg-gradient-to-br from-[#F8FBFC] to-white p-4 sm:p-5 rounded-xl border-2 border-[#D3EB9F]/30 space-y-4">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-helvetica font-black text-sm sm:text-base">{{ $i }}</span>
                            </div>
                            <div>
                                <h4 class="font-helvetica font-black text-[#0F4C82] text-sm sm:text-base">
                                    Member {{ $i }} 
                                    @if($i === 1)
                                    <span class="ml-2 px-2 py-0.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-xs rounded-full">Leader</span>
                                    @endif
                                </h4>
                                <p class="text-[#6B7280] text-xs font-garet">{{ $i === 1 ? 'Team Leader' : 'Team Member' }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                            <!-- Name -->
                            <div>
                                <label for="{{ $memberName }}" class="block text-xs sm:text-sm font-helvetica font-black text-[#0F4C82] mb-1.5">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="{{ $memberName }}" 
                                       id="{{ $memberName }}" 
                                       value="{{ old($memberName, $team->$memberName) }}"
                                       class="w-full px-3 py-2 sm:py-2.5 border-2 border-[#D3EB9F]/30 rounded-lg focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-white text-[#0F4C82] font-garet text-xs sm:text-sm transition-all @error($memberName) border-red-300 ring-2 ring-red-200 @enderror"
                                       placeholder="Full name"
                                       required>
                                @error($memberName)
                                <p class="mt-1 text-xs text-red-600 font-garet">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="{{ $memberEmail }}" class="block text-xs sm:text-sm font-helvetica font-black text-[#0F4C82] mb-1.5">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       name="{{ $memberEmail }}" 
                                       id="{{ $memberEmail }}" 
                                       value="{{ old($memberEmail, $team->$memberEmail) }}"
                                       class="w-full px-3 py-2 sm:py-2.5 border-2 border-[#D3EB9F]/30 rounded-lg focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-white text-[#0F4C82] font-garet text-xs sm:text-sm transition-all @error($memberEmail) border-red-300 ring-2 ring-red-200 @enderror"
                                       placeholder="email@example.com"
                                       required>
                                @error($memberEmail)
                                <p class="mt-1 text-xs text-red-600 font-garet">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="{{ $memberPhone }}" class="block text-xs sm:text-sm font-helvetica font-black text-[#0F4C82] mb-1.5">
                                    Phone <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="{{ $memberPhone }}" 
                                       id="{{ $memberPhone }}" 
                                       value="{{ old($memberPhone, $team->$memberPhone) }}"
                                       class="w-full px-3 py-2 sm:py-2.5 border-2 border-[#D3EB9F]/30 rounded-lg focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-white text-[#0F4C82] font-garet text-xs sm:text-sm transition-all @error($memberPhone) border-red-300 ring-2 ring-red-200 @enderror"
                                       placeholder="081234567890"
                                       required>
                                @error($memberPhone)
                                <p class="mt-1 text-xs text-red-600 font-garet">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <div class="flex items-center justify-end pt-4 sm:pt-5 border-t-2 border-[#D3EB9F]/30">
                    <button type="submit" class="px-5 sm:px-6 py-2.5 sm:py-3 bg-gradient-to-r from-[#8CCDCF] to-[#D6EBDF] text-[#0F4C82] font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                        Update Team Info
                    </button>
                </div>
            </form>
        </div>
        @endif

        <!-- Update Password Form -->
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-[#D3EB9F]/30">
            <div class="relative bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] p-4 sm:p-6 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                <div class="relative z-10 flex items-center">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-3 sm:mr-4 flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg sm:text-xl font-helvetica font-black text-white">Security</h2>
                        <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5">Update your password</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('password.update') }}" class="p-4 sm:p-6 lg:p-8 space-y-4 sm:space-y-5">
                @csrf
                @method('PUT')

                <!-- Current Password -->
                <div>
                    <label for="current_password" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                        Current Password <span class="text-red-500">*</span>
                    </label>
                    <div class="relative" x-data="{ show: false }">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <input :type="show ? 'text' : 'password'" 
                               name="current_password" 
                               id="current_password"
                               class="w-full pl-9 sm:pl-10 pr-10 sm:pr-12 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('current_password', 'updatePassword') border-red-300 ring-2 ring-red-200 @enderror"
                               placeholder="Enter current password"
                               required>
                        <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-[#6B7280] hover:text-[#0F4C82] transition">
                            <svg x-show="!show" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <svg x-show="show" x-cloak class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                            </svg>
                        </button>
                    </div>
                    @error('current_password', 'updatePassword')
                    <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet flex items-center">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                    <!-- New Password -->
                    <div>
                        <label for="password" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            New Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative" x-data="{ show: false }">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <input :type="show ? 'text' : 'password'" 
                                   name="password" 
                                   id="password"
                                   class="w-full pl-9 sm:pl-10 pr-10 sm:pr-12 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('password', 'updatePassword') border-red-300 ring-2 ring-red-200 @enderror"
                                   placeholder="Min. 8 characters"
                                   required>
                            <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-[#6B7280] hover:text-[#0F4C82] transition">
                                <svg x-show="!show" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <svg x-show="show" x-cloak class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>
                            </button>
                        </div>
                        @error('password', 'updatePassword')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet flex items-center">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative" x-data="{ show: false }">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <input :type="show ? 'text' : 'password'" 
                                   name="password_confirmation" 
                                   id="password_confirmation"
                                   class="w-full pl-9 sm:pl-10 pr-10 sm:pr-12 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all"
                                   placeholder="Repeat password"
                                   required>
                            <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-[#6B7280] hover:text-[#0F4C82] transition">
                                <svg x-show="!show" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <svg x-show="show" x-cloak class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 sm:pt-5 border-t-2 border-[#D3EB9F]/30">
                    <button type="submit" class="px-5 sm:px-6 py-2.5 sm:py-3 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF] text-white font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                        Update Password
                    </button>
                </div>
            </form>
        </div>

        <!-- Delete Account -->
        <!-- <div class="bg-white rounded-xl sm:rounded-2xl shadow-xl overflow-hidden mb-6 sm:mb-8 border-2 border-red-200">
            <div class="relative bg-gradient-to-r from-red-500 to-red-600 p-4 sm:p-6 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                <div class="relative z-10 flex items-center">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-3 sm:mr-4 flex-shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg sm:text-xl font-helvetica font-black text-white">Danger Zone</h2>
                        <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5">Permanently delete your account</p>
                    </div>
                </div>
            </div>

            <div class="p-4 sm:p-6 lg:p-8">
                <div class="p-3 sm:p-4 bg-red-50 border-2 border-red-200 rounded-xl mb-4 sm:mb-6">
                    <div class="flex items-start">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-red-600 mr-2 sm:mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <div class="flex-1">
                            <p class="text-xs sm:text-sm text-red-900 font-garet font-semibold mb-1">Warning: This action cannot be undone!</p>
                            <p class="text-xs sm:text-sm text-red-700 font-garet">
                                Deleting your account will permanently remove all your data, including your team registration and competition submissions.
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" 
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        class="px-5 sm:px-6 py-2.5 sm:py-3 bg-red-600 text-white font-helvetica font-black rounded-xl hover:bg-red-700 hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-sm sm:text-base">
                    Delete Account
                </button>
            </div>
        </div> -->

        <!-- Back to Dashboard -->
        <div class="text-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-[#6B7280] hover:text-[#0F4C82] font-garet transition text-sm sm:text-base">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Dashboard
            </a>
        </div>
    </div>
</section>

<!-- Delete Account Confirmation Modal -->
<x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="POST" action="{{ route('profile.destroy') }}" class="p-4 sm:p-6">
        @csrf
        @method('delete')

        <div class="flex items-center mb-4 sm:mb-6">
            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-red-100 rounded-full flex items-center justify-center mr-3 sm:mr-4 flex-shrink-0">
                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-base sm:text-lg font-helvetica font-black text-[#0F4C82]">
                    Delete Your Account?
                </h2>
                <p class="text-xs sm:text-sm text-[#6B7280] font-garet mt-0.5">This action cannot be undone</p>
            </div>
        </div>

        <p class="text-xs sm:text-sm text-[#6B7280] mb-4 sm:mb-6 font-garet">
            Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.
        </p>

        <div class="mb-4 sm:mb-6">
            <label for="password" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">Password</label>
            <input type="password" 
                   name="password" 
                   id="password"
                   placeholder="Enter your password"
                   class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base">
            @error('password', 'userDeletion')
            <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col-reverse sm:flex-row justify-end gap-2 sm:gap-3">
            <button type="button" 
                    x-on:click="$dispatch('close')"
                    class="w-full sm:w-auto px-5 sm:px-6 py-2.5 sm:py-3 bg-[#F8FBFC] text-[#0F4C82] font-helvetica font-black rounded-xl hover:bg-gray-200 transition text-sm sm:text-base border-2 border-[#D3EB9F]/30">
                Cancel
            </button>
            <button type="submit" 
                    class="w-full sm:w-auto px-5 sm:px-6 py-2.5 sm:py-3 bg-red-600 text-white font-helvetica font-black rounded-xl hover:bg-red-700 transition text-sm sm:text-base">
                Delete Account
            </button>
        </div>
    </form>
</x-modal>
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