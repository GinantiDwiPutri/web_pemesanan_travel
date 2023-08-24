<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrantController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebConfigController;
use Illuminate\Support\Facades\Route;

// Route::group(['domain' => 'admin.'.env('DOMAIN')], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginProcess');
        Route::get('forgot-password', 'forgotPassword');
        Route::post('forgot-password', 'forgotPasswordProcess');
        Route::get('reset-password', 'resetPassword');
        Route::post('reset-password', 'resetPasswordProcess');
        Route::post('otp', 'otp');
        Route::get('logout', 'logout');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'dashboard');
            Route::get('dashboard', 'dashboard');
        });

        Route::controller(ProfileController::class)->group(function(){
            Route::get('profile', 'profile');
            Route::post('edit-profile', 'editProfile');
            Route::post('change-password','changePassword');
        });

        Route::controller(WebConfigController::class)->group(function () {
            Route::get('contact', 'contact');
            Route::post('contact-update', 'contactUpdate');
            Route::get('privacy-policy', 'privacyPolicy');
            Route::get('terms-and-conditions', 'termsAndConditions');
            Route::post('update-config', 'update');
        });

        Route::prefix('orders')->controller(OrderController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('destroy', 'destroy');
        });

        Route::prefix('trips')->controller(TripController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('destroy', 'destroy');
        });

        Route::prefix('routes')->controller(RouteController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('destroy', 'destroy');
        });

        Route::prefix('helps')->controller(HelpController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('destroy', 'destroy');
        });

        Route::prefix('registrants')->controller(RegistrantController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::get('detail/{id}', 'detail');
            Route::post('check', 'check');
            Route::post('accept', 'accept');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('drivers')->controller(DriverController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::get('detail/{id}', 'detail');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('block', 'block');
            Route::post('cancel-block', 'cancelBlock');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('users')->controller(UserController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('table', 'table');
            Route::get('detail/{id}', 'detail');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('block', 'block');
            Route::post('cancel-block', 'cancelBlock');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('administrators')->controller(AdminController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('json', 'json');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('testimonies')->controller(TestimonyController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('json', 'json');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('blogs')->controller(BlogController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('json', 'json');
            Route::get('create', 'create');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });
    });
// });

Route::controller(LandingPageController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('about', 'about');

//     Route::get('blogs', 'blogs');
//     Route::get('blogs/{slug}', 'blogDetail');

//     Route::get('contact', 'contact');

    Route::get('privacy-policy', 'privacyPolicy');
    Route::get('terms-and-conditions', 'termsAndConditions');
});
