@extends('layouts.admin')

@section('title', 'Edit SEO: ' . $seoSetting->page_name)
@section('page-title', 'Edit SEO Settings')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.seo.settings') }}" class="inline-flex items-center text-gray-600 hover:text-[#1B4965] transition font-semibold">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to SEO Settings
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Form -->
    <div class="lg:col-span-2">
        <form method="POST" action="{{ route('admin.seo.update', $seoSetting->id) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Page Info -->
            <div class="bg-gradient-to-br from-[#1B4965] to-[#2D5F3F] rounded-2xl shadow-lg p-6 text-white">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <h2 class="text-2xl font-bold">{{ $seoSetting->page_name }}</h2>
                </div>
                <p class="text-white/80 text-sm font-mono">Page key: {{ $seoSetting->page_key }}</p>
            </div>

            <!-- Meta Title -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
                <label class="block text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                    </svg>
                    Meta Title
                    <span class="ml-auto text-xs text-gray-400 font-normal">(max 70 chars)</span>
                </label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $seoSetting->meta_title) }}"
                       maxlength="70"
                       id="metaTitle"
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#1B4965] focus:border-transparent transition @error('meta_title') border-[#EF4444] @enderror"
                       placeholder="Enter page title for search results">
                <div class="flex items-center justify-between mt-2">
                    <div class="flex-1 bg-gray-200 rounded-full h-2 mr-3">
                        <div id="titleProgress" class="bg-[#1B4965] h-2 rounded-full transition-all" style="width: {{ (strlen($seoSetting->meta_title ?? '') / 70) * 100 }}%"></div>
                    </div>
                    <p class="text-sm font-semibold" id="titleCount">
                        <span class="text-[#1B4965]">{{ strlen($seoSetting->meta_title ?? '') }}</span>
                        <span class="text-gray-400">/70</span>
                    </p>
                </div>
                @error('meta_title')
                <p class="text-sm text-[#EF4444] mt-2 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ $message }}
                </p>
                @enderror
            </div>

            <!-- Meta Description -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
                <label class="block text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#C1703F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                    Meta Description
                    <span class="ml-auto text-xs text-gray-400 font-normal">(max 160 chars)</span>
                </label>
                <textarea name="meta_description" rows="3" maxlength="160"
                          id="metaDescription"
                          class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#C1703F] focus:border-transparent transition @error('meta_description') border-[#EF4444] @enderror"
                          placeholder="Enter description for search results">{{ old('meta_description', $seoSetting->meta_description) }}</textarea>
                <div class="flex items-center justify-between mt-2">
                    <div class="flex-1 bg-gray-200 rounded-full h-2 mr-3">
                        <div id="descProgress" class="bg-[#C1703F] h-2 rounded-full transition-all" style="width: {{ (strlen($seoSetting->meta_description ?? '') / 160) * 100 }}%"></div>
                    </div>
                    <p class="text-sm font-semibold" id="descCount">
                        <span class="text-[#C1703F]">{{ strlen($seoSetting->meta_description ?? '') }}</span>
                        <span class="text-gray-400">/160</span>
                    </p>
                </div>
                @error('meta_description')
                <p class="text-sm text-[#EF4444] mt-2 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ $message }}
                </p>
                @enderror
            </div>

            <!-- Meta Keywords -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
                <label class="block text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#5FA8D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    Meta Keywords
                    <span class="ml-auto text-xs text-gray-400 font-normal">(comma separated)</span>
                </label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $seoSetting->meta_keywords) }}"
                       placeholder="keyword1, keyword2, keyword3"
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#5FA8D3] focus:border-transparent transition">
                <p class="text-xs text-gray-500 mt-2">💡 Tip: Focus on 3-5 relevant keywords</p>
            </div>

            <!-- Canonical URL -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
                <label class="block text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#2D5F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                    Canonical URL
                </label>
                <input type="url" name="canonical_url" value="{{ old('canonical_url', $seoSetting->canonical_url) }}"
                       placeholder="https://boreyes.com/page"
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#2D5F3F] focus:border-transparent transition">
                <p class="text-xs text-gray-500 mt-2">💡 Tip: Use to prevent duplicate content issues</p>
            </div>

            <!-- OG Image -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
                <label class="block text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#CAA882]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    OG Image (Social Share Image)
                </label>
                @if($seoSetting->og_image)
                <div class="mb-4 p-3 bg-[#F5F1E8] rounded-xl">
                    <p class="text-xs text-gray-600 mb-2 font-semibold">Current Image:</p>
                    <img src="{{ Storage::url($seoSetting->og_image) }}" class="h-40 rounded-lg shadow-md border-2 border-white">
                </div>
                @endif
                <input type="file" name="og_image" accept="image/*"
                       class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-xl hover:border-[#CAA882] transition file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-[#CAA882]/10 file:text-[#CAA882] hover:file:bg-[#CAA882]/20 cursor-pointer">
                <p class="text-xs text-gray-500 mt-2">📐 Recommended: 1200x630 pixels | Max: 2MB</p>
            </div>

            <!-- Is Indexable -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
                <div class="flex items-start">
                    <input type="checkbox" name="is_indexable" value="1" id="is_indexable"
                           {{ old('is_indexable', $seoSetting->is_indexable) ? 'checked' : '' }}
                           class="w-5 h-5 mt-1 text-[#10B981] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#10B981]">
                    <label for="is_indexable" class="ml-3">
                        <span class="block font-bold text-gray-900 mb-1">Allow Search Engine Indexing</span>
                        <span class="text-sm text-gray-600">When enabled, search engines can index and show this page in search results</span>
                    </label>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3">
                <a href="{{ route('admin.seo.settings') }}" 
                   class="flex-1 py-4 bg-[#F5F1E8] text-gray-700 font-bold rounded-xl text-center hover:bg-[#E5E1D8] transition border-2 border-gray-200">
                    Cancel
                </a>
                <button type="submit" class="flex-1 py-4 bg-gradient-to-r from-[#1B4965] to-[#2D5F3F] text-white font-bold rounded-xl hover:from-[#153A52] hover:to-[#234A31] transition shadow-lg hover:shadow-xl">
                    💾 Save Changes
                </button>
            </div>
        </form>
    </div>

    <!-- Preview Panel -->
    <div class="lg:col-span-1 space-y-6">
        <!-- Google Search Preview -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 sticky top-6">
            <h3 class="font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Google Search Preview
            </h3>
            <div class="bg-[#F5F1E8] rounded-xl p-4 border border-gray-200">
                <div class="text-[#1B4965] text-lg font-medium hover:underline cursor-pointer mb-1" id="previewTitle">
                    {{ $seoSetting->meta_title ?? 'Page Title' }}
                </div>
                <div class="text-[#2D5F3F] text-xs mb-2 font-mono">{{ url('/') }}/{{ $seoSetting->page_key }}</div>
                <div class="text-gray-600 text-sm leading-relaxed" id="previewDesc">
                    {{ $seoSetting->meta_description ?? 'Page description will appear here...' }}
                </div>
            </div>
        </div>

        <!-- Social Share Preview -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">
            <h3 class="font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-[#5FA8D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                </svg>
                Social Share Preview
            </h3>
            <div class="border-2 border-gray-200 rounded-xl overflow-hidden">
                @if($seoSetting->og_image)
                <img src="{{ Storage::url($seoSetting->og_image) }}" class="w-full h-40 object-cover">
                @else
                <div class="w-full h-40 bg-gradient-to-br from-[#1B4965] to-[#5FA8D3] flex items-center justify-center">
                    <svg class="w-12 h-12 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                @endif
                <div class="p-3 bg-white">
                    <p class="text-xs text-gray-500 uppercase mb-1">boreyes.com</p>
                    <p class="font-bold text-gray-900 text-sm line-clamp-1" id="socialTitle">{{ $seoSetting->meta_title ?? 'Page Title' }}</p>
                    <p class="text-xs text-gray-600 line-clamp-2 mt-1" id="socialDesc">{{ $seoSetting->meta_description ?? 'Description' }}</p>
                </div>
            </div>
        </div>

        <!-- SEO Checklist -->
        <div class="bg-gradient-to-br from-[#10B981] to-[#2D5F3F] rounded-2xl shadow-md p-6 text-white">
            <h3 class="font-bold mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
                SEO Checklist
            </h3>
            <ul class="space-y-2 text-sm">
                <li class="flex items-start">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Unique, descriptive title
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Compelling meta description
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Relevant keywords included
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Eye-catching OG image
                </li>
            </ul>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Live preview updates
    const metaTitleInput = document.getElementById('metaTitle');
    const metaDescInput = document.getElementById('metaDescription');
    
    metaTitleInput?.addEventListener('input', function() {
        const length = this.value.length;
        document.getElementById('previewTitle').textContent = this.value || 'Page Title';
        document.getElementById('socialTitle').textContent = this.value || 'Page Title';
        document.getElementById('titleCount').innerHTML = `<span class="text-[#1B4965]">${length}</span><span class="text-gray-400">/70</span>`;
        document.getElementById('titleProgress').style.width = `${(length / 70) * 100}%`;
    });
    
    metaDescInput?.addEventListener('input', function() {
        const length = this.value.length;
        document.getElementById('previewDesc').textContent = this.value || 'Page description will appear here...';
        document.getElementById('socialDesc').textContent = this.value || 'Description';
        document.getElementById('descCount').innerHTML = `<span class="text-[#C1703F]">${length}</span><span class="text-gray-400">/160</span>`;
        document.getElementById('descProgress').style.width = `${(length / 160) * 100}%`;
    });
</script>
@endpush
@endsection