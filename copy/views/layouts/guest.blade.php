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
                        <a href="{{ route('home') }}" 
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
                    <a href="{{ route('home') }}" @click="open = false" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica min-h-[44px] {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
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
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
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
                            @if(Route::has('register'))
                            <li><a href="{{ route('register') }}" class="text-sm text-white/90 hover:text-[#D3EB9F] transition flex items-center space-x-2 font-garet group"><span class="w-5 h-5 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-[#D3EB9F]/20 transition"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span><span>Register</span></a></li>
                            @endif
                            @if(Route::has('login'))
                            <li><a href="{{ route('login') }}" class="text-sm text-white/90 hover:text-[#D3EB9F] transition flex items-center space-x-2 font-garet group"><span class="w-5 h-5 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-[#D3EB9F]/20 transition"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span><span>Login</span></a></li>
                            @endif
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
                                <span class="text-sm text-white/95 font-garet">+62 xxx-xxx-xxxx</span>
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
</body>
</html>