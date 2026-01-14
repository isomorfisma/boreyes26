@extends('layouts.app')

@section('title', 'Submit Pre-Elimination Essay')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] text-white pt-24 sm:pt-28 md:pt-32 pb-20 sm:pb-24 overflow-hidden">
    <!-- Grunge Texture -->
    <div class="absolute inset-0 opacity-15 mix-blend-multiply pointer-events-none" style="background-image: url('/assets/images/grunge-texture.png'); background-size: cover; background-position: center;"></div>
    
    <!-- Decorative Elements -->
    <div class="hidden md:block absolute top-20 right-20 w-16 h-16 opacity-40">
        <img src="{{ asset('assets/svg/SPARKLE_IJO.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_12px_rgba(211,235,159,0.8)] animate-pulse">
    </div>
    <div class="hidden lg:block absolute bottom-32 left-20 w-14 h-14 opacity-30">
        <img src="{{ asset('assets/svg/SPARKLE_BIRU.svg') }}" alt="Sparkle" class="w-full h-full drop-shadow-[0_0_10px_rgba(111,151,182,0.8)] animate-bounce" style="animation-duration: 3s;">
    </div>
    
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <!-- Breadcrumb -->
         <div class="flex items-center space-x-2 text-[#0F4C82] mb-3 sm:mb-5 text-sm font-garet bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full inline-flex shadow-lg">
            <a href="{{ route('dashboard') }}"class="hover:text-[#6F97B6] transition font-bold">Dashboard</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-[#0F4C82] font-bold">Submit Essay</span>
        </div>
        
        <!-- Title -->
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-helvetica font-black tracking-tighter mb-4 leading-tight">
                Submit Pre-Elimination Essay
            </h1>
            <p class="text-white/90 text-base sm:text-lg lg:text-xl font-garet font-medium flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
                {{ $team->competition->name }}
            </p>
        </div>
    </div>
    
    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 10C96 20 192 40 288 46.7C384 53 480 47 576 40C672 33 768 27 864 30C960 33 1056 47 1152 50C1248 53 1344 47 1392 43L1440 40V80H0V0Z" fill="#F8FBFC"/>
        </svg>
    </div>
</section>

<!-- Form Section -->
<section class="py-12 sm:py-16 bg-[#F8FBFC] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Info Card -->
        <div class="relative bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-2xl sm:rounded-3xl p-6 sm:p-8 mb-8 overflow-hidden shadow-2xl border-2 border-[#D3EB9F]/30">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px;"></div>
            <div class="relative z-10">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-helvetica font-black text-white text-lg sm:text-xl mb-3">Petunjuk Submit Essay</h3>
                        <div class="space-y-2.5 text-white/90 text-sm sm:text-base font-garet">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Upload essay Anda ke Google Drive terlebih dahulu</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Pastikan akses file: <strong>"Anyone with the link can view"</strong></span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Salin link Google Drive dan paste di form</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Essay hanya bisa disubmit <strong>1 KALI</strong> - pastikan sudah final</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#D3EB9F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Hasil penilaian akan keluar dalam 3-7 hari kerja</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden border-2 border-[#D3EB9F]/30">
            <!-- Header -->
            <div class="relative bg-gradient-to-r from-[#0F4C82] to-[#6F97B6] p-6 sm:p-8 overflow-hidden">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 20px 20px;"></div>
                <div class="relative z-10 flex items-center space-x-4">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl sm:text-2xl font-helvetica font-black text-white">Form Submission</h2>
                        <p class="text-white/90 text-sm sm:text-base font-garet mt-1">{{ $team->name }}</p>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('essay.store') }}" class="p-6 sm:p-8 lg:p-10 space-y-8">
                @csrf

                <!-- Google Drive Link -->
                <div>
                    <label for="drive_link" class="block text-base font-helvetica font-black text-[#0F4C82] mb-3">
                        Link Google Drive <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </div>
                        <input type="url" 
                               name="drive_link" 
                               id="drive_link"
                               value="{{ old('drive_link') }}"
                               placeholder="https://drive.google.com/file/d/..."
                               class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-[#6F97B6]/20 focus:border-[#6F97B6] font-garet text-base transition-all @error('drive_link') border-red-500 @enderror"
                               required>
                    </div>
                    @error('drive_link')
                    <p class="mt-2.5 text-sm text-red-600 font-garet flex items-center">
                        <svg class="w-4 h-4 mr-1.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $message }}
                    </p>
                    @enderror
                    <p class="mt-2.5 text-sm text-gray-500 font-garet">
                        Contoh: https://drive.google.com/file/d/1abc... atau https://docs.google.com/document/d/1abc...
                    </p>
                </div>

                <!-- Notes (Optional) -->
                <div>
                    <label for="notes" class="block text-base font-helvetica font-black text-[#0F4C82] mb-3">
                        Catatan Tambahan <span class="text-gray-400 font-garet font-normal text-sm">(Opsional)</span>
                    </label>
                    <textarea name="notes" 
                              id="notes"
                              rows="5"
                              maxlength="500"
                              placeholder="Tambahkan catatan jika diperlukan (maksimal 500 karakter)..."
                              class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-[#6F97B6]/20 focus:border-[#6F97B6] font-garet text-base resize-none transition-all @error('notes') border-red-500 @enderror">{{ old('notes') }}</textarea>
                    @error('notes')
                    <p class="mt-2.5 text-sm text-red-600 font-garet flex items-center">
                        <svg class="w-4 h-4 mr-1.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="mt-2.5 flex items-center justify-between text-sm">
                        <span class="text-gray-500 font-garet">Maksimal 500 karakter</span>
                        <span class="text-gray-400 font-garet" x-data="{ count: {{ strlen(old('notes', '')) }} }">
                            <span x-text="count"></span>/500
                        </span>
                    </div>
                </div>

                <!-- Warning Box -->
                <div class="relative bg-gradient-to-br from-amber-50 to-amber-100 border-2 border-amber-300 rounded-2xl p-6 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-amber-200/30 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative z-10 flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-amber-400 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-helvetica font-black text-amber-900 text-base mb-2">⚠️ Perhatian Penting!</h4>
                            <p class="text-sm text-amber-800 font-garet leading-relaxed">
                                Essay hanya bisa disubmit <strong>SATU KALI</strong>. Pastikan link sudah benar dan file sudah final sebelum submit. Setelah submit, Anda <strong>TIDAK BISA</strong> mengubah atau mengganti file.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-6 border-t-2 border-gray-100">
                    <a href="{{ route('dashboard') }}" 
                       class="w-full sm:w-auto px-8 py-4 text-gray-600 hover:text-[#0F4C82] font-helvetica font-bold text-base rounded-xl border-2 border-gray-200 hover:border-[#0F4C82] hover:bg-gray-50 transition-all text-center">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali
                        </span>
                    </a>
                    <button type="submit" 
                            class="w-full sm:w-auto px-10 py-4 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black text-base rounded-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            Submit Essay
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Help Section -->
        <div class="mt-8 bg-white border-2 border-gray-100 rounded-2xl p-6 sm:p-8 shadow-lg">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-helvetica font-black text-[#0F4C82] text-lg mb-3">Butuh Bantuan?</h3>
                    <p class="text-sm text-gray-600 font-garet mb-4">
                        Jika mengalami kesulitan dalam submit essay, hubungi tim kami:
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="mailto:boreyes@speunpad.com" class="inline-flex items-center px-5 py-3 bg-[#0F4C82]/5 hover:bg-[#0F4C82]/10 text-[#0F4C82] rounded-xl font-garet text-sm font-medium transition-all">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            boreyes@speunpad.com
                        </a>
                        <a href="https://wa.me/62xxx" target="_blank" class="inline-flex items-center px-5 py-3 bg-green-50 hover:bg-green-100 text-green-700 rounded-xl font-garet text-sm font-medium transition-all">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            WhatsApp Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('notes');
    if (textarea) {
        textarea.addEventListener('input', function() {
            const count = this.value.length;
            const counter = document.querySelector('[x-data] span');
            if (counter) {
                counter.textContent = count;
            }
        });
    }
});
</script>
@endpush
@endsection