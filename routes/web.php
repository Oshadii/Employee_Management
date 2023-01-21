<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyDetailsController;
use App\Http\Controllers\EmployeeDetailsController;



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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//users and admin
Route::get('/adminpage', [App\Http\Controllers\AdminController::class, 'index'])->name('adminpage');
Route::get('/userpage', [App\Http\Controllers\UserController::class, 'index'])->name('userpage');

Route::resource('/company',CompanyController::class);
Route::resource('/employee',EmployeeController::class);
Route::resource('/companyDetails',CompanyDetailsController::class);
Route::resource('/employeeDetails',EmployeeDetailsController::class);
