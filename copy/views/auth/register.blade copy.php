@extends('layouts.guest')

@section('title', 'Register - BOREYES 2026')

@section('content')
<!-- Registration Hero Section with Wave -->
<section class="relative bg-gradient-to-b from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white overflow-hidden py-12 sm:py-16 lg:py-20 pb-0">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-15 mix-blend-multiply" style="background-image: url('/path/to/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Sparkles -->
    <div class="absolute top-6 right-6 sm:top-10 sm:right-10 w-8 h-8 sm:w-10 sm:h-10 opacity-60 animate-float">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(211,235,159,0.8)]">
    </div>
    <div class="absolute top-12 left-12 sm:top-20 sm:left-20 w-6 h-6 sm:w-8 sm:h-8 opacity-50 animate-float-delayed" style="animation-delay: 0.5s;">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_8px_rgba(111,151,182,0.8)]">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10 pb-12 sm:pb-16">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-helvetica font-black tracking-tighter text-white drop-shadow-lg mb-3 sm:mb-4" style="text-shadow: 2px 2px 4px rgba(15,76,130,0.5);">
            Daftar Tim BOREYES 2026
        </h1>
        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white/95 font-garet max-w-3xl mx-auto leading-relaxed drop-shadow-md px-4" style="text-shadow: 1px 1px 3px rgba(15,76,130,0.4);">
            Mulai perjalananmu menuju kompetisi terbesar dalam industri Oil & Gas dan Energi Berkelanjutan
        </p>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 -mb-1">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" preserveAspectRatio="none">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Multi-Step Registration Form -->
