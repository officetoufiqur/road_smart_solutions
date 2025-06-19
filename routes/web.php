<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\Dashboard\DashboardController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/add/users', [DashboardController::class, 'addUsers'])->name('users.add');
    Route::get('/view/profile', [DashboardController::class, 'viewProfile'])->name('view.profile');
});


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
