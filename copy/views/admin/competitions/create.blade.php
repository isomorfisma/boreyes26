@extends('layouts.admin')

@section('title', 'Create Competition')
@section('page-title', 'Create Competition')

@section('content')
<!-- Back Button -->
<div class="mb-6">
    <a href="{{ route('admin.competitions.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Competitions
    </a>
</div>

<form method="POST" action="{{ route('admin.competitions.store') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Basic Info -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Basic Information</h2>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Competition Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                               placeholder="e.g., Smart Competition 2026" required>
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Category <span class="text-red-500">*</span>
                        </label>
                        <select name="category_id" id="category_id"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('category_id') border-red-500 @enderror" required>
                            <option value="">Select Category</option>
                            @foreach($categories ?? [] as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description <span class="text-red-500">*</span>
                        </label>
                        <textarea name="description" id="description" rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror"
                                  placeholder="Describe the competition..." required>{{ old('description') }}</textarea>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="requirements" class="block text-sm font-medium text-gray-700 mb-2">
                            Requirements
                        </label>
                        <textarea name="requirements" id="requirements" rows="3"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                  placeholder="List the requirements...">{{ old('requirements') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Schedule -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Schedule</h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="registration_start" class="block text-sm font-medium text-gray-700 mb-2">
                                Registration Start <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="registration_start" id="registration_start" 
                                   value="{{ old('registration_start') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('registration_start') border-red-500 @enderror" required>
                            @error('registration_start')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="registration_end" class="block text-sm font-medium text-gray-700 mb-2">
                                Registration End <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="registration_end" id="registration_end" 
                                   value="{{ old('registration_end') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('registration_end') border-red-500 @enderror" required>
                            @error('registration_end')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="competition_start" class="block text-sm font-medium text-gray-700 mb-2">
                                Competition Start <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="competition_start" id="competition_start" 
                                   value="{{ old('competition_start') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('competition_start') border-red-500 @enderror" required>
                            @error('competition_start')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="competition_end" class="block text-sm font-medium text-gray-700 mb-2">
                                Competition End <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="competition_end" id="competition_end" 
                                   value="{{ old('competition_end') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('competition_end') border-red-500 @enderror" required>
                            @error('competition_end')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Settings -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Team Settings</h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div>
                            <label for="min_team_members" class="block text-sm font-medium text-gray-700 mb-2">
                                Min Team Members
                            </label>
                            <input type="number" name="min_team_members" id="min_team_members" 
                                   value="{{ old('min_team_members', 1) }}" min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="max_team_members" class="block text-sm font-medium text-gray-700 mb-2">
                                Max Team Members
                            </label>
                            <input type="number" name="max_team_members" id="max_team_members" 
                                   value="{{ old('max_team_members', 3) }}" min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="max_participants" class="block text-sm font-medium text-gray-700 mb-2">
                                Max Teams (Quota)
                            </label>
                            <input type="number" name="max_participants" id="max_participants" 
                                   value="{{ old('max_participants') }}" min="0"
                                   placeholder="Leave empty for unlimited"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Status & Pricing -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Status & Pricing</h2>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                            Status
                        </label>
                        <select name="status" id="status"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="open" {{ old('status') == 'open' ? 'selected' : '' }}>Open</option>
                            <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="closed" {{ old('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>

                    <div>
                        <label for="registration_fee" class="block text-sm font-medium text-gray-700 mb-2">
                            Registration Fee (Rp) <span class="text-red-500">*</span>
                        </label>
                        <input type="number" name="registration_fee" id="registration_fee" 
                               value="{{ old('registration_fee', 0) }}" min="0" step="1000"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('registration_fee') border-red-500 @enderror" required>
                        @error('registration_fee')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_featured" id="is_featured" value="1"
                               {{ old('is_featured') ? 'checked' : '' }}
                               class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="is_featured" class="ml-2 text-sm text-gray-700">Featured Competition</label>
                    </div>
                </div>
            </div>

            <!-- Files -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Files</h2>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label for="poster" class="block text-sm font-medium text-gray-700 mb-2">
                            Poster Image
                        </label>
                        <input type="file" name="poster" id="poster" accept="image/*"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-500 mt-1">JPG, PNG. Max 2MB</p>
                    </div>

                    <div>
                        <label for="guidebook" class="block text-sm font-medium text-gray-700 mb-2">
                            Guidebook (PDF)
                        </label>
                        <input type="file" name="guidebook" id="guidebook" accept=".pdf"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-500 mt-1">PDF format. Max 10MB</p>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition">
                    Create Competition
                </button>
            </div>
        </div>
    </div>
</form>
@endsection