@extends('layouts.admin')

@section('title', 'Submissions')
@section('page-title', 'Submissions Management')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-900">Submissions</h2>
        <p class="text-gray-500">Review and score team submissions</p>
    </div>
</div>

<!-- Filters -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 sm:p-6 mb-6">
    <form method="GET" action="{{ route('admin.submissions.index') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Competition</label>
            <select name="competition" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Competitions</option>
                @foreach($competitions ?? [] as $competition)
                <option value="{{ $competition->id }}" {{ request('competition') == $competition->id ? 'selected' : '' }}>
                    {{ $competition->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Status</option>
                <option value="unscored" {{ request('status') == 'unscored' ? 'selected' : '' }}>Not Scored</option>
                <option value="scored" {{ request('status') == 'scored' ? 'selected' : '' }}>Scored</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Team name, title..."
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
        <div class="flex items-end gap-2">
            <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white font-medium rounded-xl hover:bg-blue-700 transition">
                Filter
            </button>
            <a href="{{ route('admin.submissions.index') }}" class="px-4 py-2 bg-gray-100 text-gray-700 font-medium rounded-xl hover:bg-gray-200 transition">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Submissions Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Submission</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Team</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Competition</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">File</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Score</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Submitted</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($submissions as $submission)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-900">{{ $submission->title }}</div>
                        @if($submission->description)
                        <div class="text-xs text-gray-500 mt-1 line-clamp-1">{{ $submission->description }}</div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-900">{{ $submission->team->name ?? 'N/A' }}</div>
                        <div class="text-xs text-gray-500">{{ $submission->team->code ?? '' }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        {{ $submission->team->competition->name ?? 'N/A' }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ Storage::url($submission->file_path) }}" target="_blank"
                           class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg hover:bg-blue-200 transition">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            {{ strtoupper($submission->file_type) }}
                        </a>
                    </td>
                    <td class="px-6 py-4 text-center">
                        @if($submission->score !== null)
                        <span class="text-lg font-bold text-blue-600">{{ number_format($submission->score, 1) }}</span>
                        @else
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Not Scored</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center text-sm text-gray-500">
                        {{ $submission->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <button type="button" onclick="openScoreModal({{ $submission->id }}, '{{ $submission->title }}', {{ $submission->score ?? 'null' }}, '{{ $submission->feedback }}')"
                                class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-medium rounded-lg hover:bg-purple-200 transition">
                            {{ $submission->score !== null ? 'Edit Score' : 'Add Score' }}
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                        <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p>No submissions found</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($submissions->hasPages())
    <div class="p-4 sm:p-6 border-t border-gray-100">
        {{ $submissions->withQueryString()->links() }}
    </div>
    @endif
</div>

<!-- Score Modal -->
<div id="scoreModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md">
        <div class="p-6 border-b border-gray-100">
            <h3 class="text-lg font-bold text-gray-900">Score Submission</h3>
            <p id="modalTitle" class="text-sm text-gray-500 mt-1"></p>
        </div>
        <form id="scoreForm" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PATCH')
            <div>
                <label for="score" class="block text-sm font-medium text-gray-700 mb-2">Score (0-100)</label>
                <input type="number" name="score" id="modalScore" min="0" max="100" step="0.1"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent" required>
            </div>
            <div>
                <label for="feedback" class="block text-sm font-medium text-gray-700 mb-2">Feedback</label>
                <textarea name="feedback" id="modalFeedback" rows="3"
                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                          placeholder="Optional feedback for the team..."></textarea>
            </div>
            <div class="flex space-x-3 pt-4">
                <button type="button" onclick="closeScoreModal()" 
                        class="flex-1 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition">
                    Cancel
                </button>
                <button type="submit" class="flex-1 py-3 bg-purple-600 text-white font-semibold rounded-xl hover:bg-purple-700 transition">
                    Save Score
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
function openScoreModal(id, title, score, feedback) {
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('scoreForm').action = `/admin/submissions/${id}/score`;
    document.getElementById('modalScore').value = score || '';
    document.getElementById('modalFeedback').value = feedback || '';
    document.getElementById('scoreModal').classList.remove('hidden');
    document.getElementById('scoreModal').classList.add('flex');
}

function closeScoreModal() {
    document.getElementById('scoreModal').classList.add('hidden');
    document.getElementById('scoreModal').classList.remove('flex');
}

// Close modal when clicking outside
document.getElementById('scoreModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeScoreModal();
    }
});
</script>
@endpush
@endsection