<?php

namespace App\Http\Controllers;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = \App\Models\Blog::isPublished()->limit(10)->orderBy('id', 'desc')->get();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = \App\Models\Blog::where('slug', $slug)->isPublished()->first();

       // $otherBlogs = \App\Models\Blog::whereNot('id', $blog->id)->isPublished()->limit(5)->get();

        return view('blogs.show', compact('blog'));
    }
}
