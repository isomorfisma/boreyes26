@extends('layouts.admin')

@section('title', 'Essay Detail - ' . $essay->team->name)
@section('page-title', 'Essay Detail')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.essays.index') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-[#0F4C82] font-garet">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali ke List
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Left Column - Essay Info -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Team & Competition Info -->
        <div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden">
            <div class="bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-4">
                <h2 class="text-lg font-helvetica font-black text-white">Informasi Tim</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs text-gray-500 font-garet">Nama Tim</label>
                        <p class="font-helvetica font-bold text-[#0F4C82] text-lg">{{ $essay->team->name }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 font-garet">Kode Tim</label>
                        <p class="font-mono text-gray-700">{{ $essay->team->code }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 font-garet">Kompetisi</label>
                        <p class="text-sm text-gray-700 font-garet">{{ $essay->team->competition->name }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 font-garet">Institusi</label>
                        <p class="text-sm text-gray-700 font-garet">{{ $essay->team->institution }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Essay Submission -->
        <div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden">
            <div class="bg-gray-50 p-4 border-b-2 border-gray-100">
                <h2 class="text-lg font-helvetica font-black text-[#0F4C82]">Essay Submission</h2>
            </div>
            <div class="p-6 space-y-4">
                <!-- Submit Time -->
                <div>
                    <label class="text-xs text-gray-500 font-garet block mb-1">Waktu Submit</label>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-sm text-gray-700 font-garet">{{ $essay->created_at->format('d M Y, H:i') }} WIB</span>
                        <span class="text-xs text-gray-400 font-garet">({{ $essay->created_at->diffForHumans() }})</span>
                    </div>
                </div>

                <!-- Google Drive Link -->
                <div>
                    <label class="text-xs text-gray-500 font-garet block mb-2">Link Google Drive</label>
                    <div class="flex items-center space-x-2">
                        <input type="text" 
                               value="{{ $essay->drive_link }}" 
                               readonly
                               class="flex-1 px-4 py-2 bg-gray-50 border-2 border-gray-200 rounded-lg text-sm font-mono text-gray-600">
                        <a href="{{ $essay->drive_link }}" 
                           target="_blank"
                           class="px-6 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-bold text-sm rounded-lg hover:shadow-lg transition">
                            Buka
                        </a>
                    </div>
                </div>

                <!-- Notes from Team -->
                @if($essay->notes)
                <div>
                    <label class="text-xs text-gray-500 font-garet block mb-2">Catatan dari Tim</label>
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <p class="text-sm text-blue-900 font-garet">{{ $essay->notes }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Grading Form -->
        <div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden">
            <div class="bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-4">
                <h2 class="text-lg font-helvetica font-black text-white">Form Penilaian</h2>
            </div>
            <form method="POST" action="{{ route('admin.essays.grade', $essay) }}" class="p-6 space-y-6">
                @csrf

                <!-- Score -->
                <div>
                    <label for="score" class="block text-sm font-helvetica font-bold text-[#0F4C82] mb-2">
                        Score <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                           name="score" 
                           id="score"
                           value="{{ old('score', $essay->score) }}"
                           min="0"
                           max="100"
                           step="0.1"
                           placeholder="0 - 100"
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent text-lg font-helvetica font-bold @error('score') border-red-500 @enderror"
                           required>
                    @error('score')
                    <p class="mt-2 text-sm text-red-600 font-garet">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-sm font-helvetica font-bold text-[#0F4C82] mb-2">
                        Status <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center p-4 border-2 rounded-xl cursor-pointer transition {{ old('status', $essay->status) === 'passed' ? 'border-green-500 bg-green-50' : 'border-gray-200 hover:border-green-300' }}">
                            <input type="radio" 
                                   name="status" 
                                   value="passed" 
                                   {{ old('status', $essay->status) === 'passed' ? 'checked' : '' }}
                                   class="w-5 h-5 text-green-600 focus:ring-green-500"
                                   required>
                            <div class="ml-3">
                                <p class="font-helvetica font-bold text-green-700">Lolos</p>
                                <p class="text-xs text-green-600 font-garet">Tim lolos pre-elimination</p>
                            </div>
                        </label>

                        <label class="flex items-center p-4 border-2 rounded-xl cursor-pointer transition {{ old('status', $essay->status) === 'failed' ? 'border-red-500 bg-red-50' : 'border-gray-200 hover:border-red-300' }}">
                            <input type="radio" 
                                   name="status" 
                                   value="failed" 
                                   {{ old('status', $essay->status) === 'failed' ? 'checked' : '' }}
                                   class="w-5 h-5 text-red-600 focus:ring-red-500"
                                   required>
                            <div class="ml-3">
                                <p class="font-helvetica font-bold text-red-700">Tidak Lolos</p>
                                <p class="text-xs text-red-600 font-garet">Tim tidak lolos</p>
                            </div>
                        </label>
                    </div>
                    @error('status')
                    <p class="mt-2 text-sm text-red-600 font-garet">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Admin Feedback -->
                <div>
                    <label for="admin_feedback" class="block text-sm font-helvetica font-bold text-[#0F4C82] mb-2">
                        Feedback untuk Tim <span class="text-gray-400 font-normal">(Opsional)</span>
                    </label>
                    <textarea name="admin_feedback" 
                              id="admin_feedback"
                              rows="5"
                              placeholder="Berikan feedback untuk tim mengenai essay mereka..."
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet text-sm @error('admin_feedback') border-red-500 @enderror">{{ old('admin_feedback', $essay->admin_feedback) }}</textarea>
                    @error('admin_feedback')
                    <p class="mt-2 text-sm text-red-600 font-garet">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t-2 border-gray-100">
                    <button type="submit" 
                            class="px-8 py-3 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-xl hover:shadow-lg transform hover:scale-105 transition-all">
                        Simpan Penilaian
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Column - Status & History -->
    <div class="space-y-6">
        <!-- Current Status -->
        <div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden">
            <div class="bg-gray-50 p-4 border-b-2 border-gray-100">
                <h3 class="text-sm font-helvetica font-black text-[#0F4C82]">Status Saat Ini</h3>
            </div>
            <div class="p-6">
                <div class="text-center mb-4">
                    @if($essay->status === 'pending')
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-amber-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    @elseif($essay->status === 'passed')
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    @else
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    @endif

                    <span class="inline-flex items-center px-4 py-2 {{ $essay->status_badge }} text-sm font-helvetica font-black rounded-lg border-2">
                        {{ $essay->status_label }}
                    </span>
                </div>

                @if($essay->isScored())
                <div class="bg-gradient-to-br from-[#0F4C82]/5 to-[#6F97B6]/5 rounded-xl p-4 text-center border-2 border-[#0F4C82]/10 mb-4">
                    <p class="text-xs text-gray-500 font-garet mb-1">Current Score</p>
                    <p class="text-4xl font-helvetica font-black text-[#0F4C82]">{{ number_format($essay->score, 1) }}</p>
                    <p class="text-sm text-gray-500 font-garet">/100</p>
                </div>
                @endif

                @if($essay->isScored())
                <div class="space-y-2">
                    <div class="flex justify-between text-xs">
                        <span class="text-gray-500 font-garet">Dinilai oleh:</span>
                        <span class="text-gray-700 font-garet font-medium">{{ $essay->scorer->name ?? 'Admin' }}</span>
                    </div>
                    <div class="flex justify-between text-xs">
                        <span class="text-gray-500 font-garet">Waktu penilaian:</span>
                        <span class="text-gray-700 font-garet font-medium">{{ $essay->scored_at->format('d M Y, H:i') }}</span>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white border-2 border-gray-100 rounded-xl overflow-hidden">
            <div class="bg-gray-50 p-4 border-b-2 border-gray-100">
                <h3 class="text-sm font-helvetica font-black text-[#0F4C82]">Quick Actions</h3>
            </div>
            <div class="p-4 space-y-2">
                <a href="{{ route('admin.teams.show', $essay->team) }}" 
                   class="block w-full px-4 py-2.5 text-center bg-gray-50 border-2 border-gray-200 text-[#0F4C82] font-helvetica font-bold text-sm rounded-lg hover:bg-gray-100 transition">
                    Lihat Detail Tim
                </a>
                <a href="{{ $essay->drive_link }}" 
                   target="_blank"
                   class="block w-full px-4 py-2.5 text-center bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-bold text-sm rounded-lg hover:shadow-lg transition">
                    Buka Essay di Drive
                </a>
            </div>
        </div>
    </div>
</div>
@endsection