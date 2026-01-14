@extends('layouts.app')

@section('title', 'Manage FAQ')

@section('content')

<div class="flex justify-between mb-4">
    <h1 class="text-xl font-bold">📋 Manage FAQ</h1>
    <a href="{{ route('admin.faqs.create') }}"
       class="px-4 py-2 bg-blue-600 text-white rounded">
        + Tambah FAQ
    </a>
</div>

@if(session('success'))
    <div class="mb-3 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white shadow rounded text-sm">
    <thead class="border-b">
        <tr>
            <th class="text-left p-3">Pertanyaan</th>
            <th class="p-3 w-32">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($faqs as $faq)
            <tr class="border-b">
                <td class="p-3">{{ $faq->question }}</td>
                <td class="p-3 flex gap-2">
                    <a href="{{ route('admin.faqs.edit', $faq) }}"
                       class="text-blue-600">Edit</a>

                    <form method="POST"
                          action="{{ route('admin.faqs.destroy', $faq) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600"
                                onclick="return confirm('Hapus FAQ?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
