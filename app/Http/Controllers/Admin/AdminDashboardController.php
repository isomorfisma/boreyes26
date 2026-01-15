<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Competition;
use App\Models\Submission;

class AdminDashboardController extends Controller
{
    public function index()
{
    $baseUserQuery = User::where('role', 'team');

    // Total tim mendaftar (semua)
    $totalRegistered = (clone $baseUserQuery)->count();

    // Email verified
    $emailVerifiedCount = (clone $baseUserQuery)
        ->whereNotNull('email_verified_at')
        ->count();

    // Payment status (email verified only)
    $paymentVerified = (clone $baseUserQuery)
        ->whereNotNull('email_verified_at')
        ->where('payment_status', 'verified')
        ->count();

    $paymentPending = (clone $baseUserQuery)
        ->whereNotNull('email_verified_at')
        ->where('payment_status', '!=', 'verified')
        ->count();

    // Total income (verified payment only)
    $totalIncome = (clone $baseUserQuery)
        ->whereNotNull('email_verified_at')
        ->where('payment_status', 'verified')
        ->with('competition')
        ->get()
        ->sum(fn ($user) => $user->competition->price ?? 0);

    // Latest registrations (team only)
    $latestRegistrations = User::with('competition')
        ->where('role', 'team')
        ->latest()
        ->limit(5)
        ->get();

    // Competition stats (email verified only)
    $competitionStats = Competition::withCount([
        'users as total_registered' => fn ($q) =>
            $q->where('role', 'team')
              ->whereNotNull('email_verified_at'),

        'users as payment_verified' => fn ($q) =>
            $q->where('role', 'team')
              ->whereNotNull('email_verified_at')
              ->where('payment_status', 'verified'),

        'users as payment_pending' => fn ($q) =>
            $q->where('role', 'team')
              ->whereNotNull('email_verified_at')
              ->where('payment_status', '!=', 'verified'),
    ])
    ->limit(5)
    ->get();

    $latestSubmissions = Submission::with(['user.competition'])
    ->whereHas('user', function ($q) {
        $q->where('role', 'team')
          ->whereNotNull('email_verified_at')
          ->whereHas('competition', fn ($c) =>
              $c->where('has_submission', 1)
          );
    })
    ->latest('submitted_at')
    ->limit(5)
    ->get();

    return view('admin.dashboard', compact(
        'totalRegistered',
        'emailVerifiedCount',
        'paymentVerified',
        'paymentPending',
        'totalIncome',
        'latestRegistrations',
        'competitionStats',
        'latestSubmissions'
    ));
}
}
