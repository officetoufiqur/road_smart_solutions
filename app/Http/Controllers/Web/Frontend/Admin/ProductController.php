<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function coverage()
    {
        return Inertia::render('admin/Product/Coverage');
    }

    public function viewCoverage()
    {
        return Inertia::render('admin/Product/CoverageView');
    }

     public function addCoverageSearch()
    {
        return Inertia::render('admin/Product/AddCoverageSearch');
    }

     public function addCoverage()
    {
        return Inertia::render('admin/Product/AddCoverage');
    }
}
