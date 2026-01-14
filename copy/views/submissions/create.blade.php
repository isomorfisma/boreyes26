@extends('layouts.app')

@section('title', 'Submit Work - ' . $team->name)

@section('content')
<!-- Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 text-white/80 mb-4 text-sm">
            <a href="{{ route('dashboard') }}" class="hover:text-white">Dashboard</a>
            <span>/</span>
            <a href="{{ route('teams.show', $team->code) }}" class="hover:text-white">{{ $team->name }}</a>
            <span>/</span>
            <span class="text-white">New Submission</span>
        </div>
        <h1 class="text-3xl font-bold">Submit Your Work</h1>
        <p class="text-white/80 mt-2">{{ $team->competition->name }}</p>
    </div>
</section>

<section class="py-12 bg-gray-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-xl font-bold text-gray-900">New Submission</h2>
                <p class="text-gray-500 text-sm mt-1">Upload your competition work</p>
            </div>

            <form method="POST" 
                  action="{{ route('submissions.store', $team->code) }}" 
                  enctype="multipart/form-data"
                  class="p-6 space-y-6">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Submission Title <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           name="title" 
                           id="title"
                           value="{{ old('title') }}"
                           placeholder="e.g., Final Paper - Smart Competition"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                           required>
                    @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        Description <span class="text-gray-400">(Optional)</span>
                    </label>
                    <textarea name="description" 
                              id="description"
                              rows="4"
                              placeholder="Brief description of your submission..."
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-2">
                        Upload File <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-blue-400 transition">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none">
                                    <span>Upload a file</span>
                                    <input id="file" 
                                           name="file" 
                                           type="file" 
                                           class="sr-only"
                                           accept=".pdf,.doc,.docx,.ppt,.pptx,.zip,.rar"
                                           required>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PDF, DOC, DOCX, PPT, PPTX, ZIP, RAR up to 25MB</p>
                        </div>
                    </div>
                    @error('file')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h4 class="font-medium text-blue-800 mb-2">📌 Submission Guidelines</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>• Make sure your file is complete and final</li>
                        <li>• Use clear naming convention for your files</li>
                        <li>• Submissions cannot be edited after upload</li>
                        <li>• Maximum file size is 25MB</li>
                    </ul>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <a href="{{ route('teams.show', $team->code) }}" 
                       class="text-gray-600 hover:text-gray-800 font-medium">
                        ← Cancel
                    </a>
                    <button type="submit" 
                            class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                        Submit Work
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection