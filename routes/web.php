<?php

use App\Http\Controllers\admin\PermissionManagementController;
use App\Http\Controllers\admin\RoleManagementController;
use App\Http\Controllers\admin\UserManagementController;
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

        Route::name('user-management.')->group(function () {
            Route::resource('/admin/user-management/users', UserManagementController::class);
            Route::resource('/admin/user-management/roles', RoleManagementController::class);
            Route::resource('/admin/user-management/permissions', PermissionManagementController::class);
        });

    });

});
