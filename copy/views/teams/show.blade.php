@extends('layouts.app')

@section('title', 'Team: ' . $team->name)

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
            <a href="{{ route('teams.index') }}" class="hover:text-[#CAA882] transition">My Teams</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-white">{{ $team->name }}</span>
        </nav>

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
            <div>
                <div class="flex flex-wrap items-center gap-3 mb-3">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold font-heading">{{ $team->name }}</h1>
                    @switch($team->status)
                        @case('approved')
                            <span class="px-4 py-2 bg-[#10B981] text-white text-sm font-semibold rounded-full font-heading shadow-lg">✓ Approved</span>
                            @break
                        @case('pending')
                            <span class="px-4 py-2 bg-[#CAA882] text-white text-sm font-semibold rounded-full animate-pulse font-heading shadow-lg">⏳ Pending</span>
                            @break
                        @case('rejected')
                            <span class="px-4 py-2 bg-[#EF4444] text-white text-sm font-semibold rounded-full font-heading shadow-lg">✗ Rejected</span>
                            @break
                    @endswitch
                </div>
                <p class="text-lg text-white/90 font-body">{{ $team->competition->name }}</p>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <code class="px-4 py-2 bg-white/20 rounded-lg text-sm font-mono backdrop-blur-sm">{{ $team->code }}</code>
                @if($team->isApproved() && $team->wa_group_link)
                <a href="{{ $team->wa_group_link }}" 
                   target="_blank"
                   class="inline-flex items-center justify-center px-6 py-3 bg-[#2D5F3F] text-white font-semibold rounded-lg hover:bg-[#234A31] transition transform hover:scale-105 shadow-lg min-h-[48px] font-heading">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Join WA Group
                </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V80H0V0Z" fill="#F5F1E8"/>
        </svg>
    </div>
</section>

