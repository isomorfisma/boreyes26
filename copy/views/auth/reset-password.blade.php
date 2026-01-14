@extends('layouts.guest')

@section('title', 'Reset Password')

@section('content')
<div class="mb-6 text-center">
    <div class="w-12 h-12 bg-[#2D5F3F]/10 rounded-xl flex items-center justify-center mx-auto mb-3">
        <svg class="w-6 h-6 text-[#2D5F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
        </svg>
    </div>
    <h2 class="text-xl font-bold text-[#2C3539] font-heading">Reset Password</h2>
    <p class="text-[#6B7280] mt-1 text-sm font-body">Create a new password for your account</p>
</div>

<form method="POST" action="{{ route('password.store') }}" class="space-y-4">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <div>
        <label for="email" class="block text-xs font-semibold text-[#2C3539] mb-1.5 font-heading">
            Email Address
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <input id="email" 
                   type="email" 
                   name="email" 
                   value="{{ old('email', $request->email) }}" 
                   required 
                   autofocus
                   autocomplete="username"
                   placeholder="your.email@example.com"
                   class="w-full pl-10 pr-3 py-2.5 text-sm border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#1B4965] focus:border-transparent transition bg-white text-[#2C3539] font-body @error('email') border-[#EF4444] ring-1 ring-[#EF4444] @enderror">
        </div>
        @error('email')
        <p class="mt-1 text-xs text-[#EF4444] font-body">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div x-data="{ showPassword: false }">
        <label for="password" class="block text-xs font-semibold text-[#2C3539] mb-1.5 font-heading">
            New Password
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <input id="password" 
                   :type="showPassword ? 'text' : 'password'"
                   name="password" 
                   required
                   autocomplete="new-password"
                   placeholder="Min. 8 characters"
                   class="w-full pl-10 pr-10 py-2.5 text-sm border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#1B4965] focus:border-transparent transition bg-white text-[#2C3539] font-body @error('password') border-[#EF4444] ring-1 ring-[#EF4444] @enderror">
            <button type="button" 
                    @click="showPassword = !showPassword"
                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-[#6B7280] hover:text-[#2C3539] transition">
                <svg x-show="!showPassword" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <svg x-show="showPassword" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                </svg>
            </button>
        </div>
        @error('password')
        <p class="mt-1 text-xs text-[#EF4444] font-body">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div x-data="{ showConfirmPassword: false }">
        <label for="password_confirmation" class="block text-xs font-semibold text-[#2C3539] mb-1.5 font-heading">
            Confirm New Password
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <input id="password_confirmation" 
                   :type="showConfirmPassword ? 'text' : 'password'"
                   name="password_confirmation" 
                   required
                   autocomplete="new-password"
                   placeholder="Repeat new password"
                   class="w-full pl-10 pr-10 py-2.5 text-sm border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#1B4965] focus:border-transparent transition bg-white text-[#2C3539] font-body">
            <button type="button" 
                    @click="showConfirmPassword = !showConfirmPassword"
                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-[#6B7280] hover:text-[#2C3539] transition">
                <svg x-show="!showConfirmPassword" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <svg x-show="showConfirmPassword" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" 
            class="w-full px-4 py-2.5 bg-[#C1703F] text-white text-sm font-semibold rounded-lg hover:bg-[#A85D35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C1703F] transition duration-300 shadow-md hover:shadow-lg font-heading">
        <span class="flex items-center justify-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
            Reset Password
        </span>
    </button>
</form>

<!-- Back to Login -->
<div class="mt-5 text-center">
    <a href="{{ route('login') }}" class="inline-flex items-center text-xs text-[#6B7280] hover:text-[#1B4965] font-body transition">
        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to Sign In
    </a>
</div>
@endsection