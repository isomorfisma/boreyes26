@extends('layouts.admin')

@section('title', 'Team: ' . $team->name)
@section('page-title', 'Team Details')

@section('content')
<!-- Back Button -->
<div class="mb-6">
    <a href="{{ route('admin.teams.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Teams
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Content -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Team Header Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-6">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center text-white font-bold text-xl">
                        {{ strtoupper(substr($team->name, 0, 2)) }}
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $team->name }}</h1>
                        <p class="text-gray-500">{{ $team->competition->name ?? 'N/A' }}</p>
                        <code class="text-xs bg-gray-100 px-2 py-1 rounded mt-1 inline-block">{{ $team->code }}</code>
                    </div>
                </div>
                <div>
                    @switch($team->status)
                        @case('approved')
                            <span class="px-4 py-2 bg-green-100 text-green-700 font-semibold rounded-xl inline-flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Approved
                            </span>
                            @break
                        @case('pending')
                            <span class="px-4 py-2 bg-yellow-100 text-yellow-700 font-semibold rounded-xl inline-flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Pending
                            </span>
                            @break
                        @case('rejected')
                            <span class="px-4 py-2 bg-red-100 text-red-700 font-semibold rounded-xl inline-flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Rejected
                            </span>
                            @break
                    @endswitch
                </div>
            </div>

            <!-- Team Info Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Institution</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ $team->institution }}</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Members</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ $team->members->count() }} people</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Registered</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ $team->created_at->format('d M Y') }}</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Leader</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ $team->leader->name ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Team Members -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">Team Members</h2>
            </div>
            <div class="divide-y divide-gray-100">
                @foreach($team->members as $member)
                <div class="p-4 hover:bg-gray-50 transition">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-400 rounded-xl flex items-center justify-center text-white font-bold">
                            {{ strtoupper(substr($member->name, 0, 2)) }}
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2">
                                <h4 class="font-semibold text-gray-900">{{ $member->name }}</h4>
                                @if($member->pivot->role === 'leader')
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full">👑 Leader</span>
                                @endif
                            </div>
                            <p class="text-sm text-gray-500">{{ $member->email }}</p>
                            <p class="text-xs text-gray-400">{{ $member->phone ?? 'No phone' }} • {{ $member->institution ?? 'No institution' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Twibbon Proof -->
        @if($team->twibbon_proof || $team->twibbon_link)
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">Twibbon Verification</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @if($team->twibbon_proof)
                    <div>
                        <p class="text-sm text-gray-500 mb-3">Screenshot Proof</p>
                        <a href="{{ Storage::url($team->twibbon_proof) }}" target="_blank" class="block">
                            <img src="{{ Storage::url($team->twibbon_proof) }}" 
                                 alt="Twibbon Proof" 
                                 class="rounded-xl border border-gray-200 max-h-64 object-contain hover:opacity-90 transition">
                        </a>
                    </div>
                    @endif
                    @if($team->twibbon_link)
                    <div>
                        <p class="text-sm text-gray-500 mb-3">Instagram Link</p>
                        <a href="{{ $team->twibbon_link }}" 
                           target="_blank"
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 break-all">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                            </svg>
                            {{ Str::limit($team->twibbon_link, 40) }}
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Quick Actions -->
        @if($team->status === 'pending')
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="font-bold text-gray-900 mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <form method="POST" action="{{ route('admin.teams.approve', $team->id) }}" 
                      onsubmit="return confirm('Are you sure you want to approve this team?')">
                    @csrf
                    <button type="submit" class="w-full py-3 bg-green-600 text-white font-semibold rounded-xl hover:bg-green-700 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Approve Team
                    </button>
                </form>
                
                <form method="POST" action="{{ route('admin.teams.reject', $team->id) }}" x-data="{ showNotes: false }">
                    @csrf
                    <button type="button" @click="showNotes = !showNotes" 
                            class="w-full py-3 bg-red-600 text-white font-semibold rounded-xl hover:bg-red-700 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Reject Team
                    </button>
                    <div x-show="showNotes" x-cloak class="mt-3">
                        <textarea name="rejection_notes" rows="3" placeholder="Reason for rejection (optional)..." 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500"></textarea>
                        <button type="submit" class="mt-2 w-full py-2 bg-red-600 text-white font-medium rounded-xl hover:bg-red-700 transition"
                                onclick="return confirm('Confirm rejection?')">
                            Confirm Rejection
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endif

        <!-- Payment Info -->
        @if($team->payment)
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h3 class="font-bold text-gray-900">Payment Details</h3>
            </div>
            <div class="p-6 space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500">Invoice</span>
                    <code class="text-xs bg-gray-100 px-2 py-1 rounded">{{ $team->payment->invoice_number }}</code>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500">Amount</span>
                    <span class="font-bold text-gray-900">Rp {{ number_format($team->payment->amount, 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500">Method</span>
                    <span class="text-gray-900">{{ ucwords(str_replace('_', ' ', $team->payment->payment_method)) }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500">Status</span>
                    @switch($team->payment->status)
                        @case('verified')
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Verified</span>
                            @break
                        @case('pending')
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Pending</span>
                            @break
                        @case('rejected')
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Rejected</span>
                            @break
                    @endswitch
                </div>
                
                @if($team->payment->proof)
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-sm text-gray-500 mb-2">Payment Proof</p>
                    <a href="{{ Storage::url($team->payment->proof) }}" target="_blank">
                        <img src="{{ Storage::url($team->payment->proof) }}" 
                             alt="Payment Proof" 
                             class="rounded-xl border border-gray-200 max-h-48 object-contain hover:opacity-90 transition">
                    </a>
                </div>
                @endif

                @if($team->payment->status === 'pending')
                <div class="pt-4 border-t border-gray-100 space-y-2">
                    <form method="POST" action="{{ route('admin.payments.verify', $team->payment->id) }}"
                          onsubmit="return confirm('Verify this payment?')">
                        @csrf
                        <button type="submit" class="w-full py-2 bg-green-600 text-white font-medium rounded-xl hover:bg-green-700 transition">
                            ✓ Verify Payment
                        </button>
                    </form>
                    <form method="POST" action="{{ route('admin.payments.reject', $team->payment->id) }}"
                          onsubmit="return confirm('Reject this payment?')">
                        @csrf
                        <button type="submit" class="w-full py-2 bg-red-100 text-red-700 font-medium rounded-xl hover:bg-red-200 transition">
                            ✗ Reject Payment
                        </button>
                    </form>
                </div>
                @endif
            </div>
        </div>
        @endif

        <!-- WA Group Link -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="font-bold text-gray-900 mb-4">WhatsApp Group</h3>
            <form method="POST" action="{{ route('admin.teams.update-wa', $team->id) }}">
                @csrf
                @method('PATCH')
                <input type="url" 
                       name="wa_group_link" 
                       value="{{ $team->wa_group_link }}"
                       placeholder="https://chat.whatsapp.com/..."
                       class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 mb-3">
                <button type="submit" class="w-full py-2 bg-green-600 text-white font-medium rounded-xl hover:bg-green-700 transition">
                    Save WA Group Link
                </button>
            </form>
        </div>
    </div>
</div>
@endsection