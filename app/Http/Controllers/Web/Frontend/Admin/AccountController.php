<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function users()
    {
        return Inertia::render('admin/account/Users');
    }

    public function addUsers()
    {
        return Inertia::render('admin/account/AddUsers');
    }

    public function viewProfile()
    {
        return Inertia::render('admin/account/ViewProfile');
    }

     public function contacts()
    {
        return Inertia::render('admin/account/Contacts');
    }

    public function addContacts()
    {
        return Inertia::render('admin/account/AddContacts');
    }

    public function customers()
    {
        return Inertia::render('admin/account/customer/Customers');
    }

    public function addCustomer()
    {
        return Inertia::render('admin/account/customer/AddCustomer');
    }

    public function viewCustomer()
    {
        return Inertia::render('admin/account/customer/ViewCustomer');
    }

    public function vehicles()
    {
        return Inertia::render('admin/vehicles/Vehicles');
    }
    public function addVehicles()
    {
        return Inertia::render('admin/vehicles/AddVehicles');
    }
     public function specifications()
    {
        return Inertia::render('admin/vehicles/Specifications');
    }

    public function ownership()
    {
        return Inertia::render('admin/vehicles/Ownership');
    }

    public function administrative()
    {
        return Inertia::render('admin/vehicles/Administrative');
    }

    public function viewVehicles()
    {
        return Inertia::render('admin/vehicles/ViewVehicles');
    }

    public function editVehicles()
    {
        return Inertia::render('admin/vehicles/EditVehicles');
    }
}
