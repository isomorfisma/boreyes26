@extends('layouts.admin')

@section('title', 'Payment: ' . $payment->invoice_number)
@section('page-title', 'Payment Details')

@section('content')
<!-- Back Button -->
<div class="mb-6">
    <a href="{{ route('admin.payments.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Payments
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Content -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Payment Info Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-6">
                <div>
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Payment Details</h1>
                    <code class="text-sm bg-gray-100 px-2 py-1 rounded mt-2 inline-block">{{ $payment->invoice_number }}</code>
                </div>
                @switch($payment->status)
                    @case('verified')
                        <span class="px-4 py-2 bg-green-100 text-green-700 font-semibold rounded-xl inline-flex items-center self-start">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Verified
                        </span>
                        @break
                    @case('pending')
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-700 font-semibold rounded-xl inline-flex items-center self-start">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pending
                        </span>
                        @break
                    @case('rejected')
                        <span class="px-4 py-2 bg-red-100 text-red-700 font-semibold rounded-xl inline-flex items-center self-start">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Rejected
                        </span>
                        @break
                @endswitch
            </div>

            <!-- Payment Details Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Amount</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">Rp {{ number_format($payment->amount, 0, ',', '.') }}</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Payment Method</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ ucwords(str_replace('_', ' ', $payment->payment_method)) }}</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Submitted</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ $payment->created_at->format('d M Y, H:i') }}</p>
                </div>
                @if($payment->verified_at)
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Verified At</p>
                    <p class="font-semibold text-gray-900 mt-1">{{ $payment->verified_at->format('d M Y, H:i') }}</p>
                </div>
                @endif
            </div>

            @if($payment->notes)
            <div class="mt-6 p-4 bg-yellow-50 rounded-xl border border-yellow-200">
                <p class="text-sm text-yellow-800"><strong>Notes:</strong> {{ $payment->notes }}</p>
            </div>
            @endif
        </div>

        <!-- Payment Proof -->
        @if($payment->proof)
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">Payment Proof</h2>
            </div>
            <div class="p-6">
                <a href="{{ Storage::url($payment->proof) }}" target="_blank" class="block">
                    <img src="{{ Storage::url($payment->proof) }}" 
                         alt="Payment Proof" 
                         class="max-w-full h-auto max-h-96 rounded-xl border border-gray-200 mx-auto hover:opacity-90 transition">
                </a>
                <p class="text-center text-sm text-gray-500 mt-3">Click image to view full size</p>
            </div>
        </div>
        @endif

        <!-- Team Info -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900">Team Information</h2>
            </div>
            <div class="p-6">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center text-white font-bold text-lg">
                        {{ strtoupper(substr($payment->team->name ?? 'N', 0, 2)) }}
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-lg">{{ $payment->team->name ?? 'N/A' }}</h3>
                        <p class="text-gray-500">{{ $payment->team->competition->name ?? 'N/A' }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                    <div>
                        <p class="text-xs text-gray-500">Team Code</p>
                        <code class="text-sm bg-gray-100 px-2 py-1 rounded">{{ $payment->team->code ?? 'N/A' }}</code>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Institution</p>
                        <p class="font-medium text-gray-900">{{ $payment->team->institution ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Leader</p>
                        <p class="font-medium text-gray-900">{{ $payment->team->leader->name ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Members</p>
                        <p class="font-medium text-gray-900">{{ $payment->team->members->count() ?? 0 }} people</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.teams.show', $payment->team->id) }}" 
                       class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                        View Full Team Details →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Actions -->
        @if($payment->status === 'pending')
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="font-bold text-gray-900 mb-4">Actions</h3>
            <div class="space-y-3">
                <form method="POST" action="{{ route('admin.payments.verify', $payment->id) }}"
                      onsubmit="return confirm('Are you sure you want to verify this payment?')">
                    @csrf
                    <button type="submit" class="w-full py-3 bg-green-600 text-white font-semibold rounded-xl hover:bg-green-700 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Verify Payment
                    </button>
                </form>
                
                <form method="POST" action="{{ route('admin.payments.reject', $payment->id) }}" x-data="{ showNotes: false }">
                    @csrf
                    <button type="button" @click="showNotes = !showNotes" 
                            class="w-full py-3 bg-red-600 text-white font-semibold rounded-xl hover:bg-red-700 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Reject Payment
                    </button>
                    <div x-show="showNotes" x-cloak class="mt-3">
                        <textarea name="notes" rows="3" placeholder="Reason for rejection..." 
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

        <!-- Verification Info -->
        @if($payment->status === 'verified' && $payment->verifier)
        <div class="bg-green-50 rounded-2xl border border-green-200 p-6">
            <h3 class="font-bold text-green-800 mb-3">Verification Info</h3>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                    <span class="text-green-600">Verified By</span>
                    <span class="font-medium text-green-800">{{ $payment->verifier->name }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-green-600">Verified At</span>
                    <span class="font-medium text-green-800">{{ $payment->verified_at->format('d M Y, H:i') }}</span>
                </div>
            </div>
        </div>
        @endif

        <!-- Quick Summary -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="font-bold text-gray-900 mb-4">Summary</h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-500">Invoice</span>
                    <code class="text-xs bg-gray-100 px-2 py-1 rounded">{{ $payment->invoice_number }}</code>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-500">Amount</span>
                    <span class="font-bold text-gray-900">Rp {{ number_format($payment->amount, 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-500">Method</span>
                    <span class="text-gray-900">{{ ucwords(str_replace('_', ' ', $payment->payment_method)) }}</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="text-gray-500">Team Status</span>
                    @switch($payment->team->status ?? 'pending')
                        @case('approved')
                            <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Approved</span>
                            @break
                        @case('pending')
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Pending</span>
                            @break
                        @case('rejected')
                            <span class="px-2 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Rejected</span>
                            @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
@endsection