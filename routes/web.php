<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardcontroller;
use App\Http\Controllers\RolesController;

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminDashboardcontroller::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/roles', [RolesController::class, 'roles'])->name('admin.roles');
    Route::get('/admin/roles/add', [RolesController::class, 'add'])->name('admin.add');
    Route::get('/admin/roles/add', [RolesController::class, 'insert'])->name('admin.insert');
    Route::get('/admin/roles/edit/{id}', [RolesController::class, 'add'])->name('admin.edit');
    Route::get('/admin/roles/edit/{id}', [RolesController::class, 'insert'])->name('admin.update');
    Route::get('/admin/roles/delete/{id}', [RolesController::class, 'add'])->name('admin.delete');
});