<!-- Main Content -->
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

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Main Info -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Team Members Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#1B4965]">
                    <div class="p-6 border-b-2 border-[#E5E7EB]">
                        <h2 class="text-2xl font-bold text-[#2C3539] flex items-center font-heading">
                            <div class="w-12 h-12 bg-[#1B4965]/10 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <span>Team Members ({{ $team->members->count() }})</span>
                        </h2>
                    </div>
                    <div class="divide-y-2 divide-[#E5E7EB]">
                        @foreach($team->members as $member)
                        <div class="p-6 flex items-center justify-between hover:bg-[#F5F1E8] transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-[#1B4965] via-[#2D5F3F] to-[#1B4965] rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-md font-heading">
                                    {{ strtoupper(substr($member->name, 0, 2)) }}
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#2C3539] text-lg font-heading">{{ $member->name }}</h4>
                                    <p class="text-sm text-[#6B7280] font-body">{{ $member->email }}</p>
                                    @if($member->phone)
                                    <p class="text-sm text-[#6B7280] font-body">{{ $member->phone }}</p>
                                    @endif
                                </div>
                            </div>
                            <div>
                                @if($member->pivot->role === 'leader')
                                <span class="px-4 py-2 bg-[#CAA882]/10 text-[#CAA882] text-sm font-semibold rounded-lg font-heading border-2 border-[#CAA882]/30">
                                    👑 Leader
                                </span>
                                @else
                                <span class="px-4 py-2 bg-[#E5E7EB] text-[#6B7280] text-sm font-semibold rounded-lg font-heading">
                                    Member
                                </span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Competition Timeline -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#5FA8D3]">
                    <div class="p-6 border-b-2 border-[#E5E7EB]">
                        <h2 class="text-2xl font-bold text-[#2C3539] flex items-center font-heading">
                            <div class="w-12 h-12 bg-[#5FA8D3]/10 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-[#5FA8D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            Competition Schedule
                        </h2>
                    </div>
                    <div class="p-8">
                        <div class="relative">
                            <!-- Timeline Line -->
                            <div class="absolute left-6 top-0 bottom-0 w-1 bg-gradient-to-b from-[#1B4965] to-[#5FA8D3] rounded-full"></div>
                            
                            <!-- Registration Period -->
                            <div class="relative flex items-start mb-12">
                                <div class="w-12 h-12 bg-[#1B4965] rounded-xl flex items-center justify-center z-10 shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <h4 class="font-semibold text-[#2C3539] text-lg mb-1 font-heading">Registration Period</h4>
                                    <p class="text-[#6B7280] font-body">{{ $team->competition->registration_start->format('d M Y') }} - {{ $team->competition->registration_end->format('d M Y') }}</p>
                                    @if(now()->between($team->competition->registration_start, $team->competition->registration_end))
                                    <span class="inline-block mt-2 px-3 py-1 bg-[#10B981]/10 text-[#10B981] text-xs font-semibold rounded-full border border-[#10B981]/30 font-heading">Ongoing</span>
                                    @elseif(now()->gt($team->competition->registration_end))
                                    <span class="inline-block mt-2 px-3 py-1 bg-[#E5E7EB] text-[#6B7280] text-xs font-semibold rounded-full font-heading">Completed</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Competition Period -->
                            <div class="relative flex items-start">
                                <div class="w-12 h-12 bg-[#5FA8D3] rounded-xl flex items-center justify-center z-10 shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <h4 class="font-semibold text-[#2C3539] text-lg mb-1 font-heading">Competition Period</h4>
                                    <p class="text-[#6B7280] font-body">{{ $team->competition->competition_start->format('d M Y') }} - {{ $team->competition->competition_end->format('d M Y') }}</p>
                                    @if(now()->between($team->competition->competition_start, $team->competition->competition_end))
                                    <span class="inline-block mt-2 px-3 py-1 bg-[#10B981]/10 text-[#10B981] text-xs font-semibold rounded-full border border-[#10B981]/30 font-heading">Ongoing</span>
                                    @elseif(now()->lt($team->competition->competition_start))
                                    <span class="inline-block mt-2 px-3 py-1 bg-[#1B4965]/10 text-[#1B4965] text-xs font-semibold rounded-full border border-[#1B4965]/30 font-heading">Upcoming</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submissions Section (only for approved teams) -->
                @if($team->isApproved())
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#CAA882]">
                    <div class="p-6 border-b-2 border-[#E5E7EB] flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <h2 class="text-2xl font-bold text-[#2C3539] flex items-center font-heading">
                            <div class="w-12 h-12 bg-[#CAA882]/10 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-[#CAA882]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            Submissions
                        </h2>
                        @if($team->competition->status === 'ongoing' || $team->competition->status === 'open')
                        <a href="{{ route('submissions.create', $team->code) }}" 
                           class="inline-flex items-center justify-center px-6 py-3 bg-[#CAA882] text-white font-semibold rounded-lg hover:bg-[#A85D35] transition transform hover:scale-105 text-sm shadow-md min-h-[48px] font-heading">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            New Submission
                        </a>
                        @endif
                    </div>
                    
                    @if($team->submissions->count() > 0)
                    <div class="divide-y-2 divide-[#E5E7EB]">
                        @foreach($team->submissions as $submission)
                        <div class="p-6 hover:bg-[#F5F1E8] transition">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-4">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-[#2C3539] text-lg mb-2 font-heading">{{ $submission->title }}</h4>
                                    <p class="text-sm text-[#6B7280] font-body flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        Submitted: {{ $submission->created_at->format('d M Y, H:i') }}
                                    </p>
                                    @if($submission->description)
                                    <p class="text-sm text-[#6B7280] mt-2 font-body">{{ Str::limit($submission->description, 120) }}</p>
                                    @endif
                                </div>
                                <div class="text-center sm:text-right">
                                    @if($submission->score !== null)
                                    <div class="inline-block p-4 bg-[#1B4965]/10 rounded-xl">
                                        <p class="text-4xl font-bold text-[#1B4965] font-heading">{{ number_format($submission->score, 1) }}</p>
                                        <p class="text-xs text-[#6B7280] mt-1 font-body">Score</p>
                                    </div>
                                    @else
                                    <span class="px-4 py-2 bg-[#CAA882]/10 text-[#CAA882] text-sm font-semibold rounded-lg border-2 border-[#CAA882]/30 font-heading">
                                        Under Review
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @if($submission->feedback)
                            <div class="mt-4 p-4 bg-[#1B4965]/5 rounded-lg border-2 border-[#1B4965]/20">
                                <p class="text-sm text-[#2C3539] font-body">
                                    <strong class="text-[#1B4965] font-heading">Feedback:</strong> {{ $submission->feedback }}
                                </p>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="p-12 text-center">
                        <div class="w-20 h-20 bg-[#E5E7EB] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <p class="text-[#6B7280] mb-6 font-body">No submissions yet</p>
                        <a href="{{ route('submissions.create', $team->code) }}" 
                           class="inline-flex items-center justify-center px-6 py-3 bg-[#CAA882] text-white font-semibold rounded-lg hover:bg-[#A85D35] transition transform hover:scale-105 shadow-md min-h-[48px] font-heading">
                            Create Your First Submission
                        </a>
                    </div>
                    @endif
                </div>
                @endif
            </div>

            <!-- Right Column - Sidebar -->
            <div class="lg:col-span-1 space-y-8">
                
                <!-- Registration Status Progress -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#1B4965]">
                    <div class="p-6 border-b-2 border-[#E5E7EB]">
                        <h3 class="font-bold text-[#2C3539] text-lg font-heading">Registration Progress</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Step 1: Registration -->
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-[#10B981] rounded-xl flex items-center justify-center shadow-md">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-[#2C3539] font-heading">Registration</p>
                                    <p class="text-xs text-[#10B981] font-body">Completed</p>
                                </div>
                            </div>

                            <!-- Connector Line -->
                            <div class="ml-6 border-l-4 border-[#E5E7EB] h-6"></div>

                            <!-- Step 2: Payment -->
                            <div class="flex items-center space-x-4">
                                @if($team->payment && $team->payment->status === 'verified')
                                <div class="w-12 h-12 bg-[#10B981] rounded-xl flex items-center justify-center shadow-md">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                @elseif($team->payment && $team->payment->status === 'pending')
                                <div class="w-12 h-12 bg-[#CAA882] rounded-xl flex items-center justify-center shadow-md">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                @elseif($team->payment && $team->payment->status === 'rejected')
                                <div class="w-12 h-12 bg-[#EF4444] rounded-xl flex items-center justify-center shadow-md">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                @else
                                <div class="w-12 h-12 bg-[#E5E7EB] rounded-xl flex items-center justify-center">
                                    <span class="text-[#6B7280] font-bold text-lg font-heading">2</span>
                                </div>
                                @endif
                                <div class="flex-1">
                                    <p class="font-semibold text-[#2C3539] font-heading">Payment</p>
                                    <p class="text-xs {{ $team->payment ? ($team->payment->status === 'verified' ? 'text-[#10B981]' : ($team->payment->status === 'pending' ? 'text-[#CAA882]' : 'text-[#EF4444]')) : 'text-[#6B7280]' }} font-body">
                                        {{ $team->payment ? ucfirst($team->payment->status) : 'Uploaded' }}
                                    </p>
                                </div>
                            </div>

                            <!-- Connector Line -->
                            <div class="ml-6 border-l-4 border-[#E5E7EB] h-6"></div>

                            <!-- Step 3: Verification -->
                            <div class="flex items-center space-x-4">
                                @if($team->status === 'approved')
                                <div class="w-12 h-12 bg-[#10B981] rounded-xl flex items-center justify-center shadow-md">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                @elseif($team->status === 'rejected')
                                <div class="w-12 h-12 bg-[#EF4444] rounded-xl flex items-center justify-center shadow-md">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                @else
                                <div class="w-12 h-12 bg-[#E5E7EB] rounded-xl flex items-center justify-center">
                                    <span class="text-[#6B7280] font-bold text-lg font-heading">3</span>
                                </div>
                                @endif
                                <div class="flex-1">
                                    <p class="font-semibold text-[#2C3539] font-heading">Team Verification</p>
                                    <p class="text-xs {{ $team->status === 'approved' ? 'text-[#10B981]' : ($team->status === 'rejected' ? 'text-[#EF4444]' : 'text-[#6B7280]') }} font-body">
                                        {{ ucfirst($team->status) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Details Card -->
                @if($team->payment)
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#2D5F3F]">
                    <div class="p-6 border-b-2 border-[#E5E7EB]">
                        <h3 class="font-bold text-[#2C3539] text-lg font-heading">Payment Details</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between items-center pb-3 border-b border-[#E5E7EB]">
                            <span class="text-[#6B7280] text-sm font-body">Invoice</span>
                            <code class="text-xs bg-[#F5F1E8] px-3 py-1.5 rounded-lg font-mono">{{ $team->payment->invoice_number }}</code>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-[#E5E7EB]">
                            <span class="text-[#6B7280] text-sm font-body">Amount</span>
                            <span class="font-bold text-[#2C3539] text-lg font-heading">Rp {{ number_format($team->payment->amount, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-[#E5E7EB]">
                            <span class="text-[#6B7280] text-sm font-body">Method</span>
                            <span class="text-[#2C3539] font-semibold font-body">{{ ucwords(str_replace('_', ' ', $team->payment->payment_method)) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-[#6B7280] text-sm font-body">Status</span>
                            @switch($team->payment->status)
                                @case('verified')
                                    <span class="px-3 py-1.5 bg-[#10B981]/10 text-[#10B981] text-xs font-semibold rounded-lg border border-[#10B981]/30 font-heading">Verified</span>
                                    @break
                                @case('pending')
                                    <span class="px-3 py-1.5 bg-[#CAA882]/10 text-[#CAA882] text-xs font-semibold rounded-lg border border-[#CAA882]/30 font-heading">Pending</span>
                                    @break
                                @case('rejected')
                                    <span class="px-3 py-1.5 bg-[#EF4444]/10 text-[#EF4444] text-xs font-semibold rounded-lg border border-[#EF4444]/30 font-heading">Rejected</span>
                                    @break
                            @endswitch
                        </div>
                        @if($team->payment->verified_at)
                        <div class="flex justify-between items-center pt-3 border-t border-[#E5E7EB]">
                            <span class="text-[#6B7280] text-sm font-body">Verified At</span>
                            <span class="text-[#2C3539] text-sm font-body">{{ $team->payment->verified_at->format('d M Y') }}</span>
                        </div>
                        @endif
                        @if($team->payment->notes && $team->payment->status === 'rejected')
                        <div class="mt-4 p-4 bg-[#EF4444]/10 rounded-lg border-2 border-[#EF4444]/30">
                            <p class="text-sm text-[#EF4444] font-body"><strong class="font-heading">Note:</strong> {{ $team->payment->notes }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                <!-- Competition Info Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#5FA8D3]">
                    <div class="p-6 border-b-2 border-[#E5E7EB]">
                        <h3 class="font-bold text-[#2C3539] text-lg font-heading">Competition</h3>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-[#2C3539] text-lg mb-3 font-heading">{{ $team->competition->name }}</h4>
                        <p class="text-sm text-[#6B7280] mb-6 leading-relaxed font-body">{{ Str::limit($team->competition->description, 150) }}</p>
                        
                        @if($team->competition->guidebook)
                        <a href="{{ \App\Helpers\FileHelper::getFileUrl($team->competition->guidebook) }}" 
                           target="_blank"
                           class="inline-flex items-center justify-center w-full px-6 py-3 bg-[#1B4965] text-white font-semibold rounded-lg hover:bg-[#153A52] transition transform hover:scale-105 shadow-md min-h-[48px] font-heading">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download Guidebook
                        </a>
                        @endif
                    </div>
                </div>

                <!-- WA Group Card (for approved teams) -->
                @if($team->isApproved() && $team->wa_group_link)
                <div class="bg-gradient-to-br from-[#2D5F3F] to-[#1B4965] rounded-xl shadow-md p-6 text-white relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23CAA882\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M0 0h20v20H0V0zm20 20h20v20H20V20z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                    <div class="relative">
                        <div class="flex items-center mb-3">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg font-heading">WhatsApp Group</h3>
                                <p class="text-white/80 text-sm font-body">Stay connected with updates</p>
                            </div>
                        </div>
                        <a href="{{ $team->wa_group_link }}" 
                           target="_blank"
                           class="block w-full py-3 bg-white text-[#2D5F3F] font-bold rounded-lg text-center hover:bg-white/90 transition transform hover:scale-105 shadow-lg min-h-[48px] flex items-center justify-center font-heading">
                            Join Group Now
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection