<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
{
    public function vehicleContacts()
    {
        return Inertia::render('admin/vehicles/VehicleContacts');
    }

    public function vehicleContactsEdit()
    {
        return Inertia::render('admin/vehicles/VehicleContactsEdit');
    }
}
