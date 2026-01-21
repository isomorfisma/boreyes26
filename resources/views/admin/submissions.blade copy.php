@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12">
    <div class="bg-white p-6 shadow rounded">

        <h1 class="text-xl font-bold mb-4">📂 Review Submission</h1>

        <table class="w-full border text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Tim</th>
                    <th class="border p-2">Kompetisi</th>
                    <th class="border p-2">Submission</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr class="text-center">
                    <td class="border p-2">{{ $user->team_name }}</td>
                    <td class="border p-2">{{ $user->competition->name }}</td>

                    <td class="border p-2">
                        <a href="{{ $user->submission->drive_link }}"
                           class="text-blue-600 underline"
                           target="_blank">
                            Lihat
                        </a>
                    </td>

                    <td class="border p-2">
                        {{ $user->selection?->status ?? 'Belum dinilai' }}
                    </td>

                    <td class="border p-2 space-x-2">
                        <form method="POST" action="{{ route('admin.submissions.pass', $user) }}" class="inline">
                            @csrf
                            <button class="bg-green-600 text-white px-3 py-1 rounded">
                                Lolos
                            </button>
                        </form>

                        <form method="POST" action="{{ route('admin.submissions.fail', $user) }}" class="inline">
                            @csrf
                            <button class="bg-red-600 text-white px-3 py-1 rounded">
                                Tidak
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>
@endsection
