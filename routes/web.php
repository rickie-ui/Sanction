<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Claim\RequisitionController;

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
Route::get('/', function(){
    return view('index');
})->name('index')->middleware('guest');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/register', [UserController::class, 'store']);

//Employee claims routes
Route::get('/employee/claim', [RequisitionController::class, 'index'])->name('claim');

Route::get('/employee/claim/request', [RequisitionController::class, 'edit'])->name('order');
Route::post('/employee/claim/request', [RequisitionController::class, 'store']);


///add employees
Route::get('/manage/add', [EmployeeController::class, 'index'])->name('employee');
Route::post('/manage/add', [EmployeeController::class, 'store']);

//show manage employees
Route::get('/employee', [EmployeeController::class, 'edit'])->name('manage');

//employee report
Route::get('/report', [ReportController::class, 'index'])->name('report');



