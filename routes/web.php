<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $works = \App\Models\Work::all();
    $blogs = \App\Models\Blog::orderBy('created_at', 'desc')->isPublished()->limit(4)->get();
    $labs = \App\Models\Lab::orderBy('created_at', 'desc')->limit(4)->get();

    return view('home', compact('works', 'blogs', 'labs'));
})->name('home');

Route::get('/blogs', 'App\Http\Controllers\BlogsController@index')->name('blog.index');
Route::get('/blogs/{slug}', 'App\Http\Controllers\BlogsController@show')->name('blog.view');
