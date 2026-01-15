<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Selection;

class SubmissionReviewController extends Controller
{
    public function index()
    {
        $users = User::with(['submission', 'competition', 'selection'])
            ->whereHas('competition', function ($q) {
                $q->where('has_submission', 1);
            })
            ->whereHas('submission')
            ->get();

        return view('admin.submissions', compact('users'));
    }

    public function pass(User $user)
    {
        Selection::updateOrCreate(
            ['user_id' => $user->id],
            ['status' => 'passed']
        );

        return back()->with('success', 'Peserta diloloskan');
    }

    public function fail(User $user)
    {
        Selection::updateOrCreate(
            ['user_id' => $user->id],
            ['status' => 'failed']
        );

        return back()->with('success', 'Peserta tidak diloloskan');
    }
}
