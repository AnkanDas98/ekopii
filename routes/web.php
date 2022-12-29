<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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
    return view('frontend.home');
});

Route::get('/admin/login', [AdminController::class, 'viewLogin'])->middleware('guest');


Route::middleware('auth', 'verified')->group(function () {
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'index')->name('dashboard');
        Route::get('/admin/profile/{id}', 'profile')->name('admin.profile');
        Route::get('/admin/profile/edit/{id}', 'editProfile')->name('admin.profile.edit');
        Route::put('/admin/profile/edit/{id}', 'update')->name('admin.profile.update');
        Route::get('/admin/profile/edit/password/{id}', 'changePassword')->name('admin.change.password');
        Route::put('/admin/profile/edit/password/{id}', 'updatePassword')->name('admin.change.password');
    });
});

require __DIR__.'/auth.php';
