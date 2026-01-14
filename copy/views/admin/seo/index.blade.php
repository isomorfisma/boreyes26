@extends('layouts.admin')

@section('title', 'SEO Analytics Dashboard')
@section('page-title', 'SEO Analytics Dashboard')

@push('styles')
<style>
    .stat-card {
        transition: all 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    .chart-container {
        position: relative;
        height: 250px;
    }
</style>
@endpush

@section('content')
<div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
    <div>
        <h2 class="text-2xl font-helvetica font-black tracking-tight text-[#0F4C82] mb-1">SEO & Analytics Dashboard</h2>
        <p class="text-sm text-gray-600 font-garet">Comprehensive metrics for sponsorship proposals</p>
    </div>
    <div class="flex gap-2">
        <button onclick="window.print()" class="px-3 py-1.5 text-sm bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-lg hover:opacity-90 transition flex items-center">
            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            Export PDF
        </button>
        <a href="{{ route('admin.seo.settings') }}" class="px-3 py-1.5 text-sm border-2 border-[#0F4C82] text-[#0F4C82] font-garet rounded-lg hover:bg-[#0F4C82]/5 transition flex items-center">
            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Settings
        </a>
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="stat-card bg-gradient-to-br from-[#6F97B6] to-[#8CCDCF] rounded-lg shadow p-4 text-white">
        <div class="flex items-center justify-between mb-3">
            <span class="text-xs bg-white/20 px-2 py-0.5 rounded-full font-garet">+{{ $growthPercentage }}%</span>
        </div>
        <h3 class="text-2xl font-helvetica font-black mb-0.5">{{ number_format($totalTeams) }}</h3>
        <p class="text-white/90 text-xs font-garet">Total Teams Registered</p>
    </div>

    <div class="stat-card bg-gradient-to-br from-[#C5E6C9] to-[#D3EB9F] rounded-lg shadow p-4 text-[#0F4C82]">
        <div class="flex items-center justify-between mb-3">
            <span class="text-xs bg-[#0F4C82]/10 px-2 py-0.5 rounded-full font-garet">Active</span>
        </div>
        <h3 class="text-2xl font-helvetica font-black mb-0.5">{{ number_format($totalParticipants) }}</h3>
        <p class="text-[#0F4C82]/80 text-xs font-garet">Total Participants</p>
    </div>

    <div class="stat-card bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-lg shadow p-4 text-white">
        <div class="flex items-center justify-between mb-3">
            <span class="text-xs bg-white/20 px-2 py-0.5 rounded-full font-garet">Verified</span>
        </div>
        <h3 class="text-2xl font-helvetica font-black mb-0.5">Rp {{ number_format($totalRevenue / 1000) }}K</h3>
        <p class="text-white/90 text-xs font-garet">Total Revenue</p>
    </div>

    <div class="stat-card bg-gradient-to-br from-[#D3EB9F] to-[#C5E6C9] rounded-lg shadow p-4 text-[#0F4C82]">
        <div class="flex items-center justify-between mb-3">
            <span class="text-xs bg-[#0F4C82]/10 px-2 py-0.5 rounded-full font-garet">Live</span>
        </div>
        <h3 class="text-2xl font-helvetica font-black mb-0.5">{{ $activeCompetitions }}</h3>
        <p class="text-[#0F4C82]/80 text-xs font-garet">Active Competitions</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-base font-helvetica font-black text-[#0F4C82]">Registration Trend</h3>
            <select id="trendPeriod" class="px-2 py-1 text-xs border-2 border-[#0F4C82] rounded-lg font-garet focus:ring-2 focus:ring-[#D3EB9F]">
                <option value="7">Last 7 Days</option>
                <option value="30" selected>Last 30 Days</option>
                <option value="90">Last 3 Months</option>
            </select>
        </div>
        <div class="chart-container">
            <canvas id="registrationChart"></canvas>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <h3 class="text-base font-helvetica font-black text-[#0F4C82] mb-4">Teams by Competition</h3>
        <div class="chart-container">
            <canvas id="competitionChart"></canvas>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <h3 class="text-base font-helvetica font-black text-[#0F4C82] mb-4">Team Status</h3>
        <div class="space-y-3">
            <div>
                <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] rounded-full mr-2"></div>
                        <span class="text-xs text-gray-700 font-garet">Approved</span>
                    </div>
                    <span class="text-sm font-helvetica font-black text-[#0F4C82]">{{ $statusBreakdown['approved'] ?? 0 }}</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-1.5">
                    <div class="bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] h-1.5 rounded-full" style="width: {{ $totalTeams > 0 ? (($statusBreakdown['approved'] ?? 0) / $totalTeams * 100) : 0 }}%"></div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-[#6F97B6] rounded-full mr-2"></div>
                        <span class="text-xs text-gray-700 font-garet">Pending</span>
                    </div>
                    <span class="text-sm font-helvetica font-black text-[#0F4C82]">{{ $statusBreakdown['pending'] ?? 0 }}</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-1.5">
                    <div class="bg-[#6F97B6] h-1.5 rounded-full" style="width: {{ $totalTeams > 0 ? (($statusBreakdown['pending'] ?? 0) / $totalTeams * 100) : 0 }}%"></div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-gray-400 rounded-full mr-2"></div>
                        <span class="text-xs text-gray-700 font-garet">Rejected</span>
                    </div>
                    <span class="text-sm font-helvetica font-black text-[#0F4C82]">{{ $statusBreakdown['rejected'] ?? 0 }}</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-1.5">
                    <div class="bg-gray-400 h-1.5 rounded-full" style="width: {{ $totalTeams > 0 ? (($statusBreakdown['rejected'] ?? 0) / $totalTeams * 100) : 0 }}%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <h3 class="text-base font-helvetica font-black text-[#0F4C82] mb-4">Top Institutions</h3>
        <div class="space-y-3">
            @foreach($topInstitutions as $index => $institution)
            <div class="flex items-center">
                <div class="w-6 h-6 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center text-white font-helvetica font-black text-xs mr-2 flex-shrink-0">
                    {{ $index + 1 }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-helvetica font-black text-[#0F4C82] truncate">{{ $institution->institution }}</p>
                    <p class="text-[10px] text-gray-600 font-garet">{{ $institution->teams_count }} teams</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <h3 class="text-base font-helvetica font-black text-[#0F4C82] mb-4">Engagement</h3>
        <div class="space-y-2">
            <div class="p-3 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-lg">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs text-gray-700 font-garet">Avg. Team Size</span>
                    <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <p class="text-xl font-helvetica font-black text-[#0F4C82]">{{ number_format($avgTeamSize, 1) }}</p>
            </div>

            <div class="p-3 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-lg">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs text-gray-700 font-garet">Payment Rate</span>
                    <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-xl font-helvetica font-black text-[#0F4C82]">{{ number_format($paymentRate, 1) }}%</p>
            </div>

            <div class="p-3 bg-gradient-to-r from-[#C5E6C9]/20 to-[#D3EB9F]/20 rounded-lg">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs text-gray-700 font-garet">Verified Teams</span>
                    <svg class="w-4 h-4 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <p class="text-xl font-helvetica font-black text-[#0F4C82]">{{ number_format($statusBreakdown['approved']) }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <h3 class="text-base font-helvetica font-black text-[#0F4C82] mb-4">Recent Registrations</h3>
        <div class="space-y-2">
            @foreach($recentTeams as $team)
            <div class="flex items-center justify-between p-2 bg-gradient-to-r from-[#C5E6C9]/10 to-[#D3EB9F]/10 rounded-lg hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition">
                <div class="flex-1 min-w-0">
                    <p class="font-helvetica font-black text-[#0F4C82] text-xs truncate">{{ $team->name }}</p>
                    <p class="text-[10px] text-gray-600 font-garet truncate">{{ $team->competition->name }}</p>
                </div>
                <div class="text-right ml-2 flex-shrink-0">
                    @if($team->status === 'approved')
                    <span class="px-2 py-0.5 bg-[#D3EB9F]/20 text-[#0F4C82] text-[10px] font-garet rounded-full">Approved</span>
                    @elseif($team->status === 'pending')
                    <span class="px-2 py-0.5 bg-[#6F97B6]/20 text-[#0F4C82] text-[10px] font-garet rounded-full">Pending</span>
                    @else
                    <span class="px-2 py-0.5 bg-gray-100 text-gray-600 text-[10px] font-garet rounded-full">Rejected</span>
                    @endif
                    <p class="text-[10px] text-gray-500 font-garet mt-0.5">{{ $team->created_at->diffForHumans() }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white rounded-lg shadow border border-gray-100 p-4">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-base font-helvetica font-black text-[#0F4C82]">SEO Pages</h3>
            <a href="{{ route('admin.seo.settings') }}" class="text-xs text-[#0F4C82] hover:text-[#6F97B6] font-helvetica font-black transition">
                Manage →
            </a>
        </div>
        <div class="space-y-2">
            @foreach($seoPages as $page)
            <div class="p-2 border-2 border-gray-100 rounded-lg hover:border-[#D3EB9F] transition">
                <div class="flex items-center justify-between mb-1">
                    <span class="font-helvetica font-black text-[#0F4C82] text-xs truncate">{{ $page->page_name }}</span>
                    @if($page->is_indexable)
                    <span class="text-[10px] text-[#0F4C82] font-garet ml-2">✓ Indexed</span>
                    @else
                    <span class="text-[10px] text-gray-400 font-garet ml-2">No Index</span>
                    @endif
                </div>
                <p class="text-[10px] text-gray-600 font-garet line-clamp-1">{{ $page->meta_description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const colors = {
        primary: '#0F4C82',
        accent: '#D3EB9F',
        gradient1Start: '#C5E6C9',
        gradient1End: '#D3EB9F',
        gradient2: '#6F97B6',
        gradient2Mid: '#8CCDCF',
        gradient2End: '#D6EBDF',
    };

    const registrationCtx = document.getElementById('registrationChart').getContext('2d');
    new Chart(registrationCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($registrationTrend->pluck('date')) !!},
            datasets: [{
                label: 'Teams Registered',
                data: {!! json_encode($registrationTrend->pluck('count')) !!},
                borderColor: colors.primary,
                backgroundColor: colors.primary + '20',
                fill: true,
                tension: 0.4,
                pointBackgroundColor: colors.primary,
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 3,
                pointHoverRadius: 5,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0,
                        font: { size: 10 }
                    }
                },
                x: {
                    ticks: {
                        font: { size: 10 }
                    }
                }
            }
        }
    });

    const competitionCtx = document.getElementById('competitionChart').getContext('2d');
    new Chart(competitionCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($competitionDistribution->pluck('name')) !!},
            datasets: [{
                data: {!! json_encode($competitionDistribution->pluck('teams_count')) !!},
                backgroundColor: [
                    colors.primary,
                    colors.gradient2,
                    colors.gradient1Start,
                    colors.accent,
                    colors.gradient2Mid,
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        font: { size: 10 },
                        padding: 8
                    }
                }
            }
        }
    });
</script>
@endpush
@endsection