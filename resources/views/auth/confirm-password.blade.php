@extends('layouts.app')

@section('title', __('Confirm Password'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">

        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">
            Confirm Password
        </h1>

        <p class="mb-4 text-sm text-gray-600">
            This is a secure area of the application.
            Please confirm your password before continuing.
        </p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                           focus:border-indigo-500 focus:ring-indigo-500"
                >

                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end mt-6">
                <button
                    type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md
                           hover:bg-indigo-700 transition"
                >
                    Confirm
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
