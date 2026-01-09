@extends('layouts.app')

@section('title', __('Forgot Password'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">

        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">
            Forgot Password
        </h1>

        <p class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just enter your email address and we
            will send you a password reset link.
        </p>

        {{-- Session Status --}}
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                           focus:border-indigo-500 focus:ring-indigo-500"
                >

                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-6">
                <button
                    type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md
                           hover:bg-indigo-700 transition"
                >
                    Email Password Reset Link
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
