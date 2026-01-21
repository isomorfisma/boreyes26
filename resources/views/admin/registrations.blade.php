@extends('layouts.admin')

@section('title', 'Admin - Verifikasi Pembayaran')
@section('page-title', 'Verifikasi Pembayaran')

@section('content')
<!-- Header -->
<div class="mb-6">
    <h2 class="text-xl font-helvetica font-black tracking-tighter text-[#0F4C82]">Verifikasi Pembayaran</h2>
    <p class="text-sm text-gray-600 font-garet">Kelola dan verifikasi pembayaran pendaftar yang sudah upload bukti</p>
</div>

<!-- Stats Summary -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
    <div class="bg-white border-2 border-gray-100 rounded-xl p-4">
        <p class="text-xs text-gray-500 font-garet mb-1">Total Upload Bukti</p>
        <p class="text-2xl font-helvetica font-bold text-[#0F4C82]">{{ $users->count() }}</p>
    </div>
    <div class="bg-white border-2 border-green-100 rounded-xl p-4">
        <p class="text-xs text-gray-500 font-garet mb-1">Verified</p>
        <p class="text-2xl font-helvetica font-bold text-green-600">{{ $users->where('payment_status', 'verified')->count() }}</p>
    </div>
    <div class="bg-white border-2 border-amber-100 rounded-xl p-4">
        <p class="text-xs text-gray-500 font-garet mb-1">Pending</p>
        <p class="text-2xl font-helvetica font-bold text-amber-600">{{ $users->whereNotIn('payment_status', ['verified', 'rejected'])->count() }}</p>
    </div>
</div>

