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
Route::get('sign-in', function () { return view('sign-in'); })->name('sign-in');
Route::get('dashboard', [App\Http\Controllers\LoginController::class,'index'])->name('dashboard');
Route::get('insurance', [App\Http\Controllers\InsuranceController::class,'index'])->name('insurance');
Route::get('create-insurance', [App\Http\Controllers\InsuranceController::class,'create'])->name('create-insurance');
Route::post('login', [App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::get('logout', [App\Http\Controllers\LoginController::class,'logout'])->name('logout');
Route::post('submit-insurance', [App\Http\Controllers\InsuranceController::class,'store'])->name('submit-insurance');
Route::get('/edit-insurance/{id}', [App\Http\Controllers\InsuranceController::class,'edit'])->name('edit-insurance');
Route::post('/upload', [App\Http\Controllers\FileController::class,'upload'])->name('upload.file');
Route::get('company', [App\Http\Controllers\CompanyController::class,'index'])->name('company');
Route::post('submit-company', [App\Http\Controllers\CompanyController::class,'store'])->name('submit-company');
Route::delete('/delete-company/{id}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('delete-company');
Route::get('segment', [App\Http\Controllers\SegmentController::class,'index'])->name('segment');
Route::post('submit-segment', [App\Http\Controllers\SegmentController::class,'store'])->name('submit-segment');
Route::delete('/delete-segment/{id}', [App\Http\Controllers\SegmentController::class, 'destroy'])->name('delete-segment');
Route::get('coverage', [App\Http\Controllers\CoverageController::class,'index'])->name('coverage');
Route::post('submit-coverage', [App\Http\Controllers\CoverageController::class,'store'])->name('submit-coverage');
Route::delete('/delete-coverage/{id}', [App\Http\Controllers\CoverageController::class, 'destroy'])->name('delete-coverage');
Route::get('referance', [App\Http\Controllers\ReferanceController::class,'index'])->name('referance');
Route::post('submit-referance', [App\Http\Controllers\ReferanceController::class,'store'])->name('submit-referance');
Route::delete('/delete-referance/{id}', [App\Http\Controllers\ReferanceController::class, 'destroy'])->name('delete-referance');
Route::get('issuer', [App\Http\Controllers\IssuerController::class,'index'])->name('issuer');
Route::post('submit-issuer', [App\Http\Controllers\IssuerController::class,'store'])->name('submit-issuer');
Route::delete('/delete-issuer/{id}', [App\Http\Controllers\IssuerController::class, 'destroy'])->name('delete-issuer');
Route::get('paymentmode', [App\Http\Controllers\PaymentmodeController::class,'index'])->name('paymentmode');
Route::post('submit-paymentmode', [App\Http\Controllers\PaymentmodeController::class,'store'])->name('submit-paymentmode');
Route::delete('/delete-paymentmode/{id}', [App\Http\Controllers\PaymentmodeController::class, 'destroy'])->name('delete-paymentmode');

