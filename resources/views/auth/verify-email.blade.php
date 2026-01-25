@extends('layouts.guest')

@section('title', 'Verify Email - BOREYES 2026')

@section('content')

<!-- Verification Content -->
<div class="bg-[#F8FBFC] min-h-screen py-8 sm:py-12 lg:py-16">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Success Message -->
        @if (session('status') === 'verification-link-sent')
            <div class="success-message mb-6 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] border-2 border-[#D3EB9F] rounded-xl p-6 shadow-xl">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-helvetica font-black text-[#0F4C82] mb-1">Email Sent!</h3>
                        <p class="text-sm font-garet text-[#0F4C82]/80">A new verification link has been sent to your email address.</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Main Card -->
        <div class="verify-card bg-white rounded-xl shadow-xl p-6 sm:p-8 border-2 border-[#D3EB9F]/30">
            
            <!-- Email Icon -->
            <div class="email-animation text-center mb-6">
                <div class="inline-block relative w-32 h-32">
                    <div class="email-envelope absolute inset-0 m-auto w-24 h-24 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-2xl flex items-center justify-center shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
                        </svg>
                    </div>
                    <!-- Pulse Ring -->
                    <div class="pulse-ring absolute inset-0 m-auto w-24 h-24 rounded-2xl border-4 border-[#6F97B6] pointer-events-none"></div>
                </div>
            </div>

            <h2 class="text-2xl sm:text-3xl font-helvetica font-black text-[#0F4C82] mb-4 text-center">
                Check Your Inbox
            </h2>

            <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6 mb-6">
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="text-sm font-garet text-gray-700 leading-relaxed mb-3">
                            Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just emailed to you.
                        </p>
                        <p class="text-sm font-garet text-gray-700">
                            If you didn't receive the email, we can send another one.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Instructions -->
            <div class="bg-gradient-to-r from-[#D3EB9F]/10 to-[#C5E6C9]/10 rounded-xl p-6 mb-6 border-2 border-[#D3EB9F]/30">
                <h3 class="text-lg font-helvetica font-bold text-[#0F4C82] mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    Verification Steps:
                </h3>
                <ol class="space-y-3">
                    <li class="verify-step flex items-start gap-3 text-sm font-garet text-gray-700">
                        <span class="flex-shrink-0 w-6 h-6 bg-[#6F97B6] text-white rounded-full flex items-center justify-center text-xs font-bold">1</span>
                        <span>Check your email inbox (and spam/junk folder)</span>
                    </li>
                    <li class="verify-step flex items-start gap-3 text-sm font-garet text-gray-700">
                        <span class="flex-shrink-0 w-6 h-6 bg-[#8CCDCF] text-white rounded-full flex items-center justify-center text-xs font-bold">2</span>
                        <span>Open the email from BOREYES 2026</span>
                    </li>
                    <li class="verify-step flex items-start gap-3 text-sm font-garet text-gray-700">
                        <span class="flex-shrink-0 w-6 h-6 bg-[#D3EB9F] text-[#0F4C82] rounded-full flex items-center justify-center text-xs font-bold">3</span>
                        <span>Click the "Verify Email Address" button</span>
                    </li>
                    <li class="verify-step flex items-start gap-3 text-sm font-garet text-gray-700">
                        <span class="flex-shrink-0 w-6 h-6 bg-[#C5E6C9] text-[#0F4C82] rounded-full flex items-center justify-center text-xs font-bold">4</span>
                        <span>You'll be redirected to login - Start competing!</span>
                    </li>
                </ol>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 items-stretch sm:items-center justify-between mt-8">
                <!-- Resend Button -->
                <form method="POST" action="{{ route('verification.send') }}" class="flex-1">
                    @csrf
                    <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        <span>Resend Email</span>
                    </button>
                </form>

                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="flex-1">
                    @csrf
                    <button type="submit" class="w-full px-6 py-3 bg-white border-2 border-gray-200 text-gray-600 font-helvetica font-black rounded-xl shadow-lg hover:shadow-xl hover:border-[#6F97B6] hover:text-[#0F4C82] transform hover:scale-105 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Log Out</span>
                    </button>
                </form>
            </div>

            <!-- Help Text -->
            <div class="mt-6 pt-6 border-t-2 border-gray-100">
                <p class="text-center text-sm text-gray-500 font-garet">
                    Need help? Contact us at 
                    <a href="mailto:support@boreyes2026.com" class="text-[#0F4C82] font-bold hover:text-[#6F97B6] transition">
                        support@boreyes2026.com
                    </a>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection

@push('styles')
<style>
@keyframes pulse-ring {
    0% {
        transform: scale(1);
        opacity: 0.75;
    }
    50% {
        transform: scale(1.15);
        opacity: 0.4;
    }
    100% {
        transform: scale(1);
        opacity: 0.75;
    }
}

.pulse-ring {
    animation: pulse-ring 2s ease-in-out infinite;
}
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // GSAP Timeline for entrance animations
    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    
    // Animate card
    tl.from('.verify-card', {
        duration: 0.8,
        y: 50,
        opacity: 0,
        scale: 0.95
    });
    
    // Animate email envelope
    tl.from('.email-envelope', {
        duration: 0.8,
        scale: 0,
        rotation: -180,
        ease: 'back.out(1.7)'
    }, '-=0.4');
    
    // Animate heading
    tl.from('.verify-card h2', {
        duration: 0.6,
        y: 20,
        opacity: 0
    }, '-=0.3');
    
    // Stagger animation for list items
    tl.from('.verify-step', {
        duration: 0.5,
        x: -30,
        opacity: 0,
        stagger: 0.1
    }, '-=0.2');
    
    // Success message animation (if exists)
    if (document.querySelector('.success-message')) {
        gsap.from('.success-message', {
            duration: 0.8,
            scale: 0.8,
            opacity: 0,
            y: -20,
            ease: 'back.out(1.7)',
            delay: 0.2
        });
    }
    
    // Continuous floating animation for email icon
    gsap.to('.email-envelope', {
        y: -10,
        duration: 2,
        ease: 'power1.inOut',
        yoyo: true,
        repeat: -1
    });
});
</script>
@endpush