<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});






Auth::routes();
Route::prefix('/admin')->namespace('Admin')->group(function(){
    //All the admin routes will be defined here...
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/add-department', [App\Http\Controllers\Admin\AdminController::class, 'addDept'])->name('add-department');
    Route::get('/department', [App\Http\Controllers\Admin\AdminController::class, 'showDept'])->name('department');
    Route::post('/save-dept', [App\Http\Controllers\Admin\AdminController::class, 'saveDept'])->name('save-dept');
    Route::get('/employee', [App\Http\Controllers\Admin\AdminController::class, 'showEmployee'])->name('employee');
    Route::get('/add-employee', [App\Http\Controllers\Auth\RegisterController::class, 'getDetails'])->name('add-employee');


    // Route::post('/create', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
        Route::namespace('Auth')->group(function(){
            
    // Shipment
    Route::get('/shipment', [App\Http\Controllers\Admin\ShipmentController::class, 'index'])->name('manage.shipment');
    Route::get('/shipment/create', [App\Http\Controllers\Admin\ShipmentController::class, 'create'])->name('shipment.assessment');
    Route::post('/shipment/store', [App\Http\Controllers\Admin\ShipmentController::class, 'store'])->name('store.shipment');

    
    //Login Routes
    Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin-login-form');
    Route::post('/admin-login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin-login');
    Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin-logout');

  });
});


