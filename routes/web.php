<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
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

Route::resource('/employee', EmployeeController::class);
Route::get('/login', [AdminController::class, 'showlogin'])->name('login');
Route::post('/login',  [AdminController::class, 'login'])->name('do.login');
Route::get('/employee/{employee_id}/show', [EmployeeController::class,'show'])->name('show');
