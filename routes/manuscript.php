<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManuscriptController;


Route::get('/custom', function () {
    return 'This is a custom web route';
})->name('custom.route');

Route::get('register', function () {
    return view('JIT.manuscript.register');
});

Route::post('/user_register', [ManuscriptController::class, 'user_register']);
Route::get('/user-login', function () {
    return view('JIT.manuscript.user-login');
});
Route::post('/user-login', [ManuscriptController::class, 'login']);

Route::middleware(['auth.jwt'])->group(function () {
    Route::get('/user-dashboard', [ManuscriptController::class, 'dashboard']);
    Route::get('/profile', [ManuscriptController::class, 'profile']);
    Route::get('/logout', [ManuscriptController::class, 'logout']);
    Route::post('/submission', [ManuscriptController::class, 'submission']);
});




// for admin dashboard 
Route::get('/api/allSubmissions', [ManuscriptController::class, 'allSubmissions']);
Route::get('/allSubmissions', function () {
    return view('JIT.manuscript.for_admin.all_submissions');
});

Route::post('/api/addSubmissionStatus', [ManuscriptController::class, 'addSubmissionStatus']);




