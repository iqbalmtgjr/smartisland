<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapPemetaan;

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
    return view('user.index');
});
Route::get('/dokumentasi', function () {
    return view('user.dokumentasi');
});
Route::get('/ringkasan', function () {
    return view('user.ringkasan');
});

Route::get('/pemetaan', MapPemetaan::class);

Auth::routes();

Route::get('/maps', [App\Http\Controllers\HomeController::class, 'index'])->name('maps');
