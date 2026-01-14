@extends('layouts.admin')

@section('title', 'Payments')
@section('page-title', 'Payments Management')

@section('content')
<!-- Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-900">Payments Management</h2>
        <p class="text-gray-500">Verify and manage payment submissions</p>
    </div>
    <div class="flex items-center space-x-3">
        <span class="text-sm text-gray-500">
            Total Verified: <strong class="text-green-600">Rp {{ number_format($totalVerified ?? 0, 0, ',', '.') }}</strong>
        </span>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-xl p-4 border border-gray-100">
        <p class="text-xs text-gray-500 uppercase">All Payments</p>
        <p class="text-2xl font-bold text-gray-900">{{ $stats['total'] ?? 0 }}</p>
    </div>
    <div class="bg-yellow-50 rounded-xl p-4 border border-yellow-100">
        <p class="text-xs text-yellow-600 uppercase">Pending</p>
        <p class="text-2xl font-bold text-yellow-600">{{ $stats['pending'] ?? 0 }}</p>
    </div>
    <div class="bg-green-50 rounded-xl p-4 border border-green-100">
        <p class="text-xs text-green-600 uppercase">Verified</p>
        <p class="text-2xl font-bold text-green-600">{{ $stats['verified'] ?? 0 }}</p>
    </div>
    <div class="bg-red-50 rounded-xl p-4 border border-red-100">
        <p class="text-xs text-red-600 uppercase">Rejected</p>
        <p class="text-2xl font-bold text-red-600">{{ $stats['rejected'] ?? 0 }}</p>
    </div>
</div>

<!-- Filters -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 sm:p-6 mb-6">
    <form method="GET" action="{{ route('admin.payments.index') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="verified" {{ request('status') == 'verified' ? 'selected' : '' }}>Verified</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
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
            <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Invoice, team name..."
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
        <div class="flex items-end gap-2">
            <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white font-medium rounded-xl hover:bg-blue-700 transition">
                Filter
            </button>
            <a href="{{ route('admin.payments.index') }}" class="px-4 py-2 bg-gray-100 text-gray-700 font-medium rounded-xl hover:bg-gray-200 transition">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Payments Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <!-- Mobile Card View -->
    <div class="block lg:hidden divide-y divide-gray-100">
        @forelse($payments as $payment)
        <div class="p-4">
            <div class="flex items-start justify-between mb-3">
                <div>
                    <h4 class="font-semibold text-gray-900">{{ $payment->team->name ?? 'N/A' }}</h4>
                    <p class="text-xs text-gray-500 font-mono">{{ $payment->invoice_number }}</p>
                </div>
                @switch($payment->status)
                    @case('verified')
                        <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Verified</span>
                        @break
                    @case('pending')
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Pending</span>
                        @break
                    @case('rejected')
                        <span class="px-2 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Rejected</span>
                        @break
                @endswitch
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-500">{{ $payment->team->competition->name ?? 'N/A' }}</span>
                <span class="font-bold text-gray-900">Rp {{ number_format($payment->amount, 0, ',', '.') }}</span>
            </div>
            <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                <span class="text-xs text-gray-400">{{ $payment->created_at->format('d M Y') }}</span>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.payments.show', $payment->id) }}" 
                       class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg">
                        View
                    </a>
                    @if($payment->status === 'pending')
                    <form method="POST" action="{{ route('admin.payments.verify', $payment->id) }}" class="inline">
                        @csrf
                        <button type="submit" class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-lg">
                            Verify
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="p-8 text-center text-gray-500">No payments found</div>
        @endforelse
    </div>

    <!-- Desktop Table View -->
    <div class="hidden lg:block overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Invoice</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Team</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Competition</th>
                    <th class="px-6 py-4 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Method</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($payments as $payment)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <code class="text-xs bg-gray-100 px-2 py-1 rounded">{{ $payment->invoice_number }}</code>
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-900">{{ $payment->team->name ?? 'N/A' }}</div>
                        <div class="text-xs text-gray-500">{{ $payment->team->code ?? '' }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        {{ $payment->team->competition->name ?? 'N/A' }}
                    </td>
                    <td class="px-6 py-4 text-right font-semibold text-gray-900">
                        Rp {{ number_format($payment->amount, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 text-center text-sm text-gray-600">
                        {{ ucwords(str_replace('_', ' ', $payment->payment_method)) }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        @switch($payment->status)
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
                    </td>
                    <td class="px-6 py-4 text-center text-sm text-gray-500">
                        {{ $payment->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex items-center justify-center space-x-1">
                            <a href="{{ route('admin.payments.show', $payment->id) }}" 
                               class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="View">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </a>
                            @if($payment->status === 'pending')
                            <form method="POST" action="{{ route('admin.payments.verify', $payment->id) }}" class="inline"
                                  onsubmit="return confirm('Verify this payment?')">
                                @csrf
                                <button type="submit" class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition" title="Verify">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                            </form>
                            <form method="POST" action="{{ route('admin.payments.reject', $payment->id) }}" class="inline"
                                  onsubmit="return confirm('Reject this payment?')">
                                @csrf
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition" title="Reject">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-12 text-center text-gray-500">
                        <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <p>No payments found</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($payments->hasPages())
    <div class="p-4 sm:p-6 border-t border-gray-100">
        {{ $payments->withQueryString()->links() }}
    </div>
    @endif
</div>
@endsection