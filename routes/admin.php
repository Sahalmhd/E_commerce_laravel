<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProductController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::name('admin.')->group(function () {
    // Admin login page route
    Route::get('admin/login', [LoginController::class, 'login'])->name('login');

    // Admin do-login action route
    Route::post('admin/do-login', [LoginController::class, 'doLogin'])->name('doLogin');

    // logout


    //dashboard
    Route::middleware('auth:admin')->group(function () {
        Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('admin/logout', [LoginController::class, 'logout'])->name('logout');
    
    
    
        Route::name('product.')->prefix('admin/products')->group(function () {
            Route::get('/', [ProductController::class, 'list'])->name('list');
            Route::get('create', [ProductController::class, 'create'])->name('create');
            Route::post('save', [ProductController::class, 'save'])->name('save');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
            Route::post('updat', [ProductController::class, 'update'])->name('update');
    
            Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');
    
    
        });
    });

   


});
