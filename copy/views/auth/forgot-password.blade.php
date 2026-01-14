@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
<div class="mb-6 text-center">
    <div class="w-12 h-12 bg-[#1B4965]/10 rounded-xl flex items-center justify-center mx-auto mb-3">
        <svg class="w-6 h-6 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
        </svg>
    </div>
    <h2 class="text-xl font-bold text-[#2C3539] font-heading">Forgot Password?</h2>
    <p class="text-[#6B7280] mt-1 text-sm font-body">No worries, we'll send you reset instructions</p>
</div>

<div class="mb-5 p-3 bg-[#1B4965]/5 border border-[#1B4965]/10 rounded-lg">
    <p class="text-xs text-[#6B7280] font-body">
        Enter your email address and we will send you a password reset link.
    </p>
</div>

<!-- Session Status -->
@if (session('status'))
<div class="mb-4 p-3 bg-[#10B981]/10 border border-[#10B981]/20 text-[#10B981] rounded-lg text-xs font-body flex items-start">
    <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}" class="space-y-4">
    @csrf

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
                   value="{{ old('email') }}" 
                   required 
                   autofocus
                   placeholder="your.email@example.com"
                   class="w-full pl-10 pr-3 py-2.5 text-sm border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#1B4965] focus:border-transparent transition bg-white text-[#2C3539] font-body @error('email') border-[#EF4444] ring-1 ring-[#EF4444] @enderror">
        </div>
        @error('email')
        <p class="mt-1 text-xs text-[#EF4444] flex items-center font-body">
            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            {{ $message }}
        </p>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" 
            class="w-full px-4 py-2.5 bg-[#C1703F] text-white text-sm font-semibold rounded-lg hover:bg-[#A85D35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C1703F] transition duration-300 shadow-md hover:shadow-lg font-heading">
        <span class="flex items-center justify-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            Send Reset Link
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