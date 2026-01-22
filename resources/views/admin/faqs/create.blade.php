@extends('layouts.admin')

@section('title', 'Tambah FAQ')
@section('page-title', 'Tambah FAQ')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.faqs.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to FAQs
    </a>
</div>

<div class="max-w-2xl">
    <form method="POST" action="{{ route('admin.faqs.store') }}" class="space-y-6">
        @csrf

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">FAQ Information</h2>
            </div>
            <div class="p-6 space-y-6">
                <div>
                    <label for="question" class="block text-sm font-medium text-gray-700 mb-2">
                        Question <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="question" id="question" value="{{ old('question') }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question') border-red-500 @enderror" 
                           placeholder="Pertanyaan" required>
                    @error('question')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="answer" class="block text-sm font-medium text-gray-700 mb-2">
                        Answer <span class="text-red-500">*</span>
                    </label>
                    <textarea name="answer" id="answer" rows="5"
                              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('answer') border-red-500 @enderror" 
                              placeholder="Jawaban" required>{{ old('answer') }}</textarea>
                    @error('answer')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                
            </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-3">
            <a href="{{ route('admin.faqs.index') }}" 
               class="flex-1 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl text-center hover:bg-gray-200 transition">
                Cancel
            </a>
            <button type="submit" class="flex-1 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition">
                Create FAQ
            </button>
        </div>
    </form>
</div>
@endsection