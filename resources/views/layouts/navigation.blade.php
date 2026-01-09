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
                <div class="hidden sm:flex space-x-6">
                    <a href="{{ route('dashboard') }}"
                       class="text-sm font-medium {{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-800' }}">
                        Dashboard
                    </a>
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
