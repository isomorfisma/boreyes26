<?php
use App\Http\Controllers\Admin\UserVerificationController;
use App\Http\Controllers\Admin\SubmissionReviewController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/eventPrograms', function () {
    return view('eventPrograms');
})->name('event-programs');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Competition Routes
Route::prefix('competitions')->name('competitions.')->group(function () {
    Route::view('/smart-Competition', 'competitions.smart-Competition')->name('smart-Competition');
    Route::view('/paper-And-Poster-Competition', 'competitions.Paper-And-Poster-Competition')->name('paper-And-Poster-Competition');
    Route::view('/business-Case-Competition', 'competitions.business-Case-Competition')->name('business-Case-Competition');
    Route::view('/case-Study', 'competitions.case-Study')->name('case-Study');
    Route::view('/plan-Of-Development', 'competitions.plan-Of-Development')->name('plan-Of-Development');
});

// Auth routes (login, register, etc.) - handled by auth.php
require __DIR__.'/auth.php';

// Protected Routes - Require Authentication
Route::middleware(['auth'])->group(function () {
    // Dashboard - only accessible after email verification
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware('verified')
        ->name('dashboard');
    
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Submission
    Route::post('/submission', [App\Http\Controllers\SubmissionController::class, 'store'])
        ->name('submission.store');
});

// Admin Routes
use App\Http\Controllers\Admin\FaqController as AdminFaqController;

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');
    
    // FAQ Management
    Route::resource('faqs', AdminFaqController::class)->except(['show']);
    
    // Registration Management
    Route::get('/registrations', [UserVerificationController::class, 'index'])
        ->name('registrations');
    Route::patch('/registrations/{user}/verify', [UserVerificationController::class, 'verify'])
        ->name('registrations.verify');
    Route::patch('/registrations/{user}/reject', [UserVerificationController::class, 'reject'])
        ->name('registrations.reject');
    Route::get('/registrations/{user}/detail', [UserVerificationController::class, 'getTeamDetail'])
        ->name('registrations.detail');
    
    // Submission Review
    Route::get('/submissions', [SubmissionReviewController::class, 'index'])
        ->name('submissions');
    Route::post('/submissions/{user}/pass', [SubmissionReviewController::class, 'pass'])
        ->name('submissions.pass');
    Route::post('/submissions/{user}/fail', [SubmissionReviewController::class, 'fail'])
        ->name('submissions.fail');
    Route::post('/submissions/{user}/pending', [SubmissionReviewController::class, 'pending'])
        ->name('submissions.pending');
});