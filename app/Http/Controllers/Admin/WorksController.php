<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        return view('admin.works.index');
    }
}
