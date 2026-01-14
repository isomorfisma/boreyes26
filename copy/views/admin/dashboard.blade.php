@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<!-- Welcome Section -->
<div class="mb-6">
    <h2 class="text-xl sm:text-2xl font-helvetica font-bold text-[#0F4C82]">
        Selamat Datang, {{ auth()->user()->name }}
    </h2>
    <p class="text-gray-600 mt-1 font-garet text-sm">Ringkasan BOREYES 2026 hari ini</p>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-6">
    <!-- Total Competitions -->
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-[#6F97B6] hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <p class="text-xs text-gray-500 font-garet font-medium mb-2">Total Kompetisi</p>
                <p class="text-3xl font-helvetica font-bold text-[#0F4C82]">{{ $stats['competitions'] ?? 0 }}</p>
            </div>
        </div>
        <div class="pt-3 border-t border-gray-100">
            <span class="text-xs text-[#6F97B6] font-garet font-medium">{{ $stats['active_competitions'] ?? 0 }} Aktif</span>
        </div>
    </div>

    <!-- Total Teams -->
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-[#8CCDCF] hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <p class="text-xs text-gray-500 font-garet font-medium mb-2">Total Tim</p>
                <p class="text-3xl font-helvetica font-bold text-[#0F4C82]">{{ $stats['teams'] ?? 0 }}</p>
            </div>
        </div>
        <div class="pt-3 border-t border-gray-100">
            <span class="text-xs text-[#8CCDCF] font-garet font-medium">{{ $stats['approved_teams'] ?? 0 }} Disetujui</span>
        </div>
    </div>

    <!-- Pending Verifications -->
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-amber-500 hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <p class="text-xs text-gray-500 font-garet font-medium mb-2">Pending</p>
                <p class="text-3xl font-helvetica font-bold text-amber-600">{{ $stats['pending_teams'] ?? 0 }}</p>
            </div>
        </div>
        <div class="pt-3 border-t border-gray-100">
            <span class="text-xs text-amber-600 font-garet font-medium">Perlu Aksi</span>
        </div>
    </div>

    <!-- Total Revenue -->
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 hover:border-green-500 hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <p class="text-xs text-gray-500 font-garet font-medium mb-2">Total Pendapatan</p>
                <p class="text-lg font-helvetica font-bold text-[#0F4C82]">Rp {{ number_format($stats['revenue'] ?? 0, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="pt-3 border-t border-gray-100">
            <span class="text-xs text-green-600 font-garet font-medium">Terverifikasi</span>
        </div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6 mb-6">
    <!-- Recent Registrations -->
    <div class="lg:col-span-2 bg-white border-2 border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
        <div class="p-4 border-b-2 border-gray-100 bg-gray-50">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-helvetica font-bold text-[#0F4C82]">Pendaftaran Terbaru</h3>
                    <p class="text-xs text-gray-500 font-garet mt-0.5">Tim yang baru mendaftar</p>
                </div>
                <a href="{{ route('admin.teams.index') }}" class="text-xs sm:text-sm text-[#0F4C82] hover:text-[#6F97B6] font-garet font-medium transition">
                    Lihat Semua →
                </a>
            </div>
        </div>
        <div class="divide-y divide-gray-100 max-h-[400px] overflow-y-auto">
            @forelse($recentTeams ?? [] as $team)
            <div class="p-4 hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-lg flex items-center justify-center text-white font-helvetica font-bold text-sm flex-shrink-0">
                        {{ strtoupper(substr($team->name, 0, 2)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-helvetica font-bold text-[#0F4C82] text-sm truncate">{{ $team->name }}</h4>
                        <p class="text-xs text-gray-500 font-garet truncate mt-0.5">{{ $team->competition->name ?? 'N/A' }}</p>
                        <p class="text-xs text-gray-400 font-garet mt-1">{{ $team->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="flex-shrink-0">
                        @switch($team->status)
                            @case('approved')
                                <span class="inline-flex items-center justify-center w-24 h-8 bg-green-50 border border-green-200 text-green-700 text-xs font-garet font-medium rounded-lg">
                                    Disetujui
                                </span>
                                @break
                            @case('pending')
                                <span class="inline-flex items-center justify-center w-24 h-8 bg-amber-50 border border-amber-200 text-amber-700 text-xs font-garet font-medium rounded-lg">
                                    Pending
                                </span>
                                @break
                            @case('rejected')
                                <span class="inline-flex items-center justify-center w-24 h-8 bg-red-50 border border-red-200 text-red-700 text-xs font-garet font-medium rounded-lg">
                                    Ditolak
                                </span>
                                @break
                        @endswitch
                    </div>
                </div>
            </div>
            @empty
            <div class="p-12 text-center">
                <p class="text-gray-500 font-garet text-sm">Belum ada pendaftaran terbaru</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Pending Payments -->
    <div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
        <div class="p-4 border-b-2 border-gray-100 bg-amber-50">
            <h3 class="text-lg font-helvetica font-bold text-[#0F4C82]">Pembayaran Pending</h3>
            <p class="text-xs text-gray-500 font-garet mt-0.5">Menunggu verifikasi</p>
        </div>
        <div class="divide-y divide-gray-100 max-h-[400px] overflow-y-auto">
            @forelse($pendingPayments ?? [] as $team)
            <div class="p-4 hover:bg-amber-50/30 transition-colors">
                <div class="flex items-start gap-3 mb-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-600 rounded-lg flex items-center justify-center text-white font-helvetica font-bold text-xs flex-shrink-0">
                        {{ strtoupper(substr($team->name, 0, 2)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-helvetica font-bold text-[#0F4C82] text-sm truncate">{{ $team->name }}</h4>
                        <p class="text-xs text-gray-400 font-mono mt-0.5">{{ $team->code }}</p>
                        <p class="font-helvetica font-bold text-[#0F4C82] text-base mt-2">Rp {{ number_format($team->competition->registration_fee ?? 0, 0, ',', '.') }}</p>
                    </div>
                </div>
                <a href="{{ route('admin.teams.show', $team->id) }}" class="block w-full py-2 text-center bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-xs font-garet font-bold rounded-lg hover:shadow-md transition-all">
                    Review Pembayaran
                </a>
            </div>
            @empty
            <div class="p-12 text-center">
                <p class="text-gray-500 font-garet text-sm">Semua pembayaran terverifikasi</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Competition Stats -->
<div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
    <div class="p-4 border-b-2 border-gray-100 bg-gray-50">
        <h3 class="text-lg font-helvetica font-bold text-[#0F4C82]">Statistik per Kompetisi</h3>
        <p class="text-xs text-gray-500 font-garet mt-0.5">Ringkasan semua kompetisi</p>
    </div>
    
    <!-- Mobile View -->
    <div class="block lg:hidden divide-y divide-gray-100">
        @forelse($competitionStats ?? [] as $comp)
        <div class="p-4 hover:bg-gray-50 transition-colors">
            <div class="flex items-start justify-between gap-3 mb-3">
                <div class="flex-1 min-w-0">
                    <h4 class="font-helvetica font-bold text-[#0F4C82] text-sm">{{ $comp->name }}</h4>
                    <p class="text-xs text-gray-500 font-garet mt-0.5">{{ $comp->category->name ?? 'Uncategorized' }}</p>
                </div>
                @if($comp->status === 'open')
                    <span class="inline-flex items-center h-7 px-3 bg-green-50 border border-green-200 text-green-700 text-xs font-garet font-medium rounded-lg flex-shrink-0">
                        Terbuka
                    </span>
                @elseif($comp->status === 'ongoing')
                    <span class="inline-flex items-center h-7 px-3 bg-blue-50 border border-blue-200 text-blue-700 text-xs font-garet font-medium rounded-lg flex-shrink-0">
                        Berlangsung
                    </span>
                @else
                    <span class="inline-flex items-center h-7 px-3 bg-gray-50 border border-gray-200 text-gray-600 text-xs font-garet font-medium rounded-lg flex-shrink-0">
                        {{ ucfirst($comp->status) }}
                    </span>
                @endif
            </div>
            
            <div class="grid grid-cols-3 gap-3 mb-3">
                <div class="bg-[#0F4C82]/5 rounded-lg p-3 text-center border border-[#0F4C82]/10">
                    <p class="text-2xl font-helvetica font-bold text-[#0F4C82]">{{ $comp->teams_count ?? 0 }}</p>
                    <p class="text-xs text-gray-500 font-garet mt-1">Terdaftar</p>
                </div>
                <div class="bg-green-50 rounded-lg p-3 text-center border border-green-100">
                    <p class="text-2xl font-helvetica font-bold text-green-600">{{ $comp->approved_teams_count ?? 0 }}</p>
                    <p class="text-xs text-gray-500 font-garet mt-1">Disetujui</p>
                </div>
                <div class="bg-amber-50 rounded-lg p-3 text-center border border-amber-100">
                    <p class="text-2xl font-helvetica font-bold text-amber-600">{{ $comp->pending_teams_count ?? 0 }}</p>
                    <p class="text-xs text-gray-500 font-garet mt-1">Pending</p>
                </div>
            </div>
            
            <a href="{{ route('admin.competitions.edit', $comp->id) }}" class="block w-full py-2.5 text-center bg-gray-50 border border-gray-200 text-[#0F4C82] text-sm font-garet font-medium rounded-lg hover:bg-gray-100 transition-colors">
                Kelola Kompetisi
            </a>
        </div>
        @empty
        <div class="p-12 text-center">
            <p class="text-gray-500 font-garet text-sm mb-3">Belum ada kompetisi</p>
            <a href="{{ route('admin.competitions.create') }}" class="text-[#0F4C82] hover:text-[#6F97B6] font-helvetica font-bold text-sm transition">
                Buat Kompetisi Baru
            </a>
        </div>
        @endforelse
    </div>
    
    <!-- Desktop View -->
    <div class="hidden lg:block overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Kompetisi</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-28">Terdaftar</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-28">Disetujui</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-28">Pending</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-32">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase w-32">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($competitionStats ?? [] as $comp)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-3">
                        <div class="font-helvetica font-bold text-[#0F4C82] text-sm">{{ $comp->name }}</div>
                        <div class="text-xs text-gray-500 font-garet mt-0.5">{{ $comp->category->name ?? 'Uncategorized' }}</div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-[#0F4C82]/5 rounded-lg border border-[#0F4C82]/10">
                            <span class="text-xl font-helvetica font-bold text-[#0F4C82]">{{ $comp->teams_count ?? 0 }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-green-50 rounded-lg border border-green-100">
                            <span class="text-xl font-helvetica font-bold text-green-600">{{ $comp->approved_teams_count ?? 0 }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-amber-50 rounded-lg border border-amber-100">
                            <span class="text-xl font-helvetica font-bold text-amber-600">{{ $comp->pending_teams_count ?? 0 }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($comp->status === 'open')
                            <span class="inline-flex items-center h-8 px-3 bg-green-50 border border-green-200 text-green-700 text-xs font-garet font-medium rounded-lg">
                                Terbuka
                            </span>
                        @elseif($comp->status === 'ongoing')
                            <span class="inline-flex items-center h-8 px-3 bg-blue-50 border border-blue-200 text-blue-700 text-xs font-garet font-medium rounded-lg">
                                Berlangsung
                            </span>
                        @else
                            <span class="inline-flex items-center h-8 px-3 bg-gray-50 border border-gray-200 text-gray-600 text-xs font-garet font-medium rounded-lg">
                                {{ ucfirst($comp->status) }}
                            </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="{{ route('admin.competitions.edit', $comp->id) }}" class="inline-flex items-center h-8 px-4 bg-gray-50 border border-gray-200 text-[#0F4C82] text-xs font-garet font-medium rounded-lg hover:bg-gray-100 transition-colors">
                            Kelola
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-12 text-center">
                        <p class="text-gray-500 font-garet text-sm mb-3">Belum ada kompetisi</p>
                        <a href="{{ route('admin.competitions.create') }}" class="text-[#0F4C82] hover:text-[#6F97B6] font-helvetica font-bold text-sm transition">
                            Buat Kompetisi Baru
                        </a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection