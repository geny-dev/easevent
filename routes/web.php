<?php

use App\Http\Controllers\admin\PermissionManagementController;
use App\Http\Controllers\admin\RoleManagementController;
use App\Http\Controllers\admin\UserManagementController;
use App\Http\Controllers\admin\SurroundingManagementController;
use App\Http\Controllers\admin\EventManagementController;
use App\Http\Controllers\admin\ItemManagementController;
use App\Http\Controllers\admin\AudienceManagementController;
use App\Http\Controllers\admin\EnvsurroundingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function () {

    Route::name('admin.')->group(function () {
        Route::get('/admin', [HomeController::class, 'index']);

        Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('dashboard');

        Route::name('env-management.')->group(function () {
            Route::resource('/admin/env-management/event', EventManagementController::class);
            Route::post('/admin/env-management/event/create', [EventManagementController::class, 'create']);
            Route::resource('/admin/env-management/surrounding', EnvsurroundingController::class);
            Route::post('/admin/env-management/surrounding/create', [EnvsurroundingController::class, 'create']);
        });

        Route::name('user-management.')->group(function () {
            Route::resource('/admin/user-management/users', UserManagementController::class);
            Route::post('/admin/user-management/users/create', [UserManagementController::class, 'create']);
            Route::resource('/admin/user-management/roles', RoleManagementController::class);
            Route::resource('/admin/user-management/permissions', PermissionManagementController::class);
            Route::resource('/admin/user-management/surrounding', SurroundingManagementController::class);
            Route::resource('/admin/user-management/audience', AudienceManagementController::class);
        });

        Route::get('/admin/item-management', [ItemManagementController::class, 'index'])->name('item-management');

    });

});
