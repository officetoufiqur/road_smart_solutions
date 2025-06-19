<?php

namespace App\Http\Controllers\Web\Frontend\Dashboard;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function users()
    {
        return Inertia::render('admin/users/Users');
    }

    public function addUsers()
    {
        return Inertia::render('admin/users/AddUsers');
    }

    public function viewProfile()
    {
        return Inertia::render('admin/users/ViewProfile');
    }
}
