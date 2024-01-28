<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        return view('admin.categories.index');
    }
}
