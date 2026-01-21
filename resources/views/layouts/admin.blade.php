<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BOREYES 2026') }} - Admin @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marola:wght@400;700&family=Helvetica+Neue:wght@400;700;900&family=Garet:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        
        @font-face {
            font-family: 'Marola';
            src: url('/fonts/Marola.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
        
        .font-marola { font-family: 'Marola', cursive; }
        .font-helvetica { font-family: 'Helvetica Neue', 'Helvetica', sans-serif; }
        .font-garet { font-family: 'Garet', sans-serif; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .sidebar-gradient {
            background: linear-gradient(135deg, #0F4C82 0%, #6F97B6 100%);
        }
    </style>
    
    @stack('styles')
</head>

<body class="font-garet antialiased bg-[#F8FBFC]">
    <div class="min-h-screen" x-data="{ sidebarOpen: true }">
        <!-- Sidebar -->
        <aside
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 w-68 sidebar-gradient transform transition-transform duration-300 ease-in-out flex flex-col shadow-2xl"
            style="width: 270px;"
        >
            <!-- Logo Header -->
            <div class="flex items-center justify-between h-[72px] px-5 bg-black/10 backdrop-blur-sm border-b border-white/10">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center">
                        <img src="{{ asset('assets/svg/LOGO.svg') }}" alt="Boreyes Logo" class="w-full h-full object-contain drop-shadow-lg">
                    </div>
                    <div>
                        <div class="text-white font-helvetica font-black text-lg tracking-tight">BOREYES</div>
                        <div class="text-[11px] text-[#D3EB9F] font-garet">Admin Panel</div>
                    </div>
                </div>

                <button @click="sidebarOpen = false" class="text-white/70 hover:text-white transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <nav class="px-4 py-5 space-y-2 overflow-y-auto flex-1">
                <!-- Dashboard -->
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center space-x-3 px-3.5 py-2.5 text-white/80 hover:bg-white/10 rounded-xl transition font-garet {{ request()->routeIs('admin.dashboard') ? 'bg-white/20 text-white shadow-lg' : '' }}">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="text-[13px]">Dashboard</span>
                </a>

               
                <!-- FAQs -->
                <a href="{{ route('admin.faqs.index') }}"
                   class="flex items-center space-x-3 px-3.5 py-2.5 text-white/80 hover:bg-white/10 rounded-xl transition font-garet {{ request()->routeIs('admin.faqs.*') ? 'bg-white/20 text-white shadow-lg' : '' }}">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-[13px]">FAQs</span>
                </a>

                 <!-- FAQs -->
                <a href="{{ route('admin.submissions') }}"
                   class="flex items-center space-x-3 px-3.5 py-2.5 text-white/80 hover:bg-white/10 rounded-xl transition font-garet {{ request()->routeIs('admin.submissions.*') ? 'bg-white/20 text-white shadow-lg' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="text-[13px]">Submissions</span>
                </a>

                <!-- Registrations -->
                <a href="{{ route('admin.registrations') }}"
                   class="flex items-center space-x-3 px-3.5 py-2.5 text-white/80 hover:bg-white/10 rounded-xl transition font-garet {{ request()->routeIs('admin.users.*') ? 'bg-white/20 text-white shadow-lg' : '' }}">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="text-[13px]">Teams</span>
                </a>

                <hr class="border-white/10 my-3">

                <!-- View Website -->
                <a href="/"
                   target="_blank"
                   class="flex items-center space-x-3 px-3.5 py-2.5 text-white/80 hover:bg-white/10 rounded-xl transition font-garet">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    <span class="text-[13px]">View Website</span>
                </a>
            </nav>

            <!-- User Profile at Bottom -->
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center space-x-3 p-3 bg-white/10 rounded-xl">
                    <div class="w-10 h-10 bg-gradient-to-br from-[#D3EB9F] to-[#C5E6C9] rounded-full flex items-center justify-center">
                        <span class="text-[#0F4C82] text-sm font-helvetica font-black">{{ substr(auth()->user()->name, 0, 1) }}</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="text-sm font-bold text-white truncate font-helvetica">{{ auth()->user()->name }}</div>
                        <div class="text-[11px] text-[#D3EB9F]">Administrator</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div :class="sidebarOpen ? 'lg:pl-[270px]' : 'lg:pl-0'" class="transition-all duration-300">
            <!-- Top Bar -->
            <header class="bg-white border-b-2 border-[#D3EB9F]/30 sticky top-0 z-40 shadow-sm">
                <div class="flex items-center justify-between h-[60px] px-4 sm:px-6 lg:px-7">
                    <button @click="sidebarOpen = !sidebarOpen" class="text-[#0F4C82] hover:text-[#6F97B6] transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <h1 class="text-xl sm:text-2xl font-helvetica font-black text-[#0F4C82]">@yield('page-title', 'Dashboard')</h1>

                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center space-x-2 hover:bg-[#F8FBFC] rounded-lg px-3 py-2 transition">
                            <div class="w-8 h-8 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-helvetica font-black">{{ substr(auth()->user()->name, 0, 1) }}</span>
                            </div>
                            <svg class="w-4 h-4 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="dropdownOpen"
                             @click.away="dropdownOpen = false"
                             x-cloak
                             class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 border-2 border-[#D3EB9F]/30">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-garet">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        <span>Logout</span>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-4 sm:p-6 lg:p-7">
                <!-- Alert Messages -->
                @if (session('success'))
                    <div x-data="{ show: true }"
                         x-show="show"
                         x-init="setTimeout(() => show = false, 5000)"
                         class="mb-6 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 border-2 border-[#D3EB9F] text-[#0F4C82] rounded-xl p-4 flex items-center justify-between font-garet">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                        <button @click="show = false" class="text-[#0F4C82] hover:text-[#6F97B6]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @endif

                @if (session('error'))
                    <div x-data="{ show: true }"
                         x-show="show"
                         x-init="setTimeout(() => show = false, 5000)"
                         class="mb-6 bg-red-50 border-2 border-red-200 text-red-700 rounded-xl p-4 flex items-center justify-between font-garet">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                        <button @click="show = false" class="text-red-600 hover:text-red-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>

        <!-- Mobile/Desktop Sidebar Overlay -->
        <div x-show="sidebarOpen"
             @click="sidebarOpen = false"
             x-cloak
             class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"></div>
    </div>

    @stack('scripts')
</body>
</html>