<!-- Data Table -->
<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-[#6F97B6] via-[#8CCDCF] to-[#D6EBDF]">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Tim</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Ketua</th>
                    <th class="px-4 py-3 text-left text-xs font-helvetica font-black text-[#0F4C82] uppercase">Kompetisi</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Bukti Bayar</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Email</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-helvetica font-black text-[#0F4C82] uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($users as $user)
                    <tr class="hover:bg-[#D3EB9F]/10 transition">
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-[#0F4C82] rounded-lg flex items-center justify-center text-white font-helvetica font-black text-xs flex-shrink-0">
                                    {{ strtoupper(substr($user->team_name, 0, 2)) }}
                                </div>
                                <div class="min-w-0">
                                    <div class="text-sm font-helvetica font-black text-[#0F4C82]">{{ $user->team_name }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3">
                            <span class="text-sm text-gray-700 font-garet">{{ $user->team_leader }}</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="text-sm text-gray-700 font-garet">{{ $user->competition?->name ?? '-' }}</span>
                        </td>
                        <td class="px-4 py-3 text-center">
                            @if($user->link_drive_payment)
                                <a href="{{ $user->link_drive_payment }}"
                                   target="_blank"
                                   class="inline-flex items-center px-2 py-1 bg-blue-50 text-blue-700 text-xs font-garet rounded hover:bg-blue-100 transition">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Lihat
                                </a>
                            @else
                                <span class="text-gray-400 text-xs">-</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-center">
                            @if($user->email_verified_at)
                                <span class="px-2 py-0.5 bg-green-50 text-green-700 text-xs font-garet rounded">Verified</span>
                            @else
                                <span class="px-2 py-0.5 bg-red-50 text-red-700 text-xs font-garet rounded">Not Verified</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-center">
                            @if($user->payment_status === 'verified')
                                <span class="px-2 py-0.5 bg-green-50 text-green-700 text-xs font-garet rounded">Verified</span>
                            @elseif($user->payment_status === 'rejected')
                                <span class="px-2 py-0.5 bg-red-50 text-red-700 text-xs font-garet rounded">Rejected</span>
                            @else
                                <span class="px-2 py-0.5 bg-amber-50 text-amber-700 text-xs font-garet rounded">Pending</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <button onclick="openTeamModal({{ $user->id }})" 
                                        class="px-2 py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-garet rounded hover:bg-[#0F4C82]/20 transition">
                                    Detail
                                </button>
                                @if($user->payment_status !== 'verified')
                                    <form action="{{ route('admin.registrations.verify', $user) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('Verify pembayaran ini?')">
                                        @csrf
                                        @method('PATCH')
                                        <button class="px-2 py-1 bg-green-50 text-green-700 text-xs font-garet rounded hover:bg-green-100 transition">
                                            Verify
                                        </button>
                                    </form>
                                @endif
                                @if($user->payment_status !== 'rejected')
                                    <form action="{{ route('admin.registrations.reject', $user) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('Reject pembayaran ini?')">
                                        @csrf
                                        @method('PATCH')
                                        <button class="px-2 py-1 bg-red-50 text-red-700 text-xs font-garet rounded hover:bg-red-100 transition">
                                            Reject
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-8 text-center">
                            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-500 font-garet">Belum ada tim yang upload bukti pembayaran</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Team Detail Modal -->
<div id="teamModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4" style="backdrop-filter: blur(4px);">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200 bg-gradient-to-r from-[#6F97B6] to-[#8CCDCF]">
            <h3 class="text-xl font-helvetica font-black text-white">Detail Tim</h3>
            <button onclick="closeTeamModal()" class="text-white hover:text-gray-200 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <!-- Modal Body -->
        <div id="teamModalContent" class="p-6 overflow-y-auto" style="max-height: calc(90vh - 140px);">
            <div class="flex items-center justify-center py-12">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-[#0F4C82]"></div>
            </div>
        </div>
        
        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-200 bg-gray-50">
            <button onclick="closeTeamModal()" class="px-4 py-2 bg-gray-200 text-gray-700 font-garet rounded-lg hover:bg-gray-300 transition">
                Tutup
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
function openTeamModal(userId) {
    const modal = document.getElementById('teamModal');
    const content = document.getElementById('teamModalContent');
    
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    // Fetch team details
    fetch(`/admin/registrations/${userId}/detail`)
        .then(response => response.json())
        .then(data => {
            content.innerHTML = `
                <!-- Team Header -->
                <div class="bg-gradient-to-r from-[#0F4C82]/5 to-[#6F97B6]/5 rounded-xl p-6 mb-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl flex items-center justify-center text-white font-helvetica font-black text-2xl">
                            ${data.team_name.substring(0, 2).toUpperCase()}
                        </div>
                        <div>
                            <h2 class="text-2xl font-helvetica font-black text-[#0F4C82]">${data.team_name}</h2>
                            <p class="text-gray-600 font-garet">${data.competition?.name || 'N/A'}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="bg-white rounded-lg p-3">
                            <p class="text-xs text-gray-500 font-garet mb-1">Ketua Tim</p>
                            <p class="font-helvetica font-bold text-[#0F4C82] text-sm">${data.team_leader}</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="text-xs text-gray-500 font-garet mb-1">Email Ketua</p>
                            <p class="font-garet text-sm text-gray-700 break-all whitespace-normal">
                            ${data.email}
                            </p>

                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="text-xs text-gray-500 font-garet mb-1">Universitas</p>
                            <p class="font-garet text-sm text-gray-700">${data.university || '-'}</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="text-xs text-gray-500 font-garet mb-1">No. Kontak</p>
                            <p class="font-garet text-sm text-gray-700">${data.contact_number || '-'}</p>
                        </div>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="mb-6">
                    <h3 class="font-helvetica font-bold text-[#0F4C82] mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Anggota Tim
                    </h3>
                    <div class="space-y-4">
                        ${data.team_member_1 ? `
                            <div class="p-4 bg-gradient-to-r from-[#0F4C82]/5 to-[#6F97B6]/5 rounded-xl">
                                <div class="flex items-start space-x-3">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-xl flex items-center justify-center text-white font-helvetica font-black flex-shrink-0">
                                        ${data.team_member_1.substring(0, 2).toUpperCase()}
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <h4 class="font-helvetica font-bold text-[#0F4C82]">${data.team_member_1}</h4>
                                            <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-xs font-garet rounded-full">Anggota 1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ` : ''}
                        
                        ${data.team_member_2 ? `
                            <div class="p-4 bg-gradient-to-r from-[#8CCDCF]/5 to-[#D6EBDF]/5 rounded-xl">
                                <div class="flex items-start space-x-3">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#8CCDCF] to-[#D6EBDF] rounded-xl flex items-center justify-center text-[#0F4C82] font-helvetica font-black flex-shrink-0">
                                        ${data.team_member_2.substring(0, 2).toUpperCase()}
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <h4 class="font-helvetica font-bold text-[#0F4C82]">${data.team_member_2}</h4>
                                            <span class="px-2 py-0.5 bg-teal-100 text-teal-700 text-xs font-garet rounded-full">Anggota 2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ` : ''}
                        
                        ${!data.team_member_1 && !data.team_member_2 ? '<p class="text-center text-gray-500 font-garet py-4">Tidak ada data anggota tambahan</p>' : ''}
                    </div>
                </div>

                <!-- Payment Info -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 mb-6">
                    <h3 class="font-helvetica font-bold text-[#0F4C82] mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                        Informasi Pembayaran
                    </h3>
                    <div class="space-y-3">
                        ${data.competition?.price ? `
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-gray-600 font-garet">Biaya Pendaftaran</span>
                                <span class="font-helvetica font-bold text-[#0F4C82]">Rp ${parseInt(data.competition.price).toLocaleString('id-ID')}</span>
                            </div>
                        ` : ''}
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-600 font-garet">Status Pembayaran</span>
                            ${data.payment_status === 'verified' 
                                ? '<span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-garet rounded-full">Verified</span>'
                                : data.payment_status === 'rejected'
                                ? '<span class="px-3 py-1 bg-red-50 text-red-700 text-xs font-garet rounded-full">Rejected</span>'
                                : '<span class="px-3 py-1 bg-amber-50 text-amber-700 text-xs font-garet rounded-full">Pending</span>'
                            }
                        </div>
                        ${data.link_drive_payment ? `
                            <div class="flex justify-between items-center py-2">
                                <span class="text-gray-600 font-garet">Bukti Pembayaran</span>
                                <a href="${data.link_drive_payment}" target="_blank" class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-garet rounded hover:bg-blue-100 transition">
                                    Lihat Bukti
                                </a>
                            </div>
                        ` : ''}
                    </div>
                </div>

                <!-- Contact Info -->
                ${data.contact_number ? `
                <div class="bg-white border border-gray-200 rounded-xl p-6">
                    <h3 class="font-helvetica font-bold text-[#0F4C82] mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Kontak Ketua Tim
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600 font-garet">No. Kontak</span>
                            <span class="font-garet text-gray-900">${data.contact_number}</span>
                        </div>
                    </div>
                </div>
                ` : ''}
            `;
        })
        .catch(error => {
            content.innerHTML = `
                <div class="text-center py-12">
                    <svg class="w-16 h-16 mx-auto text-red-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-red-600 font-garet">Gagal memuat data tim</p>
                </div>
            `;
        });
}

function closeTeamModal() {
    const modal = document.getElementById('teamModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// Close modal when clicking outside
document.getElementById('teamModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeTeamModal();
    }
});
</script>
@endpush
@endsection