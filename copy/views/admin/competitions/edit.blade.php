@extends('layouts.admin')

@section('title', 'Edit: ' . $competition->name)
@section('page-title', 'Edit Competition')

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

<form method="POST" action="{{ route('admin.competitions.update', $competition->id) }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

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
                        <input type="text" name="name" id="name" value="{{ old('name', $competition->name) }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror" required>
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
                            <option value="{{ $category->id }}" {{ old('category_id', $competition->category_id) == $category->id ? 'selected' : '' }}>
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
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror" required>{{ old('description', $competition->description) }}</textarea>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="requirements" class="block text-sm font-medium text-gray-700 mb-2">
                            Requirements
                        </label>
                        <textarea name="requirements" id="requirements" rows="3"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('requirements', $competition->requirements) }}</textarea>
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
                                   value="{{ old('registration_start', $competition->registration_start->format('Y-m-d\TH:i')) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="registration_end" class="block text-sm font-medium text-gray-700 mb-2">
                                Registration End <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="registration_end" id="registration_end" 
                                   value="{{ old('registration_end', $competition->registration_end->format('Y-m-d\TH:i')) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="competition_start" class="block text-sm font-medium text-gray-700 mb-2">
                                Competition Start <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="competition_start" id="competition_start" 
                                   value="{{ old('competition_start', $competition->competition_start->format('Y-m-d\TH:i')) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="competition_end" class="block text-sm font-medium text-gray-700 mb-2">
                                Competition End <span class="text-red-500">*</span>
                            </label>
                            <input type="datetime-local" name="competition_end" id="competition_end" 
                                   value="{{ old('competition_end', $competition->competition_end->format('Y-m-d\TH:i')) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
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
                                   value="{{ old('min_team_members', $competition->min_team_members) }}" min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="max_team_members" class="block text-sm font-medium text-gray-700 mb-2">
                                Max Team Members
                            </label>
                            <input type="number" name="max_team_members" id="max_team_members" 
                                   value="{{ old('max_team_members', $competition->max_team_members) }}" min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="max_participants" class="block text-sm font-medium text-gray-700 mb-2">
                                Max Teams (Quota)
                            </label>
                            <input type="number" name="max_participants" id="max_participants" 
                                   value="{{ old('max_participants', $competition->max_participants) }}" min="0"
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
                            <option value="draft" {{ old('status', $competition->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="open" {{ old('status', $competition->status) == 'open' ? 'selected' : '' }}>Open</option>
                            <option value="ongoing" {{ old('status', $competition->status) == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="closed" {{ old('status', $competition->status) == 'closed' ? 'selected' : '' }}>Closed</option>
                            <option value="completed" {{ old('status', $competition->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>

                    <div>
                        <label for="registration_fee" class="block text-sm font-medium text-gray-700 mb-2">
                            Registration Fee (Rp) <span class="text-red-500">*</span>
                        </label>
                        <input type="number" name="registration_fee" id="registration_fee" 
                               value="{{ old('registration_fee', $competition->registration_fee) }}" min="0" step="1000"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_featured" id="is_featured" value="1"
                               {{ old('is_featured', $competition->is_featured) ? 'checked' : '' }}
                               class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="is_featured" class="ml-2 text-sm text-gray-700">Featured Competition</label>
                    </div>
                </div>
            </div>

            <!-- Current Files -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Current Files</h2>
                </div>
                <div class="p-6 space-y-4">
                    @if($competition->poster)
                    <div>
                        <p class="text-sm text-gray-500 mb-2">Current Poster</p>
                        <img src="{{ Storage::url($competition->poster) }}" alt="Poster" class="w-full h-32 object-cover rounded-lg">
                    </div>
                    @endif
                    @if($competition->guidebook)
                    <div>
                        <p class="text-sm text-gray-500 mb-2">Current Guidebook</p>
                        <a href="{{ Storage::url($competition->guidebook) }}" target="_blank" class="text-blue-600 hover:underline text-sm">
                            📄 Download Current Guidebook
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Upload New Files -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Upload New Files</h2>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label for="poster" class="block text-sm font-medium text-gray-700 mb-2">
                            New Poster Image
                        </label>
                        <input type="file" name="poster" id="poster" accept="image/*"
                               class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-500 mt-1">Leave empty to keep current</p>
                    </div>

                    <div>
                        <label for="guidebook" class="block text-sm font-medium text-gray-700 mb-2">
                            New Guidebook (PDF)
                        </label>
                        <input type="file" name="guidebook" id="guidebook" accept=".pdf"
                               class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-500 mt-1">Leave empty to keep current</p>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="bg-blue-50 rounded-2xl border border-blue-100 p-6">
                <h3 class="font-bold text-blue-800 mb-3">Competition Stats</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-blue-600">Total Teams</span>
                        <span class="font-bold text-blue-800">{{ $competition->teams_count ?? $competition->teams()->count() }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-blue-600">Approved Teams</span>
                        <span class="font-bold text-blue-800">{{ $competition->teams()->where('status', 'approved')->count() }}</span>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 space-y-3">
                <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition">
                    Update Competition
                </button>
                <a href="{{ route('competitions.show', $competition->slug) }}" target="_blank"
                   class="block w-full py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl text-center hover:bg-gray-200 transition">
                    View Public Page
                </a>
            </div>
        </div>
    </div>
</form>
@endsection