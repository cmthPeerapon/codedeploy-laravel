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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');
