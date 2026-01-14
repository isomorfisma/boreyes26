@extends('layouts.app')

@section('title', 'Admin - Verifikasi Pembayaran')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white shadow rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6">📋 Data Pendaftar</h1>

            <table class="w-full border border-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-3 py-2">Tim</th>
                        <th class="border px-3 py-2">Ketua</th>
                        <th class="border px-3 py-2">Kompetisi</th>
                        <th class="border px-3 py-2">Bukti Bayar</th>
                        <th class="border px-3 py-2">Status</th>
                        <th class="border px-3 py-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($users as $user)
                        <tr class="text-center">
                            <td class="border px-3 py-2">{{ $user->team_name }}</td>
                            <td class="border px-3 py-2">{{ $user->team_leader }}</td>
                            <td class="border px-3 py-2">
                                {{ $user->competition?->name ?? '-' }}
                            </td>

                            <td class="border px-3 py-2">
                                <a href="{{ $user->link_drive_payment }}"
                                   target="_blank"
                                   class="text-blue-600 underline">
                                    Lihat
                                </a>
                            </td>

                            <td class="border px-3 py-2">
                                @if($user->payment_status === 'verified')
                                    <span class="text-green-600 font-semibold">Verified</span>
                                @elseif($user->payment_status === 'rejected')
                                    <span class="text-red-600 font-semibold">Rejected</span>
                                @else
                                    <span class="text-yellow-600 font-semibold">Pending</span>
                                @endif
                            </td>

                            <td class="border px-3 py-2 space-x-2">
                                @if($user->payment_status !== 'verified')
                                    <form action="{{ route('admin.registrations.verify', $user) }}"
                                          method="POST"
                                          class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <button class="px-3 py-1 bg-green-600 text-white rounded">
                                            Verify
                                        </button>
                                    </form>
                                @endif

                                @if($user->payment_status !== 'rejected')
                                    <form action="{{ route('admin.registrations.reject', $user) }}"
                                          method="POST"
                                          class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <button class="px-3 py-1 bg-red-600 text-white rounded">
                                            Reject
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-gray-500">
                                Tidak ada data pendaftar
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
