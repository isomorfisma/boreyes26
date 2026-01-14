@extends('layouts.admin')

@section('title', 'Email Logs')
@section('page-title', 'Email Logs')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.email.index') }}" class="inline-flex items-center text-gray-600 hover:text-[#0F4C82] font-garet transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Email Settings
    </a>
</div>

<div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Recipient</th>
                    <th class="px-6 py-4 text-left text-xs font-helvetica font-bold text-gray-700 uppercase">Subject</th>
                    <th class="px-6 py-4 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Template</th>
                    <th class="px-6 py-4 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Status</th>
                    <th class="px-6 py-4 text-center text-xs font-helvetica font-bold text-gray-700 uppercase">Sent At</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($logs as $log)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <div class="font-garet font-medium text-gray-900">{{ $log->to_email }}</div>
                        <div class="text-xs text-gray-600 font-garet">{{ $log->to_name }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-700 font-garet max-w-xs truncate">
                        {{ $log->subject }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <code class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded font-mono">{{ $log->template_key ?? '-' }}</code>
                    </td>
                    <td class="px-6 py-4 text-center">
                        @if($log->status === 'sent')
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-garet rounded">Sent</span>
                        @elseif($log->status === 'failed')
                        <span class="px-3 py-1 bg-red-50 text-red-700 text-xs font-garet rounded" title="{{ $log->error_message }}">Failed</span>
                        @else
                        <span class="px-3 py-1 bg-amber-50 text-amber-700 text-xs font-garet rounded">Pending</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center text-sm text-gray-600 font-garet">
                        {{ $log->sent_at ? $log->sent_at->format('d M Y H:i') : '-' }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500 font-garet">
                        No email logs found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($logs->hasPages())
    <div class="p-6 border-t border-gray-200">
        {{ $logs->links() }}
    </div>
    @endif
</div>
@endsection