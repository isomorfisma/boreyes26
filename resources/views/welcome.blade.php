@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto py-10 space-y-10">

        <!-- DEFAULT TAILWIND FONT -->
        <p class="font-helvetica text-4xl font-black tracking-tighter">
            Helvetica Now Display
        </p>

        <!-- DEFAULT TAILWIND -->
        <section>
            <div class="text-sm text-gray-500 mb-2">
                Default Tailwind (sans)
            </div>
            <p class="text-3xl">
                The quick brown fox jumps over the lazy dog
            </p>
        </section>

        <!-- HELVETICA REGULAR -->
        <section>
            <div class="text-sm text-gray-500 mb-2">
                Helvetica Now Display - Regular
            </div>
            <p class="font-helvetica text-3xl font-normal">
                The quick brown fox jumps over the lazy dog
            </p>
        </section>

        <!-- HELVETICA BOLD -->
        <section>
            <div class="text-sm text-gray-500 mb-2">
                Helvetica Now Display - Bold
            </div>
            <p class="font-helvetica text-3xl font-bold">
                The quick brown fox jumps over the lazy dog
            </p>
        </section>

        <!-- MAROLA -->
        <section>
            <div class="text-sm text-gray-500 mb-2">
                Marola
            </div>
            <p class="font-marola text-3xl">
                The quick brown fox jumps over the lazy dog
            </p>
        </section>

        <!-- GARET -->
        <section>
            <div class="text-sm text-gray-500 mb-2">
                Garet
            </div>
            <p class="font-garet text-3xl">
                The quick brown fox jumps over the lazy dog
            </p>
        </section>

    </div>
@endsection
