@extends('layouts.admin')

@section('title', 'SEO Settings Management')
@section('page-title', 'SEO Settings')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
    <div>
        <h2 class="text-2xl font-helvetica font-black tracking-tighter text-[#0F4C82]">SEO Settings Management</h2>
        <p class="text-sm text-gray-600 font-garet">Manage SEO meta tags for all pages</p>
    </div>
    <a href="{{ route('admin.seo.index') }}" class="px-4 py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-lg hover:opacity-90 transition flex items-center justify-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
        View Analytics
    </a>
</div>

<div class="bg-white rounded-lg shadow-lg border border-gray-100 overflow-hidden mb-6">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF]">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase tracking-wider">Page</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase tracking-wider">Meta Title</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase tracking-wider">Meta Description</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase tracking-wider">Indexable</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($seoSettings as $seo)
                <tr class="hover:bg-[#D3EB9F]/10 transition">
                    <td class="px-4 py-3">
                        <div class="font-helvetica font-black text-sm text-[#0F4C82]">{{ $seo->page_name }}</div>
                        <div class="text-xs text-gray-500 font-mono font-garet">{{ $seo->page_key }}</div>
                    </td>
                    <td class="px-4 py-3">
                        <div class="text-gray-900 text-sm font-garet">{{ Str::limit($seo->meta_title, 40) }}</div>
                        <div class="flex items-center mt-1">
                            <div class="flex-1 bg-gray-200 rounded-full h-1.5">
                                <div class="bg-[#0F4C82] h-1.5 rounded-full" style="width: {{ min((strlen($seo->meta_title ?? '') / 70) * 100, 100) }}%"></div>
                            </div>
                            <span class="text-xs text-gray-400 ml-2 font-garet">{{ strlen($seo->meta_title ?? '') }}/70</span>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <div class="text-gray-600 text-sm font-garet">{{ Str::limit($seo->meta_description, 50) }}</div>
                        <div class="flex items-center mt-1">
                            <div class="flex-1 bg-gray-200 rounded-full h-1.5">
                                <div class="bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] h-1.5 rounded-full" style="width: {{ min((strlen($seo->meta_description ?? '') / 160) * 100, 100) }}%"></div>
                            </div>
                            <span class="text-xs text-gray-400 ml-2 font-garet">{{ strlen($seo->meta_description ?? '') }}/160</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if($seo->is_indexable)
                        <span class="inline-flex items-center px-2 py-1 bg-[#D3EB9F]/20 text-[#0F4C82] text-xs font-helvetica font-black rounded-full border border-[#D3EB9F]">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Yes
                        </span>
                        @else
                        <span class="inline-flex items-center px-2 py-1 bg-gray-100 text-gray-600 text-xs font-helvetica font-black rounded-full border border-gray-300">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            No
                        </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="{{ route('admin.seo.edit', $seo->id) }}" 
                           class="inline-flex items-center px-3 py-1.5 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-helvetica font-black rounded-lg hover:bg-[#0F4C82] hover:text-white transition">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="bg-gradient-to-br from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF] rounded-lg shadow-lg p-5">
        <h3 class="font-helvetica font-black text-lg text-[#0F4C82] mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            SEO Best Practices
        </h3>
        <ul class="space-y-3">
            <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0 text-[#0F4C82]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-garet text-[#0F4C82]"><strong class="font-helvetica font-black">Meta Title:</strong> Keep it under 70 characters for best display in search results</span>
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0 text-[#0F4C82]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-garet text-[#0F4C82]"><strong class="font-helvetica font-black">Meta Description:</strong> Keep it under 160 characters, include keywords naturally</span>
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0 text-[#0F4C82]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-garet text-[#0F4C82]"><strong class="font-helvetica font-black">Keywords:</strong> Separate with commas, focus on relevant terms</span>
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0 text-[#0F4C82]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-garet text-[#0F4C82]"><strong class="font-helvetica font-black">OG Image:</strong> Recommended size 1200x630 pixels for social media sharing</span>
            </li>
        </ul>
    </div>

    <div class="bg-white rounded-lg shadow-lg border border-gray-100 p-5">
        <h3 class="font-helvetica font-black text-lg text-[#0F4C82] mb-4">SEO Health Score</h3>
        <div class="space-y-4">
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-600 font-garet">Pages with Complete SEO</span>
                    <span class="font-helvetica font-black text-[#0F4C82]">{{ $completeSeoPages }}/{{ $totalSeoPages }}</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] h-2.5 rounded-full transition-all" style="width: {{ $totalSeoPages > 0 ? ($completeSeoPages / $totalSeoPages * 100) : 0 }}%"></div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-600 font-garet">Indexable Pages</span>
                    <span class="font-helvetica font-black text-[#0F4C82]">{{ $indexablePages }}/{{ $totalSeoPages }}</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-[#6F97B6] h-2.5 rounded-full transition-all" style="width: {{ $totalSeoPages > 0 ? ($indexablePages / $totalSeoPages * 100) : 0 }}%"></div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-600 font-garet">Pages with OG Image</span>
                    <span class="font-helvetica font-black text-[#0F4C82]">{{ $pagesWithOgImage }}/{{ $totalSeoPages }}</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-[#8CCDCF] h-2.5 rounded-full transition-all" style="width: {{ $totalSeoPages > 0 ? ($pagesWithOgImage / $totalSeoPages * 100) : 0 }}%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection