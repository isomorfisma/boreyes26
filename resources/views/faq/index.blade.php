@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<div class="max-w-4xl mx-auto space-y-4">
    <h1 class="text-2xl font-bold mb-4">❓ Frequently Asked Questions</h1>

    @foreach($faqs as $faq)
        <div class="bg-white shadow rounded p-4">
            <p class="font-semibold">{{ $faq->question }}</p>
            <p class="text-gray-700 mt-2">{{ $faq->answer }}</p>
        </div>
    @endforeach
</div>
@endsection
