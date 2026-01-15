<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserVerificationController extends Controller
{
    public function index()
    {
        $users = User::with('competition')
            ->where('role', 'team')
            ->whereNotNull('link_drive_payment')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.registrations', compact('users'));
    }

    public function verify(User $user)
    {
        $user->update([
            'payment_status' => 'verified'
        ]);

        return back()->with('success', 'Pembayaran berhasil diverifikasi');
    }

    public function reject(User $user)
    {
        $user->update([
            'payment_status' => 'rejected'
        ]);

        return back()->with('success', 'Pembayaran ditolak');
    }
}
