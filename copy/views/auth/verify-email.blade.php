@extends('layouts.guest')

@section('title', 'Verify Email')

@section('content')
<div class="mb-6 text-center">
    <div class="w-14 h-14 bg-[#5FA8D3]/10 rounded-xl flex items-center justify-center mx-auto mb-3">
        <svg class="w-7 h-7 text-[#5FA8D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
    </div>
    <h2 class="text-xl font-bold text-[#2C3539] font-heading">Verify Your Email</h2>
    <p class="text-[#6B7280] mt-1 text-sm font-body">We've sent a verification link to your email</p>
</div>

<div class="mb-5 p-3 bg-[#1B4965]/5 border border-[#1B4965]/10 rounded-lg">
    <div class="flex items-start">
        <svg class="w-4 h-4 text-[#1B4965] mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="text-xs text-[#6B7280] font-body">
            Please verify your email address by clicking on the link we just emailed to you.
        </p>
    </div>
</div>

@if (session('status') == 'verification-link-sent')
<div class="mb-5 p-3 bg-[#10B981]/10 border border-[#10B981]/20 text-[#10B981] rounded-lg">
    <div class="flex items-start">
        <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="text-xs font-body">
            A new verification link has been sent to your email address.
        </p>
    </div>
</div>
@endif

<div class="space-y-3">
    <!-- Resend Verification Email -->
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" 
                class="w-full px-4 py-2.5 bg-[#C1703F] text-white text-sm font-semibold rounded-lg hover:bg-[#A85D35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C1703F] transition duration-300 shadow-md hover:shadow-lg font-heading">
            <span class="flex items-center justify-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Resend Verification Email
            </span>
        </button>
    </form>

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" 
                class="w-full px-4 py-2.5 bg-[#F5F1E8] text-[#2C3539] text-sm font-semibold rounded-lg hover:bg-[#E5E1D8] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1B4965] transition duration-300 font-heading border border-[#E5E7EB]">
            <span class="flex items-center justify-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Log Out
            </span>
        </button>
    </form>
</div>

<!-- Help Text -->
<div class="mt-5 text-center">
    <p class="text-xs text-[#6B7280] font-body">
        Didn't receive the email? Check your spam folder or 
        <a href="mailto:boreyes2026@gmail.com" class="text-[#1B4965] font-semibold hover:text-[#153A52] transition">contact support</a>
    </p>
</div>
@endsection