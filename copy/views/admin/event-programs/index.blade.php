@extends('layouts.admin')

@section('title', 'Event Programs')
@section('page-title', 'Event Programs')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div>
        <h2 class="text-2xl font-helvetica font-bold text-[#0F4C82]">Program Acara</h2>
        <p class="text-gray-600 font-garet">Kelola konten program acara</p>
    </div>
    <a href="{{ route('admin.event-programs.create') }}" 
       class="inline-flex items-center px-4 py-2 bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
        Tambah Program
    </a>
</div>

<!-- Events Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($eventPrograms as $event)
    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:border-[#6F97B6] transition-colors">
        <!-- Event Image -->
        <div class="h-40 bg-gray-100 relative">
            @if($event->image)
            <img src="{{ Storage::url($event->image) }}" alt="{{ $event->name }}" class="w-full h-full object-cover">
            @else
            <div class="absolute inset-0 flex items-center justify-center bg-[#0F4C82]/5">
                <span class="text-[#0F4C82]/20 font-helvetica font-bold text-6xl">{{ strtoupper(substr($event->name, 0, 1)) }}</span>
            </div>
            @endif
            
            <!-- Order Badge -->
            <div class="absolute top-3 left-3">
                <span class="px-3 py-1 bg-white text-gray-800 text-xs font-helvetica font-bold rounded">
                    Urutan {{ $event->order }}
                </span>
            </div>

            <!-- Status Badge -->
            <div class="absolute top-3 right-3">
                @if($event->is_active)
                <span class="px-3 py-1 bg-green-600 text-white text-xs font-garet rounded">Aktif</span>
                @else
                <span class="px-3 py-1 bg-gray-600 text-white text-xs font-garet rounded">Nonaktif</span>
                @endif
            </div>
        </div>

        <!-- Event Info -->
        <div class="p-5">
            <h3 class="font-helvetica font-bold text-[#0F4C82] text-lg mb-2">{{ $event->name }}</h3>
            <p class="text-gray-600 font-garet text-sm mb-4 line-clamp-2">{{ $event->description }}</p>

            @if($event->event_date)
            <div class="flex items-center text-sm text-gray-600 font-garet mb-2">
                <span class="mr-2">Waktu:</span>
                <span>{{ $event->event_date->format('d M Y, H:i') }}</span>
            </div>
            @endif

            @if($event->location)
            <div class="flex items-center text-sm text-gray-600 font-garet mb-4">
                <span class="mr-2">Lokasi:</span>
                <span class="truncate">{{ $event->location }}</span>
            </div>
            @endif

            <!-- Actions -->
            <div class="flex items-center space-x-2">
                <a href="{{ route('admin.event-programs.edit', $event->id) }}" 
                   class="flex-1 py-2 bg-[#0F4C82] text-white text-sm font-garet rounded-lg text-center hover:bg-[#6F97B6] transition">
                    Edit
                </a>
                <form method="POST" action="{{ route('admin.event-programs.destroy', $event->id) }}" class="inline"
                      onsubmit="return confirm('Hapus program ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white border border-gray-200 rounded-lg p-12 text-center">
        <h3 class="text-lg font-helvetica font-bold text-gray-900 mb-2">Belum Ada Program</h3>
        <p class="text-gray-500 font-garet mb-4">Buat program acara pertama Anda</p>
        <a href="{{ route('admin.event-programs.create') }}" class="inline-flex items-center px-4 py-2 bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
            Tambah Program
        </a>
    </div>
    @endforelse
</div>
@endsection