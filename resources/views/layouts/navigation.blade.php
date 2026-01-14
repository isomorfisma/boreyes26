<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Left -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-lg font-bold text-gray-800">
                    BOREYES
                </a>

                <!-- Main Links -->
                <div class="hidden sm:flex space-x-6 items-center">
                    <a href="{{ route('dashboard') }}"
                       class="text-sm font-medium {{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-800' }}">
                        Dashboard
                    </a>

                    {{-- Admin Dropdown --}}
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <details class="relative">
                                <summary class="cursor-pointer list-none text-sm font-medium text-gray-600 hover:text-gray-800">
                                    Admin ▾
                                </summary>

                                <div class="absolute mt-2 w-48 bg-white border rounded shadow-lg z-50">
                                    <a href="/admin/dashboard"
                                       class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        Dashboard
                                    </a>
                                    <a href="/admin/registrations"
                                       class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        Registrations
                                    </a>

                                    <a href="/admin/submissions"
                                       class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        Submissions
                                    </a>

                                    <a href="/admin/faqs"
                                       class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        FAQ
                                    </a>
                                </div>
                            </details>
                        @endif
                    @endauth
                </div>
            </div>

            <!-- Right -->
            <div class="flex items-center space-x-4">

                @auth
                    <span class="text-sm text-gray-600">
                        {{ Auth::user()->name }}
                    </span>

                    <a href="{{ route('profile.edit') }}"
                       class="text-sm text-gray-600 hover:text-gray-800">
                        Profile
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="text-sm text-red-600 hover:text-red-700">
                            Logout
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                       class="text-sm text-gray-600 hover:text-gray-800">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="text-sm text-gray-600 hover:text-gray-800">
                        Register
                    </a>
                @endguest

            </div>

        </div>
    </div>
</nav>
