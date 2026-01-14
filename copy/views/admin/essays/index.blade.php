@extends('layouts.admin')

@section('title', 'Pre-Elimination Essays')
@section('page-title', 'Pre-Elimination Essays')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-6">
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-[#6F97B6] hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-2">
            <p class="text-xs text-gray-500 font-garet font-medium">Total Essays</p>
            <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
        </div>
        <p class="text-3xl font-helvetica font-bold text-[#0F4C82]">{{ $stats['total'] }}</p>
    </div>

    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-amber-400 hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-2">
            <p class="text-xs text-gray-500 font-garet font-medium">Pending</p>
            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <p class="text-3xl font-helvetica font-bold text-amber-600">{{ $stats['pending'] }}</p>
    </div>

    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-green-400 hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-2">
            <p class="text-xs text-gray-500 font-garet font-medium">Lolos</p>
            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <p class="text-3xl font-helvetica font-bold text-green-600">{{ $stats['passed'] }}</p>
    </div>

    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-red-400 hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-2">
            <p class="text-xs text-gray-500 font-garet font-medium">Tidak Lolos</p>
            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </div>
        <p class="text-3xl font-helvetica font-bold text-red-600">{{ $stats['failed'] }}</p>
    </div>
</div>

<!-- Filters -->
<div class="bg-white border-2 border-gray-100 rounded-xl p-4 mb-6">
    <form method="GET" action="{{ route('admin.essays.index') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <!-- Search -->
        <div>
            <input type="text" 
                   name="search" 
                   value="{{ request('search') }}"
                   placeholder="Cari nama tim..."
                   class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent text-sm font-garet">
        </div>

        <!-- Competition Filter -->
        <div>
            <select name="competition" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent text-sm font-garet">
                <option value="">Semua Kompetisi</option>
                @foreach($competitions as $comp)
                <option value="{{ $comp->id }}" {{ request('competition') == $comp->id ? 'selected' : '' }}>
                    {{ $comp->name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Status Filter -->
        <div>
            <select name="status" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent text-sm font-garet">
                <option value="">Semua Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="passed" {{ request('status') == 'passed' ? 'selected' : '' }}>Lolos</option>
                <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }}>Tidak Lolos</option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="flex gap-2">
            <button type="submit" class="flex-1 px-4 py-2 bg-[#0F4C82] text-white font-helvetica font-bold text-sm rounded-lg hover:bg-[#6F97B6] transition">
                Filter
            </button>
            <a href="{{ route('admin.essays.index') }}" class="px-4 py-2 bg-gray-100 text-gray-600 font-helvetica font-bold text-sm rounded-lg hover:bg-gray-200 transition">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Essays List -->
<div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden">
    <!-- Mobile View -->
    <div class="block lg:hidden divide-y divide-gray-100">
        @forelse($essays as $essay)
        <div class="p-4 hover:bg-gray-50 transition-colors">
            <div class="flex items-start justify-between mb-3">
                <div class="flex-1 min-w-0">
                    <h3 class="font-helvetica font-bold text-[#0F4C82] text-sm truncate">{{ $essay->team->name }}</h3>
                    <p class="text-xs text-gray-500 font-garet mt-0.5">{{ $essay->team->competition->name }}</p>
                    <p class="text-xs text-gray-400 font-garet mt-1">{{ $essay->created_at->format('d M Y, H:i') }}</p>
                </div>
                <span class="inline-flex items-center px-2 py-1 {{ $essay->status_badge }} text-xs font-helvetica font-black rounded-lg border flex-shrink-0 ml-2">
                    {{ $essay->status_label }}
                </span>
            </div>

            @if($essay->isScored())
            <div class="bg-[#0F4C82]/5 rounded-lg p-3 mb-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-600 font-garet">Score:</span>
                    <span class="text-2xl font-helvetica font-bold text-[#0F4C82]">{{ number_format($essay->score, 1) }}</span>
                </div>
            </div>
            @endif

            <a href="{{ route('admin.essays.show', $essay) }}" 
               class="block w-full py-2 text-center bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-sm font-helvetica font-bold rounded-lg hover:shadow-md transition">
                {{ $essay->isPending() ? 'Nilai Essay' : 'Lihat Detail' }}
            </a>
        </div>
        @empty
        <div class="p-12 text-center">
            <p class="text-gray-500 font-garet text-sm">Belum ada essay yang disubmit</p>
        </div>
        @endforelse
    </div>

    <!-- Desktop View -->
    <div class="hidden lg:block overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Tim</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Kompetisi</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-28">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-24">Score</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-32">Submit</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-32">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($essays as $essay)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-3">
                        <div class="font-helvetica font-bold text-[#0F4C82] text-sm">{{ $essay->team->name }}</div>
                        <div class="text-xs text-gray-500 font-mono mt-0.5">{{ $essay->team->code }}</div>
                    </td>
                    <td class="px-4 py-3">
                        <div class="text-sm text-gray-700 font-garet">{{ $essay->team->competition->name }}</div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="inline-flex items-center px-3 py-1 {{ $essay->status_badge }} text-xs font-helvetica font-black rounded-lg border">
                            {{ $essay->status_label }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($essay->isScored())
                        <span class="text-lg font-helvetica font-bold text-[#0F4C82]">{{ number_format($essay->score, 1) }}</span>
                        @else
                        <span class="text-xs text-gray-400 font-garet">-</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="text-xs text-gray-600 font-garet">{{ $essay->created_at->format('d M Y') }}</div>
                        <div class="text-xs text-gray-400 font-garet">{{ $essay->created_at->format('H:i') }}</div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="{{ route('admin.essays.show', $essay) }}" 
                           class="inline-flex items-center px-4 py-2 {{ $essay->isPending() ? 'bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82]' : 'bg-gray-100 text-gray-700' }} text-xs font-helvetica font-bold rounded-lg hover:shadow-md transition">
                            {{ $essay->isPending() ? 'Nilai' : 'Detail' }}
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-12 text-center">
                        <p class="text-gray-500 font-garet text-sm">Belum ada essay yang disubmit</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($essays->hasPages())
    <div class="px-4 py-4 border-t-2 border-gray-100">
        {{ $essays->links() }}
    </div>
    @endif
</div>
@endsection