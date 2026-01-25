<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Competition;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register-team', [
            'competitions' => Competition::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'team_leader' => 'required|string|max:255',
            'team_member_1' => 'nullable|string|max:255',
            'team_member_2' => 'nullable|string|max:255',
            'team_member_3' => 'nullable|string|max:255',
            'contact_number' => 'required|string|max:20',
            'university' => 'required|string|max:255',
            'competition_id' => 'required|exists:competitions,id',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'link_drive_payment' => 'required|url',
        ]);

        $user = User::create([
            'name' => $request->team_name,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_member_1' => $request->team_member_1,
            'team_member_2' => $request->team_member_2,
            'team_member_3' => $request->team_member_3,
            'contact_number' => $request->contact_number,
            'university' => $request->university,
            'competition_id' => $request->competition_id,
            'link_drive_payment' => $request->link_drive_payment,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'team',
            'payment_status' => 'pending',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
