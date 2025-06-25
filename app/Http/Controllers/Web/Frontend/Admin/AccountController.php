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

    public function viewProfile($id)
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

    public function viewCustomer($id)
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

    public function viewVehicles($id)
    {
        return Inertia::render('admin/vehicles/ViewVehicles');
    }

    public function editVehicles($id)
    {
        return Inertia::render('admin/vehicles/EditVehicles');
    }

    public function masterVehicles()
    {
        return Inertia::render('admin/vehicles/MasterVehicles');
    }

    public function masterAddVehicles()
    {
        return Inertia::render('admin/vehicles/MasterAddVehicles');
    }

    public function sellers()
    {
        return Inertia::render('admin/vehicles/sellers/Sellers');
    }

    public function vendorDetails()
    {
        return Inertia::render('admin/vehicles/sellers/VendorDetails');
    }
    
    public function orders()
    {
        return Inertia::render('admin/vehicles/sellers/Orders');
    }

     public function request()
    {
        return Inertia::render('admin/vehicles/sellers/Request');
    }

}
