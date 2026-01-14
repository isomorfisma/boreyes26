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
    return view('home');
});
Route::get('/eventPrograms', function () {
    return view('eventPrograms');
})->name('event-programs');

route::get('/faq', function () {
    return view('faq');
})->name('faq');

route::get('/register', function () {
    return view('auth.register');
})->name('register');

route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Competition Routes
Route::prefix('competitions')->name('competitions.')->group(function () {
    Route::view('/smart-Competition', 'competitions.smart-Competition')->name('smart-Competition');
    Route::view('/paper-And-Poster-Competition', 'competitions.paper-And-Poster-Competition')->name('paper-And-Poster-Competition');
    Route::view('/business-Case-Competition', 'competitions.business-Case-Competition')->name('business-Case-Competition');
    Route::view('/case-Study', 'competitions.case-Study')->name('case-Study');
    Route::view('/plan-Of-Development', 'competitions.plan-Of-Development')->name('plan-Of-Development');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
