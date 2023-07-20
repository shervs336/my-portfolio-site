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

Route::view('/', 'home')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function() { return redirect()->route('admin.dashboard'); })->name('admin.index');

    Route::middleware('guest')->group(function () {
        Route::get('login', Login::class)->name('login');
    });
    
    Route::middleware('auth')->group(function () {    
        Route::group(['namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.'], function(){
            Route::get('dashboard', 'DashboardController')->name('dashboard');
            Route::resource('works', 'WorksController')->name('*', 'works');
        });

        Route::post('logout', LogoutController::class)->name('logout');
    });
});


