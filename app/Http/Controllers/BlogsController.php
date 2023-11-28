<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs  = \App\Models\Blog::limit(10)->orderBy('id','desc')->get();

        return view('blogs.index', compact('blogs'));
    }

    
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog  = \App\Models\Blog::where ('slug', $slug)->first();

        return view('blogs.view', compact('blog'));
    }

   
}
