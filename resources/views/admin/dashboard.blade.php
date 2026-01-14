@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    <h1 class="text-2xl font-bold mb-6">📊 Admin Dashboard</h1>

    {{-- OVERVIEW --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        <div class="p-4 bg-white rounded shadow">
            <p class="text-sm text-gray-500">Total Tim Mendaftar</p>
            <p class="text-2xl font-bold">{{ $totalRegistered }}</p>
            <p class="text-xs text-gray-600">
                {{ $emailVerifiedCount }} email terverifikasi
            </p>
        </div>

        <div class="p-4 bg-white rounded shadow">
            <p class="text-sm text-gray-500">Status Pembayaran</p>
            <p class="text-green-600 font-semibold">
                ✔ {{ $paymentVerified }} Verified
            </p>
            <p class="text-red-600 font-semibold">
                ⏳ {{ $paymentPending }} Pending
            </p>
        </div>

        <div class="p-4 bg-white rounded shadow">
            <p class="text-sm text-gray-500">Total Uang Masuk</p>
            <p class="text-2xl font-bold">
                Rp {{ number_format($totalIncome, 0, ',', '.') }}
            </p>
        </div>

    </div>

    {{-- LATEST REGISTRATIONS --}}
<div class="bg-white rounded-lg shadow mb-8">
    <div class="flex justify-between items-center px-4 py-3 border-b">
        <h2 class="font-semibold">🆕 Pendaftar Terbaru</h2>
        <a href="{{ route('admin.registrations') }}"
           class="text-sm text-blue-600 hover:underline">
            Lihat Semua
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left px-4 py-2">Tim</th>
                    <th class="text-left px-4 py-2">Lomba</th>
                    <th class="text-center px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse($latestRegistrations as $user)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2 font-medium">
                            {{ $user->team_name }}
                        </td>
                        <td class="px-4 py-2">
                            {{ $user->competition->name }}
                        </td>
                        <td class="px-4 py-2 text-center">
                            @if($user->email_verified_at)
                                <span class="text-green-600 font-semibold">✔ Verified</span>
                            @else
                                <span class="text-red-600 font-semibold">❌ Not Verified</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-4 text-center text-gray-500">
                            Belum ada pendaftar
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


    {{-- COMPETITION STATS --}}
<div class="bg-white rounded-lg shadow mb-8">
    <div class="px-4 py-3 border-b">
        <h2 class="font-semibold">🏆 Statistik Per Kompetisi</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left px-4 py-2">Kompetisi</th>
                    <th class="text-center px-4 py-2">Total</th>
                    <th class="text-center px-4 py-2">Verified</th>
                    <th class="text-center px-4 py-2">Pending</th>
                </tr>
            </thead>
            <tbody>
                @foreach($competitionStats as $competition)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2 font-medium">
                            {{ $competition->name }}
                        </td>
                        <td class="px-4 py-2 text-center">
                            {{ $competition->total_registered }}
                        </td>
                        <td class="px-4 py-2 text-center text-green-600 font-semibold">
                            {{ $competition->payment_verified }}
                        </td>
                        <td class="px-4 py-2 text-center text-red-600 font-semibold">
                            {{ $competition->payment_pending }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{-- SUBMISSION PREVIEW --}}
<div class="bg-white rounded-lg shadow">
    <div class="flex justify-between items-center px-4 py-3 border-b">
        <h2 class="font-semibold">📤 Submission Terbaru</h2>
        <a href="{{ route('admin.submissions') }}"
           class="text-sm text-blue-600 hover:underline">
            Lihat Semua
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left px-4 py-2">Tim</th>
                    <th class="text-left px-4 py-2">Lomba</th>
                    <th class="text-center px-4 py-2">Waktu Submit</th>
                </tr>
            </thead>
            <tbody>
                @forelse($latestSubmissions as $submission)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2 font-medium">
                            {{ $submission->user->team_name }}
                        </td>
                        <td class="px-4 py-2">
                            {{ $submission->user->competition->name }}
                        </td>
                        <td class="px-4 py-2 text-center text-gray-600">
                            {{ $submission->submitted_at->format('d M Y, H:i') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-4 text-center text-gray-500">
                            Belum ada submission
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>



@endsection
