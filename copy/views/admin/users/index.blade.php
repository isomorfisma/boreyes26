@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Users Management')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div>
        <h2 class="text-xl font-helvetica font-bold text-[#0F4C82]">Manajemen Pengguna</h2>
        <p class="text-sm text-gray-600 font-garet">Kelola pengguna terdaftar</p>
    </div>
    <div class="text-sm text-gray-600 font-garet">
        Total: <strong>{{ $users->total() }}</strong> pengguna
    </div>
</div>

<!-- Filters -->
<div class="bg-white border border-gray-200 rounded-lg p-4 mb-6">
    <form method="GET" action="{{ route('admin.users.index') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
        <div>
            <label class="block text-xs font-garet text-gray-700 mb-1">Role</label>
            <select name="role" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                <option value="">Semua Role</option>
                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-garet text-gray-700 mb-1">Cari</label>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Nama, email..."
                   class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
        </div>
        <div class="lg:col-span-2 flex items-end gap-2">
            <button type="submit" class="px-4 py-1.5 text-sm bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
                Filter
            </button>
            <a href="{{ route('admin.users.index') }}" class="px-3 py-1.5 text-sm bg-gray-100 text-gray-700 font-garet rounded-lg hover:bg-gray-200 transition">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Users Table -->
<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Pengguna</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Kontak</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Institusi</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Role</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Tim</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Terdaftar</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($users as $user)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-[#0F4C82] rounded-lg flex items-center justify-center text-white font-helvetica font-bold text-xs flex-shrink-0">
                                {{ strtoupper(substr($user->name, 0, 2)) }}
                            </div>
                            <div class="min-w-0">
                                <div class="text-sm font-helvetica font-bold text-[#0F4C82]">{{ $user->name }}</div>
                                <div class="text-xs text-gray-600 font-garet">{{ $user->email }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600 font-garet">
                        {{ $user->phone ?? '-' }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600 font-garet">
                        {{ $user->institution ?? '-' }}
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($user->role === 'admin')
                        <span class="px-2 py-0.5 bg-purple-50 text-purple-700 text-xs font-garet rounded">Admin</span>
                        @else
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-600 text-xs font-garet rounded">User</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($user->team)
                            <div class="inline-flex flex-col items-center">
                                <span class="px-2 py-0.5 bg-green-50 text-green-700 text-xs font-garet rounded mb-0.5">
                                    {{ $user->team->name }}
                                </span>
                                <span class="text-[10px] text-gray-500 font-mono">{{ $user->team->code }}</span>
                            </div>
                        @else
                            <span class="px-2 py-0.5 bg-gray-100 text-gray-500 text-xs font-garet rounded">
                                Belum Punya Tim
                            </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center text-xs text-gray-600 font-garet">
                        {{ $user->created_at->format('d M Y') }}
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center space-x-1">
                            @if($user->role !== 'admin' && $user->id !== auth()->id())
                            <form method="POST" action="{{ route('admin.users.make-admin', $user->id) }}" class="inline"
                                  onsubmit="return confirm('Jadikan pengguna ini admin?')">
                                @csrf
                                <button type="submit" class="px-2 py-1 bg-purple-50 text-purple-700 text-xs font-garet rounded hover:bg-purple-100 transition">
                                    Jadikan Admin
                                </button>
                            </form>
                            @elseif($user->role === 'admin' && $user->id !== auth()->id())
                            <form method="POST" action="{{ route('admin.users.remove-admin', $user->id) }}" class="inline"
                                  onsubmit="return confirm('Hapus status admin pengguna ini?')">
                                @csrf
                                <button type="submit" class="px-2 py-1 bg-yellow-50 text-yellow-700 text-xs font-garet rounded hover:bg-yellow-100 transition">
                                    Hapus Admin
                                </button>
                            </form>
                            @endif
                            @if($user->id !== auth()->id())
                            <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="inline"
                                  onsubmit="return confirm('Hapus pengguna ini? Tindakan ini tidak dapat dibatalkan.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-50 text-red-700 text-xs font-garet rounded hover:bg-red-100 transition">
                                    Hapus
                                </button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-8 text-center text-sm text-gray-500 font-garet">
                        Tidak ada pengguna ditemukan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($users->hasPages())
    <div class="p-4 border-t border-gray-200">
        {{ $users->withQueryString()->links() }}
    </div>
    @endif
</div>
@endsection