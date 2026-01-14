@extends('layouts.admin')

@section('title', 'Competitions')
@section('page-title', 'Competitions Management')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
    <div>
        <h2 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82]">Manajemen Kompetisi</h2>
        <p class="text-sm text-gray-600 font-garet">Kelola semua data kompetisi</p>
    </div>
    <!-- <a href="{{ route('admin.competitions.create') }}" 
       class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-lg hover:opacity-90 transition">
        Tambah Kompetisi
    </a> -->
</div>

<!-- Competitions Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    @forelse($competitions as $competition)
    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:border-[#D3EB9F] hover:shadow-lg transition-all">
        <!-- Competition Image/Banner -->
        <div class="h-36 bg-gradient-to-br from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] relative">
            @if($competition->poster)
            <img src="{{ Storage::url($competition->poster) }}" alt="{{ $competition->name }}" class="w-full h-full object-cover">
            @else
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-[#0F4C82]/30 font-helvetica font-black text-5xl">{{ strtoupper(substr($competition->name, 0, 1)) }}</span>
            </div>
            @endif
            
            <!-- Status Badge -->
            <div class="absolute top-2 right-2">
                @switch($competition->status)
                    @case('open')
                        <span class="px-2 py-1 bg-[#D3EB9F] text-[#0F4C82] text-xs font-helvetica font-black rounded">Terbuka</span>
                        @break
                    @case('ongoing')
                        <span class="px-2 py-1 bg-[#0F4C82] text-white text-xs font-helvetica font-black rounded">Berlangsung</span>
                        @break
                    @case('closed')
                        <span class="px-2 py-1 bg-gray-600 text-white text-xs font-helvetica font-black rounded">Ditutup</span>
                        @break
                    @case('draft')
                        <span class="px-2 py-1 bg-amber-500 text-white text-xs font-helvetica font-black rounded">Draft</span>
                        @break
                @endswitch
            </div>
        </div>

        <!-- Competition Info -->
        <div class="p-4">
            <h3 class="font-helvetica font-black text-[#0F4C82] text-base mb-1 line-clamp-1">{{ $competition->name }}</h3>
            <p class="text-gray-600 font-garet text-xs mb-3 line-clamp-2">{{ $competition->description }}</p>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-2 mb-3">
                <div class="text-center p-2 bg-[#D3EB9F]/10 rounded-lg">
                    <p class="text-base font-helvetica font-black text-[#0F4C82]">{{ $competition->teams_count ?? 0 }}</p>
                    <p class="text-[10px] text-gray-500 font-garet">Tim</p>
                </div>
                <div class="text-center p-2 bg-[#D3EB9F]/10 rounded-lg">
                    <p class="text-base font-helvetica font-black text-[#0F4C82]">{{ $competition->max_team_members }}</p>
                    <p class="text-[10px] text-gray-500 font-garet">Maks Anggota</p>
                </div>
                <div class="text-center p-2 bg-[#D3EB9F]/10 rounded-lg">
                    <p class="text-sm font-helvetica font-black text-[#0F4C82]">{{ number_format($competition->registration_fee/1000) }}K</p>
                    <p class="text-[10px] text-gray-500 font-garet">Biaya</p>
                </div>
            </div>

            <!-- Dates -->
            <div class="text-xs text-gray-500 font-garet mb-3 p-2 bg-gray-50 rounded">
                <p>Pendaftaran: {{ $competition->registration_start->format('d M') }} - {{ $competition->registration_end->format('d M Y') }}</p>
            </div>

            <!-- Actions -->
            <div class="flex items-center space-x-2">
                <a href="{{ route('admin.competitions.edit', $competition->id) }}" 
                   class="flex-1 py-1.5 bg-[#0F4C82] text-white text-xs font-garet rounded-lg text-center hover:bg-[#6F97B6] transition">
                    Edit
                </a>
                <a href="{{ route('competitions.show', $competition->slug) }}" 
                   target="_blank"
                   class="flex-1 py-1.5 bg-gray-100 text-gray-700 text-xs font-garet rounded-lg text-center hover:bg-gray-200 transition">
                    Lihat
                </a>
                <form method="POST" action="{{ route('admin.competitions.destroy', $competition->id) }}" class="inline"
                      onsubmit="return confirm('Hapus kompetisi ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-1.5 text-red-600 hover:bg-red-50 rounded-lg transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
        <div class="w-16 h-16 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
        </div>
        <h3 class="text-lg font-helvetica font-black text-[#0F4C82] mb-1">Belum Ada Kompetisi</h3>
        <p class="text-sm text-gray-500 font-garet mb-4">Buat kompetisi pertama Anda untuk memulai</p>
        <a href="{{ route('admin.competitions.create') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-lg hover:opacity-90 transition">
            Tambah Kompetisi
        </a>
    </div>
    @endforelse
</div>

@if($competitions->hasPages())
<div class="mt-6">
    {{ $competitions->links() }}
</div>
@endif
@endsection