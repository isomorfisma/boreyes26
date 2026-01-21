@extends('layouts.guest')

@section('title', __('Login'))

@section('content')
<div class="min-h-[calc(100vh-144px)] flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
        <!-- Card Container -->
        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-[#D3EB9F]/30 relative overflow-hidden">
            <!-- Decorative Background -->
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, #0F4C82 1px, transparent 0); background-size: 30px 30px;"></div>
            
            <div class="relative z-10">
                <!-- Header -->
                <div class="mb-8 text-center">
                    <h2 class="text-2xl sm:text-3xl font-helvetica font-black tracking-tighter text-[#0F4C82] mb-2">Welcome Back!</h2>
                    <p class="text-[#6B7280] mt-2 text-sm sm:text-base font-garet">Sign in to continue to BOREYES 2026</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                <div class="mb-6 p-4 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 border-2 border-[#D3EB9F] text-[#0F4C82] rounded-xl text-sm font-garet flex items-center shadow-lg">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input id="email" 
                                   type="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   required 
                                   autofocus
                                   placeholder="your.email@example.com"
                                   class="w-full pl-12 pr-4 py-3.5 text-sm border-2 border-[#E5E7EB] rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all duration-300 bg-white text-[#0F4C82] font-garet hover:border-[#D3EB9F] @error('email') border-red-400 ring-2 ring-red-400 @enderror">
                        </div>
                        @error('email')
                        <p class="mt-2 text-xs text-red-600 flex items-center font-garet">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div x-data="{ showPassword: false }">
                        <label for="password" class="block text-sm font-helvetica font-black text-[#0F4C82] mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input id="password" 
                                   :type="showPassword ? 'text' : 'password'"
                                   name="password" 
                                   required
                                   placeholder="Enter your password"
                                   class="w-full pl-12 pr-12 py-3.5 text-sm border-2 border-[#E5E7EB] rounded-xl focus:ring-2 focus:ring-[#0F4C82] focus:border-transparent transition-all duration-300 bg-white text-[#0F4C82] font-garet hover:border-[#D3EB9F] @error('password') border-red-400 ring-2 ring-red-400 @enderror">
                            <button type="button" 
                                    @click="showPassword = !showPassword"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#6B7280] hover:text-[#0F4C82] transition-colors">
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
                        <p class="mt-2 text-xs text-red-600 flex items-center font-garet">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" 
                                   name="remember" 
                                   type="checkbox" 
                                   class="w-4 h-4 text-[#0F4C82] border-2 border-[#E5E7EB] rounded focus:ring-[#0F4C82] transition-all duration-300">
                            <label for="remember_me" class="ml-2 text-sm text-[#6B7280] font-garet">
                                Remember me
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-[#0F4C82] hover:text-[#6F97B6] font-helvetica font-black transition-colors">
                            Forgot password?
                        </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full px-6 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-base font-helvetica font-black rounded-xl hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-[#D3EB9F]/50 transition-all duration-300 shadow-lg transform hover:scale-105">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            Sign In
                        </span>
                    </button>
                </form>

                <!-- Register Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-[#6B7280] font-garet">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-[#0F4C82] font-helvetica font-black hover:text-[#6F97B6] transition-colors">
                            Register now
                        </a>
                    </p>
                </div>

                <!-- Additional Info -->
                <div class="mt-6 p-4 bg-gradient-to-r from-[#C5E6C9]/10 to-[#D3EB9F]/10 rounded-xl border border-[#D3EB9F]/30">
                    <p class="text-xs text-center text-[#6B7280] font-garet leading-relaxed">
                        By signing in, you agree to BOREYES 2026 
                        <a href="#" class="text-[#0F4C82] font-helvetica font-black hover:underline">Terms of Service</a> 
                        and 
                        <a href="#" class="text-[#0F4C82] font-helvetica font-black hover:underline">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