<div class="bg-[#F8FBFC] py-8 sm:py-12 lg:py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('register') }}" x-data="registrationForm()" @submit="return validateStep()" class="space-y-6 sm:space-y-8">
            @csrf

            <!-- Modern Progress Stepper -->
            <div class="bg-white rounded-xl shadow-xl p-4 sm:p-6 border-2 border-[#D3EB9F]/30">
                <div class="flex items-center justify-between">
                    <!-- Step 1 -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center font-bold transition-all duration-300 mb-2"
                             :class="step >= 1 ? 'bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] text-white shadow-lg' : 'bg-gray-200 text-gray-400'">
                            <svg x-show="step > 1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span x-show="step <= 1">1</span>
                        </div>
                        <p class="text-xs font-helvetica font-bold" :class="step >= 1 ? 'text-[#0F4C82]' : 'text-gray-400'">Info Tim</p>
                    </div>

                    <div class="flex-1 h-1 mx-2 sm:mx-4 rounded-full transition-all" :class="step >= 2 ? 'bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]' : 'bg-gray-300'"></div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center font-bold transition-all duration-300 mb-2"
                             :class="step >= 2 ? 'bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] text-white shadow-lg' : 'bg-gray-200 text-gray-400'">
                            <svg x-show="step > 2" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span x-show="step <= 2">2</span>
                        </div>
                        <p class="text-xs font-helvetica font-bold" :class="step >= 2 ? 'text-[#0F4C82]' : 'text-gray-400'">Kompetisi</p>
                    </div>

                    <div class="flex-1 h-1 mx-2 sm:mx-4 rounded-full transition-all" :class="step >= 3 ? 'bg-gradient-to-r from-[#8CCDCF] to-[#D3EB9F]' : 'bg-gray-300'"></div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center font-bold transition-all duration-300 mb-2"
                             :class="step >= 3 ? 'bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] shadow-lg' : 'bg-gray-200 text-gray-400'">
                            <span>3</span>
                        </div>
                        <p class="text-xs font-helvetica font-bold" :class="step >= 3 ? 'text-[#0F4C82]' : 'text-gray-400'">Review</p>
                    </div>
                </div>
            </div>

            <!-- Step 1: Team Information -->
            <div x-show="step === 1" x-transition class="space-y-4">
                <div class="bg-white rounded-xl shadow-xl p-6 border-2 border-[#D3EB9F]/30">
                    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82] mb-6">Informasi Tim</h2>

                    <div class="space-y-4">
                        <!-- Team Name -->
                        <div>
                            <label for="team_name" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Nama Tim <span class="text-red-500">*</span>
                            </label>
                            <input id="team_name" type="text" name="team_name" x-model="formData.team_name" value="{{ old('team_name') }}" 
                                   placeholder="Masukkan nama tim"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_name') border-red-400 @enderror">
                            @error('team_name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Team Leader -->
                        <div>
                            <label for="team_leader" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Ketua Tim <span class="text-red-500">*</span>
                            </label>
                            <input id="team_leader" type="text" name="team_leader" x-model="formData.team_leader" value="{{ old('team_leader') }}" 
                                   placeholder="Nama lengkap ketua tim"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('team_leader') border-red-400 @enderror">
                            @error('team_leader')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Team Members -->
                        <div class="bg-gray-50 rounded-xl p-4 border-2 border-gray-200">
                            <h3 class="text-sm font-helvetica font-black text-[#0F4C82] mb-3">Anggota Tim (2 Orang)</h3>
                            
                            <div class="space-y-3">
                                <div>
                                    <label for="member_1" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                        Anggota 1 <span class="text-red-500">*</span>
                                    </label>
                                    <input id="member_1" type="text" name="member_1" x-model="formData.member_1" value="{{ old('member_1') }}" 
                                           placeholder="Nama lengkap anggota 1"
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('member_1') border-red-400 @enderror">
                                    @error('member_1')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="member_2" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                        Anggota 2 <span class="text-red-500">*</span>
                                    </label>
                                    <input id="member_2" type="text" name="member_2" x-model="formData.member_2" value="{{ old('member_2') }}" 
                                           placeholder="Nama lengkap anggota 2"
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('member_2') border-red-400 @enderror">
                                    @error('member_2')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- University -->
                        <div>
                            <label for="university" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Universitas <span class="text-red-500">*</span>
                            </label>
                            <input id="university" type="text" name="university" x-model="formData.university" value="{{ old('university') }}" 
                                   placeholder="Nama universitas"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('university') border-red-400 @enderror">
                            @error('university')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Contact Info -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="contact_number" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                    Nomor Kontak <span class="text-red-500">*</span>
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
                                    Email Tim <span class="text-red-500">*</span>
                                </label>
                                <input id="email" type="email" name="email" x-model="formData.email" value="{{ old('email') }}" 
                                       placeholder="team@example.com"
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('email') border-red-400 @enderror">
                                @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div x-data="{ showPassword: false }">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Password Akun <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input id="password" :type="showPassword ? 'text' : 'password'" name="password" x-model="formData.password"
                                       placeholder="Minimal 8 karakter"
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

                        <!-- Password Confirmation -->
                        <div x-data="{ showConfirmPassword: false }">
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Konfirmasi Password <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input id="password_confirmation" :type="showConfirmPassword ? 'text' : 'password'" name="password_confirmation" x-model="formData.password_confirmation"
                                       placeholder="Ulangi password"
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
                    </div>
                </div>

                <!-- Navigation -->
                <div class="flex justify-end">
                    <button type="button" @click="goToStep2()" 
                            class="px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                        Lanjut ke Kompetisi →
                    </button>
                </div>
            </div>

            <!-- Step 2: Competition Selection -->
            <div x-show="step === 2" x-transition class="space-y-4">
                <div class="bg-white rounded-xl shadow-xl p-6 border-2 border-[#D3EB9F]/30">
                    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82] mb-6">Pilih Kompetisi & Upload Berkas</h2>

                    <!-- Competition Selection -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-3 font-helvetica">
                            Pilih Kompetisi <span class="text-red-500">*</span>
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $competitions = \App\Models\Competition::where('status', 'open')->get();
                            @endphp

                            @foreach($competitions as $competition)
                            <label class="relative cursor-pointer">
                                <input type="radio" name="competition_id" value="{{ $competition->id }}" class="peer sr-only">
                                <div class="bg-white border-2 border-gray-200 rounded-xl p-4 transition-all hover:border-[#6F97B6] peer-checked:border-[#D3EB9F] peer-checked:bg-[#D3EB9F]/10 peer-checked:ring-2 peer-checked:ring-[#D3EB9F]/40">
                                    <h3 class="text-lg font-helvetica font-black text-[#0F4C82] mb-2">{{ $competition->name }}</h3>
                                    <p class="text-sm text-gray-600 font-garet mb-3">{{ $competition->description }}</p>
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

                    <!-- Google Drive Links -->
                    <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-4 mb-6">
                        <p class="text-sm text-blue-700 font-garet mb-2"><strong>Cara Upload:</strong></p>
                        <ol class="list-decimal list-inside text-xs text-blue-600 space-y-1">
                            <li>Upload file ke Google Drive</li>
                            <li>Klik kanan → Bagikan → "Siapa saja yang memiliki link"</li>
                            <li>Salin link dan paste di form</li>
                        </ol>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="twibbon_link" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Link Google Drive - Twibbon <span class="text-red-500">*</span>
                            </label>
                            <input id="twibbon_link" type="url" name="twibbon_link" value="{{ old('twibbon_link') }}" 
                                   placeholder="https://drive.google.com/file/d/..."
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('twibbon_link') border-red-400 @enderror">
                            @error('twibbon_link')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="payment_proof_link" class="block text-sm font-semibold text-gray-700 mb-2 font-helvetica">
                                Link Google Drive - Bukti Pembayaran <span class="text-red-500">*</span>
                            </label>
                            <input id="payment_proof_link" type="url" name="payment_proof_link" value="{{ old('payment_proof_link') }}" 
                                   placeholder="https://drive.google.com/file/d/..."
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all @error('payment_proof_link') border-red-400 @enderror">
                            @error('payment_proof_link')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="mt-6 flex items-start">
                        <input id="terms" name="terms" type="checkbox" value="1" 
                               class="w-4 h-4 text-[#0F4C82] border-2 border-gray-300 rounded focus:ring-[#0F4C82] mt-1">
                        <label for="terms" class="ml-3 text-sm text-gray-600 font-garet">
                            Saya menyetujui <a href="#" class="text-[#0F4C82] font-bold underline">Syarat & Ketentuan</a> dan 
                            <a href="#" class="text-[#0F4C82] font-bold underline">Kebijakan Privasi</a> BOREYES 2026
                        </label>
                    </div>
                    @error('terms')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Navigation -->
                <div class="flex justify-between">
                    <button type="button" @click="step = 1" 
                            class="px-8 py-4 bg-white border-2 border-gray-200 text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transition-all">
                        ← Kembali
                    </button>
                    <button type="button" @click="goToStep3()" 
                            class="px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                        Review & Verifikasi →
                    </button>
                </div>
            </div>

            <!-- Step 3: Review & Submit -->
            <div x-show="step === 3" x-transition class="space-y-4">
                <div class="bg-white rounded-xl shadow-xl p-6 border-2 border-[#D3EB9F]/30">
                    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82] mb-6">Review & Verifikasi Email</h2>

                    <!-- Email Verification Info -->
                    <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6 mb-6">
                        <h3 class="text-lg font-helvetica font-bold text-[#0F4C82] mb-3">📧 Link Verifikasi Email</h3>
                        <p class="text-sm text-gray-700 mb-4">Setelah klik "Daftar Sekarang", link verifikasi akan dikirim ke:</p>
                        <div class="bg-white rounded-lg p-3 border border-blue-300 mb-4">
                            <p class="font-bold text-[#0F4C82]" x-text="formData.email || 'Email belum diisi'"></p>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>✓ Cek inbox dan folder spam</li>
                            <li>✓ Klik tombol "Verifikasi Email" dalam email</li>
                            <li>✓ Login setelah verifikasi berhasil</li>
                        </ul>
                    </div>

                    <!-- Review Data -->
                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200">
                        <h3 class="text-lg font-helvetica font-bold text-[#0F4C82] mb-4">Review Data Pendaftaran</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between py-2 border-b">
                                <span class="text-gray-600">Nama Tim:</span>
                                <span class="font-bold text-[#0F4C82]" x-text="formData.team_name || '-'"></span>
                            </div>
                            <div class="flex justify-between py-2 border-b">
                                <span class="text-gray-600">Ketua:</span>
                                <span class="font-bold text-[#0F4C82]" x-text="formData.team_leader || '-'"></span>
                            </div>
                            <div class="flex justify-between py-2 border-b">
                                <span class="text-gray-600">Universitas:</span>
                                <span class="font-bold text-[#0F4C82]" x-text="formData.university || '-'"></span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-gray-600">Email:</span>
                                <span class="font-bold text-[#0F4C82]" x-text="formData.email || '-'"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="flex justify-between">
                    <button type="button" @click="step = 2" 
                            class="px-8 py-4 bg-white border-2 border-gray-200 text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transition-all">
                        ← Kembali
                    </button>
                    <button type="submit" 
                            class="px-8 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                        ✓ Daftar Sekarang
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Login Link -->
<div class="bg-[#F8FBFC] pb-12">
    <div class="max-w-5xl mx-auto px-4 text-center">
        <p class="text-sm text-gray-600">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-[#0F4C82] font-helvetica font-black hover:text-[#6F97B6] transition">
                Login di sini
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
        formData: {
            team_name: '',
            team_leader: '',
            member_1: '',
            member_2: '',
            university: '',
            contact_number: '',
            email: '',
            password: '',
            password_confirmation: ''
        },
        
        goToStep2() {
            // Validate Step 1
            let isValid = true;
            let firstError = null;
            
            // Check team_name
            if (!this.formData.team_name.trim()) {
                isValid = false;
                firstError = firstError || 'team_name';
            }
            
            // Check team_leader
            if (!this.formData.team_leader.trim()) {
                isValid = false;
                firstError = firstError || 'team_leader';
            }
            
            // Check members
            if (!this.formData.member_1.trim()) {
                isValid = false;
                firstError = firstError || 'member_1';
            }
            
            if (!this.formData.member_2.trim()) {
                isValid = false;
                firstError = firstError || 'member_2';
            }
            
            // Check university
            if (!this.formData.university.trim()) {
                isValid = false;
                firstError = firstError || 'university';
            }
            
            // Check contact_number
            if (!this.formData.contact_number.trim()) {
                isValid = false;
                firstError = firstError || 'contact_number';
            }
            
            // Check email
            if (!this.formData.email.trim()) {
                isValid = false;
                firstError = firstError || 'email';
            } else if (!this.formData.email.includes('@')) {
                isValid = false;
                alert('Format email tidak valid');
                document.getElementById('email').focus();
                return;
            }
            
            // Check password
            if (!this.formData.password || this.formData.password.length < 8) {
                isValid = false;
                if (!firstError) {
                    alert('Password minimal 8 karakter');
                    document.getElementById('password').focus();
                    return;
                }
            }
            
            // Check password confirmation
            if (this.formData.password !== this.formData.password_confirmation) {
                isValid = false;
                alert('Password dan konfirmasi password tidak cocok');
                document.getElementById('password_confirmation').focus();
                return;
            }
            
            if (!isValid && firstError) {
                alert('Mohon lengkapi semua field yang wajib diisi (*)');
                document.getElementById(firstError).focus();
                return;
            }
            
            if (isValid) {
                this.step = 2;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        
        goToStep3() {
            // Validate Step 2
            const competitionSelected = document.querySelector('input[name="competition_id"]:checked');
            const twibbonLink = document.getElementById('twibbon_link');
            const paymentLink = document.getElementById('payment_proof_link');
            const terms = document.getElementById('terms');
            
            let isValid = true;
            
            if (!competitionSelected) {
                isValid = false;
                alert('Mohon pilih kompetisi');
            }
            
            if (!twibbonLink || !twibbonLink.value.trim()) {
                isValid = false;
                if (twibbonLink) twibbonLink.classList.add('border-red-400');
                alert('Mohon isi link Google Drive untuk Twibbon');
            } else {
                twibbonLink.classList.remove('border-red-400');
            }
            
            if (!paymentLink || !paymentLink.value.trim()) {
                isValid = false;
                if (paymentLink) paymentLink.classList.add('border-red-400');
                alert('Mohon isi link Google Drive untuk Bukti Pembayaran');
            } else {
                paymentLink.classList.remove('border-red-400');
            }
            
            if (!terms || !terms.checked) {
                isValid = false;
                alert('Mohon setujui Syarat & Ketentuan');
            }
            
            if (isValid) {
                this.step = 3;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }
    }
}
</script>
@endpush