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
        <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
            <a href="/" class="hover:text-[#D3EB9F] transition">Home</a>
            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="/dashboard" class="hover:text-[#D3EB9F] transition">Dashboard</a>
            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-[#0F4C82] font-bold">Profile</span>
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
                        <h2 class="text-lg sm:text-xl font-helvetica font-black text-white">Personal & Team Information</h2>
                        <p class="text-white/80 text-xs sm:text-sm font-garet mt-0.5">Update your team details</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('profile.update') }}" class="p-4 sm:p-6 lg:p-8 space-y-6">
                @csrf
                @method('PATCH')

                <!-- Team Name -->
                <div>
                    <label for="team_name" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                        Team Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           name="team_name" 
                           id="team_name" 
                           value="{{ old('team_name', auth()->user()->team_name) }}"
                           class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('team_name') border-red-300 ring-2 ring-red-200 @enderror"
                           placeholder="Team Innovators"
                           required>
                    @error('team_name')
                    <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Team Leader -->
                <div>
                    <label for="team_leader" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                        Team Leader <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           name="team_leader" 
                           id="team_leader" 
                           value="{{ old('team_leader', auth()->user()->team_leader) }}"
                           class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('team_leader') border-red-300 ring-2 ring-red-200 @enderror"
                           placeholder="Full name of team leader"
                           required>
                    @error('team_leader')
                    <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Team Members -->
                <div class="bg-gradient-to-br from-[#F8FBFC] to-white p-4 sm:p-5 rounded-xl border-2 border-[#D3EB9F]/30 space-y-4">
                    <h3 class="text-base sm:text-lg font-helvetica font-black text-[#0F4C82] mb-3">Team Members</h3>
                    
                    <div>
                        <label for="team_member_1" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Member 1 <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="team_member_1" 
                               id="team_member_1" 
                               value="{{ old('team_member_1', auth()->user()->team_member_1) }}"
                               class="w-full px-4 py-2.5 border-2 border-[#D3EB9F]/30 rounded-lg focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-white text-[#0F4C82] font-garet text-sm transition-all @error('team_member_1') border-red-300 ring-2 ring-red-200 @enderror"
                               placeholder="Full name"
                               required>
                        @error('team_member_1')
                        <p class="mt-1 text-xs text-red-600 font-garet">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="team_member_2" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Member 2 <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="team_member_2" 
                               id="team_member_2" 
                               value="{{ old('team_member_2', auth()->user()->team_member_2) }}"
                               class="w-full px-4 py-2.5 border-2 border-[#D3EB9F]/30 rounded-lg focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-white text-[#0F4C82] font-garet text-sm transition-all @error('team_member_2') border-red-300 ring-2 ring-red-200 @enderror"
                               placeholder="Full name"
                               required>
                        @error('team_member_2')
                        <p class="mt-1 text-xs text-red-600 font-garet">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                    <!-- University -->
                    <div>
                        <label for="university" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            University <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="university" 
                               id="university" 
                               value="{{ old('university', auth()->user()->university) }}"
                               class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('university') border-red-300 ring-2 ring-red-200 @enderror"
                               placeholder="Universitas Padjadjaran"
                               required>
                        @error('university')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contact Number -->
                    <div>
                        <label for="contact_number" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Contact Number <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="contact_number" 
                               id="contact_number" 
                               value="{{ old('contact_number', auth()->user()->contact_number) }}"
                               class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('contact_number') border-red-300 ring-2 ring-red-200 @enderror"
                               placeholder="081234567890"
                               required>
                        @error('contact_number')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" 
                               name="email" 
                               id="email" 
                               value="{{ old('email', auth()->user()->email) }}"
                               class="w-full px-4 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('email') border-red-300 ring-2 ring-red-200 @enderror"
                               placeholder="your.email@example.com"
                               required>
                        @error('email')
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
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
                        <input :type="show ? 'text' : 'password'" 
                               name="current_password" 
                               id="current_password"
                               class="w-full px-4 pr-10 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('current_password', 'updatePassword') border-red-300 ring-2 ring-red-200 @enderror"
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
                    <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                    <!-- New Password -->
                    <div>
                        <label for="password" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            New Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative" x-data="{ show: false }">
                            <input :type="show ? 'text' : 'password'" 
                                   name="password" 
                                   id="password"
                                   class="w-full px-4 pr-10 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all @error('password', 'updatePassword') border-red-300 ring-2 ring-red-200 @enderror"
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
                        <p class="mt-1.5 text-xs sm:text-sm text-red-600 font-garet">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative" x-data="{ show: false }">
                            <input :type="show ? 'text' : 'password'" 
                                   name="password_confirmation" 
                                   id="password_confirmation"
                                   class="w-full px-4 pr-10 py-2.5 sm:py-3 border-2 border-[#D3EB9F]/30 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-[#0F4C82] bg-[#F8FBFC] text-[#0F4C82] font-garet text-sm sm:text-base transition-all"
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

        <!-- Back to Dashboard -->
        <div class="text-center">
            <a href="/dashboard" class="inline-flex items-center text-[#6B7280] hover:text-[#0F4C82] font-garet transition text-sm sm:text-base">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Dashboard
            </a>
        </div>
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