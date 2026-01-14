@extends('layouts.app')

@section('title', 'Edit FAQ')

@section('content')

<h1 class="text-xl font-bold mb-4">✏️ Edit FAQ</h1>

<form method="POST"
      action="{{ route('admin.faqs.update', $faq) }}"
      class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text"
           name="question"
           value="{{ $faq->question }}"
           class="w-full border rounded p-2"
           required>

    <textarea name="answer"
              class="w-full border rounded p-2"
              rows="5"
              required>{{ $faq->answer }}</textarea>

    <button class="px-4 py-2 bg-blue-600 text-white rounded">
        Update
    </button>
</form>

@endsection
