@extends('layouts.admin')

@section('title', 'Edit: ' . $eventProgram->name)
@section('page-title', 'Edit Event Program')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.event-programs.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Event Programs
    </a>
</div>

<div class="max-w-2xl">
    <form method="POST" action="{{ route('admin.event-programs.update', $eventProgram->id) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">Event Information</h2>
            </div>
            <div class="p-6 space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Event Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name', $eventProgram->name) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror" required>
                    @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        Description <span class="text-red-500">*</span>
                    </label>
                    <textarea name="description" id="description" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror" required>{{ old('description', $eventProgram->description) }}</textarea>
                    @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="event_date" class="block text-sm font-medium text-gray-700 mb-2">
                            Event Date
                        </label>
                        <input type="datetime-local" name="event_date" id="event_date" 
                               value="{{ old('event_date', $eventProgram->event_date?->format('Y-m-d\TH:i')) }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-2">
                            Location
                        </label>
                        <input type="text" name="location" id="location" value="{{ old('location', $eventProgram->location) }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                            Display Order
                        </label>
                        <input type="number" name="order" id="order" value="{{ old('order', $eventProgram->order) }}" min="0"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="flex items-end">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $eventProgram->is_active) ? 'checked' : '' }}
                                   class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Active</span>
                        </label>
                    </div>
                </div>

                @if($eventProgram->image)
                <div>
                    <p class="text-sm font-medium text-gray-700 mb-2">Current Image</p>
                    <img src="{{ Storage::url($eventProgram->image) }}" alt="{{ $eventProgram->name }}" class="w-full max-w-xs h-32 object-cover rounded-xl">
                </div>
                @endif

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ $eventProgram->image ? 'Replace Image' : 'Event Image' }}
                    </label>
                    <input type="file" name="image" id="image" accept="image/*"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="text-xs text-gray-500 mt-1">Leave empty to keep current image</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-3">
            <a href="{{ route('admin.event-programs.index') }}" 
               class="flex-1 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl text-center hover:bg-gray-200 transition">
                Cancel
            </a>
            <button type="submit" class="flex-1 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition">
                Update Event
            </button>
        </div>
    </form>
</div>
@endsection