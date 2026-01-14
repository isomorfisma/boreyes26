<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\SubmissionController;

Route::middleware(['auth'])->group(function () {
    Route::post('/submission', [SubmissionController::class, 'store'])
        ->name('submission.store');
});

use App\Http\Controllers\Admin\UserVerificationController;
use App\Http\Controllers\Admin\SubmissionReviewController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\FaqController;
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

use App\Http\Controllers\Admin\FaqController as AdminFaqController;
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('faqs', AdminFaqController::class)->except(['show']);
});

Route::middleware(['auth', 'admin'])->group(function () {
   
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');
    
    Route::get('/admin/registrations', [UserVerificationController::class, 'index'])
        ->name('admin.registrations');

    Route::patch('/admin/registrations/{user}/verify', [UserVerificationController::class, 'verify'])
        ->name('admin.registrations.verify');

    Route::patch('/admin/registrations/{user}/reject', [UserVerificationController::class, 'reject'])
        ->name('admin.registrations.reject');

    Route::get('/admin/submissions', [SubmissionReviewController::class, 'index'])
        ->name('admin.submissions');

    Route::post('/admin/submissions/{user}/pass', [SubmissionReviewController::class, 'pass'])
        ->name('admin.submissions.pass');

    Route::post('/admin/submissions/{user}/fail', [SubmissionReviewController::class, 'fail'])
        ->name('admin.submissions.fail');
});


require __DIR__.'/auth.php';
