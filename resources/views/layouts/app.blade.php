<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        @include('layouts.navigation')
                
        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        @stack('scripts')

        </div>
    </body>
</html>
