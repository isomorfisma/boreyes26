@extends('layouts.app')

@section('title', __('Profile'))

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        {{-- 👋 Greeting --}}
        <div class="p-6 bg-white shadow rounded-lg">
            <h1 class="text-2xl font-bold text-gray-800">
                👋 Selamat datang, Tim {{ auth()->user()->team_name }}
            </h1>
            <p class="text-gray-600 mt-1">
                Ketua Tim: <strong>{{ auth()->user()->team_leader }}</strong>
            </p>
        </div>

        {{-- 👥 Anggota Tim --}}
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-lg font-semibold mb-4">👥 Anggota Tim</h2>

            <ul class="space-y-2 text-gray-700">
                <li>👑 Ketua: {{ auth()->user()->team_leader }}</li>

                @if(auth()->user()->team_member_1)
                    <li>• {{ auth()->user()->team_member_1 }}</li>
                @endif

                @if(auth()->user()->team_member_2)
                    <li>• {{ auth()->user()->team_member_2 }}</li>
                @endif
            </ul>
        </div>

        {{-- 🏆 Status Kompetisi --}}
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-lg font-semibold mb-4">🏆 Kompetisi</h2>

            @if(auth()->user()->competition)
                <p class="text-gray-700">
                    Mengikuti lomba:
                    <span class="font-semibold">
                        {{ auth()->user()->competition->name }}
                    </span>
                </p>
            @else
                <p class="text-gray-500 italic">
                    Belum terdaftar di kompetisi manapun
                </p>
            @endif
        </div>

        {{-- 💳 Status Pembayaran --}}
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-lg font-semibold mb-4">💳 Status Pembayaran</h2>

            @php
                $status = auth()->user()->payment_status ?? 'pending';
            @endphp

            @if($status === 'verified')
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                    ✔ Pembayaran Terverifikasi
                </span>
            @elseif($status === 'rejected')
                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">
                    ✖ Pembayaran Ditolak
                </span>
            @else
                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">
                    ⏳ Menunggu Verifikasi Admin
                </span>
            @endif

            @if(auth()->user()->link_drive_payment)
                <p class="mt-2 text-sm">
                    Bukti pembayaran:
                    <a href="{{ auth()->user()->link_drive_payment }}"
                       class="text-blue-600 underline"
                       target="_blank">
                        Lihat Dokumen
                    </a>
                </p>
            @endif
        </div>

        @if(
            auth()->user()->payment_status === 'verified' &&
            auth()->user()->competition &&
            auth()->user()->competition->has_submission
        )
        <div class="p-6 bg-white shadow rounded-lg space-y-4">
        
            <h2 class="font-semibold text-lg">📤 Submission</h2>
        
            {{-- Info Deadline --}}
            <div class="text-sm text-gray-600">
                Deadline submission:
                <span class="font-semibold">
                    {{ auth()->user()->competition->submission_deadline->format('d M Y, H:i') }}
                </span>
            </div>
        
            {{-- Success Message --}}
            @if(session('success'))
                <div class="p-3 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif
        
            {{-- Deadline Passed --}}
            @if(now()->gt(auth()->user()->competition->submission_deadline))
                <div class="p-3 bg-red-100 text-red-700 rounded">
                    ⛔ Deadline submission sudah lewat. Submission tidak dapat diubah.
                </div>
        
                @if(auth()->user()->submission)
                    <div class="text-sm">
                        <p class="font-semibold">Submission terakhir:</p>
                        <a href="{{ auth()->user()->submission->drive_link }}"
                           target="_blank"
                           class="text-blue-600 underline">
                            {{ auth()->user()->submission->drive_link }}
                        </a>
        
                        <p class="text-gray-500 mt-1">
                            Dikirim pada:
                            {{ auth()->user()->submission->submitted_at->format('d M Y, H:i') }}
                        </p>
                    </div>
                @endif

            
        
            {{-- Deadline Belum Lewat --}}
            @else
                {{-- Existing Submission --}}
                @if(auth()->user()->submission)
                    <div class="p-3 bg-blue-50 rounded text-sm">
                        <p class="font-semibold">Submission tersimpan:</p>
        
                        <a href="{{ auth()->user()->submission->drive_link }}"
                           target="_blank"
                           class="text-blue-600 underline break-all">
                            {{ auth()->user()->submission->drive_link }}
                        </a>
        
                        <p class="text-gray-500 mt-1">
                            Terakhir diperbarui:
                            {{ auth()->user()->submission->submitted_at->format('d M Y, H:i') }}
                        </p>
        
                        <p class="mt-1 text-blue-600 italic">
                            Kamu masih bisa mengedit submission sampai deadline
                        </p>
                    </div>
                    
                @endif
        
                {{-- Form --}}
                <form method="POST" action="{{ route('submission.store') }}" class="space-y-2">
                    @csrf
        
                    <label class="block text-sm font-medium">
                        Link Google Drive Submission
                    </label>
        
                    <input type="url"
                           name="drive_link"
                           required
                           class="w-full border rounded p-2"
                           placeholder="https://drive.google.com/..."
                           value="{{ auth()->user()->submission?->drive_link }}">
        
                    <button class="px-4 py-2 bg-blue-600 text-white rounded">
                        {{ auth()->user()->submission ? 'Perbarui Submission' : 'Kirim Submission' }}
                    </button>
                </form>
            @endif
        
            {{-- Status Seleksi --}}
            @if(auth()->user()->selection)
                <div class="pt-3 border-t text-sm font-semibold">
                    Status Seleksi:
                    <span class="{{ auth()->user()->selection->status === 'passed' ? 'text-green-600' : 'text-red-600' }}">
                        {{ strtoupper(auth()->user()->selection->status) }}
                    </span>
                </div>
            @endif
        
        </div>
        @endif
        
        {{-- 🗓 Schedule (Placeholder) --}}
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-lg font-semibold mb-2">🗓 Schedule</h2>
            <p class="text-gray-500 italic">
                Jadwal kompetisi akan ditampilkan di sini
            </p>
        </div>

        {{-- ⚙️ Pengaturan Akun --}}
        <div class="p-6 bg-white shadow rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-6 bg-white shadow rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-6 bg-white shadow rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>
</div>
@endsection
