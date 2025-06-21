<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\Admin\AccountController;
use App\Http\Controllers\Web\Frontend\Admin\DashboardController;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // User account
    Route::get('/users', [AccountController::class, 'users'])->name('users');
    Route::get('/add/users', [AccountController::class, 'addUsers'])->name('users.add');
    Route::get('/view/profile', [AccountController::class, 'viewProfile'])->name('view.profile');
    
    // contct
    Route::get('/contacts', [AccountController::class, 'contacts'])->name('contacts');
    Route::get('/add/contacts', [AccountController::class, 'addContacts'])->name('contacts.add');

    //customer
    Route::get('/customers', [AccountController::class, 'customers'])->name('customers');
    Route::get('/add/customer', [AccountController::class, 'addCustomer'])->name('customer.add');
    Route::get('/view/customer', [AccountController::class, 'viewCustomer'])->name('view.customer');
});


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
