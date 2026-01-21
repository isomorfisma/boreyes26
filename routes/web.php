<?php
use App\Http\Controllers\Admin\UserVerificationController;
use App\Http\Controllers\Admin\SubmissionReviewController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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

Route::any('{any}', function () {
    abort(404, 'Website sedang dalam pembangunan.');
})->where('any', '.*');

Route::get('/', function () {
    return view('home');
});
Route::get('/eventPrograms', function () {
    return view('eventPrograms');
})->name('event-programs');

route::get('/faq', function () {
    return view('faq');
})->name('faq');

route::get('/register', function () {
    return view('auth.register-team');
})->name('register');

route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Competition Routes
Route::prefix('competitions')->name('competitions.')->group(function () {
    Route::view('/smart-Competition', 'competitions.smart-Competition')->name('smart-Competition');
    Route::view('/paper-And-Poster-Competition', 'competitions.Paper-And-Poster-Competition')->name('paper-And-Poster-Competition');
    Route::view('/business-Case-Competition', 'competitions.business-Case-Competition')->name('business-Case-Competition');
    Route::view('/case-Study', 'competitions.case-Study')->name('case-Study');
    Route::view('/plan-Of-Development', 'competitions.plan-Of-Development')->name('plan-Of-Development');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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

Route::get('/admin/registrations/{user}/detail', [UserVerificationController::class, 'getTeamDetail'])->name('admin.registrations.detail');

    Route::get('/admin/submissions', [SubmissionReviewController::class, 'index'])
        ->name('admin.submissions');

    Route::post('/admin/submissions/{user}/pass', [SubmissionReviewController::class, 'pass'])
        ->name('admin.submissions.pass');

    Route::post('/admin/submissions/{user}/fail', [SubmissionReviewController::class, 'fail'])
        ->name('admin.submissions.fail');

    Route::post('/admin/submissions/{user}/pending', [SubmissionReviewController::class, 'pending'])
        ->name('admin.submissions.pending');
  

});



require __DIR__.'/auth.php';
