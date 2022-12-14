<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/lead', [\App\Http\Controllers\LeadsController::class, 'create'])->name('leads.create');
Route::post('/lead', [\App\Http\Controllers\LeadsController::class, 'store'])->name('leads.store');
Route::resource('payments', \App\Http\Controllers\PaymentsController::class);
