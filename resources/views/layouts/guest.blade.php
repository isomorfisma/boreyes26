<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - BOREYES 2026</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        
        /* Custom Font Classes */
        .font-helvetica { font-family: 'Poppins', sans-serif; font-weight: 900; }
        .font-garet { font-family: 'Inter', sans-serif; }
        .font-marola { font-family: 'Poppins', sans-serif; font-weight: 600; }
        .font-heading { font-family: 'Poppins', sans-serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        /* Scroll padding for fixed nav */
        html {
            scroll-padding-top: 80px;
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-garet antialiased bg-gradient-to-br from-[#F8FBFC] via-white to-[#F8FBFC]">
    <div class="min-h-screen">
        <!-- Navigation (Same as app.blade.php) -->
        <nav x-data="{ open: false, scrolled: false, homeDropdown: false }" 
             @scroll.window="scrolled = window.pageYOffset > 20"
             :class="scrolled ? 'bg-white shadow-lg' : 'bg-white/95 backdrop-blur-md'"
             class="fixed w-full z-50 transition-all duration-300"
             style="height: 72px;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
                <div class="flex justify-between h-full">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="" class="flex items-center space-x-3">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/LOGO.svg') }}" alt="Boreyes Logo" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <div class="hidden sm:block">
                                <div class="text-lg sm:text-xl font-black text-[#0F4C82] font-helvetica tracking-tight leading-tight">BOREYES</div>
                                <div class="text-lg sm:text-xl font-black text-[#0F4C82] font-helvetica tracking-tight leading-tight">2026</div>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center space-x-1">
                        <a href="" 
                           class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30 text-[#0F4C82]' : '' }}">
                            Home
                        </a>

                        @if(Route::has('login') && !Auth::check())
                            <a href="{{ route('login') }}" class="px-4 py-2 text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 rounded-lg transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('login') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                                Login
                            </a>
                        @endif
                        
                        @if(Route::has('register') && !Auth::check() && !request()->routeIs('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30 text-[#0F4C82]' : '' }}">
                                Register
                            </a>
                        @endif
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex items-center lg:hidden">
                        <button @click="open = !open" class="p-2.5 rounded-lg text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 min-h-[44px] min-w-[44px] flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                                <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="lg:hidden bg-white border-t-2 border-[#D3EB9F]/30 shadow-2xl max-h-[calc(100vh-72px)] overflow-y-auto">
                <div class="px-4 pt-3 pb-4 space-y-1">
                    <a href="" @click="open = false" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica min-h-[44px] {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                        Home
                    </a>
                    
                    @if(Route::has('login') && !Auth::check())
                        <a href="{{ route('login') }}" @click="open = false" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->routeIs('login') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            Login
                        </a>
                    @endif
                    
                    @if(Route::has('register') && !Auth::check() && !request()->routeIs('register'))
                        <a href="{{ route('register') }}" @click="open = false" class="block px-4 py-3 rounded-xl bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-sm text-center font-black font-helvetica hover:shadow-lg transition">
                            Register
                        </a>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="relative pt-[72px]">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')
</body>
</html>