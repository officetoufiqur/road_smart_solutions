<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\Admin\AccountController;
use App\Http\Controllers\Web\Frontend\Admin\DashboardController;
use App\Http\Controllers\Web\Frontend\Admin\ProductController;
use App\Http\Controllers\Web\Frontend\Admin\VehiclesController;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // User account
    Route::get('/users', [AccountController::class, 'users'])->name('users');
    Route::get('/add/users', [AccountController::class, 'addUsers'])->name('users.add');
    Route::get('/view/profile/{id}', [AccountController::class, 'viewProfile'])->name('view.profile');
    
    // contct
    Route::get('/contacts', [AccountController::class, 'contacts'])->name('contacts');
    Route::get('/add/contacts', [AccountController::class, 'addContacts'])->name('contacts.add');

    //customer
    Route::get('/customers', [AccountController::class, 'customers'])->name('customers');
    Route::get('/add/customer', [AccountController::class, 'addCustomer'])->name('customer.add');
    Route::get('/view/customer/{id}', [AccountController::class, 'viewCustomer'])->name('view.customer');

    // vehicles
    Route::get('/vehicles', [AccountController::class, 'vehicles'])->name('vehicles');
    Route::get('/add/vehicles', [AccountController::class, 'addVehicles'])->name('add.vehicles');
    Route::get('/specifications', [AccountController::class, 'specifications'])->name('specifications');
    Route::get('/ownership', [AccountController::class, 'ownership'])->name('ownership');
    Route::get('/administrative', [AccountController::class, 'administrative'])->name('administrative');


    Route::get('/view/vehicles/{id}', [AccountController::class, 'viewVehicles'])->name('view.vehicles');
    Route::get('/edit/vehicles/{id}', [AccountController::class, 'editVehicles'])->name('edit.vehicles');

    Route::get('/master/vehicles', [AccountController::class, 'masterVehicles'])->name('master.vehicles');
    Route::get('/add/master/vehicles', [AccountController::class, 'masterAddVehicles'])->name('add.master.vehicles');

    Route::get('/sellers', [AccountController::class, 'sellers'])->name('sellers');
    Route::get('/vendor/details', [AccountController::class, 'vendorDetails'])->name('vendor.details');
    Route::get('/orders', [AccountController::class, 'orders'])->name('orders');
    Route::get('/vehicle/request', [AccountController::class, 'request'])->name('request');

    Route::get('/vehicle/contacts', [VehiclesController::class, 'vehicleContacts'])->name('vehicle.contacts');
    Route::get('/vehicle/contacts/edit/{id}', [VehiclesController::class, 'vehicleContactsEdit'])->name('vehicle.contacts.edit');


    Route::get('/coverage', [ProductController::class, 'coverage'])->name('coverage');
    Route::get('/add/coverage', [ProductController::class, 'addCoverage'])->name('add.coverage');
    Route::get('/add/coverage/search', [ProductController::class, 'addCoverageSearch'])->name('add.coverage.search');
    Route::get('/coverage/view/{id}', [ProductController::class, 'viewCoverage'])->name('coverage.view');

});


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
