<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\API\CompanyController;
use App\http\Controllers\API\EmployeeController;

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

Route::get('companies',[CompanyController::class,'index'])->middleware('auth')->name('companies');

Route::get('form', [CompanyController::class, 'create'])->middleware('auth');

Route::post('form', [CompanyController::class, 'store'])->middleware('auth');

Route::get('update/{id}', [CompanyController::class, 'edit'])->middleware('auth')->name('edit');

Route::put('update/{id}', [CompanyController::class, 'update'])->middleware('auth')->name('update');

Route::get('delete/{id}', [CompanyController::class, 'destroy'])->middleware('auth')->name('delete');

Route::get('details/{id}', [CompanyController::class, 'show'])->middleware('auth')->name('details');


Route::get('employees',[EmployeeController::class,'index'])->middleware('auth')->name('employees');

Route::get('employee-form', [EmployeeController::class, 'create'])->middleware('auth');

Route::post('employee-form', [EmployeeController::class, 'store'])->middleware('auth');

Route::get('employee-update/{id}', [EmployeeController::class, 'edit'])->middleware('auth')->name('edit');

Route::put('employee-update/{id}', [EmployeeController::class, 'update'])->middleware('auth')->name('employee-update');

Route::get('employee-delete/{id}', [EmployeeController::class, 'destroy'])->middleware('auth')->name('employee-delete');

Route::get('employee-details/{id}', [EmployeeController::class, 'show'])->middleware('auth')->name('employee-details');
