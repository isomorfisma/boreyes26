@extends('layouts.admin')

@section('title', 'Teams')
@section('page-title', 'Teams Management')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
    <div>
        <h2 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82]">Manajemen Tim</h2>
        <p class="text-sm text-gray-600 font-garet">Kelola dan verifikasi pendaftaran tim</p>
    </div>
    <a href="{{ route('admin.teams.export', request()->query()) }}" 
       class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-lg hover:opacity-90 transition">
        Export CSV
    </a>
</div>

<!-- Filters -->
<div class="bg-white border border-gray-200 rounded-lg p-4 mb-6">
    <form method="GET" action="{{ route('admin.teams.index') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3">
        <div>
            <label class="block text-xs font-garet text-gray-700 mb-1">Kompetisi</label>
            <select name="competition" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                <option value="">Semua Kompetisi</option>
                @foreach($competitions ?? [] as $competition)
                <option value="{{ $competition->id }}" {{ request('competition') == $competition->id ? 'selected' : '' }}>
                    {{ $competition->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-xs font-garet text-gray-700 mb-1">Status Tim</label>
            <select name="status" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                <option value="">Semua Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Disetujui</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-garet text-gray-700 mb-1">Status Pembayaran</label>
            <select name="payment" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                <option value="">Semua Status</option>
                <option value="verified" {{ request('payment') == 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                <option value="pending" {{ request('payment') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="rejected" {{ request('payment') == 'rejected' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-garet text-gray-700 mb-1">Cari</label>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Nama tim, kode, institusi..."
                   class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
        </div>
        <div class="flex items-end gap-2">
            <button type="submit" class="flex-1 px-4 py-1.5 text-sm bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
                Filter
            </button>
            <a href="{{ route('admin.teams.index') }}" class="px-3 py-1.5 text-sm bg-gray-100 text-gray-700 font-garet rounded-lg hover:bg-gray-200 transition">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Teams Table -->
<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF]">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Tim</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Kompetisi</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Anggota</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Pembayaran</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Terdaftar</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($teams as $team)
                <tr class="hover:bg-[#D3EB9F]/10 transition">
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-[#0F4C82] rounded-lg flex items-center justify-center text-white font-helvetica font-black text-xs flex-shrink-0">
                                {{ strtoupper(substr($team->name, 0, 2)) }}
                            </div>
                            <div class="min-w-0">
                                <div class="text-sm font-helvetica font-black text-[#0F4C82]">{{ $team->name }}</div>
                                <div class="text-[10px] text-gray-500 font-mono">{{ $team->code }}</div>
                                <div class="text-xs text-gray-500 font-garet truncate">{{ $team->institution }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <span class="text-sm text-gray-700 font-garet">{{ $team->competition->name ?? 'N/A' }}</span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="inline-flex items-center justify-center w-7 h-7 bg-[#D3EB9F]/20 text-[#0F4C82] rounded-lg font-helvetica font-black text-sm">
                            {{ $team->members->count() }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($team->payment)
                            @switch($team->payment->status)
                                @case('verified')
                                    <span class="px-2 py-0.5 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-garet rounded">Terverifikasi</span>
                                    @break
                                @case('pending')
                                    <span class="px-2 py-0.5 bg-amber-50 text-amber-700 text-xs font-garet rounded">Pending</span>
                                    @break
                                @case('rejected')
                                    <span class="px-2 py-0.5 bg-red-50 text-red-700 text-xs font-garet rounded">Ditolak</span>
                                    @break
                            @endswitch
                        @else
                            <span class="px-2 py-0.5 bg-gray-100 text-gray-500 text-xs font-garet rounded">Belum Bayar</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        @switch($team->status)
                            @case('approved')
                                <span class="px-2 py-0.5 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-garet rounded">Disetujui</span>
                                @break
                            @case('pending')
                                <span class="px-2 py-0.5 bg-amber-50 text-amber-700 text-xs font-garet rounded">Pending</span>
                                @break
                            @case('rejected')
                                <span class="px-2 py-0.5 bg-red-50 text-red-700 text-xs font-garet rounded">Ditolak</span>
                                @break
                        @endswitch
                    </td>
                    <td class="px-4 py-3 text-center text-xs text-gray-600 font-garet">
                        {{ $team->created_at->format('d M Y') }}
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center space-x-1">
                            <a href="{{ route('admin.teams.show', $team->id) }}" 
                               class="px-2 py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-garet rounded hover:bg-[#0F4C82]/20 transition">
                                Lihat
                            </a>
                            @if($team->status === 'pending')
                            <form method="POST" action="{{ route('admin.teams.approve', $team->id) }}" class="inline" 
                                  onsubmit="return confirm('Setujui tim ini?')">
                                @csrf
                                <button type="submit" class="px-2 py-1 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-garet rounded hover:bg-[#D3EB9F]/30 transition">
                                    Setujui
                                </button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-8 text-center">
                        <p class="text-sm text-gray-500 font-garet">Tidak ada tim ditemukan</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($teams->hasPages())
    <div class="p-4 border-t border-gray-200">
        {{ $teams->withQueryString()->links() }}
    </div>
    @endif
</div>
@endsection