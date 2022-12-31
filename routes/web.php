<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\ServiceController;

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

    Route::prefix('slider')->group(function(){
        Route::controller(HomeSliderController::class)->group(function(){
            Route::get('/', 'getAllSlider')->name('all.slider');
            Route::get('/add', 'addSlider')->name('add.slider');
            Route::post('/add', 'storeSlider')->name('store.slider');
            Route::get('/edit/{id}', 'editSlider')->name('edit.slider');
            Route::put('/update/{id}', 'updateSlider')->name('update.slider');
            Route::patch('/status', 'updateSliderStaus')->name('update.slider.status');
            Route::delete('/delete/{id}', 'deleteSlider')->name('delete.slider');

            // ==========for Service ================
            // Route::get('/', 'getAllService')->name('all.service');
            // Route::get('/add', 'addService')->name('add.service');
            // Route::post('/add', 'storeService')->name('store.service');
            // Route::get('/edit/{id}', 'editService')->name('edit.service');
            // Route::put('/update/{id}', 'updateService')->name('update.service');
            // Route::patch('/status', 'updateServiceStaus')->name('update.service.status');
            // Route::delete('/delete/{id}', 'deleteService')->name('delete.service');
        });
    });

    // ==========for Service ================
    Route::prefix('service')->group(function(){
        Route::controller(ServiceController::class)->group(function(){
            // Route::get('/', 'getAllSlider')->name('all.slider');
            // Route::get('/add', 'addSlider')->name('add.slider');
            // Route::post('/add', 'storeSlider')->name('store.slider');
            // Route::get('/edit/{id}', 'editSlider')->name('edit.slider');
            // Route::put('/update/{id}', 'updateSlider')->name('update.slider');
            // Route::patch('/status', 'updateSliderStaus')->name('update.slider.status');
            // Route::delete('/delete/{id}', 'deleteSlider')->name('delete.slider');

            Route::get('/', 'getAllService')->name('all.service');
            Route::get('/add', 'addService')->name('add.service');
            Route::post('/add', 'storeService')->name('store.service');
            Route::get('/edit/{id}', 'editService')->name('edit.service');
            Route::put('/update/{id}', 'updateService')->name('update.service');
            Route::patch('/status', 'updateServiceStaus')->name('update.service.status');
            Route::delete('/delete/{id}', 'deleteService')->name('delete.service');
        });
    });
});

require __DIR__.'/auth.php';
