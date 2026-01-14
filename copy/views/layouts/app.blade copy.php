<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boreyes 2026') }} - @yield('title', 'SPE Unpad SC')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        
        /* Custom Font Classes - Updated untuk match home.blade */
        .font-helvetica { font-family: 'Poppins', sans-serif; font-weight: 900; }
        .font-garet { font-family: 'Inter', sans-serif; }
        .font-marola { font-family: 'Poppins', sans-serif; font-weight: 600; }
        
        /* Custom Colors - Updated Color Palette */
        .bg-primary { background-color: #0F4C82; }
        .bg-primary-dark { background-color: #0A3659; }
        .bg-secondary { background-color: #D3EB9F; }
        .bg-accent { background-color: #6F97B6; }
        .text-primary { color: #0F4C82; }
        .text-secondary { color: #D3EB9F; }
        
        /* Line Clamp */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Scroll padding for fixed nav */
        html {
            scroll-padding-top: 80px;
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-garet antialiased bg-[#F8FBFC]">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav x-data="{ open: false, scrolled: false, homeDropdown: false }" 
             @scroll.window="scrolled = window.pageYOffset > 20"
             :class="scrolled ? 'bg-white shadow-lg' : 'bg-white/95 backdrop-blur-md'"
             class="fixed w-full z-50 transition-all duration-300"
             style="height: 72px;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
                <div class="flex justify-between h-full">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center space-x-3">
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
                        <!-- Home with Dropdown -->
                        <div class="relative" @mouseenter="homeDropdown = true" @mouseleave="homeDropdown = false">
                            <a href="{{ route('home') }}" 
                               class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30 text-[#0F4C82]' : '' }}">
                                Home
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="homeDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Home Dropdown Menu -->
                            <div x-show="homeDropdown"
                                 x-cloak
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                                 x-transition:enter-end="opacity-100 transform translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 transform translate-y-0"
                                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                                 class="absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-2xl border-2 border-[#D3EB9F]/30 overflow-hidden">
                                
                                <!-- Dropdown Header -->
                                <div class="px-4 py-3 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]">
                                    <p class="text-xs font-black text-white font-helvetica">Explore Home</p>
                                    <p class="text-xs text-white/80 font-garet">Jump to sections</p>
                                </div>
                                
                                <div class="py-2">
                                    <a href="{{ route('home') }}#about" 
                                       class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                    
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">What is BOREYES?</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('home') }}#grand-theme" 
                                       class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Grand Theme 2026</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('home') }}#logo-mascot" 
                                       class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Logo & Mascot</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('home') }}#team-profile" 
                                       class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Team Profile</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('home') }}#timeline" 
                                       class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Timeline</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                       <!-- Competitions with Dropdown (NOT CLICKABLE) -->
                        <div class="relative" @mouseenter="competitionsDropdown = true" @mouseleave="competitionsDropdown = false" x-data="{ competitionsDropdown: false }">
                            <button class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('competitions.*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                                Competitions
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="competitionsDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                                                    
                            <!-- Competitions Dropdown Menu -->
                            <div x-show="competitionsDropdown"
                                x-cloak
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="absolute left-0 mt-0 w-72 bg-white rounded-2xl shadow-2xl border-2 border-[#D3EB9F]/30 overflow-hidden">
                                
                                <!-- Dropdown Header -->
                                <div class="px-4 py-3 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]">
                                    <p class="text-xs font-black text-white font-helvetica">Competitions</p>
                                </div>
                                
                                <div class="py-2">
                                    <a href="{{ route('competitions.show', 'smart-competition') }}" 
                                    class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Smart Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('competitions.show', 'paper-poster-competition') }}" 
                                    class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Paper & Poster Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('competitions.show', 'business-case-competition') }}" 
                                    class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Business Case Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('competitions.show', 'case-study-competition') }}" 
                                    class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Case Study Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('competitions.show', 'plan-of-development') }}" 
                                    class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Plan of Development</p>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                            </div>
                        </div>

                        <!-- Event Program with Dropdown -->
                        <div class="relative" @mouseenter="eventDropdown = true" @mouseleave="eventDropdown = false" x-data="{ eventDropdown: false }">
                            <a href="{{ route('event-programs') }}" 
                            class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('event-programs') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                                Event Programs
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="eventDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Event Programs Dropdown Menu -->
                            <div x-show="eventDropdown"
                                x-cloak
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-2xl border-2 border-[#D3EB9F]/30 overflow-hidden">
                                
                                <!-- Dropdown Header -->
                                <div class="px-4 py-3 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]">
                                    <p class="text-xs font-black text-white font-helvetica">Event Programs</p>
                                    <p class="text-xs text-white/80 font-garet">Join our events</p>
                                </div>
                                
                                <div class="py-2">
                                    <a href="{{ route('event-programs') }}#company-talks" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <span class="text-sm font-bold font-helvetica">Company Talks</span>
                                    </a>
                                    
                                    <a href="{{ route('event-programs') }}#csr" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                      
                                        <span class="text-sm font-bold font-helvetica">CSR</span>
                                    </a>
                                    
                                    <a href="{{ route('event-programs') }}#field-trip" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <span class="text-sm font-bold font-helvetica">Field Trip</span>
                                    </a>
                                    
                                    <a href="{{ route('event-programs') }}#final-competition" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <span class="text-sm font-bold font-helvetica">Final Competition</span>
                                    </a>
                                    
                                    <a href="{{ route('event-programs') }}#ignite-talks" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <span class="text-sm font-bold font-helvetica">Ignite Talks</span>
                                    </a>
                                    
                                    <a href="{{ route('event-programs') }}#funday" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                        
                                        <span class="text-sm font-bold font-helvetica">Funday</span>
                                    </a>
                                    
                                    <a href="{{ route('event-programs') }}#banquet" 
                                    class="flex items-center px-4 py-2.5 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       
                                        <span class="text-sm font-bold font-helvetica">Banquet</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('faq') }}" class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->routeIs('faq') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            FAQ
                        </a>

                        @auth
                            <div x-data="{ dropdownOpen: false }" class="relative ml-3">
                                <button @click="dropdownOpen = !dropdownOpen" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition min-h-[44px]">
                                    <div class="w-8 h-8 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center shadow-md">
                                        <span class="text-white text-xs font-black font-helvetica">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                    </div>
                                    <span class="text-sm text-[#0F4C82] font-semibold font-garet">{{ auth()->user()->name }}</span>
                                    <svg class="w-4 h-4 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div x-show="dropdownOpen" 
                                     @click.away="dropdownOpen = false"
                                     x-cloak
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 transform scale-95"
                                     x-transition:enter-end="opacity-100 transform scale-100"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100 transform scale-100"
                                     x-transition:leave-end="opacity-0 transform scale-95"
                                     class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl py-2 border-2 border-[#D3EB9F]/30">
                                    @if(auth()->user()->isAdmin())
                                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                                <span class="text-sm font-bold font-helvetica">Admin Dashboard</span>
                                            </div>
                                        </a>
                                    @else
                                        <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                                </svg>
                                                <span class="text-sm font-bold font-helvetica">Dashboard</span>
                                            </div>
                                        </a>
                                        
                                    @endif
                                    <hr class="my-2 border-[#D3EB9F]/30">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-3 text-[#DC2626] hover:bg-red-50 transition">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="text-sm font-bold font-helvetica">Logout</span>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 rounded-lg transition font-semibold font-garet min-h-[44px] flex items-center">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="px-6 py-2.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-sm rounded-2xl hover:shadow-lg transition shadow-md font-black font-helvetica min-h-[44px] flex items-center">
                                Register
                            </a>
                        @endauth
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
                    <!-- Mobile Home with Accordion -->
                    <div x-data="{ mobileHomeOpen: false }">
                        <button @click="mobileHomeOpen = !mobileHomeOpen" 
                                class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            <span>Home</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="mobileHomeOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="mobileHomeOpen" x-cloak class="mt-2 ml-4 space-y-1 border-l-2 border-[#D3EB9F] pl-4">
                            <a href="{{ route('home') }}#about" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                <svg class="w-4 h-4 mr-2 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                What is BOREYES?
                            </a>
                            <a href="{{ route('home') }}#grand-theme" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                <svg class="w-4 h-4 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                Grand Theme 2026
                            </a>
                            <a href="{{ route('home') }}#logo-mascot" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                <svg class="w-4 h-4 mr-2 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                                Logo & Mascot
                            </a>
                            <a href="{{ route('home') }}#team-profile" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                <svg class="w-4 h-4 mr-2 text-[#8CCDCF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Team Profile
                            </a>
                            <a href="{{ route('home') }}#timeline" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                <svg class="w-4 h-4 mr-2 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Timeline
                            </a>
                        </div>
                    </div>
                    
                    
<!-- JADI: -->
<div x-data="{ mobileCompOpen: false }">
    <button @click="mobileCompOpen = !mobileCompOpen" 
            class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->routeIs('competitions.*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
        <span>Competitions</span>
        <svg class="w-4 h-4 transition-transform duration-200" :class="mobileCompOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    
    <div x-show="mobileCompOpen" x-cloak class="mt-2 ml-4 space-y-1 border-l-2 border-[#D3EB9F] pl-4">
        <a href="{{ route('competitions.show', 'smart-competition') }}" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">Smart Competition</a>
        <a href="{{ route('competitions.show', 'paper-poster-competition') }}" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">Paper & Poster</a>
        <a href="{{ route('competitions.show', 'business-case-competition') }}" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">Business Case</a>
        <a href="{{ route('competitions.show', 'case-study-competition') }}" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">Case Study</a>
        <a href="{{ route('competitions.show', 'plan-of-development') }}" @click="open = false" class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">Plan of Development</a>
    </div>
</div>
                    <!-- Mobile Event Programs with Accordion -->
<div x-data="{ mobileEventOpen: false }">
    <button @click="mobileEventOpen = !mobileEventOpen"
            class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->routeIs('event-programs') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
        <span>Event Programs</span>
        <svg class="w-4 h-4 transition-transform duration-200" :class="mobileEventOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <div x-show="mobileEventOpen" x-cloak class="mt-2 ml-4 space-y-1 border-l-2 border-[#D3EB9F] pl-4">
        <a href="{{ route('event-programs') }}#company-talks" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            Company Talks
        </a>

        <a href="{{ route('event-programs') }}#csr" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            CSR
        </a>

        <a href="{{ route('event-programs') }}#field-trip" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#8CCDCF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Field Trip
        </a>

        <a href="{{ route('event-programs') }}#final-competition" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
            Final Competition
        </a>

        <a href="{{ route('event-programs') }}#ignite-talks" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
            </svg>
            Ignite Talks
        </a>

        <a href="{{ route('event-programs') }}#funday" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#6F97B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Funday
        </a>

        <a href="{{ route('event-programs') }}#banquet" @click="open = false"
           class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
            <svg class="w-4 h-4 mr-2 text-[#8CCDCF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
            </svg>
            Banquet
        </a>
    </div>
</div>

                    <a href="{{ route('faq') }}" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica min-h-[44px] {{ request()->routeIs('faq') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                        FAQ
                    </a>
                    
                    @auth
                        <hr class="my-3 border-[#D3EB9F]/30">
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                                Admin Dashboard
                            </a>
                        @else
                            <a href="{{ route('dashboard') }}" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                                Dashboard
                            </a>
                            <a href="{{ route('teams.index') }}" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                                My Teams
                            </a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-3 rounded-xl text-sm text-[#DC2626] hover:bg-red-50 font-bold font-helvetica">
                                Logout
                            </button>
                        </form>
                    @else
                        <hr class="my-3 border-[#D3EB9F]/30">
                        <a href="{{ route('login') }}" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="block px-4 py-3 rounded-xl bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-sm text-center font-black font-helvetica hover:shadow-lg transition">
                            Register
                        </a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer - UPDATED: Better contrast and readability -->
        <footer class="bg-gradient-to-br from-[#0F4C82] via-[#1B5A8A] to-[#2D5F3F] text-white relative overflow-hidden">
            <!-- Grunge Texture -->
            <div class="absolute inset-0 opacity-5 mix-blend-multiply pointer-events-none" style="background-image: url('/mnt/user-data/uploads/1767967087610_image.png'); background-size: cover; background-position: center;"></div>
            
            <!-- Decorative Elements - Reduced opacity -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#D3EB9F]/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#6F97B6]/5 rounded-full blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- About -->
                    <div class="lg:col-span-2">
                        <div class="flex items-center space-x-3 mb-6">
                            
                             <div class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/LOGO.svg') }}" alt="Boreyes Logo" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <div>
                                <div class="text-xl font-black font-helvetica tracking-tight text-white">BOREYES 2026</div>
                                <div class="text-sm text-[#D3EB9F] font-garet">SPE Unpad Student Chapter</div>
                            </div>
                        </div>
                        <p class="text-sm text-white/95 mb-6 leading-relaxed max-w-md font-garet">
                            Platform terbesar untuk mahasiswa mengembangkan kompetensi teknis dan profesional dalam industri Oil & Gas dan Energi Berkelanjutan sejak 2011.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#" class="w-10 h-10 bg-white/15 backdrop-blur-md rounded-xl flex items-center justify-center hover:bg-[#D3EB9F] hover:text-[#0F4C82] transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/15 backdrop-blur-md rounded-xl flex items-center justify-center hover:bg-[#D3EB9F] hover:text-[#0F4C82] transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/15 backdrop-blur-md rounded-xl flex items-center justify-center hover:bg-[#D3EB9F] hover:text-[#0F4C82] transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/15 backdrop-blur-md rounded-xl flex items-center justify-center hover:bg-[#D3EB9F] hover:text-[#0F4C82] transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-base font-black mb-6 font-helvetica text-white tracking-tight">Quick Links</h3>
                        <ul class="space-y-3">
                            <li><a href="{{ route('home') }}" class="text-sm text-white/90 hover:text-[#D3EB9F] transition flex items-center space-x-2 font-garet group"><span class="w-5 h-5 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-[#D3EB9F]/20 transition"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span><span>Home</span></a></li>
                            <!-- JADI (redirect ke home): -->
<li>
  <button
    type="button"
    onclick="scrollToNavAndOpenDropdown()"
    class="text-sm text-white/90 hover:text-[#D3EB9F] transition flex items-center space-x-2 font-garet group"
  >
    <span class="w-5 h-5 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-[#D3EB9F]/20 transition">
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
    </span>
    <span>Competitions</span>
  </button>
</li>

                            <li><a href="{{ route('event-programs') }}" class="text-sm text-white/90 hover:text-[#D3EB9F] transition flex items-center space-x-2 font-garet group"><span class="w-5 h-5 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-[#D3EB9F]/20 transition"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span><span>Event Programs</span></a></li>
                            <li><a href="{{ route('faq') }}" class="text-sm text-white/90 hover:text-[#D3EB9F] transition flex items-center space-x-2 font-garet group"><span class="w-5 h-5 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-[#D3EB9F]/20 transition"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span><span>FAQ</span></a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-base font-black mb-6 font-helvetica text-white tracking-tight">Contact Us</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-[#D3EB9F]/20 backdrop-blur-md rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm text-white/95 font-garet">boreyes@speunpad.com</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-[#D3EB9F]/20 backdrop-blur-md rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm text-white/95 font-garet">+62 812-3456-7890</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-[#D3EB9F]/20 backdrop-blur-md rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm text-white/95 font-garet">FTG Unpad, Jatinangor, Sumedang</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="border-white/20 my-10">

                <div class="flex flex-col md:flex-row justify-between items-center text-sm text-white/90 font-garet">
                    <p>&copy; 2026 Boreyes - SPE Unpad Student Chapter. All rights reserved.</p>
                    <p class="mt-2 md:mt-0">Fakultas Teknik Geologi Universitas Padjadjaran</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')
    
@push('scripts')
<script>
function scrollToNavAndOpenDropdown() {
    // Scroll to top smoothly
    window.scrollTo({ top: 0, behavior: 'smooth' });
    
    // Wait for scroll to complete, then trigger dropdown
    setTimeout(() => {
        // Find the competitions button in navbar
        const competitionsBtn = document.querySelector('nav button');
        
        if (competitionsBtn) {
            // Trigger mouseenter event for desktop
            const mouseEnterEvent = new MouseEvent('mouseenter', {
                view: window,
                bubbles: true,
                cancelable: true
            });
            competitionsBtn.dispatchEvent(mouseEnterEvent);
            
            // For mobile, trigger click
            if (window.innerWidth < 1024) {
                competitionsBtn.click();
            }
        }
    }, 800); // Wait 800ms for scroll to finish
}
</script>
</body>
</html>