@extends('layouts.guest')

@section('title', 'Register - BOREYES 2026')

@section('content')
<!-- Registration Hero Section with Wave -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden py-12 sm:py-16 lg:py-20 pb-0">
    <div class="absolute inset-0 opacity-15 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <div class="absolute top-6 right-6 sm:top-10 sm:right-10 w-8 h-8 sm:w-10 sm:h-10 opacity-60 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-12 left-12 sm:top-20 sm:left-20 w-6 h-6 sm:w-8 sm:h-8 opacity-50 animate-float-delayed" style="animation-delay: 0.5s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10 pb-12 sm:pb-16">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-helvetica font-black tracking-tighter text-white drop-shadow-lg mb-3 sm:mb-4" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5);">
            Register Team BOREYES 2026
        </h1>
        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white/95 font-garet max-w-3xl mx-auto leading-relaxed drop-shadow-md px-4" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
            Start your journey to the biggest competition in Oil & Gas and Sustainable Energy industry
        </p>
    </div>

    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Multi-Step Registration Form -->
<div class="bg-[#F8FBFC] py-8 sm:py-12 lg:py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('register') }}" x-data="registrationForm()" @submit="handleSubmit" class="space-y-6 sm:space-y-8">
            @csrf

            <!-- Modern Progress Stepper -->
            <div class="bg-white rounded-xl shadow-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30">
                <div class="flex items-center justify-between">
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center font-bold transition-all duration-300 mb-2"
                             :class="step >= 1 ? 'bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] text-white shadow-lg' : 'bg-gray-200 text-gray-400'">
                            <svg x-show="step > 1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span x-show="step <= 1">1</span>
                        </div>
                        <p class="text-xs font-helvetica font-bold" :class="step >= 1 ? 'text-[#0F4C82]' : 'text-gray-400'">Competition</p>
                    </div>

                    <div class="flex-1 h-1 mx-2 sm:mx-4 rounded-full transition-all" :class="step >= 2 ? 'bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]' : 'bg-gray-300'"></div>

                    <div class="flex flex-col items-center flex-1">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center font-bold transition-all duration-300 mb-2"
                             :class="step >= 2 ? 'bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] text-white shadow-lg' : 'bg-gray-200 text-gray-400'">
                            <svg x-show="step > 2" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span x-show="step <= 2">2</span>
                        </div>
                        <p class="text-xs font-helvetica font-bold" :class="step >= 2 ? 'text-[#0F4C82]' : 'text-gray-400'">Team Info</p>
                    </div>

                    <div class="flex-1 h-1 mx-2 sm:mx-4 rounded-full transition-all" :class="step >= 3 ? 'bg-gradient-to-r from-[#8CCDCF] to-[#D3EB9F]' : 'bg-gray-300'"></div>

                    <div class="flex flex-col items-center flex-1">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center font-bold transition-all duration-300 mb-2"
                             :class="step >= 3 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] shadow-lg' : 'bg-gray-200 text-gray-400'">
                            <span>3</span>
                        </div>
                        <p class="text-xs font-helvetica font-bold" :class="step >= 3 ? 'text-[#0F4C82]' : 'text-gray-400'">Review</p>
                    </div>
                </div>
            </div>

            <!-- Error Messages -->
            <div x-show="errors.length > 0" class="bg-red-50 border-2 border-red-200 rounded-xl p-4">
                <h3 class="text-red-800 font-helvetica font-bold mb-2">Please fix the following errors:</h3>
                <ul class="list-disc list-inside text-sm text-red-600 space-y-1">
                    <template x-for="error in errors" :key="error">
                        <li x-text="error"></li>
                    </template>
                </ul>
            </div>

            <!-- Step 1: Competition Selection -->
            <div x-show="step === 1" x-transition class="space-y-4">
                <div class="bg-white rounded-xl shadow-xl p-6 border-2 border-[#D3EB9F]/30">
                    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82] mb-6">Choose Your Competition</h2>

                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-3 font-helvetica">
                            Select Competition <span class="text-red-500">*</span>
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $competitions = \App\Models\Competition::all();
                            @endphp

                            @foreach($competitions as $competition)
                            <label class="relative cursor-pointer">
                                <input type="radio" name="competition_id" x-model="formData.competition_id" value="{{ $competition->id }}" 
                                       @change="onCompetitionChange({{ $competition->id }}, '{{ $competition->name }}')"
                                       class="peer sr-only">
                                <div class="bg-white border-2 border-gray-200 rounded-xl p-4 transition-all hover:border-[#6F97B6] peer-checked:border-[#D3EB9F] peer-checked:bg-[#D3EB9F]/10 peer-checked:ring-2 peer-checked:ring-[#D3EB9F]/40">
                                    <h3 class="text-lg font-helvetica font-black text-[#0F4C82] mb-2">{{ $competition->name }}</h3>
                                    <p class="text-sm text-gray-600 font-garet mb-3">{{ $competition->description }}</p>
                                    <div class="flex items-center gap-2 mb-3">
                                        <svg class="w-4 h-4 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        <span class="text-xs font-helvetica font-bold text-[#0F4C82]">
                                            @if(strtolower($competition->name) === 'plan of development' || str_contains(strtolower($competition->name), 'pod'))
                                                4 Members (including leader)
                                            @else
                                                3 Members (including leader)
                                            @endif
                                        </span>
                                    </div>
                                    @if($competition->guidebook)
                                    <a href="{{ $competition->guidebook }}" target="_blank" onclick="event.stopPropagation()"
                                       class="inline-block px-4 py-2 bg-[#0F4C82] text-white text-xs font-helvetica font-bold rounded-lg hover:bg-[#6F97B6] transition-all">
                                        Registration Booklet
                                    </a>
                                    @endif
                                </div>
                            </label>
                            @endforeach
                        </div>
                        @error('competition_id')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                   
                </div>

                <div class="flex justify-end">
                    <button type="button" @click="validateAndGoToStep2()" 
                            class="px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                        Next
                    </button>
                </div>
            </div>

            <!-- Step 2: Team Information -->
            <div x-show="step === 2" x-transition class="space-y-4">
                <div class="bg-white rounded-xl shadow-xl p-6 border-2 border-[#D3EB9F]/30">
                    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82] mb-2">Team Information</h2>
                    <div x-show="selectedCompetitionName" class="mb-6">
                        <div class="inline-flex items-center gap-2 bg-[#D3EB9F]/20 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm font-helvetica font-bold text-[#0F4C82]">Competition: <span x-text="selectedCompetitionName"></span></span>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="team_name" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Team Name <span class="text-red-500">*</span>
                            </label>
                            <input id="team_name" type="text" name="team_name" x-model="formData.team_name" value="{{ old('team_name') }}" 
                                   placeholder="Enter your team name"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_name') border-red-400 @enderror">
                            @error('team_name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="team_leader" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Team Leader <span class="text-red-500">*</span>
                            </label>
                            <input id="team_leader" type="text" name="team_leader" x-model="formData.team_leader" value="{{ old('team_leader') }}" 
                                   placeholder="Full name of team leader"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_leader') border-red-400 @enderror">
                            @error('team_leader')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="bg-gray-50 rounded-xl p-4 border-2 border-gray-200">
                            <h3 class="text-sm font-helvetica font-black text-[#0F4C82] mb-3">
                                Team Members (<span x-text="isPODCompetition ? '3 People' : '2 People'"></span>)
                            </h3>
                            
                            <div class="space-y-3">
                                <div>
                                    <label for="team_member_1" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                        Member 1 <span class="text-red-500">*</span>
                                    </label>
                                    <input id="team_member_1" type="text" name="team_member_1" x-model="formData.team_member_1" value="{{ old('team_member_1') }}" 
                                           placeholder="Full name of member 1"
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_member_1') border-red-400 @enderror">
                                    @error('team_member_1')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="team_member_2" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                        Member 2 <span class="text-red-500">*</span>
                                    </label>
                                    <input id="team_member_2" type="text" name="team_member_2" x-model="formData.team_member_2" value="{{ old('team_member_2') }}" 
                                           placeholder="Full name of member 2"
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_member_2') border-red-400 @enderror">
                                    @error('team_member_2')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Member 3 - Only for POD -->
                                <div x-show="isPODCompetition" x-transition>
                                    <label for="team_member_3" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                        Member 3 <span class="text-red-500">*</span>
                                    </label>
                                    <input id="team_member_3" type="text" name="team_member_3" x-model="formData.team_member_3" value="{{ old('team_member_3') }}" 
                                        placeholder="Full name of member 3"
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_member_3') border-red-400 @enderror">
                                    @error('team_member_3')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="university" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                University <span class="text-red-500">*</span>
                            </label>
                            <input id="university" type="text" name="university" x-model="formData.university" value="{{ old('university') }}" 
                                   placeholder="University name"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('university') border-red-400 @enderror">
                            @error('university')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="contact_number" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                    Contact Number <span class="text-red-500">*</span>
                                </label>
                                <input id="contact_number" type="text" name="contact_number" x-model="formData.contact_number" value="{{ old('contact_number') }}" 
                                       placeholder="08xxxxxxxxxx"
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('contact_number') border-red-400 @enderror">
                                @error('contact_number')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                    Team Email <span class="text-red-500">*</span>
                                </label>
                                <input id="email" type="email" name="email" x-model="formData.email" value="{{ old('email') }}" 
                                       placeholder="team@example.com"
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('email') border-red-400 @enderror">
                                @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div x-data="{ showPassword: false }">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Account Password <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input id="password" :type="showPassword ? 'text' : 'password'" name="password" x-model="formData.password"
                                       placeholder="Minimum 8 characters"
                                       class="w-full px-4 pr-12 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('password') border-red-400 @enderror">
                                <button type="button" @click="showPassword = !showPassword"
                                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#0F4C82]">
                                    <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg x-show="showPassword" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div x-data="{ showConfirmPassword: false }">
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Confirm Password <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input id="password_confirmation" :type="showConfirmPassword ? 'text' : 'password'" name="password_confirmation" x-model="formData.password_confirmation"
                                       placeholder="Repeat password"
                                       class="w-full px-4 pr-12 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all">
                                <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#0F4C82]">
                                    <svg x-show="!showConfirmPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg x-show="showConfirmPassword" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-4">
                            <p class="text-sm text-blue-700 font-garet mb-2"><strong>How to Upload:</strong></p>
                            <ol class="list-decimal list-inside text-xs text-blue-600 space-y-1">
                                <li>Upload file to Google Drive</li>
                                <li>Right click → Share → "Anyone with the link"</li>
                                <li>Copy link and paste in form</li>
                            </ol>
                        </div>

                        <div>
                            <label for="link_drive_payment" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Google Drive Link - Twibbon & Payment Proof <span class="text-red-500">*</span>
                            </label>
                            <input id="link_drive_payment" type="url" name="link_drive_payment" x-model="formData.link_drive_payment" value="{{ old('link_drive_payment') }}" 
                                   placeholder="https://drive.google.com/file/d/..."
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('link_drive_payment') border-red-400 @enderror">
                            @error('link_drive_payment')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <button type="button" @click="step = 1" 
                            class="px-8 py-4 bg-white border-2 border-gray-200 text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transition-all">
                        Back
                    </button>
                    <button type="button" @click="validateAndGoToStep3()" 
                            class="px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                        Review & Verify
                    </button>
                </div>
            </div>

            <!-- Step 3: Review & Submit -->
            <div x-show="step === 3" x-transition class="space-y-4">
                <div class="bg-white rounded-xl shadow-xl p-6 border-2 border-[#D3EB9F]/30">
                    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82] mb-6">Review & Email Verification</h2>

                    <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6 mb-6">
                        <h3 class="text-lg font-helvetica font-bold text-[#0F4C82] mb-3">📧 Email Verification Link</h3>
                        <p class="text-sm text-gray-700 mb-4">After clicking "Register Now", a verification link will be sent to:</p>
                        <div class="bg-white rounded-lg p-3 border border-blue-300 mb-4">
                            <p class="font-bold text-[#0F4C82]" x-text="formData.email || 'Email not entered'"></p>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>✓ Check inbox and spam folder</li>
                            <li>✓ Click "Verify Email" button in the email</li>
                            <li>✓ Login after verification is successful</li>
                        </ul>
                    </div>

                    <div class="mt-6 flex items-start">
                        <input id="terms" name="terms" type="checkbox" x-model="formData.terms" value="1" 
                               class="w-4 h-4 text-[#0F4C82] border-2 border-gray-300 rounded focus:ring-[#0F4C82] mt-1">
                        <label for="terms" class="ml-3 text-sm text-gray-600 font-garet">
                            I agree to the <a href="#" class="text-[#0F4C82] font-bold underline">Terms & Conditions</a> and 
                            <a href="#" class="text-[#0F4C82] font-bold underline">Privacy Policy</a> of BOREYES 2026
                        </label>
                    </div>
                    @error('terms')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <button type="button" @click="step = 2" 
                            class="px-8 py-4 bg-white border-2 border-gray-200 text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transition-all">
                        Back
                    </button>
                    <button type="submit" 
                            class="px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                        Register Now
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="bg-[#F8FBFC] pb-12">
    <div class="max-w-5xl mx-auto px-4 text-center">
        <p class="text-sm text-gray-600">
            Already have an account? 
            <a href="{{ route('login') }}" class="text-[#0F4C82] font-helvetica font-black hover:text-[#6F97B6] transition">
                Login here
            </a>
        </p>
    </div>
