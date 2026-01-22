<!-- Navigation -->
        <nav x-data="{ open: false, scrolled: false, homeDropdown: false }" 
             @scroll.window="scrolled = window.pageYOffset > 20"
             :class="scrolled ? 'bg-white shadow-lg' : 'bg-white/95 backdrop-blur-md'"
             class="fixed w-full z-50 transition-all duration-300"
             style="height: 72px;">
             
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
                <div class="flex justify-between h-full">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-3">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center">
                                <img src="{{ asset('assets/svg/LOGO.svg') }}" alt="Boreyes Logo" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <div class="hidden sm:block">
                                <div class="text-lg sm:text-xl font-black text-[#0F4C82] font-helvetica tracking-tight leading-tight">BOREYES</div>
                                <div class="text-lg sm:text-xl font-black text-[#0F4C82] font-helvetica tracking-tight leading-tight">2026</div>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                     
                    <div class="hidden lg:flex items-center space-x-1">
                        <!-- Home with Dropdown -->
                        <div class="relative" @mouseenter="homeDropdown = true" @mouseleave="homeDropdown = false">
                            <a href="/" 
                               class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->is('/') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30 text-[#0F4C82]' : '' }}">
                                Home
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="homeDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                           <!-- Home Dropdown Menu -->
                            <div x-show="homeDropdown"
                                x-cloak
                                x-data="{ showItems: false }"
                                x-init="$watch('homeDropdown', v => { if(v){ showItems=false; setTimeout(()=>showItems=true, 10)} else { showItems=false } })"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-2xl border-2 border-[#D3EB9F]/30 overflow-hidden">

                                <!-- Dropdown Header -->
                                <div class="px-4 py-3 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]">
                                    <p class="text-xs font-black text-white font-helvetica">Explore Home</p>
                                    <p class="text-xs text-white/80 font-garet">Jump to sections</p>
                                </div>
                                
                                <div class="py-2">
                                    <a href="/#about" 
                                        x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[60ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">What is BOREYES?</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/#grand-theme" 
                                    x-show="showItems"
                                     x-transition:enter="transition ease-out duration-300 delay-[120ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
                                       

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Grand Theme 2026</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/#logo-mascot" 
                                    x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Logo & Mascot</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/#team-profile" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[240ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Team Profile</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/#timeline"   
                                    x-show="showItems"                                     
                                        x-transition:enter="transition ease-out duration-300 delay-[320ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Timeline</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Competitions with Dropdown (NOT CLICKABLE) -->
                        <div data-nav="competitions-desktop"
                            class="relative"
                            @mouseenter="competitionsDropdown = true"
                            @mouseleave="competitionsDropdown = false"
                            x-data="{ competitionsDropdown: false }">

        
                       <!-- Competitions with Dropdown (NOT CLICKABLE) -->
                        <!-- <div class="relative" @mouseenter="competitionsDropdown = true" @mouseleave="competitionsDropdown = false" x-data="{ competitionsDropdown: false }"> -->
                            <button class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->is('competitions*', 'smart-*', 'paper-*', 'business-*', 'case-*', 'plan-*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                                Competitions
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="competitionsDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                                                    
                            <!-- Competitions Dropdown Menu -->
                            <div x-show="competitionsDropdown"
                               x-cloak
                                x-data="{ showItems: false }"
                                x-init="$watch('competitionsDropdown', v => { if(v){ showItems=false; setTimeout(()=>showItems=true, 10)} else { showItems=false } })"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-2xl border-2 border-[#D3EB9F]/30 overflow-hidden">
  
                                <!-- Dropdown Header -->
                                <div class="px-4 py-3 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]">
                                    <p class="text-xs font-black text-white font-helvetica">Competitions</p>
                                </div>
                                
                                <div class="py-2">
                                    <a href="/competitions/smart-Competition" 
                                     x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[60ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Smart Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/competitions/paper-And-Poster-Competition" 
                                     x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[120ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Paper & Poster Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/competitions/business-Case-Competition" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
 
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Business Case Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/competitions/case-Study" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[240ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
  
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Case Study Competition</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/competitions/plan-Of-Development" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[320ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
 
                                        <div>
                                            <p class="text-sm font-bold font-helvetica">Plan of Development</p>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                            </div>
                        </div>

                        <!-- Event Program with Dropdown -->
                        <div class="relative" @mouseenter="eventDropdown = true" @mouseleave="eventDropdown = false" x-data="{ eventDropdown: false }">
                            <a href="/eventPrograms" 
                            class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->is('eventPrograms*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                                Event Programs
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="eventDropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Event Programs Dropdown Menu -->
                            <div x-show="eventDropdown"
                                x-cloak
                                x-data="{ showItems: false }"
                                x-init="$watch('eventDropdown', v => { if(v){ showItems=false; setTimeout(()=>showItems=true, 10)} else { showItems=false } })"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-2xl border-2 border-[#D3EB9F]/30 overflow-hidden">

                                <!-- Dropdown Header -->
                                <div class="px-4 py-3 bg-gradient-to-r from-[#0F4C82] to-[#6F97B6]">
                                    <p class="text-xs font-black text-white font-helvetica">Event Programs</p>
                                    <p class="text-xs text-white/80 font-garet">Join our events</p>
                                </div>
                                
                                <div class="py-2">
                                    <a href="/eventPrograms#company-talks" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[60ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <span class="text-sm font-bold font-helvetica">Company Talks</span>
                                    </a>
                                    
                                    <a href="/eventPrograms#csr" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[120ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
 
                                        <span class="text-sm font-bold font-helvetica">CSR</span>
                                    </a>
                                    
                                    <a href="/eventPrograms#field-trip" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <span class="text-sm font-bold font-helvetica">Field Trip</span>
                                    </a>

                                    <a href="/eventPrograms#ignite-talks" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[320ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <span class="text-sm font-bold font-helvetica">Ignite Talks</span>
                                    </a>
                                    
                                    <a href="/eventPrograms#final-competition" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[240ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
 
                                        <span class="text-sm font-bold font-helvetica">Final Competition</span>
                                    </a>
                                    
                                    
                                    
                                    <a href="/eventPrograms#funday" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[380ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">
 
                                        <span class="text-sm font-bold font-helvetica">Funday</span>
                                    </a>
                                    
                                    <a href="/eventPrograms#banquet" 
                                      x-show="showItems"
                                        x-transition:enter="transition ease-out duration-300 delay-[440ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="flex items-center px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition group">

                                        <span class="text-sm font-bold font-helvetica">Banquet</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="/faq" class="px-4 py-2 rounded-lg text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition font-semibold font-garet min-h-[44px] flex items-center {{ request()->is('faq*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            FAQ
                        </a>
                    
                        @auth
                            <div x-data="{ dropdownOpen: false }" class="relative ml-3">
                                <button @click="dropdownOpen = !dropdownOpen" 
                                    class="flex items-center space-x-2 px-3 py-2 rounded-lg transition min-h-[44px]
                                    hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20
                                    {{ request()->is('dashboard*', 'admin/dashboard*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                                    <div class="w-8 h-8 bg-gradient-to-br from-[#0F4C82] to-[#6F97B6] rounded-full flex items-center justify-center shadow-md">
                                        <span class="text-white text-xs font-black font-helvetica">U</span>
                                    </div>
                                    <span class="text-sm text-[#0F4C82] font-semibold font-garet">{{ auth()->user()->team_name }}</span>
                                    <svg class="w-4 h-4 text-[#6B7280]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div x-show="dropdownOpen" 
                                     @click.away="dropdownOpen = false"
                                     x-cloak
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 transform scale-95"
                                     x-transition:enter-end="opacity-100 transform scale-100"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100 transform scale-100"
                                     x-transition:leave-end="opacity-0 transform scale-95"
                                     class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl py-2 border-2 border-[#D3EB9F]/30">
                                     @if(auth()->user()->role === 'admin')
                                        <a href="/admin/dashboard" class="block px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                                <span class="text-sm font-bold font-helvetica">Admin Dashboard</span>
                                            </div>
                                        </a>
                                    @else
                                        <a href="/dashboard" class="block px-4 py-3 text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 transition">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#0F4C82]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                                </svg>
                                                <span class="text-sm font-bold font-helvetica">Dashboard</span>
                                            </div>
                                        </a>
                                        
                                    @endif
                                    <hr class="my-2 border-[#D3EB9F]/30">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-3 text-[#DC2626] hover:bg-red-50 transition">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="text-sm font-bold font-helvetica">Logout</span>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 rounded-lg transition font-semibold font-garet min-h-[44px] flex items-center">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="px-6 py-2.5 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-sm rounded-2xl hover:shadow-lg transition shadow-md font-black font-helvetica min-h-[44px] flex items-center">
                                Register
                            </a>
                        @endauth
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex items-center lg:hidden">
                        <button data-nav="mobile-toggle"
                            @click="open = !open" class="p-2.5 rounded-lg text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 min-h-[44px] min-w-[44px] flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                                <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="lg:hidden bg-white border-t-2 border-[#D3EB9F]/30 shadow-2xl max-h-[calc(100vh-72px)] overflow-y-auto">
                <div class="px-4 pt-3 pb-4 space-y-1">
                    <!-- Mobile Home with Accordion -->
                    <div x-data="{ mobileHomeOpen: false, showItems: false }"
                        x-init="$watch('mobileHomeOpen', v => { 
                            if(v){ showItems=false; setTimeout(()=>showItems=true, 10) } 
                            else { showItems=false } 
                        })">
                        <button @click="mobileHomeOpen = !mobileHomeOpen" 
                                class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->is('/') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            <span>Home</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="mobileHomeOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div  x-show="mobileHomeOpen"
                            x-cloak
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1"
                            class="mt-2 ml-4 space-y-1 border-l-2 border-[#D3EB9F] pl-4">
                            
                            <a href="/#about" @click="open = false"  
                            x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[60ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                What is BOREYES?
                            </a>
                            <a href="/#grand-theme" @click="open = false"  
                            x-show="showItems"                         
                                x-transition:enter="transition ease-out duration-300 delay-[120ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                Grand Theme 2026
                            </a>
                            <a href="/#logo-mascot" @click="open = false"      
                            x-show="showItems"                     
                                x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                Logo & Mascot
                            </a>
                            <a href="/#team-profile" @click="open = false"     
                            x-show="showItems"                      
                                x-transition:enter="transition ease-out duration-300 delay-[240ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                Team Profile
                            </a>
                            <a href="/#timeline" @click="open = false" 
                            x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[320ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                  Timeline
                            </a>
                        </div>
                    </div>
                    
                                        
                    <!-- JADI: -->
                   <div x-data="{ mobileCompOpen: false, showItems: false }"
                        x-init="$watch('mobileCompOpen', v => { 
                            if(v){ showItems=false; setTimeout(()=>showItems=true, 10) } 
                            else { showItems=false } 
                        })">
                        <button data-nav="competitions-mobile"
                            @click="mobileCompOpen = !mobileCompOpen"
                            class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->is('competitions*', 'smart-*', 'paper-*', 'business-*', 'case-*', 'plan-*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            <span>Competitions</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="mobileCompOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="mobileCompOpen" x-cloak class="mt-2 ml-4 space-y-1 border-l-2 border-[#D3EB9F] pl-4">
                            <a href="/competitions/smart-Competition" @click="open = false"   x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[60ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               Smart Competition</a>
                            <a href="/competitions/paper-And-Poster-Competition" @click="open = false"   x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[120ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               Paper & Poster</a>
                            <a href="/competitions/business-Case-Competition" @click="open = false"   x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               Business Case</a>
                            <a href="/competitions/case-Study" @click="open = false"   x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[240ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               Case Study</a>
                            <a href="/competitions/plan-Of-Development" @click="open = false"   x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[320ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               Plan of Development</a>
                        </div>
                    </div>

                    <!-- Mobile Event Programs with Accordion -->
                    <div x-data="{ mobileEventOpen: false, showItems: false }"
                        x-init="$watch('mobileEventOpen', v => { 
                            if(v){ showItems=false; setTimeout(()=>showItems=true, 10) } 
                            else { showItems=false } 
                        })">
                        <button @click="mobileEventOpen = !mobileEventOpen"
                                class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica {{ request()->is('eventPrograms*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                            <span>Event Programs</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="mobileEventOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="mobileEventOpen" x-cloak class="mt-2 ml-4 space-y-1 border-l-2 border-[#D3EB9F] pl-4">
                            <a href="/eventPrograms#company-talks" @click="open = false"
                             x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[60ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               
                                Company Talks
                            </a>

                            <a href="/eventPrograms#csr" @click="open = false"
                             x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[120ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                 
                                CSR
                            </a>

                            <a href="/eventPrograms#field-trip" @click="open = false"
                              x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                
                                Field Trip
                            </a>

                             <a href="/eventPrograms#ignite-talks" @click="open = false"
                             x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[320ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                                 
                                Ignite Talks
                            </a>

                            <a href="/eventPrograms#final-competition" @click="open = false"
                              x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[240ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               
                                Final Competition
                            </a>

                           

                            <a href="/eventPrograms#funday" @click="open = false"
                              x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[380ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               
                                Funday
                            </a>

                            <a href="/eventPrograms#banquet" @click="open = false"
                              x-show="showItems"
                                x-transition:enter="transition ease-out duration-300 delay-[440ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="flex items-center px-3 py-2 rounded-lg text-xs text-[#6B7280] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 hover:text-[#0F4C82] font-garet">
                               
                                Banquet
                            </a>
                        </div>
                    </div>

                    <a href="/faq" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica min-h-[44px] {{ request()->is('faq*') ? 'bg-gradient-to-r from-[#C5E6C9]/30 to-[#D3EB9F]/30' : '' }}">
                        FAQ
                    </a>
                    
                    @auth
                        <hr class="my-3 border-[#D3EB9F]/30">
                         @if(auth()->user()->role === 'admin')
                            <a href="/admin/dashboard" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                                Admin Dashboard
                            </a>
                        @else
                            <a href="/dashboard" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                                Dashboard
                            </a>
                            
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-3 rounded-xl text-sm text-[#DC2626] hover:bg-red-50 font-bold font-helvetica">
                                Logout
                            </button>
                        </form>
                    @else
                        <hr class="my-3 border-[#D3EB9F]/30">
                        <a href="{{ route('login') }}" class="block px-4 py-3 rounded-xl text-sm text-[#0F4C82] hover:bg-gradient-to-r hover:from-[#C5E6C9]/20 hover:to-[#D3EB9F]/20 font-bold font-helvetica">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="block px-4 py-3 rounded-xl bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] text-sm text-center font-black font-helvetica hover:shadow-lg transition">
                            Register
                        </a>
                    @endauth
                </div>
            </div>
        </nav>