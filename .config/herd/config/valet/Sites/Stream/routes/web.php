<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return redirect()->route('register');
});

Route::get('/welcome', function () {
    return Inertia::render('Welcome');
})->name('welcome');


Route::get('/movies_show', function () {
    return Inertia::render('movies_show');
})->name('movies_show');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// these us the location 
Route::get('/locations', [RegisteredUserController::class, 'getLocations']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/subscribe/{plan}', [PaymentController::class, 'checkout'])->name('subscribe.plan');
    Route::get('/payment', function () {
        return Inertia::render('Auth/Payment');
    })->name('payment');
    Route::get('/welcome', [MovieController::class, 'getMoviesByGenre'])->name('welcome');
    Route::get('/movies_show', [MovieController::class, 'Random'])->name('movies_show');

});

require __DIR__.'/auth.php';
