<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', function() {
    $works  = \App\Models\Work::all();
    $blogs  = \App\Models\Blog::orderBy("created_at", "desc")->limit(4)->get();
    $labs   = \App\Models\Lab::orderBy("created_at", "desc")->limit(4)->get();
    return view('home', compact('works', 'blogs', 'labs'));
})->name('home');

Route::get('/blogs', 'App\Http\Controllers\BlogsController@index')->name('blog.index');
Route::get('/blogs/{slug}', 'App\Http\Controllers\BlogsController@show')->name('blog.view');


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function() { return redirect()->route('admin.dashboard'); })->name('admin.index');

    Route::middleware('guest')->group(function () {
        Route::get('login', Login::class)->name('login');
    });
    
    Route::middleware('auth')->group(function () {    
        Route::group(['namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.'], function(){
            Route::get('dashboard', 'DashboardController')->name('dashboard');
            Route::get('works', 'WorksController')->name('works');
            Route::get('blogs', 'BlogsController')->name('blogs');
            Route::get('labs', 'LabsController')->name('labs');
            Route::get('categories', 'CategoriesController')->name('categories');
        });

        Route::post('logout', LogoutController::class)->name('logout');
    });
});


