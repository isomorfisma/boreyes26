<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        // Get authenticated user with relationships
        $user = Auth::user();
        
        // Load relationships if they exist
        if ($user) {
            $user->load(['competition', 'submission', 'selection']);
        }

         return view('dashboard.index', [
            'user' => $user,
        ]);
    }
}