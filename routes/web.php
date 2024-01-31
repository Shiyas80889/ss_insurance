<?php

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

Route::get('/', function () { return view('sign-in'); });
Route::get('dashboard', [App\Http\Controllers\LoginController::class,'index'])->name('dashboard');
Route::get('insurance', [App\Http\Controllers\InsuranceController::class,'index'])->name('insurance');
Route::get('create-insurance', [App\Http\Controllers\InsuranceController::class,'create'])->name('create-insurance');
Route::post('login', [App\Http\Controllers\LoginController::class,'login'])->name('login');;
Route::post('submit-insurance', [App\Http\Controllers\InsuranceController::class,'store'])->name('submit-insurance');

