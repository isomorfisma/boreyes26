@extends('layouts.admin')

@section('title', 'Edit Template: ' . $template->name)
@section('page-title', 'Edit Email Template')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.email.index') }}" class="inline-flex items-center text-gray-600 hover:text-[#0F4C82] font-garet transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Email Settings
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2">
        <form method="POST" action="{{ route('admin.email.templates.update', $template->id) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-helvetica font-black text-[#0F4C82]">{{ $template->name }}</h2>
                    <p class="text-sm text-gray-600 font-garet">Template key: <code class="bg-gray-100 px-2 py-0.5 rounded text-xs">{{ $template->key }}</code></p>
                </div>
                
                <div class="p-6 space-y-5">
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">Template Name</label>
                        <input type="text" name="name" value="{{ old('name', $template->name) }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>

                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">Email Subject</label>
                        <input type="text" name="subject" value="{{ old('subject', $template->subject) }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>

                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">Email Body (HTML)</label>
                        <textarea name="body" rows="15"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-mono text-sm">{{ old('body', $template->body) }}</textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" id="is_active"
                               {{ $template->is_active ? 'checked' : '' }}
                               class="w-4 h-4 text-[#0F4C82] border-gray-300 rounded focus:ring-[#6F97B6]">
                        <label for="is_active" class="ml-2 text-sm text-gray-700 font-garet">Template Active</label>
                    </div>
                </div>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('admin.email.index') }}" 
                   class="flex-1 py-3 bg-gray-100 text-gray-700 font-garet rounded-lg text-center hover:bg-gray-200 transition">
                    Cancel
                </a>
                <button type="submit" class="flex-1 py-3 bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
                    Save Template
                </button>
            </div>
        </form>
    </div>

    <!-- Available Variables -->
    <div class="space-y-6">
        <div class="bg-blue-50 rounded-lg border border-blue-200 p-6">
            <h3 class="font-helvetica font-bold text-blue-900 mb-3">Available Variables</h3>
            <p class="text-sm text-blue-800 font-garet mb-3">Use these in subject or body:</p>
            <div class="space-y-2">
                @foreach($template->variables ?? [] as $var)
                <code class="block px-3 py-2 bg-white rounded text-sm text-blue-900 border border-blue-200 font-mono">
                    {{"{"}}{{ $var }}{{"}"}}
                </code>
                @endforeach
            </div>
        </div>

        <div class="bg-white rounded-lg shadow border border-gray-200 p-6">
            <h3 class="font-helvetica font-bold text-[#0F4C82] mb-3">Preview</h3>
            <div class="bg-gray-50 rounded-lg p-4 text-sm">
                <div class="border-b border-gray-200 pb-2 mb-2">
                    <strong class="font-garet">Subject:</strong> <span class="font-garet">{{ $template->subject }}</span>
                </div>
                <div class="prose prose-sm max-w-none font-garet">
                    {!! $template->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection