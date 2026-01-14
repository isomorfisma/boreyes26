@extends('layouts.app')

@section('title', 'My Teams')

@section('content')
<!-- Header with Wave Divider -->
<section class="relative bg-gradient-to-br from-[#1B4965] via-[#2D5F3F] to-[#1B4965] text-white pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23CAA882\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M0 0h30v30H0V0zm30 30h30v30H30V30z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-white/70 mb-6 text-sm font-body">
            <a href="{{ route('dashboard') }}" class="hover:text-[#CAA882] transition">Dashboard</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-white">My Teams</span>
        </nav>
        
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold font-heading mb-3">My Teams</h1>
                <p class="text-lg text-white/90 font-body">Manage all your registered teams</p>
            </div>
            <a href="{{ route('competitions.index') }}" 
               class="inline-flex items-center justify-center px-6 py-3 bg-[#C1703F] text-white font-semibold rounded-lg hover:bg-[#A85D35] transition transform hover:scale-105 shadow-lg min-h-[48px] font-heading">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Register New Team
            </a>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V80H0V0Z" fill="#F5F1E8"/>
        </svg>
    </div>
</section>

<!-- Teams List -->
<section class="py-16 sm:py-20 bg-[#F5F1E8] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(session('success'))
        <div class="mb-8 p-5 bg-[#10B981]/10 border-2 border-[#10B981]/30 text-[#10B981] rounded-xl flex items-center shadow-md">
            <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="font-semibold font-body">{{ session('success') }}</span>
        </div>
        @endif

        @if($teams->count() > 0)
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[#6B7280] text-sm mb-1 font-body">Total Teams</p>
                        <p class="text-4xl font-bold text-[#1B4965] font-heading">{{ $teams->count() }}</p>
                    </div>
                    <div class="w-14 h-14 bg-[#1B4965]/10 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[#6B7280] text-sm mb-1 font-body">Approved</p>
                        <p class="text-4xl font-bold text-[#10B981] font-heading">{{ $teams->where('status', 'approved')->count() }}</p>
                    </div>
                    <div class="w-14 h-14 bg-[#10B981]/10 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[#6B7280] text-sm mb-1 font-body">Pending</p>
                        <p class="text-4xl font-bold text-[#CAA882] font-heading">{{ $teams->where('status', 'pending')->count() }}</p>
                    </div>
                    <div class="w-14 h-14 bg-[#CAA882]/10 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-[#CAA882]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[#6B7280] text-sm mb-1 font-body">Submissions</p>
                        <p class="text-4xl font-bold text-[#5FA8D3] font-heading">{{ $teams->sum('submissions_count') }}</p>
                    </div>
                    <div class="w-14 h-14 bg-[#5FA8D3]/10 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-[#5FA8D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Teams Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($teams as $team)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                <!-- Card Header -->
                <div class="p-6 bg-gradient-to-br from-[#1B4965] via-[#2D5F3F] to-[#1B4965]">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex-1 min-w-0">
                            <h3 class="text-xl font-bold text-white mb-2 line-clamp-1 font-heading">{{ $team->name }}</h3>
                            <p class="text-white/80 text-sm font-body">{{ $team->institution }}</p>
                        </div>
                        @switch($team->status)
                            @case('approved')
                                <span class="px-3 py-1.5 bg-[#10B981] text-white text-xs font-semibold rounded-full whitespace-nowrap ml-2 font-heading">✓ Approved</span>
                                @break
                            @case('pending')
                                <span class="px-3 py-1.5 bg-[#CAA882] text-white text-xs font-semibold rounded-full whitespace-nowrap ml-2 animate-pulse font-heading">⏳ Pending</span>
                                @break
                            @case('rejected')
                                <span class="px-3 py-1.5 bg-[#EF4444] text-white text-xs font-semibold rounded-full whitespace-nowrap ml-2 font-heading">✗ Rejected</span>
                                @break
                        @endswitch
                    </div>
                    <code class="inline-block px-3 py-1.5 bg-white/20 rounded-lg text-white text-xs font-mono backdrop-blur-sm">{{ $team->code }}</code>
                </div>

                <!-- Card Body -->
                <div class="p-6 flex-1 flex flex-col">
                    <!-- Competition Info -->
                    <div class="mb-4 pb-4 border-b border-[#E5E7EB]">
                        <div class="flex items-start space-x-3 mb-2">
                            <div class="w-10 h-10 bg-[#1B4965]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-[#2C3539] line-clamp-1 mb-1 font-heading">{{ $team->competition->name }}</p>
                                <p class="text-xs text-[#6B7280] font-body">{{ $team->competition->category->name }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Stats -->
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        <div class="p-4 bg-[#F5F1E8] rounded-lg">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs text-[#6B7280] font-body">Members</span>
                                <svg class="w-4 h-4 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <p class="text-2xl font-bold text-[#2C3539] font-heading">{{ $team->members->count() }}</p>
                        </div>
                        <div class="p-4 bg-[#F5F1E8] rounded-lg">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs text-[#6B7280] font-body">Submissions</span>
                                <svg class="w-4 h-4 text-[#5FA8D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <p class="text-2xl font-bold text-[#2C3539] font-heading">{{ $team->submissions_count }}</p>
                        </div>
                    </div>

                    <!-- Payment Status -->
                    @if($team->payment)
                    <div class="mb-4 p-3 rounded-lg {{ $team->payment->status === 'verified' ? 'bg-[#10B981]/10 border-2 border-[#10B981]/30' : ($team->payment->status === 'pending' ? 'bg-[#CAA882]/10 border-2 border-[#CAA882]/30' : 'bg-[#EF4444]/10 border-2 border-[#EF4444]/30') }}">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-semibold {{ $team->payment->status === 'verified' ? 'text-[#10B981]' : ($team->payment->status === 'pending' ? 'text-[#CAA882]' : 'text-[#EF4444]') }} font-heading">
                                Payment: {{ ucfirst($team->payment->status) }}
                            </span>
                            @if($team->payment->status === 'verified')
                            <svg class="w-5 h-5 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            @elseif($team->payment->status === 'pending')
                            <svg class="w-5 h-5 text-[#CAA882]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            @else
                            <svg class="w-5 h-5 text-[#EF4444]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            @endif
                        </div>
                    </div>
                    @endif

                    <!-- Leader Badge -->
                    @if($team->leader_id === auth()->id())
                    <div class="mb-4">
                        <span class="inline-flex items-center px-3 py-1.5 bg-[#CAA882]/10 text-[#CAA882] text-xs font-semibold rounded-lg font-heading">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            Team Leader
                        </span>
                    </div>
                    @endif

                    <!-- Action Button -->
                    <a href="{{ route('teams.show', $team->code) }}" 
                       class="block w-full py-3 bg-[#1B4965] text-white font-semibold rounded-lg hover:bg-[#153A52] transition text-center shadow-md hover:shadow-lg transform hover:scale-105 min-h-[48px] flex items-center justify-center font-heading">
                        View Details
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>

                <!-- Card Footer - Timestamp -->
                <div class="px-6 py-4 bg-[#F5F1E8] border-t-2 border-[#E5E7EB]">
                    <p class="text-xs text-[#6B7280] flex items-center font-body">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Registered {{ $team->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        @else
        <!-- Empty State -->
        <div class="bg-white rounded-xl shadow-md p-12 sm:p-16 text-center">
            <div class="w-32 h-32 bg-[#1B4965]/10 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg class="w-16 h-16 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-bold text-[#2C3539] mb-4 font-heading">No Teams Yet</h3>
            <p class="text-[#6B7280] mb-8 max-w-md mx-auto leading-relaxed font-body">
                You haven't registered for any competitions yet. Browse available competitions and create your first team!
            </p>
            <a href="{{ route('competitions.index') }}" 
               class="inline-flex items-center justify-center px-8 py-4 bg-[#C1703F] text-white font-semibold rounded-lg hover:bg-[#A85D35] transition shadow-lg hover:shadow-xl transform hover:scale-105 min-h-[48px] font-heading">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Browse Competitions
            </a>
        </div>
        @endif
    </div>
</section>
@endsection