@extends('layouts.admin')

@section('title', 'FAQs')
@section('page-title', 'FAQs Management')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div>
        <h2 class="text-2xl font-helvetica font-bold text-[#0F4C82]">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-gray-600 font-garet">Kelola FAQ untuk pengunjung website</p>
    </div>
    <a href="{{ route('admin.faqs.create') }}" 
       class="inline-flex items-center px-4 py-2 bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Tambah FAQ
    </a>
</div>

<!-- Success Message -->
@if(session('success'))
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

<!-- FAQs List -->
<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="divide-y divide-gray-200">
        @forelse($faqs as $faq)
        <div class="p-6 hover:bg-gray-50 transition">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                <div class="flex-1">
                    <div class="flex items-start space-x-3">
                        <span class="flex-shrink-0 w-8 h-8 bg-[#0F4C82]/10 text-[#0F4C82] rounded-lg flex items-center justify-center text-sm font-helvetica font-bold">
                            {{ $loop->iteration }}
                        </span>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-helvetica font-bold text-[#0F4C82] mb-1">{{ $faq->question }}</h3>
                            <p class="text-gray-600 font-garet text-sm line-clamp-2">{{ $faq->answer }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-2 sm:flex-shrink-0">
                    @if($faq->is_active ?? true)
                    <span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-garet rounded">Aktif</span>
                    @else
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-garet rounded">Nonaktif</span>
                    @endif
                    <a href="{{ route('admin.faqs.edit', $faq) }}" 
                       class="px-3 py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-garet rounded hover:bg-[#0F4C82]/20 transition">
                        Edit
                    </a>
                    <form method="POST" action="{{ route('admin.faqs.destroy', $faq) }}" class="inline"
                          onsubmit="return confirm('Hapus FAQ ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-50 text-red-700 text-xs font-garet rounded hover:bg-red-100 transition">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="text-lg font-helvetica font-bold text-gray-900 mb-2">Belum Ada FAQ</h3>
            <p class="text-gray-500 font-garet mb-4">Buat FAQ pertama Anda untuk membantu pengunjung</p>
            <a href="{{ route('admin.faqs.create') }}" class="inline-flex items-center px-4 py-2 bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Tambah FAQ
            </a>
        </div>
        @endforelse
    </div>
</div>
@endsection