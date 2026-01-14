@extends('layouts.app')

@section('title', 'Register Team - ' . $competition->name)

@section('content')
<!-- Header with Wave Divider -->
<section class="relative bg-gradient-to-br from-[#1B4965] via-[#2D5F3F] to-[#1B4965] text-white pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23CAA882\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M0 0h30v30H0V0zm30 30h30v30H30V30z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-white/70 mb-6 text-sm font-body">
            <a href="{{ route('home') }}" class="hover:text-[#CAA882] transition">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('competitions.index') }}" class="hover:text-[#CAA882] transition">Competitions</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('competitions.show', $competition->slug) }}" class="hover:text-[#CAA882] transition truncate max-w-[200px]">{{ $competition->name }}</a>
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-white">Register</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold font-heading mb-4">Team Registration</h1>
        <p class="text-lg text-white/90 font-body">{{ $competition->name }}</p>
    </div>
    
    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L48 8C96 16 192 32 288 37.3C384 43 480 37 576 32C672 27 768 21 864 24C960 27 1056 37 1152 40C1248 43 1344 37 1392 35L1440 32V80H0V0Z" fill="#F5F1E8"/>
        </svg>
    </div>
</section>

<!-- Registration Form -->
<section class="py-16 sm:py-20 bg-[#F5F1E8]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Competition Summary Card -->
        <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 mb-8 border-l-4 border-[#1B4965]">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div class="flex-1">
                    <h3 class="font-bold text-[#2C3539] text-xl mb-4 font-heading">{{ $competition->name }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-[#6B7280] font-body">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-[#C1703F]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#C1703F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[#6B7280]">Registration Period</p>
                                <p class="font-semibold text-[#2C3539]">{{ $competition->registration_start->format('d M') }} - {{ $competition->registration_end->format('d M Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-[#1B4965]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#1B4965]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[#6B7280]">Team Size</p>
                                <p class="font-semibold text-[#2C3539]">{{ $competition->min_team_members }} - {{ $competition->max_team_members }} members</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-[#2D5F3F]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#2D5F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[#6B7280]">Registration Fee</p>
                                <p class="font-bold text-[#C1703F] text-lg">Rp {{ number_format($competition->registration_fee, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if($competition->guidebook)
                <a href="{{ \App\Helpers\FileHelper::getFileUrl($competition->guidebook) }}" 
                   target="_blank"
                   class="inline-flex items-center justify-center px-6 py-3 bg-[#1B4965] text-white font-semibold rounded-lg hover:bg-[#153A52] transition transform hover:scale-105 whitespace-nowrap min-h-[48px] font-heading shadow-md">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download Guidebook
                </a>
                @endif
            </div>
        </div>

        <!-- Registration Form -->
        <form method="POST" 
              action="{{ route('teams.store', $competition->slug) }}" 
              enctype="multipart/form-data"
              x-data="teamRegistration()"
              class="space-y-8">
            @csrf

            <!-- SECTION 1: Team Information -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#1B4965]">
                <div class="p-6 border-b border-[#E5E7EB]">
                    <h2 class="text-xl font-bold text-[#2C3539] flex items-center font-heading">
                        <div class="w-10 h-10 bg-[#1B4965]/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-[#1B4965] font-bold">1</span>
                        </div>
                        Team Information
                    </h2>
                </div>
                <div class="p-6 sm:p-8 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="team_name" class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">
                                Team Name <span class="text-[#EF4444]">*</span>
                            </label>
                            <input type="text" 
                                   name="team_name" 
                                   id="team_name" 
                                   value="{{ old('team_name') }}"
                                   placeholder="Enter your unique team name"
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#1B4965] focus:border-transparent bg-[#F5F1E8] text-[#2C3539] font-body transition @error('team_name') border-[#EF4444] ring-1 ring-[#EF4444] @enderror"
                                   required>
                            @error('team_name')
                            <p class="mt-2 text-sm text-[#EF4444] font-body">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="institution" class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">
                                Institution <span class="text-[#EF4444]">*</span>
                            </label>
                            <input type="text" 
                                   name="institution" 
                                   id="institution" 
                                   value="{{ old('institution', auth()->user()->institution) }}"
                                   placeholder="University / School name"
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#1B4965] focus:border-transparent bg-[#F5F1E8] text-[#2C3539] font-body transition @error('institution') border-[#EF4444] ring-1 ring-[#EF4444] @enderror"
                                   required>
                            @error('institution')
                            <p class="mt-2 text-sm text-[#EF4444] font-body">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Team Leader -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#10B981]">
                <div class="p-6 border-b border-[#E5E7EB]">
                    <h2 class="text-xl font-bold text-[#2C3539] flex items-center font-heading">
                        <div class="w-10 h-10 bg-[#10B981]/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-[#10B981] font-bold">2</span>
                        </div>
                        Team Leader (You)
                    </h2>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">Full Name</label>
                            <input type="text" 
                                   value="{{ auth()->user()->name }}" 
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg bg-[#E5E7EB]/50 text-[#6B7280] cursor-not-allowed font-body"
                                   disabled>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">Email</label>
                            <input type="text" 
                                   value="{{ auth()->user()->email }}" 
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg bg-[#E5E7EB]/50 text-[#6B7280] cursor-not-allowed font-body"
                                   disabled>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">Phone</label>
                            <input type="text" 
                                   value="{{ auth()->user()->phone ?? 'Not set - Please update your profile' }}" 
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg bg-[#E5E7EB]/50 {{ auth()->user()->phone ? 'text-[#6B7280]' : 'text-[#EF4444]' }} cursor-not-allowed font-body"
                                   disabled>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">Institution</label>
                            <input type="text" 
                                   value="{{ auth()->user()->institution ?? 'Not set' }}" 
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg bg-[#E5E7EB]/50 text-[#6B7280] cursor-not-allowed font-body"
                                   disabled>
                        </div>
                    </div>
                    
                    @if(!auth()->user()->phone)
                    <div class="mt-6 p-4 bg-[#CAA882]/10 border border-[#CAA882]/30 rounded-lg">
                        <p class="text-sm text-[#CAA882] font-body flex items-center">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            Please complete your profile first. 
                            <a href="{{ route('profile.edit') }}" class="font-semibold underline ml-1 hover:text-[#A85D35]">Update Profile</a>
                        </p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- SECTION 3: Team Members (if team competition) -->
            @if($competition->max_team_members > 1)
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#5FA8D3]">
                <div class="p-6 border-b border-[#E5E7EB]">
                    <h2 class="text-xl font-bold text-[#2C3539] flex items-center font-heading">
                        <div class="w-10 h-10 bg-[#5FA8D3]/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-[#5FA8D3] font-bold">3</span>
                        </div>
                        Team Members
                    </h2>
                </div>
                <div class="p-6 sm:p-8">
                    <p class="text-sm text-[#6B7280] mb-6 font-body">
                        Add <strong class="text-[#2C3539]">{{ max(0, $competition->min_team_members - 1) }} - {{ $competition->max_team_members - 1 }}</strong> team member(s) (excluding yourself as leader)
                    </p>

                    <!-- Dynamic Members Container -->
                    <div class="space-y-6" id="members-container">
                        <template x-for="(member, index) in members" :key="index">
                            <div class="p-6 bg-[#F5F1E8] rounded-xl border-2 border-[#E5E7EB] relative hover:border-[#5FA8D3] transition">
                                <div class="flex items-center justify-between mb-4">
                                    <h4 class="font-semibold text-[#2C3539] flex items-center font-heading">
                                        <span class="w-8 h-8 bg-[#5FA8D3]/20 text-[#5FA8D3] rounded-full flex items-center justify-center text-sm mr-2 font-bold" x-text="index + 1"></span>
                                        <span x-text="'Member ' + (index + 1)"></span>
                                    </h4>
                                    <button type="button" 
                                            @click="removeMember(index)"
                                            x-show="members.length > {{ max(0, $competition->min_team_members - 1) }}"
                                            class="text-[#EF4444] hover:text-[#DC2626] hover:bg-[#EF4444]/10 p-2 rounded-lg transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-[#2C3539] mb-1 font-heading">
                                            Full Name <span class="text-[#EF4444]">*</span>
                                        </label>
                                        <input type="text" 
                                               :name="'members[' + index + '][name]'"
                                               x-model="member.name"
                                               placeholder="Member's full name"
                                               class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#5FA8D3] focus:border-transparent bg-white text-[#2C3539] font-body transition"
                                               required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-[#2C3539] mb-1 font-heading">
                                            Email <span class="text-[#EF4444]">*</span>
                                        </label>
                                        <input type="email" 
                                               :name="'members[' + index + '][email]'"
                                               x-model="member.email"
                                               placeholder="member@email.com"
                                               class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#5FA8D3] focus:border-transparent bg-white text-[#2C3539] font-body transition"
                                               required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-[#2C3539] mb-1 font-heading">
                                            Phone <span class="text-[#EF4444]">*</span>
                                        </label>
                                        <input type="text" 
                                               :name="'members[' + index + '][phone]'"
                                               x-model="member.phone"
                                               placeholder="08123456789"
                                               class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#5FA8D3] focus:border-transparent bg-white text-[#2C3539] font-body transition"
                                               required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-[#2C3539] mb-1 font-heading">
                                            Institution <span class="text-[#EF4444]">*</span>
                                        </label>
                                        <input type="text" 
                                               :name="'members[' + index + '][institution]'"
                                               x-model="member.institution"
                                               placeholder="University / School"
                                               class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#5FA8D3] focus:border-transparent bg-white text-[#2C3539] font-body transition"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Add Member Button -->
                    <button type="button" 
                            @click="addMember()"
                            x-show="members.length < {{ $competition->max_team_members - 1 }}"
                            class="mt-6 w-full py-4 border-2 border-dashed border-[#5FA8D3]/50 rounded-lg text-[#5FA8D3] hover:border-[#5FA8D3] hover:bg-[#5FA8D3]/5 transition flex items-center justify-center font-heading font-semibold min-h-[48px]">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add Another Member
                    </button>
                </div>
            </div>
            @endif

            <!-- SECTION 4: Twibbon Verification -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#CAA882]">
                <div class="p-6 border-b border-[#E5E7EB]">
                    <h2 class="text-xl font-bold text-[#2C3539] flex items-center font-heading">
                        <div class="w-10 h-10 bg-[#CAA882]/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-[#CAA882] font-bold">{{ $competition->max_team_members > 1 ? '4' : '3' }}</span>
                        </div>
                        Twibbon Verification
                    </h2>
                </div>
                <div class="p-6 sm:p-8 space-y-6">
                    <!-- Instructions -->
                    <div class="p-6 bg-[#C1703F]/5 rounded-xl border-2 border-[#C1703F]/20">
                        <h4 class="font-semibold text-[#C1703F] mb-4 flex items-center font-heading text-lg">
                            <span class="text-2xl mr-2">📸</span> Twibbon Instructions
                        </h4>
                        <ol class="text-sm text-[#6B7280] space-y-3 list-decimal list-inside font-body ml-2">
                            <li>Download our official twibbon from the link below</li>
                            <li>Apply the twibbon to your photo</li>
                            <li>Post on Instagram with hashtag <strong class="text-[#C1703F]">#BOREYES2026</strong></li>
                            <li>Make sure your post is <strong class="text-[#2C3539]">PUBLIC</strong></li>
                            <li>Upload screenshot of your Instagram post below</li>
                        </ol>
                        <div class="mt-6 pt-6 border-t border-[#C1703F]/20">
                            <a href="https://twibbon.com/boreyes2026" 
                               target="_blank"
                               class="inline-flex items-center justify-center px-6 py-3 bg-[#C1703F] text-white font-semibold rounded-lg hover:bg-[#A85D35] transition transform hover:scale-105 min-h-[48px] font-heading shadow-md">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                Download Twibbon
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="twibbon_proof" class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">
                                Screenshot of Instagram Post <span class="text-[#EF4444]">*</span>
                            </label>
                            <input type="file" 
                                   name="twibbon_proof" 
                                   id="twibbon_proof"
                                   accept="image/*"
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#C1703F] focus:border-transparent bg-[#F5F1E8] file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-[#C1703F]/10 file:text-[#C1703F] hover:file:bg-[#C1703F]/20 font-body transition @error('twibbon_proof') border-[#EF4444] ring-1 ring-[#EF4444] @enderror"
                                   required>
                            <p class="text-xs text-[#6B7280] mt-2 font-body">Format: JPG, PNG, JPEG (Max: 2MB)</p>
                            @error('twibbon_proof')
                            <p class="mt-2 text-sm text-[#EF4444] font-body">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="twibbon_link" class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">
                                Instagram Post URL <span class="text-[#EF4444]">*</span>
                            </label>
                            <input type="url" 
                                   name="twibbon_link" 
                                   id="twibbon_link"
                                   value="{{ old('twibbon_link') }}"
                                   placeholder="https://www.instagram.com/p/..."
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#C1703F] focus:border-transparent bg-[#F5F1E8] text-[#2C3539] font-body transition @error('twibbon_link') border-[#EF4444] ring-1 ring-[#EF4444] @enderror"
                                   required>
                            @error('twibbon_link')
                            <p class="mt-2 text-sm text-[#EF4444] font-body">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 5: Payment -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-[#2D5F3F]">
                <div class="p-6 border-b border-[#E5E7EB]">
                    <h2 class="text-xl font-bold text-[#2C3539] flex items-center font-heading">
                        <div class="w-10 h-10 bg-[#2D5F3F]/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-[#2D5F3F] font-bold">{{ $competition->max_team_members > 1 ? '5' : '4' }}</span>
                        </div>
                        Payment
                    </h2>
                </div>
                <div class="p-6 sm:p-8 space-y-6">
                    <!-- Payment Details -->
                    <div class="p-6 bg-[#2D5F3F]/5 rounded-xl border-2 border-[#2D5F3F]/20">
                        <h4 class="font-semibold text-[#2D5F3F] mb-4 flex items-center font-heading text-lg">
                            <span class="text-2xl mr-2">💳</span> Payment Details
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm font-body">
                            <div class="p-4 bg-white rounded-lg">
                                <p class="text-[#6B7280] mb-1">Amount</p>
                                <p class="font-bold text-[#2C3539] text-2xl font-heading">Rp {{ number_format($competition->registration_fee, 0, ',', '.') }}</p>
                            </div>
                            <div class="p-4 bg-white rounded-lg">
                                <p class="text-[#6B7280] mb-1">Bank</p>
                                <p class="font-bold text-[#2C3539] text-xl font-heading">BCA</p>
                            </div>
                            <div class="p-4 bg-white rounded-lg">
                                <p class="text-[#6B7280] mb-1">Account Number</p>
                                <p class="font-bold text-[#2C3539] font-mono text-xl">1234567890</p>
                            </div>
                            <div class="p-4 bg-white rounded-lg">
                                <p class="text-[#6B7280] mb-1">Account Name</p>
                                <p class="font-bold text-[#2C3539] text-lg font-heading">BOREYES 2026</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="payment_proof" class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">
                                Upload Payment Proof <span class="text-[#EF4444]">*</span>
                            </label>
                            <input type="file" 
                                   name="payment_proof" 
                                   id="payment_proof"
                                   accept="image/*,.pdf"
                                   class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#2D5F3F] focus:border-transparent bg-[#F5F1E8] file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-[#2D5F3F]/10 file:text-[#2D5F3F] hover:file:bg-[#2D5F3F]/20 font-body transition @error('payment_proof') border-[#EF4444] ring-1 ring-[#EF4444] @enderror"
                                   required>
                            <p class="text-xs text-[#6B7280] mt-2 font-body">Format: JPG, PNG, JPEG, PDF (Max: 2MB)</p>
                            @error('payment_proof')
                            <p class="mt-2 text-sm text-[#EF4444] font-body">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="payment_method" class="block text-sm font-semibold text-[#2C3539] mb-2 font-heading">
                                Payment Method <span class="text-[#EF4444]">*</span>
                            </label>
                            <select name="payment_method" 
                                    id="payment_method"
                                    class="w-full px-4 py-3 border border-[#E5E7EB] rounded-lg focus:ring-2 focus:ring-[#2D5F3F] focus:border-transparent bg-[#F5F1E8] text-[#2C3539] font-body transition @error('payment_method') border-[#EF4444] ring-1 ring-[#EF4444] @enderror"
                                    required>
                                <option value="">-- Select Payment Method --</option>
                                <option value="bank_transfer" {{ old('payment_method') == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer (BCA)</option>
                                <option value="bank_transfer_other" {{ old('payment_method') == 'bank_transfer_other' ? 'selected' : '' }}>Bank Transfer (Other)</option>
                                <option value="e_wallet" {{ old('payment_method') == 'e_wallet' ? 'selected' : '' }}>E-Wallet (OVO/GoPay/Dana)</option>
                                <option value="qris" {{ old('payment_method') == 'qris' ? 'selected' : '' }}>QRIS</option>
                            </select>
                            @error('payment_method')
                            <p class="mt-2 text-sm text-[#EF4444] font-body">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agreement & Submit -->
            <div class="bg-white rounded-xl shadow-md p-6 sm:p-8">
                <div class="flex items-start mb-8">
                    <input type="checkbox" 
                           name="agree_terms" 
                           id="agree_terms"
                           class="w-5 h-5 mt-0.5 text-[#1B4965] border-[#E5E7EB] rounded focus:ring-[#1B4965]"
                           required>
                    <label for="agree_terms" class="ml-3 text-sm text-[#6B7280] font-body">
                        I have read and agree to the 
                        <a href="#" class="text-[#1B4965] hover:text-[#153A52] font-semibold underline">Terms and Conditions</a>, 
                        and I confirm that all information provided above is accurate and complete.
                    </label>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('competitions.show', $competition->slug) }}" 
                       class="flex-1 py-4 px-6 bg-[#F5F1E8] text-[#2C3539] font-semibold rounded-lg hover:bg-[#E5E1D8] transition text-center min-h-[48px] flex items-center justify-center font-heading border-2 border-[#E5E7EB]">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back
                    </a>
                    <button type="submit" 
                            class="flex-1 py-4 px-6 bg-[#C1703F] text-white font-bold rounded-lg hover:bg-[#A85D35] transition shadow-lg hover:shadow-xl transform hover:scale-105 min-h-[48px] font-heading">
                        Submit Registration
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

@push('scripts')
<script>
function teamRegistration() {
    return {
        members: [],
        minMembers: {{ max(0, $competition->min_team_members - 1) }},
        maxMembers: {{ $competition->max_team_members - 1 }},
        
        init() {
            // Initialize with minimum required members
            for (let i = 0; i < this.minMembers; i++) {
                this.addMember();
            }
        },
        
        addMember() {
            if (this.members.length < this.maxMembers) {
                this.members.push({
                    name: '',
                    email: '',
                    phone: '',
                    institution: ''
                });
            }
        },
        
        removeMember(index) {
            if (this.members.length > this.minMembers) {
                this.members.splice(index, 1);
            }
        }
    }
}
</script>
@endpush
@endsection