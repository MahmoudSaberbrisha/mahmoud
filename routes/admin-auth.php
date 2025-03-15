<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\AdminsController; // Import the AdminController
use App\Http\Controllers\Admin\RulesAndPermissionsController; // Import the RulesAndPermissionsController
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {

    //Admin Register
    Route::get('register', [RegisteredAdminController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredAdminController::class, 'store']);

//Admin Login
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
Route::get('/lang/{lang}', [LangController::class,'change'])->name('lang');

    //ADmin Dashboard
    Route::get('/', function () {
        return view('admin.masterpage');
    })->name('admin.masterpage');

        Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/dashboard', function () {
        return view('admin.masterpage');
    })->name('admin.masterpage');

        Route::get('/rules', function () {
        return view('admin.pages.rules');
    })->name('admin.pages.rules');


//Admin verify
    Route::get('/verify-email', EmailVerificationPromptController::class)
        ->name('admin.verification.notice');
    Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('admin.verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('admin.verification.send');

        //Admin logout
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

    // Admin CRUD routes
    Route::post('/admins/{admin}/assign-rule', [AdminsController::class, 'assignRule'])->name('admins.assignRule'); // Route for assigning rules
    Route::get('/admins', [AdminsController::class, 'index'])->name('admins.index');
    Route::get('/admins/create', [AdminsController::class, 'create'])->name('admins.create');
    Route::post('/admins', [AdminsController::class, 'store'])->name('admins.store');
    Route::get('/admins/{admin}', [AdminsController::class, 'show'])->name('admins.show');
    Route::get('/admins/{admin}/edit', [AdminsController::class, 'edit'])->name('admins.edit');
    Route::put('/admins/{admin}', [AdminsController::class, 'update'])->name('admins.update');
    Route::delete('/admins/{admin}', [AdminsController::class, 'destroy'])->name('admins.destroy');

    // Rules and Permissions routes
    Route::get('/rules-permissions', [RulesAndPermissionsController::class, 'index'])->name('rules.permissions.index');
    Route::get('/rules-permissions/rules', [RulesAndPermissionsController::class, 'rules'])->name('rules');
    Route::get('/rules-permissions/create', [RulesAndPermissionsController::class, 'create'])->name('rules.permissions.create');
    Route::post('/rules-permissions', [RulesAndPermissionsController::class, 'store'])->name('rules.permissions.store');
    Route::get('/rules-permissions/{rule}', [RulesAndPermissionsController::class, 'show'])->name('rules.permissions.show');
    Route::get('/rules-permissions/{rule}/edit', [RulesAndPermissionsController::class, 'edit'])->name('rules.permissions.edit');
    Route::put('/rules-permissions/{rule}', [RulesAndPermissionsController::class, 'update'])->name('rules.permissions.update');
    Route::delete('/rules-permissions/{rule}', [RulesAndPermissionsController::class, 'destroy'])->name('rules.permissions.destroy');

    //Profile Setting
    Route::get('/profile', function () {
        $admin = Auth::guard('admin')->user();
        return view('admin.pages.adminprofile', compact('admin'));
    })->name('admin.pages.adminprofile');
    Route::post('/profile/{admin?}', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{admin?}', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
});
