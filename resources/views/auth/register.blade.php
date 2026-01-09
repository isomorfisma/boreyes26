@extends('layouts.app')

@section('title', __('Register'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">

        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Register
        </h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">
                    Name
                </label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="mt-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                    Confirm Password
                </label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-between mt-6">
                <a
                    href="{{ route('login') }}"
                    class="text-sm text-indigo-600 hover:underline"
                >
                    Already registered?
                </a>

                <button
                    type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition"
                >
                    Register
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
