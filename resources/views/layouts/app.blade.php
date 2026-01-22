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

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
       
        <!-- GSAP Library - PENTING! -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

        

        <style>
                #scrollToTop.show {
        opacity: 1 !important;
        pointer-events: auto !important;
        animation: slideInRight 0.5s ease-out;
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100px) scale(0.5);
        }
        to {
            opacity: 1;
            transform: translateX(0) scale(1);
        }
    }
    
    @media (max-width: 768px) {
        #scrollToTop {
            width: 50px;
            height: 50px;
            bottom: 20px;
            right: 20px;
        }
        
        #scrollToTop svg:not(.absolute) {
            width: 20px;
            height: 20px;
        }
    }
    
    #scrollToTop:active {
        transform: scale(0.95) !important;
    }

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
                        
            body, * {
                cursor: none !important;
            }

            #cursor-canvas {
                position: fixed;
                top: 0;
                left: 0;
                pointer-events: none;
                z-index: 10000;
            }

        
        </style>
        
        @stack('styles')
        
    </head>

    <body class="font-garet antialiased bg-[#F8FBFC]">
        <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        @include('layouts.navigation')
                
        <main class="pt-[64px]">
            @yield('content')
        </main>

        @include('layouts.footer')
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        @stack('scripts')

        </div>

        <!-- Scroll to Top Button with Progress Circle -->
<button id="scrollToTop" 
    class="fixed bottom-8 right-8 z-50 w-14 h-14 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] text-white rounded-full shadow-2xl hover:shadow-[0_10px_40px_rgba(111,151,182,0.6)] transform hover:scale-110 transition-all duration-300 flex items-center justify-center opacity-0 pointer-events-none group"
    aria-label="Scroll to top">
    
    <!-- Progress Circle SVG -->
    <svg class="absolute inset-0 w-full h-full -rotate-90" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="45" 
                fill="none" 
                stroke="rgba(255,255,255,0.2)" 
                stroke-width="4"/>
        <circle id="progressCircle"
                cx="50" cy="50" r="45" 
                fill="none" 
                stroke="#D3EB9F" 
                stroke-width="4"
                stroke-linecap="round"
                stroke-dasharray="283"
                stroke-dashoffset="283"
                style="transition: stroke-dashoffset 0.1s ease;"/>
    </svg>
    
    <!-- Arrow Icon -->
    <svg class="w-6 h-6 relative z-10 transform group-hover:-translate-y-1 transition-transform duration-300" 
         fill="none" 
         stroke="currentColor" 
         viewBox="0 0 24 24">
        <path stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2.5" 
              d="M5 10l7-7m0 0l7 7m-7-7v18">
        </path>
    </svg>
</button>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.createElement('canvas');
  canvas.id = 'cursor-canvas';
  document.body.appendChild(canvas);

  const ctx = canvas.getContext('2d');
  let dpr = window.devicePixelRatio || 1;

  function resizeCanvas() {
    dpr = window.devicePixelRatio || 1;

    // ukuran tampil (CSS px)
    canvas.style.width = `${window.innerWidth}px`;
    canvas.style.height = `${window.innerHeight}px`;

    // ukuran real pixel (biar tajam)
    canvas.width = Math.floor(window.innerWidth * dpr);
    canvas.height = Math.floor(window.innerHeight * dpr);

    // semua gambar pakai koordinat CSS px
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  }

  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);

  let mouseX = 0, mouseY = 0;

  const cursorImage = new Image();
  cursorImage.src = '{{ asset("assets/svg/MATA.svg") }}';

  document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  const size = 36;
const offset = Math.PI / 2; // 90 derajat (kalau mau 180: Math.PI)

function draw(t) {
  // t = timestamp dari requestAnimationFrame (ms sejak page load)
  ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);

  ctx.save();
  ctx.translate(mouseX, mouseY);

//   // putar terus (speed)
//   const speed = 0.002; // rad/ms
//   ctx.rotate(t * speed + offset);

  ctx.drawImage(cursorImage, -size / 2, -size / 2, size, size);
  ctx.restore();

  requestAnimationFrame(draw);
}

cursorImage.onload = () => {
  requestAnimationFrame(draw); // start loop sekali
};


  cursorImage.onload = () => draw();

    
const scrollToTopBtn = document.getElementById('scrollToTop');
    const progressCircle = document.getElementById('progressCircle');
    
    if (!scrollToTopBtn) return;
    
    // Calculate scroll progress
    function updateScrollProgress() {
        const scrollTop = window.pageYOffset;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        
        // Show/hide button
        if (scrollTop > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
        
        // Update progress circle
        if (progressCircle) {
            const circumference = 283; // 2 * PI * radius (45)
            const offset = circumference - (scrollPercent / 100 * circumference);
            progressCircle.style.strokeDashoffset = offset;
        }
    }
    
    // Scroll to top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        
        if (navigator.vibrate) {
            navigator.vibrate(50);
        }
    }
    
    // Event listeners
    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    scrollToTopBtn.addEventListener('click', scrollToTop);
    
    // Initial check
    updateScrollProgress();
});
</script>
    </body>

</html>
