<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function service()
    {
        return Inertia::render('admin/Service/Service');
    }

    public function serviceSerch()
    {
        return Inertia::render('admin/Service/ServiceSerch');
    }

    public function addService()
    {
        return Inertia::render('admin/Service/AddService');
    }

    public function viewService($id)
    {
        return Inertia::render('admin/Service/ViewService');
    }
}
