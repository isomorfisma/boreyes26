@extends('layouts.app')

@section('title', 'Tambah FAQ')

@section('content')

<h1 class="text-xl font-bold mb-4">➕ Tambah FAQ</h1>

<form method="POST" action="{{ route('admin.faqs.store') }}" class="space-y-4">
    @csrf

    <input type="text"
           name="question"
           class="w-full border rounded p-2"
           placeholder="Pertanyaan"
           required>

    <textarea name="answer"
              class="w-full border rounded p-2"
              placeholder="Jawaban"
              rows="5"
              required></textarea>

    <button class="px-4 py-2 bg-blue-600 text-white rounded">
        Simpan
    </button>
</form>

@endsection
