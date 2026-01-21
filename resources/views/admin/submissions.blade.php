@extends('layouts.admin')

@section('title', 'Submissions')
@section('page-title', 'Review Submission')

@section('content')
<!-- Header -->
<div class="mb-6">
    <h2 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82]">Review Submission</h2>
    <p class="text-sm text-gray-600 font-garet">Kelola dan review submission tim peserta</p>
</div>

<!-- Stats Summary -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4">
        <p class="text-xs text-gray-500 font-garet mb-1">Total Submission</p>
        <p class="text-2xl font-helvetica font-bold text-[#0F4C82]">{{ $users->filter(fn($u) => $u->submission)->count() }}</p>
    </div>
    <div class="bg-white border-2 border-green-100 rounded-xl p-4">
        <p class="text-xs text-gray-500 font-garet mb-1">Lolos</p>
        <p class="text-2xl font-helvetica font-bold text-green-600">{{ $users->filter(fn($u) => $u->selection && $u->selection->status === 'passed')->count() }}</p>
    </div>
    <div class="bg-white border-2 border-amber-100 rounded-xl p-4">
        <p class="text-xs text-gray-500 font-garet mb-1">Belum Dinilai</p>
        <p class="text-2xl font-helvetica font-bold text-amber-600">{{ $users->filter(fn($u) => $u->submission && !$u->selection)->count() }}</p>
    </div>
</div>

<!-- Submissions Table -->
<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF]">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Tim</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Kompetisi</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Submission</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($users as $user)
                <tr class="hover:bg-[#D3EB9F]/10 transition">
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-[#0F4C82] rounded-lg flex items-center justify-center text-white font-helvetica font-black text-xs flex-shrink-0">
                                {{ strtoupper(substr($user->team_name, 0, 2)) }}
                            </div>
                            <div class="min-w-0">
                                <div class="text-sm font-helvetica font-black text-[#0F4C82]">{{ $user->team_name }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <span class="text-sm text-gray-700 font-garet">{{ $user->competition->name }}</span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($user->submission)
                            <a href="{{ $user->submission->drive_link }}"
                               class="inline-flex items-center px-2 py-1 bg-blue-50 text-blue-700 text-xs font-garet rounded hover:bg-blue-100 transition"
                               target="_blank">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Lihat
                            </a>
                        @else
                            <span class="text-gray-400 text-xs font-garet">Belum submit</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($user->selection)
                            @if($user->selection->status === 'passed')
                                <span class="px-2 py-0.5 bg-green-50 text-green-700 text-xs font-garet rounded">Lolos</span>
                            @elseif($user->selection->status === 'failed')
                                <span class="px-2 py-0.5 bg-red-50 text-red-700 text-xs font-garet rounded">Tidak Lolos</span>
                            @else
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-garet rounded">{{ ucfirst($user->selection->status) }}</span>
                            @endif
                        @else
                            <span class="px-2 py-0.5 bg-amber-50 text-amber-700 text-xs font-garet rounded">Belum dinilai</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center space-x-1">
                           
                            @if($user->submission)
                                @if(!$user->selection || $user->selection->status !== 'passed')
                                    <form method="POST" action="{{ route('admin.submissions.pass', $user) }}" class="inline"
                                          onsubmit="return confirm('Loloskan tim ini?')">
                                        @csrf
                                        <button class="px-2 py-1 bg-green-50 text-green-700 text-xs font-garet rounded hover:bg-green-100 transition">
                                            Lolos
                                        </button>
                                    </form>
                                @endif
                                @if(!$user->selection || $user->selection->status !== 'failed')
                                    <form method="POST" action="{{ route('admin.submissions.fail', $user) }}" class="inline"
                                          onsubmit="return confirm('Tidak loloskan tim ini?')">
                                        @csrf
                                        <button class="px-2 py-1 bg-red-50 text-red-700 text-xs font-garet rounded hover:bg-red-100 transition">
                                            Tidak
                                        </button>
                                    </form>
                                @endif
                                @if($user->selection && $user->selection->status !== 'pending')
                                    <form method="POST" action="{{ route('admin.submissions.pending', $user) }}" class="inline"
                                          onsubmit="return confirm('Ubah status jadi pending?')">
                                        @csrf
                                        <button class="px-2 py-1 bg-amber-50 text-amber-700 text-xs font-garet rounded hover:bg-amber-100 transition">
                                            Pending
                                        </button>
                                    </form>
                                @endif
                            @else
                                <span class="text-gray-400 text-xs">Belum submit</span>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-8 text-center">
                        <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p class="text-sm text-gray-500 font-garet">Belum ada submission</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection