@extends('layouts.app')

@section('title', __('Verify Email'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">

        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">
            Verify Your Email
        </h1>

        <p class="mb-4 text-sm text-gray-600">
            Thanks for signing up! Before getting started, please verify your email
            address by clicking on the link we just emailed to you.
            <br><br>
            If you didn't receive the email, we can send another one.
        </p>

        @if (session('status') === 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <div class="mt-6 flex items-center justify-between">
            {{-- Resend Verification --}}
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button
                    type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition"
                >
                    Resend Verification Email
                </button>
            </form>

            {{-- Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none"
                >
                    Log Out
                </button>
            </form>
        </div>

    </div>
</div>
@endsection
