<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    
    <!-- DEFAULT TAILWIND FONT -->
    <p class="font-helvetica text-4xl font-black tracking-tighter">
        Helvetica Now Display
    </p>
    
    

    <section>
        <div class="label">Default Tailwind (sans)</div>
        <p class="text-3xl">
            The quick brown fox jumps over the lazy dog
        </p>
    </section>

    <!-- HELVETICA REGULAR -->
    <section>
        <div class="label">Helvetica Now Display - Regular</div>
        <p class="font-helvetica text-3xl font-normal">
            The quick brown fox jumps over the lazy dog
        </p>
    </section>

    <!-- HELVETICA BOLD -->
    <section>
        <div class="label">Helvetica Now Display - Bold</div>
        <p class="font-helvetica text-3xl font-bold">
            The quick brown fox jumps over the lazy dog
        </p>
    </section>

    <!-- MAROLA -->
    <section>
        <div class="label">Marola</div>
        <p class="font-marola text-3xl">
            The quick brown fox jumps over the lazy dog
        </p>
    </section>

    <!-- GARET -->
    <section>
        <div class="label">Garet</div>
        <p class="font-garet text-3xl">
            The quick brown fox jumps over the lazy dog
        </p>
    </section>
</body>
</html>