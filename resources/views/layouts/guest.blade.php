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
<body class="font-garet antialiased bg-gradient-to-br from-[#F8FBFC] via-white to-[#F8FBFC]">
    <div class="min-h-screen">
        <!-- Navigation (Same as app.blade.php) -->
        @include('layouts.navigation')

        <!-- Main Content -->
        <main class="relative pt-[72px]">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')
    
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