</div>

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

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
}

[x-cloak] {
    display: none !important;
}
</style>
@endpush
@push('scripts')
<script>
function registrationForm() {
    return {
        step: 1,
        errors: [],
        isPODCompetition: false,
        selectedCompetitionName: '',
        formData: {
            team_name: '{{ old('team_name') }}',
            team_leader: '{{ old('team_leader') }}',
            team_member_1: '{{ old('team_member_1') }}',
            team_member_2: '{{ old('team_member_2') }}',
            team_member_3: '{{ old('team_member_3') }}',
            university: '{{ old('university') }}',
            contact_number: '{{ old('contact_number') }}',
            email: '{{ old('email') }}',
            password: '',
            password_confirmation: '',
            competition_id: '{{ old('competition_id') }}',
            link_drive_payment: '{{ old('link_drive_payment') }}',
            terms: false
        },
        
        init() {
            // Check if there's old competition_id on page load (after validation error)
            if (this.formData.competition_id) {
                const selectedRadio = document.querySelector(`input[name="competition_id"][value="${this.formData.competition_id}"]`);
                if (selectedRadio) {
                    const competitionCard = selectedRadio.closest('label');
                    const competitionName = competitionCard.querySelector('h3').textContent;
                    this.onCompetitionChange(this.formData.competition_id, competitionName);
                }
            }
        },
        
        onCompetitionChange(competitionId, competitionName) {
            this.selectedCompetitionName = competitionName;
            
            const competitionNameLower = competitionName.toLowerCase();
            this.isPODCompetition = competitionNameLower.includes('plan of development') || 
                                   competitionNameLower.includes('pod');
            
            if (!this.isPODCompetition) {
                this.formData.team_member_3 = '';
            }
        },
        
        validateStep1() {
            this.errors = [];
            
            if (!this.formData.competition_id) {
                this.errors.push('Please select a competition');
            }
            
            return this.errors.length === 0;
        },
        
        validateStep2() {
            this.errors = [];
            
            if (!this.formData.team_name || this.formData.team_name.trim() === '') {
                this.errors.push('Team name is required');
            }
            if (!this.formData.team_leader || this.formData.team_leader.trim() === '') {
                this.errors.push('Team leader name is required');
            }
            if (!this.formData.team_member_1 || this.formData.team_member_1.trim() === '') {
                this.errors.push('Member 1 name is required');
            }
            if (!this.formData.team_member_2 || this.formData.team_member_2.trim() === '') {
                this.errors.push('Member 2 name is required');
            }
            
            if (this.isPODCompetition && (!this.formData.team_member_3 || this.formData.team_member_3.trim() === '')) {
                this.errors.push('Member 3 is required for Plan of Development competition');
            }
            
            if (!this.formData.university || this.formData.university.trim() === '') {
                this.errors.push('University name is required');
            }
            if (!this.formData.contact_number || this.formData.contact_number.trim() === '') {
                this.errors.push('Contact number is required');
            }
            if (!this.formData.email || this.formData.email.trim() === '') {
                this.errors.push('Email address is required');
            } else if (!this.isValidEmail(this.formData.email)) {
                this.errors.push('Please enter a valid email address');
            }
            if (!this.formData.password || this.formData.password.length < 8) {
                this.errors.push('Password must be at least 8 characters');
            }
            if (this.formData.password !== this.formData.password_confirmation) {
                this.errors.push('Password confirmation does not match');
            }
            if (!this.formData.link_drive_payment || this.formData.link_drive_payment.trim() === '') {
                this.errors.push('Payment proof link is required');
            } else if (!this.isValidUrl(this.formData.link_drive_payment)) {
                this.errors.push('Payment proof link must be a valid URL');
            }
            
            return this.errors.length === 0;
        },
        
        validateStep3() {
            this.errors = [];
            
            if (!this.formData.terms) {
                this.errors.push('You must accept the terms and conditions');
            }
            
            return this.errors.length === 0;
        },
        
        validateAndGoToStep2() {
            if (this.validateStep1()) {
                this.step = 2;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        
        validateAndGoToStep3() {
            if (this.validateStep2()) {
                this.step = 3;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        
        handleSubmit(e) {
            e.preventDefault();
            
            if (!this.validateStep1() || !this.validateStep2() || !this.validateStep3()) {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                return false;
            }
            
            // Manually set the value of team_member_3 field before submit
            const member3Input = document.getElementById('team_member_3');
            if (this.isPODCompetition && member3Input) {
                member3Input.value = this.formData.team_member_3;
            } else if (!this.isPODCompetition && member3Input) {
                member3Input.value = '';
            }
            
            // Now submit the form
            e.target.submit();
        },
        
        isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        },
        
        isValidUrl(url) {
            try {
                new URL(url);
                return true;
            } catch {
                return false;
            }
        }
    }
}
</script>
@endpush