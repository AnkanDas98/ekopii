<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\HomeSliderController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'showAbout'])->name('about');
Route::get('/services/{id}', [HomeController::class, 'showService'])->name('service');
Route::post('/contact', [HomeController::class, 'postContact'])->name('store.contact');

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
        });
    });

    // ==========for Service ================
    Route::prefix('service')->group(function(){
        Route::controller(ServiceController::class)->group(function(){
            Route::get('/', 'getServices')->name('all.services');
            Route::get('/add', 'addService')->name('add.service');
            Route::post('/add', 'storeService')->name('store.service');
            Route::get('/edit/{id}', 'editService')->name('edit.service');
            Route::patch('/update/{id}', 'updateService')->name('update.service');
            Route::delete('/delete/{id}', 'deleteService')->name('delete.service');
        });
    });

    Route::prefix('about')->group(function(){
        Route::controller(AboutController::class)->group(function(){
            Route::get('/setting', 'getAboutPageSetting')->name('about.setting');
            Route::post('/store', 'storeAboutPageSetting')->name('store.setting');
            Route::get('/edit', 'editAboutPageSetting')->name('about.edit');
            Route::put('/edit/{id}', 'updateAboutPageSetting')->name('about.update');
        });
    });

    Route::prefix('message')->group(function(){
        Route::controller(MessageController::class)->group(function(){
            Route::get('/all', 'getAllMessages')->name('all.message');
     
        });
    });
});

require __DIR__.'/auth.php';
