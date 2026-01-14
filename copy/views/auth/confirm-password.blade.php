@extends('layouts.guest')

@section('title', 'Confirm Password')

@section('content')
<div class="mb-6 text-center">
    <div class="w-12 h-12 bg-[#C1703F]/10 rounded-xl flex items-center justify-center mx-auto mb-3">
        <svg class="w-6 h-6 text-[#C1703F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
        </svg>
    </div>
    <h2 class="text-xl font-bold text-[#2C3539] font-heading">Secure Area</h2>
    <p class="text-[#6B7280] mt-1 text-sm font-body">Please confirm your password to continue</p>
</div>

<div class="mb-5 p-3 bg-[#CAA882]/10 border border-[#CAA882]/20 rounded-lg">
    <div class="flex items-start">
        <svg class="w-4 h-4 text-[#CAA882] mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
        </svg>
        <p class="text-xs text-[#6B7280] font-body">
            This is a secure area. Please confirm your password before continuing.
        </p>
    </div>
</div>

<form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
    @csrf

    <!-- Password -->
    <div x-data="{ showPassword: false }">
        <label for="password" class="block text-xs font-semibold text-[#2C3539] mb-1.5 font-heading">
            Password
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
                   autocomplete="current-password"
                   placeholder="Enter your password"
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

    <!-- Submit Button -->
    <button type="submit" 
            class="w-full px-4 py-2.5 bg-[#C1703F] text-white text-sm font-semibold rounded-lg hover:bg-[#A85D35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C1703F] transition duration-300 shadow-md hover:shadow-lg font-heading">
        <span class="flex items-center justify-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Confirm
        </span>
    </button>
</form>
@endsection