<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();

        // Cek kompetisi
        if (! $user->competition || ! $user->competition->has_submission) {
            abort(403, 'Kompetisi ini tidak membutuhkan submission');
        }

        // Cek deadline
        if (now()->gt($user->competition->submission_deadline)) {
            return back()->withErrors(['deadline' => 'Deadline sudah lewat']);
        }

        $request->validate([
            'drive_link' => 'required|url',
        ]);

        Submission::updateOrCreate(
            ['user_id' => $user->id],
            [
                'drive_link' => $request->drive_link,
                'submitted_at' => now(),
            ]
        );

        return back()->with('success', 'Submission berhasil disimpan');
    }
}
