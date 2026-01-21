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
    public function getTeamDetail($id)
{
    $user = User::with('competition')->findOrFail($id);
    
    return response()->json([
        'id' => $user->id,
        'team_name' => $user->team_name,
        'team_leader' => $user->team_leader,
        'email' => $user->email,
        'email_verified_at' => $user->email_verified_at,
        'university' => $user->university,
        'contact_number' => $user->contact_number,
        'payment_status' => $user->payment_status,
        'link_drive_payment' => $user->link_drive_payment,
        
        // Member data (from model: team_member_1 and team_member_2)
        'team_member_1' => $user->team_member_1,
        'team_member_2' => $user->team_member_2,
        
        'competition' => $user->competition ? [
            'id' => $user->competition->id,
            'name' => $user->competition->name,
            'price' => $user->competition->price ?? 0,
        ] : null,
    ]);
}
}
